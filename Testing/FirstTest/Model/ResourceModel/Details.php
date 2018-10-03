<?php
/**
 * Created by PhpStorm.
 * User: HomePC
 * Date: 02.10.2018
 * Time: 21:59
 */

namespace Testing\FirstTest\Model\ResourceModel;


class Details extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('testing_firsttest_details','details_id');
    }
}