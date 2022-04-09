<!doctype html>
<html lang="id-ID">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>F</title>
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/my.css') }}">
    
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
	
	<style>
      /*
		You may need this for responsive background
		header {
			background: url('bg-425.jpg');
		}

		@media only screen and (min-width:640px) {
			header {
				background: url('bg-640.jpg');
			}
		}

		@media only screen and (min-width:768px) {
			header {
				background: url('bg-768.jpg');
			}
		}

		@media only screen and (min-width:1024px) {
			header {
				background: url('bg-1024.jpg');
			}
		}

		@media only screen and (min-width:1025px) {
			header {
				background: url('bg-max.jpg');
			}
		} */
      /* Default background by https://www.pexels.com/@knownasovan */
      header {
        background:url('{{asset('mangrove.jpg')}}');}
	</style>
    @stack('head')
</head>

<body>
    <img src="{{asset('images/bg.jpg')}}" alt="background" class="background">
    @include('layouts.components.user.header')
    @yield('content')
	@include('layouts.components.footer')
  <script src="{{ asset('js/jq.js') }}"></script>
<script>
    $('#nav-open').click((e)=>{
        $('#nav-opened').fadeToggle('slow')
    })
</script>
    @stack('scripts')
  </body>
</html>