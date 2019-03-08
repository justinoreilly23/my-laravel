<nav class="navbar navbar-expand-md navbar-light navbar-laravel" >
  <div class="container" >
    <!-- Brand -->
    <a class="navbar-brand mb-0 pb-0 pt-2" href="{{ url('/') }}" >
      <ul class="navbar-nav nav list-inline" >
        <li class="nav-item mr-1" >
          <img src="{{ asset('android-chrome-192x192.png') }}"
               alt="Ethereal"
               style="min-width: 36px; max-width: 36px;" >
        </li >
        <li class="nav-item text-black-50" >
          <h2 >thereal</h2 >
        </li >
      </ul >
    </a >
    <button class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}" >
      <span class="navbar-toggler-icon" ></span >
    </button >

    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto" >

      </ul >

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto list-inline" >
        <!-- Links -->
        <li class="nav-item list-inline-item" >
          <a class="nav-link @if ($sc_active == "home")
            has-text-black @endif" href="/" >Home</a >
        </li >
        <li class="nav-item list-inline-item" >
          <a class="nav-link @if ($sc_active == "projects")
            has-text-black @endif" href="{{ url('/projects') }}" >Projects</a >
        </li >
        <li class="nav-item list-inline-item" >
          <a class="nav-link @if ($sc_active == "about")
            has-text-black @endif" href="{{ route('about') }}" >About</a >
        </li >
        <li class="nav-item list-inline-item" >
          <a class="nav-link @if ($sc_active == "contact")
            has-text-black @endif" href="{{ route('contact') }}" >Contact</a >
        </li >
        <!-- Authentication Links -->
        @guest
          <li class="nav-item list-inline-item" >
            <a class="nav-link" href="{{ route('login') }}" >{{ __('Login') }}</a >
          </li >
          <li class="nav-item list-inline-item" >
            @if (Route::has('register'))
              <a class="nav-link" href="{{ route('register') }}" >{{ __('Register') }}</a >
            @endif
          </li >
        @else
          <li class="nav-item list-inline-item" >
            <div class="ml-1" >
              <img src="{{ $sc_adorableAvatar }}"
                   class="rounded-circle"
                   style="border: 2px solid white;" >
            </div >
          </li >
          <li class="nav-item dropdown list-inline-item" >

            <a id="navbarDropdown"
               class="nav-link dropdown-toggle"
               href="#"
               role="button"
               data-toggle="dropdown"
               aria-haspopup="true"
               aria-expanded="false"
               v-pre >
              {{ Auth::user()->username }}
              <span class="caret" ></span >
            </a >

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" >
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" >
                {{ __('Logout') }}
              </a >

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;" >
                @csrf
              </form >
            </div >
          </li >
        @endguest
      </ul >
    </div >
  </div >
</nav >