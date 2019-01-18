<?php
/**
 * Created by PhpStorm.
 * User: ZDZX
 * Date: 2019/1/19
 * Time: 3:27
 */

namespace ZCms\Admin;


use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->publishes([
            __DIR__.'../config/zdzx.php'=>config_path('zcms.php')
        ]);
    }

    public function register(){

    }

}