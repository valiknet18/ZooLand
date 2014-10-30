<?php
namespace Valiknet\Libs;

class Error404Exception extends \Exception
{
    public function __construct()
    {
        return "404 File not found";
    }
} 