<?php
/**
 * Created by Larakit.
 * Link: http://github.com/larakit
 * User: Alexey Berdnikov
 * Date: 13.06.17
 * Time: 13:53
 */
\Larakit\Boot::register_migrations(__DIR__ . '/migrations');


if(!function_exists('me')) {
    function me($prop = null) {
        return \Larakit\Me::_($prop);
    }
}

if(class_exists('\Larakit\Twig')) {
    \Larakit\Twig::register_function('me', function ($prop = null) {
        return me($prop);
    });
}
