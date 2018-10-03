<?php
/**
 * Created by PhpStorm.
 * User: HomePC
 * Date: 02.10.2018
 * Time: 20:26
 */

namespace Testing\FirstTest\Model;


class Department extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('\Testing\FirstTest\Model\ResourceModel\Department');
    }
}