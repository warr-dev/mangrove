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
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Username</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                        <input placeholder="Just a hint.." class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"> Your Email</div>
                    <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
                        <input placeholder="jhon@doe.com" class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
                </div>
            </div>
        </div>
        <div>content 2</div>
        <div>content 3</div>
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
        console.log('next');
        e.preventDefault();
        console.log('step',step);
        checkButton();
        setActiveStep();
    })
    
    $('#btn-prev').click((e)=>{
        step--;
        e.preventDefault();
        console.log('prev');
        console.log('step',step);
        checkButton();
        setActiveStep();
    })
    const checkButton=()=>{
        const max=$('.stepper-steps').children('.step').length
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
            console.log(i,el);
            if(i<step){
                el.classList.add='text-teal-600'
                el.classList.remove='text-gray-300'
            }else{
                el.classList.remove='text-teal-600'
                el.classList.add='text-gray-300'
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