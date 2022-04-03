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
{{--             
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}
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
                                
                                <div class="grid grid-cols-6 gap-4">
                                    <x-auth.input name="first_name" placeholder="First Name" class="col-span-2" autofocus />
                                    <x-auth.input name="middle_name" placeholder="Middle Name" class="col-span-2" />
                                    <x-auth.input name="last_name" placeholder="Last Name" class="col-span-2" />
                                    <x-auth.select-input name="province" label="Province" class="col-span-6" />
                                    <x-auth.select-input name="city" label="Select Province First" class="col-span-3" />
                                    <x-auth.input name="zipcode" placeholder="Zip Code" class="col-span-3" id="zipcode" :disabled="false" />
                                    <x-auth.input name="barangay" placeholder="Barangay" class="col-span-6" />
                                    <x-auth.input name="number" placeholder="Enter Your Number" class="col-span-6" />
                                    <x-auth.input name="email" placeholder="Enter Your Email" class="col-span-6" />
                                    <x-auth.input name="username" placeholder="Enter Your Username" class="col-span-6" />
                                    <x-auth.input name="password" placeholder="Password" class="col-span-6" type="password" />
                                    <x-auth.input name="password_confirmation" placeholder="Confirm Your Password" class="col-span-6" type="password" />
                                    
                                    <div class="main flex border rounded-full overflow-hidden m-4 select-none col-span-6">
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
        <script>
            var provinces=[];
            $.ajax({
                url: "/zipcodes.json",
                type: "GET",
                dataType: "json",
                success: function(data){
                    provinces=data.provinces;
                    $('#province').html('');
                    $('#province').append('<option value="">Select Province</option>');
                    $.each(data.provinces, function(key, value){
                        $('#province').append('<option value="'+key+'">'+key+'</option>');
                    });
                    @if(old('province'))
                        $('#province').val('{{old('province')}}');
                        $('#province')[0].dispatchEvent(new Event("change"))
                    @endif
                    
                }
            });
            $('#city').html('');
            let citylabel=$('#province').val()==''?'<option value="" >Select Province First</option>':'<option value="" >Select City</option>'
            $('#city').append(citylabel);
            $('#province').change(function(){
                var val=$(this).val();
                var cities=provinces[val];
                $('#city').html('');
                $('#city').append('<option >Select City</option>');
                $.each(cities, function(key, value){
                    $('#city').append('<option value="'+value+'">'+value+'</option>');
                });
                @if(old('city'))
                    $('#city').val('{{old('city')}}');
                    $('#city')[0].dispatchEvent(new Event("change"))
                @endif
            });
            $('#city').change(function(){
                var val=$(this).val();
                var zipcode=Object.entries(provinces[$('#province').val()]).filter(function(zipcode){
                    return zipcode[1]==val;
                })[0];
                $('#zipcode').val(zipcode[0]);
            });

        </script>
    </body>
</html>

    