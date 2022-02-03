<?php


namespace App\Http\Controllers;

use App\Http\Asteriskassets\AmiConnectionController;
use Symfony\Component\Process\Process as Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Dotenv;

class CallController extends Controller
{
    public function __construct()
    {
        //AmiConnectionController::connect('telaxess');
      
        echo 'In CALL Controller';
        $process = Process::fromShellCommandline('C:\wamp\bin\php\php8.1.0\php 
        C:\Users\hp\Documents\GitHub\callwizBackend\artisan 
        generate:numbers --env=dev');
        $process->setOptions(['create_new_console' => true]);
        // $process->start();
        // $process->waitUntil(function ($type, $output) {
        //     echo 'Ready. Waiting for commands...';
        // });
        $process->run(function ($type, $buffer) {
            // sleep(4);
            if (Process::ERR === $type) {
                echo 'ERR > '.$buffer;
            } else {
                echo 'OUT > '.$buffer;
            }
        });
    }

    public function index()
    {
        return ('');
    }
}
