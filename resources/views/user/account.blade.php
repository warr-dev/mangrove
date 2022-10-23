@extends('layouts.user')


@section('content')
<div class="content bg-white md:mx-10 lg:mx-20 text-gray-700 p-7 text-center" style="background-color:rgba(217, 246, 222, 0.6)" >
    <h1 class="text-xl font-black uppercase">Edit Account</h1>
    <form id="frm-update-profile">
        @csrf
        <x-user.input name="username" title="Username" placeholder="juan" :value="$user->username" />
        <x-user.input name="first_name" title="First Name" placeholder="Juan" :value="$user->profile->first_name" />
        <x-user.input name="middle_name" title="Middle Name" placeholder="Ponce" :value="$user->profile->middle_name" />
        <x-user.input name="last_name" title="Last Name" placeholder="Dela Cruz" :value="$user->profile->last_name" />
        <x-user.input name="phone" title="Phone Number" placeholder="0912313746" :value="$user->phone" />
        <x-user.input name="email" title="Email Address" placeholder="test@example.com" :value="$user->email" />
        <x-user.input name="province" title="Province" placeholder="Oriental Mindoro" :value="$user->profile->province" />
        <x-user.input name="city" title="City or Municipality" placeholder="Calapan" :value="$user->profile->city" />
        <x-user.input name="zipcode" title="Zipcode" placeholder="5200" :value="$user->profile->zipcode" />
        <x-user.input name="barangay" title="Barangay" placeholder="Barangay" :value="$user->profile->barangay" />
        <x-user.input name="gender" title="Gender" placeholder="Gender" :value="$user->profile->gender" />
        <div class="flex justify-center m-4">
            <button type="submit"
                            class="text-base  ml-2  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer 
                            hover:bg-teal-600  
                            bg-teal-600 
                            text-teal-100 
                            border duration-200 ease-in-out 
                            border-teal-600 transition">Update Profile</button>
        </div>
    </form>
</div>

@endsection
@push('scripts')
    <script>
        $('#frm-update-profile').submit((e)=>{
            e.preventDefault();
            $.ajax({
                url: "{{ route('user.account.update') }}",
                type: "put",
                data: $('#frm-update-profile').serialize(),
                success: function(data){
                    $('#btn-submit').attr('disabled', false);
                    $('#btn-submit').html('Submit');
                    if(data.status=='success'){
                        alertify.success(data.message);
                        location.reload();
                    }else{
                        alertify.error(data.message);
                        // location.reload();
                    }
                },
                error: function(data){
                    $('#btn-submit').attr('disabled', false);
                    $('#btn-submit').html('Submit');
                    // Swal.fire({
                    //     title: 'Error!',
                    //     text: 'Something went wrong!',
                    //     icon: 'error',
                    //     confirmButtonText: 'OK'
                    // });
                    showInputErrors(data);
                }
            });
        })
    </script>
@endpush