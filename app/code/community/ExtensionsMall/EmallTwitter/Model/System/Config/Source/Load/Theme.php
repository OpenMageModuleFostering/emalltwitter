<?php

class ExtensionsMall_EmallTwitter_Model_System_Config_Source_Load_Theme {

    public function toOptionArray() {
        return array(
            array('value' => 'light', 'label' => Mage::helper('emalltwitter')->__('Light')),
            array('value' => 'dark', 'label' => Mage::helper('emalltwitter')->__('Dark')),
        );
    }

}
