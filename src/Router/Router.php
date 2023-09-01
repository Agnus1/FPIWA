<?php

namespace Igork\Fpiwa\Router;

class Router
{
    private static $routeList = [];
    private static $namedRoutes = [];

    private const POST = 'post';
    private const GET = 'get';

    public static function registerGet(string $url, array $controller): void
    {
        self::register($url, $controller, self::GET);
    }

    public static function registerPost(string $url, array $controller): void
    {
        self::register($url, $controller, self::POST);
    }

    public static function getController($url)
    {
        $controller = self::$routeList[$url][self::resolveMethod()] ?? null;

        if (!isset($controller) || !method_exists($controller[0], $controller[1])) {
            die('BAD ROUTE ERROR');
        }

        return $controller;
    }

    private static function resolveMethod(): string
    {
        return match ($_SERVER['REQUEST_METHOD']) {
            'PUT', 'POST' => self::POST,
            default => self::GET,
        };
    }

    private static function register(string $url, array $controller, string $method): void
    {
        if (!str_ends_with($url, '/')) {
            $url .= '/';
        }

        self::$routeList[$url][$method] = [new $controller[0], $controller[1]];
    }
}

