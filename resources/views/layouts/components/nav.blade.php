@auth
    <form id="frmlogout" method="post" action="{{route('logout')}}"> @csrf </form>
@endauth
<nav id="nav" class="fixed inset-x-0 top-2 flex flex-row justify-between z-10 text-white bg-transparent">

    <div class="p-4">
        <div class="font-extrabold tracking-widest text-xl"><a href="{{route('user.home')}}" class="transition duration-500 hover:text-indigo-500">
            <img src="/images/logo2.png" alt="logo" style="height:5rem">
        </a></div>
    </div>

    <!-- Nav Items Working on Tablet & Bigger Sceen -->
    <div class="p-4 hidden md:flex flex-row justify-between font-bold" style="height: fit-content">
        <a id="hide-after-click" href="#about" class="mx-4 text-lg  border-b-2 border-transparent hover:border-b-2 hover:border-indigo-300 transition duration-500">About</a>
        <a href="{{route('user.donation')}}" class="mx-4 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-indigo-300 transition duration-500">Donation
            </a>
        <a href="{{route('user.reservation')}}" class="mx-4 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-indigo-300 transition duration-500">Reservation
            </a>
        <a href="#events" class="mx-4 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-indigo-300 transition duration-500">Events
            </a>
        <a href="#contacts" class="mx-4 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-indigo-300 transition duration-500">Contacts
            </a>
        @auth
            <a href="#" onclick="event.preventDefault();document.querySelector('#frmlogout').submit();" class="mx-4 text-lg border-b-2 border-transparent hover:border-b-2 hover:border-indigo-300 transition duration-500">Logout</a>
        @endauth
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
        <a href="{{route('user.donation')}}" class="p-2 font-semibold hover:text-indigo-700">Donation</a>
        <a href="{{route('user.reservation')}}" class="p-2 font-semibold hover:text-indigo-700">Reservation</a>
        <a href="#event" class="p-2 font-semibold hover:text-indigo-700">Events</a>
        <a href="#contact" class="p-2 font-semibold hover:text-indigo-700">Contacts</a>
        <a href="#" onclick="event.preventDefault();document.querySelector('#frmlogout').submit();" class="p-2 font-semibold hover:text-indigo-700">Logout</a>
    </div>
</div>

