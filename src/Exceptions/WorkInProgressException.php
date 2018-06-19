<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 17.06.18
 * Time: 17:07
 */

namespace Weedus\Exceptions;


use Throwable;

class WorkInProgressException extends \Exception
{
    public function __construct(string $message = "")
    {
        parent::__construct('WORK IN PROGRESS'.($message ? ": $message": ""));
    }

}