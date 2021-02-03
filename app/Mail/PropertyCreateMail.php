<?php

namespace App\Mail;

use App\Models\Property;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class PropertyCreateMail extends Mailable
{
    use Queueable, SerializesModels;

    public Property $property;
    private string $email;

    /**
     * Create a new message instance.
     *
     * @param Property $property
     * @param $email
     */
    public function __construct(Property $property, string $email)
    {
        $this->email = $email;
        $this->property = $property;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): PropertyCreateMail
    {

        return $this->from('dino-vert@superDino.fr')->markdown('email.property.create', [
            'property' => $this->property,
            'unsubscribeLink' => URL::signedRoute('unsubscribe', ['email' => $this->email])
        ]);
    }
}
