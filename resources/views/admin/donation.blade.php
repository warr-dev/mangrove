@extends('layouts.base2')

@section('content')
    @include('admin.components.header')
    <div class="mt-5 mx-20">
        <div class="bg-green-700 text-4xl text-white py-4 px-8">
            Donations
        </div>
        <div class="content">

            <div class="flex items-center justify-center">
                <div class="container p-4">
                    <div class="grid grid-cols-1 gap-4">
                        <table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
                            <thead class="text-white">
                                <tr class="bg-green-700 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                                    <th class="p-3 text-left">Name</th>
                                    <th class="p-3 text-left">Mode</th>
                                    <th class="p-3 text-left">Amount</th>
                                    <th class="p-3 text-left">w/ Fees</th>
                                    <th class="p-3 text-left">Gcash #</th>
                                    <th class="p-3 text-left">ref #</th>
                                    {{-- <th class="p-3 text-left" width="250px">Actions</th> --}}
                                </tr>
                            </thead>
                            <tbody class="flex-1 sm:flex-none">
                                @forelse ($donations as $donation)
                                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0 hover:bg-gray-100 ">
                                        <td class="border-grey-light border p-3">{{$donation->donator->getFullName()}}</td>
                                        <td class="border-grey-light border p-3">{{$donation->mode}}</td>
                                        <td class="border-grey-light border p-3">{{$donation->amount}}</td>
                                        <td class="border-grey-light border p-3">{{$donation->cover_fees?'yes':'no'}}</td>
                                        <td class="border-grey-light border p-3">{{$donation->gcash_number}}</td>
                                        <td class="border-grey-light border p-3">{{$donation->reference_number}}</td>
                                        {{-- <td class="border-grey-light border p-3">
                                            <x-table.badge type="success" label="active" />
                                            {{$donation->status}}
                                        </td> --}}
                                        {{-- <td class="border-grey-light border p-3 hover:font-medium">
                                            <div class="grid grid-cols-1  lg:grid-cols-2 gap-4">
                                                <button type="button" data-userid="{{$donation->id}}" class="decline-user bg-red-500 text-white px-1 py-1 rounded hover:bg-red-600 transition duration-200 each-in-out">Decline</button>
                                                <button type="button" data-userid="{{$donation->id}}" class="approve-user bg-green-500 text-white px-1 py-1 rounded hover:bg-green-600 transition duration-200 each-in-out">Approve</button>
                                            </div>
                                        </td> --}}
                                    </tr>
                                @empty
                                    <tr><td colspan="4" class="text-center font-bold text-lg">No data... </td></tr>
                                @endforelse
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
   
@endsection

@push('scripts')
    <script>
        $(document).ready(function(){
            $('.delevent').click(function(){
                var id = $(this).data('eventid');
                $.ajax({
                    url: "{{route('admin.events.destroy', ':id')}}".replace(':id', id),
                    type: "delete",
                    data: {
                        _token: "{{csrf_token()}}"
                    },
                    success: function(data){
                        if(data.status == 'success'){
                            alertify.success(data.message);
                            location.reload();
                        }
                    },
                    error:(err)=>{
                        console.log(err);
                        showInputErrors(err);
                    }
                });
            });
            $('#frmaddevent').submit(function(e){
                e.preventDefault();
                $.ajax({
                    url: "{{route('admin.events.store')}}",
                    type: "POST",
                    data: $(this).serialize(),
                    success: function(data){
                        if(data.status == 'success'){
                            alertify.success(data.message);
                            location.reload();
                        }
                    },
                    error:(err)=>{
                        console.log(err);
                        showInputErrors(err);
                    }
                });
            });
        });


        const loadvalues=(id)=>{
            $.ajax({
                url: "{{route('admin.events.show', ':id')}}".replace(':id', id),
                type: "GET",
                data: {
                    _token: "{{csrf_token()}}"
                },
                success: function(data){
                    if(data.status == 'success'){
                        console.log(data.event.date);
                        $('#frm-editevent').find('input[name="title"]').val(data.event.title);
                        $('#frm-editevent').find('input[name="date"]').val(data.event.date);
                        $('#frm-editevent').find('input[name="venue"]').val(data.event.venue);
                        $('#frm-editevent').find('textarea[name="description"]').val(data.event.description);
                        // $('#frm-editevent').find('input[name="id"]').val(data.event.id);
                        $('#frm-editevent').find('#event_id').val(data.event.id);
                    }
                },
                error:(err)=>{
                    showInputErrors(err);
                }
            });
        }
        const updateEvent=(e)=>{
            e.preventDefault();
            $.ajax({
                url:'{{route('admin.events.update',':id')}}'.replace(':id', $('#frm-editevent').find('#event_id').val()),
                type:'post',
                data:$('#frm-editevent').serialize(),
                success:(res)=>{
                    if(res.message){
                        alertify.success(res.message);
                        location.reload();
                    }
                }
            })
        }
    </script>
@endpush