<?php

namespace App\Console\Commands;

use App\AnalyticsData;
use Illuminate\Console\Command;

class GoogleData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'google:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get Google Analytics Command. Dont Run This Command Directly It Will Break The Flow.';

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
        $analytics=new AnalyticsData();
        $analytics->getGoogleData();
    }
}
