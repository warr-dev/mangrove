@extends('layouts.base2')

@section('content')
    @include('admin.components.header')
    <div class="mt-5 mx-20">
        <div class="bg-green-700 text-4xl text-white py-4 px-8">
            Events
        </div>
        <div class="content">
            <div class="flex items-center justify-center">
                <div class="container p-4">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                        <div class="
                                    my-5
                                    p-6
                                    pt-0
                                    bg-gray-200
                                    justify-center
                                    items-center
                                    rounded-lg
                                    w-full
                                    filter
                                    drop-shadow-2xl
                                ">
                            <div class="flex p-1 sm:mt-2 border-black justify-center font-bold">
                                Add Events
                            </div>
                            <div class="mt-3  sm:mt-5">
                                <form id="frmaddevent">
                                    <div class="bg-white p-5">
                                        @csrf
                                        <x-form.input name="title" label="Title" />
                                        <x-form.input name="date" label="Date" type="date" />
                                        <x-form.input name="venue" label="Venue" />
                                        <label for="transtype" class="text-gray-700 text-xs sm:text-md">isMultiple</label>
                                        <input id="transtype" name="transtype" type="checkbox" class="bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-lg outline-none  text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                                        <div><small id="error-transtype" class="error-transtype text-red-500 p-l-5"></small></div>
                                        <x-form.input name="price" label="Price" type="number"/>
                                        <x-form.input name="description" label="Description" type="textarea" />

                                    <div class="flex justify-start mt-4">
                                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                                            Add
                                        </button>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div>
                            
                            <table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
                                <thead class="text-white">
                                    <tr class="bg-green-700 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                                        <th class="p-3 text-left">Title</th>
                                        <th class="p-3 text-left">Date</th>
                                        <th class="p-3 text-left">Venue</th>
                                        <th class="p-3 text-left">Status</th>
                                        <th class="p-3 text-left" width="110px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="flex-1 sm:flex-none">
                                    @forelse ($events as $event)
                                        <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                                            <td class="border-grey-light border hover:bg-gray-100 p-3">{{$event->title.$event->getPrice()}}</td>
                                            <td class="border-grey-light border hover:bg-gray-100 p-3">{{$event->date}}</td>
                                            <td class="border-grey-light border hover:bg-gray-100 p-3">{{$event->venue}}</td>
                                            <td class="border-grey-light border hover:bg-gray-100 p-3">{{$event->getStatus()}}</td>
                                            <td class="border-grey-light border p-3 hover:font-medium">
                                                <div class="grid grid-cols-1  gap-2">
                                                    <button type="button" data-eventid="{{$event->id}}" class="delevent bg-red-500 text-white px-1 py-1 rounded hover:bg-red-600 transition duration-200 each-in-out">Delete</button>
                                                    <button type="button" onclick="openModal('modal-editevent');loadvalues({{$event->id}})" data-eventid="{{$event->id}}"  class="bg-green-500 text-white px-1 py-1 rounded hover:bg-green-600 transition duration-200 each-in-out">Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="5" class="text-center font-bold text-lg">No data... </td></tr>
                                    @endforelse
                                    
                                </tbody>
                            </table>
                        </div>
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
                <label for="transtype" class="text-gray-700 text-xs sm:text-md">isMultiple</label>
                <input id="transtype" name="transtype" type="checkbox" class="bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-lg outline-none  text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                <div><small id="error-transtype" class="error-transtype text-red-500 p-l-5"></small></div>
                <x-form.input name="price" label="Price" type="number"/>
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
        $('#transtype').change(e=>{
            document.querySelector('label[for="price"]').innerText=e.target.checked?"Price per unit":"Price";
        })
    </script>
@endpush