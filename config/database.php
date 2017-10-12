<?php

return [
    "dsn"              => "mysql:host=localhost;dbname=ramverk1;charset=utf8",
    "username"         => "root",
    "password"         => "",
    "driver_options"   => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'",
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    ],
];
