<?php

namespace App\Console\Commands;

use App\Models\GeneratedCall;
use App\Models\TrafficStream;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class NumbersGenerator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:numbers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates Array of Dialed Numbers and ANIs';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        echo 'In Handler';

        $request = array(
            'traffic_ANI' => '123',
            'traffic_destination'=> '123',
            'traffic_ACD' => 3,
            'traffic_ASR' => 25,
            'traffic_total_minutes' => 10000
        );
        $_ANI = $request['traffic_ANI'];
        $_dest = $request['traffic_destination'];
        $_ACD = $request['traffic_ACD'];
        $_ASR = $request['traffic_ASR'];
        $_totalMinutes = $request['traffic_total_minutes'];

        // $call_schedule = timeframe;

        $attempts= $this->generateAttempts($_ACD, $_ASR, $_totalMinutes);

        $this->generateDialedNumbers($_dest, $attempts);

        // callScheduler()
    }

    private function generateAttempts($_ACD, $_ASR, $_totalMinutes) {
        return(($_totalMinutes/$_ACD)*100/$_ASR);
    }
    
    private function generateDialedNumbers($_dest, $attempts){
        // $prefix = getDestinationPrefix($_dest); // SQL Query to destination/prefix table 
        $Ddigits = 10;
        $ANIdigits = 9;
        
        
        for ($i=0; $i < $attempts; $i++) { 
            
            try {
                    DB::table('generated_calls')->insert([
                    'dialed_number' => $this->n_digit_random($Ddigits),
                    'ANI' => $this->n_digit_random($ANIdigits),
                    'traffic_stream_id' => 
                        TrafficStream::where('traffic_name', 'test_traffic')
                        ->value('id')
                    ]); 
            } catch (\Throwable $th) {
                echo $th->getMessage();
            }
      
        }
    }

    private function n_digit_random($digits) {
        $temp = "";
      
        for ($i = 0; $i < $digits; $i++) {
          $temp = $temp.mt_rand(0, 9);
        }

        return $temp;
      }
    
}
