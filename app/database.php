<?php

namespace journal\app;

use Illuminate\Database\Capsule\Manager as CapsuleManager;

class database
{
    public function __construct()
    {
        $CapsuleManager = new CapsuleManager;

        $CapsuleManager->addConnection([
           'driver' => 'mysql',
           'host'   => '127.0.0.1',
           'username'  => 'root',
           'password'  => 'A4tech100500133!!',
           'database'  => 'journal',
           'charset'   => 'utf8',
           'collation' => 'utf8_unicode_ci',
           'prefix'    => '',
        ]);

        $CapsuleManager->setAsGlobal();

        $CapsuleManager->bootEloquent();
    }
}