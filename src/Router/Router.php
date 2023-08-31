<?php

namespace Igork\Fpiwa\Router;

class Router
{
    private static $routeList = [];

    public static function registerRoute(string $url, array $controller): void
    {
        self::$routeList[$url] = [new $controller[0], $controller[1]];
    }

    public static function show($url)
    {
        $controller = self::$routeList[$url];

        if (!isset($controller) || !method_exists($controller[0], $controller[1])) {
            die('BAD ROUTER ERROR');
        }

        call_user_func($controller);
    }
}

