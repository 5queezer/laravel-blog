<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    @include('partials._head')
    @yield('stylesheets')
  </head>
  <body>
    @include('partials._nav')

    <div class="container">
      @include ('partials._messages')

      {{ Auth::check() ? 'Logged in' : 'Logged out' }}

      @yield('content')
      @include('partials._footer')
    </div>

    @include('partials._javascript')
    @yield('scripts')

  </body>
</html>
