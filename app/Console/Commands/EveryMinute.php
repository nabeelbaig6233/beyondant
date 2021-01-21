<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\EmailScheduled;

//use Illuminate\Support\Facades\Mail;
//use App\Mail\NewContactAlert;
//use App\Models\meeting;

class EveryMinute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Email will be sent after one minute and after 7 days';

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
     * @return mixed
     */
    public function handle()
    {
            // $data = meeting::select(DB::raw('DATEDIFF(now(),created_at) as daysDiff'),'user_id')
            // ->whereIn(DB::raw('DATEDIFF(now(),created_at)'),array(1,7))->having('daysDiff','>','0')->get();
            // $data = DB::table('meetings')->where('id',2)->first();
            // $name = count($data)??0;                        
            //Mail::to("altafkorejo.cs17@gmail.com")->send(new NewContactAlert('Altaf Korejo'));
        //     try {
                
        //     $data = meeting::select(\DB::raw('DATEDIFF(now(),created_at) as daysDiff'),'user_id')
        //     ->whereIn(\DB::raw('DATEDIFF(now(),created_at)'),array(1,7))->having('daysDiff','>','0')->get();
    
        //     if(!empty($data)) {
        //         Mail::to("altafkorejo.cs17@gmail.com")->send(new NewContactAlert("ok1"));
        //         // foreach($data as $row) {
        //         //     $obj = User::select("first_name","email")->find($row->user_id);
        //         //     $first_name = $obj->first_name;
        //         //     $email = $obj->email;
        //         //     Mail::to($email)->send(new NewContactAlert($first_name));
        //         // }
        //     } else {
        //         Mail::to("altafkorejo.cs17@gmail.com")->send(new NewContactAlert("ok2"));
        //     }        

        // } catch(\Exception $e){
        //     Mail::to("altafkorejo.cs17@gmail.com")->send(new NewContactAlert("ok3"));
        // }
        $sendEmail =new EmailScheduled();
        $sendEmail->init();
    }
}
