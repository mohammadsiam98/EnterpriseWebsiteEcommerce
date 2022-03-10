@component('mail::message')

<h3> New Message From {{$contact_form_data['name']}}</h3>
<p>Name: {{$contact_form_data['subject']}}</p>
<p>Name: {{$contact_form_data['message']}}</p>
@endcomponent
