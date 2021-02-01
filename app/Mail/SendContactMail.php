<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class SendContactMail extends Mailable
{
    use Queueable, SerializesModels;

    private string $name;
    private string $email;
    private string $message;

    /**
     * Create a new message instance.
     * @param array $data
     */
    public function __construct($data)
    {
        $this->name = $data["name"];
        $this->email = $data["email"];
        $this->message = $data["message"];
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $url = DB::table('newsletters')->where('email', $this->email)->exists()
            ? URL::signedRoute('unsubscribe', ['email' => $this->email])
            : '#';

        return $this->from('dino-vert@superDino.fr')->markdown('email.contact', [
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
            'unsubscribeLink' => $url
        ]);
    }
}
