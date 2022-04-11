@extends('layouts.user')


@section('content')
<div class="content bg-white md:mx-10 lg:mx-20 text-gray-700 p-7 text-center" style="background-color:rgba(217, 246, 222, 0.6)" >
    <h1 class="text-xl font-black uppercase">Online Reservation Form</h1>

    <div class="flex flex-col md:flex-row">
        <div class="w-full mx-2 flex-1 svelte-1l8159u">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Date of Visit</div>
            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                <input type="date" placeholder="" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
        </div>
        <div class="w-full mx-2 flex-1 svelte-1l8159u">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Session</div>
            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                <input placeholder="Select Session" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
        </div>
        <div class="w-full mx-2 flex-1 svelte-1l8159u">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> No. of Pax</div>
            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                <input placeholder="20" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
        </div>
    </div>
    <div class="flex items-center gap-5 px-4 py-2"><span class="text-xl">Representative</span><hr class="w-2/3 border-green-500 border-t-4"></div>

    <div class="font-bold text-gray-600 text-xs leading-8 uppercase h-6 mx-2 mt-3">Full Name</div>
    <div class="flex flex-col md:flex-row">
        <div class="w-full flex-1 mx-2 svelte-1l8159u">
            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                <input placeholder="First Name" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
        </div>
        <div class="w-full flex-1 mx-2 svelte-1l8159u">
            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                <input placeholder="Last Name" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="w-full mx-2 flex-1 svelte-1l8159u">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Email</div>
            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                <input placeholder="" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
        </div>
        <div class="w-full mx-2 flex-1 svelte-1l8159u">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Mobile Number</div>
            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                <input placeholder="" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="w-full mx-2 flex-1 svelte-1l8159u">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Address</div>
            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                <input placeholder="" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
        </div>
        <div class="w-full mx-2 flex-1 svelte-1l8159u">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Events/Activities</div>
            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                <input placeholder="" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
        </div>
    </div>


    <div class="flex p-2 mt-4">
        <div class="justify-end flex w-full">
            
            <button id="btn-submit" class="text-base  ml-2  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer 
            hover:bg-teal-600  
            bg-teal-600 
            text-teal-100 
            border duration-200 ease-in-out 
            border-teal-600 transition">Submit</button>
            
    
        </div>
    </div>
</div>

@endsection