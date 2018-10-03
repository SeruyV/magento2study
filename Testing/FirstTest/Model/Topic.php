<?php
/**
 * Created by PhpStorm.
 * User: serhii
 * Date: 03.10.18
 * Time: 12:08
 */

namespace Testing\FirstTest\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;
//use Testing\FirstTest\Model\Api\Data\TopicInterface;

class Topic extends AbstractModel implements
    IdentityInterface
//,
//    TopicInterface
{
    const CACHE_TAG = 'testing_firsttest_topic';
    protected function _construct()
    {
        $this->_init('Testing\FirstTest\Model\ResourceModel\Topic');
    }
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}