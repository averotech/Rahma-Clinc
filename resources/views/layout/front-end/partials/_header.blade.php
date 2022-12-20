@php
    $Header_phone = nova_get_setting('phone_Top-Header', 'الرجاء ادخال رقم الهاتف');
    $Header_Email = nova_get_setting('email_Top-Header', 'الرجاء ادخال الايميل');
    $Header_workHour = nova_get_setting('workHour_Top-Header', 'الرجاء ادخال الايميل');
    $Header_WhatsAppLink = nova_get_setting('whatsapp_Top-Header', '');
    $Header_facebookLink = nova_get_setting('facebook_Top-Header', '');
    // dd($Header_phone)

    // $HeaderNav = nova_get_setting('navbar', '');
    // $NavBar =json_decode($HeaderNav) 
@endphp

<header class="bg-[#f7f7f7] py-4 border-b border-[#f1f1f1]">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between">
            <div class="flex w-[209px] items-center ">
                <p class=" text-[12px] text-[#727475] poppins-font font-[600]">تابعنا على: </p>
                <ul class="flex mr-2">
                    <li class="ml-2">
                        <a href="#" target="_blank"
                            class="rounded-full w-[24px] h-[24px] border border-[#959797] flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M13.3183 2.67206C11.9149 1.26709 10.0486 0.493011 8.06039 0.492188C3.96341 0.492188 0.629059 3.82645 0.627411 7.92453C0.626862 9.23456 0.969086 10.5134 1.61957 11.6406L0.565063 15.4922L4.5054 14.4586C5.59113 15.0508 6.81345 15.3629 8.05737 15.3633H8.06049C12.157 15.3633 15.4917 12.0287 15.4933 7.93048C15.4941 5.94434 14.7217 4.07693 13.3183 2.67206ZM8.06039 14.108H8.05783C6.94931 14.1075 5.86212 13.8096 4.91345 13.2469L4.68796 13.1129L2.3497 13.7263L2.97382 11.4466L2.82687 11.2128C2.20844 10.2292 1.88187 9.09229 1.88242 7.92499C1.8837 4.51877 4.65518 1.74756 8.06287 1.74756C9.71301 1.74811 11.2642 2.39154 12.4306 3.5593C13.597 4.72705 14.2389 6.27924 14.2384 7.93002C14.2369 11.3365 11.4656 14.108 8.06039 14.108ZM11.4491 9.48102C11.2635 9.388 10.3503 8.93884 10.18 8.87677C10.0099 8.81479 9.88596 8.78394 9.76227 8.96979C9.6384 9.15564 9.28253 9.57404 9.17413 9.69791C9.06573 9.82187 8.95752 9.83743 8.77176 9.74442C8.586 9.65149 7.98761 9.45529 7.27817 8.82257C6.7261 8.33011 6.35339 7.72192 6.245 7.53607C6.13678 7.35004 6.24408 7.25922 6.32648 7.15704C6.52753 6.90738 6.72885 6.64563 6.79074 6.52176C6.85272 6.3978 6.82169 6.28931 6.77518 6.19638C6.72885 6.10345 6.35742 5.1893 6.2027 4.81732C6.05182 4.45532 5.89883 4.50421 5.78476 4.49854C5.67654 4.49313 5.55267 4.49203 5.4288 4.49203C5.30502 4.49203 5.10379 4.53845 4.9335 4.72449C4.76331 4.91043 4.28357 5.35968 4.28357 6.27383C4.28357 7.18799 4.94907 8.07111 5.0419 8.19507C5.13474 8.31903 6.35156 10.1949 8.21457 10.9993C8.65768 11.1909 9.00357 11.305 9.27338 11.3906C9.71832 11.532 10.1231 11.512 10.4431 11.4642C10.8 11.4109 11.5419 11.0149 11.6968 10.5811C11.8515 10.1472 11.8515 9.77545 11.805 9.69791C11.7587 9.62045 11.6348 9.57404 11.4491 9.48102Z"
                                    fill="#959797"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="" target="_blank"
                            class="rounded-full w-[24px] h-[24px] border border-[#959797] flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                                fill="none">
                                <g clip-path="url(#clip0_2_330)">
                                    <path
                                        d="M7.9751 13.7578V7.52231H10.0672L10.3811 5.09152H7.9751V3.53981C7.9751 2.83626 8.16967 2.3568 9.1797 2.3568L10.4658 2.35627V0.182084C10.2434 0.15318 9.47992 0.0869141 8.59132 0.0869141C6.73578 0.0869141 5.46544 1.21952 5.46544 3.29907V5.09152H3.36694V7.52231H5.46544V13.7578H7.9751Z"
                                        fill="#959797"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_2_330">
                                        <rect width="13.6709" height="13.6709" fill="white"
                                            transform="translate(0.0809326 0.0869141)"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mr-10 ">
                <ul class="flex flex-wrap justify-between text-[12px] poppins-font font-[600] text-[#727475]">
                    <li class="sm:ml-4">
                        <p>هاتف : <a href="#">{{ $Header_phone }}</a></p>
                    </li>
                    <li class="ml-4 hidden sm:block">
                        <p>ايميل : <a href="#">{{ $Header_Email }}</a></p>
                    </li>
                    <li class="hidden sm:block">
                        <p>اوقات العمل: <span>11 bis 17 Uhr</span></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
