@php
    $HeaderNav = nova_get_setting('navbar', '');
    $NavBar = json_decode($HeaderNav);
    $Header_Logo = 'storage/' . nova_get_setting('logo', '');
@endphp




<footer class="text-center mt-48 pb-5">
    <div class="mx-auto">

        @if ($Header_Logo != 'storage/')
            <img class="max-w-[130px] mx-auto" src="{{ $Header_Logo }}" alt="logo">
        @else
            <img class="max-w-[130px] mx-auto" src="{{ asset('assets/images/logo.png') }}" alt="logo">
        @endif

        {{-- <img class="max-w-[130px] mx-auto" src="{{ asset('assets/images/logo.png') }}" alt="logo"> --}}
        <nav class="nav-list mx-auto duration-500 mt-5">
            <ul class="flex flex-wrap justify-center md:mt-0 mt-20 font-[600]">
                @if ($NavBar !== null)
                    @foreach ($NavBar as $item)
                        <li class=" active md:mb-0 mb-4">
                            <a href="#" data-scroll="about-us"
                                class="px-2 stop-link text-[#727475] text-[14px] px-2 lg:px-5 pr-0 lg:pr-0 hover:text-[#000] ">
                                {{ $item->attributes->name }}
                            </a>
                        </li>
                    @endforeach
                @endif
                {{-- <li class=" md:mb-0 mb-4">
                    <a href="#" data-scroll="features"
                        class="px-2 text-[#727475] text-[14px] px-2 lg:px-5 hover:text-[#000] border-l border-[#D9D9D9]">المميزات</a>
                </li>
                <li class=" md:mb-0 mb-4">
                    <a href="#" data-scroll="services"
                        class="px-2 text-[#727475] text-[14px] px-2 lg:px-5 hover:text-[#000] border-l border-[#D9D9D9]">الخدمات</a>
                </li>
                <li class=" md:mb-0 mb-4 ">
                    <a href="#" data-scroll="contact"
                        class="text-[#727475] text-[14px] px-2 lg:px-5 pl-0 lg:pl-0 hover:text-[#000] ">اتصل بنا</a>
                </li> --}}
            </ul>
        </nav>
    </div>
</footer>
