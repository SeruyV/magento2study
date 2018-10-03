<?php
/**
 * Created by PhpStorm.
 * User: serhii
 * Date: 03.10.18
 * Time: 11:54
 */

namespace Testing\FirstTest\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
 public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
 {
     $setup->startSetup();

     if (version_compare($context->getVersion(), '0.0.2', '<')) {

         $table = $setup->getConnection()->newTable($setup->getTable('testing_firsttest_topic'))
             ->addColumn(
                 'topic_id',
                 \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
                 null,
                 ['identity' => true, 'nullable' => false, 'primary' => true, 'unsigned' =>
                     true],
                 'Topic ID'
             )->addColumn(
                 'title',
                 \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                 255,
                 ['nullable' => false],
                 'Topic Title'
             )->addColumn(
                 'content',
                 \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                 '2M',
                 [],
                 'Topic Content'
             )->addColumn(
                 'creation_time',
                 \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                 null,
                 ['nullable' => false, 'default' =>
                     \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
                 'Topic Creation Time'
             )->setComment(
                 'Mageplaza Topic Table'
             );
         $setup->getConnection()->createTable($table);
     }
 }
}