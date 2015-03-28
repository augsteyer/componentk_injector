# Config.
### Checkout Success Page
1. Enable - if enabled it will output whatever you put into boxes below on the checkout success page
2. Before Head - outputs anything you put here before the ``</head>`` tag
3. Before Body - outputs anything you put here before the ``</body>`` tag

You can use order variables within the content sections. Example add ``{{customer_id}}`` in order for it to print out the customer ID on the success page. See the full list of Order Variables available below. You can use a comma and a number in the variable to clean up prices to the provided amount of decimals. Example ``{{grand_total, 2}}`` will output 12.22 instead of 12.2200

# Example Google Conversion script

```javascript
<script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 123456789;
        var google_conversion_language = "en";
        var google_conversion_format = "2";
        var google_conversion_color = "ffffff";
        var google_conversion_label = "XXXXXXXXXXX";
        var google_conversion_value = {{grand_total,2}};
        var google_conversion_currency = "{{order_currency_code}}";
        var google_remarketing_only = false;
        /* ]]> */
</script>
```

# Sucess Page: order variables & their output
```
[entity_id] => 57
[state] => complete
[status] => complete
[coupon_code] => 
[protect_code] => 335b3c
[shipping_description] => United States Postal Service - Priority Mail
[is_virtual] => 0
[store_id] => 1
[customer_id] => 4949
[base_discount_amount] => 0.0000
[base_discount_canceled] => 
[base_discount_invoiced] => 0.0000
[base_discount_refunded] => 
[base_grand_total] => 43.9300
[base_shipping_amount] => 8.9500
[base_shipping_canceled] => 
[base_shipping_invoiced] => 8.9500
[base_shipping_refunded] => 
[base_shipping_tax_amount] => 0.0000
[base_shipping_tax_refunded] => 
[base_subtotal] => 34.9800
[base_subtotal_canceled] => 
[base_subtotal_invoiced] => 34.9800
[base_subtotal_refunded] => 
[base_tax_amount] => 0.0000
[base_tax_canceled] => 
[base_tax_invoiced] => 0.0000
[base_tax_refunded] => 
[base_to_global_rate] => 1.0000
[base_to_order_rate] => 1.0000
[base_total_canceled] => 
[base_total_invoiced] => 43.9300
[base_total_invoiced_cost] => 0.0000
[base_total_offline_refunded] => 
[base_total_online_refunded] => 
[base_total_paid] => 43.9300
[base_total_qty_ordered] => 
[base_total_refunded] => 
[discount_amount] => 0.0000
[discount_canceled] => 
[discount_invoiced] => 0.0000
[discount_refunded] => 
[grand_total] => 43.9300
[shipping_amount] => 8.9500
[shipping_canceled] => 
[shipping_invoiced] => 8.9500
[shipping_refunded] => 
[shipping_tax_amount] => 0.0000
[shipping_tax_refunded] => 
[store_to_base_rate] => 1.0000
[store_to_order_rate] => 1.0000
[subtotal] => 34.9800
[subtotal_canceled] => 
[subtotal_invoiced] => 34.9800
[subtotal_refunded] => 
[tax_amount] => 0.0000
[tax_canceled] => 
[tax_invoiced] => 0.0000
[tax_refunded] => 
[total_canceled] => 
[total_invoiced] => 43.9300
[total_offline_refunded] => 
[total_online_refunded] => 
[total_paid] => 43.9300
[total_qty_ordered] => 2.0000
[total_refunded] => 
[can_ship_partially] => 
[can_ship_partially_item] => 
[customer_is_guest] => 0
[customer_note_notify] => 1
[billing_address_id] => 112
[customer_group_id] => 1
[edit_increment] => 
[email_sent] => 1
[forced_shipment_with_invoice] => 
[payment_auth_expiration] => 
[quote_address_id] => 
[quote_id] => 347
[shipping_address_id] => 113
[adjustment_negative] => 
[adjustment_positive] => 
[base_adjustment_negative] => 
[base_adjustment_positive] => 
[base_shipping_discount_amount] => 0.0000
[base_subtotal_incl_tax] => 34.9800
[base_total_due] => 0.0000
[payment_authorization_amount] => 
[shipping_discount_amount] => 0.0000
[subtotal_incl_tax] => 34.9800
[total_due] => 0.0000
[weight] => 0.2000
[customer_dob] => 
[increment_id] => 100000054
[applied_rule_ids] => 
[base_currency_code] => USD
[customer_email] => test@componentk.com
[customer_firstname] => C.K.
[customer_lastname] => tester
[customer_middlename] => 
[customer_prefix] => 
[customer_suffix] => 
[customer_taxvat] => 
[discount_description] => 
[ext_customer_id] => 
[ext_order_id] => 
[global_currency_code] => USD
[hold_before_state] => 
[hold_before_status] => 
[order_currency_code] => USD
[original_increment_id] => 
[relation_child_id] => 
[relation_child_real_id] => 
[relation_parent_id] => 
[relation_parent_real_id] => 
[remote_ip] => 98.174.236.213
[shipping_method] => usps_Priority Mail
[store_currency_code] => USD
[store_name] => SilverTribe.com
Main Website Store
English
[x_forwarded_for] => 
[customer_note] => 
[created_at] => 2013-04-20 04:12:53
[updated_at] => 2013-04-23 00:12:49
[total_item_count] => 2
[customer_gender] => 
[hidden_tax_amount] => 0.0000
[base_hidden_tax_amount] => 0.0000
[shipping_hidden_tax_amount] => 0.0000
[base_shipping_hidden_tax_amnt] => 0.0000
[hidden_tax_invoiced] => 0.0000
[base_hidden_tax_invoiced] => 0.0000
[hidden_tax_refunded] => 
[base_hidden_tax_refunded] => 
[shipping_incl_tax] => 8.9500
[base_shipping_incl_tax] => 8.9500
[coupon_rule_name] => 
[paypal_ipn_customer_notified] => 0
[gift_message_id] => 
[customer_credit_amount] => 0.0000
[base_customer_credit_amount] => 0.0000
[customer_credit_invoiced] => 
[base_customer_credit_invoiced] => 
[customer_credit_refunded] => 
[base_customer_credit_refunded] => 
[payment_authorization_expiration] => 
[forced_do_shipment_with_invoice] => 
[base_shipping_hidden_tax_amount] => 0.0000
```
