<?php
/**
 * Created by PhpStorm.
 * User: HomePC
 * Date: 02.10.2018
 * Time: 20:42
 */

namespace Testing\FirstTest\Model\ResourceModel\Department;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Testing\FirstTest\Model\Department',
               'Testing\FirstTest\Model\ResourceModel\Department');
    }
}