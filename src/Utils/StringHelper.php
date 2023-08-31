<?php

namespace Igork\Fpiwa\Utils;

class StringHelper
{
    public static function createPath(array $path): string
    {
        return implode(DIRECTORY_SEPARATOR, $path);
    }
}