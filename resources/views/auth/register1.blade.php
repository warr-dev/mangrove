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
        <img src="{{asset('mangrove.jpg')}}" alt="" class="background">
        <div class="page">
            <div class="mycontent">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                <section class="text-gray-600 body-font ">
                    <div class="container px-5 py-36 mx-auto flex flex-wrap items-center">
                        <div class=" md:w-1/2 md:pr-16 lg:pr-0 pr-0">
                            <h3 class="title-font font-bold lg:text-7xl text-6xl text-white text-center md:text-left ">RETICENCE AND ENDOWMENT SYSTEM FOR SILONAY MANGROVE</h3>
                            {{-- <p class="leading-relaxed mt-4 lg:text-3xl text-2xl lg:max-w-xl font-medium  text-black text-center md:text-left ">Facebook helps you connect and share with the people in your life.</p> --}}
                        </div>
                        <div class="md:w-1/2 bg-green-100 shadow-lg rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
                            {{-- <form id="frmlogin"> --}}
                                <h1 class="text-2xl text-center title-font font-bold">Sign Up</h1>
                                <span class="text-center pb-5 title-font">Register now while places are available</span>
                                
                                <div class="grid grid-cols-2 gap-4">
                                    <div id="input-full_name">
                                        <input type="text" value="{{old('full_name')}}"  name="full_name" placeholder="Enter Your Full Name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-lg outline-none  text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
                                        @error('full_name')
                                            <small class="text-red-500 p-l-5">{{$message}}</small>
                                        @enderror
                                    </div>
                                    
                                    <div>
                                        <input type="text" value="{{old('username')}}"  name="username" placeholder="Username" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-lg outline-none  text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
                                        @error('username')
                                            <small class="text-red-500 p-l-5">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div id="input-address">
                                        <input type="text" value="{{old('address')}}"  name="address" placeholder="Address" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-lg outline-none  text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
                                        @error('address')
                                            <small class="text-red-500 p-l-5">{{$message}}</small>
                                        @enderror
                                    </div>
                                    
                                    <div id="input-number">
                                        <input type="text" value="{{old('phone')}}"  name="phone" placeholder="Phone Number" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-lg outline-none  text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
                                        @error('phone')
                                            <small class="text-red-500 p-l-5">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div id="input-city">
                                        <input type="text" value="{{old('city')}}"  name="city" placeholder="City" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-lg outline-none  text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
                                        @error('city')
                                            <small class="text-red-500 p-l-5">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div id="input-zipcode">
                                        <input type="text" value="{{old('zipcode')}}"  name="zipcode" placeholder="Zipcode" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-lg outline-none  text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
                                        @error('zipcode')
                                            <small class="text-red-500 p-l-5">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div id="input-email" class="col-span-2">
                                        <input type="text" value="{{old('email')}}"  name="email" placeholder="Email address" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-lg outline-none  text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
                                        @error('email')
                                            <small class="text-red-500 p-l-5">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-span-2">
                                        <input type="password"  name="password" placeholder="Password" value="{{old('password')}}" class="w-full  bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200  outline-none text-lg text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
                                        @error('password')
                                            <small class="text-red-500 p-l-5">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-span-2">
                                        <input type="password"  name="password_confirmation" placeholder="Confirm Password" value="{{old('password_confirmation')}}" class="w-full  bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200  outline-none text-lg text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
                                    </div>
                                    
                                    <div class="main flex border rounded-full overflow-hidden m-4 select-none col-span-2">
                                        <div class="title py-3 my-auto px-5 bg-green-500 text-white text-sm font-semibold mr-3">Gender</div>
                                        <label class="flex radio p-2 px-4 cursor-pointer">
                                            <input class="my-auto transform scale-125" type="radio" name="gender" value="male" checked/>
                                            <div class="title px-2">male</div>
                                        </label>
                                    
                                        <label class="flex radio p-2 px-4 cursor-pointer">
                                            <input class="my-auto transform scale-125" type="radio" name="gender" value="female" />
                                            <div class="title px-2">female</div>
                                        </label>
                                    </div>
                                    @error('gender')
                                        <small class="text-red-500 p-l-5">{{$message}}</small>
                                    @enderror
                                </div>
                                <button type="submit" class="my-4 text-white border-0 py-2 px-8 focus:outline-none font-medium  rounded text-xl bg-green-700 " >Register</button>
                                <p class="text-sm text-gray-500 py-5 text-center">Already have an account? <span class="text-blue-500"><a href="{{route('login')}}">Sign in</a></span></p>
                                
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

        <script src="{{ asset('js/jq.js') }}"></script>
    </body>
</html>

    