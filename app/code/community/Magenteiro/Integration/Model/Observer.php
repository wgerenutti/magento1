<?php
class Magenteiro_Integration_Model_Observer{
    public function execute($observer){
       echo "123";
       $model = Mage::getMOdel('magenteiro_integration/queue');
       $content = $observer->getOrder()->debug();
       $model->setData(array(
           'event'=> 'sales_order_place_after',
           'content'=> serialize($content),
           'integration_type'=> 'order'
       ));
       $model->save();
    }
}