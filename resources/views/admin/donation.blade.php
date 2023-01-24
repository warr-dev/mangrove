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
                    <div class="flex justify-end">
                        <button type="button" onclick="openModal('modal-walk-in')" class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600 transition duration-200 each-in-out">Add  Walk in</button>
                    </div>
                    <div class="grid grid-cols-1 gap-4">
                        <table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
                            <thead class="text-white">
                                <tr class="bg-green-700 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                                    <th class="p-3 text-left">Name</th>
                                    <th class="p-3 text-left">Mode</th>
                                    <th class="p-3 text-left">Amount</th>
                                    <th class="p-3 text-left">w/ Fees</th>
                                    <th class="p-3 text-left">Gcash #</th>
                                    <th class="p-3 text-left">Ref #</th>
                                    <th class="p-3 text-left">Status</th>
                                    <th class="p-3 text-left" width="250px">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="flex-1 sm:flex-none">
                                @forelse ($donations as $donation)
                                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0 hover:bg-gray-100 ">
                                        <td class="border-grey-light border p-3">{{$donation->donator->getFullName('')}}</td>
                                        <td class="border-grey-light border p-3">{{$donation->mode}}</td>
                                        <td class="border-grey-light border p-3">{{$donation->amount}}</td>
                                        <td class="border-grey-light border p-3">{{$donation->cover_fees?'yes':'no'}}</td>
                                        <td class="border-grey-light border p-3">{{$donation->gcash_number}}</td>
                                        <td class="border-grey-light border p-3">{{$donation->reference_number}}</td>
                                        <td class="border-grey-light border p-3">
                                            {{-- <x-table.badge type="success" label="active" /> --}}
                                            {{$donation->status}}
                                        </td>
                                        <td class="border-grey-light border p-3 hover:font-medium">
                                            @if ($donation->status=='pending')
                                                <div class="grid grid-cols-1  lg:grid-cols-2 gap-4">
                                                    <button type="button" data-donationid="{{$donation->id}}" class="reject-donation bg-red-500 text-white px-1 py-1 rounded hover:bg-red-600 transition duration-200 each-in-out">Reject</button>
                                                    <button type="button" data-donationid="{{$donation->id}}" class="confirm-donation bg-green-500 text-white px-1 py-1 rounded hover:bg-green-600 transition duration-200 each-in-out">Confirm</button>
                                                </div>
                                            @endif
                                        </td>
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
    
    <x-modal id="walk-in">
        <x-slot name="header">
          <p class="text-2xl font-bold text-gray-500">Add walk-in</p>
        </x-slot>
            @include('user.components.donation-form')
        <x-slot name="footer">
        </x-slot>
    </x-modal>
    
   
@endsection

@push('scripts')
    <script>
        $('.reject-donation').click(e=>{
            let id = $(e.target).data('donationid');
            let url = `{{route('admin.donations.reject', ':id')}}`.replace(':id', id);
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
        $('.confirm-donation').click(e=>{
            let id = $(e.target).data('donationid');
            let url = `{{route('admin.donations.confirm', ':id')}}`.replace(':id', id);
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