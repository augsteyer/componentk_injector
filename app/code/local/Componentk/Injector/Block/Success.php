<?php
/**
 * @company ComponentK
 * @author Aug Steyer <augsteyer@gmail.com>
 * @date 11/06/14
 * Class Componentk_Injector_Block_Success
 */
class Componentk_Injector_Block_Success extends Mage_Core_Block_Template{

    public function getSuccessBeforeBodyEnd(){
        /** @var Componentk_Injector_Helper_Data $helper */
        $helper = $this->helper('injector');
        if (!$helper->isEnabled()) return false;

        return $helper->getSuccessBeforeBody();
    }

    public function getSuccessBeforeHeadEnd(){
        /** @var Componentk_Injector_Helper_Data $helper */
        $helper = $this->helper('injector');
        if (!$helper->isEnabled()) return false;

        return $helper->getSuccessBeforeHead();
    }
}