@component('mail::message')
  # Welcome to Ethereal, {{ $user->username }}!

  {{--@component('mail::button', route('users', $user->id))--}}
    {{--View your profile--}}
  {{--@endcomponent--}}

  Thanks,<br >
  {{ config('app.name') }}
@endcomponent
