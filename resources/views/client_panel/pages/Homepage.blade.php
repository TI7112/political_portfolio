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
                <p class="text-center text-4xl italic pb-10 font-bold uppercase"> Ravish Kumar - <span
                        class="text-red-500">designation</span></p>
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
            <div style="background-color: rgba(0, 0, 0, 0.8)"
                class="flex justify-center bg-[url('//picsum.photos/1920/1080')] h-[40vh] w-full bg-fixed">
                <div class="w-[80%] flex gap-10 items-center">
                    <div class="h-full flex items-top py-12">
                        <p class="italic text-4xl text-white">In <span class="text-red-500">Parliament</span></p>
                    </div>
                    <div class="bg-red-500 w-[35%] h-[70%]"></div>
                    <div class="bg-red-500 w-[35%] h-[70%]"></div>
                </div>
            </div>
            <div class="py-20 w-[60%]">
                <p class="text-center text-4xl italic pb-10 font-bold uppercase"> Recent <span
                        class="text-red-500">Post</span></p>
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
            <div class="w-screen">
                <div class="w-full bg-no-repeat bg-[url('https://www.karnataka.gov.in/storage/slids/1693544503.jpg')]">
                    <div class=" w-full py-24 bg-[rgba(0,0,0,0.81)]">


                        <h1 class='text-center  text-5xl font-bold font-serif text-white'>Political <span
                                class='text-orange-500'>Biography</span></h1>
                        <div class="flex justify-center py-2">
                            <div class="w-60 bg-green-500 h-1"></div>
                        </div>

                        <div class="w-screen py-14 flex text-white">

                            <div class="w-[48%] font-serif flex justify-end">
                                <div class="w-[500px] px-10 flex flex-col gap-24 text-right">
                                    <div class="flex justify-end">
                                        <h2 class='text-2xl font-bold px-5 py-1 bg-orange-700 rounded-xl'>Student life</h2>
                                    </div>
                                    <div class="flex flex-col gap-5">
                                        <h1 class='text-xl'>Bhojpuri Singer</h1>
                                        <p class='text-lg'>He is super star singer of bhojpuri songs. Manoj Tiwari sang
                                            "Jiya Ho Bihar Ke Lala Jiya Tu Haazar Sala" in Gangs of Wasseypur movie.</p>
                                        <div class="flex justify-end mt-3">
                                            <h2 class='text-2xl font-bold px-5 py-1 bg-orange-700 rounded-xl'>2004</h2>
                                        </div>
                                    </div>

                                    <div class="flex flex-col gap-5 mt-16">
                                        <h1 class='text-xl'>Contested Of Samajwadi Party</h1>
                                        <p class='text-lg'>In 2009, Tiwari contested elections for the 15th Lok Sabha as a
                                            candidate for the Samajwadi Party in the Gorakhpur constituency.

                                        </p>
                                        <div class="flex justify-end mt-3">
                                            <h2 class='text-2xl font-bold px-5 py-1 bg-orange-700 rounded-xl'>2010</h2>
                                        </div>
                                    </div>

                                    <div class="flex flex-col gap-5">
                                        <h1 class='text-xl'>Lok Sabha Constituency</h1>
                                        <p class='text-lg'>He won the North East Delhi (Lok Sabha constituency) in the 2014
                                            Indian general elections from BJP. He defeated Anand Kumar from AAP with a
                                            margin of 1,44,084 votes.</p>
                                        <div class="flex justify-end mt-3">
                                            <h2 class='text-2xl font-bold px-5 py-1 bg-orange-700 rounded-xl'>30/11/2016
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-[4$] flex justify-center">
                                <div class="w-1 bg-orange-500 h-full relative">
                                    <div class="bg-orange-500 p-2 border-4 border-white rounded-full absolute mt-2 -ml-3"></div>
                                    <div class="bg-orange-500 p-2 border-4 border-white rounded-full absolute mt-[10.7rem] -ml-3"></div>
                                    <div class="bg-orange-500 p-2 border-4 border-white rounded-full absolute mt-[19rem] -ml-3"></div>
                                    <div class="bg-orange-500 p-2 border-4 border-white rounded-full absolute mt-[33rem] -ml-3"></div>
                                    <div class="bg-orange-500 p-2 border-4 border-white rounded-full absolute mt-[42rem] -ml-3"></div>
                                    <div class="bg-orange-500 p-2 border-4 border-white rounded-full absolute mt-[50rem] -ml-3"></div>
                                    <div class="bg-orange-500 p-2 border-4 border-white rounded-full absolute mt-[62rem] -ml-3"></div>
                                </div>
                            </div>
                            <div class="w-[48%]">
                                <div class="w-[500px] px-10 flex flex-col gap-24 text-left">
                                    <p class='text-lg'>He is a brilliant student and singer, actorh from his student life.
                                    </p>

                                    <div class="flex mt-3">
                                        <h2 class='text-2xl font-bold px-5 py-1 bg-orange-700 rounded-xl'>1993 - 2003</h2>
                                    </div>

                                    <div class="flex flex-col gap-5">
                                        <h1 class='text-xl'>Bhojpuri Actor</h1>
                                        <p class='text-lg'>He took a role in the film "Sasura Bada Paise Wala". The BBC
                                            reported that the production costs of US$ 65,000 were turned into takings of US$
                                            3 million, while The Hindu reported a ₹ 3.5–4 billion cost resulting in takings
                                            of ₹45 million.</p>
                                        <div class="flex mt-3">
                                            <h2 class='text-2xl font-bold px-5 py-1 bg-orange-700 rounded-xl'>2009</h2>
                                        </div>
                                    </div>

                                    <div class="flex flex-col gap-5">
                                        <h1 class='text-xl'>Bigboss Contestant</h1>
                                        <p class='text-lg'>In 2010, Tiwari was a contestant in the fourth season of reality
                                            television show Bigg Boss</p>
                                        <div class="flex  mt-3">
                                            <h2 class='text-2xl font-bold px-5 py-1 bg-orange-700 rounded-xl'>2014</h2>
                                        </div>
                                    </div>

                                    <div class="flex flex-col gap-5">
                                        <h1 class='text-xl'>Delhi B.J.P President</h1>
                                        <p class='text-lg'>Delhi BJP leaders and workers accorded a grand welcome to MP
                                            Shri Manoj Tiwari on his appointment as the President of BJP Delhi Pradesh.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
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
