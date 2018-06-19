<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 16.06.18
 * Time: 10:16
 */

namespace Weedus\Exceptions;

class MethodNotFoundException extends \Exception
{
    public function __construct(string $method, string $class)
    {
        parent::__construct("No method '$method' found for class '$class'.");
    }

}