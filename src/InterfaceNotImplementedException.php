<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 19.06.18
 * Time: 23:03
 */

namespace Weedus\Exceptions;


class InterfaceNotImplementedException extends \Exception
{
    public function __construct(string $class, string $interface)
    {
        parent::__construct("Class '$class' (or parents) does not implement Interface '$interface'.");
    }
}