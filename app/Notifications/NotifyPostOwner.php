<?php

namespace App\Notifications;

use App\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
//use Illuminate\Notifications\Messages\MailMessage;

class NotifyPostOwner extends Notification implements ShouldQueue
{
    use Queueable;
	
    public $post;
    public $userName;
    
    public function __construct(Post $post, $userName)
    {
        $this->post = $post;
        $this->userName = $userName;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array
     */
    public function via()
    {
        return ['database', 'broadcast'];
    }

    /**
     * @return array
     */
    public function toDatabase()
	{
		return [
			'post' => $this->post,
			'userName' => $this->userName
		];
	}

    /**
     * @return array
     */
    public function toBroadcast()
	{
		return [
			'data' => [
				'post' => $this->post,
				'userName' => $this->userName
			]
		];
	}

    /**
     * Get the array representation of the notification.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            //
        ];
    }
}
