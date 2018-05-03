@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level == 'error')
# Whoops!
@else
# Hola!
@endif
@endif

{{-- Intro Lines --}}
Estás recibiendo este correo electrónico porque recibimos una solicitud de restablecimiento de contraseña para tu cuenta.
{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
            $color = 'green';
            break;
        case 'error':
            $color = 'red';
            break;
        default:
            $color = 'blue';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{ $actionText }}
@endcomponent
@endisset

{{-- Outro Lines --}}
Si no fuiste tú quien solicitó restablecer tu contraseña, ignora este correo.
{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
Saludos,<br>{{ config('app.name') }}
@endif

{{-- Subcopy --}}
@isset($actionText)
@component('mail::subcopy')
Si tienes problemas para hacer clic en el botón "Restablecer contraseña", copia y pegua la url siguiente en tu navegador web o haz click en ella: [{{ $actionUrl }}]({{ $actionUrl }})
@endcomponent
@endisset
@endcomponent
