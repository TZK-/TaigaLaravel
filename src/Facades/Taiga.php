<?php

namespace TZK\TaigaLaravel\Facades;

use TZK\Taiga\Taiga as TaigaPHP;

class Taiga extends \Illuminate\Support\Facades\Facade
{

    protected static function getFacadeAccessor()
    {
        return TaigaPHP::class;
    }

    public static function newInstance() {
    	return app(TaigaPHP::class);
    }

}
