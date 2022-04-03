@extends('layouts.base2')

@section('content')
    @include('admin.components.header')
    <div class="mt-5 mx-20">
        <div class="bg-green-700 text-4xl text-white py-4 px-8">
            Users Management
        </div>
        <div class="content">
            <div class="flex items-center justify-center">
                <div class="container p-5">
                    <div class="grid grid-cols-1 gap-4">
                        <table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
                            <thead class="text-white">
                                <tr class="bg-green-700 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                                    <th class="p-3 text-left">Email</th>
                                    <th class="p-3 text-left">Name</th>
                                    <th class="p-3 text-left">Age</th>
                                    <th class="p-3 text-left">Gender</th>
                                    <th class="p-3 text-left">Address</th>
                                    <th class="p-3 text-left">Event</th>
                                    <th class="p-3 text-left">Status</th>
                                    <th class="p-3 text-left">Code</th>
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