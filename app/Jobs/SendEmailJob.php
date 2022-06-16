<?php

namespace App\Jobs;

use App\Mail\NotifyMail;
use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

/**
 * Class SendEmailJob
 * @package App\Jobs
 */
class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $details;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $posts = Post::where('is_sent', 1)->get();

        foreach ($posts as $post) {
            $mail = new NotifyMail($post);
            $subscriptions = $post->website->subscriptions;

            foreach ($subscriptions as $subscription) {
                Mail::to($subscription->user->email)->send($mail);
            }

            $post->is_sent = 1;
            $post->save();
        }
    }
}
