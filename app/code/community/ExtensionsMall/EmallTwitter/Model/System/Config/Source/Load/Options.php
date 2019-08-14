<?php

class ExtensionsMall_EmallTwitter_Model_System_Config_Source_Load_Options {

    public function toOptionArray() {
        return array(
            array('value' => 'left', 'label' => Mage::helper('emalltwitter')->__('Left')),
            array('value' => 'right', 'label' => Mage::helper('emalltwitter')->__('Right')),
        );
    }

}
