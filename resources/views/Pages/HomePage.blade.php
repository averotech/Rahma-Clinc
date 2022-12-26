@extends('layout.app')
@section('content')
    @php
        $HeaderNav = nova_get_setting('navbar', '');
        $NavBar = json_decode($HeaderNav);
        $Header_WhatsAppLink = nova_get_setting('logo', '');
        $Header_Logo = 'storage/' . nova_get_setting('logo', '');
        
        $Banner_TopTitle = nova_get_setting('title_Top-Banner', ' تألقي بثقة و جمال مع رحمة كلينك أفضل أجهزة إزالة الشعر بدون ألم و نتائج مضمونة .');
        $Banner_subTitle = nova_get_setting('subtitle_Top-Banner', 'لأننا نهتم بأن تكوني بأجمل طلة مع رحمة كلينك نوفر أفضل جهاز لازالة الشعر soprano titanium بدون ألم.');
        $Banner_Video_Url = nova_get_setting('video_Url_Top-Banner', 'http://media.w3.org/2010/05/sintel/trailer.mp4');
        $Banner_Video_Text = nova_get_setting('video_Top-Banner', 'احصل على استشارة مجانية');
        $Banner_second_subtitle_Top = nova_get_setting('second_subtitle_Top-Banner', 'تائج مضمونة بلمسات سحرية من المختصة رحمه محاميد عودة إضافة إلى العديد من الخدمات التجميلية بطاقم احترافي و أجهزة عالمية');
        // About Us
        $About_Us_title_About_Us = nova_get_setting('title_About-Us', 'رحمة كلينك هي عيادة فلسطينية بالناصرة');
        $About_Us_subtitle_About_Us = nova_get_setting('subtitle_About_Us', 'بنقدم خدمة إزالة الشعر بالليزر باستخدام أفضل جهاز عالمية هو Soprano Titanium لرجال والنساء بإدارة الممرضة رحمة عودة لتحصلي على ملمس حريري و لمعان من أول جلسة و نتائج مبهرة .');
        $About_Us_bottom_text_About_Us = nova_get_setting('bottom_text_About_Us', 'رؤية المزيد');
        $About_Us_bottom_link_About_Us = nova_get_setting('bottom_link_About_Us', '#');
        
        // Our Services
        $Our_Services_title = nova_get_setting('title_Our_Services', 'قولي وداعا لشفرات الحلاقة');
        $Our_Services_subtitle = nova_get_setting('subtitle_Our_Services', 'نقدم في رحمة كلينك خدمة إزالة الشعر بالليزر مع أفضل جهاز عالمي Soprano Titanium و خدمات تجميلية مثل العناية بالبشرة و علاج الحروق لرجال و النساء على أيدي مختصين محترفين بإدارة الممرضة المختصة رحمة محاميد عودة الناصرة');
        
        // dd($NavBar[0]->attributes);
        $str_slider = nova_get_setting('slider', 'default_value');
        $json_slider = json_decode($str_slider);
        // dd($json_slider[0]->value);
        
        $FirstImage = 'storage/' . nova_get_setting('First_Image_About_Us', '');
        $SecondImage = 'storage/' . nova_get_setting('Second_Image_About_Us', '');
        $ThirdImage_Logo = 'storage/' . nova_get_setting('third_Image_About_Us', '');
        // dd($FirstImage);
    @endphp
    <!-- Start content -->
    <section class="bg-[#f6f6f6] pt-10 pb-10 lg:pb-0">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <div>
                    <a href="/">
                        @if ($Header_Logo != 'storage/')
                            <img class="max-w-[130px]" src="{{ $Header_Logo }}" alt="logo">
                        @else
                            <img class="max-w-[130px]" src="{{ asset('assets/images/logo.png') }}" alt="logo">
                        @endif
                    </a>
                </div>
                <nav
                    class="nav-list bg-[#005340] md:bg-transparent z-20 fixed md:static top-0 right-[-200px] bottom-0 w-[200px] md:w-auto duration-500 px-4 md:px-0">
                    <span class="close-menu-icon w-6 h-7 block mr-auto mt-5 md:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            id="Capa_1" x="0px" y="0px" viewBox="0 0 47.971 47.971"
                            style="enable-background:new 0 0 47.971 47.971;" xml:space="preserve">
                            <g>
                                <path
                                    d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88   c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242   C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879   s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"
                                    fill="#fff"></path>
                            </g>
                        </svg>
                    </span>
                    <ul class="md:flex md:flex-wrap md:mt-0 mt-20 font-[600]">
                        @if ($NavBar !== null)
                            @foreach ($NavBar as $item)
                                <li class=" active md:mb-0 mb-4">
                                    <a href="#" data-scroll="{{ $item->attributes->select_name }}"
                                        class="px-2 stop-link md:text-[#727475] text-[14px] px-2 lg:px-5 text-white hover:text-[#000] md:border-l border-[#D9D9D9]">من
                                        {{ $item->attributes->name }}</a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </nav>
                <button class="md:hidden w-7 h-7 nav-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.2.0 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 mt-20">
                <div class="col-span-1 lg:pb-20">
                    <div class="border-b border-[#959797] pb-24">
                        <h1 class="lg:min-w-[450px] text-[30px] lg:text-[38px] xl:text-[42px] leading-tight capitalize">
                            {{-- تألقي بثقة و جمال مع رحمة كلينك أفضل أجهزة إزالة الشعر بدون ألم و نتائج مضمونة . --}}
                            {{ $Banner_TopTitle }}
                        </h1>
                        <p class="text-[#727475] text-[15px] poppins-font mt-5 font-[500]">
                            {{ $Banner_subTitle }}
                            {{-- لأننا نهتم بأن تكوني بأجمل طلة مع رحمة كلينك نوفر أفضل جهاز لازالة الشعر soprano titanium بدون
                            ألم. --}}
                        </p>
                        <div class="flex flex-row items-center justify-start gap-x-4">
                            <a class="mt-10 inline-block" href="{{ $Banner_Video_Url }}" data-fancybox>
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"
                                    fill="none">
                                    <g clip-path="url(#clip0_45_558)">
                                        <path
                                            d="M24 0C10.7656 0 0 10.7666 0 24C0 37.2334 10.7656 48 24 48C37.2344 48 48 37.2334 48 24C48 10.7666 37.2344 0 24 0ZM33.541 24.8408L19.5411 33.8408C19.377 33.9473 19.1875 34 19 34C18.836 34 18.6699 33.959 18.5215 33.878C18.1992 33.7022 18 33.3662 18 33V15C18 14.6338 18.1992 14.2978 18.5215 14.122C18.8379 13.9482 19.2344 13.9589 19.5411 14.1592L33.541 23.1592C33.8262 23.3427 34 23.6602 34 24C34 24.3398 33.8262 24.6572 33.541 24.8408Z"
                                            fill="#005340" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_45_558">
                                            <rect width="48" height="48" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <button class="button-style mt-11 sitka-font text-[18px] font-[600] relative px-[40px] contact-btn"
                                data-scroll="contact">
                                <span
                                    class="right-0 top-[-20px] flex items-center justify-center h-[64px] w-[64px] border border-[#CBD7E7] rounded-full absolute">
                                    <span class="bg-[#000] h-[9px] w-[9px] rounded-full"></span>
                                </span>
                                احصل على استشارة مجانية
                            </button>
                        </div>
                    </div>
                    <p class="text-[#727475] text-[15px] poppins-font pl-5 mt-10 relative font-[500]">
                        {{ $Banner_second_subtitle_Top }}
                    </p>
                </div>

                <div class="col-span-1 relative hidden lg:flex">
                    <div class="owl-carousel main-slider absolute bottom-0 h-[585px] overflow-hidden">
                        @if ($json_slider !== null)
                            @foreach ($json_slider as $slider)
                                @php
                                
                                    $imgSlider =  $slider->value;
                                @endphp
                                <div class="relative">
                                    <img class="max-w-full absolute bottom-0" src="{{ $imgSlider }}" alt="logo">
                                </div>
                            @endforeach
                        @else
                            <div class="relative">
                                <img class="max-w-full absolute bottom-0" src="{{ asset('assets/images/img-1.png') }}"
                                    alt="logo">
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-span-1 relative">
                    <form action="">
                        <div class="mb-5">
                            <label for="full-name" class="block text-sm font-medium text-gray-700 sitka-font">الاسم
                                الكامل</label>
                            <input type="text" name="first-name" id="full-name" autocomplete="given-name"
                                class="mt-1 px-2 py-2 block w-full bg-transparent rounded-md border border-[#D1D5DB] focus:outline-[#CBD7E7] focus:ring-[#CBD7E7] sm:text-sm">
                        </div>
                        <div class="mb-5">
                            <label for="phone" class="block text-sm font-medium text-gray-700 sitka-font">رقم الهاتف
                            </label>
                            <input type="text" name="phone" id="phone" autocomplete="given-name"
                                class="mt-1 px-2 py-2 block w-full bg-transparent rounded-md border border-[#D1D5DB] focus:outline-[#CBD7E7] focus:ring-[#CBD7E7] sm:text-sm">
                        </div>
                        <div>
                            <label for="ch-1" class="block text-sm font-medium text-gray-700 sitka-font">اختيار
                                المنطقة</label>
                            <input type="text" name="area" id="ch-1" autocomplete="given-name"
                                class="mt-1 px-2 py-2 block w-full bg-transparent rounded-md border border-[#D1D5DB] focus:outline-[#CBD7E7] focus:ring-[#CBD7E7] sm:text-sm">
                        </div>
                        <button class="button-style sitka-font text-[18px] font-[600] relative mt-8 px-[40px]"
                            type="submit">
                            <span
                                class="right-0 top-[-20px] flex items-center justify-center h-[64px] w-[64px] border border-[#CBD7E7] rounded-full absolute">
                                <span class="bg-[#000] h-[9px] w-[9px] rounded-full"></span>
                            </span>
                            تواصل معنا
                        </button>
                    </form>
                    <div class="flex absolute left-0 bottom-20 lg:flex hidden">
                        <button id="prev-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="17" viewBox="0 0 35 17"
                                fill="none">
                                <path
                                    d="M34.599 7.53223C34.5986 7.53182 34.5983 7.53134 34.5978 7.53093L27.4539 0.421558C26.9188 -0.11103 26.0531 -0.109048 25.5204 0.426206C24.9877 0.961392 24.9898 1.82703 25.525 2.35968L30.3214 7.13281H1.36719C0.61209 7.13281 0 7.7449 0 8.5C0 9.25509 0.61209 9.86718 1.36719 9.86718H30.3213L25.5251 14.6403C24.9899 15.173 24.9878 16.0386 25.5205 16.5738C26.0532 17.1091 26.9189 17.111 27.454 16.5784L34.5978 9.46906C34.5983 9.46865 34.5986 9.46817 34.5991 9.46776C35.1345 8.93333 35.1328 8.06489 34.599 7.53223Z"
                                    fill="#005340" />
                            </svg>
                        </button>
                        <button id="next-btn" class="mr-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="17" viewBox="0 0 35 17"
                                fill="none">
                                <path
                                    d="M0.400993 7.53223C0.401402 7.53182 0.401745 7.53134 0.402222 7.53093L7.54605 0.421558C8.08124 -0.11103 8.94687 -0.109048 9.4796 0.426206C10.0123 0.961392 10.0102 1.82703 9.47502 2.35968L4.67865 7.13281H33.6328C34.3879 7.13281 35 7.7449 35 8.5C35 9.25509 34.3879 9.86718 33.6328 9.86718H4.67872L9.47495 14.6403C10.0101 15.173 10.0122 16.0386 9.47953 16.5738C8.9468 17.1091 8.0811 17.111 7.54598 16.5784L0.402153 9.46906C0.401745 9.46865 0.401402 9.46817 0.400925 9.46776C-0.134537 8.93333 -0.132828 8.06489 0.400993 7.53223Z"
                                    fill="#005340" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start about us section -->
    <section class="py-10 about-section" id="about-us">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center sitka-font">
                <p class="md:text-[18px] text-[#005340]">من نحن</p>
                <h2 class="capitalize text-[20px] sm:text-[25px] md:text-[30px] lg:text-[35px] mx-auto my-4 max-w-[90%] ">
                    {{ $About_Us_title_About_Us }}
                    {{-- رحمة كلينك هي عيادة فلسطينية بالناصرة --}}
                </h2>
                <p class="md:text-[18px] text-[#727475] md:max-w-[90%] mx-auto">
                    {{ $About_Us_subtitle_About_Us }}
                    {{-- بنقدم خدمة إزالة الشعر بالليزر باستخدام
                    أفضل جهاز عالمية هو Soprano Titanium لرجال والنساء بإدارة الممرضة رحمة عودة لتحصلي على ملمس حريري و
                    لمعان من أول جلسة و نتائج مبهرة . --}}
                </p>
            </div>
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 mt-20">
                <div class="col-span-1 text-center " data-aos="fade-up" data-aos-duration="1000">
                    @if ($FirstImage == 'storage/')
                        <img class="w-full max-h-[410px] object-cover " src="{{ asset('assets/images/service-1.png') }}"
                            alt="service">
                    @else
                        <img class="w-full max-h-[410px] object-cover " src="{{ $FirstImage }}" alt="service" />
                    @endif
                </div>
                <div class="col-span-1 text-center relative">
                    <button
                        class="button-style mx-auto hidden lg:flex sitka-font text-[18px] font-[600] relative px-[40px]"
                        type="submit">
                        <span
                            class="right-0 top-[-20px] flex items-center justify-center h-[64px] w-[64px] border border-[#CBD7E7] rounded-full absolute">
                            <span class="bg-[#000] h-[9px] w-[9px] rounded-full"></span>
                        </span>
                        {{ $About_Us_bottom_text_About_Us }}
                    </button>
                    <img data-aos="fade-down" data-aos-duration="1000"
                        class="w-full max-h-[410px] object-cover lg:absolute top-[100px]"
                        src="{{ asset('assets/images/service-2.png') }}" alt="service">
                </div>
                <div class="col-span-1 text-center " data-aos="fade-up" data-aos-duration="1000">
                    <img class="w-full max-h-[410px] object-cover " src="{{ asset('assets/images/service-3.png') }}"
                        alt="service">
                </div>
                <div class="col-span-1 flex items-center justify-center lg:hidden mt-10 sm:mt-0 ">
                    <button class="button-style sitka-font text-[18px] font-[600] relative px-[40px]" type="submit">
                        <span
                            class="right-0 top-[-20px] flex items-center justify-center h-[64px] w-[64px] border border-[#CBD7E7] rounded-full absolute">
                            <span class="bg-[#000] h-[9px] w-[9px] rounded-full"></span>
                        </span>
                        {{ $About_Us_bottom_text_About_Us }}
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- End about us section -->

    <!-- Start services section -->
    <section class="mt-32" id="services">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center sitka-font">
                <p class="md:text-[18px] text-[#005340]">خدماتنا</p>
                <h2 class="capitalize text-[20px] sm:text-[25px] md:text-[30px] lg:text-[35px] mx-auto my-4 max-w-[90%] ">
                    {{ $Our_Services_title }}
                    {{-- قولي وداعا لشفرات الحلاقة --}}
                </h2>
                <p class="md:text-[18px] text-[#727475] md:max-w-[90%] mx-auto">
                    {{ $Our_Services_subtitle }}
                    {{-- نقدم في رحمة كلينك خدمة إزالة الشعر بالليزر مع أفضل جهاز عالمي Soprano Titanium
                    و خدمات تجميلية مثل العناية بالبشرة و علاج الحروق لرجال و النساء
                    على أيدي مختصين محترفين بإدارة الممرضة المختصة رحمة محاميد عودة
                    الناصرة --}}
                </p>
            </div>
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 mt-16">
                <div class="col-span-1">
                    <div class="border border-[#CBD7E7] text-center px-4 py-10 h-full" data-aos="zoom-in"
                        data-aos-duration="1000">
                        <div class="rounded-full mx-auto bg-[#F1F1F1] flex items-center justify-center h-[77px] w-[77px] ">
                            <img src="{{ asset('assets/images/service-icons/epilator.svg') }}" alt="service icon">
                        </div>
                        <h3 class="sitka-font text-[22px] mb-4 mt-6 capitalize">إزالة الشعر بالليزر لسيدات</h3>
                        <p class="text-[15px] poppins-font text-[#727475] capitalize">مع الممرضة المختصة رحمة عودة<br>
                            إزالة الشعر بدون ألم و أفضل نتائج<br>
                            مع تقديم نصائح واستشارات</p>
                        <button class="mt-20 sitka-font text-[22px] text-[#005340] contact-btn"
                            data-scroll="contact">تواصل معنا</button>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="border border-[#CBD7E7] text-center px-4 py-10 h-full" data-aos="zoom-in"
                        data-aos-duration="1000">
                        <div class="rounded-full mx-auto bg-[#F1F1F1] flex items-center justify-center h-[77px] w-[77px] ">
                            <img src="{{ asset('assets/images/service-icons/epilator.svg') }}" alt="service icon">
                        </div>
                        <h3 class="sitka-font text-[22px] mb-4 mt-6 capitalize">إزالة الشعر بالليزر للرجال</h3>
                        <p class="text-[15px] poppins-font text-[#727475] capitalize">
                            مختصي لازالة الشعر للشباب <br>
                            نتائج تظهر من ثالث جلسه .
                        </p>
                        <button class="mt-20 sitka-font text-[22px] text-[#005340] contact-btn"
                            data-scroll="contact">تواصل معنا</button>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="border border-[#CBD7E7] text-center px-4 py-10 h-full" data-aos="zoom-in"
                        data-aos-duration="1000">
                        <div class="rounded-full mx-auto bg-[#F1F1F1] flex items-center justify-center h-[77px] w-[77px] ">
                            <img src="{{ asset('assets/images/service-icons/makeup.svg') }}" alt="service icon">
                        </div>
                        <h3 class="sitka-font text-[22px] mb-4 mt-6 capitalize">خدمات تجميلية
                        </h3>
                        <p class="text-[15px] poppins-font text-[#727475] capitalize">تعاون مع افضل اطباء التجميل لتقديم
                            خدمات تجميلية احترافية</p>
                        <button class="mt-20 sitka-font text-[22px] text-[#005340] contact-btn"
                            data-scroll="contact">تواصل معنا</button>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="border border-[#CBD7E7] text-center px-4 py-10 h-full" data-aos="zoom-in"
                        data-aos-duration="1000">
                        <div class="rounded-full mx-auto bg-[#F1F1F1] flex items-center justify-center h-[77px] w-[77px] ">
                            <img src="{{ asset('assets/images/service-icons/makeup.svg') }}" alt="service icon">
                        </div>
                        <h3 class="sitka-font text-[22px] mb-4 mt-6 capitalize">عناية بالبشرة</h3>
                        <p class="text-[15px] poppins-font text-[#727475] capitalize">كان لوريم إيبسوم ولايزال المعيار للنص
                            الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة</p>
                        <button class="mt-20 sitka-font text-[22px] text-[#005340] contact-btn"
                            data-scroll="contact">تواصل معنا</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End services section -->

    <!-- Start offers section -->
    <section class="bg-[#F6F6F6] mb-20 mt-20 py-10 lg:py-0 " id="features">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="owl-carousel offers-slider">
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                    <div class="col-span-2 relative">
                        <div class="absolute w-full h-full inset-0 play-vid-overlay flex items-center justify-center">
                            <a class="mt-10 inline-block" href="http://media.w3.org/2010/05/sintel/trailer.mp4"
                                data-fancybox="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                    viewBox="0 0 48 48" fill="none">
                                    <g clip-path="url(#clip0_45_558)">
                                        <path
                                            d="M24 0C10.7656 0 0 10.7666 0 24C0 37.2334 10.7656 48 24 48C37.2344 48 48 37.2334 48 24C48 10.7666 37.2344 0 24 0ZM33.541 24.8408L19.5411 33.8408C19.377 33.9473 19.1875 34 19 34C18.836 34 18.6699 33.959 18.5215 33.878C18.1992 33.7022 18 33.3662 18 33V15C18 14.6338 18.1992 14.2978 18.5215 14.122C18.8379 13.9482 19.2344 13.9589 19.5411 14.1592L33.541 23.1592C33.8262 23.3427 34 23.6602 34 24C34 24.3398 33.8262 24.6572 33.541 24.8408Z"
                                            fill="#fff"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_45_558">
                                            <rect width="48" height="48" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <img class="max-w-full min-h-auto md:min-h-[500px] lg:min-h-[600px] object-cover"
                            src="{{ asset('assets/images/offer-img.png') }}" alt="">
                    </div>
                    <div class="col-span-3 flex items-center pb-20">
                        <div>
                            <div class=" sitka-font ">
                                <p class="text-[18px]">عرض </p>
                                <h2 class="capitalize text-[27px] md:text-[30px] lg:text-[35px] max-w-[550px] ">توهج وجهك
                                    وحيويتك مع أفضل خدمة لدينا</h2>
                            </div>
                            <div class="border-b border-[#727475] my-5"></div>
                            <span class="text-[#005340] text-[50px] block">555 ₪</span>
                            <p class="text-[#727475] text-[15px] poppins-font mt-4 font-[500]">
                                جهاز Soprano Titanium ، من ألما ليزر
                                أفضل جهاز في السوق بدون منافس
                                سريع و آمن بدون حروق بارد على البشرة
                                ملائم للأطفال من 7 سنين
                                نتائج مذهلة من اول جلسة
                            </p>
                        </div>

                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                    <div class="col-span-2">
                        <img class="max-w-full min-h-auto md:min-h-[500px] lg:min-h-[600px] object-cover"
                            src="{{ asset('assets/images/offer-img.png') }}" alt="">
                    </div>
                    <div class="col-span-3 flex items-center">
                        <div>
                            <div class=" sitka-font ">
                                <p class="text-[18px]">عرض</p>
                                <h2 class="capitalize text-[27px] md:text-[30px] lg:text-[35px] max-w-[550px] ">توهج وجهك
                                    وحيويتك مع أفضل خدمة لدينا</h2>
                            </div>
                            <div class="border-b border-[#727475] my-5"></div>
                            <span class="text-[#005340] text-[64px] block">555 ₪</span>
                            <p class="text-[#727475] text-[15px] poppins-font mt-5 font-[500]">
                                لدينا طاقم متخصص بأعلى معايير الجودة والاحترافية
                                حاصلين على شهادة معتمدة من الما العالمية
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                <div class="col-span-2"></div>
                <div class="col-span-3">
                    <div class="flex items-center justify-between lg:-mt-20 z-20 relative mt-20">
                        <button class="button-style sitka-font text-[18px] font-[600] relative px-[40px] contact-btn"
                            data-scroll="contact">
                            <span
                                class="right-0 top-[-20px] flex items-center justify-center h-[64px] w-[64px] border border-[#CBD7E7] rounded-full absolute">
                                <span class="bg-[#000] h-[9px] w-[9px] rounded-full"></span>
                            </span>
                            تواصل معنا
                        </button>
                        <div class="flex ">
                            <button id="prev-btn-offer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="17"
                                    viewBox="0 0 35 17" fill="none">
                                    <path
                                        d="M34.599 7.53223C34.5986 7.53182 34.5983 7.53134 34.5978 7.53093L27.4539 0.421558C26.9188 -0.11103 26.0531 -0.109048 25.5204 0.426206C24.9877 0.961392 24.9898 1.82703 25.525 2.35968L30.3214 7.13281H1.36719C0.61209 7.13281 0 7.7449 0 8.5C0 9.25509 0.61209 9.86718 1.36719 9.86718H30.3213L25.5251 14.6403C24.9899 15.173 24.9878 16.0386 25.5205 16.5738C26.0532 17.1091 26.9189 17.111 27.454 16.5784L34.5978 9.46906C34.5983 9.46865 34.5986 9.46817 34.5991 9.46776C35.1345 8.93333 35.1328 8.06489 34.599 7.53223Z"
                                        fill="#005340"></path>
                                </svg>
                            </button>
                            <button id="next-btn-offer" class="mr-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="17"
                                    viewBox="0 0 35 17" fill="none">
                                    <path
                                        d="M0.400993 7.53223C0.401402 7.53182 0.401745 7.53134 0.402222 7.53093L7.54605 0.421558C8.08124 -0.11103 8.94687 -0.109048 9.4796 0.426206C10.0123 0.961392 10.0102 1.82703 9.47502 2.35968L4.67865 7.13281H33.6328C34.3879 7.13281 35 7.7449 35 8.5C35 9.25509 34.3879 9.86718 33.6328 9.86718H4.67872L9.47495 14.6403C10.0101 15.173 10.0122 16.0386 9.47953 16.5738C8.9468 17.1091 8.0811 17.111 7.54598 16.5784L0.402153 9.46906C0.401745 9.46865 0.401402 9.46817 0.400925 9.46776C-0.134537 8.93333 -0.132828 8.06489 0.400993 7.53223Z"
                                        fill="#005340"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End offers section -->
    <!-- Start Contact us section -->
    <section class="mb-20" id="contact">
        <div class="max-w-[480px] mx-auto">
            <div class="text-center sitka-font">
                <p class="md:text-[18px] text-[#005340]">تواصل معنا</p>
                <h2
                    class="capitalize text-[20px] sm:text-[25px] md:text-[30px] lg:text-[35px] xl:text-[40px] mx-auto my-4 max-w-[90%] ">
                    سارع بالتواصل معنا
                </h2>
            </div>
            <form action="">
                <div class="mb-5">
                    <label for="full-name" class="block text-sm font-medium text-gray-700 sitka-font">الاسم الكامل</label>
                    <input type="text" name="first-name" id="full-name" autocomplete="given-name"
                        class="mt-1 px-2 py-2 block w-full bg-transparent rounded-md border border-[#D1D5DB] focus:outline-[#CBD7E7] focus:ring-[#CBD7E7] sm:text-sm">
                </div>
                <div class="mb-5">
                    <label for="phone" class="block text-sm font-medium text-gray-700 sitka-font">رقم الهاتف </label>
                    <input type="text" name="phone" id="phone" autocomplete="given-name"
                        class="mt-1 px-2 py-2 block w-full bg-transparent rounded-md border border-[#D1D5DB] focus:outline-[#CBD7E7] focus:ring-[#CBD7E7] sm:text-sm">
                </div>
                <div>
                    <label for="ch-1" class="block text-sm font-medium text-gray-700 sitka-font">اختيار
                        المنطقة</label>
                    <input type="text" name="area" id="ch-1" autocomplete="given-name"
                        class="mt-1 px-2 py-2 block w-full bg-transparent rounded-md border border-[#D1D5DB] focus:outline-[#CBD7E7] focus:ring-[#CBD7E7] sm:text-sm">
                </div>
                <button class="button-style sitka-font text-[18px] font-[600] relative mt-8 px-[40px]" type="submit">
                    <span
                        class="right-0 top-[-20px] flex items-center justify-center h-[64px] w-[64px] border border-[#CBD7E7] rounded-full absolute">
                        <span class="bg-[#000] h-[9px] w-[9px] rounded-full"></span>
                    </span>
                    تواصل معنا
                </button>
            </form>
        </div>
    </section>
    <!-- End Contact us section -->
    <!-- Start testimonial section-->
    <section>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class=" sitka-font ">
                <p class="text-[18px]">توصيات العملاء</p>
                <h2 class="capitalize text-[27px] md:text-[30px] lg:text-[35px] max-w-[550px] ">ماذا يقول عملائنا عنا </h2>
            </div>
            <div class="grid grid-cols-1 gap-20 sm:grid-cols-2 md:grid-cols-2">
                <div class="mt-24 " data-aos="fade-down" data-aos-duration="2000" data-aos-delay="300">
                    <div class="relative mb-16">
                        <img class="w-full max-h-[434px]" src="{{ asset('assets/images/testimonial/t-1.png') }}"
                            alt="image">
                        <span
                            class="w-[116px] h-[116px] flex justify-center items-center rounded-full bg-[#005340] absolute left-[20px] bottom-[-58px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44"
                                fill="none">
                                <g clip-path="url(#clip0_45_526)">
                                    <path
                                        d="M0.408829 25.2648H9.71323L3.51025 37.6706H12.8147L19.0176 25.2648V6.65601H0.408829V25.2648Z"
                                        fill="white" />
                                    <path
                                        d="M25.2206 6.65601V25.2648H34.525L28.322 37.6706H37.6264L43.8294 25.2648V6.65601H25.2206Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_45_526">
                                        <rect width="43.4206" height="43.4206" fill="white"
                                            transform="translate(0.408829 0.453003)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                    </div>
                    <h3 class="sitka-font text-[22px] mb-2">نسرين </h3>
                    <p class="poppins-font text-[#727475] text-[15px]">
                        أول مرة بعمل ليزر جسم
                        من أول لقاء الملمس بجنن و لا احمرار ولا و جع و لا حكة
                        قسما بالله شغل من قلب و تعبك و مافي زي السعر
                        الله يباركلك و يرزقك .
                    </p>
                </div>
                <div data-aos="fade-down" data-aos-duration="2000" data-aos-delay="300">
                    <div class="relative mb-16">
                        <img class="w-full max-h-[434px]" src="{{ asset('assets/images/testimonial/t-1.png') }}"
                            alt="image">
                        <span
                            class="w-[116px] h-[116px] flex justify-center items-center rounded-full bg-[#005340] absolute left-[20px] bottom-[-58px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44"
                                fill="none">
                                <g clip-path="url(#clip0_45_526)">
                                    <path
                                        d="M0.408829 25.2648H9.71323L3.51025 37.6706H12.8147L19.0176 25.2648V6.65601H0.408829V25.2648Z"
                                        fill="white" />
                                    <path
                                        d="M25.2206 6.65601V25.2648H34.525L28.322 37.6706H37.6264L43.8294 25.2648V6.65601H25.2206Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_45_526">
                                        <rect width="43.4206" height="43.4206" fill="white"
                                            transform="translate(0.408829 0.453003)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                    </div>
                    <h3 class="sitka-font text-[22px] mb-2">اسم الزبون</h3>
                    <p class="poppins-font text-[#727475] text-[15px]">
                        بعدني بأول لقاء و جسمي اتغير كثير عن قبل معاملة و أسعار خيالية و الجهاز و لا غلطة و لا في زيه.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End testimonial section-->


    <!-- End content -->
@endsection()
