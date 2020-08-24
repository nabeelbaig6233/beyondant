@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header',["url"=>""])
            Reseller Account Notification
        @endcomponent
    @endslot

    <h1></h1>
    @foreach($messages as $message)
    <h1>{{$message}}</h1>
    @endforeach
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
        @endcomponent
    @endslot
@endcomponent
