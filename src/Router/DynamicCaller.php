<?php

namespace Igork\Fpiwa\Router;

class DynamicCaller
{
    public static function call(array $controller)
    {
        // TODO: добавить DI когда-нибудь...
        call_user_func($controller);
    }
}