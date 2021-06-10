<?php

namespace Ahmobile\Exrate\Block;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class Exrate extends Template implements BlockInterface {

    protected $_template = "exrate.phtml";

    protected function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
}