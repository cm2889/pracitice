@component('mail::message')
#Thank you for u r message

    <strong> Name </strong>{{$data['name']}}
    <strong> Email </strong>{{$data['email']}}
    <strong> Message </strong>{{$data['message']}}

    {{$data['message']}}


@endcomponent
