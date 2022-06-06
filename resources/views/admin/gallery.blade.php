@extends('layouts.base2')

@section('content')
    @include('admin.components.header')
    <div class="mt-5 mx-20">
        <div class="bg-green-700 text-4xl text-white py-4 px-8">
            Gallery Management
        </div>
        <div class="content">
            {{-- <button type="button" class="cancel-reservation delevent bg-red-500 text-white px-1 py-1 rounded hover:bg-red-600 transition duration-200 each-in-out">Cancel</button> --}}
            <div class="flex items-center justify-center">
                <div class="container p-5">
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex justify-end">
                            <button id="btn-submit" type="submit" class="text-base  ml-2  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer 
                                hover:bg-teal-600  
                                bg-teal-600 
                                text-teal-100 
                                border duration-200 ease-in-out 
                                border-teal-600 transition">Add</button>
                        </div>
                        <table
                            class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
                            <thead class="text-white">
                                <tr
                                    class="bg-green-700 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                                    <th class="p-3 text-left">Name</th>
                                    <th class="p-3 text-left">Description</th>
                                    <th class="p-3 text-left">Image</th>
                                    <th class="p-3 text-left" width="110px">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="flex-1 sm:flex-none">
                                @forelse ($galleries as $gallery)
                                    <tr
                                        class="flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                                        <td class="p-3 text-left">{{ $gallery->name }}</td>
                                        <td class="p-3 text-left">{{ $gallery->description }}</td>
                                        <td class="p-3 text-left">
                                            <img src="{{ asset('storage/' . $gallery->image) }}"
                                                alt="{{ $gallery->name }}" class="w-full h-32">
                                        </td>
                                        {{-- <td class="p-3 text-left"><img </td> --}}

                                        <td class="border-grey-light border p-3 hover:font-medium">
                                            <div class="grid grid-cols-1  gap-2">
                                                <button type="button" data-gallery-id="{{ $gallery->id }}"
                                                    class="confirm-gallery bg-green-500 text-white px-1 py-1 rounded hover:bg-green-600 transition duration-200 each-in-out">Edit</button>
                                                <button type="button" data-gallery-id=""="{{ $gallery->id }}"
                                                    class="cancel-gallery delevent bg-red-500 text-white px-1 py-1 rounded hover:bg-red-600 transition duration-200 each-in-out">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center font-bold text-lg">No data... </td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <x-modal id="editevent">
        <x-slot name="header">
          <p class="text-2xl font-bold text-gray-500">Edit Event</p>
        </x-slot>
          <form id="frm-editevent" method="POST"  class="w-full">
            <div class="">
              @csrf
              @method('put')
                <input type="hidden" id="event_id">
                <x-form.input name="title" label="Title" />
                <x-form.input name="date" label="Date" type="date" />
                <x-form.input name="venue" label="Venue" />
                <x-form.input name="description" label="Description" type="textarea" />
                
            </div>
          </form>
          
        <x-slot name="footer">
                  <div class="flex justify-end pt-2 space-x-8">
            <button onclick="closeModal('modal-editevent')" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
              Cancel
            </button>
            <button onclick="updateEvent(event)" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green">
              Update
            </button>
                      {{-- <button
                          class="px-4 bg-gray-200 p-3 rounded text-black hover:bg-gray-300 font-semibold" onclick="modalClose('modal-addgradesection')">Cancel</button>
                      <button
                          class="px-4 bg-blue-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400">Confirm</button> --}}
                  </div>
        </x-slot>
      </x-modal>
@endsection

@push('scripts')
    <script></script>
@endpush
