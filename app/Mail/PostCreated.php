<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Post;

class PostCreated extends Mailable
{
    use Queueable, SerializesModels;
    protected $post = null;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     // Dipendence injection
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $post = $this->post;
        return $this->view('mail.example',compact('post'));

    }
}
