<?php
/**
 * Created by PhpStorm.
 * User: vin
 * Date: 06/12/13
 * Time: 16:59
 */

namespace TwoDudes\ErrorLoggerBundle\Error\ErrorType;


class FatalException extends AbstractError
{
    public function getType()
    {
        return ErrorType::FATAL_EXCEPTION;
    }
}