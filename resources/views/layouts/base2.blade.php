<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/my.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

<div x-data="{ menu: false }" class="relative right-0 top-0">

  <button @click="menu = !menu" class="z-20 fixed right-2 top-2 px-4 py-4 bg-green-500 md:hover:bg-green-200  transform duration-500 ease-in-out md:hover:scale-110 motion-reduce:transform-none text-white m-2 focus:outline-none" >
	<svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path x-show="!menu" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
	<path x-show="menu"  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
</svg>
	</button>
	
	 <ul
    x-show.transition.duration.500ms="menu"
    @click.away="menu = false"
  class="flex flex-col w-full h-full bg-gray-800 text-gray-400 text-center z-10 fixed sm:px-3 sm:py-2  md:px-8 md:py-4 overflow-y-auto " style="display: none;">
		<li @click="menu = !menu" class="px-8 py-4 bg-gray-300 mb-20 mx-16">
			<img src="https://poliweb.github.io/ing/PolIWeb_Development_Logo_Orang.svg" class="inline w-32 h-20 md:w-52 md:h-20" alt="">
		</li>
    <li class="text-lg py-2"><a href="#" class="px-2 hover:text-gray-200">Local News Update</a></li>
    <li class="text-lg py-2"><a href="{{route('admin.user.index')}}" class="px-2 hover:text-gray-200">Registered Users</a></li>
	 <li class="text-lg py-2"><a href="{{route('admin.reservations.index')}}" class="px-2 hover:text-gray-200">Reservation Requests</a></li>
	 <li class="text-lg py-2"><a href="#" class="px-2 hover:text-gray-200">Donation Directory</a></li>
   <li class="text-lg py-2"><a href="{{route('admin.events.index')}}" class="px-2 hover:text-gray-200">Events</a></li>
	 <li class="text-lg py-2"><a id="btnlogout" href="#" class="px-2 hover:text-gray-200">Logout</a></li>
	  
  </ul>
<form id="frmlogout" method="post" action="{{route('logout')}}">@csrf</form>
</div>
<img src="{{asset('mangrove.jpg')}}" alt="mangrove" class="background">

@yield('content')

<script src="{{ asset('js/jq.js') }}"></script>
<script>
    $('#btnlogout').click((e)=>{
        e.preventDefault();
        $('#frmlogout')[0].submit()
    })
</script>
</body>
</html>