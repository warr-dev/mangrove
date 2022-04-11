<!-- component -->
<div class="p-5">
    <div class="mx-4 p-4">
        <div class="flex items-center  stepper-steps">
            <div class="flex items-center text-teal-600 relative step">
                <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-teal-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark ">
                        <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                    </svg>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-teal-600">Amount</div>
            </div>
            <div class="stepper-connector flex-auto border-t-2 transition duration-500 ease-in-out border-teal-600"></div>
            <div class="flex items-center text-white relative step">
                <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 bg-teal-600 border-teal-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus ">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="8.5" cy="7" r="4"></circle>
                        <line x1="20" y1="8" x2="20" y2="14"></line>
                        <line x1="23" y1="11" x2="17" y2="11"></line>
                    </svg>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-teal-600">Details</div>
            </div>
            <div class="stepper-connector flex-auto border-t-2 transition duration-500 ease-in-out border-gray-300"></div>
            
            <div class="flex items-center text-gray-500 relative step">
                <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database ">
                        <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                        <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                        <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                    </svg>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">Payment</div>
            </div>
        </div>
    </div>
    <div class="stepper-contents">
        <div class="mt-8 p-4">
            
            <div class="flex justify-center items-center">
                <div class="bg-gray-200 rounded-lg">
                    <div class="inline-flex rounded-lg">
                        <input type="radio" name="mode" id="onetime" checked class="hidden"/>
                        <label for="onetime" class="radio text-center self-center py-2 px-4 rounded-lg cursor-pointer hover:opacity-75">One Time</label>
                    </div>
                    <div class="inline-flex rounded-lg">
                        <input type="radio" name="mode" id="monthly" class="hidden"/>
                        <label for="monthly" class="radio text-center self-center py-2 px-4 rounded-lg cursor-pointer hover:opacity-75">Monthly</label>
                    </div>
                </div>
            </div>
            <div class="w-full mx-2 flex flex-col items-center svelte-1l8159u">
                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase w-full"> Amount</div>
                <div class=" w-1/2 bg-white my-2 p-1 flex border border-gray-200 rounded">
                    <input placeholder="Enter Amount" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> 
                </div>
            </div>
            <div>
                <input type="checkbox" name="coverfees" id="coverfees">
                <label class="indent-1" for="coverfees">I'd Like to cover the transaction fees for my donation</label>
            </div>
        </div>
        <div class="mt-8 p-4">
            <div class="font-bold text-gray-600 text-xs leading-8 uppercase h-6 mx-2 mt-3">Full Name</div>
            <div class="flex flex-col md:flex-row">
                <div class="w-full flex-1 mx-2 svelte-1l8159u">
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                        <input placeholder="First Name" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
                <div class="w-full flex-1 mx-2 svelte-1l8159u">
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                        <input placeholder="Last Name" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row">
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Street Address</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                        <input placeholder="" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Address Line 2(optional)</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                        <input placeholder="" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row">
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Country</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                        <input placeholder="" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Postal Code</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                        <input placeholder="" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row">
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> City</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                        <input placeholder="" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Province</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                        <input placeholder="" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row">
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Email</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                        <input placeholder="" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Mobile Phone</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                        <input placeholder="" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
            </div>
            <div>
                <input type="checkbox" name="signmeup" id="signmeup">
                <label class="indent-1" for="signmeup">Yes, Sign me up for email updates</label>
            </div>
        </div>
        <div class="mt-8 p-4">
            <div class="flex flex-col md:flex-row">
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Gcash Number</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                        <input placeholder="" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Reference Number</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                        <input placeholder="" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
            </div>
            <div class="w-full mx-2 flex-1 svelte-1l8159u"  >
                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Add Photo</div>
                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                    <input type="file" name="photo" id="addphoto">
                </div>
            </div>
        </div>
    </div>
        <div class="flex p-2 mt-4">
            {{-- <button class="text-base hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer 
        hover:bg-gray-200  
        bg-gray-100 
        text-gray-700 
        border duration-200 ease-in-out 
        border-gray-600 transition">Previous</button> --}}
            <div class="flex-auto flex flex-row-reverse">
                <button id="btn-next" class="text-base  ml-2  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer 
                hover:bg-teal-600  
                bg-teal-600 
                text-teal-100 
                border duration-200 ease-in-out 
                border-teal-600 transition">Next</button>
                <button id="btn-submit" class="text-base  ml-2  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer 
                hover:bg-teal-600  
                bg-teal-600 
                text-teal-100 
                border duration-200 ease-in-out 
                border-teal-600 transition">Submit</button>
                <button id="btn-prev" class="text-base hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer 
                hover:bg-gray-200  
                bg-gray-100 
                text-gray-700 
                border duration-200 ease-in-out 
                border-gray-600 transition" >Previous</button>
        
                {{-- <button class="text-base hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer 
        hover:bg-teal-200  
        bg-teal-100 
        text-teal-700 
        border duration-200 ease-in-out 
        border-teal-600 transition">Skip</button> --}}
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    let step=0;
    const stepperSteps=$('.stepper-steps')[0]

    $('#btn-next').click((e)=>{
        step++;
        e.preventDefault();
        checkButton();
        setActiveStep();
    })
    
    $('#btn-prev').click((e)=>{
        step--;
        e.preventDefault();
        checkButton();
        setActiveStep();
    })
    const checkButton=()=>{
        const max=$('.stepper-steps').children('.step').length
        $('#btn-submit')[0].style.display=step==(max-1)?'flex':'none';
        if(step>max) step=max
        if(step<0) step=0
        $('#btn-prev')[0].style.display=step==0?'none':'flex';
        $('#btn-next')[0].style.display=step==(max-1)?'none':'flex';
    }
    const setActiveStep=()=>{
        $.each($('.stepper-contents').children(),(i,el)=>{
            // console.log(i,el);
            el.style.display=(i==step?'block':'none')
        })
        
        $.each($('.stepper-steps').children('.stepper-connector'),(i,el)=>{
            // console.log(i,el);
                let n=$(el).next()?.children();
            if(i<step){
                console.log(el,'active');
                $(el).addClass('border-teal-600')
                $(el).removeClass('border-gray-300')
                $(el).next()?.addClass(['text-white']).removeClass('text-gray-500')
                $(n[0]).addClass(['border-teal-600','bg-teal-600']).removeClass('border-gray-300')
                $(n[1]).addClass('text-teal-600').removeClass('text-gray-500')
            }else{
                console.log(el,'inactive');
                $(el).removeClass('border-teal-600')
                $(el).addClass('border-gray-300')
                $(el).next()?.removeClass(['text-white']).addClass('text-gray-500')
                $(n[0]).removeClass(['border-teal-600','bg-teal-600']).addClass('border-gray-300')
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