<?php

namespace App\Http\Asteriskassets;

use App\Http\Asteriskassets\OpenConnectionController;


// class listener implements IEventListener
// {   
//     public function handle(EventMessage $event)
//     {
//         var_dump($event);
      
//     }
// }

class AmiConnectionController
{
    public static function connect($amiUser)
    {
        try {
            OpenConnectionController::openConnection($amiUser);
            echo "Success";
        } catch (\Throwable $th) {
            echo "Failed";
        }
     }
}
