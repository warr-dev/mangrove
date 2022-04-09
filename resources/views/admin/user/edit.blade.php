
    <x-modal id="edituser" :scrollable="true">
        <x-slot name="header">
          <p class="text-2xl font-bold text-gray-500">Edit User</p>
        </x-slot>
          <form id="frm-edituser" onsubmit="return false" method="POST"  class="w-full">
            <div class="">
              @csrf
              @method('put')
              <input type="hidden" id="user_id">
                <x-form.input name="first_name" label="First Name" :value="$user->profile->first_name"  autofocus />
                <x-form.input name="middle_name" label="Middle Name" :value="$user->profile->middle_name"  />
                <x-form.input name="last_name" label="Last Name" :value="$user->profile->last_name" />
                <x-form.select name="province" label="Province" :value="$user->profile->province" />
                <x-form.select name="city" label="Select Province First" :value="$user->profile->city" />
                <x-form.input name="zipcode" label="Zip Code" id="zipcode" :disabled="false" :value="$user->profile->zipcode" />
                <x-form.input name="barangay" label="Barangay" :value="$user->profile->barangay" />
                <x-form.input name="number" label="Enter Your Number" :value="$user->number" />
                <x-form.input name="email" label="Enter Your Email" :value="$user->email" />
                <x-form.input name="username" label="Enter Your Username" :value="$user->username" />
                <x-form.input name="password" label="Password"  type="password" />
                <x-form.input name="password_confirmation" label="Confirm Your Password"  type="password" />
                <div class="main flex border rounded-full overflow-hidden m-4 select-none col-span-6">
                    <div class="bg-green-500 flex items-center">
                      <div class="title py-3 my-auto px-5 text-white text-sm font-semibold mr-3">Gender</div>
                    </div>
                    <div class="flex flex-col md:flex-row">
                      <label class="flex radio p-2 px-4 cursor-pointer">
                          <input class="my-auto transform scale-125" type="radio" name="gender" value="male" checked/>
                          <div class="title px-2">male</div>
                      </label>
                  
                      <label class="flex radio p-2 px-4 cursor-pointer">
                          <input class="my-auto transform scale-125" type="radio" name="gender" value="female" />
                          <div class="title px-2">female</div>
                      </label>

                    </div>
                </div>
                <small id="error-gender" class="text-red-500 p-l-5"></small>
            </div>
          </form>
          
        <x-slot name="footer">
                  <div class="flex justify-end pt-2 space-x-8">
            <button onclick="closeModal('modal-edituser')" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
              Cancel
            </button>
            <button onclick="updateUser({{$user->id}})" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green">
              Update
            </button>
                      {{-- <button
                          class="px-4 bg-gray-200 p-3 rounded text-black hover:bg-gray-300 font-semibold" onclick="modalClose('modal-addgradesection')">Cancel</button>
                      <button
                          class="px-4 bg-blue-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400">Confirm</button> --}}
                  </div>
        </x-slot>
      </x-modal>

      
	<script>
		$('.modal .modal-close').click((e)=>{
            let modal=$('.modal-close')[0].parentNode.parentNode.parentNode.parentNode;
            modal.classList.remove('fadeIn');
            modal.classList.add('fadeOut');
            setTimeout(() => {
                        modal.style.display = 'none';
                    }, 500);
            // modal.style.display='none';
        })
        
        populateCombo();
	</script>