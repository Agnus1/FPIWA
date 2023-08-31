<?php

namespace Igork\Fpiwa\Initial;

class Executor
{
    public static function execute(): void
    {
        Constants::autoDefine();
        Requires::autoRequire();
    }
}