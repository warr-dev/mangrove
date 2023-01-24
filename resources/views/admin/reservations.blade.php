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
                    <div class="flex justify-end">
                        <button type="button" onclick="openModal('modal-walk-in')" class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600 transition duration-200 each-in-out">Add  Walk in</button>
                    </div>
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
                                    <th class="p-3 text-left">Gcash #</th>
                                    <th class="p-3 text-left">Reference No.</th>
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
                                        <td class="p-3 text-left">{{ $reservation->payment->gcash_number?? 'N/A'}}</td>
                                        <td class="p-3 text-left">{{ $reservation->payment->reference_number?? 'N/A'}}</td>
                                        <td class="p-3 text-left">{{ $reservation->status }}</td>
                                        
                                        <td class="border-grey-light border p-3 hover:font-medium">
                                            @if ($reservation->status=='pending')
                                                <div class="grid grid-cols-1  gap-2">
                                                    <button type="button" data-reservationid="{{$reservation->id}}" class="cancel-reservation delevent bg-red-500 text-white px-1 py-1 rounded hover:bg-red-600 transition duration-200 each-in-out">Cancel</button>
                                                    <button type="button" data-reservationid="{{$reservation->id}}" class="confirm-reservation bg-green-500 text-white px-1 py-1 rounded hover:bg-green-600 transition duration-200 each-in-out">Confirm</button>
                                                </div>
                                            @endif
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
    <x-modal id="walk-in">
        <x-slot name="header">
          <p class="text-2xl font-bold text-gray-500">Add walk-in</p>
        </x-slot>
          <form id="frm-walk-in" method="POST"  class="w-full">
            <div style="overflow: auto">
              @csrf
              <h1 class="text-xl font-black uppercase">Online Reservation Form</h1>

                <div class="flex flex-col md:flex-row">
                    <x-form.input2 name="date_visit" type="date" label="Date of Visit" />
                    <div class="w-full mx-2 flex-1 svelte-1l8159u">
                        <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Session</div>
                        <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                            <select class="p-1 px-2 appearance-none outline-none w-full text-gray-800" name="session_id"
                                id="session_id">
                                @forelse ($sessions as $session)
                                    <option value="{{ $session->id }}">{{ $session->name }}</option>
                                @empty
                                    <option value="">No Session Available</option>
                                @endforelse
                            </select>
                        </div>
                        <div class="w-full text-left ml-4"> <small id="error-session_id"
                                class="text-red-500 p-l-5 indent-1 error-session_id"></small></div>
                    </div>
                    {{-- <x-form.input2 type="number" name="no_of_pax" label="Number of Pax" /> --}}

                </div>
                <div class="flex items-center gap-5 px-4 py-2"><span class="text-xl">Representative</span>
                    <hr class="w-2/3 border-green-500 border-t-4">
                </div>

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
                        <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Events/Activities
                        </div>
                        <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                            <select onchange="computeSubtotal()" class="p-1 px-2 appearance-none outline-none w-full text-gray-800" name="event_id"
                                id="events">
                                @forelse ($events as $event)
                                    <option data-price="{{$event->price}}" value="{{ $event->id }}">{{ $event->title.$event->getPrice() }}</option>
                                @empty
                                    <option value="">No Event Available</option>
                                @endforelse
                            </select>
                        </div>
                        <div class="w-full text-left ml-4"> <small id="error-event_id"
                                class="text-red-500 p-l-5 indent-1 error-event_id"></small></div>
                    </div>
                </div>
                <div class="flex items-center gap-5 px-4 py-2"><span class="text-xl">Paxes</span>
                    <hr class="w-2/3 border-green-500 border-t-4">
                </div>
                <div id="paxes">
                    <div class="flex flex-col md:flex-row">
                        <x-form.input2 name="name[0]" label="Name" />
                        <div class="w-full mx-2 flex-1 svelte-1l8159u">
                            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Classification
                            </div>
                            <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                                <select class="classf p-1 px-2 appearance-none outline-none w-full text-gray-800" name="class[0]">
                                    @forelse ($classes as $class=>$val)
                                        <option data-price="{{$val}}" onclick="setEventPrice(event)" value="{{ $class }}">{{ Str::ucfirst($class).' (Php '.$val.')' }}</option>
                                    @empty
                                        <option value="">No Class Available</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="w-full text-left ml-4"> <small id="error-class.*"
                                    class="text-red-500 p-l-5 indent-1 error-class.*"></small></div>
                        </div>
                        <x-form.input2 name="birth_date[0]" label="Birth Date" type="date" />
                    </div>
                </div>
                
                <div class="flex flex-col md:flex-row p-4 justify-between items-center">
                    <button id="add-pax" type="button"
                        class="text-base  ml-2  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer 
                        hover:bg-teal-600  
                        bg-teal-600 
                        text-teal-100 
                        border duration-200 ease-in-out 
                        border-teal-600 transition">Add More</button>
                    <div>Subtotal: <span id="subtotal"></span></div>
                </div>
                {{-- <div class="flex items-center gap-5 px-4 py-2"><span class="text-xl">Payment</span>
                    <hr class="w-2/3 border-green-500 border-t-4">
                </div>
                <div class="px-4">
                    <label class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase" for="iscash"><input class="mx-4" type="checkbox" name="isCash" id="iscash" />paid by cash?</label>
                </div> --}}


                    
            </div>
          </form>
          
        <x-slot name="footer">
                  <div class="flex justify-end pt-2 space-x-8">
            <button onclick="closeModal('modal-edit-news')" class="w-full px-5 py-3 text-sm font-medium leading-5 text-black text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
              Cancel
            </button>
            <button onclick="reserve(event)" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green">
              Reserve
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
        let paxes=1;
        const addPax=()=>{
            const pax = `
            <div class="flex flex-col md:flex-row" id="pax${paxes}">
                <x-form.input2 name="name[${paxes}]" label="Name" />
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Classification
                    </div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                        <select class="classf p-1 px-2 appearance-none outline-none w-full text-gray-800" name="class[${paxes}]">
                            @forelse ($classes as $class=>$val)
                                <option data-price="{{$val}}" onclick="setEventPrice(event)" value="{{ $class }}">{{ Str::ucfirst($class).' (Php '.$val.')' }}</option>
                            @empty
                                <option value="">No Class Available</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="w-full text-left ml-4"> <small id="error-province"
                            class="text-red-500 p-l-5 indent-1"></small></div>
                </div>
                <x-form.input2 name="birth_date[${paxes}]" label="Birth Date" type="date" />
                <button type="button" class="p-4 text-red-500" onclick="deletePax(${paxes})">X</button>
            </div>`;
            $('#paxes').append(pax);
            paxes++;
            computeSubtotal();
            $('.classf').off('change')
            $('.classf').change(e=>{
                computeSubtotal()
            })
        };
        const deletePax=(id)=> {
            $('#pax'+id).remove();
            computeSubtotal()
          }  
        $('#add-pax').click(addPax);
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
        const reserve=(e)=>{
            let data=$('#frm-walk-in').serialize();
            e.preventDefault();
            let url = `{{route('admin.reservations.reserve')}}`;
            $.ajax({
                url: url,
                type: 'POST',
                data: data,
                success: function(res){
                    if(res.message ){
                        alertify.success(res.message);
                        window.location.reload();
                    }
                },
                error:(err)=>{
                    showInputErrors(err);
                }
            });
        }
        $('').click(e=>{
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
        let Subtotal=0;
        const computeSubtotal=()=>{
            Subtotal=0;
            let events=document.querySelector('[name="event_id"]');
            let eventPrice=events[events.selectedIndex].dataset.price;
            let paxCount=document.querySelector('#paxes').childElementCount
            Subtotal=eventPrice*paxCount
            $('.classf').each((ind,el)=>{
                let price=Number(el[el.selectedIndex].dataset.price)
                console.log('sadas',price)
                Subtotal+=price
            })
            document.querySelector('#subtotal').innerText=Subtotal
        }
        
       
    </script>
@endpush