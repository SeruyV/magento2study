<?php
/**
 * Created by PhpStorm.
 * User: HomePC
 * Date: 02.10.2018
 * Time: 20:34
 */

namespace Testing\FirstTest\Model\ResourceModel;


class Department extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('testing_firsttest_department','entity_id');
    }
}