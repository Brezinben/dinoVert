<?php

namespace App\Mail;

use App\Models\Property;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PropertyCreateMail extends Mailable
{
    use Queueable, SerializesModels;

    public Property $property;

    /**
     * Create a new message instance.
     *
     * @param $property
     */
    public function __construct(Property $property)
    {
        $this->property = $property;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('dino-vert@superDino.fr')->markdown('email.property.create', [
            'property' => $this->property,
        ]);
    }
}
