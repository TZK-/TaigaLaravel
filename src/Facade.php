<?php

namespace TZK\TaigaLaravel;

class Facade extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'taiga';
    }

}
