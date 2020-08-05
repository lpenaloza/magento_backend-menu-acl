<?php

namespace Mastering\LabModule\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
  public function execute()
  {
    /** @var @var \Magento\Framework\Controller\Result\Raw $result */
    $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
    $result->setContents('Hello Admins!');
    return $result;
  }
}