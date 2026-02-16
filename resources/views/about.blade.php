@extends('layouts.main')

@section('content')
<?php 
$pageTitle = $about->title;
$breadcrumbTitle = $about->title;
$breadcrumbImage = $about->image;
?>
    <main class="main-field header-space">
    <section class="content page-tabs relative">
        <div class="container max-w-[1440px] ">
            <div class="f-nav nav-content title-content py-[12.5px] md:py-[6px] w-full fixed left-0 top-[160px] z-[9] duration-450 bg-gradient-to-r from-[#005AA5] to-[#C7234B] ">
                <div class="wrapper flex justify-between max-w-[1440px] m-auto px-[30px]">
                    <!-- NAVIGATION -->
                    <ul class="navigation flex-wrap w-full gap-[10px] flex items-center md:hidden">
                        <li class="flex items-center">
                            <a href="index.php" class="flex group">
                                <span class="text text-white text-[20px] md:text-[18px] xs:text-[16px] font-medium group-hover:text-white/80 duration-450 leading-tight">Home</span>
                            </a>
                        </li>
                        <li class="split relative flex items-center h-[12px]">
                            <span class="text text-white text-[20px] md:text-[18px] xs:text-[16px] font-medium group-hover:text-white/80 duration-450 leading-tight">/</span>
                        </li>
                        <li class="flex items-center">
                            <a href="javascript:;" class="flex group">
                                <span class="text text-white text-[20px] md:text-[18px] xs:text-[16px] font-medium group-hover:text-white/80 duration-450 leading-tight">We Padel</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tabs tabs-horizontal tabs-horizontal-4 nav w-full" role="nav">
                        <div class=" w-full md:max-w-full overflow-auto scrollbar scrollbar-w-[8px] scrollbar-h-[5px] scrollbar-track-rounded-[5px] scrollbar-thumb-rounded-[5px] scrollbar-thumb-[#0055A3]/50 scrollbar-track-primary-200 md:py-[7px]" id="menu-center">
                            <ul class="flex items-center gap-[30px] w-max ml-auto">
                                <li><a data-target="#general" class="scrollable cursor-pointer text-white/60 [&.active]:text-white hover:text-white duration-450 active">About Us</a></li>
                                <li><a data-target="#world" class="scrollable cursor-pointer text-white/60 [&.active]:text-white hover:text-white duration-450 ">All Over The World</a></li>
                                <li><a data-target="#mission" class="scrollable cursor-pointer text-white/60 [&.active]:text-white hover:text-white duration-450 ">Mission / Vision</a></li>
                                <li><a data-target="#companies" class="scrollable cursor-pointer text-white/60 [&.active]:text-white hover:text-white duration-450  sm:hidden">Group Companies</a></li>
                                <li>
                                    <a href="../assets/image/other/sample.pdf" target="_blank" class="button group min-w-[150px] justify-center items-center w-fit h-[45px] flex px-[30px] bg-[#D9D9D9]/20 relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-transparent before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-white hover:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center rtl:gap-2">
                                        <div class="icon text-[12px] flex items-center relative z-2 duration-450 ">
                                            <div class="icon-download text-[18px] flex items-center text-white relative z-2 duration-450 group-hover:text-[#0055A3] group-hover:-translate-x-1"></div>
                                        </div>
                                        <div class="text-[18px]  xs:text-[16px] font-normal font-inter flex items-center text-white group-hover:text-[#0055A3] relative z-2 duration-450 w-max">Catalog</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper ">
            <section class="text-content py-[100px] pt-[200px] lg:pb-[50px] md:pt-[120px] xs:pb-[30px]  relative" id="general">
                <div class="container max-w-[1440px]">
                    <div class="wrapper grid grid-cols-[minmax(0,5fr)_minmax(0,6fr)] lg:grid-cols-1 gap-[50px] scrollreveal">
                        <div class="img h-[630px] xl:h-[500px] lg:h-[450px] md:h-[400px] xs:h-[350px] w-full overflow-hidden rounded-[30px] image-zoom">
                            <img class="h-full w-full object-cover object-center duration-500" src="{{ env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'images_folder'], app()->getLocale()).'/'.$about->image }}" alt="">
                        </div>
                        <div class="text-field m-auto lg:m-0 relative">
                            <div class="icon icon-arrow-down text-[35px] h-[35px] sm:text-[16px] sm:h-[16px] sm:-top-[30px] block leading-none duration-350 text-[#C7234B] absolute -top-[50px] -left-[30px] sm:left-0"></div>
                            <div class="editor editor-lg md:editor-sm editor-headings:font-bold editor-headings:leading-[1.1] editor-headings:text-[#005AA5] xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] xl:editor-h1:text-[40px] editor-headings:text-[42px] xl:editor-headings:text-[40px] lg:editor-headings:text-[34px] md:editor-headings:text-[30px] sm:editor-headings:text-[26px] xs:editor-headings:text-[24px] editor-p:leading-tight editor-p:text-[#231F20]/60 editor-p:text-[26px] sm:editor-p:text-[22px] xs:editor-p:text-[20px]  editor-li:text-[#231F20]/40 editor-li:font-medium editor-li:text-[20px]  editor-ul:pl-[25px] editor-ul:px-[25px] [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] m-auto lg:max-w-full w-full" dir="">
                                <h1>{{$about->title}}</h1>
                                <p>{!!$about->description!!}</p>
                            </div>

                        </div>
                    </div>
                </div>
                <section class="ref-swip relative scrollreveal mt-[50px]" id="certifications">
                    <div class="container max-w-[1440px]">
                        <div class="swiper ref-slider">
                            <div class="swiper-wrapper">
                                <?php for ($i = 1; $i < 6; $i++) : ?>
                                    <div class="swiper-slide">
                                        <a href="" class="block group/links">
                                            <div class="feature bg-[#FFFFFF]/25 rounded-[20px] p-5 duration-300 hover:bg-[#FFFFFF]/50 hover:-translate-y-1 hover:shadow-md relative z-[12]">
                                                <div class="flex flex-col gap-5 justify-center items-center h-full">
                                                    <div class="image-field">
                                                        <div class="img h-[50px] w-full overflow-hidden ">
                                                            <img class="h-full w-full object-contain group-hover/blog-item:scale-110 duration-500 group-hover/links:opacity-100 opacity-60" src="../assets/image/other/ref-<?= $i ?>.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>

                </section>
            </section>
            <section class="info">
                <section class="content relative">
                    <div class="bg w-[500px] h-[500px] rounded-full absolute right-0 bottom-[-15%]  pointer-events-none opacity-50">
                        <img loading="lazy" src="../assets/image/other/Ellipsedty-2.png" alt="" class="h-full object-center object-contain w-full">
                    </div>
                    <div class="container max-w-[1440px] ">
                        <div class="sports-content relative -mt-[50px] lg:mt-0 sm:mt-0">
                            <div class="gradient duration-450 bg-gradient-to-r from-[#0055A3] from-25% to-[#005AA5]/60 absolute top-0 left-0 w-[90%] lg:w-full h-full z-[0] rounded-[30px]"></div>
                            <div class="wrapper grid grid-cols-2 lg:grid-cols-1 gap-[100px] lg:gap-[50px] relative z-[1] pt-[70px] pb-[70px] sm:py-[50px] xs:py-[30px] pl-[75px] lg:px-[50px] sm:px-[25px] scrollreveal">
                                <div class="text-field m-auto lg:m-0  relative" dir="">
                                    <div class="icon icon-arrow-down text-[35px] h-[35px] sm:text-[16px] sm:h-[16px] block leading-none duration-350  text-transparent bg-clip-text bg-gradient-to-b from-white to-white/0 opacity-20 absolute -top-[40px] -left-[30px] sm:left-0"></div>
                                    <div class="editor editor-base md:editor-sm editor-headings:font-bold editor-headings:text-[#ffffff] editor-headings:leading-tight xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] xl:editor-h1:text-[40px] editor-h1:text-[44px] editor-p:leading-tight editor-p:text-[#B6D3E4] editor-p:text-[24px] sm:editor-p:text-[22px] xs:editor-p:text-[20px] editor-li:text-[#231F20]/40 editor-li:font-medium editor-li:text-[20px]  editor-ul:pl-[25px] editor-ul:px-[25px]
                                    [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] m-auto lg:max-w-full w-full">
                                        <h1>Wepadel is one of the newest brands of Integral Group.</h1>
                                    </div>
                                    <div class="wrapper grid grid-cols-3 sm:grid-cols-2 sm:justify-center sm:[&_.sport-box:nth-child(3)]:col-span-2 my-[50px] gap-[40px] lg:gap-[20px]">
                                        <div class="sport-box group/box bg-[#F6F6F6]/5 rounded-[30px] p-[30px] px-[25px] xs:py-[20px] xs:px-[15px] lg:p-[20px] relative overflow-hidden border border-solid border-transparent hover:border-white/50 duration-450">
                                            <div class="gradient duration-450 bg-gradient-to-br from-white from-15% to-white/50 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-hover/box:opacity-20"></div>
                                            <div class="img h-[60px] xs:h-[40px] w-full overflow-hidden mb-[15px]">
                                                <img class="h-full w-full object-contain object-center duration-500" src="../assets/image/other/tennis.png" alt="">
                                            </div>
                                            <div class="title text-[18px] sm:text-[16px] xs:text-[14px] text-white text-center">
                                                Best Padel
                                                Experience
                                            </div>
                                        </div>
                                        <div class="sport-box group/box bg-[#F6F6F6]/5 rounded-[30px] p-[30px] px-[25px] xs:py-[20px] xs:px-[15px] lg:p-[20px] relative overflow-hidden border border-solid border-transparent hover:border-white/50 duration-450">
                                            <div class="gradient duration-450 bg-gradient-to-br from-white from-15% to-white/50 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-hover/box:opacity-20"></div>
                                            <div class="img h-[60px] xs:h-[40px] w-full overflow-hidden mb-[15px]">
                                                <img class="h-full w-full object-contain object-center duration-500" src="../assets/image/other/court.png" alt="">
                                            </div>
                                            <div class="title text-[18px] sm:text-[16px] xs:text-[14px] text-white text-center">
                                                High Quality
                                                Pitch
                                            </div>
                                        </div>
                                        <div class="sport-box group/box bg-[#F6F6F6]/5 rounded-[30px] p-[30px] px-[25px] xs:py-[20px] xs:px-[15px] lg:p-[20px] relative overflow-hidden border border-solid border-transparent hover:border-white/50 duration-450">
                                            <div class="gradient duration-450 bg-gradient-to-br from-white from-15% to-white/50 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-hover/box:opacity-20"></div>
                                            <div class="img h-[60px] xs:h-[40px] w-full overflow-hidden mb-[15px]">
                                                <img class="h-full w-full object-contain object-center duration-500" src="../assets/image/other/running.png" alt="">
                                            </div>
                                            <div class="title text-[18px] sm:text-[16px] xs:text-[14px] text-white text-center">
                                                Sport Activity
                                                With Friends
                                            </div>
                                        </div>
                                    </div>
                                    <div class="editor editor-base md:editor-sm editor-headings:font-bold editor-headings:text-[#ffffff] editor-headings:leading-tight xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] xl:editor-h1:text-[40px] editor-h1:text-[44px] editor-p:leading-tight editor-p:text-[#B6D3E4] editor-p:text-[24px] sm:editor-p:text-[22px] xs:editor-p:text-[20px] editor-li:text-[#231F20]/40 editor-li:font-medium editor-li:text-[20px]  editor-ul:pl-[25px] editor-ul:px-[25px]
                                    [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] m-auto lg:max-w-full w-full">
                                        <p>Wepadel is one of the newest brands of Integral Group. </p>
                                    </div>
                                </div>
                                <div class="img-field lg:my-0">
                                    <div class="img h-[640px] xl:h-[500px] lg:h-[400px] md:h-[300px] w-full overflow-hidden isolate rounded-[30px] -mb-[130px] lg:mb-0 image-zoom">
                                        <img class="h-full w-full object-cover object-center duration-500" src="../assets/image/other/project.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <section class="project-counter py-[100px] md:py-[50px] overflow-hidden isolate">
                <div class="container max-w-[1440px] mx-auto ">
                    <div class="wrapper grid grid-cols-4 md:grid-cols-2 max-w-[1050px] mx-auto [&_.icons:nth-child(odd)]:mt-[100px] md:[&_.icons:nth-child(odd)]:mt-0 [&_.icons:nth-child(1)]:ml-[50px] [&_.icons:nth-child(2)]:ml-[50px] [&_.icons:nth-child(3)]:-ml-[50px] [&_.icons:nth-child(4)]:-ml-[50px] md:[&_.icons:nth-child(1)]:ml-0 md:[&_.icons:nth-child(2)]:ml-0 md:[&_.icons:nth-child(3)]:ml-0 md:[&_.icons:nth-child(4)]:-ml-0 gap-[50px] md:gap-[25px] md:justify-center">
                        <div class="icons h-fit relative group/icon z-[1] w-fit md:!mx-auto opacity-50 hover:opacity-100 duration-450 ">
                            <div class="icon icon-arrow-left-str w-[260px] text-[250px] h-[260px] sm:w-[210px] sm:text-[200px] sm:h-[210px] xs:w-[145px] xs:text-[140px] xs:h-[145px] md:w-full block leading-none text-transparent bg-clip-text bg-gradient-to-b from-[#0055A3] from-25%  to-[#0055A3]/100 opacity-100 group-hover/icon:opacity-0 duration-450">
                            </div>
                            <div class="icon absolute top-0 left-0 icon-arrow-left w-[260px] text-[250px] h-[260px] sm:w-[210px] sm:text-[200px] sm:h-[210px] xs:w-[145px] xs:text-[140px] xs:h-[145px] md:w-full block leading-none text-transparent bg-clip-text bg-gradient-to-b from-[#0055A3] from-25%  to-[#0055A3]/0 opacity-0 group-hover/icon:opacity-100 duration-450">
                            </div>
                            <div class="text-field absolute top-[50%] left-[50%] translate-x-[-40%] translate-y-[-50%] w-full">
                                <div class="counter-effect flex items-center justify-center">
                                    <div class="value overflow-hidden text-[44px] lg:text-[34px] xs:text-[24px] leading-[1.2] font-semibold text-[#0055A3] group-hover/icon:text-white duration-450 h-[50px] sm:h-[40px] xs:h-[26px] px-[5px]">100</div>
                                    <span class="text-[44px] lg:text-[34px] sm:text-[30px] xs:text-[24px] leading-[1.2] text-[#0055A3] group-hover/icon:text-white duration-450 font-semibold">+</span>
                                </div>
                                <p class="text-[18px] xs:text-[14px] text-[#0055A3] group-hover/icon:text-white duration-450 font-medium !leading-6 text-center" dir="">Customer</p>
                            </div>
                        </div>
                        <div class="icons h-fit relative group/icon z-[1] w-fit md:!mx-auto opacity-50 hover:opacity-100 duration-450 ">
                            <div class="icon icon-arrow-right-str w-[260px] text-[250px] h-[260px] sm:w-[210px] sm:text-[200px] sm:h-[210px] xs:w-[145px] xs:text-[140px] xs:h-[145px] md:w-full block leading-none text-transparent bg-clip-text bg-gradient-to-b from-[#0055A3] from-25%  to-[#0055A3]/100 opacity-100 group-hover/icon:opacity-0 duration-450">
                            </div>
                            <div class="icon absolute top-0 left-0 icon-arrow-right w-[260px] text-[250px] h-[260px] sm:w-[210px] sm:text-[200px] sm:h-[210px] xs:w-[145px] xs:text-[140px] xs:h-[145px] md:w-full block leading-none text-transparent bg-clip-text bg-gradient-to-b from-[#0055A3] from-25%  to-[#0055A3]/0 opacity-0 group-hover/icon:opacity-100 duration-450">
                            </div>
                            <div class="text-field absolute top-[50%] left-[50%] translate-x-[-60%] translate-y-[-50%] w-full">
                                <div class="counter-effect flex items-center justify-center">
                                    <div class="value overflow-hidden text-[44px] lg:text-[34px] xs:text-[24px] leading-[1.2] font-semibold text-[#0055A3] group-hover/icon:text-white duration-450 h-[50px] sm:h-[40px] xs:h-[26px] px-[5px]">1200</div>
                                    <span class="text-[44px] lg:text-[34px] sm:text-[30px] xs:text-[24px] leading-[1.2] text-[#0055A3] group-hover/icon:text-white duration-450 font-semibold">+</span>
                                </div>
                                <p class="text-[18px] xs:text-[14px] text-[#0055A3] group-hover/icon:text-white duration-450 font-medium !leading-6 text-center" dir="">Customer</p>
                            </div>
                        </div>
                        <div class="icons h-fit relative group/icon z-[1] w-fit md:!mx-auto opacity-50 hover:opacity-100 duration-450 ">
                            <div class="icon icon-arrow-left-str w-[260px] text-[250px] h-[260px] sm:w-[210px] sm:text-[200px] sm:h-[210px] xs:w-[145px] xs:text-[140px] xs:h-[145px] md:w-full block leading-none text-transparent bg-clip-text bg-gradient-to-b from-[#0055A3] from-25%  to-[#0055A3]/100 opacity-100 group-hover/icon:opacity-0 duration-450">
                            </div>
                            <div class="icon absolute top-0 left-0 icon-arrow-left w-[260px] text-[250px] h-[260px] sm:w-[210px] sm:text-[200px] sm:h-[210px] xs:w-[145px] xs:text-[140px] xs:h-[145px] md:w-full block leading-none text-transparent bg-clip-text bg-gradient-to-b from-[#0055A3] from-25%  to-[#0055A3]/0 opacity-0 group-hover/icon:opacity-100 duration-450">
                            </div>
                            <div class="text-field absolute top-[50%] left-[50%] translate-x-[-40%] translate-y-[-50%] w-full">
                                <div class="counter-effect flex items-center justify-center">
                                    <div class="value overflow-hidden text-[44px] lg:text-[34px] xs:text-[24px] leading-[1.2] font-semibold text-[#0055A3] group-hover/icon:text-white duration-450 h-[50px] sm:h-[40px] xs:h-[26px] px-[5px]">100</div>
                                    <span class="text-[44px] lg:text-[34px] sm:text-[30px] xs:text-[24px] leading-[1.2] text-[#0055A3] group-hover/icon:text-white duration-450 font-semibold">+</span>
                                </div>
                                <p class="text-[18px] xs:text-[14px] text-[#0055A3] group-hover/icon:text-white duration-450 font-medium !leading-6 text-center" dir="">Customer</p>
                            </div>
                        </div>
                        <div class="icons h-fit relative group/icon z-[1] w-fit md:!mx-auto opacity-50 hover:opacity-100 duration-450 ">
                            <div class="icon icon-arrow-right-str w-[260px] text-[250px] h-[260px] sm:w-[210px] sm:text-[200px] sm:h-[210px] xs:w-[145px] xs:text-[140px] xs:h-[145px] md:w-full block leading-none text-transparent bg-clip-text bg-gradient-to-b from-[#0055A3] from-25%  to-[#0055A3]/100 opacity-100 group-hover/icon:opacity-0 duration-450">
                            </div>
                            <div class="icon absolute top-0 left-0 icon-arrow-right w-[260px] text-[250px] h-[260px] sm:w-[210px] sm:text-[200px] sm:h-[210px] xs:w-[145px] xs:text-[140px] xs:h-[145px] md:w-full block leading-none text-transparent bg-clip-text bg-gradient-to-b from-[#0055A3] from-25%  to-[#0055A3]/0 opacity-0 group-hover/icon:opacity-100 duration-450">
                            </div>
                            <div class="text-field absolute top-[50%] left-[50%] translate-x-[-60%] translate-y-[-50%] w-full">
                                <div class="counter-effect flex items-center justify-center">
                                    <div class="value overflow-hidden text-[44px] lg:text-[34px] xs:text-[24px] leading-[1.2] font-semibold text-[#0055A3] group-hover/icon:text-white duration-450 h-[50px] sm:h-[40px] xs:h-[26px] px-[5px]">1200</div>
                                    <span class="text-[44px] lg:text-[34px] sm:text-[30px] xs:text-[24px] leading-[1.2] text-[#0055A3] group-hover/icon:text-white duration-450 font-semibold">+</span>
                                </div>
                                <p class="text-[18px] xs:text-[14px] text-[#0055A3] group-hover/icon:text-white duration-450 font-medium !leading-6 text-center" dir="">Customer</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section class="maps-content pt-[100px] md:pt-[50px] [background:linear-gradient(169deg,_#F8F8F8_12.4%,_rgba(248,248,248,0)_91.86%);]" id="world">
                <div class="container max-w-[1440px]  position-field">
                    <div class="wrapper grid grid-cols-[minmax(0,8fr)_minmax(0,4fr)] lg:grid-cols-[minmax(0,7fr)_minmax(0,5fr)] md:grid-cols-1 gap-[50px] sm:gap-0">
                        <div class="image-field">
                            <div class="title flex justify-between items-center mb-[50px] md:mb-[30px] xs:mb-0">
                                <div class="editor title editor-headings:duration-450 group-hover/mpb:editor-headings:text-white  editor-headings:mb-0 editor-headings:font-light editor-headings:leading-snug xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] editor-h1:text-[40px] editor-strong:duration-450 group-hover/mpb:editor-strong:text-white editor-strong:text-[40px] xl:editor-strong:text-[34px] lg:editor-strong:text-[20px] duration-450 font-bold editor-headings:text-transparent editor-headings:bg-clip-text editor-headings:bg-gradient-to-r editor-headings:from-[#0055A3] editor-headings:from-40% editor-headings:to-[#C7234B] editor-headings:to-75% editor-strong:text-transparent editor-strong:bg-clip-text editor-strong:bg-gradient-to-r editor-strong:from-[#0055A3] editor-strong:from-25% editor-strong:to-[#C7234B] editor-strong:font-bold editor-strong:block text-left max-w-full w-fit">
                                    <h1>WePadel
                                        <strong>All Over The World</strong>
                                    </h1>
                                </div>
                            </div>
                            <div class="img h-[500px] md:h-[400px] sm:h-[350px] xs:h-[250px] w-full overflow-hidden isolate relative height-fix-image">
                                <img class="h-full w-full object-contain object-center duration-500" src="../assets/image/other/earth.png" alt="">
                                <div data-target=".maps-list" class="location-list select-field scrollable-mob">
                                    <a class="absolute active map-box icon-content group/icon" href="javascript:;" data-branch-index="0" style="top:33%;left:46%;">
                                        <div class="icon icon-arrow-down absolute top-[50%] translate-x-[-50%] translate-y-[-50%] left-[50%] text-[14px] h-[14px] group-[&.active]/icon:text-[24px] group-[&.active]/icon:h-[24px] block leading-none duration-350 text-[#0055A3] text-center group-[&.active]/icon:text-[#C7234B]">
                                        </div>
                                        <div class="icon icon-arrow-down text-[37px] h-[34px] block leading-none duration-350 text-[#0055A3]/40 text-center opacity-0 group-[&.active]/icon:animate-pulse group-[&.active]/icon:text-[#C7234B]">
                                        </div>
                                    </a>
                                    <a class="absolute map-box icon-content group/icon" href="javascript:;" data-branch-index="1" style="top:33.3%;left:60.7%;">
                                        <div class="icon icon-arrow-down absolute top-[50%] translate-x-[-50%] translate-y-[-50%] left-[50%] text-[14px] h-[14px] group-[&.active]/icon:text-[24px] group-[&.active]/icon:h-[24px] block leading-none duration-350 text-[#0055A3] text-center group-[&.active]/icon:text-[#C7234B]">
                                        </div>
                                        <div class="icon icon-arrow-down text-[37px] h-[34px] block leading-none duration-350 text-[#0055A3]/40 text-center opacity-0 group-[&.active]/icon:animate-pulse group-[&.active]/icon:text-[#C7234B]">
                                        </div>
                                    </a>
                                    <a class="absolute map-box icon-content group/icon" href="javascript:;" data-branch-index="2" style="top:43%;left:54%;">
                                        <div class="icon icon-arrow-down absolute top-[50%] translate-x-[-50%] translate-y-[-50%] left-[50%] text-[14px] h-[14px] group-[&.active]/icon:text-[24px] group-[&.active]/icon:h-[24px] block leading-none duration-350 text-[#0055A3] text-center group-[&.active]/icon:text-[#C7234B]">
                                        </div>
                                        <div class="icon icon-arrow-down text-[37px] h-[34px] block leading-none duration-350 text-[#0055A3]/40 text-center opacity-0 group-[&.active]/icon:animate-pulse group-[&.active]/icon:text-[#C7234B]">
                                        </div>
                                    </a>

                                    <a class="absolute map-box icon-content group/icon" href="javascript:;" data-branch-index="3" style="top:50%;left:46%;">
                                        <div class="icon icon-arrow-down absolute top-[50%] translate-x-[-50%] translate-y-[-50%] left-[50%] text-[14px] h-[14px] group-[&.active]/icon:text-[24px] group-[&.active]/icon:h-[24px] block leading-none duration-350 text-[#0055A3] text-center group-[&.active]/icon:text-[#C7234B]">
                                        </div>
                                        <div class="icon icon-arrow-down text-[37px] h-[34px] block leading-none duration-350 text-[#0055A3]/40 text-center opacity-0 group-[&.active]/icon:animate-pulse group-[&.active]/icon:text-[#C7234B]">
                                        </div>
                                    </a>
                                    <a class="absolute map-box icon-content group/icon" href="javascript:;" data-branch-index="4" style="top:58%;left:30%;">
                                        <div class="icon icon-arrow-down absolute top-[50%] translate-x-[-50%] translate-y-[-50%] left-[50%] text-[14px] h-[14px] group-[&.active]/icon:text-[24px] group-[&.active]/icon:h-[24px] block leading-none duration-350 text-[#0055A3] text-center group-[&.active]/icon:text-[#C7234B]">
                                        </div>
                                        <div class="icon icon-arrow-down text-[37px] h-[34px] block leading-none duration-350 text-[#0055A3]/40 text-center opacity-0 group-[&.active]/icon:animate-pulse group-[&.active]/icon:text-[#C7234B]">
                                        </div>
                                    </a>
                                    <a class="absolute map-box icon-content group/icon" href="javascript:;" data-branch-index="5" style="top:36%;left:21%;">
                                        <div class="icon icon-arrow-down absolute top-[50%] translate-x-[-50%] translate-y-[-50%] left-[50%] text-[14px] h-[14px] group-[&.active]/icon:text-[24px] group-[&.active]/icon:h-[24px] block leading-none duration-350 text-[#0055A3] text-center group-[&.active]/icon:text-[#C7234B]">
                                        </div>
                                        <div class="icon icon-arrow-down text-[37px] h-[34px] block leading-none duration-350 text-[#0055A3]/40 text-center opacity-0 group-[&.active]/icon:animate-pulse group-[&.active]/icon:text-[#C7234B]">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="maps-list relative group/map-list">
                            <div class="title flex justify-end items-center mb-[50px] md:mb-[30px] relative height-fix-title">
                                <div class="split w-[2px] h-full bg-[#0055A3] absolute top-0 left-0 sm:hidden rounded-[30px]"></div>
                                <div class="editor editor-lg title editor-headings:duration-450 group-hover/mpb:editor-headings:text-white  editor-headings:mb-0 editor-headings:font-normal editor-headings:leading-snug xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] xl:editor-h1:text-[40px] editor-h1:text-[58px]  duration-450 editor-h1:font-bold editor-headings:text-transparent editor-headings:bg-clip-text editor-headings:bg-gradient-to-r editor-headings:from-[#0055A3] editor-headings:from-40% editor-headings:to-[#0055A3] editor-headings:to-75% editor-strong:font-bold max-w-full w-fit text-right" dir="">
                                    <h3>Selected Area
                                    </h3>
                                    <h1>Europe</h1>
                                </div>
                            </div>
                            <div class="gradient absolute left-0 bottom-0 w-full h-[350px] [background:linear-gradient(180deg,_rgba(255,255,255,0)_0%,_#FFFFFF_100%);] pointer-events-none z-[2] md:hidden duration-450 group-hover/map-list:opacity-0"></div>

                            <div class="description-main-content xl:max-h-[550px] content content-fields w-full overflow-y-auto scrollbar scrollbar-w-[8px] scrollbar-h-[5px] scrollbar-track-rounded-[5px] scrollbar-thumb-rounded-[5px] scrollbar-thumb-[#0055A3]/50 scrollbar-track-primary-200 relative  pr-[10px]">
                                <div class="description-field relative duration-450 overflow-hidden" dir="">
                                    <div class="desc-box active w-full py-[15px] overflow-hidden absolute opacity-0 [visibility:hidden;] translate-y-[30px] duration-450 [&.active]:!opacity-100 [&.active]:!visible [&.active]:delay-[450ms] [&.active]:!translate-y-0 [&.active]:duration-450 [&.active]:z-[1] space-y-10" box-id="0" data-title="Europe">
                                        <div class="media-box w-full h-fit duration-450 hover:-translate-y-2">
                                            <a href="single-blog.php" class="content group/blog relative [&:hover_.text-field]:text-white [&:hover_.icon-arrow-right-short]:text-white w-full h-full duration-450 block">
                                                <div class="button-field absolute right-0 top-0 z-[1]">
                                                    <div class="button group/button h-[80px] w-[80px] xs:h-[60px] xs:w-[60px] flex justify-center rounded-tr-[30px] rounded-bl-[30px] bg-white border border-solid border-black/20 relative space-x-[15px] duration-500 overflow-hidden isolate opacity-0 scale-75 group-hover/blog:scale-100 group-hover/blog:opacity-100 origin-top-right ">
                                                        <div class="icon-arrow-right-2 text-[18px] xs:text-[16px] flex items-center relative z-2 -rotate-45 text-[#0055A3] duration-450"></div>
                                                    </div>
                                                </div>
                                                <div class="image-field relative ">
                                                    <div class="image relative w-full h-[190px] bg-[#D6D6D6] duration-450 overflow-hidden isolate rounded-[30px]">
                                                        <div class="gradient duration-450 bg-black/20 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-hover/blog:opacity-100"></div>
                                                        <img src="../assets/image/other/blog-2.jpg" alt="" class="w-full h-full object-cover object-center duration-450">
                                                    </div>
                                                    <div class="text-field px-[20px] overflow-hidden isolate">
                                                        <div class="w-fit flex justify-center items-center gap-[8px] duration-450 my-[12px]">
                                                            <div class="icon icon-location text-[#C7234B] text-[20px] h-[20px] block leading-none duration-350"></div>
                                                            <span class="text-[#C7234B] font-normal text-[22px] line-clamp-1">Cyprus</span>
                                                        </div>
                                                        <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-[#0055A3] editor-h1:font-bold editor-h2:font-bold editor-headings:font-normal editor-headings:line-clamp-2 editor-p:text-[14px] editor-p:font-light editor-p:text-[#0055A3] editor-p:mb-0 editor-p:duration-450 text-[#0055A3] mr-auto w-full sm:[&_br]:hidden">
                                                            <h2>Cyprus Origin Padel Court Construction</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-box w-full h-fit duration-450 hover:-translate-y-2">
                                            <a href="single-blog.php" class="content group/blog relative [&:hover_.text-field]:text-white [&:hover_.icon-arrow-right-short]:text-white w-full h-full duration-450 block">
                                                <div class="button-field absolute right-0 top-0 z-[1]">
                                                    <div class="button group/button h-[80px] w-[80px] xs:h-[60px] xs:w-[60px] flex justify-center rounded-tr-[30px] rounded-bl-[30px] bg-white border border-solid border-black/20 relative space-x-[15px] duration-500 overflow-hidden isolate opacity-0 scale-75 group-hover/blog:scale-100 group-hover/blog:opacity-100 origin-top-right ">
                                                        <div class="icon-arrow-right-2 text-[18px] xs:text-[16px] flex items-center relative z-2 -rotate-45 text-[#0055A3] duration-450"></div>
                                                    </div>
                                                </div>
                                                <div class="image-field relative ">
                                                    <div class="image relative w-full h-[190px] bg-[#D6D6D6] duration-450 overflow-hidden isolate rounded-[30px]">
                                                        <div class="gradient duration-450 bg-black/20 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-hover/blog:opacity-100"></div>
                                                        <img src="../assets/image/other/blog-2.jpg" alt="" class="w-full h-full object-cover object-center duration-450">
                                                    </div>
                                                    <div class="text-field px-[20px] overflow-hidden isolate">
                                                        <div class="w-fit flex justify-center items-center gap-[8px] duration-450 my-[12px]">
                                                            <div class="icon icon-location text-[#C7234B] text-[20px] h-[20px] block leading-none duration-350"></div>
                                                            <span class="text-[#C7234B] font-normal text-[22px] line-clamp-1">Cyprus</span>
                                                        </div>
                                                        <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-[#0055A3] editor-h1:font-bold editor-h2:font-bold editor-headings:font-normal editor-headings:line-clamp-2 editor-p:text-[14px] editor-p:font-light editor-p:text-[#0055A3] editor-p:mb-0 editor-p:duration-450 text-[#0055A3] mr-auto w-full sm:[&_br]:hidden">
                                                            <h2>Cyprus Origin Padel Court Construction</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-box w-full h-fit duration-450 hover:-translate-y-2">
                                            <a href="single-blog.php" class="content group/blog relative [&:hover_.text-field]:text-white [&:hover_.icon-arrow-right-short]:text-white w-full h-full duration-450 block">
                                                <div class="button-field absolute right-0 top-0 z-[1]">
                                                    <div class="button group/button h-[80px] w-[80px] xs:h-[60px] xs:w-[60px] flex justify-center rounded-tr-[30px] rounded-bl-[30px] bg-white border border-solid border-black/20 relative space-x-[15px] duration-500 overflow-hidden isolate opacity-0 scale-75 group-hover/blog:scale-100 group-hover/blog:opacity-100 origin-top-right ">
                                                        <div class="icon-arrow-right-2 text-[18px] xs:text-[16px] flex items-center relative z-2 -rotate-45 text-[#0055A3] duration-450"></div>
                                                    </div>
                                                </div>
                                                <div class="image-field relative ">
                                                    <div class="image relative w-full h-[190px] bg-[#D6D6D6] duration-450 overflow-hidden isolate rounded-[30px]">
                                                        <div class="gradient duration-450 bg-black/20 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-hover/blog:opacity-100"></div>
                                                        <img src="../assets/image/other/blog-2.jpg" alt="" class="w-full h-full object-cover object-center duration-450">
                                                    </div>
                                                    <div class="text-field px-[20px] overflow-hidden isolate">
                                                        <div class="w-fit flex justify-center items-center gap-[8px] duration-450 my-[12px]">
                                                            <div class="icon icon-location text-[#C7234B] text-[20px] h-[20px] block leading-none duration-350"></div>
                                                            <span class="text-[#C7234B] font-normal text-[22px] line-clamp-1">Cyprus</span>
                                                        </div>
                                                        <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-[#0055A3] editor-h1:font-bold editor-h2:font-bold editor-headings:font-normal editor-headings:line-clamp-2 editor-p:text-[14px] editor-p:font-light editor-p:text-[#0055A3] editor-p:mb-0 editor-p:duration-450 text-[#0055A3] mr-auto w-full sm:[&_br]:hidden">
                                                            <h2>Cyprus Origin Padel Court Construction</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-box w-full h-fit duration-450 hover:-translate-y-2">
                                            <a href="single-blog.php" class="content group/blog relative [&:hover_.text-field]:text-white [&:hover_.icon-arrow-right-short]:text-white w-full h-full duration-450 block">
                                                <div class="button-field absolute right-0 top-0 z-[1]">
                                                    <div class="button group/button h-[80px] w-[80px] xs:h-[60px] xs:w-[60px] flex justify-center rounded-tr-[30px] rounded-bl-[30px] bg-white border border-solid border-black/20 relative space-x-[15px] duration-500 overflow-hidden isolate opacity-0 scale-75 group-hover/blog:scale-100 group-hover/blog:opacity-100 origin-top-right ">
                                                        <div class="icon-arrow-right-2 text-[18px] xs:text-[16px] flex items-center relative z-2 -rotate-45 text-[#0055A3] duration-450"></div>
                                                    </div>
                                                </div>
                                                <div class="image-field relative ">
                                                    <div class="image relative w-full h-[190px] bg-[#D6D6D6] duration-450 overflow-hidden isolate rounded-[30px]">
                                                        <div class="gradient duration-450 bg-black/20 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-hover/blog:opacity-100"></div>
                                                        <img src="../assets/image/other/blog-2.jpg" alt="" class="w-full h-full object-cover object-center duration-450">
                                                    </div>
                                                    <div class="text-field px-[20px] overflow-hidden isolate">
                                                        <div class="w-fit flex justify-center items-center gap-[8px] duration-450 my-[12px]">
                                                            <div class="icon icon-location text-[#C7234B] text-[20px] h-[20px] block leading-none duration-350"></div>
                                                            <span class="text-[#C7234B] font-normal text-[22px] line-clamp-1">Cyprus</span>
                                                        </div>
                                                        <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-[#0055A3] editor-h1:font-bold editor-h2:font-bold editor-headings:font-normal editor-headings:line-clamp-2 editor-p:text-[14px] editor-p:font-light editor-p:text-[#0055A3] editor-p:mb-0 editor-p:duration-450 text-[#0055A3] mr-auto w-full sm:[&_br]:hidden">
                                                            <h2>Cyprus Origin Padel Court Construction</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="desc-box w-full py-[15px] overflow-hidden absolute opacity-0 [visibility:hidden;] translate-y-[30px] duration-450 [&.active]:!opacity-100 [&.active]:!visible [&.active]:delay-[450ms] [&.active]:!translate-y-0 [&.active]:duration-450 [&.active]:z-[1] space-y-10" box-id="1" data-title="Asia">
                                        <div class="media-box w-full h-fit duration-450 hover:-translate-y-2">
                                            <a href="single-blog.php" class="content group/blog relative [&:hover_.text-field]:text-white [&:hover_.icon-arrow-right-short]:text-white w-full h-full duration-450 block">
                                                <div class="button-field absolute right-0 top-0 z-[1]">
                                                    <div class="button group/button h-[80px] w-[80px] xs:h-[60px] xs:w-[60px] flex justify-center rounded-tr-[30px] rounded-bl-[30px] bg-white border border-solid border-black/20 relative space-x-[15px] duration-500 overflow-hidden isolate opacity-0 scale-75 group-hover/blog:scale-100 group-hover/blog:opacity-100 origin-top-right ">
                                                        <div class="icon-arrow-right-2 text-[18px] xs:text-[16px] flex items-center relative z-2 -rotate-45 text-[#0055A3] duration-450"></div>
                                                    </div>
                                                </div>
                                                <div class="image-field relative ">
                                                    <div class="image relative w-full h-[190px] bg-[#D6D6D6] duration-450 overflow-hidden isolate rounded-[30px]">
                                                        <div class="gradient duration-450 bg-black/20 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-hover/blog:opacity-100"></div>
                                                        <img src="../assets/image/other/blog-2.jpg" alt="" class="w-full h-full object-cover object-center duration-450">
                                                    </div>
                                                    <div class="text-field px-[20px] overflow-hidden isolate">
                                                        <div class="w-fit flex justify-center items-center gap-[8px] duration-450 my-[12px]">
                                                            <div class="icon icon-location text-[#C7234B] text-[20px] h-[20px] block leading-none duration-350"></div>
                                                            <span class="text-[#C7234B] font-normal text-[22px] line-clamp-1">Cyprus</span>
                                                        </div>
                                                        <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-[#0055A3] editor-h1:font-bold editor-h2:font-bold editor-headings:font-normal editor-headings:line-clamp-2 editor-p:text-[14px] editor-p:font-light editor-p:text-[#0055A3] editor-p:mb-0 editor-p:duration-450 text-[#0055A3] mr-auto w-full sm:[&_br]:hidden">
                                                            <h2>Cyprus Origin Padel Court Construction</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-box w-full h-fit duration-450 hover:-translate-y-2">
                                            <a href="single-blog.php" class="content group/blog relative [&:hover_.text-field]:text-white [&:hover_.icon-arrow-right-short]:text-white w-full h-full duration-450 block">
                                                <div class="button-field absolute right-0 top-0 z-[1]">
                                                    <div class="button group/button h-[80px] w-[80px] xs:h-[60px] xs:w-[60px] flex justify-center rounded-tr-[30px] rounded-bl-[30px] bg-white border border-solid border-black/20 relative space-x-[15px] duration-500 overflow-hidden isolate opacity-0 scale-75 group-hover/blog:scale-100 group-hover/blog:opacity-100 origin-top-right ">
                                                        <div class="icon-arrow-right-2 text-[18px] xs:text-[16px] flex items-center relative z-2 -rotate-45 text-[#0055A3] duration-450"></div>
                                                    </div>
                                                </div>
                                                <div class="image-field relative ">
                                                    <div class="image relative w-full h-[190px] bg-[#D6D6D6] duration-450 overflow-hidden isolate rounded-[30px]">
                                                        <div class="gradient duration-450 bg-black/20 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-hover/blog:opacity-100"></div>
                                                        <img src="../assets/image/other/blog-2.jpg" alt="" class="w-full h-full object-cover object-center duration-450">
                                                    </div>
                                                    <div class="text-field px-[20px] overflow-hidden isolate">
                                                        <div class="w-fit flex justify-center items-center gap-[8px] duration-450 my-[12px]">
                                                            <div class="icon icon-location text-[#C7234B] text-[20px] h-[20px] block leading-none duration-350"></div>
                                                            <span class="text-[#C7234B] font-normal text-[22px] line-clamp-1">Cyprus</span>
                                                        </div>
                                                        <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-[#0055A3] editor-h1:font-bold editor-h2:font-bold editor-headings:font-normal editor-headings:line-clamp-2 editor-p:text-[14px] editor-p:font-light editor-p:text-[#0055A3] editor-p:mb-0 editor-p:duration-450 text-[#0055A3] mr-auto w-full sm:[&_br]:hidden">
                                                            <h2>Cyprus Origin Padel Court Construction</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="desc-box w-full py-[15px] overflow-hidden absolute opacity-0 [visibility:hidden;] translate-y-[30px] duration-450 [&.active]:!opacity-100 [&.active]:!visible [&.active]:delay-[450ms] [&.active]:!translate-y-0 [&.active]:duration-450 [&.active]:z-[1] space-y-10" box-id="2" data-title="Asia">
                                        <div class="media-box w-full h-fit duration-450 hover:-translate-y-2">
                                            <a href="single-blog.php" class="content group/blog relative [&:hover_.text-field]:text-white [&:hover_.icon-arrow-right-short]:text-white w-full h-full duration-450 block">
                                                <div class="button-field absolute right-0 top-0 z-[1]">
                                                    <div class="button group/button h-[80px] w-[80px] xs:h-[60px] xs:w-[60px] flex justify-center rounded-tr-[30px] rounded-bl-[30px] bg-white border border-solid border-black/20 relative space-x-[15px] duration-500 overflow-hidden isolate opacity-0 scale-75 group-hover/blog:scale-100 group-hover/blog:opacity-100 origin-top-right ">
                                                        <div class="icon-arrow-right-2 text-[18px] xs:text-[16px] flex items-center relative z-2 -rotate-45 text-[#0055A3] duration-450"></div>
                                                    </div>
                                                </div>
                                                <div class="image-field relative ">
                                                    <div class="image relative w-full h-[190px] bg-[#D6D6D6] duration-450 overflow-hidden isolate rounded-[30px]">
                                                        <div class="gradient duration-450 bg-black/20 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-hover/blog:opacity-100"></div>
                                                        <img src="../assets/image/other/blog-2.jpg" alt="" class="w-full h-full object-cover object-center duration-450">
                                                    </div>
                                                    <div class="text-field px-[20px] overflow-hidden isolate">
                                                        <div class="w-fit flex justify-center items-center gap-[8px] duration-450 my-[12px]">
                                                            <div class="icon icon-location text-[#C7234B] text-[20px] h-[20px] block leading-none duration-350"></div>
                                                            <span class="text-[#C7234B] font-normal text-[22px] line-clamp-1">Cyprus</span>
                                                        </div>
                                                        <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-[#0055A3] editor-h1:font-bold editor-h2:font-bold editor-headings:font-normal editor-headings:line-clamp-2 editor-p:text-[14px] editor-p:font-light editor-p:text-[#0055A3] editor-p:mb-0 editor-p:duration-450 text-[#0055A3] mr-auto w-full sm:[&_br]:hidden">
                                                            <h2>Cyprus Origin Padel Court Construction</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-box w-full h-fit duration-450 hover:-translate-y-2">
                                            <a href="single-blog.php" class="content group/blog relative [&:hover_.text-field]:text-white [&:hover_.icon-arrow-right-short]:text-white w-full h-full duration-450 block">
                                                <div class="button-field absolute right-0 top-0 z-[1]">
                                                    <div class="button group/button h-[80px] w-[80px] xs:h-[60px] xs:w-[60px] flex justify-center rounded-tr-[30px] rounded-bl-[30px] bg-white border border-solid border-black/20 relative space-x-[15px] duration-500 overflow-hidden isolate opacity-0 scale-75 group-hover/blog:scale-100 group-hover/blog:opacity-100 origin-top-right ">
                                                        <div class="icon-arrow-right-2 text-[18px] xs:text-[16px] flex items-center relative z-2 -rotate-45 text-[#0055A3] duration-450"></div>
                                                    </div>
                                                </div>
                                                <div class="image-field relative ">
                                                    <div class="image relative w-full h-[190px] bg-[#D6D6D6] duration-450 overflow-hidden isolate rounded-[30px]">
                                                        <div class="gradient duration-450 bg-black/20 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-hover/blog:opacity-100"></div>
                                                        <img src="../assets/image/other/blog-2.jpg" alt="" class="w-full h-full object-cover object-center duration-450">
                                                    </div>
                                                    <div class="text-field px-[20px] overflow-hidden isolate">
                                                        <div class="w-fit flex justify-center items-center gap-[8px] duration-450 my-[12px]">
                                                            <div class="icon icon-location text-[#C7234B] text-[20px] h-[20px] block leading-none duration-350"></div>
                                                            <span class="text-[#C7234B] font-normal text-[22px] line-clamp-1">Cyprus</span>
                                                        </div>
                                                        <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-[#0055A3] editor-h1:font-bold editor-h2:font-bold editor-headings:font-normal editor-headings:line-clamp-2 editor-p:text-[14px] editor-p:font-light editor-p:text-[#0055A3] editor-p:mb-0 editor-p:duration-450 text-[#0055A3] mr-auto w-full sm:[&_br]:hidden">
                                                            <h2>Cyprus Origin Padel Court Construction</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-box w-full h-fit duration-450 hover:-translate-y-2">
                                            <a href="single-blog.php" class="content group/blog relative [&:hover_.text-field]:text-white [&:hover_.icon-arrow-right-short]:text-white w-full h-full duration-450 block">
                                                <div class="button-field absolute right-0 top-0 z-[1]">
                                                    <div class="button group/button h-[80px] w-[80px] xs:h-[60px] xs:w-[60px] flex justify-center rounded-tr-[30px] rounded-bl-[30px] bg-white border border-solid border-black/20 relative space-x-[15px] duration-500 overflow-hidden isolate opacity-0 scale-75 group-hover/blog:scale-100 group-hover/blog:opacity-100 origin-top-right ">
                                                        <div class="icon-arrow-right-2 text-[18px] xs:text-[16px] flex items-center relative z-2 -rotate-45 text-[#0055A3] duration-450"></div>
                                                    </div>
                                                </div>
                                                <div class="image-field relative ">
                                                    <div class="image relative w-full h-[190px] bg-[#D6D6D6] duration-450 overflow-hidden isolate rounded-[30px]">
                                                        <div class="gradient duration-450 bg-black/20 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-hover/blog:opacity-100"></div>
                                                        <img src="../assets/image/other/blog-2.jpg" alt="" class="w-full h-full object-cover object-center duration-450">
                                                    </div>
                                                    <div class="text-field px-[20px] overflow-hidden isolate">
                                                        <div class="w-fit flex justify-center items-center gap-[8px] duration-450 my-[12px]">
                                                            <div class="icon icon-location text-[#C7234B] text-[20px] h-[20px] block leading-none duration-350"></div>
                                                            <span class="text-[#C7234B] font-normal text-[22px] line-clamp-1">Cyprus</span>
                                                        </div>
                                                        <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-[#0055A3] editor-h1:font-bold editor-h2:font-bold editor-headings:font-normal editor-headings:line-clamp-2 editor-p:text-[14px] editor-p:font-light editor-p:text-[#0055A3] editor-p:mb-0 editor-p:duration-450 text-[#0055A3] mr-auto w-full sm:[&_br]:hidden">
                                                            <h2>Cyprus Origin Padel Court Construction</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="desc-box w-full py-[15px] overflow-hidden absolute opacity-0 [visibility:hidden;] translate-y-[30px] duration-450 [&.active]:!opacity-100 [&.active]:!visible [&.active]:delay-[450ms] [&.active]:!translate-y-0 [&.active]:duration-450 [&.active]:z-[1] space-y-10" box-id="3" data-title="Africa">
                                        <div class="media-box w-full h-fit duration-450 hover:-translate-y-2">
                                            <a href="single-blog.php" class="content group/blog relative [&:hover_.text-field]:text-white [&:hover_.icon-arrow-right-short]:text-white w-full h-full duration-450 block">
                                                <div class="button-field absolute right-0 top-0 z-[1]">
                                                    <div class="button group/button h-[80px] w-[80px] xs:h-[60px] xs:w-[60px] flex justify-center rounded-tr-[30px] rounded-bl-[30px] bg-white border border-solid border-black/20 relative space-x-[15px] duration-500 overflow-hidden isolate opacity-0 scale-75 group-hover/blog:scale-100 group-hover/blog:opacity-100 origin-top-right ">
                                                        <div class="icon-arrow-right-2 text-[18px] xs:text-[16px] flex items-center relative z-2 -rotate-45 text-[#0055A3] duration-450"></div>
                                                    </div>
                                                </div>
                                                <div class="image-field relative ">
                                                    <div class="image relative w-full h-[190px] bg-[#D6D6D6] duration-450 overflow-hidden isolate rounded-[30px]">
                                                        <div class="gradient duration-450 bg-black/20 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-hover/blog:opacity-100"></div>
                                                        <img src="../assets/image/other/blog-2.jpg" alt="" class="w-full h-full object-cover object-center duration-450">
                                                    </div>
                                                    <div class="text-field px-[20px] overflow-hidden isolate">
                                                        <div class="w-fit flex justify-center items-center gap-[8px] duration-450 my-[12px]">
                                                            <div class="icon icon-location text-[#C7234B] text-[20px] h-[20px] block leading-none duration-350"></div>
                                                            <span class="text-[#C7234B] font-normal text-[22px] line-clamp-1">Cyprus</span>
                                                        </div>
                                                        <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-[#0055A3] editor-h1:font-bold editor-h2:font-bold editor-headings:font-normal editor-headings:line-clamp-2 editor-p:text-[14px] editor-p:font-light editor-p:text-[#0055A3] editor-p:mb-0 editor-p:duration-450 text-[#0055A3] mr-auto w-full sm:[&_br]:hidden">
                                                            <h2>Cyprus Origin Padel Court Construction</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-box w-full h-fit duration-450 hover:-translate-y-2">
                                            <a href="single-blog.php" class="content group/blog relative [&:hover_.text-field]:text-white [&:hover_.icon-arrow-right-short]:text-white w-full h-full duration-450 block">
                                                <div class="button-field absolute right-0 top-0 z-[1]">
                                                    <div class="button group/button h-[80px] w-[80px] xs:h-[60px] xs:w-[60px] flex justify-center rounded-tr-[30px] rounded-bl-[30px] bg-white border border-solid border-black/20 relative space-x-[15px] duration-500 overflow-hidden isolate opacity-0 scale-75 group-hover/blog:scale-100 group-hover/blog:opacity-100 origin-top-right ">
                                                        <div class="icon-arrow-right-2 text-[18px] xs:text-[16px] flex items-center relative z-2 -rotate-45 text-[#0055A3] duration-450"></div>
                                                    </div>
                                                </div>
                                                <div class="image-field relative ">
                                                    <div class="image relative w-full h-[190px] bg-[#D6D6D6] duration-450 overflow-hidden isolate rounded-[30px]">
                                                        <div class="gradient duration-450 bg-black/20 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-hover/blog:opacity-100"></div>
                                                        <img src="../assets/image/other/blog-2.jpg" alt="" class="w-full h-full object-cover object-center duration-450">
                                                    </div>
                                                    <div class="text-field px-[20px] overflow-hidden isolate">
                                                        <div class="w-fit flex justify-center items-center gap-[8px] duration-450 my-[12px]">
                                                            <div class="icon icon-location text-[#C7234B] text-[20px] h-[20px] block leading-none duration-350"></div>
                                                            <span class="text-[#C7234B] font-normal text-[22px] line-clamp-1">Cyprus</span>
                                                        </div>
                                                        <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-[#0055A3] editor-h1:font-bold editor-h2:font-bold editor-headings:font-normal editor-headings:line-clamp-2 editor-p:text-[14px] editor-p:font-light editor-p:text-[#0055A3] editor-p:mb-0 editor-p:duration-450 text-[#0055A3] mr-auto w-full sm:[&_br]:hidden">
                                                            <h2>Cyprus Origin Padel Court Construction</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-box w-full h-fit duration-450 hover:-translate-y-2">
                                            <a href="single-blog.php" class="content group/blog relative [&:hover_.text-field]:text-white [&:hover_.icon-arrow-right-short]:text-white w-full h-full duration-450 block">
                                                <div class="button-field absolute right-0 top-0 z-[1]">
                                                    <div class="button group/button h-[80px] w-[80px] xs:h-[60px] xs:w-[60px] flex justify-center rounded-tr-[30px] rounded-bl-[30px] bg-white border border-solid border-black/20 relative space-x-[15px] duration-500 overflow-hidden isolate opacity-0 scale-75 group-hover/blog:scale-100 group-hover/blog:opacity-100 origin-top-right ">
                                                        <div class="icon-arrow-right-2 text-[18px] xs:text-[16px] flex items-center relative z-2 -rotate-45 text-[#0055A3] duration-450"></div>
                                                    </div>
                                                </div>
                                                <div class="image-field relative ">
                                                    <div class="image relative w-full h-[190px] bg-[#D6D6D6] duration-450 overflow-hidden isolate rounded-[30px]">
                                                        <div class="gradient duration-450 bg-black/20 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-hover/blog:opacity-100"></div>
                                                        <img src="../assets/image/other/blog-2.jpg" alt="" class="w-full h-full object-cover object-center duration-450">
                                                    </div>
                                                    <div class="text-field px-[20px] overflow-hidden isolate">
                                                        <div class="w-fit flex justify-center items-center gap-[8px] duration-450 my-[12px]">
                                                            <div class="icon icon-location text-[#C7234B] text-[20px] h-[20px] block leading-none duration-350"></div>
                                                            <span class="text-[#C7234B] font-normal text-[22px] line-clamp-1">Cyprus</span>
                                                        </div>
                                                        <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-[#0055A3] editor-h1:font-bold editor-h2:font-bold editor-headings:font-normal editor-headings:line-clamp-2 editor-p:text-[14px] editor-p:font-light editor-p:text-[#0055A3] editor-p:mb-0 editor-p:duration-450 text-[#0055A3] mr-auto w-full sm:[&_br]:hidden">
                                                            <h2>Cyprus Origin Padel Court Construction</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="desc-box w-full py-[15px] overflow-hidden absolute opacity-0 [visibility:hidden;] translate-y-[30px] duration-450 [&.active]:!opacity-100 [&.active]:!visible [&.active]:delay-[450ms] [&.active]:!translate-y-0 [&.active]:duration-450 [&.active]:z-[1] space-y-10" box-id="4" data-title="South America">
                                        <div class="media-box w-full h-fit duration-450 hover:-translate-y-2">
                                            <a href="single-blog.php" class="content group/blog relative [&:hover_.text-field]:text-white [&:hover_.icon-arrow-right-short]:text-white w-full h-full duration-450 block">
                                                <div class="button-field absolute right-0 top-0 z-[1]">
                                                    <div class="button group/button h-[80px] w-[80px] xs:h-[60px] xs:w-[60px] flex justify-center rounded-tr-[30px] rounded-bl-[30px] bg-white border border-solid border-black/20 relative space-x-[15px] duration-500 overflow-hidden isolate opacity-0 scale-75 group-hover/blog:scale-100 group-hover/blog:opacity-100 origin-top-right ">
                                                        <div class="icon-arrow-right-2 text-[18px] xs:text-[16px] flex items-center relative z-2 -rotate-45 text-[#0055A3] duration-450"></div>
                                                    </div>
                                                </div>
                                                <div class="image-field relative ">
                                                    <div class="image relative w-full h-[190px] bg-[#D6D6D6] duration-450 overflow-hidden isolate rounded-[30px]">
                                                        <div class="gradient duration-450 bg-black/20 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-hover/blog:opacity-100"></div>
                                                        <img src="../assets/image/other/blog-2.jpg" alt="" class="w-full h-full object-cover object-center duration-450">
                                                    </div>
                                                    <div class="text-field px-[20px] overflow-hidden isolate">
                                                        <div class="w-fit flex justify-center items-center gap-[8px] duration-450 my-[12px]">
                                                            <div class="icon icon-location text-[#C7234B] text-[20px] h-[20px] block leading-none duration-350"></div>
                                                            <span class="text-[#C7234B] font-normal text-[22px] line-clamp-1">Cyprus</span>
                                                        </div>
                                                        <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-[#0055A3] editor-h1:font-bold editor-h2:font-bold editor-headings:font-normal editor-headings:line-clamp-2 editor-p:text-[14px] editor-p:font-light editor-p:text-[#0055A3] editor-p:mb-0 editor-p:duration-450 text-[#0055A3] mr-auto w-full sm:[&_br]:hidden">
                                                            <h2>Cyprus Origin Padel Court Construction</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-box w-full h-fit duration-450 hover:-translate-y-2">
                                            <a href="single-blog.php" class="content group/blog relative [&:hover_.text-field]:text-white [&:hover_.icon-arrow-right-short]:text-white w-full h-full duration-450 block">
                                                <div class="button-field absolute right-0 top-0 z-[1]">
                                                    <div class="button group/button h-[80px] w-[80px] xs:h-[60px] xs:w-[60px] flex justify-center rounded-tr-[30px] rounded-bl-[30px] bg-white border border-solid border-black/20 relative space-x-[15px] duration-500 overflow-hidden isolate opacity-0 scale-75 group-hover/blog:scale-100 group-hover/blog:opacity-100 origin-top-right ">
                                                        <div class="icon-arrow-right-2 text-[18px] xs:text-[16px] flex items-center relative z-2 -rotate-45 text-[#0055A3] duration-450"></div>
                                                    </div>
                                                </div>
                                                <div class="image-field relative ">
                                                    <div class="image relative w-full h-[190px] bg-[#D6D6D6] duration-450 overflow-hidden isolate rounded-[30px]">
                                                        <div class="gradient duration-450 bg-black/20 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-hover/blog:opacity-100"></div>
                                                        <img src="../assets/image/other/blog-2.jpg" alt="" class="w-full h-full object-cover object-center duration-450">
                                                    </div>
                                                    <div class="text-field px-[20px] overflow-hidden isolate">
                                                        <div class="w-fit flex justify-center items-center gap-[8px] duration-450 my-[12px]">
                                                            <div class="icon icon-location text-[#C7234B] text-[20px] h-[20px] block leading-none duration-350"></div>
                                                            <span class="text-[#C7234B] font-normal text-[22px] line-clamp-1">Cyprus</span>
                                                        </div>
                                                        <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-[#0055A3] editor-h1:font-bold editor-h2:font-bold editor-headings:font-normal editor-headings:line-clamp-2 editor-p:text-[14px] editor-p:font-light editor-p:text-[#0055A3] editor-p:mb-0 editor-p:duration-450 text-[#0055A3] mr-auto w-full sm:[&_br]:hidden">
                                                            <h2>Cyprus Origin Padel Court Construction</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-box w-full h-fit duration-450 hover:-translate-y-2">
                                            <a href="single-blog.php" class="content group/blog relative [&:hover_.text-field]:text-white [&:hover_.icon-arrow-right-short]:text-white w-full h-full duration-450 block">
                                                <div class="button-field absolute right-0 top-0 z-[1]">
                                                    <div class="button group/button h-[80px] w-[80px] xs:h-[60px] xs:w-[60px] flex justify-center rounded-tr-[30px] rounded-bl-[30px] bg-white border border-solid border-black/20 relative space-x-[15px] duration-500 overflow-hidden isolate opacity-0 scale-75 group-hover/blog:scale-100 group-hover/blog:opacity-100 origin-top-right ">
                                                        <div class="icon-arrow-right-2 text-[18px] xs:text-[16px] flex items-center relative z-2 -rotate-45 text-[#0055A3] duration-450"></div>
                                                    </div>
                                                </div>
                                                <div class="image-field relative ">
                                                    <div class="image relative w-full h-[190px] bg-[#D6D6D6] duration-450 overflow-hidden isolate rounded-[30px]">
                                                        <div class="gradient duration-450 bg-black/20 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-hover/blog:opacity-100"></div>
                                                        <img src="../assets/image/other/blog-2.jpg" alt="" class="w-full h-full object-cover object-center duration-450">
                                                    </div>
                                                    <div class="text-field px-[20px] overflow-hidden isolate">
                                                        <div class="w-fit flex justify-center items-center gap-[8px] duration-450 my-[12px]">
                                                            <div class="icon icon-location text-[#C7234B] text-[20px] h-[20px] block leading-none duration-350"></div>
                                                            <span class="text-[#C7234B] font-normal text-[22px] line-clamp-1">Cyprus</span>
                                                        </div>
                                                        <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-[#0055A3] editor-h1:font-bold editor-h2:font-bold editor-headings:font-normal editor-headings:line-clamp-2 editor-p:text-[14px] editor-p:font-light editor-p:text-[#0055A3] editor-p:mb-0 editor-p:duration-450 text-[#0055A3] mr-auto w-full sm:[&_br]:hidden">
                                                            <h2>Cyprus Origin Padel Court Construction</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="desc-box w-full py-[15px] overflow-hidden absolute opacity-0 [visibility:hidden;] translate-y-[30px] duration-450 [&.active]:!opacity-100 [&.active]:!visible [&.active]:delay-[450ms] [&.active]:!translate-y-0 [&.active]:duration-450 [&.active]:z-[1] space-y-10" box-id="5" data-title="North America">
                                        <div class="media-box w-full h-fit duration-450 hover:-translate-y-2">
                                            <a href="single-blog.php" class="content group/blog relative [&:hover_.text-field]:text-white [&:hover_.icon-arrow-right-short]:text-white w-full h-full duration-450 block">
                                                <div class="button-field absolute right-0 top-0 z-[1]">
                                                    <div class="button group/button h-[80px] w-[80px] xs:h-[60px] xs:w-[60px] flex justify-center rounded-tr-[30px] rounded-bl-[30px] bg-white border border-solid border-black/20 relative space-x-[15px] duration-500 overflow-hidden isolate opacity-0 scale-75 group-hover/blog:scale-100 group-hover/blog:opacity-100 origin-top-right ">
                                                        <div class="icon-arrow-right-2 text-[18px] xs:text-[16px] flex items-center relative z-2 -rotate-45 text-[#0055A3] duration-450"></div>
                                                    </div>
                                                </div>
                                                <div class="image-field relative ">
                                                    <div class="image relative w-full h-[190px] bg-[#D6D6D6] duration-450 overflow-hidden isolate rounded-[30px]">
                                                        <div class="gradient duration-450 bg-black/20 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-hover/blog:opacity-100"></div>
                                                        <img src="../assets/image/other/blog-2.jpg" alt="" class="w-full h-full object-cover object-center duration-450">
                                                    </div>
                                                    <div class="text-field px-[20px] overflow-hidden isolate">
                                                        <div class="w-fit flex justify-center items-center gap-[8px] duration-450 my-[12px]">
                                                            <div class="icon icon-location text-[#C7234B] text-[20px] h-[20px] block leading-none duration-350"></div>
                                                            <span class="text-[#C7234B] font-normal text-[22px] line-clamp-1">Cyprus</span>
                                                        </div>
                                                        <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-[#0055A3] editor-h1:font-bold editor-h2:font-bold editor-headings:font-normal editor-headings:line-clamp-2 editor-p:text-[14px] editor-p:font-light editor-p:text-[#0055A3] editor-p:mb-0 editor-p:duration-450 text-[#0055A3] mr-auto w-full sm:[&_br]:hidden">
                                                            <h2>Cyprus Origin Padel Court Construction</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-box w-full h-fit duration-450 hover:-translate-y-2">
                                            <a href="single-blog.php" class="content group/blog relative [&:hover_.text-field]:text-white [&:hover_.icon-arrow-right-short]:text-white w-full h-full duration-450 block">
                                                <div class="button-field absolute right-0 top-0 z-[1]">
                                                    <div class="button group/button h-[80px] w-[80px] xs:h-[60px] xs:w-[60px] flex justify-center rounded-tr-[30px] rounded-bl-[30px] bg-white border border-solid border-black/20 relative space-x-[15px] duration-500 overflow-hidden isolate opacity-0 scale-75 group-hover/blog:scale-100 group-hover/blog:opacity-100 origin-top-right ">
                                                        <div class="icon-arrow-right-2 text-[18px] xs:text-[16px] flex items-center relative z-2 -rotate-45 text-[#0055A3] duration-450"></div>
                                                    </div>
                                                </div>
                                                <div class="image-field relative ">
                                                    <div class="image relative w-full h-[190px] bg-[#D6D6D6] duration-450 overflow-hidden isolate rounded-[30px]">
                                                        <div class="gradient duration-450 bg-black/20 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-hover/blog:opacity-100"></div>
                                                        <img src="../assets/image/other/blog-2.jpg" alt="" class="w-full h-full object-cover object-center duration-450">
                                                    </div>
                                                    <div class="text-field px-[20px] overflow-hidden isolate">
                                                        <div class="w-fit flex justify-center items-center gap-[8px] duration-450 my-[12px]">
                                                            <div class="icon icon-location text-[#C7234B] text-[20px] h-[20px] block leading-none duration-350"></div>
                                                            <span class="text-[#C7234B] font-normal text-[22px] line-clamp-1">Cyprus</span>
                                                        </div>
                                                        <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-[#0055A3] editor-h1:font-bold editor-h2:font-bold editor-headings:font-normal editor-headings:line-clamp-2 editor-p:text-[14px] editor-p:font-light editor-p:text-[#0055A3] editor-p:mb-0 editor-p:duration-450 text-[#0055A3] mr-auto w-full sm:[&_br]:hidden">
                                                            <h2>Cyprus Origin Padel Court Construction</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-box w-full h-fit duration-450 hover:-translate-y-2">
                                            <a href="single-blog.php" class="content group/blog relative [&:hover_.text-field]:text-white [&:hover_.icon-arrow-right-short]:text-white w-full h-full duration-450 block">
                                                <div class="button-field absolute right-0 top-0 z-[1]">
                                                    <div class="button group/button h-[80px] w-[80px] xs:h-[60px] xs:w-[60px] flex justify-center rounded-tr-[30px] rounded-bl-[30px] bg-white border border-solid border-black/20 relative space-x-[15px] duration-500 overflow-hidden isolate opacity-0 scale-75 group-hover/blog:scale-100 group-hover/blog:opacity-100 origin-top-right ">
                                                        <div class="icon-arrow-right-2 text-[18px] xs:text-[16px] flex items-center relative z-2 -rotate-45 text-[#0055A3] duration-450"></div>
                                                    </div>
                                                </div>
                                                <div class="image-field relative ">
                                                    <div class="image relative w-full h-[190px] bg-[#D6D6D6] duration-450 overflow-hidden isolate rounded-[30px]">
                                                        <div class="gradient duration-450 bg-black/20 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-hover/blog:opacity-100"></div>
                                                        <img src="../assets/image/other/blog-2.jpg" alt="" class="w-full h-full object-cover object-center duration-450">
                                                    </div>
                                                    <div class="text-field px-[20px] overflow-hidden isolate">
                                                        <div class="w-fit flex justify-center items-center gap-[8px] duration-450 my-[12px]">
                                                            <div class="icon icon-location text-[#C7234B] text-[20px] h-[20px] block leading-none duration-350"></div>
                                                            <span class="text-[#C7234B] font-normal text-[22px] line-clamp-1">Cyprus</span>
                                                        </div>
                                                        <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-[#0055A3] editor-h1:font-bold editor-h2:font-bold editor-headings:font-normal editor-headings:line-clamp-2 editor-p:text-[14px] editor-p:font-light editor-p:text-[#0055A3] editor-p:mb-0 editor-p:duration-450 text-[#0055A3] mr-auto w-full sm:[&_br]:hidden">
                                                            <h2>Cyprus Origin Padel Court Construction</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mission-vision pt-[100px] md:pt-[50px]" id="mission">
                <div class="container max-w-[1440px] m-auto space-y-[30px]">
                    <div class="wrapper grid grid-cols-[minmax(0,5fr)_minmax(0,7fr)] lg:grid-cols-[minmax(0,6fr)_minmax(0,6fr)] md:grid-cols-1 w-full h-full  gap-[30px] scrollreveal">
                        <div class="content relative rounded-[30px] overflow-hidden isolate w-full h-full">
                            <div class="gradient duration-450 bg-gradient-to-br from-[#0055A3] to-[#0055A3]/60 absolute top-0 left-0 w-full h-full z-[2]"></div>
                            <div class="img duration-450 h-full w-full overflow-hidden absolute left-0 top-0">
                                <img class="h-full w-full object-cover duration-500" src="../assets/image/other/sahil.jpg" alt="">
                            </div>
                            <div class="text-field w-full h-full relative z-[3]">
                                <div class="text-content max-w-[525px] md:max-w-full w-full h-full mr-auto flex flex-col justify-center items-center p-[50px] duration-700 relative rounded-[30px] overflow-hidden isolate sm:px-[30px] xs:px-[20px] m-auto">
                                    <div class="editor editor-lg md:editor-sm editor-headings:font-bold editor-headings:leading-[1.1] editor-headings:duration-700 editor-headings:text-white editor-headings:mt-0 editor-headings:mb-[15px] xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] xl:editor-h1:text-[40px] editor-h1:text-[58px] editor-p:leading-tight editor-p:mt-[15px] editor-em:text-[20px] editor-em:font-light editor-li:text-white editor-li:font-medium editor-li:text-[20px] xs:editor-li:text-[16px] editor-ul:pl-[25px] editor-ul:px-[25px] [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] mx-auto lg:max-w-full w-full relative z-[2] editor-em:mb-[30px] editor-em:block editor-em:not-italic editor-em:duration-700  editor-em:text-white editor-headings:text-[44px] xl:editor-headings:text-[40px] lg:editor-headings:text-[34px] md:editor-headings:text-[30px] sm:editor-headings:text-[26px] xs:editor-headings:text-[24px] editor-p:font-light editor-p:text-white editor-p:text-[20px] xs:editor-p:text-[18px] duration-700" dir="">
                                        <h1>Our
                                            Mission</h1>
                                        <p>To bring the success of the Wepadel brand to all over the world and to become a leader in this sector and to offer people a more social, healthier and sportier life standard.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="img h-[400px] xl:h-[400px] md:h-[300px] w-full overflow-hidden rounded-[30px]">
                            <img class="h-full w-full object-cover object-center duration-500" src="../assets/image/other/padel-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="wrapper grid grid-cols-[minmax(0,7fr)_minmax(0,5fr)] lg:grid-cols-[minmax(0,6fr)_minmax(0,6fr)] md:grid-cols-1 w-full h-full  gap-[30px] scrollreveal">
                        <div class="img h-[400px] xl:h-[400px] md:h-[300px] w-full overflow-hidden rounded-[30px] md:order-2">
                            <img class="h-full w-full object-cover object-center duration-500" src="../assets/image/other/sport.jpg" alt="">
                        </div>
                        <div class="content relative rounded-[30px] overflow-hidden isolate w-full h-full md:order-1">
                            <div class="gradient duration-450 bg-gradient-to-br from-[#0055A3] to-[#0055A3]/60 absolute top-0 left-0 w-full h-full z-[2]"></div>
                            <div class="img duration-450 h-full w-full overflow-hidden absolute left-0 top-0">
                                <img class="h-full w-full object-cover duration-500" src="../assets/image/other/sahil.jpg" alt="">
                            </div>
                            <div class="text-field w-full h-full relative z-[3]">
                                <div class="text-content max-w-[525px] md:max-w-full w-full h-full mr-auto flex flex-col justify-center items-center p-[50px] duration-700 relative rounded-[30px] overflow-hidden isolate sm:px-[30px] xs:px-[20px] m-auto">
                                    <div class="editor editor-lg md:editor-sm editor-headings:font-bold editor-headings:leading-[1.1] editor-headings:duration-700 editor-headings:text-white editor-headings:mt-0 editor-headings:mb-[15px] xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] xl:editor-h1:text-[40px] editor-h1:text-[58px] editor-p:leading-tight editor-p:mt-[15px] editor-em:text-[20px] editor-em:font-light editor-li:text-white editor-li:font-medium editor-li:text-[20px] xs:editor-li:text-[16px] editor-ul:pl-[25px] editor-ul:px-[25px] [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] mx-auto lg:max-w-full w-full relative z-[2] editor-em:mb-[30px] editor-em:block editor-em:not-italic editor-em:duration-700  editor-em:text-white editor-headings:text-[44px] xl:editor-headings:text-[40px] lg:editor-headings:text-[34px] md:editor-headings:text-[30px] sm:editor-headings:text-[26px] xs:editor-headings:text-[24px] editor-p:font-light editor-p:text-white editor-p:text-[20px] xs:editor-p:text-[18px] duration-700" dir="">
                                        <h1>Our
                                            Vision</h1>
                                        <p>To build the best padel courts with WePadel quality, introduce people to padel, and contribute to the development of this sport.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section class="ref-content pt-[100px] md:pt-[50px] sm:hidden" id="companies">
                <div class="container max-w-[1440px]">
                    <div class="title flex justify-between md:flex-col md:items-start md:gap-10 items-center mb-[50px] md:mb-[30px]">
                        <div class="editor title editor-headings:duration-450 group-hover/mpb:editor-headings:text-white  editor-headings:mb-0 editor-headings:font-light editor-headings:leading-snug xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] editor-h1:text-[40px] editor-strong:duration-450 group-hover/mpb:editor-strong:text-white editor-strong:text-[40px] xl:editor-strong:text-[34px] lg:editor-strong:text-[20px] duration-450 font-bold editor-headings:text-transparent editor-headings:bg-clip-text editor-headings:bg-gradient-to-r editor-headings:from-[#0055A3] editor-headings:from-40% editor-headings:to-[#C7234B] editor-headings:to-75% editor-strong:text-transparent editor-strong:bg-clip-text editor-strong:bg-gradient-to-r editor-strong:from-[#0055A3] editor-strong:from-25% editor-strong:to-[#C7234B] editor-strong:font-bold editor-strong:block text-left max-w-full w-fit" dir="">
                            <h1>WePadel
                                <strong>Group Companies</strong>
                            </h1>
                        </div>
                        <div class="editor editor-base md:editor-sm editor-headings:font-bold editor-headings:text-[#ffffff] editor-headings:leading-tight xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] xl:editor-h1:text-[40px] editor-h1:text-[44px] editor-p:leading-tight editor-p:text-[#231F20]/60 editor-p:text-[24px] md:editor-p:text-[22px] sm:editor-p:text-[20px] xs:sm:editor-p:text-[18px] editor-p:font-normal editor-li:text-[#231F20]/40 editor-li:font-medium editor-li:text-[20px]  editor-ul:pl-[25px] editor-ul:px-[25px] [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] md:max-w-full w-full text-right max-w-[610px] ml-auto" dir="">
                            <p>Wepadel offers you a unique padel experience by using Integral Group's strong industry experience to meet the needs of the industry and provide professional padel court service to its customers!</p>
                        </div>

                    </div>
                    <div class="wrapper flex flex-wrap justify-center gap-[30px] scrollreveal mb-[50px] [&_.ref-box:nth-child(-n+4)]:[flex-basis:calc(100%_/_6);] xl:[&_.ref-box:nth-child(-n+4)]:[flex-basis:calc(100%_/_5);] xs:grid xs:grid-cols-2 xs:gap-[15px]">
                        <?php for ($i = 1; $i < 15; $i++) : ?>
                            <div class="ref-box group w-fit h-full group/detail min-w-[200px] xs:min-w-full flex ">
                                <div class="image-field">
                                    <div class="image h-[125px] max-w-[200px] m-auto overflow-hidden duration-300 border border-solid border-transparent group-hover/detail:border-[#005AA5]/70 rounded-[20px] p-[5px] flex justify-center relative group/img  grayscale-[1] brightness-[1] opacity-60 group-hover/detail:grayscale-0 group-hover/detail:brightness-100 group-hover/detail:opacity-100">
                                        <img loading="lazy" src="../assets/image/other/logo-<?= $i ?>.png" alt="" class="w-full h-full group-hover:scale-110 m-auto object-contain object-center duration-450 ">
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </section>
            <section class="news-other mt-[100px]">
            <div class="container max-w-[1440px] scrollreveal">
                <div class="title flex justify-between items-center mb-[40px] md:mb-[30px]" dir="">
                    <div class="editor title editor-headings:duration-450 group-hover/mpb:editor-headings:text-white  editor-headings:mb-0 editor-headings:font-light editor-headings:leading-snug xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] editor-h1:text-[40px] editor-strong:duration-450 group-hover/mpb:editor-strong:text-white editor-strong:text-[40px] xl:editor-strong:text-[34px] lg:editor-strong:text-[20px] duration-450 font-bold editor-headings:text-transparent editor-headings:bg-clip-text editor-headings:bg-gradient-to-r editor-headings:from-[#0055A3] editor-headings:from-40% editor-headings:to-[#C7234B] editor-headings:to-75% editor-strong:text-transparent editor-strong:bg-clip-text editor-strong:bg-gradient-to-r editor-strong:from-[#0055A3] editor-strong:from-25% editor-strong:to-[#C7234B] editor-strong:font-bold editor-strong:block text-left max-w-full w-fit">
                        <h1>Featured
                            <strong>News & Blogs</strong>
                        </h1>
                    </div>
                    <div class="button-field flex justify-center flex-wrap gap-[25px] z-[2] relative">
                        <a href="" class="button group min-w-[180px] lg:min-w-[150px] xs:lg:min-w-[120px] justify-center items-center w-fit h-[50px] flex px-[30px] bg-[#0055A3] relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-[#0055A3] before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-white hover:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center ">
                            <div class="text-[18px]  xs:text-[16px] font-normal font-inter flex items-center text-white group-hover:text-[#0055A3] relative z-2 duration-450 w-max">All News</div>
                        </a>
                    </div>

                </div>
                <div class="swiper news-swip !py-[10px] relative flex flex-col justify-center md:justify-start w-full mx-auto ">
                    <div class="swiper-wrapper ">
                        <?php foreach ($blogs as $blog) : ?>
                            <div class="swiper-slide !flex content-center items-center justify-center ">
                                <div class="media-box w-full h-full duration-450">
                                    <a href="{{ env('HTTP_DOMAIN') .'/'. getUrl('blog_url', app()->getLocale()) .'/'. $blog->seo_url }}" class="content group/blog relative [&:hover_.text-field]:text-white [&:hover_.icon-arrow-right-short]:text-white w-full h-full duration-450 block">
                                        <div class="button-field absolute right-0 top-0 z-[1]">
                                            <div class="button group/button h-[90px] w-[90px] xs:h-[70px] xs:w-[70px] flex justify-center rounded-tr-[30px] rounded-bl-[30px] bg-[#0055A3] border border-solid border-black/20 relative space-x-[15px] duration-500 overflow-hidden isolate opacity-0 scale-75 group-hover/blog:scale-100 group-hover/blog:opacity-100 origin-top-right">
                                                <div class="icon-arrow-right-2 text-[18px] 
                                                    xs:text-[16px] flex items-center relative z-2 -rotate-45 text-white duration-450"></div>
                                            </div>
                                        </div>
                                        <div class="image-field relative ">
                                            <div class="image relative w-full h-[350px] md:h-[300px] bg-[#D6D6D6] duration-450 overflow-hidden isolate rounded-[30px]">
                                                <div class="gradient duration-450 bg-black/20 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-hover/blog:opacity-100"></div>
                                                <div class="gradient [background:linear-gradient(180deg,rgba(0,_0,_0,_0.00)_35%,_rgba(0,_0,_0,_.8)_100%);] absolute bottom-0 left-0 w-full h-full z-0 pointer-events-none translate-z-0 "></div>
                                                <img src="<?= env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'blog_images_folder'], app()->getLocale()).'/'.$blog->image  ?>" alt="" class="w-full h-full object-cover object-center duration-450">
                                            </div>
                                            <div class="text-field absolute bottom-0 left-0 p-[20px_20px_30px_50px] sm:p-[30px] overflow-hidden isolate group-[&.is-safari]/body:[transform:translateZ(0)_translate3d(0,0,0);]">
                                                <p class=" w-fit flex justify-center items-center gap-[8px] text-white/75 font-medium group-hover/blog:text-white duration-450 mb-[8px]">
                                                    <span>{{ date('d/m/Y', $blog->created_at) }}</span>
                                                </p>
                                                <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-white group-hover/slide:editor-headings:text-white editor-h1:font-bold editor-headings:font-normal editor-headings:line-clamp-2 editor-p:text-[14px] editor-p:font-light editor-p:text-white editor-p:mb-0 editor-p:duration-450 text-white mr-auto w-full sm:[&_br]:hidden">
                                                    <h2>{{$blog->title}}</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="controller flex gap-[15px] justify-end items-center w-full h-full my-[40px] md:my-[30px]">
                    <div class="news-carousel-prev swiper-slide-prev pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                        <div class="icon group/item flex items-center justify-center w-[60px] h-[60px] xs:w-[40px] xs:h-[40px] rounded-full cursor-pointer duration-500 border border-solid border-[#0055A3] bg-white hover:bg-[#0055A3] group">
                            <div class="icon-arrow-left text-[#0055A3] text-[16px] flex items-center justify-center group-hover/item:text-white duration-450 group-hover/item:translate-x-[-3px]"></div>
                        </div>
                    </div>

                    <div class="news-carousel-next swiper-slide-next pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                        <div class="icon group/item flex items-center justify-center w-[60px] h-[60px] xs:w-[40px] xs:h-[40px] rounded-full cursor-pointer duration-500 border border-solid border-[#0055A3] bg-white hover:bg-[#0055A3] group">
                            <div class="icon-arrow-right text-[#0055A3] text-[16px] flex items-center justify-center group-hover/item:text-white duration-450 group-hover/item:translate-x-[3px]"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
    </section>
</main>
@endsection