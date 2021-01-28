@component('mail::message')
    #Nouveau message de {{$name. " | ".$email}} depuis la page de contact.
    @component('mail::panel')
        {{$message}}
    @endcomponent
    Il y a également une copie en BDD sur les logs.
    @component('mail::button', ['url' => 'http://dinovert.test'])
        Vers le site
    @endcomponent
@endcomponent


