<?php

// Doctrine (db)
$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'charset'  => 'utf8',
    'host'     => "localhost",
    'port'     => '3306',
    'dbname'   => "microcms",
    'user'     => "root",
    'password' => "",
);

// define log parameters
$app['monolog.level'] = 'WARNING';
