<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>زرین پال | ارائه دهنده خدمات پرداخت</title>
    <link rel="shortcut icon" href="images/logo/mark/PNG/ZarinPal_Mark.png" type="image/x-icon">
    <!-- فونت ایرانی Vazirmatn -->
    <!-- <link href="https://cdn.fontcdn.ir/Font/Persian/Vazir/Vazir.css" rel="stylesheet" type="text/css" /> -->

    @vite('resources/css/app.css')

    <style>
        body {
            font-family: 'VazirMatn', sans-serif;
        }
    </style>
</head>

<body dir="rtl" class="bg-gray-100 ">
    <div class="w-full bg-gray-900 font-bold p-2 text-white justify-center mx-auto sticky top-0 z-55">
        <span class="justify-center mx-auto flex text-sm">از اختلالات پیش آمده متاسفیم</span>
    </div>

    <div class="menu w-full bg-white shadow-xl sticky top-9 z-50">
        <div class="container mx-auto p-1.5 flex justify-between items-center ">
            <a href="{{route('home')}}"><img class="w-30" src="/images/logo/zarinpal-logo.svg" alt=""></a>
            <ul class="list-none invisible sm:invisible md:visible xl:visible 2xl:visible flex text-gray-700 text-sm flex-wrap sm:gap-4 sm:font-bold  sm:text-md md:font-bold  md:gap-7 md:text-md xl:gap-14">
                <li><a href="{{route('home')}}" class="hover:bg-gray-200 rounded-full py-3 px-3">خانه</a></li>
                <li><a href="#" class="hover:bg-gray-200 rounded-full py-3 p-2">توسعه دهندگان ما</a></li>
                <li><a href="#" class="hover:bg-gray-200 rounded-full py-3 p-2">تماس با ما<a></li>
                <li><a href="#" class="hover:bg-gray-200 rounded-full py-3 p-2">همکاری با ما</a></li>
            </ul>
            <button
                class="bg-blue-800 w-50 text-xs py-2 md:w-35 md:p-3 rounded-full text-white hover:bg-blue-950 transition-all hover:transition-all hover:cursor-pointer duration-400  ">ورود
                یا
                ثبت
                نام</button>
            <img src="/images/logo/burger-list-menu-navigation-svgrepo-com.svg" class="w-10 mr-5 md:hidden xl:hidden 2xl:hidden hover:cursor-pointer hover:rotate-180 transition-all hvoer:transition-all duration-400 hover:scale-110 hover:transform hover:scale-x-[-1]" alt="">

        </div>
    </div>

    <div
        class=" shadow-2xl shadow-gray-950 mx-auto my-10 p-10 h-fit rounded-2xl bg-gradient-to-r from-blue-950 via-gray-900 to-gray-950 w-8/9 flex flex-col-reverse md:flex-row-reverse justify-around items-center gap-10">

        <div class="md:w-1/2 mb-5 flex justify-center">
            <img src="/images/logo/img-mainhero.webp" class="w-60 sm:w-80 md:w-150" alt="">
        </div>

        <div class="text-center md:text-right md:w-1/2 my-10">
            <h1 class="text-white font-bold text-2xl my-5 md:text-4xl">بیش از ۱۵ سال انتخاب مطمئن کسب‌وکار‌های آنلاین
            </h1>
            <p class="text-gray-400 leading-relaxed">زرین‌پال، به عنوان اولین پرداخت‌یار کشور، با به‌کارگیری
                استانداردهای جدید در ارائه خدمات درگاه پرداخت اینترنتی، سرویس‌های متنوعی در حوزه‌ی پرداخت
                الکترونیک را برای کسب و کارها ارائه می‌کند.</p>
            <button
                class="bg-blue-800 p-3 w-35 mx-auto rounded-xl text-white mt-10 hover:bg-blue-500 hover:text-black transition-all hover:transition-all hover:cursor-pointer hover:shadow-xl hover:shadow-gray-800 hover:-translate-y-1 hover:scale-110 transform">ورود
                یا ثبت نام</button>
        </div>
    </div>
    <div
        class="mx-auto my-20 p-10 rounded-2xl w-full flex flex-col-reverse md:flex-row-reverse justify-around items-center gap-3">

        <div class="flex flex-wrap justify-center gap-6 w-full max-w-7xl">
            <!-- کارت ۱ -->
            <div
                class="hover:shadow-2xl hover:shadow-gray-300 hover:transition-all hover:cursor-pointer transition-all w-full sm:w-[48%] lg:w-[23%] bg-white h-[280px] p-6 rounded-2xl text-center shadow-md flex flex-col items-center justify-center">
                <span class="font-bold block text-xl mb-4">پشتیبانی ۲۴ ساعته</span>
                <span class="text-gray-700 text-sm leading-relaxed">
                    تیم پشتیبانی زرین‌پال به صورت ۲۴ ساعته در ۷ روز هفته، آماده‌ی پاسخگویی و راهنمایی کاربران است.
                </span>
            </div>

            <!-- کارت ۲ -->
            <div
                class="hover:shadow-2xl hover:shadow-gray-300 hover:transition-all hover:cursor-pointer transition-all  w-full sm:w-[48%] lg:w-[23%] bg-white h-[280px] p-6 rounded-2xl text-center shadow-md flex flex-col items-center justify-center">
                <span class="font-bold block text-xl mb-4">ضمانت پرداخت</span>
                <span class="text-gray-700 text-sm leading-relaxed">
                    درگاه پرداخت زرین‌پال، تجربه‌ی پرداخت اینترنتی آسان، سریع و امن را به مشتریان کسب و کارهای آنلاین
                    هدیه می‌دهد.
                </span>
            </div>

            <!-- کارت ۳ -->
            <div
                class="hover:shadow-2xl hover:shadow-gray-300 hover:transition-all hover:cursor-pointer transition-all  w-full sm:w-[48%] lg:w-[23%] bg-white h-[280px] p-6 rounded-2xl text-center shadow-md flex flex-col items-center justify-center">
                <span class="font-bold block text-xl mb-4">مسیردهی هوشمند</span>
                <span class="text-gray-700 text-sm leading-relaxed">
                    امکان اتصال به ۶ درگاه پرداخت معتبر، باعث می‌شود کاربران به بهترین درگاه پرداخت با بالاترین میزان
                    تراکنش موفق هدایت شوند.
                </span>
            </div>

            {{--
            <!-- کارت ۴  --}}
            <div
                class="hover:shadow-2xl hover:shadow-gray-300 hover:transition-all hover:cursor-pointer transition-all  w-full sm:w-[48%] lg:w-[23%] bg-white h-[280px] p-6 rounded-2xl text-center shadow-md flex flex-col items-center justify-center">
                <span class="font-bold block text-xl mb-4">امنیت پرداخت</span>
                <span class="text-gray-700 text-sm leading-relaxed">
                    درگاه امن زرین‌پال، امنیت اطلاعات بانکی افراد در هنگام پرداخت‌های اینترنتی را تضمین می‌کند.
                </span>
            </div>
        </div>
    </div>







    <div
        class=" shadow-2xl shadow-gray-950 mx-auto my-10 p-10 h-fit rounded-2xl bg-gray-50 w-8/9 flex flex-col md:flex-row justify-around items-center gap-10">

        <div class="md:w-1/2 mb-5 flex justify-center">
            <img src="/images/logo/Img_PGSection.webp" class="w-60 sm:w-80 md:w-150" alt="">
        </div>

        <div class="text-center md:text-right md:w-1/2 my-1">
            <h1 class="text-black font-bold text-2xl my-5 md:text-4xl"> مهندسی شده برای رشد و فروش بیش‌تر</h1>
            <p class="text-gray-400 leading-relaxed">درگاه پرداخت زرین‌پال، با اتصال همزمان به درگاه‌های متنوع و معتبر بانکی (PSPها)، کاربران را به سریع‌ترین و مطمئن‌ترین درگاه بانکی منتقل می‌کند و به واسطه‌ی قابلیت مسیردهی هوشمند، باعث افزایش فروش و درصد تراکنش‌های موفق می‌شود.</p>
            <button class=" bg-blue-800 p-3 w-40 mx-auto rounded-xl text-white mt-10 hover:bg-blue-600 hover:text-black transition-all hover:transition-all hover:cursor-pointer hover:shadow-xl hover:shadow-gray-200 hover:scale-100 transform">
                ساخت درگاه پرداخت
            </button>
            <button class="mb-0 border-1 border-gray-400/50  p-3 w-40 mx-auto rounded-xl text-black mt-10 transition-all hover:transition-all hover:cursor-pointer hover:shadow-xl hover:shadow-gray-300 hover:border-1 hover:border-gray-400 hover:scale-100">
                مطالعه بیشتر =>
            </button>
        </div>
    </div>







    <div class="my-44 shadow-2xl shadow-gray-950 mx-auto p-10 h-[90vh] rounded-2xl bg-gradient-to-br from-black via-slate-950 to-yellow-900 w-8/9 flex flex-col-reverse md:flex-row-reverse justify-around items-center gap-10">

        <div class="md:w-1/2 flex justify-center items-center">
            <img src="/images/logo/Img_Devdocs.webp" class="w-full max-w-[800px] h-auto object-contain" alt="زرین‌پال">
        </div>

        <div class="text-center md:text-right md:w-1/2">
            <h1 class="text-white mb-1 text-2xl my-10 md:text-4xl font-bold">
                راهنمای کامل و جامع سرویس‌ها و API های زرین‌پال
            </h1>
            <p class="text-gray-400 leading-relaxed my-5">
                زرین‌پال با کمک افزونه‌ها و نمونه کدهای آماده درگاه پرداخت زرین‌پال، دردسرهای افزودن به سایت و نیاز به کدنویسی را به حداقل رسانده است.
            </p>
            <button
                class="bg-gray-400 p-3 w-40 mx-auto rounded-xl text-black mt-10 hover:bg-gray-200 hover:text-black transition-all hover:shadow-xl">
                مستندات
            </button>
        </div>
    </div>




    <div class="my-44 shadow-2xl shadow-gray-950 mx-auto h-[90vh] rounded-2xl bg-gradient-to-r from-slate-950 via-indigo-950 to-slate-950 w-8/9 flex flex-col justify-between text-center relative overflow-hidden"> <!-- متن -->
        <div class="pt-35 z-10"> <span class="block text-yellow-500 font-bold text-xl md:text-2xl xl:text-3xl mb-6">
                به خانواده یک میلیونی زرین‌پال بپیوندید </span> <span
                class="block text-yellow-200 text-sm md:text-xl xl:text-2xl"> یک ماه رایگان، هدیه‌ی عضویت زرین‌پال
                به
                شما </span> </div>
        <!-- عکس -->
        <div class="w-full flex justify-center items-end h-full absolute bottom-0 left-0"> <img
                src="/images/logo/Img_Collection.webp" class="w-full max-h-[40%] object-contain" alt=""> </div>
    </div>





    <div class="h-[80vh] mt-64 mb-24 shadow-2xl shadow-gray-200 mx-auto justify-center text-center my-10 rounded-2xl bg-gradient-to-b from-gray-100 to-white w-8/9 flex flex-col-reverse md:flex-row-reverse items-center gap-10 p-15">
        <div class="text-center md:w-1/2 mt-44">
            <h1 class="text-2xl my-5 md:text-4xl text-gray-900 mb-20 text-center">
                راهکاری هوشمند برای افزایش فروش و تجربه پرداخت مطمئن
            </h1>
            <p class="leading-relaxed text-gray-500 text-center">
                زرین‌پال با اتصال همزمان به درگاه‌های بانکی معتبر و پشتیبانی از مسیردهی هوشمند، تجربه‌ای سریع، امن و بدون دغدغه برای کاربران شما فراهم می‌کند. با بهره‌گیری از فناوری‌های نوین، درصد موفقیت تراکنش‌ها را افزایش دهید و رشد کسب‌وکارتان را به سطحی بالاتر ببرید.
            </p>
        </div>
    </div>




</body>
<footer class="bg-white mx-auto text-center text-gray-600 font-black flex justify-center">
    <span class="w-8/9 my-4">
        <div class="w/3/4 my-4 space-x-4">
            <a href="{{ route('home') }}" class="hover:cursor-pointer hover:text-gray-400 transition-all hover:transition-all">خانه</a>
            <a href="٫" class="hover:cursor-pointer hover:text-gray-400 transition-all hover:transition-all">درباره ما</a>
            <a href="٫" class="hover:cursor-pointer hover:text-gray-400 transition-all hover:transition-all">تماس با ما</a>
            <a href="٫" class="hover:cursor-pointer hover:text-gray-400 transition-all hover:transition-all">توسعه دهندگان</a>
        </div>
        <div class="my-4 bg-gray-200 w-2/3 mx-auto h-0.5"></div>
            تمامی حقوق محفوظ است
    </span>
</footer>
</html>