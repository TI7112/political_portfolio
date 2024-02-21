@extends('client_panel.components.layout')

@section('seo_title', 'Homepage')

@section('content')

    <div class="flex border-t-2 py-5 justify-center">
        <div class="w-[90%] flex gap-5">
            <div class="w-3/4">
                <p class="text-2xl uppercase border-b-2 pb-1 font-bold tracking-wider">Staff Profile</p>
                <div class="flex flex-col gap-5 py-5">
                    <div class="flex gap-5 border-2 rounded-xl overflow-hidden">
                        <div class="">
                            <img class="w-96 h-64 rounded-xl" src="//picsum.photos/500/500" alt="">
                        </div>
                        <div class="flex py-5 flex-col gap-1">
                            <a href="" class="text-xl font-semibold py-2 hover:underline">सांसद श्री मनोज तिवारी जी पार्क का लोकार्पण और मिशन अनिवार्य के तहत जरूरतमंद महिलाओं को सेनेटरी नैपकिन वितरण</a>
                            <p><span class="font-bold">Event Date : </span>Sunday, June 26, 2022</p>
                            <p>पार्क का लोकार्पण और मिशन अनिवार्य के तहत जरूरतमंद महिलाओं को सेनेटरी नैपकिन वितरण</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/4 px-10">
                <div class="border-2 border-b-0 border-orange-500 flex flex-col w-72">
                    <a class="py-2 px-2 border-b-2 border-orange-500 bg-orange-500 duration-500 text-white"
                        href="">मनोज तिवारी मृदुल- (विविधता)</a>
                    <a class="py-2 px-2 border-b-2 border-orange-500 hover:bg-orange-500 duration-500 hover:text-white"
                        href="">एक राजनीतिक के रूप में (As a political)</a>
                    <a class="py-2 px-2 border-b-2 border-orange-500 hover:bg-orange-500 duration-500 hover:text-white"
                        href="">भक्ति गीत -(Bhakti Geet)</a>
                    <a class="py-2 px-2 border-b-2 border-orange-500 hover:bg-orange-500 duration-500 hover:text-white"
                        href="">भोजपूरी फिल्में -(Movies )</a>
                    <a class="py-2 px-2 border-b-2 border-orange-500 hover:bg-orange-500 duration-500 hover:text-white"
                        href="">मीडिया कवरेज -(Media Coverage)</a>
                    <a class="py-2 px-2 border-b-2 border-orange-500 hover:bg-orange-500 duration-500 hover:text-white"
                        href="">लाइव शो -( Live Show )</a>
                    <a class="py-2 px-2 border-b-2 border-orange-500 hover:bg-orange-500 duration-500 hover:text-white"
                        href="">लोगगीत -(Lok Geet)</a>
                </div>
            </div>
        </div>

    @endsection
