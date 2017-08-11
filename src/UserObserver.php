<?php
/**
 * Created by Larakit.
 * Link: http://github.com/larakit
 * User: Alexey Berdnikov
 * Date: 10.08.17
 * Time: 17:26
 */

namespace Larakit;

class UserObserver {
    
    public function saving($model) {
        $model->name     = (string) $model->name;
        $model->email    = (string) $model->email;
        $model->password = $model->password ? $model->password : md5(microtime(true));
    }
}