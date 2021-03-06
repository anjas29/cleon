<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title') - Cleon</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="{{URL::asset('css/bootflat.min.css')}}" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    @stack('css')
  </head>
  <body>
    @yield('content')

    <script src="{{ URL::asset('js/jquery-1.10.1.min.js') }}" charset="utf-8"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}" charset="utf-8"></script>
    @stack('javascript')
  </body>
</html>
