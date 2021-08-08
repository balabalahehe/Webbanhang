<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\masterMail;

class sendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $mailTo;
    protected $view;
    protected $data;
    protected $subject;

    public function __construct($mailTo, $view, $data, $subject)
    {
        $this->mailTo       = $mailTo;
        $this->view         = $view;
        $this->data         = $data;
        $this->subjectt     = $subject;
    }


    public function handle()
    {
        Mail::to($this->mailTo)->send(new masterMail($this->view, $this->data, $this->subject));
    }
}
