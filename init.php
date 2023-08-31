<?php

require_once 'vendor/autoload.php';

use Igork\Fpiwa\Router\Router;
use Igork\Fpiwa\Initial\Executor;
use Igork\Fpiwa\Globals\Collector;

Executor::execute();
//Router::registerRoute('/', [\Igork\Fpiwa\Test::class, 'test']);
Router::show(Collector::getRequestUrl());
