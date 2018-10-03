<?php
/**
 * Created by PhpStorm.
 * User: HomePC
 * Date: 02.10.2018
 * Time: 21:58
 */

namespace Testing\FirstTest\Model;


class Details extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('\Testing\FirstTest\Model\ResourceModel\Details');
    }
}