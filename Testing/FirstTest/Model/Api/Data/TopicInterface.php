<?php
/**
 * Created by PhpStorm.
 * User: serhii
 * Date: 03.10.18
 * Time: 12:05
 */

namespace Testing\FirstTest\Model\Api\Data;


interface TopicInterface
{
    public function getId();

    public function setId();

    public function getTitle();

    public function setTitle();

    public function getContent();

    public function setContent();

    public function getCreationTime();

    public function setCreationTime();
}