<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ContactMail
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private string $name;
    private string $email;
    private string $message;

    /**
     * Create a new event instance.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->name = $data["name"];
        $this->email = $data["email"];
        $this->message = $data["message"];
    }

    /**
     * @return mixed|string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return mixed|string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return mixed|string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
