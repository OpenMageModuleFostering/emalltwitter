<?php

class ExtensionsMall_EmallTwitter_Block_twitter extends Mage_Core_Block_Template {

    public function isEnabled() {
        return Mage::getStoreConfig('extensionsmall_emalltwitter/twitter/enabled');
    }

    public function getFeed() {
        return Mage::getStoreConfig('extensionsmall_emalltwitter/twitter/twitter_feed');
    }

    public function getWidgetId() {
        return Mage::getStoreConfig('extensionsmall_emalltwitter/twitter/twitter_widget_id');
    }

    public function getWidth() {
        return Mage::getStoreConfig('extensionsmall_emalltwitter/twitter/twitter_width');
    }

    public function getHeight() {
        return Mage::getStoreConfig('extensionsmall_emalltwitter/twitter/twitter_height');
    }

    public function getTweetLimit() {
        return Mage::getStoreConfig('extensionsmall_emalltwitter/twitter/twitter_tweet_limit');
    }

    public function getTheme() {
        return Mage::getStoreConfig('extensionsmall_emalltwitter/twitter/twitter_theme');
    }

    public function getLinkColor() {
        return Mage::getStoreConfig('extensionsmall_emalltwitter/twitter/twitter_tweets_link_color');
    }

    public function getChrome() {
        return str_replace(',', ' ', Mage::getStoreConfig('extensionsmall_emalltwitter/twitter/twitter_chrome'));
    }

    /*      Get Style Settings      */

    public function getBoxSide() {
        return Mage::getStoreConfig('extensionsmall_emalltwitter/twitter_style/twitter_box_side');
    }

    public function getBoxTopPosition() {
        return Mage::getStoreConfig('extensionsmall_emalltwitter/twitter_style/twitter_box_top_position');
    }

    public function getBoxWidth() {
        return Mage::getStoreConfig('extensionsmall_emalltwitter/twitter_style/twitter_box_width');
    }

    public function getBoxHeight() {
        return Mage::getStoreConfig('extensionsmall_emalltwitter/twitter_style/twitter_box_height');
    }

    public function getBoxBackground() {
        return Mage::getStoreConfig('extensionsmall_emalltwitter/twitter_style/twitter_box_background');
    }

}
