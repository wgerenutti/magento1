<?php
class AprendaMagento_AddToCart_Helper_Data extends Mage_Core_Helper_Abstract{
    public function logToFile($msg){
        Mage::log($msg, Zend_Log::INFO, 'addtocart.log', true);
    }
    
    public function logProductPrice($msg){
        Mage::log($msg, Zend_Log::INFO, 'productpriceadd.log', true);
    }
}