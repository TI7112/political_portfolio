<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('seo_title')</title>
    <script src="//cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <div class="flex justify-between px-20 py-2">
        <div class="text-3xl font-bold ">RAVISH</div>
        <div class="flex items-center gap-5">
            <a class="bg-red-500 px-5 text-white py-2 -skew-x-[20deg]" href="">रवीश कुमार</a>
            <a class="bg-zinc-500 px-5 text-white py-2 -skew-x-[20deg]" href="">चुनावी रैलियां</a>
            <a class="bg-blue-500 px-5 text-white py-2 -skew-x-[20deg]" href="">संपर्क अधिकारी</a>
            <a class="bg-rose-500 px-5 text-white py-2 -skew-x-[20deg]" href="">आगामी कार्यक्रम</a>
            <a class="bg-black px-5 text-white py-2 -skew-x-[20deg]" href="">संपर्क करें</a>
        </div>
    </div>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>

</html>
