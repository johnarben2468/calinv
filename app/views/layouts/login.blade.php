<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>Cal Inventory System</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width"> 
    {{ HTML::style('css/templatemo_main.css') }}
    {{ HTML::script('js/jquery.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('js/templatemo_script.js') }}

</head>
<body>
  <div id="main-wrapper">
    <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1>Cal Inventory System - Login</h1></div>
      </div>   
    </div>
    <div class="template-page-wrapper">
      @yield('content')
    </div>
  </div>
</body>
</html>