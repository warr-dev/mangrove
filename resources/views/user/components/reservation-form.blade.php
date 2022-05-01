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
                        <div class="w-full text-left ml-4"> <small id="error-province"
                                class="text-red-500 p-l-5 indent-1"></small></div>
                    </div>
                    <x-form.input2 type="number" name="no_of_pax" label="Number of Pax" />

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
                            <select class="p-1 px-2 appearance-none outline-none w-full text-gray-800" name="event_id"
                                id="events">
                                @forelse ($events as $event)
                                    <option value="{{ $event->id }}">{{ $event->title }}</option>
                                @empty
                                    <option value="">No Event Available</option>
                                @endforelse
                            </select>
                        </div>
                        <div class="w-full text-left ml-4"> <small id="error-province"
                                class="text-red-500 p-l-5 indent-1"></small></div>
                    </div>
                </div>

            </div>
            <div class="mt-8 p-4">
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
        <div class="flex p-2 mt-4">
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
        })

        $('#btn-prev').click((e) => {
            step--;
            e.preventDefault();
            checkButton();
            setActiveStep();
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
                    console.log(el, 'active');
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

    </script>
@endpush
