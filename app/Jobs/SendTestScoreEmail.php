<?php

namespace App\Jobs;
use App\Mail\TestScoreEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendTestScoreEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $recipientEmail;
    protected $score;

    /**
     * Create a new job instance.
     *
     * @param  string  $recipientEmail
     * @param  int  $score
     * @return void
     */
    public function __construct($recipientEmail, $score)
    {
        $this->recipientEmail = $recipientEmail;
        $this->score = $score;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->recipientEmail)->send(new TestScoreEmail($this->score));
    }
}

