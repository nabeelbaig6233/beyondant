@component('mail::message')
# Introduction

@foreach ($resellerMail as $resellerField => $resellerData)
<p>
<strong>{{ $resellerField }}</strong>:
</p>&nbsp;
<p>
{{ $resellerData }}
</p>
@endforeach

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
