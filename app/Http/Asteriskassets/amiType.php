<?php

namespace App\Http\Asteriskassets;

use App\Http\Controllers\Controller;

class amiType extends Controller
{
    public function getDetails($type)
    {
        switch ($type) {

            case 'telaxess':
                return (
                    array(
                    'host' => '192.168.83.4',
                    'scheme' => 'tcp://',
                    'port' => 5038,
                    'username' => 'telaxess',
                    'secret' => '123456',
                    'connect_timeout' => 10000,
                    'read_timeout' => 10000
                    )
                );
                break;
        }
    }
}
