<?php

namespace Ahmobile\Weather\Block;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class Weather extends Template implements BlockInterface {

    protected $_template = "weather.phtml";

    protected function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
}