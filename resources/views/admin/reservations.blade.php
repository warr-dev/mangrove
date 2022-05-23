@extends('layouts.base2')

@section('content')
    @include('admin.components.header')
    <div class="mt-5 mx-20">
        <div class="bg-green-700 text-4xl text-white py-4 px-8">
            Reservations Management
        </div>
        <div class="content">
            {{-- <button type="button" class="cancel-reservation delevent bg-red-500 text-white px-1 py-1 rounded hover:bg-red-600 transition duration-200 each-in-out">Cancel</button> --}}
            <div class="flex items-center justify-center">
                <div class="container p-5">
                    <div class="grid grid-cols-1 gap-4">
                        <table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
                            <thead class="text-white">
                                <tr class="bg-green-700 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                                    <th class="p-3 text-left">Email</th>
                                    <th class="p-3 text-left">Name</th>
                                    <th class="p-3 text-left">Date of Visit</th>
                                    <th class="p-3 text-left">Session</th>
                                    {{-- <th class="p-3 text-left">No of Pax</th> --}}
                                    <th class="p-3 text-left">Event</th>
                                    <th class="p-3 text-left">Status</th>
                                    <th class="p-3 text-left" width="110px">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="flex-1 sm:flex-none">
                                @forelse ($reservations as $reservation)
                                    <tr class="flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                                        <td class="p-3 text-left">{{ $reservation->email }}</td>
                                        <td class="p-3 text-left">{{ $reservation->getFullName() }}</td>
                                        <td class="p-3 text-left">{{ $reservation->date_visit }}</td>
                                        <td class="p-3 text-left">{{ $reservation->session->name }}</td>
                                        {{-- <td class="p-3 text-left">{{ $reservation->no_of_pax }}</td> --}}
                                        <td class="p-3 text-left">{{ $reservation->event->title }}</td>
                                        <td class="p-3 text-left">{{ $reservation->status }}</td>
                                        
                                        <td class="border-grey-light border p-3 hover:font-medium">
                                            <div class="grid grid-cols-1  gap-2">
                                                <button type="button" data-reservationid="{{$reservation->id}}" class="cancel-reservation delevent bg-red-500 text-white px-1 py-1 rounded hover:bg-red-600 transition duration-200 each-in-out">Cancel</button>
                                                <button type="button" data-reservationid="{{$reservation->id}}" class="confirm-reservation bg-green-500 text-white px-1 py-1 rounded hover:bg-green-600 transition duration-200 each-in-out">Confirm</button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr><td colspan="8" class="text-center font-bold text-lg">No data... </td></tr>
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
        $('.cancel-reservation').click(e=>{
            let id = $(e.target).data('reservationid');
            let url = `{{route('admin.reservations.cancel', ':id')}}`.replace(':id', id);
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    _method: 'PUT'
                },
                success: function(data){
                    if(data.message ){
                        alertify.success(data.message);
                        window.location.reload();
                    }
                },
                error:(err)=>{
                    showInputErrors(err);
                }
            });
        })
        $('.confirm-reservation').click(e=>{
            let id = $(e.target).data('reservationid');
            let url = `{{route('admin.reservations.confirm', ':id')}}`.replace(':id', id);
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    _method: 'PUT'
                },
                success: function(data){
                    if(data.message ){
                        alertify.success(data.message);
                        window.location.reload();
                    }
                },
                error:(err)=>{
                    showInputErrors(err);
                }
            });
        })
    </script>
@endpush