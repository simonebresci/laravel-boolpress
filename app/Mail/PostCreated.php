<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Database\Eloquent\Collection;
use App\Post;

class PostCreated extends Mailable
{
    use Queueable, SerializesModels;
    protected $post = null;
    protected $tags = [];

    /**
     * Create a new message instance.
     *
     * @return void
     */
     // Dipendence injection
    public function __construct(Post $post, Collection  $tags)
    {
        $this->post = $post;
        $this->tags = $tags;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $post = $this->post;
        $tags = $this->tags;
        // return $this->view('mail.example',compact('post','tags'));
        return $this->markdown('mail.tags-used', compact('post','tags'));


    }
}
