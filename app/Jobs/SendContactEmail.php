<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class SendContactEmail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    private $name;
    private $email;
    private $message;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $name = $this->name;
        $email = $this->email;

        Mail::raw($this->message, function ($m) use ($email, $name) {
            if(env('APP_ENV') == 'local') {
                $m->to('brant@interwebular.net', 'Debug - Cocktails And Canapes');
            }
            else {
                $m->to('info@cocktailsandcanapes.ca', 'Cocktails And Canapes Info');
            }

            $m->subject('Website Form Submission');
            $m->replyTo($email, $name);
        });
    }
}
