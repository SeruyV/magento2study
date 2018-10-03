<?php
/**
 * Created by PhpStorm.
 * User: HomePC
 * Date: 02.10.2018
 * Time: 22:05
 */

namespace Testing\FirstTest\Model\ResourceModel\Details;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
 protected function _construct()
 {
     $this->_init('Testing\FirstTest\Model\Details',
         'Testing\FirstTest\Model\ResourceModel\Details');
 }
}