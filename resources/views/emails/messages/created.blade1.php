@component('mail::message')

SmartTaxi

@component('mail::panel')
Bienvenue à ESA 
Félicitations votre inscription a été pris en charge vos paramètres de connexion sont:
<br>
login:$chauffeur ->Identifiant
<br>
password:$request->input('PasswordChof');

@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
