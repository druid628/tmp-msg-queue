<?php

namespace PeacHPope\MessageQueue;


/**
 * @author Micah Breedlove <druid628@gmail.com>
 */
class Constants
{
    const DEFAULT_QUEUE='24601';

    const ERROR_MEMBER_NOT_FOUND=404;
    const ERROR_404='Class member not found';

    private function __construct()
    {
        throw new \Exception("You should not see me.");
    }
}