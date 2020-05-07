@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header',["url"=>""])
          Powered By Beyondant
        @endcomponent
    @endslot

    <h1></h1>
    <h2>Hello {{ucwords($first_name." ".$last_name)}}</h2>
    <p>It was a pleasure meeting you today. I look forward to speaking with you in the near future. Please find my contact information below for your conveinence.</p>
    <h2>Contact Information</h2>
    <p><strong>Name: </strong> {{$user->first_name." ".$user->last_name}}</p>
    <p><strong>Title: </strong> {{$user->job_title}}</p>
    <p><strong>Business Name: </strong> {{$company_name}}</p>
    <p><strong>E-mail: </strong> {{$user->email}}</p>
    <p><strong>Phone No.: </strong> {{$user->contact_number}}</p>
    <p><strong>Where we met: </strong> {{$location}}</p>
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.') Would you like to use Beyondant's Platform for your new contacts? If so, click here for a free account: <a href="https://beyondant.com/">www.beyondant.com</a>
        @endcomponent
    @endslot
@endcomponent
