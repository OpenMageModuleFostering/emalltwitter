<?php 
	class SMDesign_SMDTwitter_Block_twitter extends Mage_Core_Block_Template {
		function getSomething() {
			  return Mage::getModel('smdtwitter/salute')->getName();
		}	
		public function getTwitterConfig() {
			$twitterConfig = array();
			$twitterConfig['enabled'] = Mage::getStoreConfig('smdesign_smdtwitter/twitter/enabled');
			$twitterConfig['twitter_feed'] = Mage::getStoreConfig('smdesign_smdtwitter/twitter/twitter_feed');
			$twitterConfig['twitter_feed_number'] = Mage::getStoreConfig('smdesign_smdtwitter/twitter/twitter_feed_number');
			$twitterConfig['twitter_box_side'] = Mage::getStoreConfig('smdesign_smdtwitter/twitter/twitter_box_side');
			$twitterConfig['twitter_box_top_position'] = Mage::getStoreConfig('smdesign_smdtwitter/twitter/twitter_box_top_position');
			$twitterConfig['twitter_box_width'] = Mage::getStoreConfig('smdesign_smdtwitter/twitter/twitter_box_width');
			$twitterConfig['twitter_box_height'] = Mage::getStoreConfig('smdesign_smdtwitter/twitter/twitter_box_height');
			$twitterConfig['twitter_box_background'] = Mage::getStoreConfig('smdesign_smdtwitter/twitter/twitter_box_background');
			$twitterConfig['twitter_box_color'] = Mage::getStoreConfig('smdesign_smdtwitter/twitter/twitter_box_color');
			$twitterConfig['twitter_tweets_background'] = Mage::getStoreConfig('smdesign_smdtwitter/twitter/twitter_tweets_background');
			$twitterConfig['twitter_tweets_color'] = Mage::getStoreConfig('smdesign_smdtwitter/twitter/twitter_tweets_color');
			$twitterConfig['twitter_tweets_link_color'] = Mage::getStoreConfig('smdesign_smdtwitter/twitter/twitter_tweets_link_color');
			return $twitterConfig;
		}
	}
?>