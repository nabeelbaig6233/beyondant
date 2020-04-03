@component("mail::message")
# Congratulation
<h1>You are now the member of {{$company}}</h1>
<h4>Your Credentials</h4>
<h6><strong>e-mail</strong> {{$email}}</h6>
<h6><strong>password</strong> {{$password}}</h6>
@component("mail::button" ,["url"=>'https://beyondant.com/public/login'])
Visit Profile
@endcomponent

@endcomponent
