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
                            <button onclick="openModal('modal-add-gallery')" type="button" class="text-base  ml-2  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer 
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
                                    <th class="p-3 text-center">Image</th>
                                    <th class="p-3 text-left" width="110px">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="flex-1 sm:flex-none">
                                @forelse ($galleries as $gallery)
                                    <tr
                                        class="flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                                        <td class="p-3 text-left">{{ $gallery->name }}</td>
                                        <td class="p-3 text-left">{{ $gallery->description }}</td>
                                        <td class="p-3 text-center flex justify-center items-center">
                                            <img src="{{ asset('storage/' . $gallery->image) }}" 
                                                alt="{{ $gallery->name }}" class="h-full h-32">
                                        </td>
                                        {{-- <td class="p-3 text-left"><img </td> --}}

                                        <td class="border-grey-light border p-3 hover:font-medium">
                                            <div class="grid grid-cols-1  gap-2">
                                                <button type="button" data-gallery-id="{{ $gallery->id }}" data-gallery-name="{{$gallery->name}}" data-gallery-description="{{$gallery->description}}" data-gallery-image="{{asset('storage/' .$gallery->image)}}" onclick="openModal('modal-edit-gallery')"
                                                    class="edit-gallery bg-green-500 text-white px-1 py-1 rounded hover:bg-green-600 transition duration-200 each-in-out">Edit</button>
                                                <button type="button" data-gallery-id="{{ $gallery->id }}"
                                                    class="delete-gallery delevent bg-red-500 text-white px-1 py-1 rounded hover:bg-red-600 transition duration-200 each-in-out">Delete</button>
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
    <x-modal id="add-gallery">
        <x-slot name="header">
          <p class="text-2xl font-bold text-gray-500">Add Picture</p>
        </x-slot>
          <form id="frm-add-gallery" method="POST"  class="w-full">
            <div class="">
              @csrf
                <x-form.input name="name" label="Name" />
                <x-form.input name="image" label="Image" type="file" />
                <x-form.input name="description" label="Description" type="textarea" />
                
            </div>
          </form>
          
        <x-slot name="footer">
                  <div class="flex justify-end pt-2 space-x-8">
            <button onclick="closeModal('modal-add-gallery')" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
              Cancel
            </button>
            <button onclick="addGallery(event)" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green">
              Add
            </button>
                      {{-- <button
                          class="px-4 bg-gray-200 p-3 rounded text-black hover:bg-gray-300 font-semibold" onclick="modalClose('modal-addgradesection')">Cancel</button>
                      <button
                          class="px-4 bg-blue-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400">Confirm</button> --}}
                  </div>
        </x-slot>
      </x-modal>

      
    <x-modal id="edit-gallery">
        <x-slot name="header">
          <p class="text-2xl font-bold text-gray-500">Edit Picture</p>
        </x-slot>
          <form id="frm-edit-gallery" method="POST"  class="w-full">
            <div class="">
              @csrf
              @method('put')
                <x-form.input name="name" label="Name" />
                <img src="" alt="image" id="prev">
                <x-form.input name="image" label="Image" type="file" />
                <x-form.input name="description" label="Description" type="textarea" />
            </div>
          </form>
          
        <x-slot name="footer">
                  <div class="flex justify-end pt-2 space-x-8">
            <button onclick="closeModal('modal-edit-gallery')" class="w-full px-5 py-3 text-sm font-medium leading-5 text-black text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
              Cancel
            </button>
            <button onclick="updateGallery(event)" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green">
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
    <script>
        const addGallery = (e) => {
            let form = document.getElementById('frm-add-gallery');
            let formData = new FormData($('#frm-add-gallery')[0]);
            // e.preventDefault();
            $.ajax({
                url: "{{route('admin.gallery.store')}}",
                type: "POST",
                data: formData,
            contentType:false,
            processData:false,
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
        }
        
        const updateGallery = (e) => {
            let form = document.getElementById('frm-edit-gallery');
            let formData = new FormData(form);
            // e.preventDefault();
            $.ajax({
                url: "{{route('admin.gallery.update',':id')}}".replace(':id',galleryId),
                type: "POST",
                data: formData,
            contentType:false,
            processData:false,
                success: function(data){
                    if(data.status == 'success'){
                        alertify.success(data.message);
                        location.reload();
                    }
                },
                error:(err)=>{
                    console.log(err);
                    showInputErrors(err,'#frm-edit-gallery');
                }
            });
        }

        let galleryId;
        $('.edit-gallery').click(e=>{
            galleryId = e.target.dataset.galleryId;
            let name = e.target.dataset.galleryName;
            let description = e.target.dataset.galleryDescription;
            let image = e.target.dataset.galleryImage;
            console.log(image);
            $('#frm-edit-gallery input[name="name"]').val(name);
            $('#frm-edit-gallery textarea[name="description"]').val(description);
            $('#frm-edit-gallery img').attr('src',image);
        });

        $('.delete-gallery').click(function(e){
            e.preventDefault();
            console.log(this);
            let id = $(this).data('gallery-id');
            console.log(id);
            $.ajax({
                url: "{{route('admin.gallery.destroy', ':id')}}".replace(':id', id),
                type: "post",
                data: {
                    _method: 'delete',
                    _token: "{{ csrf_token() }}"
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
    </script>
@endpush
