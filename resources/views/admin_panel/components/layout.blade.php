<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="//cdn.tailwindcss.com"></script>
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="">
    <!--header-->
 <div class="bg-slate-900 text-slate-200 lg:px-16 px-4 flex items-center justify-between py-4">
        <button onclick="showmenu()" class="lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z">
                </path>
            </svg>
        </button>
        <p class="text-2xl font-semibold font-serif lg:pl-[22rem]">@yield('heading')</p>
        <div class="flex gap-6">
            <a href="" class="hover:scale-125 hover:rotate-125 duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
                    <path
                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z">
                    </path>
                </svg>
            </a>
            <a href="" class="group duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    class="w-6 h-6 group-hover:rotate-90 duration-300" viewBox="0 0 16 16">
                    <path
                        d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z">
                    </path>
                </svg>
            </a>
        </div>
    </div>
    <div class="lg:flex">
        <div id="mobileMenuDiv"
            class="-translate-x-full -mt-16 lg:translate-x-0 print:hidden duration-700 sticky top-0 z-50 w-full lg:w-[20vw] flex justify-center lg:block ">
            <div class=" w-full bg-white min-h-screen">
                <div class="bg-slate-800 h-64 w-full">
                    <div class="p-5 flex items-start">
                        <button onclick="hidemenu()" class="text-8xl lg:hidden font-semibold text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z">
                                </path>
                            </svg>
                        </button>
                        <div class="w-full flex flex-col items-center">
                           
                                <img class="w-32 rounded-full border-4" src="//picsum.photos/id/239/500/500"
                                    alt="">
                                {{-- <img class="w-32 h-32 rounded-full border-4"
                                    src="/public/assets/employee/dp/{{ $user->emp_dp }}" alt=""> --}}
                            <div class="py-4 text-center leading-3">
                                <p class="text-white font-semibold ">Ayush</p>
                                <p class="text-white font-semibold text-lg py-1">8405832947</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-4 flex justify-between items-center p-5 -mt-12 border-2 rounded bg-white">
                    <a href=""
                        class="group flex flex-col gap-2 items-center text-slate-600 hover:text-black duration-500">
                        <p class="bg-slate-800 group-hover:bg-black duration-500 text-white p-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6"
                                viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z">
                                </path>
                            </svg>
                        </p>
                        <p class="font-semibold text-sm">User</p>
                    </a>
                    <a href=""
                        class="group flex flex-col gap-2 items-center text-slate-600 hover:text-black duration-500">
                        <p class="bg-slate-800 group-hover:bg-black duration-500 text-white p-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6"
                                viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z">
                                </path>
                            </svg>
                        </p>
                        <p class="font-semibold text-sm">Profile</p>
                    </a>
                    <a href=""
                        class="group flex flex-col gap-2 items-center text-slate-600 hover:text-black duration-500">
                        <p class="bg-slate-800 group-hover:bg-black duration-500 text-white p-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.475 5.458c-.284 0-.514-.237-.47-.517C4.28 3.24 5.576 2 7.825 2c2.25 0 3.767 1.36 3.767 3.215 0 1.344-.665 2.288-1.79 2.973-1.1.659-1.414 1.118-1.414 2.01v.03a.5.5 0 0 1-.5.5h-.77a.5.5 0 0 1-.5-.495l-.003-.2c-.043-1.221.477-2.001 1.645-2.712 1.03-.632 1.397-1.135 1.397-2.028 0-.979-.758-1.698-1.926-1.698-1.009 0-1.71.529-1.938 1.402-.066.254-.278.461-.54.461h-.777ZM7.496 14c.622 0 1.095-.474 1.095-1.09 0-.618-.473-1.092-1.095-1.092-.606 0-1.087.474-1.087 1.091S6.89 14 7.496 14"/>
                            </svg>
                        </p>
                        <p class="font-semibold text-sm">Help</p>
                    </a>
                </div>
                <div class="flex-flex-col w-full">
                    <a href="" class="group w-full">
                        <div class="py-5 px-10 flex justify-between items-center">
                            <div class="flex text-slate-500 items-center gap-8">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                    <path
                        d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z">
                    </path>
                </svg>
                                <p class="text-slate-600 group-hover:text-black text-sm font-semibold">Dashboard
                                </p>
                            </div>
                            <div class="flex gap-2 text-slate-500 group-hover:text-black duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.25 4.5l7.5 7.5-7.5 7.5">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('admin_janta')}}" class="group w-full">
                        <div class="py-5 px-10 flex justify-between items-center">
                            <div class="flex text-slate-500 items-center gap-8">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6"
                                    viewBox="0 0 16 16">
                                    <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"></path>
                                    <path
                                        d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z">
                                    </path>
                                </svg>
                                <p class="text-slate-600 group-hover:text-black text-sm font-semibold">Janta Darbar
                                </p>
                            </div>
                            <div class="flex gap-2 text-slate-500 group-hover:text-black duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.25 4.5l7.5 7.5-7.5 7.5">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('admin_rally')}}" class="group w-full">
                        <div class="py-5 px-10 flex justify-between items-center">
                            <div class="flex text-slate-500 items-center gap-8">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5ZM9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8Zm1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5Zm-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96c.026-.163.04-.33.04-.5ZM7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z" />
                                </svg>
                                <p class="text-slate-600 group-hover:text-black text-sm font-semibold">Rally
                                </p>
                            </div>
                            <div class="flex gap-2 group-hover:text-black text-slate-600 duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.25 4.5l7.5 7.5-7.5 7.5">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('admin_staff') }}" class="group w-full">
                        <div class="py-5 px-10 flex justify-between items-center">
                            <div class="flex text-slate-500 items-center gap-8">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5ZM9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8Zm1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5Zm-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96c.026-.163.04-.33.04-.5ZM7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z" />
                                </svg>
                                <p class="text-slate-600 group-hover:text-black text-sm font-semibold">Contact Person
                                </p>
                            </div>
                            <div class="flex gap-2 group-hover:text-black text-slate-600 duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.25 4.5l7.5 7.5-7.5 7.5">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('admin_upcoming_event') }}" class="group w-full">
                        <div class="py-5 px-10 flex justify-between items-center">
                            <div class="flex text-slate-500 items-center gap-8">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z" />
                                    <path
                                        d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z" />
                                </svg>
                                <p class="text-slate-600 group-hover:text-black text-sm font-semibold">Upcomming Event
                                </p>
                            </div>
                            <div class="flex gap-2 group-hover:text-black text-slate-600 duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.25 4.5l7.5 7.5-7.5 7.5">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <a href="" class="group w-full">
                        <div class="py-5 px-10 flex justify-between items-center">
                            <div class="flex text-slate-500 items-center gap-8">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                    <path fill-rule="evenodd"
                                        d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                                </svg>
                                <p class="text-slate-600 group-hover:text-black text-sm font-semibold">Logout</p>
                            </div>
                            <div class="text-slate-500 group-hover:text-black duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.25 4.5l7.5 7.5-7.5 7.5">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="lg:w-[80vw] lg:px-5">@yield('content')</div>
            
</div>

    <!--footer -->

    <div class="fixed bottom-0 left-0 lg:hidden w-full print:hidden">
        <div class="flex bg-slate-800 w-full">
            <a href=""
                class="w-[20%] flex flex-col items-center justify-center text-white pt-3 pb-1 border-r-2 border-slate-600 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                    <path
                        d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z">
                    </path>
                </svg>
                <p class="text-[10px]">Home</p>
            </a>
            <a href=""
                class="w-[30%] flex flex-col items-center justify-center text-white pt-3 pb-1 border-r-2 border-slate-600 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                    <path
                        d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z">
                    </path>
                </svg>
                <p class="text-[10px]">Store Report</p>
            </a>
            <a href=""
                class="w-[25%] flex flex-col items-center justify-center text-white pt-3 pb-1 border-r-2 border-slate-600 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                    <path
                        d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z">
                    </path>
                </svg>
                <p class="text-[10px]">Employee Report</p>
            </a>
            <a href=""
                class="w-[25%] flex flex-col items-center justify-center text-white pt-3 pb-1 border-r-2 border-slate-600 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                    <path
                        d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z">
                    </path>
                </svg>
                <p class="text-[10px]">Inventory Report</p>
            </a>
        </div>
    </div>
    <script>
        function showmenu() {
            mobileMenuDiv.classList.replace('-translate-x-full', 'translate-x-0')
        };

        function hidemenu() {
            mobileMenuDiv.classList.replace('translate-x-0', '-translate-x-full')
        };
    </script>
</body>

</html>
