@extends('layouts.user')


@section('content')
{{-- <form id="frm-reserve">@csrf
<div class="content bg-white md:mx-10 lg:mx-20 text-gray-700 p-7 text-center" style="background-color:rgba(217, 246, 222, 0.6)" >
    <h1 class="text-xl font-black uppercase">Online Reservation Form</h1>

    <div class="flex flex-col md:flex-row">
        <x-form.input2 name="date_visit" type="date" label="Date of Visit" />
        <div class="w-full mx-2 flex-1 svelte-1l8159u">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Session</div>
            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                <select class="p-1 px-2 appearance-none outline-none w-full text-gray-800" name="session_id" id="session_id">
                    @forelse ($sessions as $session)
                        <option value="{{ $session->id }}">{{ $session->name }}</option>
                    @empty
                        <option value="">No Session Available</option>
                    @endforelse
                </select>
            </div>
            <div class="w-full text-left ml-4"> <small id="error-province" class="text-red-500 p-l-5 indent-1"></small></div>
        </div>
        <x-form.input2 type="number" name="no_of_pax" label="Number of Pax" />
       
    </div>
    <div class="flex items-center gap-5 px-4 py-2"><span class="text-xl">Representative</span><hr class="w-2/3 border-green-500 border-t-4"></div>

    <div class="font-bold text-gray-600 text-xs leading-8 uppercase h-6 mx-2 mt-3">Full Name</div>
    <div class="flex flex-col md:flex-row">
        <x-form.input2 name="first_name" placeholder="First Name" />
        <x-form.input2 name="last_name" placeholder="Last Name" />
    </div>
    <div class="flex flex-col md:flex-row">
        
        <x-form.input2 name="email" label="Email" />
        <x-form.input2 name="phone" label="Phone Number" />
    </div>
    <div class="flex flex-col md:flex-row">
        
        <x-form.input2 name="address" label="Address" />
        <div class="w-full mx-2 flex-1 svelte-1l8159u">
            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Events/Activities</div>
            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                <select class="p-1 px-2 appearance-none outline-none w-full text-gray-800" name="event_id" id="events">
                    @forelse ($events as $event)
                        <option value="{{ $event->id }}">{{ $event->title }}</option>
                    @empty
                        <option value="">No Event Available</option>
                    @endforelse
                </select>
            </div>
            <div class="w-full text-left ml-4"> <small id="error-province" class="text-red-500 p-l-5 indent-1"></small></div>
        </div>
    </div>


    <div class="flex p-2 mt-4">
        <div class="justify-end flex w-full">
            
            <button id="btn-submit" type="submit" class="text-base  ml-2  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer 
            hover:bg-teal-600  
            bg-teal-600 
            text-teal-100 
            border duration-200 ease-in-out 
            border-teal-600 transition">Submit</button>
            
    
        </div>
    </div>
</div>
</form> --}}
@include('user.components.reservation-form')
@endsection

@push('scripts')
    <script>
        $('#frm-reserve').on('submit', function(e){
            let fd=new FormData(this);
            e.preventDefault();
            // $('#btn-submit').attr('disabled', true);
            $('#btn-submit').html('<span class="spinner-border spinner-border-sm mr-2"></span> Processing...');
            $.ajax({
                url: "{{ route('user.reservation.store') }}",
                type: "POST",
                data: fd,
                enctype: 'multipart/form-data',
                processData: false,  // tell jQuery not to process the data
                contentType: false,   // tell jQuery not to set contentType
                success: function(data){
                    $('#btn-submit').attr('disabled', false);
                    $('#btn-submit').html('Submit');
                    if(data.message){
                        // Swal.fire({
                        //     title: 'Success!',
                        //     text: data.message,
                        //     icon: 'success',
                        //     confirmButtonText: 'OK'
                        // }).then((result) => {
                        //     if (result.value) {
                        //     }
                        // });
                        alertify.success(data.message);
                        location.reload();
                    }else{
                        // Swal.fire({
                        //     title: 'Error!',
                        //     text: data.message,
                        //     icon: 'error',
                        //     confirmButtonText: 'OK'
                        // });
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
        });
    </script>
@endpush