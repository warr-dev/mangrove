
<style>
	/* width */
::-webkit-scrollbar  {
  width: 3px;
}
</style>
<div id="modal-{{$id}}"  class="modal fixed w-full inset-0 z-50 overflow-hidden flex justify-center @if(!$scrollable) items-center @endif max-h-100 animated faster" style="background: rgba(0,0,0,.7);display:none;">
		<div class="border border-blue-500 shadow-lg modal-container bg-white lg:w-7/12 w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto rounded-t-lg sm:rounded-lg sm:m-4 sm:max-w-xl" style="max-height: 100%">
			<div class="modal-content py-4 text-left px-6">
				<!--Title-->
				<div class="flex justify-between items-center pb-3">
                    {{$header}}
					{{-- <p class="text-2xl font-bold text-gray-500">Add Caretaker</p> --}}
					<div class="modal-close cursor-pointer z-50" >
						<svg class="fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
							viewBox="0 0 18 18">
							<path
								d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
							</path>
						</svg>
					</div>
				</div>
				<!--Body-->
				<div class="my-5 mr-5 ml-5 flex justify-center">
                    {{$slot}}
                   
				</div>
				<!--Footer-->
					{{$footer}}
			</div>
		</div>
	</div>
