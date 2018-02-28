<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/icon/favicon.ico">

    <title>Biofarmacia</title>

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">

    <!-- Custom styles for this template -->

  </head>
  <body>
     @include('components.menu.desktop')

    <main role="main">
      @yield('content')
      <!-- FOOTER -->
      @include('components.footer.desktop')
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="/js/app.js"></script>

  </body>
</html>
