<?php

namespace Testing\FirstTest\Model\ResourceModel\Topic;

class Collection extends
    \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Testing\FirstTest\Model\Topic',
            'Testing\FirstTest\Model\ResourceModel\Topic');
    }
}