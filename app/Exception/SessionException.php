<?php

namespace App\Exception;

class SessionException extends \RuntimeException
{

    /**
     * @param string $string
     */
    public function __construct(string $string)
    {
    }
}