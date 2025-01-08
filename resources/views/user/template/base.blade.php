<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  @yield('title')

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/templatemo-space-dynamic.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/animated.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">

		
  @yield('styles')

  </head>
  <!-- END: Head-->
  <body>
    {{--<!-- BEGIN: Side Bar-->
    @include('user.include.sidebar')
    <!-- END: Side Bar-->

    <!-- BEGIN: Header-->
    @include('user.include.header')
    <!-- END: Header-->

    <!-- BEGIN: Page Main-->--}}
	
	
	<!-- Alert Message -->
	
	@if(Session::has('message'))
		<!--<div class="card-alert card card-alert card {{ Session::get('alert-class', 'alert-info') }} ensober_alert"> 
			<div class="card-content white-text">
				<p><i class="material-icons">check</i> {{ Session::get('message') }}.</p>
			</div>
			<button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div>-->
	@endif
	
	{{--@include('../common.notify')--}}
	<!-- /Alert Message -->
	
    @yield('content')
    <!-- END: Page Main-->

    
    <!-- BEGIN: Footer-->
    @include('user.include.footer')
    <!-- END: Footer-->
	
    
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('assets/js/animation.js') }}"></script>
  <script src="{{ asset('assets/js/imagesloaded.js') }}"></script>
  <script src="{{ asset('assets/js/templatemo-custom.js') }}"></script>
	@yield('scripts')
  </body>
</html>