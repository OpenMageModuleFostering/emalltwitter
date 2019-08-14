<?php
class SMDesign_SMDTwitter_Model_System_Config_Source_Load_Options {

	public function toOptionArray() {
		return array(
			array('value' => 1, 'label'=>Mage::helper('smdtwitter')->__('Left')),
			array('value' => 2, 'label'=>Mage::helper('smdtwitter')->__('Right')),
		);
	}
}