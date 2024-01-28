@extends('client_panel.components.layout')

@section('seo_title', 'Homepage')

@section('content')

    <div class="h-screen w-full ">
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Addit ional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide w-full h-[80vh]">
                    <img class="w-full h-[80vh]" src="{{ asset('assets/static/14.jpg') }}" alt="">
                </div>
                <div class="swiper-slide w-full h-[80vh]">
                    <img class="w-full h-[80vh]" src="{{ asset('assets/static/14.jpg') }}" alt="">
                </div>
                <div class="swiper-slide w-full h-[80vh]">
                    <img class="w-full h-[80vh]" src="{{ asset('assets/static/14.jpg') }}" alt="">
                </div>
                ...
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        <div class="flex flex-col items-center">
            <div class="w-[75%] flex gap-10 py-20">
                <div class="w-1/2">
                    <img class="" src="{{ asset('assets/static/4.jpg') }}" alt="">
                </div>
                <div class="w-1/2 flex flex-col gap-3">
                    <p class="text-slate-600 text-5xl font-bold tracking-wider">Ravish Kumar</p>
                    <p class="text-slate-600">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque vel
                        praesentium dolore nemo cupiditate reprehenderit aperiam in earum consequatur iste voluptatem
                        molestiae quos fuga corporis suscipit ipsam totam voluptatibus autem officiis, sint, minus, eum
                        dolorum iusto quo! Veritatis illum rerum eveniet tenetur molestias. Incidunt a eveniet architecto,
                        soluta ullam maxime.</p>
                    <p class="text-slate-600">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque vel
                        praesentium dolore nemo cupiditate reprehenderit aperiam in earum consequatur iste voluptatem
                        molestiae quos fuga corporis suscipit ipsam totam voluptatibus autem officiis, sint, minus, eum
                        dolorum iusto quo! Veritatis illum rerum eveniet tenetur molestias. Incidunt a eveniet architecto,
                        soluta ullam maxime.</p>
                    <p class="text-slate-600">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque vel
                        praesentium dolore nemo cupiditate reprehenderit aperiam in earum consequatur iste voluptatem
                        molestiae quos fuga corporis suscipit ipsam totam voluptatibus autem officiis, sint, minus, eum
                        dolorum iusto quo! Veritatis illum rerum eveniet tenetur molestias. Incidunt a eveniet architecto,
                        soluta ullam maxime.</p>
                    <p class="text-slate-600">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque vel
                        praesentium dolore nemo cupiditate reprehenderit aperiam in earum consequatur iste voluptatem
                        molestiae quos fuga corporis suscipit ipsam totam voluptatibus autem officiis, sint, minus, eum
                        dolorum iusto quo! Veritatis illum rerum eveniet tenetur molestias. Incidunt a eveniet architecto,
                        soluta ullam maxime.</p>
                    <p class="text-slate-600">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque vel
                        praesentium dolore nemo cupiditate reprehenderit aperiam in earum consequatur iste voluptatem
                        molestiae quos fuga corporis suscipit ipsam totam voluptatibus autem officiis, sint, minus, eum
                        dolorum iusto quo! Veritatis illum rerum eveniet tenetur molestias. Incidunt a eveniet architecto,
                        soluta ullam maxime.</p>
                    <div class="">
                        <a class="bg-red-500 text-white px-6 py-1 rounded-xl " href="">Read more</a>
                    </div>
                </div>
            </div>
            <div class="flex gap-20 justify-center w-[80%]">
                <div class="w-full hover:bg-zinc-300 border-2 border-slate-200 py-5 flex justify-center items-center">
                    <a href="">Lorem Ipsum</a>
                </div>
                <div class="w-full hover:bg-zinc-300 border-2 border-slate-200 py-5 flex justify-center items-center">
                    <a href="">Lorem Ipsum</a>
                </div>
                <div class="w-full hover:bg-zinc-300 border-2 border-slate-200 py-5 flex justify-center items-center">
                    <a href="">Lorem Ipsum</a>
                </div>
            </div>
            <div class="py-20 w-[80%]">
                <p class="text-center text-4xl italic pb-10 font-bold uppercase"> Ravish Kumar - <span class="text-red-500">designation</span></p>
                <div class="flex gap-20 justify-center">
                    <div class="w-1/3">
                        <img src="{{ asset('assets/static/20.jpg') }}" alt="">
                        <p class="bg-red-500 text-white p-2 px-5">Media Coverage</p>
                    </div>
                    <div class="w-1/3">
                        <img src="{{ asset('assets/static/20.jpg') }}" alt="">
                        <p class="bg-red-500 text-white p-2 px-5">Media Coverage</p>
                    </div>
                    <div class="w-1/3">
                        <img src="{{ asset('assets/static/20.jpg') }}" alt="">
                        <p class="bg-red-500 text-white p-2 px-5">Media Coverage</p>
                    </div>
                </div>
            </div>
            <div style="background-color: rgba(0, 0, 0, 0.8)" class="flex justify-center bg-[url('//picsum.photos/1920/1080')] h-[40vh] w-full bg-fixed">
                <div class="w-[80%] flex gap-10 items-center">
                    <div class="h-full flex items-top py-12">
                        <p class="italic text-4xl text-white">In <span class="text-red-500">Parliament</span></p>
                    </div>
                    <div class="bg-red-500 w-[35%] h-[70%]"></div>
                    <div class="bg-red-500 w-[35%] h-[70%]"></div>
                </div>
            </div>
            <div class="py-20 w-[60%]">
                <p class="text-center text-4xl italic pb-10 font-bold uppercase"> Recent <span class="text-red-500">Post</span></p>
                <div class="flex gap-10 justify-center">
                    <div class="w-1/3">
                        <img src="{{ asset('assets/static/20.jpg') }}" alt="">
                        <p class="bg-red-500 text-white p-2 px-5">Media Coverage</p>
                    </div>
                    <div class="w-1/3">
                        <img src="{{ asset('assets/static/20.jpg') }}" alt="">
                        <p class="bg-red-500 text-white p-2 px-5">Media Coverage</p>
                    </div>
                    <div class="w-1/3">
                        <img src="{{ asset('assets/static/20.jpg') }}" alt="">
                        <p class="bg-red-500 text-white p-2 px-5">Media Coverage</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'vertical',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>

@endsection
