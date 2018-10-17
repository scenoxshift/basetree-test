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
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'broadcast'];
    }
    
    public function toDatabase($notifiable)
	{
		return [
			'post' => $this->post,
			'userName' => $this->userName
		];
	}

	public function toBroadcast($notifiable)
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
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
