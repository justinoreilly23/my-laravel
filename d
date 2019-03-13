warning: CRLF will be replaced by LF in _ide_helper_custom.php.
The file will have its original line endings in your working directory.
warning: CRLF will be replaced by LF in app/Helpers/Avatar.php.
The file will have its original line endings in your working directory.
warning: CRLF will be replaced by LF in app/Providers/SocialServiceProvider.php.
The file will have its original line endings in your working directory.
warning: CRLF will be replaced by LF in config/avatar_size.php.
The file will have its original line endings in your working directory.
warning: CRLF will be replaced by LF in resources/sass/custom.scss.
The file will have its original line endings in your working directory.
warning: CRLF will be replaced by LF in resources/views/about.blade.php.
The file will have its original line endings in your working directory.
warning: CRLF will be replaced by LF in resources/views/contact.blade.php.
The file will have its original line endings in your working directory.
warning: CRLF will be replaced by LF in resources/views/layouts/master.blade.php.
The file will have its original line endings in your working directory.
warning: CRLF will be replaced by LF in resources/views/mail/master.blade.php.
The file will have its original line endings in your working directory.
warning: CRLF will be replaced by LF in resources/views/mail/new-user.blade.php.
The file will have its original line endings in your working directory.
warning: CRLF will be replaced by LF in resources/views/partials/admin.blade.php.
The file will have its original line endings in your working directory.
warning: CRLF will be replaced by LF in resources/views/partials/errors.blade.php.
The file will have its original line endings in your working directory.
warning: CRLF will be replaced by LF in resources/views/partials/header.blade.php.
The file will have its original line endings in your working directory.
warning: CRLF will be replaced by LF in resources/views/partials/message.blade.php.
The file will have its original line endings in your working directory.
warning: CRLF will be replaced by LF in resources/views/profile/index.blade.php.
The file will have its original line endings in your working directory.
warning: CRLF will be replaced by LF in resources/views/profile/show.blade.php.
The file will have its original line endings in your working directory.
warning: CRLF will be replaced by LF in resources/views/projects/create.blade.php.
The file will have its original line endings in your working directory.
warning: CRLF will be replaced by LF in resources/views/projects/edit.blade.php.
The file will have its original line endings in your working directory.
warning: CRLF will be replaced by LF in resources/views/projects/index.blade.php.
The file will have its original line endings in your working directory.
warning: CRLF will be replaced by LF in resources/views/projects/show.blade.php.
The file will have its original line endings in your working directory.
warning: CRLF will be replaced by LF in resources/views/welcome.blade.php.
The file will have its original line endings in your working directory.
[1mdiff --git a/app/Events/NewUserEvent.php b/app/Events/NewUserEvent.php[m
[1mindex 8560dbd..a7fcb05 100644[m
[1m--- a/app/Events/NewUserEvent.php[m
[1m+++ b/app/Events/NewUserEvent.php[m
[36m@@ -17,6 +17,8 @@[m [mclass NewUserEvent {[m
      */[m
     public function __construct($user)[m
     {[m
[32m+[m[32m        session()->flash('message', "Welcome to Ethereal," . auth()->user()->username . "!");[m
[32m+[m
         $this->user = $user;[m
     }[m
 }[m
[1mdiff --git a/app/Events/ProjectCreatedEvent.php b/app/Events/ProjectCreatedEvent.php[m
[1mindex b9bd65f..3a63320 100644[m
[1m--- a/app/Events/ProjectCreatedEvent.php[m
[1m+++ b/app/Events/ProjectCreatedEvent.php[m
[36m@@ -17,6 +17,8 @@[m [mclass ProjectCreatedEvent {[m
      */[m
     public function __construct($project)[m
     {[m
[32m+[m[32m        session()->flash('message', 'Project successfully created!');[m
[32m+[m
         $this->project = $project;[m
     }[m
 }[m
\ No newline at end of file[m
[1mdiff --git a/app/Http/Controllers/Auth/LoginController.php b/app/Http/Controllers/Auth/LoginController.php[m
[1mindex b2ea669..44758bc 100644[m
[1m--- a/app/Http/Controllers/Auth/LoginController.php[m
[1m+++ b/app/Http/Controllers/Auth/LoginController.php[m
[36m@@ -4,6 +4,7 @@[m [mnamespace App\Http\Controllers\Auth;[m
 [m
 use App\Http\Controllers\Controller;[m
 use Illuminate\Foundation\Auth\AuthenticatesUsers;[m
[32m+[m[32muse Illuminate\Support\Facades\Auth;[m
 [m
 class LoginController extends Controller[m
 {[m
[1mdiff --git a/app/User.php b/app/User.php[m
[1mindex ea9a023..71ef440 100644[m
[1m--- a/app/User.php[m
[1m+++ b/app/User.php[m
[36m@@ -50,4 +50,26 @@[m [mclass User extends Authenticatable {[m
     {[m
         return $this->hasMany(Project::class, 'owner_id');[m
     }[m
[32m+[m
[32m+[m[32m    public function isVerified(bool $bool)[m
[32m+[m[32m    {[m
[32m+[m[32m        switch (true)[m
[32m+[m[32m        {[m
[32m+[m[32m            case $bool == true :[m
[32m+[m[32m                return (bool) $this->email_verified_at;[m
[32m+[m[32m            break;[m
[32m+[m
[32m+[m[32m            case $bool == false :[m
[32m+[m[32m                return ! $this->email_verified_at;[m
[32m+[m[32m            break;[m
[32m+[m
[32m+[m[32m            default :[m
[32m+[m[32m                return (bool) $this->email_verified_at;[m
[32m+[m[32m        }[m
[32m+[m[32m    }[m
[32m+[m
[32m+[m[32m    public function isNotVerified()[m
[32m+[m[32m    {[m
[32m+[m[32m        return ! $this->email_verified_at;[m
[32m+[m[32m    }[m
 }[m
\ No newline at end of file[m
[1mdiff --git a/public/css/custom.css b/public/css/custom.css[m
[1mindex a972fbc..57374e3 100644[m
[1m--- a/public/css/custom.css[m
[1m+++ b/public/css/custom.css[m
[36m@@ -36,6 +36,26 @@[m [ma:hover {[m
   min-width: 2em !important;[m
 }[m
 [m
[32m+[m[32m.flash-message {[m
[32m+[m[32m  display: none;[m
[32m+[m[32m  width: 100%;[m
[32m+[m[32m  text-align: center;[m
[32m+[m[32m  margin: auto;[m
[32m+[m[32m  padding: 0;[m
[32m+[m[32m  position: -webkit-sticky;[m
[32m+[m[32m  position: sticky;[m
[32m+[m[32m  border-bottom-right-radius: 0.25rem !important;[m
[32m+[m[32m  border-bottom-left-radius: 0.25rem !important;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.admin-top {[m
[32m+[m[32m  width: 100%;[m
[32m+[m[32m  text-align: center;[m
[32m+[m[32m  margin: auto;[m
[32m+[m[32m  position: -webkit-sticky;[m
[32m+[m[32m  position: sticky;[m
[32m+[m[32m}[m
[32m+[m
 .border-default {[m
   border: 3px solid #406e8e;[m
 }[m
[1mdiff --git a/resources/sass/custom.scss b/resources/sass/custom.scss[m
[1mindex b0fba44..f53d8e2 100644[m
[1m--- a/resources/sass/custom.scss[m
[1m+++ b/resources/sass/custom.scss[m
[36m@@ -68,6 +68,26 @@[m [ma:hover[m
   min-width : 2em !important;[m
 }[m
 [m
[32m+[m[32m.flash-message[m
[32m+[m[32m{[m
[32m+[m[32m  display                    : none;[m
[32m+[m[32m  width                      : 100%;[m
[32m+[m[32m  text-align                 : center;[m
[32m+[m[32m  margin                     : auto;[m
[32m+[m[32m  padding                    : 0;[m
[32m+[m[32m  position                   : sticky;[m
[32m+[m[32m  border-bottom-right-radius : 0.25rem !important;[m
[32m+[m[32m  border-bottom-left-radius  : 0.25rem !important;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.admin-top[m
[32m+[m[32m{[m
[32m+[m[32m  width                      : 100%;[m
[32m+[m[32m  text-align                 : center;[m
[32m+[m[32m  margin                     : auto;[m
[32m+[m[32m  position                   : sticky;[m
[32m+[m[32m}[m
[32m+[m
 .border-default[m
 {[m
   border : 3px solid $bgDefault;[m
[1mdiff --git a/resources/views/layouts/master.blade.php b/resources/views/layouts/master.blade.php[m
[1mindex 9f9ef4f..2ba3301 100644[m
[1m--- a/resources/views/layouts/master.blade.php[m
[1m+++ b/resources/views/layouts/master.blade.php[m
[36m@@ -28,6 +28,9 @@[m
   <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" >[m
   <link rel="manifest" href="/site.webmanifest" >[m
 [m
[32m+[m[32m  <!-- jQuery CDN -->[m
[32m+[m[32m  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script >[m
[32m+[m
   <!-- Providers/TitleServiceProvider.php -->[m
   <title >[m
     {{ $sc_title }}[m
[36m@@ -36,9 +39,9 @@[m
 </head >[m
 <body class="theme-{{ $sc_theme }}" >[m
 [m
[31m-@if(auth()->id() == 1 && auth()->check())[m
[31m-  @include('partials.admin')[m
[31m-@endif[m
[32m+[m[32m@include('partials.admin')[m
[32m+[m
[32m+[m[32m@include('partials.message')[m
 [m
 @include('partials.header')[m
 [m
[36m@@ -47,14 +50,10 @@[m
     @yield('content')[m
   </div >[m
 @endif[m
[31m-[m
 @include('partials.footer')[m
 [m
 <!-- Optional JavaScript -->[m
[31m-<!-- jQuery first, then Popper.js, then Bootstrap JS -->[m
[31m-<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"[m
[31m-        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"[m
[31m-        crossorigin="anonymous" ></script >[m
[32m+[m[32m<!-- Popper.js, then Bootstrap JS -->[m
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"[m
         integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"[m
         crossorigin="anonymous" ></script >[m
[1mdiff --git a/resources/views/partials/admin.blade.php b/resources/views/partials/admin.blade.php[m
[1mindex 2018fbb..88d3907 100644[m
[1m--- a/resources/views/partials/admin.blade.php[m
[1m+++ b/resources/views/partials/admin.blade.php[m
[36m@@ -1,18 +1,20 @@[m
[31m-<div class="text-center position-sticky" >[m
[31m-  <div class="bg-warning text-white" >[m
[31m-    <div class="columns is-centered is-vcentered mr-auto" >[m
[31m-      <div class="column is-narrow" >[m
[31m-        <b>ADMIN</b>[m
[31m-      </div >[m
[31m-      <div class="column is-narrow" >[m
[31m-        <a href="/admin/dashboard" class="text-white" >Control Panel</a >[m
[31m-      </div >[m
[31m-      <div class="column is-narrow" >[m
[31m-        <a href="/admin/users" class="text-white" >Users</a >[m
[31m-      </div >[m
[31m-      <div class="column is-narrow" >[m
[31m-        <a href="/admin/projects" class="text-white" >Projects</a >[m
[32m+[m[32m@if(auth()->id() == 1 && auth()->check())[m
[32m+[m[32m  <div class="text-center position-sticky admin-top">[m
[32m+[m[32m    <div class="bg-warning text-white" >[m
[32m+[m[32m      <div class="columns is-centered is-vcentered mr-auto" >[m
[32m+[m[32m        <div class="column is-narrow" >[m
[32m+[m[32m          <b >ADMIN</b >[m
[32m+[m[32m        </div >[m
[32m+[m[32m        <div class="column is-narrow" >[m
[32m+[m[32m          <a href="/admin/dashboard" class="text-white" >Control Panel</a >[m
[32m+[m[32m        </div >[m
[32m+[m[32m        <div class="column is-narrow" >[m
[32m+[m[32m          <a href="/admin/users" class="text-white" >Users</a >[m
[32m+[m[32m        </div >[m
[32m+[m[32m        <div class="column is-narrow" >[m
[32m+[m[32m          <a href="/admin/projects" class="text-white" >Projects</a >[m
[32m+[m[32m        </div >[m
       </div >[m
     </div >[m
   </div >[m
[31m-</div >[m
\ No newline at end of file[m
[32m+[m[32m@endif[m
\ No newline at end of file[m
[1mdiff --git a/resources/views/partials/header.blade.php b/resources/views/partials/header.blade.php[m
[1mindex 9c2bd3f..4bcfe10 100644[m
[1m--- a/resources/views/partials/header.blade.php[m
[1m+++ b/resources/views/partials/header.blade.php[m
[36m@@ -25,10 +25,10 @@[m
 [m
     <div class="collapse navbar-collapse" id="navbarSupportedContent" >[m
       <!-- Left Side Of Navbar -->[m
[31m-    <ul class="navbar-nav mr-auto" >[m
[31m-    </ul >[m
[32m+[m[32m      <ul class="navbar-nav mr-auto" >[m
[32m+[m[32m      </ul >[m
 [m
[31m-    <!-- Right Side Of Navbar -->[m
[32m+[m[32m      <!-- Right Side Of Navbar -->[m
       <ul class="navbar-nav ml-auto list-inline" >[m
         <!-- Links -->[m
         <li class="nav-item list-inline-item" >[m
[36m@@ -77,11 +77,10 @@[m
               {{ Auth::user()->username }}[m
               <span class="caret" ></span >[m
             </a >[m
[31m-[m
             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" >[m
               <a class="dropdown-item" href="{{ route('logout') }}"[m
                  onclick="event.preventDefault();[m
[31m-                                                     document.getElementById('logout-form').submit();" >[m
[32m+[m[32m                 document.getElementById('logout-form').submit();" >[m
                 {{ __('Logout') }}[m
               </a >[m
 [m
[1mdiff --git a/resources/views/partials/message.blade.php b/resources/views/partials/message.blade.php[m
[1mindex e69de29..56d475e 100644[m
[1m--- a/resources/views/partials/message.blade.php[m
[1m+++ b/resources/views/partials/message.blade.php[m
[36m@@ -0,0 +1,20 @@[m
[32m+[m[32m<script >[m
[32m+[m
[32m+[m[32m  const message = "#flash-message";[m
[32m+[m[32m  const time    = 1000;[m
[32m+[m[32m  const wait    = 3000;[m
[32m+[m
[32m+[m[32m  $(document).ready(function() {[m
[32m+[m[32m    $(message).ready(function() {[m
[32m+[m[32m      $(message).slideDown(time, function() {[m
[32m+[m[32m        $(message).delay(wait).slideToggle(time);[m
[32m+[m[32m      });[m
[32m+[m[32m    });[m
[32m+[m[32m  });[m
[32m+[m[32m</script >[m
[32m+[m
[32m+[m[32m@if(session('message'))[m
[32m+[m[32m  <div id="flash-message" class="flash-message has-background-success text-white" >[m
[32m+[m[32m    {{ session('message') }}[m
[32m+[m[32m  </div >[m
[32m+[m[32m@endif[m
\ No newline at end of file[m
[1mdiff --git a/routes/web.php b/routes/web.php[m
[1mindex 24f95bc..029d818 100644[m
[1m--- a/routes/web.php[m
[1m+++ b/routes/web.php[m
[36m@@ -1,5 +1,6 @@[m
 <?php[m
 [m
[32m+[m[32muse Illuminate\Http\Request;[m
 use Illuminate\Support\Facades\Auth;[m
 use Illuminate\Support\Facades\Route;[m
 [m
[36m@@ -17,7 +18,6 @@[m [mRoute::get('/contact', 'PageController@contact')->name('contact');[m
 [m
 Route::resource('projects', 'ProjectsController')->middleware('auth');[m
 [m
[31m-Auth::routes();[m
 [m
 [m
 /*[m
[36m@@ -52,3 +52,6 @@[m [mRoute::middleware('auth')->group(function () {[m
     Route::get('/users/{user}', 'ProfileController@show')->name('profile'); // Show[m
 });[m
 [m
[32m+[m[32mRoute::get('/logout','Auth\LoginController@logout')->name('logout');[m
[32m+[m
[32m+[m[32mAuth::routes();[m
