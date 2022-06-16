<?php
   
namespace App\Console;
   
use App\Jobs\SendEmailJob;
use Illuminate\Console\Command;

/**
 * Class SendEmailCommand
 * @package App\Console
 */
class SendEmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email';
    
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
    
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
        dispatch(new SendEmailJob());

        /** Emails are sent to mail trap and have been tested */
        dd('Run: php artisan queue:work to start receiving emails.');
    }
}