<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Global stylesheets -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
<link href="{{ asset('ll/global_assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('ll/global_assets/css/icons/fontawesome/styles.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('ll/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('ll/assets/css/bootstrap_limitless.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('ll/assets/css/layout.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('ll/assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('ll/assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">
@stack('stylesheets')
<!-- /global stylesheets -->

<!-- Core JS files -->
<script src="{{ asset('ll/global_assets/js/main/jquery.min.js') }}"></script>
<script src="{{ asset('ll/global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('ll/global_assets/js/plugins/loaders/blockui.min.js') }}"></script>
<script src="{{ asset('ll/global_assets/js/plugins/ui/ripple.min.js') }}"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script src="{{ asset('ll/js/app.js') }}"></script>
@stack('scripts')
<!-- /theme JS files -->