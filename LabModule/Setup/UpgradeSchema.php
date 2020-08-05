<?php


namespace Mastering\LabModule\Setup;

use Magento\Framework\DB\Ddl\Table;
use \Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;


class UpgradeSchema implements UpgradeSchemaInterface
{

  /**
   * @inheritDoc
   */
  public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
  {
    $setup->startSetup();
    if (version_compare($context->getVersion(), '1.0.1', '<')) {
      $setup->getConnection()->addColumn(
        $setup->getTable('mastering_laboratory'),
        'description',
        [
          'type' => Table::TYPE_TEXT,
          'nullable' => true,
          'comment' => 'Item Description'
        ]
      );
    }

    $setup->endSetup();
  }
}