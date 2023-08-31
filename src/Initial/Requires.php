<?php

namespace Igork\Fpiwa\Initial;

class Requires
{
    public static function autoRequire(): void
    {
        if (file_exists(ROUTING_CONFIG_PATH)) {
            require_once ROUTING_CONFIG_PATH;
        }
    }
}