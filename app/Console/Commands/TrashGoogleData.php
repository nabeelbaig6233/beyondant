<?php

namespace App\Console\Commands;

use App\models\views;
use Illuminate\Console\Command;

class TrashGoogleData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'google:trash';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Trash Data Of 1 Year';

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
        views::all()->map(function ($view){
           return $view->delete();
        });
    }
}
