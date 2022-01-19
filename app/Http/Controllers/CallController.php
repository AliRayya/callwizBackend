<?php


namespace App\Http\Controllers;

use App\Http\Asteriskassets\AmiConnectionController;




class CallController extends Controller
{
    public function __construct()
    {
        AmiConnectionController::connect('telaxess');
    }

    public function index()
    {
        return ('');
    }
}
