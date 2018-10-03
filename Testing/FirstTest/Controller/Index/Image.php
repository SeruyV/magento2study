<?php

namespace Testing\FirstTest\Controller\Index;

class Image extends \Magento\Framework\App\Action\Action
{

    protected $helperData;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Testing\FirstTest\Helper\Data $helperData

    )
    {
        $this->helperData = $helperData;
        return parent::__construct($context);
    }

    public function execute()
    {

        // TODO: Implement execute() method.
        var_dump($this->helperData->getGeneralConfig('image'));
        echo $this->helperData->getGeneralConfig('display_text');
        echo $this->helperData->getGeneralConfig('image_width');
        echo $this->helperData->getGeneralConfig('image_height');
        exit();
    }
}