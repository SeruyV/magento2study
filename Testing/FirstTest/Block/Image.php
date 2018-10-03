<?php
/**
 * Created by PhpStorm.
 * User: serhii
 * Date: 03.10.18
 * Time: 15:29
 */

namespace Testing\FirstTest\Block;

use \Magento\Framework\Image\AdapterFactory;
// Magento\Catalog\Helper\Image::resize;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\UrlInterface;
use Testing\FirstTest\Helper\Data;


class Image extends \Magento\Framework\View\Element\Template
{
    const XML_PATH_IMAGE = 'testing/firsttest/addimage/';

    /**
     * @var \Testing\FirstTest\Helper\Data
     */
    protected $helperData;

    /**
     * @var UrlInterface
     */
    protected $_url;

    /**
     * @var \Magento\Framework\Image\AdapterFactory
     */
    protected $_imageFactory;

    public function __construct(Context $context, Data $helperData, UrlInterface $url, AdapterFactory $imageFactory)
    {
        $this->_imageFactory = $imageFactory;
        $this->helperData = $helperData;
        $this->_url = $url;

        parent::__construct($context);
    }

    public function renderImage()
    {
        $path = $this->resize($this->helperData->getGeneralConfig('image'), $this->getImageWidth(), $this->getImageHeight());
        return $path;
    }

    public function resize($image, $width = null, $height = null)
    {
        $absolutePath = $this->_filesystem->getDirectoryRead(\Magento\Framework\App\Filesystem\DirectoryList::MEDIA)->getAbsolutePath('testing/firsttest/addimage/') . $image;

        $imageResized = $this->_filesystem->getDirectoryRead(\Magento\Framework\App\Filesystem\DirectoryList::MEDIA)->getAbsolutePath('resized/' . $width . '/') . $image;
        //create image factory...
        $imageResize = $this->_imageFactory->create();
        $imageResize->open($absolutePath);
        $imageResize->constrainOnly(TRUE);
        $imageResize->keepTransparency(TRUE);
        $imageResize->keepFrame(FALSE);
//        $imageResize->keepAspectRatio(TRUE);
        $imageResize->resize($width, $height);
        //destination folder
        $destination = $imageResized;
        //save image
        $imageResize->save($destination);

        $resizedURL = $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA) . 'resized/' . $width . '/' . $image;
        return $resizedURL;
    }

    public function getImageWidth()
    {
        return $this->helperData->getGeneralConfig('image_width');
    }

    public function getImageHeight()
    {
        return $this->helperData->getGeneralConfig('image_height');
    }

}