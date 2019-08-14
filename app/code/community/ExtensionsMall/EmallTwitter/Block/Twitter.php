<?php 
	class ExtensionsMall_EmallTwitter_Block_twitter extends Mage_Core_Block_Template {
		public function getTwitterConfig() {
			$twitterConfig = array();
			$twitterConfig['enabled'] = Mage::getStoreConfig('extensionsmall_emalltwitter/twitter/enabled');
			$twitterConfig['twitter_feed'] = Mage::getStoreConfig('extensionsmall_emalltwitter/twitter/twitter_feed');
            $twitterConfig['twitter_api'] = Mage::getStoreConfig('extensionsmall_emalltwitter/twitter/twitter_api');
			$twitterConfig['twitter_feed_number'] = Mage::getStoreConfig('extensionsmall_emalltwitter/twitter/twitter_feed_number');
			$twitterConfig['twitter_box_side'] = Mage::getStoreConfig('extensionsmall_emalltwitter/twitter/twitter_box_side');
			$twitterConfig['twitter_box_top_position'] = Mage::getStoreConfig('extensionsmall_emalltwitter/twitter/twitter_box_top_position');
			$twitterConfig['twitter_box_width'] = Mage::getStoreConfig('extensionsmall_emalltwitter/twitter/twitter_box_width');
			$twitterConfig['twitter_box_height'] = Mage::getStoreConfig('extensionsmall_emalltwitter/twitter/twitter_box_height');
			$twitterConfig['twitter_box_background'] = Mage::getStoreConfig('extensionsmall_emalltwitter/twitter/twitter_box_background');
			$twitterConfig['twitter_box_color'] = Mage::getStoreConfig('extensionsmall_emalltwitter/twitter/twitter_box_color');
			$twitterConfig['twitter_tweets_background'] = Mage::getStoreConfig('extensionsmall_emalltwitter/twitter/twitter_tweets_background');
			$twitterConfig['twitter_tweets_color'] = Mage::getStoreConfig('extensionsmall_emalltwitter/twitter/twitter_tweets_color');
			$twitterConfig['twitter_tweets_link_color'] = Mage::getStoreConfig('extensionsmall_emalltwitter/twitter/twitter_tweets_link_color');
            $twitterConfig['twitter_chrome_values'] = Mage::getStoreConfig('extensionsmall_emalltwitter/twitter/twitter_chrome_values');
            $twitterConfig['twitter_theme'] = Mage::getStoreConfig('extensionsmall_emalltwitter/twitter/twitter_theme');
			return $twitterConfig;
		}
	}
?>