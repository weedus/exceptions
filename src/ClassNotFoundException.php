<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 19.06.18
 * Time: 23:04
 */

namespace Weedus\Exceptions;


class ClassNotFoundException extends \Exception
{
    public function __construct(string $desiredClass)
    {
        parent::__construct("Class '$desiredClass' not found");
    }

}