<?php


namespace Mastering\LabModule\Setup;


use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class UpgradeData implements \Magento\Framework\Setup\UpgradeDataInterface
{

  /**
   * @inheritDoc
   */
  public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
  {
    $setup->startSetup();

    if(version_compare($context->getVersion(), '1.0.1', '<')) {
      $setup->getConnection()->update(
        $setup->getTable('mastering_laboratory'),
        [
          'description' => 'Default description'
        ],
        $setup->getConnection()->quoteInto('id = ?', 1)
      );
    }


    $setup->endSetup();
  }
}