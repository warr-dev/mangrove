@extends('layouts.base2')

@section('content')
    <div class=" title-font font-bold  text-center text-7xl w-2/3 mx-auto p-5 text-white">
        RETICENCE AND ENDOWMENT SYSTEM FOR SILONAY MANGROVE
    </div>
    <div class="mt-5 mx-20">
        <div class="bg-green-700 text-4xl text-white py-4 px-8">
            Events
        </div>
        <div class="content">
            <div class="flex items-center justify-center">
                <div class="container p-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
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
        <div class="bg-white p-5">
            <label for="judul" class="text-gray-700 text-xs sm:text-md">Title</label>
            <input name="judul" type="text" class="
                                    w-full
                                    h-4
                                    sm:h-9
                                    border-b-2 border-gray-300
                                    focus:border-blue-300
                                    outline-none
                                " />
                                
            <label for="judul" class="text-gray-700 text-xs sm:text-md">Date</label>
            <input name="judul" type="text" class="
                                    w-full
                                    h-4
                                    sm:h-9
                                    border-b-2 border-gray-300
                                    focus:border-blue-300
                                    outline-none
                                " />
                                
            <label for="judul" class="text-gray-700 text-xs sm:text-md">Place</label>
            <input name="judul" type="text" class="
                                    w-full
                                    h-4
                                    sm:h-9
                                    border-b-2 border-gray-300
                                    focus:border-blue-300
                                    outline-none
                                " />
                                
            <label for="judul" class="text-gray-700 text-xs sm:text-md">Description</label>
            <textarea name="judul" type="text" cols="3" class="
                                    w-full
                                    h-4
                                    sm:h-9
                                    border-b-2 border-gray-300
                                    focus:border-blue-300
                                    outline-none
                                " ></textarea>
        </div>
      </div>
    </div>
                        <table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
                            <thead class="text-white">
                                <tr class="bg-green-700 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                                    <th class="p-3 text-left">Name</th>
                                    <th class="p-3 text-left">Email</th>
                                    <th class="p-3 text-left" width="110px">Actions</th>
                                </tr>
                                <tr class="bg-green-700 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                                    <th class="p-3 text-left">Name</th>
                                    <th class="p-3 text-left">Email</th>
                                    <th class="p-3 text-left" width="110px">Actions</th>
                                </tr>
                                <tr class="bg-green-700 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                                  <th class="p-3 text-left">Name</th>
                                  <th class="p-3 text-left">Email</th>
                                  <th class="p-3 text-left" width="110px">Actions</th>
                              </tr>
                                <tr class="bg-green-700 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                                  <th class="p-3 text-left">Name</th>
                                  <th class="p-3 text-left">Email</th>
                                  <th class="p-3 text-left" width="110px">Actions</th>
                              </tr>
                            </thead>
                            <tbody class="flex-1 sm:flex-none">
                                <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                                    <td class="border-grey-light border hover:bg-gray-100 p-3">John Covv</td>
                                    <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">contato@johncovv.com</td>
                                    <td class="border-grey-light border hover:bg-gray-100 p-3 text-red-400 hover:text-red-600 hover:font-medium cursor-pointer">Delete</td>
                                </tr>
                                <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                                    <td class="border-grey-light border hover:bg-gray-100 p-3">Michael Jackson</td>
                                    <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">m_jackson@mail.com</td>
                                    <td class="border-grey-light border hover:bg-gray-100 p-3 text-red-400 hover:text-red-600 hover:font-medium cursor-pointer">Delete</td>
                                </tr>
                                <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                                    <td class="border-grey-light border hover:bg-gray-100 p-3">Julia</td>
                                    <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">julia@mail.com</td>
                                    <td class="border-grey-light border hover:bg-gray-100 p-3 text-red-400 hover:text-red-600 hover:font-medium cursor-pointer">Delete</td>
                                </tr>
                                <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                                  <td class="border-grey-light border hover:bg-gray-100 p-3">Martin Madrazo</td>
                                  <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">martin.madrazo@mail.com</td>
                                  <td class="border-grey-light border hover:bg-gray-100 p-3 text-red-400 hover:text-red-600 hover:font-medium cursor-pointer">Delete</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection