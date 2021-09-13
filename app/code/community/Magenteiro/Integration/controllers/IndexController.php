<?php
class Magenteiro_Integration_IndexController extends Mage_Core_Controller_Front_Action{
    public function indexAction(){
        $model = Mage::getModel('magenteiro_integration/queue');
        $model->load(1);
        echo "Index";
    }

    public function insertAction(){
        $model = Mage::getModel('magenteiro_integration/queue');
        $model->setEvent('teste');
        $model->setIntegrationtype('log');
        $model->setContent('hello');
        $model->save();
        echo "Salvou";
    }

    public function editAction(){
        $model = Mage::getModel('magenteiro_integration/queue');
        $model->load(1);
        $model->setContent('world');
        $model->save();
        echo "\n Atualizou";
    }

    public function deleteAction(){
        $model = Mage::getModel('magenteiro_integration/queue');
        $model->load(1);
        $model->delete();
        echo "\n Apagou";
    }
    
    public function showLogsAction(){
        $logs = Mage::getModel('magenteiro_integration/queue')->getCollection();

        echo "Existem ". $logs->getSize() . " registros na tabela:";
        foreach($logs as $log){
            
            echo '<h2>Conteudo: '.$log->getContent().'</h2>';
            echo '<h1>Evento: '.$log->getEvent().'</h2>';
        }
    }
}