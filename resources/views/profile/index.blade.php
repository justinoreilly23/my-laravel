@extends('layouts.master')

@section('content')
  <div class="container" >
    @foreach($users as $user)
      <div class="row" >
        <div class="card w-75 m-auto" >
          <div class="card-body profile-card" >
            <a href="{{ route('profile', $user) }}" >
              <ul class="list-inline mb-0" >
                <li class="list-inline-item" >
                  <img class="border-default avatar-icon position-relative mr-2"
                       src="{{ \App\Helpers\Avatar::avatar($user, config('avatar_size.large')) }}"
                       alt="{{ "$user->username's profile" }}" >
                </li >
                <li class="list-inline-item position-absolute" >
                  <ul class="list-unstyled" >
                    <li ><h4 class="text-black-50">{{ $user->username }}</h4 ></li >
                    <li >
                      <span class="text-secondary" >Member since: {{ strftime("%b %d, %Y", strtotime($user->created_at)) }}</span >
                    </li >
                  </ul >
                </li >
              </ul >
            </a >
          </div >
        </div >
      </div >
    @endforeach
  </div >
@endsection