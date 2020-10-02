@component('mail::message')
    # QR Code

    {{ $name['f_name'] .' '. $name['l_name'] }} has share his QR code

{{--    <a href="{{ $qrcode['qrcode'] }}" download="QR"><img src="{{ $qrcode['qrcode'] }}" alt=""></a>--}}
    @component('mail::button', ['url' => $qrcode['qrcode']])
        Click here to view QR Code
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
