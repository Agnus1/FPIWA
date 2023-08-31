<?php

namespace Igork\Fpiwa\Globals;

class Collector
{
    public static function getDocumentRoot(): string {
        return $_SERVER['DOCUMENT_ROOT'];
    }

    public static function getRequestUrl(): string {
        return $_SERVER['REQUEST_URI'];
    }
}