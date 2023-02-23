<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Silonay Mangrove RES ') }}</title>

    
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/my.css') }}">
    <link rel="stylesheet" href="{{ asset('css/alertify.min.css') }}">

    @stack('head')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <style>
      .animated {
          -webkit-animation-duration: 1s;
          animation-duration: 1s;
          -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
      }
  
      .animated.faster {
          -webkit-animation-duration: 500ms;
          animation-duration: 500ms;
      }
  
      .fadeIn {
          -webkit-animation-name: fadeIn;
          animation-name: fadeIn;
      }
  
      .fadeOut {
          -webkit-animation-name: fadeOut;
          animation-name: fadeOut;
      }
  
      @keyframes fadeIn {
          from {
              opacity: 0;
          }
  
          to {
              opacity: 1;
          }
      }
  
      @keyframes fadeOut {
          from {
              opacity: 1;
          }
  
          to {
              opacity: 0;
          }
      }
  </style>
</head>
<body>
@stack('begin')
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
			<img onclick="location.href='{{route('admin.home')}}'" src="{{asset('images/logo2.png')}}" class="inline w-32 h-20 md:w-52 md:h-20" alt="">
		</li>
        
        <li class="text-lg py-2"><a href="{{route('admin.gallery.index')}}" class="px-2 hover:text-gray-200">Gallery</a></li>
        <li class="text-lg py-2"><a  href="{{route('admin.localnews.index')}}" class="px-2 hover:text-gray-200">Local News Update</a></li>
        <li class="text-lg py-2"><a  href="{{route('admin.advisory.index')}}" class="px-2 hover:text-gray-200">Advisory</a></li>
        <li class="text-lg py-2"><a  href="{{route('admin.advertisement.index')}}" class="px-2 hover:text-gray-200">Advertisements</a></li>
        <li class="text-lg py-2">
            <a href="{{route('admin.user.index')}}" class="px-2 hover:text-gray-200">Registered Users</a>
            @if(App\Models\User::countPending()>0)
                <span class="inline-block rounded-full text-white bg-red-500 px-2 py-1 text-xs font-bold mr-3">{{App\Models\User::countPending()}}</span>
            @endif
        </li>
        <li class="text-lg py-2">
                <a href="{{route('admin.reservations.index')}}" class="px-2 hover:text-gray-200">Reservation Requests</a>
            
                @if(App\Models\Reservation::countPending()>0)
                    <span class="inline-block rounded-full text-white bg-red-500 px-2 py-1 text-xs font-bold mr-3">{{App\Models\Reservation::countPending()}}</span>
                @endif
        </li>
            <li class="text-lg py-2">
                <a href="{{route('admin.donations.index')}}" class="px-2 hover:text-gray-200">Donation Directory</a>
                
                @if(App\Models\Donations::countPending()>0)
                    <span class="inline-block rounded-full text-white bg-red-500 px-2 py-1 text-xs font-bold mr-3">{{App\Models\Donations::countPending()}}</span>
                @endif
            </li>
        <li class="text-lg py-2"><a href="{{route('admin.events.index')}}" class="px-2 hover:text-gray-200">Events</a></li>
	    <li class="text-lg py-2"><a id="btnlogout" href="#" class="px-2 hover:text-gray-200">Logout</a></li>
	  
  </ul>
<form id="frmlogout" method="post" action="{{route('logout')}}">@csrf</form>
</div>
<img src="{{asset('images/bg.jpg')}}" alt="mangrove" class="background">

@yield('content')

<script src="{{ asset('js/jq.js') }}"></script>
<script src="{{ asset('js/alertify.min.js') }}"></script>
<script>
    $('#btnlogout').click((e)=>{
        e.preventDefault();
        $('#frmlogout')[0].submit()
    })
    @if(session('message'))
      alertify.success('{{session('message')}}')
    @endif
</script>
<script src="{{ asset('js/my.js') }}"></script>
@stack('scripts')
</body>
</html>