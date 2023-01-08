<!-- component -->
<form id="frm-reserve">
    @csrf
    <div class="content bg-white md:mx-10 lg:mx-20 text-gray-700 p-5 text-center"
        style="background-color:rgba(217, 246, 222, 0.6)">
        <div class="mx-4 p-4">
            <div class="flex items-center  stepper-steps">
                <div class="flex items-center text-teal-600 relative step">
                    <div
                        class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-teal-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-bookmark ">
                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                        </svg>
                    </div>
                    <div
                        class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-teal-600">
                        Reservation</div>
                </div>
                <div class="stepper-connector flex-auto border-t-2 transition duration-500 ease-in-out border-teal-600">
                </div>
                
                <div class="flex items-center text-gray-500 relative step">
                    <div
                        class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-database ">
                            <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                            <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                        </svg>
                    </div>
                    <div
                        class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">
                        Pax</div>
                </div>
                <div class="stepper-connector flex-auto border-t-2 transition duration-500 ease-in-out border-teal-600">
                </div>

                <div class="flex items-center text-gray-500 relative step">
                    <div
                        class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-database ">
                            <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                            <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                        </svg>
                    </div>
                    <div
                        class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">
                        Payment</div>
                </div>
            </div>
        </div>
        <div class="stepper-contents">
            <div class="mt-8 p-4">

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
                                class="text-red-500 p-l-5 indent-1"></small></div>
                    </div>
                    {{-- <x-form.input2 type="number" name="no_of_pax" label="Number of Pax" /> --}}

                </div>
                <div class="flex items-center gap-5 px-4 py-2"><span class="text-xl">Representative</span>
                    <hr class="w-2/3 border-green-500 border-t-4">
                </div>

                <div class="font-bold text-gray-600 text-xs leading-8 uppercase h-6 mx-2 mt-3">Full Name</div>
                <div class="flex flex-col md:flex-row">
                    <x-form.input2 name="first_name" placeholder="First Name" :value="Auth::user()->profile->first_name" />
                    <x-form.input2 name="last_name" placeholder="Last Name" :value="Auth::user()->profile->last_name" />
                </div>
                <div class="flex flex-col md:flex-row">

                    <x-form.input2 name="email" :value="Auth::user()->email" label="Email" />
                    <x-form.input2 name="phone" :value="Auth::user()->phone??''" label="Phone Number" />
                </div>
                <div class="flex flex-col md:flex-row">

                    <x-form.input2 name="address" label="Address" :value="Auth::user()->profile->fullAddress" />
                    <div class="w-full mx-2 flex-1 svelte-1l8159u">
                        <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Events/Activities
                        </div>
                        <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                            <select onchange="computeSubtotal()"  class="p-1 px-2 appearance-none outline-none w-full text-gray-800" name="event_id"
                                id="events">
                                @forelse ($events as $event)
                                    <option data-price="{{$event->price}}" value="{{ $event->id }}">{{ $event->title.$event->getPrice() }}</option>
                                @empty
                                    <option value="">No Event Available</option>
                                @endforelse
                            </select>
                        </div>
                        <div class="w-full text-left ml-4"> <small id="error-event_id"
                                class="text-red-500 p-l-5 indent-1"></small></div>
                    </div>
                </div>

            </div>
            
            <div class="mt-8 p-4">
                {{-- notes --}}
                <div class="flex bg-blue-100 rounded-lg p-4 mb-4 text-sm text-blue-700" role="alert">
                    <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div>
                        <span class="font-medium">Note: </span> Please bring your valid ID as proof of Classification (Senior Citizen, PWD, Student, etc.)  upon visit.
                    </div>
                </div>
                {{-- end notes --}}
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
                                    class="text-red-500 p-l-5 indent-1"></small></div>
                        </div>
                        <x-form.input2 name="birth_date[0]" label="Birth Date" type="date" />
                    </div>
                </div>
                
                <div class="flex flex-col md:flex-row p-4">
                    <button id="add-pax" type="button"
                        class="text-base  ml-2  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer 
                        hover:bg-teal-600  
                        bg-teal-600 
                        text-teal-100 
                        border duration-200 ease-in-out 
                        border-teal-600 transition">Add More</button>
                </div>
                
            </div>
            
            <div class="mt-8 p-4">
               <div class="flex justify-center" > <img src="/images/gcash.jpg" alt="gcash" srcset="" height="15vh" style="height:15vh"></div> 
               <h1>09675625653</h1>
                <div class="flex flex-col md:flex-row">
                    <x-form.input2 name="gcash_account_name" label="Gcash Account Name" />
                    <x-form.input2 name="gcash_number" label="Gcash Number" />
                </div>
                <div class="flex flex-col md:flex-row">
                    <x-form.input2 name="reference_number" label="Reference Number" />
                    <x-form.input2 name="photo" label="Add Photo" type="file"  />
                    {{-- <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Add Photo</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                        <input type="file" name="photo" id="addphoto">
                    </div> --}}
                </div>
            </div>
        </div>
        <input type="hidden" id="subtotalInput" name="total">
        <div class="flex p-2 mt-4 justify-between">
            <div>Subtotal: <span id="subtotal"></span></div>
            <div class="flex-auto flex flex-row-reverse">
                <button id="btn-next" type="button"
                    class="text-base  ml-2  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer 
                hover:bg-teal-600  
                bg-teal-600 
                text-teal-100 
                border duration-200 ease-in-out 
                border-teal-600 transition">Next</button>
                <button id="btn-submit" type="submit"
                    class="text-base  ml-2  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer 
                hover:bg-teal-600  
                bg-teal-600 
                text-teal-100 
                border duration-200 ease-in-out 
                border-teal-600 transition">Submit</button>
                <button id="btn-prev" type="button"
                    class="text-base hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer 
                hover:bg-gray-200  
                bg-gray-100 
                text-gray-700 
                border duration-200 ease-in-out 
                border-gray-600 transition">Previous</button>

        </div>
    </div>
    </div>
</form>
@push('scripts')
    <script>
        let step = 0;
        const stepperSteps = $('.stepper-steps')[0]

        $('#btn-next').click((e) => {
            step++;
            e.preventDefault();
            checkButton();
            setActiveStep();
            computeSubtotal()
        })

        $('#btn-prev').click((e) => {
            step--;
            e.preventDefault();
            checkButton();
            setActiveStep();
            computeSubtotal()
        })
        const checkButton = () => {
            const max = $('.stepper-steps').children('.step').length
            $('#btn-submit')[0].style.display = step == (max - 1) ? 'flex' : 'none';
            if (step > max) step = max
            if (step < 0) step = 0
            $('#btn-prev')[0].style.display = step == 0 ? 'none' : 'flex';
            $('#btn-next')[0].style.display = step == (max - 1) ? 'none' : 'flex';
        }
        const setActiveStep = () => {
            $.each($('.stepper-contents').children(), (i, el) => {
                // console.log(i,el);
                el.style.display = (i == step ? 'block' : 'none')
            })

            $.each($('.stepper-steps').children('.stepper-connector'), (i, el) => {
                // console.log(i,el);
                let n = $(el).next()?.children();
                if (i < step) {
                    // console.log(el, 'active');
                    $(el).addClass('border-teal-600')
                    $(el).removeClass('border-gray-300')
                    $(el).next()?.addClass(['text-white']).removeClass('text-gray-500')
                    $(n[0]).addClass(['border-teal-600', 'bg-teal-600']).removeClass('border-gray-300')
                    $(n[1]).addClass('text-teal-600').removeClass('text-gray-500')
                } else {
                    $(el).removeClass('border-teal-600')
                    $(el).addClass('border-gray-300')
                    $(el).next()?.removeClass(['text-white']).addClass('text-gray-500')
                    $(n[0]).removeClass(['border-teal-600', 'bg-teal-600']).addClass('border-gray-300')
                    $(n[1]).removeClass('text-teal-600').addClass('text-gray-500')
                }
            })
            // $('.stepper-contents').children().forEach((element,ind) => {
            //     console.log(element);
            //     // el.style.display=ind==step?'block':'none'
            // });
        }
        checkButton();
        setActiveStep();
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
        $('.classf').change(e=>{
            computeSubtotal()
        })

        const deletePax=(id)=> {
            $('#pax'+id).remove();
            computeSubtotal()
          }  
        $('#add-pax').click(addPax);
        
        let Subtotal=0;
        const computeSubtotal=()=>{
            let events=document.querySelector('[name="event_id"]');
            let eventPrice=events[events.selectedIndex].dataset.price;
            let paxCount=document.querySelector('#paxes').childElementCount
            Subtotal=eventPrice*paxCount
            $('.classf').each((ind,el)=>{
                let price=Number(el[el.selectedIndex].dataset.price)
                // console.log('sadas',el[el.selectedIndex])
                Subtotal+=price
            })
            document.querySelector('#subtotal').innerText=Subtotal
            document.querySelector('#subtotalInput').value=Subtotal
        }
        
    </script>
@endpush
