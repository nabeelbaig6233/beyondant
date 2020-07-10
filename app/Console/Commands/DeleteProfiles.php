<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DeleteProfiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'profiles:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Company Employees Profile Deletion After 1 Year';

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
        //\DB::query("delete from users where profile_status='changed' AND Date(`created_at`) < now() - interval -1 DAY");
        \DB::delete("delete from users where profile_status='changed' AND Date(`created_at`) < now() - interval 365 DAY");
    }
}
