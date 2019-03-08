<nav class="navbar navbar-expand-md navbar-light navbar-laravel" >
  <div class="container-fluid ml-5 mr-5" >
    <!-- Brand -->
    <a class="navbar-brand" href="{{ url('/') }}" >
      <div style="display:flex; align-items: center;" >
        <div class="mr-1" >
          <img src="{{ asset('android-chrome-192x192.png') }}"
               alt="Ethereal"
               style="min-width: 36px; max-width: 36px;" class="fa-lg" >
        </div >
        <div class="navbar-brand text-black-main navbar-underlined" >
          <h2 >thereal</h2 >
        </div >
      </div >
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
          <li class="nav-item list-inline-item ml-2" >
            <a href="{{ route('profile', auth()->id()) }}" >
              <img src="{{ App\Helpers\Avatar::avatar(auth()->user(), config('avatar_size.icon'))  }}"
                   class="rounded-circle border-default" >
            </a >
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