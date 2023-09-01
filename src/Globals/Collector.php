<?php

namespace Igork\Fpiwa\Globals;

class Collector
{
    public static function getDocumentRoot(): string {
        return $_SERVER['DOCUMENT_ROOT'];
    }

    public static function getRequestUrl(bool $forceEndSlash = true): string {
        $result = $_SERVER['REQUEST_URI'];

        if ($forceEndSlash && !str_ends_with($result, '/')) {
            $result .= '/';
        }

        return $result;
    }
}