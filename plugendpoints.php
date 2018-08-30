<?php
namespace API\restapi;

/**
 *
 */
class plugendpoints
{
    const ENDPOINTS = '/EndPoints/';
    public function call($filename)
    {
        if (!file_exists(__DIR__ . self::ENDPOINTS . $filename . '.php')) {
            throw new Exception('Requested EndPoints is not found under '.ENDPOINTS, 1);
            die;
        }
        include_once (__DIR__ . self::ENDPOINTS . $filename . '.php');
            return;
    }

}
