<?php
/**
 * Created by PhpStorm.
 * User: serhii
 * Date: 03.10.18
 * Time: 12:29
 */

namespace Testing\FirstTest\Block;


use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Testing\FirstTest\Model\TopicFactory;

class Topic extends Template
{
    protected $_topicFactory;
    public $collection;


    public function __construct(Context $context, TopicFactory $topicFactory)
    {
        $this->_topicFactory = $topicFactory;
        parent::__construct($context);
    }

    public function _prepareLayout()
    {
        $topic = $this->_topicFactory->create();
        $this->collection = $topic->getCollection();
    }
}