@extends('layouts.base2')

@section('content')
    @include('admin.components.header')
    <div class="mt-5 mx-20">
        <div class="bg-green-700 text-4xl text-white py-4 px-8 ">
            Users Management
        </div>
        <div class="content">
            <div class="flex items-center justify-center">
                <div class="container p-4">
                    <div class="grid grid-cols-1 gap-4">
                        <table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
                            <thead class="text-white">
                                <tr class="bg-green-700 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                                    <th class="p-3 text-left">Username</th>
                                    <th class="p-3 text-left">Email</th>
                                    <th class="p-3 text-left">Status</th>
                                    <th class="p-3 text-left" width="250px">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="flex-1 sm:flex-none">
                                @forelse ($users as $user)
                                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0 hover:bg-gray-100 ">
                                        <td class="border-grey-light border p-3">{{$user->username}}</td>
                                        <td class="border-grey-light border p-3 truncate">{{$user->email}}</td>
                                        <td class="border-grey-light border p-3">
                                            <x-table.badge type="success" label="active" />
                                        </td>
                                        <td class="border-grey-light border p-3 hover:font-medium">
                                            <div class="grid grid-cols-1  lg:grid-cols-2 gap-4">
                                                <button type="button" data-userid="{{$user->id}}" class="deluser bg-red-500 text-white px-1 py-1 rounded hover:bg-red-600 transition duration-200 each-in-out">Delete</button>
                                                <button type="button" data-userid="{{$user->id}}" onclick="loadModal('{{route('admin.user.edit',$user->id)}}')" class="bg-green-500 text-white px-1 py-1 rounded hover:bg-green-600 transition duration-200 each-in-out">Edit</button>
                                            </div>
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
    <div id="modal-container">

    </div>
@endsection
@push('script')
    <script>
        $('.deluser').click(function(e){
            if(confirm('Arer you sure to delete?')) {
                let id=$(this).data('userid')
                let url='{{route('admin.user.destroy',':id')}}'
                url=url.replace(':id',id)
                $.ajax({
                    url:url,
                    type:'delete',
                    data:{_token:'{{csrf_token()}}'},
                    success:(res)=>{
                      alert('deleted');
                      location.reload();
                    },
                    error:(err)=>{
                        alert('deleting failed');  
                    },
                })
            }
        })
    </script>
     <script>
        var provinces=[];
         function populateCombo(){
            $.ajax({
            url: "/zipcodes.json",
            type: "GET",
            dataType: "json",
            success: function(data){
                provinces=data.provinces;
                $('#province').html('');
                $('#province').append('<option value="">Select Province</option>');
                $.each(data.provinces, function(key, value){
                    $('#province').append('<option value="'+key+'">'+key+'</option>');
                });
                
            }
            });
            
            $('#city').html('');
            let citylabel=$('#province').val()==''?'<option value="" >Select Province First</option>':'<option value="" >Select City</option>'
            $('#city').append(citylabel);
            $('#province').change(function(){
                var val=$(this).val();
                var cities=provinces[val];
                $('#city').html('');
                $('#city').append('<option >Select City</option>');
                $.each(cities, function(key, value){
                    $('#city').append('<option value="'+value+'">'+value+'</option>');
                });
                @if(old('city'))
                    $('#city').val('{{old('city')}}');
                    $('#city')[0].dispatchEvent(new Event("change"))
                @endif
            });
            $('#city').change(function(){
                var val=$(this).val();
                var zipcode=Object.entries(provinces[$('#province').val()]).filter(function(zipcode){
                    return zipcode[1]==val;
                })[0];
                $('#zipcode').val(zipcode[0]);
            });
         }
         const updateUser=(id)=>{
            let url='{{route("admin.user.update",':id')}}';
            $.ajax({
                url:url.replace(':id',id),
                data:$('#frm-edituser').serialize(),
                type:'POST',
                success:(res)=>{
                    if(res.message){
                        alertify.success(res.message);
                        setTimeout(() => {
                            location.reload();
                        }, 1000);
                    }
                },
                error:(err)=>{
                    showInputErrors(err)
                }
            })
        }
        
        
    </script>
@endpush