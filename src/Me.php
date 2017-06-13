<?php
/**
 * Created by Larakit.
 * Link: http://github.com/larakit
 * User: Alexey Berdnikov
 * Date: 13.06.17
 * Time: 13:54
 */

namespace Larakit;

use Illuminate\Support\Str;

class Me {
    
    static function _($prop = null) {
        $user = \Auth::user();
        if($prop) {
            return $user ? $user->{$prop} : null;
        }
        
        return $user;
    }
    
    static function id() {
        return self::_(__FUNCTION__);
    }
    
    static function name() {
        return self::_(__FUNCTION__);
    }
    
    static function email() {
        return self::_(__FUNCTION__);
    }
    
    static function login() {
        return self::_(__FUNCTION__);
    }
    
    static function is_admin() {
        return self::_(__FUNCTION__);
    }
    
    static function hashtag() {
        return '#' . Str::snake(self::name(), '_');
    }
    
}

if(!function_exists('me')) {
    function me($prop = null) {
        return Me::_($prop);
    }
}

if(class_exists('\Larakit\Twig')) {
    \Larakit\Twig::register_function('me', function ($prop = null) {
        return me($prop);
    });
}
