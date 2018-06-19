<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 17.06.18
 * Time: 17:09
 */

namespace Weedus\Exceptions;


use Throwable;

class NotYetImplementedException extends \Exception
{
    public function __construct(string $method)
    {
        parent::__construct("Method '$method' is not yet implemented");
    }

}