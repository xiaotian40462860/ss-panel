<?php

namespace App\Services;

use App\Services\Auth\Cookie,App\Services\Auth\Redis,App\Services\Auth\JwtToken;
use App\Services\Token\DB;

class Factory
{
    public static function createAuth(){
        $method = Config::get('authDriver');
        switch($method){
            case 'cookie':
                return new Cookie();
            case 'redis':
                return new Redis();
            case 'jwt':
                return new JwtToken();
        }
        return new Redis();
    }

    public static function createCache(){

    }

    public static function createMail(){

    }

    public static function createTokenStorage(){
        return new DB();
    }
}