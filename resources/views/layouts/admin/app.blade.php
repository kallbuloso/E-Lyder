<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		@include('layouts.admin.head')
	</head>
	<body class="navbar-md-md-top">	
		<!-- Multiple fixed navbars wrapper -->
		<div class="fixed-top">
			@include('layouts.admin.mainNav')
			@include('layouts.admin.alterNav')
		</div>
		<!-- /multiple fixed navbars wrapper -->
		<!-- Page content -->
		<div class="page-content">
				
			@include('layouts.admin.sidebar')
			<!-- Main content -->
			<div class="content-wrapper">

				@yield('contentArea')
			
				@include('layouts.admin.footer')

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->
		@stack('scripts')
	</body>
</html>

