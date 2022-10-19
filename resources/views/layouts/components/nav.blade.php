@auth
    <form id="frmlogout" method="post" action="{{route('logout')}}"> @csrf </form>
@endauth
<nav id="nav" class="fixed inset-x-0 top-2 flex flex-row justify-between z-10 text-white bg-transparent">

    <div class="p-4">
        <div class="font-extrabold tracking-widest text-xl"><a href="{{route('landing')}}" class="transition duration-500 hover:text-indigo-500">
            <img src="/images/logo2.png" alt="logo" style="height:5rem">
        </a></div>
    </div>

    <!-- Nav Items Working on Tablet & Bigger Sceen -->
    <div class="p-4 hidden md:flex flex-row justify-between font-bold" style="height: fit-content">
        <a id="hide-after-click" href="{{route('landing')}}#about" class="mx-4 text-lg  border-b-2 border-transparent hover:border-b-2 hover:border-indigo-300 transition duration-500">About</a>
        <a href="{{route('adddonations')}}" class="mx-4 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-indigo-300 transition duration-500">Donation
            </a>
        @if (auth()->check())
            <a href="{{route('user.reservation')}}" class="mx-4 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-indigo-300 transition duration-500">Reservation
            </a>
        @endif
        <a href="#advisory" class="mx-4 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-indigo-300 transition duration-500">Advisory
            </a>
        <a href="#contacts" class="mx-4 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-indigo-300 transition duration-500">Contacts
            </a>
            <div  class="relative border-b-4 border-transparent" 
            {{-- :class="{'border-indigo-700 transform transition duration-300 ': open}"
             x-transition:enter-end="transform opacity-100 scale-100" 
             x-transition:leave="transition ease-in duration-75"
              x-transition:leave-start="transform opacity-100 scale-100" --}}
              >
                <div class="flex justify-center items-center space-x-3 cursor-pointer">
                    <a href="#" id="btn-account" class="mx-4 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-indigo-300 transition duration-500"> @auth {{auth()->user()->getFullName()}} @else Account @endauth</a>
                    </a>
                </div>
                <div id="account_dd"
                {{-- x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95"  --}}
                class="absolute w-60 px-5 right-0 py-3 bg-white rounded-lg shadow border text-gray-700 mt-5 hidden">
                  <ul class="space-y-3">
                    @auth
                    <li class="font-medium">
                        <a href="{{route('user.account.view')}}" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                          <div class="mr-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                          </div>
                          Account
                        </a>
                      </li>
                      {{-- <li class="font-medium">
                        <a href="#" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                          <div class="mr-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                          </div>
                          Setting
                        </a>
                      </li> --}}
                      <hr class="dark:border-gray-700">
                      <li class="font-medium">
                        <a href="#" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-600"  onclick="event.preventDefault();document.querySelector('#frmlogout').submit();">
                          <div class="mr-3 text-red-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                          </div>
                          Logout
                        </a>
                      </li>
                    @else
                    <li class="font-medium">
                        <a href="{{route('login')}}" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                          <div class="mr-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                          </div>
                          Login
                        </a>
                      </li>
                      <li class="font-medium">
                        <a href="{{route('register')}}" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                          <div class="mr-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                          </div>
                          Register
                        </a>
                      </li>
                    @endauth
                    
                  </ul>
                </div>
              </div>
        {{-- @auth
            <a href="#" onclick="event.preventDefault();document.querySelector('#frmlogout').submit();" class="mx-4 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-indigo-300 transition duration-500">Logout</a>
        @else
            <a href="#contacts" class="mx-4 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-indigo-300 transition duration-500">Login
            </a>
        @endauth --}}
    </div>

    <!-- Burger Nav Button on Mobile -->
    <div id="nav-open" class="p-4 md:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
         stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
    </div>
</nav>
<!-- Opened Nav in Mobile, you can use javascript/jQuery -->
<div id="nav-opened" class="fixed left-0 right-0 top-0 bg-white hidden mx-2 mt-16 rounded-br rounded-bl shadow z-10">
    <div class="p-2 divide-y divide-gray-600 flex flex-col">
        <a href="#about" class="p-2 font-semibold hover:text-indigo-700">About</a>
        <a href="{{route('adddonations')}}" class="p-2 font-semibold hover:text-indigo-700">Donation</a>
        <a href="{{route('user.reservation')}}" class="p-2 font-semibold hover:text-indigo-700">Reservation</a>
        <a href="#event" class="p-2 font-semibold hover:text-indigo-700">Events</a>
        <a href="#contact" class="p-2 font-semibold hover:text-indigo-700">Contacts</a>
        <a href="#" onclick="event.preventDefault();document.querySelector('#frmlogout').submit();" class="p-2 font-semibold hover:text-indigo-700">Logout</a>
    </div>
</div>

<script>
    // dropdown menu
    document.querySelector('#btn-account').addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector('#account_dd').classList.toggle('hidden');
    });
</script>

