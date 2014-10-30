<?php
require __DIR__."/../vendor/autoload.php";

use Valiknet\Libs\URL;
use Valiknet\Route;

new Route((new URL)->getUrl());

