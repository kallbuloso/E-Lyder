<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

		<!-- Bootstrap -->
		<link href="{{ asset('admin-assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="{{ asset('admin-assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
		<!-- NProgress -->
		<link href="{{ asset('admin-assets/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('admin-assets/vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('admin-assets/build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <!--a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a-->

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            @yield('content')
          </section>
        </div>
      </div>
    </div>
  </body>
</html>