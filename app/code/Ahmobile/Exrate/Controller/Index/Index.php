<?php

namespace Ahmobile\Exrate\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\view\Result\PageFactory;

class Index extends \Magento\Framework\App\Action\Action {
    protected $pageFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
    }

    public function execute()
    {
        return $this->pageFactory->create();
    }
}