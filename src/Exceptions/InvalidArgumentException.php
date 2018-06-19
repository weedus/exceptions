<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 16.06.18
 * Time: 10:58
 */

namespace Weedus\Exceptions;

class InvalidArgumentException extends \InvalidArgumentException
{
    public function __construct($expected, $actual)
    {
        parent::__construct("Actual '$actual' does not match expected '$expected'.");
    }

}