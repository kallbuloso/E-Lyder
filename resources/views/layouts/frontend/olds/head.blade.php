    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="{{ config('app.name') }}" />
    <meta name="author" content="" />

    <link rel="icon" href="{{ asset( "fe/assets/images/favicon.ico") }}">

    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ asset( "fe/assets/css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ asset( "fe/assets/css/font-icons/entypo/css/entypo.css") }}">
    <link rel="stylesheet" href="{{ asset( "fe/assets/css/neon.css") }}">

    <script src="{{ asset( "fe/assets/js/jquery-1.11.3.min.js" ) }}"></script>

    <!--[if lt IE 9]><script src="{{ asset( "fe/assets/js/ie8-responsive-file-warning.js" ) }}"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

@stack('stylesheets')
