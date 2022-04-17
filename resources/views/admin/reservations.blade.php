@extends('layouts.base2')

@section('content')
    @include('admin.components.header')
    <div class="mt-5 mx-20">
        <div class="bg-green-700 text-4xl text-white py-4 px-8">
            Reservations Management
        </div>
        <div class="content">
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
                                    <th class="p-3 text-left">No of Pax</th>
                                    <th class="p-3 text-left">Event</th>
                                    {{-- <th class="p-3 text-left" width="110px">Actions</th> --}}
                                </tr>
                            </thead>
                            <tbody class="flex-1 sm:flex-none">
                                @forelse ($reservations as $reservation)
                                    <tr class="flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                                        <td class="p-3 text-left">{{ $reservation->email }}</td>
                                        <td class="p-3 text-left">{{ $reservation->getFullName() }}</td>
                                        <td class="p-3 text-left">{{ $reservation->date_of_visit }}</td>
                                        <td class="p-3 text-left">{{ $reservation->session->name }}</td>
                                        <td class="p-3 text-left">{{ $reservation->no_of_pax }}</td>
                                        <td class="p-3 text-left">{{ $reservation->event->title }}</td>
                                        {{-- <td class="border-grey-light border hover:bg-gray-100 p-3 text-red-400 hover:text-red-600 hover:font-medium cursor-pointer">Delete</td> --}}
                                @empty
                                    
                                @endforelse
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection