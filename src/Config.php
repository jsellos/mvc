<?php
namespace src;

class Config {
    const BASE_DIR = '/public';

    const DB_DRIVER = 'mysql';
    const DB_HOST = 'db';
    const DB_DATABASE = 'test';
    CONST DB_USER = 'root';
    const DB_PASS = '';
    const DB_OPTIONS = [
        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        ];

    const ERROR_CONTROLLER = 'ErrorController';
    const DEFAULT_ACTION = 'index';
}