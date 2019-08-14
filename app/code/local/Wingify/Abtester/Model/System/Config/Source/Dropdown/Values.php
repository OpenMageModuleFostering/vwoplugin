<?php
/**
 * Used in creating options for Revenue Track config value selection
 *
 */
class Wingify_Abtester_Model_System_Config_Source_Dropdown_Values
{

    public function toOptionArray()
    {
        return array(
            array(
                'value' => 'key1',
                'label' => 'Grand Total',
            ),
            array(
                'value' => 'key2',
                'label' => 'Grand Total less Shipping Amount',
            ),
            array(
                'value' => 'key3',
                'label' => 'Subtotal before Shipping and Tax',
            ),

        );
    }

}
