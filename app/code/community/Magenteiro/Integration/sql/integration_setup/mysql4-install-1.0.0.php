<?php
/** @var Mage_Core_Model_Resource_Setup $installer */
$installer = $this;

$installer->startSetup();

$tableName = $installer->getTable('magenteiro_integration/queue');

$sql = "CREATE TABLE {$tableName}2 (
      `log_id` int(8) NOT NULL AUTO_INCREMENT,
      `event` varchar(100) DEFAULT NULL COMMENT 'Magento Event',
      `integration_type` varchar(100) DEFAULT NULL,
      `content` text,
      `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
      `integrated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
      `debug_info` text,
      PRIMARY KEY (`log_id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COMMENT='Integration Queues'";
$installer->run($sql);

$installer->endSetup();