<?php
class ExtensionsMall_EmallTwitter_Model_System_Config_Source_Load_Options {

	public function toOptionArray() {
		return array(
			array('value' => 1, 'label'=>Mage::helper('emalltwitter')->__('Left')),
			array('value' => 2, 'label'=>Mage::helper('emalltwitter')->__('Right')),
		);
	}
 }
 
 class ExtensionsMall_EmallTwitter_Model_System_Config_Source_Load_Chrome {

	public function toOptionArray() {
		return array(
            array('value' => ' ', 'label'=>Mage::helper('emalltwitter')->__('None')),
			array('value' => noheader, 'label'=>Mage::helper('emalltwitter')->__('No header')),
			array('value' => nofooter, 'label'=>Mage::helper('emalltwitter')->__('No footer')),
            array('value' => noborders, 'label'=>Mage::helper('emalltwitter')->__('No borders')),
			array('value' => noscrollbar, 'label'=>Mage::helper('emalltwitter')->__('No scrollbar')),
            array('value' => transparent, 'label'=>Mage::helper('emalltwitter')->__('Transparent background')),
   );
	}
 }
 
 class ExtensionsMall_EmallTwitter_Model_System_Config_Source_Load_Theme {

	public function toOptionArray() {
		return array(
			array('value' => light, 'label'=>Mage::helper('emalltwitter')->__('Light')),
			array('value' => dark, 'label'=>Mage::helper('emalltwitter')->__('Dark')),
		);
	}
 }