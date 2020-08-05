<?php

namespace Mastering\LabModule\Cron;

use Mastering\LabModule\Model\ItemFactory;

class AddItem
{
  private $itemFactory;

  public function __construct(ItemFactory $itemFactory)
  {
    $this->itemFactory = $itemFactory;
  }

  public function  execute()
  {
    $this->itemFactory->create()
      ->setName('Scheduled Item')
      ->setDescription('Create at ' . time())
      ->save();
  }
}