<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Surat Mahasiswa | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        {{HTML::style("assets/css/bootstrap.min.css")}}
        <!-- font Awesome -->
        {{HTML::style("assets/css/font-awesome.min.css")}}
        <!-- Theme style -->
        {{HTML::style("assets/css/AdminLTE.css")}}
        <link rel="stylesheet" href="{{ asset('packages/uikit/css/uikit.almost-flat.min.css')}}" /> 
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">
        @yield('content')
    </body>
    <!-- jQuery 2.0.2 -->
    {{HTML::script('assets/js/jquery.min.js')}}
    <!-- Bootstrap -->
    {{HTML::script('assets/js/bootstrap.min.js')}}
</html>