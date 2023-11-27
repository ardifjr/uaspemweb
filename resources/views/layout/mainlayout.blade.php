<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>Testing DKPP</title>

      <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="{{url('assets/img/favicon.png')}}">
      @include('layout.partials.head-main')
    </head>
    <body>
      @if(!Route::is(['error-404','error-500','session-expired']))
        <div class="main-wrapper">
      @endif
      @if(Route::is(['session-expired']))
            <div class="main-wrapper error-page">
      @endif
        @include('layout.partials.header-main')
            @yield('content')
            @include('layout.partials.footer-main')
            @include('layout.partials.cursor')
            </div>
            @include('layout.partials.footer-main-scripts')
    </body>
</html>