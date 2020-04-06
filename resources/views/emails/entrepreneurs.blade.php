@component('mail::message')
# Introduction

@foreach ($entrepreneursMail as $entrepreneursField => $entrepreneursData)
<p>
<strong>{{ $entrepreneursField }}</strong>:
</p>&nbsp;
<p>
{{ $entrepreneursData }}
</p>
@endforeach

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
