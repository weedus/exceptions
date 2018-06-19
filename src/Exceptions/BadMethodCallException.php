<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 20.06.18
 * Time: 00:09
 */

namespace Weedus\Exceptions;

class BadMethodCallException extends \Exception
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}