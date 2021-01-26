@component('mail::message')
    #New customer enquiry

    We have received a new customer enquiry.

    @component('mail::table')
        | **Name**                                  | **Email**              | **Telephone**        |
        | ----------------------------------------- |:---------------------: | --------------------:|
        | $property->title}} {{$property->title}}   | <{{$property->title}}> | {{$property->title}} |
    @endcomponent



    @component('mail::panel')
        This is the panel content.
    @endcomponent

    @component('mail::button', ['url' => 'http://dinovert.test/properties/'.$property->id])
        Voir le bien crée
    @endcomponent
    Thanks,<br>
    {{ config('app.name') }}
@endcomponent


