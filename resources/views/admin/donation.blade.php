@extends('layouts.base2')

@section('content')
    @include('admin.components.header')
    <div class="mt-5 mx-20">
        <div class="bg-green-700 text-4xl text-white py-4 px-8">
            Donations
        </div>
        <div class="content">
            
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

@push('script')
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