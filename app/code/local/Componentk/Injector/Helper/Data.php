<?php

/**
 * @company Componentk
 * @author Aug Steyer <augsteyer@gmail.com>
 * @date 11/06/14
 * Class Componentk_Injector_Helper_Data
 */
class Componentk_Injector_Helper_Data extends Mage_Core_Helper_Abstract{

    const XML_SUCCESS_ENABLED     = 'injector/success_page/enabled';
    const XML_SUCCESS_BEFORE_HEAD = 'injector/success_page/before_head';
    const XML_SUCCESS_BEFORE_BODY = 'injector/success_page/before_body';

    public function isEnabled(){
        return (bool) mage::getStoreConfig(self::XML_SUCCESS_ENABLED);
    }

    public function getSuccessBeforeHead(){
	    return $this->parseOrderTags(
		    mage::getStoreConfig(self::XML_SUCCESS_BEFORE_HEAD)
	    );
    }

    public function getSuccessBeforeBody(){
	    return $this->parseOrderTags(
		    mage::getStoreConfig(self::XML_SUCCESS_BEFORE_BODY)
	    );
    }

	/**
	 * Replaces order variables
	 * @param string $content - string
	 * @return string
	 */
	protected function parseOrderTags($content){
		$order_id = Mage::getSingleton('checkout/session')->getLastOrderId();
		$order = Mage::getModel('sales/order')->load($order_id);
		return $this->parseTags($order, $content);
	}

	/**
	 * @param $object - magento object with data
	 * @param $content - content to parse and replace
	 * @return string - returns unchanged if no matches
	 */
	protected function parseTags($object, $content){
		if($object->getData()){
			$content = preg_replace_callback(
				// Matches parts to be replaced: '{{base_currency}}'
				'/(\{\{.*?\}\})/',
				function($matches) use ($object) {
					// Remove {{ }} brackets from the match
					$var = trim($matches[1],"{{}}");
					//if has comma, consider to be a float
					if(strpos($var, ',') !== false){
						$list = explode(',',$var);
						return number_format($object->getData($list[0]), $list[1]);
					}
					// get the data from Mage object e.g. 'base_currency'
					return $object->getData($var) ? $object->getData($var) : 'Unknown Variable';
				},
				$content
			);
		}
		return $content;
	}
}
	 