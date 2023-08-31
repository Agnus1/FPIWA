<?php

namespace Igork\Fpiwa\Initial;

use Igork\Fpiwa\Globals\Collector;
use Igork\Fpiwa\Utils\StringHelper;

class Constants
{
    public static function autoDefine(): void
    {
        define('CLIENT_SOURCE_DIRECTORY', 'app');
        define(
            'ROUTING_CONFIG_PATH',
            StringHelper::createPath(
                [
                    Collector::getDocumentRoot(),
                    CLIENT_SOURCE_DIRECTORY,
                    'Routing',
                    'config.php'
                ]
            )
        );
    }
}