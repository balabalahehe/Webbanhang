<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class newMessage implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $content;
    public $user_id;

    public function __construct($content, $user_id)
    {
        $this->content = $content;
        $this->user_id = $user_id;
    }


    public function broadcastOn()
    {
        return new PrivateChannel('chat');
    }

    public function broadcastWith()
    {
        return [
            'content' => $this->content,
            'user_id' => $this->user_id,
        ];
    }
}
