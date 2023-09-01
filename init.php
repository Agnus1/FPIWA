<?php

require_once 'vendor/autoload.php';

use Igork\Fpiwa\Router\Router;
use Igork\Fpiwa\Initial\Executor;
use Igork\Fpiwa\Globals\Collector;
use Igork\Fpiwa\Router\DynamicCaller;

Executor::execute();

$controller = Router::getController(Collector::getRequestUrl());

DynamicCaller::call($controller);