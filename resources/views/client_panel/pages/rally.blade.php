@extends('client_panel.components.layout')

@section('seo_title', 'Homepage')

@section('content')

    <div class="flex border-t-2 py-5 justify-center">
    <div class="w-[90%] flex gap-5">
        <div class="w-3/4">
            <p class="text-2xl uppercase border-b-2 pb-1 font-bold tracking-wider">Election Rally View</p>
            <div class="flex gap-5 pt-5">
                <select class="border-2 px-2 py-0.5 rounded-lg" name="state" id="state">
                    <option value="up">Uttar Pradesh</option>
                    <option value="bihar">Bihar</option>
                    <option value="punjab">Punjab</option>
                </select>
                <select class="border-2 px-2 py-0.5 rounded-lg" name="year" id="year">
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                </select>
                <button class="bg-orange-500 text-white px-5 py-1 rounded">Apply</button>
            </div>
            <div class="flex flex-col gap-5 py-5">
                <div class="flex gap-5 border-2 rounded-xl overflow-hidden">
                    <div class="">
                        <img class="w-96 h-64 rounded-xl" src="//picsum.photos/500/500" alt="">
                    </div>
                    <div class="flex py-5 flex-col gap-1">
                        <a href="" class="text-xl font-semibold py-2 hover:underline">सैयदराजा विधानसभा भाजपा प्रत्याशी श्री सुशील सिंह जी के लिए रोड शो कर भाजपा के पक्ष में मतदान करने का आग्रह करते हैं</a>
                        <p><span class="font-bold">सभा स्थल : </span>सैयदराजा विधानसभा</p>
                        <p><span class="font-bold">संम्पर्क सूत्र : </span>सैयदराजा विधानसभा भाजपा प्रत्याशी श्री सुशील सिंह जी के लिए रोड शो कर भाजपा के पक्ष में मतदान करने का आग्रह करते हैं
                        </p>
                        <p class="text-blue-500"><span class="text-black font-bold">आगमन : </span></p>
                        <p class="text-blue-500"><span class="text-black font-bold">प्रस्थान : </span></p>
                        <p class="text-blue-500"><span class="text-black font-bold">Date  : </span>2022-06-25 00:00:00</p>
                    </div>
                </div>
                <div class="flex gap-5 border-2 rounded-xl overflow-hidden">
                    <div class="">
                        <img class="w-96 h-64 rounded-xl" src="//picsum.photos/500/500" alt="">
                    </div>
                    <div class="flex py-5 flex-col gap-1">
                        <a href="" class="text-xl font-semibold py-2 hover:underline">सैयदराजा विधानसभा भाजपा प्रत्याशी श्री सुशील सिंह जी के लिए रोड शो कर भाजपा के पक्ष में मतदान करने का आग्रह करते हैं</a>
                        <p><span class="font-bold">सभा स्थल : </span>सैयदराजा विधानसभा</p>
                        <p><span class="font-bold">संम्पर्क सूत्र : </span>सैयदराजा विधानसभा भाजपा प्रत्याशी श्री सुशील सिंह जी के लिए रोड शो कर भाजपा के पक्ष में मतदान करने का आग्रह करते हैं
                        </p>
                        <p class="text-blue-500"><span class="text-black font-bold">आगमन : </span></p>
                        <p class="text-blue-500"><span class="text-black font-bold">प्रस्थान : </span></p>
                        <p class="text-blue-500"><span class="text-black font-bold">Date  : </span>2022-06-25 00:00:00</p>
                    </div>
                </div>
                <div class="flex gap-5 border-2 rounded-xl overflow-hidden">
                    <div class="">
                        <img class="w-96 h-64 rounded-xl" src="//picsum.photos/500/500" alt="">
                    </div>
                    <div class="flex py-5 flex-col gap-1">
                        <a href="" class="text-xl font-semibold py-2 hover:underline">सैयदराजा विधानसभा भाजपा प्रत्याशी श्री सुशील सिंह जी के लिए रोड शो कर भाजपा के पक्ष में मतदान करने का आग्रह करते हैं</a>
                        <p><span class="font-bold">सभा स्थल : </span>सैयदराजा विधानसभा</p>
                        <p><span class="font-bold">संम्पर्क सूत्र : </span>सैयदराजा विधानसभा भाजपा प्रत्याशी श्री सुशील सिंह जी के लिए रोड शो कर भाजपा के पक्ष में मतदान करने का आग्रह करते हैं
                        </p>
                        <p class="text-blue-500"><span class="text-black font-bold">आगमन : </span></p>
                        <p class="text-blue-500"><span class="text-black font-bold">प्रस्थान : </span></p>
                        <p class="text-blue-500"><span class="text-black font-bold">Date  : </span>2022-06-25 00:00:00</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/4 px-10">
            <div class="border-2 border-b-0 border-orange-500 flex flex-col w-72">
                <a class="py-2 px-2 border-b-2 border-orange-500 bg-orange-500 duration-500 text-white" href="">मनोज तिवारी मृदुल- (विविधता)</a>
                <a class="py-2 px-2 border-b-2 border-orange-500 hover:bg-orange-500 duration-500 hover:text-white" href="">एक राजनीतिक के रूप में (As a political)</a>
                <a class="py-2 px-2 border-b-2 border-orange-500 hover:bg-orange-500 duration-500 hover:text-white" href="">भक्ति गीत -(Bhakti Geet)</a>
                <a class="py-2 px-2 border-b-2 border-orange-500 hover:bg-orange-500 duration-500 hover:text-white" href="">भोजपूरी फिल्में -(Movies )</a>
                <a class="py-2 px-2 border-b-2 border-orange-500 hover:bg-orange-500 duration-500 hover:text-white" href="">मीडिया कवरेज -(Media Coverage)</a>
                <a class="py-2 px-2 border-b-2 border-orange-500 hover:bg-orange-500 duration-500 hover:text-white" href="">लाइव शो -( Live Show )</a>
                <a class="py-2 px-2 border-b-2 border-orange-500 hover:bg-orange-500 duration-500 hover:text-white" href="">लोगगीत -(Lok Geet)</a>
            </div>
        </div>
    </div>

@endsection
