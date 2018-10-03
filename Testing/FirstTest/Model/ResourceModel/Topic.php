<?php

namespace Testing\FirstTest\Model\ResourceModel;


class Topic extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('testing_firsttest_topic', 'topic_id');
    }
}