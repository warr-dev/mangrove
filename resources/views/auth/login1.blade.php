<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/my.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <img src="{{asset('images/bg.jpg')}}" alt="background" class="background">
        <div class="page">
            
        
            <div class="mycontent">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                <section class="text-gray-600 body-font ">
                    <div class="container xl:px-32 px-5 py-36 mx-auto flex flex-wrap items-center">
                        <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
                        <h3 class="title-font font-bold lg:text-7xl text-6xl text-white text-center md:text-left ">RETICENCE AND ENDOWMENT SYSTEM FOR SILONAY MANGROVE</h3>
                        {{-- <p class="leading-relaxed mt-4 lg:text-3xl text-2xl lg:max-w-xl font-medium  text-black text-center md:text-left ">Facebook helps you connect and share with the people in your life.</p> --}}
                        </div>
                        <div class="lg:w-2/6 md:w-1/2 bg-green-100 shadow-lg rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
                            {{-- <form id="frmlogin"> --}}
                                
                                <h1 class="text-xl text-center pb-5 title-font font-bold">Sign In</h1>
                                <div class="relative mb-4">
                                    <input type="text" value="{{old('login')}}"  name="login" placeholder="Email address or username" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-lg outline-none  text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
                                    @error('login')
                                        <small class="text-red-500 p-l-5">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="relative mb-4">
                                    <input type="password"  name="password" placeholder="Password" value="{{old('password')}}" class="w-full  bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200  outline-none text-lg text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
                                    @error('password')
                                        <small class="text-red-500 p-l-5">{{$message}}</small>
                                    @enderror
                                </div>
                                
                                <a class="text-sm text-blue-500 py-3">Forgotten password?</a>

                                <button type="submit" class="text-white border-0 py-2 px-8 focus:outline-none font-medium  rounded text-xl bg-green-700 " >Log In</button>
                                <p class="text-sm text-gray-500 py-5 text-center">Don't have an account? <span class="text-blue-500"><a href="{{route('register')}}">Sign up</a></span></p>
                            {{-- </form> --}}
                        </div>
                    
                    </div>
                </section>
                </form>
            </div>
            
            
            <div class="container mx-auto px-6">
                <div class="mt-10 border-t-2 border-gray-300 flex flex-col items-center">
                    <div class="sm:w-2/3 text-center py-6">
                        <p class="text-sm text-white font-bold mb-2">
                             © 2022
                        </p>
                    </div>
                </div>
            </div>
        
        </div>

    </body>
</html>

    