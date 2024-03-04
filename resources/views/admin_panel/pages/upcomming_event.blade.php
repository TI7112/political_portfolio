@extends('admin_panel.components.layout')

@section('title', 'Manage Upcomming Event')
@section('heading', 'Manage Upcomming Event')

@section('content')

    <div class="flex justify-between items-center py-3">
        <div class="flex gap-2 items-center">
            <a href="">
                <p class="text-xs hover:underline">Home</p>
            </a>
            <p class="text-base">/</p>
            <a href="">
                <p class="text-xs hover:underline">Manage Upcomming Event</p>
            </a>
        </div>
        <div x-data="{ open: false }">
            <button @click="open = !open"
                class="bg-slate-700 hover:bg-slate-800 duration-500 text-white px-5 py-1 rounded">Add Upcomming
                Event</button>

            <div style="background-color: rgba(0 ,0,0,0.7)" x-show="open"
                class="w-full px-2 h-screen flex justify-center items-center z-50 fixed top-0 left-0">
                <form action="{{ route('admin_add_upcomming_event') }}" method="POST" enctype="multipart/form-data"
                    class="lg:w-[35vw] w-full bg-white rounded-xl border-slate-800 border-2">
                    @csrf
                    <div class="flex justify-between px-4 bg-slate-800 text-white py-2">
                        <p class="text-xl font-semibold">Add Upcomming Event</p>
                        <button type="button" @click="open = !open" class="text-xl font-semibold">x</button>
                    </div>
                    <div class="pb-2 pt-3 px-4 flex flex-col gap-3">
                        <div class="">
                            <p class="text-sm font-semibold">Title<span class="text-red-500">*</span></p>
                            <input type="text" name="name"
                                class="border-2 border-slate-400 duration-500 focus:border-slate-600 outline-none px-2 py-0.5 rounded w-full"
                                required>
                        </div>
                        <div class="">
                            <p class="text-sm font-semibold">Event Date<span class="text-red-500">*</span></p>
                            <input type="date" name="event_date"
                                class="border-2 border-slate-400 duration-500 focus:border-slate-600 outline-none px-2 py-0.5 rounded w-full"
                                required>
                        </div>
                        <div class="">
                            <p class="text-sm font-semibold">Description<span class="text-red-500">*</span></p>
                            <textarea type="text" name="description"
                                class="border-2 border-slate-400 duration-500 focus:border-slate-600 outline-none px-2 py-0.5 rounded w-full"
                                required></textarea>
                        </div>
                        <div class="">
                            <p class="text-sm font-semibold">Thumbnail<span class="text-red-500">*</span></p>
                            <input type="file" name="thumbnail"
                                class="border-2 border-slate-400 duration-500 focus:border-slate-600 outline-none px-2 py-0.5 rounded w-full"
                                required>
                        </div>
                        <div class="flex justify-between py-2 gap-2">
                            <button @click="open = false"
                                class="bg-red-700 hover:bg-red-800 duration-500 text-white font-semibold px-5 py-1 rounded"
                                type="button">Cancel</button>
                            <button
                                class="bg-slate-700 hover:bg-slate-800 duration-500 text-white font-semibold px-5 py-1 rounded"
                                type="submit">Add Upcomming Event</button>
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
                        <th class="py-2 w-[5%]">sr. no</th>
                        <th class="py-2 w-[10%]">Img</th>
                        <th class="py-2 w-[40%] text-left">Title</th>
                        <th class="py-2 w-[15%] text-left">Date</th>
                        <th class="py-2 w-[15%] text-left">Description</th>
                        <th class="py-2 w-[12%] text-left">Created at</th>
                        <th class="py-2 pr-3 w-[5%]">Action</th>
                    </tr>
                </thead>
                @php
                    $i = 0;
                @endphp
                <tbody>
                    @foreach ($upcomming_event as $value)
                        <tr class="border-b-2 justify-center">
                            <td class="py-2 w-[5%] pl-5">@php echo $i = $i +1 @endphp</td>
                            <td class="py-2 flex ">
                                <img class="w-20 h-20 rounded"
                                    src="{{ asset('assets/uploads/'.$value->image) }}"
                                    alt="">
                            </td>
                            <td class="py-2 w-[40%] text-left" title="{{ $value->title }}">{{ substr($value->title , 0 , 200) . "..." }}</td>
                            <td class="py-2 w-[15%] text-left">{{ $value->event_date}}</td>
                            <td class="py-2 w-[15%] text-left">{{ substr($value->description , 0 , 100) . "..." }}</td>
                            <td class="py-2 w-[12%] text-left pl-2">{{ $value->created_at }}</td>
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
                    @endforeach
                </tbody>
                <tfoot>
                    <tr class="border-b-2 bg-slate-600 text-white">
                        <th class="py-2 w-[5%]">sr. no</th>
                        <th class="py-2 w-[10%]">Img</th>
                        <th class="py-2 w-[40%] text-left">Title</th>
                        <th class="py-2 w-[15%] text-left">Date</th>
                        <th class="py-2 w-[15%] text-left">Location</th>
                        <th class="py-2 w-[12%] text-left">Created at</th>
                        <th class="py-2 pr-3 w-[5%]">Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>

        <script>
            new DataTable('#example');

            function handleClose() {
                updatediv.classList.add('hidden');
            }
        </script>

    @endsection
