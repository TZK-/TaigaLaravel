<?php

namespace TZK\TaigaLaravel\Facades;

class Taiga extends \Illuminate\Support\Facades\Facade
{

    protected static function getFacadeAccessor()
    {
        return \TZK\Taiga\Taiga::class;
    }

}
