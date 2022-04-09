@extends('layouts.user')


@section('content')
<div class="content bg-white md:mx-10 lg:mx-20 text-gray-700 p-7 text-center" style="background-color:rgba(217, 246, 222, 0.6)" >
    <h1 class="text-xl font-black uppercase">People Need Nature</h1>
    <h2 class="text-xl">Join the thousands who have stepped up to protect nature and make tax deductible donation today</h2>
    <div>
        @include('user.components.donation-form')
    </div>
</div>

@endsection