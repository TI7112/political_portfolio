@extends('admin_panel.components.layout')

@section('title', 'Manage Employee')
@section('heading', 'Manage Employee')

@section('content')

    <div class="flex justify-between items-center py-3">
        <div class="flex gap-2 items-center">
            <a href="">
                <p class="text-xs hover:underline">Home</p>
            </a>
            <p class="text-base">/</p>
            <a href="">
                <p class="text-xs hover:underline">Manage Employee</p>
            </a>
        </div>
        <div x-data="{ open: false }">
            <button @click="open = !open"
                class="bg-slate-700 hover:bg-slate-800 duration-500 text-white px-5 py-1 rounded">Add Employee</button>

            <div style="background-color: rgba(0 ,0,0,0.7)" x-show="open"
                class="w-full px-2 h-screen flex justify-center items-center z-50 fixed top-0 left-0">
                <form action="" method="POST"
                    class="lg:w-96 w-full bg-white rounded-xl border-slate-800 border-2">
                    @csrf
                    <div class="flex justify-between px-4 bg-slate-800 text-white py-2">
                        <p class="text-xl font-semibold">Add employee</p>
                        <button type="button" @click="open = !open" class="text-xl font-semibold">x</button>
                    </div>
                    <div class="pb-2 pt-3 px-4 flex flex-col gap-3">
                        <div class="">
                            <p class="text-sm font-semibold">Name<span class="text-red-500">*</span></p>
                            <input type="text" name="name"
                                class="border-2 border-slate-400 duration-500 focus:border-slate-600 outline-none px-2 py-0.5 rounded w-full"
                                required>
                        </div>
                        <div class="">
                            <p class="text-sm font-semibold">Email<span class="text-red-500">*</span></p>
                            <input type="text" name="email"
                                class="border-2 border-slate-400 duration-500 focus:border-slate-600 outline-none px-2 py-0.5 rounded w-full"
                                required>
                        </div>
                        <div class="">
                            <p class="text-sm font-semibold">Phone<span class="text-red-500">*</span></p>
                            <input type="text" name="phone"
                                class="border-2 border-slate-400 duration-500 focus:border-slate-600 outline-none px-2 py-0.5 rounded w-full"
                                required>
                        </div>
                        <div class="">
                            <div class="flex items-end">
                                <div class="w-3/4">
                                    <p class="text-sm font-semibold">Promocode<span class="text-red-500">*</span></p>
                                    <input type="text" id="affiliate_code" name="affiliate_code"
                                        class="border-2 border-slate-400 duration-500 focus:border-slate-600 outline-none px-2 py-0.5 rounded w-full"
                                        required>
                                </div>
                                <button type="button" onclick="verifyPromo()"
                                    class="w-1/4 text-white bg-slate-800 px-5 py-1">verify</button>
                            </div>
                            <div id="status" class="status text-[10px]">

                            </div>
                        </div>
                        <div class="flex justify-between py-2 gap-2">
                            <button @click="open = false"
                                class="bg-red-700 hover:bg-red-800 duration-500 text-white font-semibold px-5 py-1 rounded"
                                type="button">Cancel</button>
                            <button
                                class="bg-slate-700 hover:bg-slate-800 duration-500 text-white font-semibold px-5 py-1 rounded"
                                type="submit">Add Employee</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="">
        <style>
            .dataTables_wrapper .dataTables_filter input {
                border: 1px solid #aaa;
                border-radius: 10px;
                width: 15vw;
                margin: 0 0 10px 10px;
                outline: none;
                padding: 5px;
            }
        </style>

        <div class="w-full border-2 p-5 rounded-lg">
            @if (Session::has('success'))
                <p class="text-green-100 bg-green-500 px-5 mb-2 font-semibold py-1">{{ Session::get('success') }}</p>
            @endif
            <table id="example" class="display responsive nowrap w-full border-2">
                <thead>
                    <tr class="border-b-2 bg-slate-600 text-white">
                        <th class="py-2 w-[10%]">Sr no.</th>
                        <th class="py-2 w-[25%]">Name</th>
                        <th class="py-2 w-[20%]">Phone</th>
                        <th class="py-2 w-[25%]">Email</th>
                        <th class="py-2 w-[5%]">Wallet Balance</th>
                        <th class="py-2 w-[20%]">Date</th>
                        <th class="py-2 w-[5%]">Action</th>
                    </tr>
                </thead>
                @php
                    $i = 0;
                @endphp
                <tbody>
                        <tr class="border-b-2 justify-center">
                            <td class="py-2 w-[10%]">ayush</td>
                            <td class="py-2 w-[25%]">ayush</td>
                            <td class="py-2 w-[20%]">ayush</td>
                            <td class="py-2 w-[25%]">ayush</td>
                            <td class="py-2 w-[5%]">ayush</td>
                            <td class="py-2 w-[20%]">ayush</td>
                            <td class="py-2 w-[5%]">
                                <button type="button" name="" onclick="update(this)" class="pl-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                    </svg>
                                </button>


                            </td>
                        </tr>
                <tfoot>
                    <tr class="border-b-2 bg-slate-600 text-white">
                        <th class="py-2 w-[10%]">Sr no.</th>
                        <th class="py-2 w-[25%]">Store Name</th>
                        <th class="py-2 w-[20%]">Short name</th>
                        <th class="py-2 w-[25%]">How to use</th>
                        <th class="py-2 w-[5%]">Total Inventory</th>
                        <th class="py-2 w-[20%]">Date</th>
                        <th class="py-2 w-[5%]">Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div style="background-color: rgba(0 ,0,0,0.7)" id="updatediv"
            class="hidden w-full px-2 h-screen flex justify-center items-center z-50 fixed top-0 left-0">
            <form action="" method="POST"
                class="lg:w-[25vw] w-full bg-white rounded-xl border-slate-800 border-2">
                @csrf
                <input type="hidden" name="update_emp_id" id="emp_id">
                <div class="flex justify-between px-4 bg-slate-800 text-white py-2">
                    <p class="text-xl font-semibold">Update Employee</p>
                    <button type="button" onclick="handleClose()" class="text-xl font-semibold">x</button>
                </div>
                <div class="p-4 flex flex-col gap-2">
                    <div class="">
                        <p class="text-sm font-semibold">Name<span class="text-red-500">*</span></p>
                        <input type="text" id="name" name="name"
                            class="border-2 border-slate-400 duration-500 focus:border-slate-600 outline-none px-2 py-0.5 rounded w-full"
                            required>
                    </div>
                    <div class="">
                        <p class="text-sm font-semibold">Email<span class="text-red-500">*</span></p>
                        <input type="text" id="email" name="email"
                            class="border-2 border-slate-400 duration-500 focus:border-slate-600 outline-none px-2 py-0.5 rounded w-full"
                            required>
                    </div>
                    <div class="">
                        <p class="text-sm font-semibold">Phone<span class="text-red-500">*</span></p>
                        <input type="text" id="phone" name="phone"
                            class="border-2 border-slate-400 duration-500 focus:border-slate-600 outline-none px-2 py-0.5 rounded w-full"
                            required>
                    </div>
                    <div class="">
                        <p class="text-sm font-semibold">Wallet Balance<span class="text-red-500">*</span></p>
                        <input type="text" id="wallet" name="wallet"
                            class="border-2 border-slate-400 duration-500 focus:border-slate-600 outline-none px-2 py-0.5 rounded w-full"
                            required>
                    </div>
                    <div class="flex justify-between py-2 gap-2">
                        <button onclick="handleClose()"
                            class="bg-red-700 hover:bg-red-800 duration-500 text-white font-semibold px-5 py-1 rounded"
                            type="button">Cancel</button>
                        <button
                            class="bg-slate-700 hover:bg-slate-800 duration-500 text-white font-semibold px-5 py-1 rounded"
                            type="submit">Update Employee</button>
                    </div>

                </div>
            </form>
        </div>

        <script>
            CKEDITOR.replace('howtouse');
            CKEDITOR.replace('updatehowtouse');
            new DataTable('#example');

            function handleClose() {
                updatediv.classList.add('hidden');
            }

            function verifyPromo() {
                $.post(
                    "{, {
                        _token: "{{ csrf_token() }}",
                        promo: $('#affiliate_code').val(),
                    },
                    function(data) {
                        if (data.status == "success") {
                            $('#status').html(`<p class="text-green-500">${data.msg}</p>`)
                        } else {
                            $('#status').html(`<p class="text-red-500">${data.msg}</p>`)
                        }
                    }
                );
            }


            function update(e) {
                $.post(
                    "{, {
                        _token: "{{ csrf_token() }}",
                        id: e.name,
                    },
                    function(data) {
                        $('#emp_id').val(data.emp_id)
                        $('#name').val(data.emp_name)
                        $('#email').val(data.emp_email)
                        $('#phone').val(data.emp_phone)
                        $('#wallet').val(data.emp_wallet)

                        updatediv.classList.remove('hidden')
                    }
                );
            }
        </script>

    @endsection
