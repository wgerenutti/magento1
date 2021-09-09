<?php
class AprendaMagento_AddToCart_ProductController extends Mage_Core_Controller_Front_Action{
    public function addAction(){
        $sku = $this->getRequest()->getParam('sku');
        
        $product = Mage::getModel('catalog/product')->loadByAttribute('sku', $sku);
        $cart = Mage::getSingleton('checkout/cart')->init();
        $cart->addProduct($product->getId());
        $cart->save();
        
        $this->_redirect('checkout/cart');

        $helper = Mage::helper('aprendamagento_meuprimeirohelper');
        $helper->logToFile("SKU do produto adicionado ao carrinho: " . $sku);
        $helper->logProductPrice("Preço do produto: ". $product->getPrice());   
    }
}
