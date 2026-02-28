@extends('layouts.main')

@section('content')
<?php 
$pageTitle = $product->title;
$breadcrumbTitle = $product->title;
?>
<?php $code = \App\Models\Code::where('lang', app()->getLocale())->first(); ?>

<main class="main-field header-space">
    <section class="content page-tabs relative">
        <div class="container max-w-[1440px] ">
            <div class="nav-content title-content py-[12.5px] md:py-[6px] f-nav w-full fixed left-0 top-[160px] z-[9] duration-450 bg-gradient-to-r from-[#005AA5] to-[#C7234B] ">
                <div class="wrapper flex justify-between max-w-[1440px] m-auto px-[30px]">
                    <!-- NAVIGATION -->
                    <ul class="navigation flex-wrap w-full gap-[10px] flex items-center md:hidden">
                        <li class="flex items-center">
                            <a href="javascript:;" class="flex group">
                                <span class="text text-white text-[20px] md:text-[18px] xs:text-[16px] font-medium group-hover:text-white/80 duration-450 leading-tight">{{$product->category->title}}</span>
                            </a>
                        </li>
                        <li class="split relative flex items-center h-[12px]">
                            <span class="text text-white text-[20px] md:text-[18px] xs:text-[16px] font-medium group-hover:text-white/80 duration-450 leading-tight">/</span>
                        </li>
                        <li class="flex items-center">
                            <a href="javascript:;" class="flex group">
                                <span class="text text-white text-[20px] md:text-[18px] xs:text-[16px] font-medium group-hover:text-white/80 duration-450 leading-tight">{{$product->title}}</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tabs tabs-horizontal tabs-horizontal-4 nav w-full" role="nav">
                        <div class=" w-full md:max-w-full overflow-auto scrollbar scrollbar-w-[8px] scrollbar-h-[5px] scrollbar-track-rounded-[5px] scrollbar-thumb-rounded-[5px] scrollbar-thumb-[#0055A3]/50 scrollbar-track-primary-200 md:py-[7px]" id="menu-center">
                            <ul class="flex items-center gap-[30px] w-max ml-auto">
                                <li><a data-target="#general" class="scrollable cursor-pointer text-white/60 [&.active]:text-white hover:text-white duration-450 active">{{getStaticText(31)}}</a></li>
                                <li><a data-target="#technic" class="scrollable cursor-pointer text-white/60 [&.active]:text-white hover:text-white duration-450 ">{{getStaticText(32)}}</a></li>
                                <li><a data-target="#facilities" class="scrollable cursor-pointer text-white/60 [&.active]:text-white hover:text-white duration-450 ">{{getStaticText(33)}}</a></li>
                                <li><a data-target="#FAQ" class="scrollable cursor-pointer text-white/60 [&.active]:text-white hover:text-white duration-450 ">{{getStaticText(34)}}</a></li>
                                <li>
                                    <a href="<?= env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'product_images_folder'], app()->getLocale()).'/'.$product->pdf_file  ?>" target="_blank" class="button group min-w-[150px] justify-center items-center w-fit h-[45px] flex px-[30px] bg-[#D9D9D9]/20 relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-transparent before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-white hover:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center rtl:gap-2">
                                        <div class="icon text-[12px] flex items-center relative z-2 duration-450 ">
                                            <div class="icon-download text-[18px] flex items-center text-white relative z-2 duration-450 group-hover:text-[#0055A3] group-hover:-translate-x-1"></div>
                                        </div>
                                        <div class="text-[18px]  xs:text-[16px] font-normal font-inter flex items-center text-white group-hover:text-[#0055A3] relative z-2 duration-450 w-max">{{getStaticText(26)}}</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper ">
            <section class="pt-[70px]">
                <section class="prod-img">
                    <div class="container max-w-full px-0">
                        <div class="club-content-swiper relative" dir="">
                            <div class="content bg-cover bg-center relative overflow-hidden isolate h-[calc(100vh-230px)] lg:h-[calc(100vh-230px)] md:h-[calc(100vh-250px)] xs:h-[calc(100vh-250px)]">
                                <div class="text-container absolute z-[5] top-[45%] translate-y-[-50%] left-[50%] translate-x-[-50%] w-full max-w-[1440px] mx-auto px-[30px]  group-[&.left-slide]/slide:text-left group-[&.right-slide]/slide:text-right">
                                    <div class="text-field relative xl:pl-[50px] xs:pl-0">
                                        <div class="editor editor-xl md:editor-lg xs:editor-base editor-h1:text-[60px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-h2:text-[44px] xl:editor-h2:text-[40px] lg:editor-h2:text-[34px] md:editor-h2:text-[30px] sm:editor-h2:text-[26px] xs:editor-h2:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:mb-[10px] editor-headings:text-white group-hover/slide:editor-headings:text-white editor-h1:font-bold editor-headings:font-normal editor-headings:leading-[1.25] editor-headings:line-clamp-3 editor-p:text-[20px] editor-p:font-light editor-p:text-white editor-p:mb-0 editor-p:duration-450  text-white mr-auto w-full sm:[&_br]:hidden md:editor-p:text-[18px] xs:editor-p:text-[16px] max-w-full">
                                            <h2>{{$product->category->title}}</h2>
                                            <h1>{{$product->title}}</h1>

                                        </div>
                                        <div class="scroll-down group/scroll scrollable absolute top-[50px] -left-[100px] xl:-left-[40px] z-20 cursor-pointer space-y-[10px] flex flex-col items-start justify-start -rotate-90 opacity-70 hover:opacity-100 duration-450 xs:hidden" data-target=".tabmenuscroll">
                                            <div class="text text-[16px] text-white duration-450 translate-x-5 group-hover/scroll:translate-x-0">{{getStaticText(35)}}</div>
                                            <div class="line w-10 h-[2px] left-0 bg-white duration-500 group-hover/scroll:w-full"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image h-full w-full">
                                    <img loading="lazy" src="<?= env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'product_images_folder'], app()->getLocale()).'/'.$product->image  ?>" alt="" class="h-full object-center object-cover w-full">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>

            <section class="pb-[100px] md:pb-[50px] overflow-hidden isolate relative tabmenuscroll" id="general">
                <div class="bg w-[600px] h-[600px] sm:w-[300px] sm:h-[300px] rounded-full absolute right-0 top-0 translate-y-[-40%] translate-x-[40%] pointer-events-none z-[5] sm:hidden">
                    <img loading="lazy" src="../assets/image/other/Ellipsedty-1.png" alt="" class="h-full object-center object-contain w-full">
                </div>

                <div class="bg w-[500px] h-[500px] rounded-full absolute right-[40%] top-[70%] translate-y-[-50%] pointer-events-none opacity-70 ">
                    <img loading="lazy" src="../assets/image/other/Ellipsedty-3.png" alt="" class="h-full object-center object-contain w-full">
                </div>
                <div class="bg w-[500px] h-[500px] rounded-full absolute -right-[10%] bottom-0  pointer-events-none translate-y-[50%] ">
                    <img loading="lazy" src="../assets/image/other/Ellipsedty-2.png" alt="" class="h-full object-center object-contain w-full">
                </div>
                <section class="prod-carousel ">
                    <div class="container max-w-[1440px]">
                        <div class="wrapper grid grid-cols-[minmax(0,5fr)_minmax(0,7fr)] lg:grid-cols-1 gap-[50px] xs:gap-[30px]" dir="">
                            <div class="product-content-swiper relative mt-[100px] sm:mt-[50px]">
                                <div class="button video-button group/vdbutton [&.active]:text-red-500 flex justify-start items-center cursor-pointer w-fit h-fit my-auto">
                                    <div class="flex items-center">
                                        <div class="toggleButton relative mb-[50px]">
                                            <div class="block border border-solid border-[#D9D9D9] w-[132px] h-[65px] rounded-[20px]"></div>
                                            <div class="toggleDot dot absolute border-[2.5px] border-solid border-[#C7234B] left-0 top-0 bg-white w-[70px] h-[65px] transition group-[&.active]/vdbutton:translate-x-[62px] rounded-[20px]">

                                            </div>
                                            <div class="icon-photo text-[30px] flex items-center text-[#C7234B] group-[&.active]/vdbutton:text-[#231F20]/40 absolute top-[50%] left-[18px] translate-y-[-50%] z-2 duration-450 group-hover:text-[#0055A3] group-hover:-translate-x-1 ">
                                                <span class="absolute -left-[10px] font-light -bottom-[25px] translate-y-[100%] text-[16px] text-[#C7234B] group-[&.active]/vdbutton:text-[#656565]/50 duration-450">{{getStaticText(37)}}</span>
                                            </div>
                                            <div class="icon-video text-[30px] flex items-center text-[#231F20]/40 group-[&.active]/vdbutton:text-[#C7234B] absolute top-[50%] right-[18px] translate-y-[-50%] z-2 duration-450 group-hover:text-[#0055A3] group-hover:-translate-x-1">
                                                <span class="absolute -left-[10px] font-light -bottom-[25px] translate-y-[100%] text-[16px] text-[#656565]/50 group-[&.active]/vdbutton:text-[#C7234B] duration-450">{{getStaticText(38)}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-container prod-top relative w-full  mx-auto overflow-hidden h-[350px] lg:h-[350px] xs:h-[250px]">
                                    <div class="swiper-wrapper">
                                        @foreach($product->gallery as $image)
                                        <div class="swiper-slide bg-cover bg-center relative overflow-hidden isolate" data-video="../assets/image/other/tennis.mp4">
                                            <div class="image h-full w-full z-[5] relative">
                                                <a href="<?= env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'product_images_folder'], app()->getLocale()).'/'.$image->image  ?>" class="image-zoom group/popup overflow-hidden isolate" data-fancybox="gallery">
                                                    <img loading="lazy" src="<?= env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'product_images_folder'], app()->getLocale()).'/'.$image->image  ?>" alt="" class="h-full object-center object-contain w-full">
                                                </a>
                                            </div>

                                            <div class="video group/video absolute top-0 left-0 w-full h-full">

                                            </div>

                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="thumbs-content rounded-[30px] w-full m-auto mt-[30px] xs:mt-0 z-[1] flex px-[35px] xs:px-[15px] gap-[25px] max-w-[575px] mx-auto">
                                    <div class="content w-full md:px-[50px] xs:px-[10px] m-auto relative px-[50px]">
                                        <div class="swiper-container prod-thumbs relative w-full mx-auto overflow-hidden h-[140px] box-border py-[25px] xs:py-[15px]">
                                            <div class="swiper-wrapper">
                                                @foreach($product->gallery as $image)
                                                <div class="swiper-slide group/slide select-none !h-[100px] flex items-center justify-center opacity-[.65] rounded-[10px] [&.swiper-slide-active]:opacity-100 bg-cover bg-center !transition-all !duration-500 cursor-pointer">
                                                    <div class="img-field relative w-full h-full mb-[15px]">
                                                        <div class="image h-full w-full">
                                                            <img loading="lazy" src="<?= env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'product_images_folder'], app()->getLocale()).'/'.$image->image  ?>" alt="" class="h-full object-center object-contain w-full">
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="controller flex gap-[15px] justify-between items-center w-full h-full absolute left-0 top-0 z-[2] pointer-events-none">
                                            <div class="prod-button-prev swiper-slide-prev  pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none xs:relative xs:-left-[15px]">
                                                <div class="icon group/item flex items-center justify-center w-[40px] h-[40px] rounded-full cursor-pointer duration-500 border border-solid border-transparent bg-[#E0E0E0] hover:bg-[#0055A3] group">
                                                    <div class="icon-chevron-left text-[#231F20]/50 text-[12px] flex items-center justify-center group-hover/item:text-white duration-450 group-hover/item:translate-x-[-3px]"></div>
                                                </div>
                                            </div>
                                            <div class="prod-button-next swiper-slide-next  pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none xs:relative xs:-right-[15px]">
                                                <div class="icon group/item flex items-center justify-center w-[40px] h-[40px] rounded-full cursor-pointer duration-500 border border-solid border-transparent bg-[#E0E0E0] hover:bg-[#0055A3] group">
                                                    <div class="icon-chevron-right text-[#231F20]/50 text-[12px] flex items-center justify-center group-hover/item:text-white duration-450 group-hover/item:translate-x-[3px]"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-field p-[75px] bg-[#F8F8F8] rounded-l-[30px] relative before:absolute before:right-[-200%] before:top-0 before:w-[200%] before:h-full before:bg-[#F8F8F8] pr-12 lg:p-[50px] sm:p-[25px] md:before:hidden">
                                <div class="wrapper grid grid-cols-[minmax(0,7fr)_minmax(0,5fr)] sm:grid-cols-1">
                                    <div class="editor title editor-headings:duration-450 group-hover/mpb:editor-headings:text-white  editor-headings:mb-0 editor-headings:font-bold xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] editor-h1:text-[40px] editor-strong:duration-450 group-hover/mpb:editor-strong:text-white editor-strong:text-[40px] xl:editor-strong:text-[34px] lg:editor-strong:text-[20px] editor-headings:leading-[1.25] duration-450 font-bold w-full editor-headings:text-transparent editor-headings:bg-clip-text editor-headings:bg-gradient-to-l editor-headings:from-[#C7234B] editor-headings:from-40% editor-headings:to-[#0055A3] editor-headings:to-75% editor-strong:text-transparent editor-strong:bg-clip-text editor-strong:bg-gradient-to-l editor-strong:from-[#0055A3] editor-strong:from-25% editor-strong:to-[#C7234B] editor-strong:font-bold editor-strong:block max-w-full">
                                        <h1>{{$product->title}}
                                            {{getStaticText(31)}}</h1>
                                    </div>
                                    <div class="button-field w-full h-full">
                                        <a href="" class="button group w-fit block ml-auto">
                                            <div class="text-[20px] xs:text-[18px] font-light flex gap-[20px] justify-center items-center w-fit text-[#656565] hover:text-[#C7234B] duration-450 ">
                                                <div class="icon-back text-[20px] lg:text-[18px] md:text-[16px] text-[#656565] group-hover:text-[#C7234B] duration-450 relative z-20 flex group-hover:scale-90 group-hover:text-sushi-400"></div>
                                                {{getStaticText(36)}}
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="split  m-auto w-full h-[2px] bg-gradient-to-r from-[#005AA5] to-[#C7234B]  z-[3] flex my-[30px]"></div>
                                <div class="editor editor-base md:editor-sm editor-headings:font-light editor-headings:text-[#ffffff] editor-headings:leading-tight xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] xl:editor-h1:text-[40px] editor-h1:text-[40px] editor-h2:text-[28px] sm:editor-h2:text-[24px] xs:editor-h2:text-[22px] editor-p:leading-tight editor-p:text-[#231F20]/45 editor-p:font-light editor-p:text-[20px] sm:editor-p:text-[18px] xs:editor-p:text-[16px] editor-li:text-[#231F20]/40 editor-li:font-light editor-li:text-[20px]  editor-ul:pl-[25px] editor-ul:px-[25px] [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] max-w-[600px] lg:max-w-full w-full">
                                    <p>{!!$product->description!!}</p>
                                </div>
                                <div class="color-content mt-[50px]">
                                    <div class="title flex items-center">
                                        <div class="text text-[24px] text-[#0055A3] font-normal border-r border-solid border-black/20 pr-5 mr-5">
                                            {{getStaticText(39)}}
                                        </div>
                                        <div class="color-select text-[#C7234B] [&.green]:text-lime-600 [&.blue]:text-blue-600 [&.red]:text-red-600 duration-450">
                                            Padel Turf Red
                                        </div>
                                    </div>
                                    <ul class="colors mt-[20px] flex gap-[15px]">
                                        <li class="color-item cursor-pointer duration-450 p-[5px] w-fit h-fit border border-solid border-transparent [&.active]:border-[#C7234B] rounded-full" data-title="Padel Turf Green">
                                            <div class="img h-[54px] w-[54px] relative z-[1] duration-450 rounded-full overflow-hidden isolate">
                                                <img class="h-full w-full object-cover object-top duration-500" src="../assets/image/other/green.jpg" alt="">
                                            </div>
                                        </li>
                                        <li class="color-item cursor-pointer duration-450 p-[5px] w-fit h-fit border border-solid border-transparent [&.active]:border-[#C7234B] rounded-full" data-title="Padel Turf Blue">
                                            <div class="img h-[54px] w-[54px] relative z-[1] duration-450 rounded-full overflow-hidden isolate">
                                                <img class="h-full w-full object-cover object-top duration-500" src="../assets/image/other/blue.jpg" alt="">
                                            </div>
                                        </li>
                                        <li class="color-item cursor-pointer duration-450 p-[5px] w-fit h-fit border border-solid border-transparent [&.active]:border-[#C7234B] rounded-full active" data-title="Padel Turf Red">
                                            <div class="img h-[54px] w-[54px] relative z-[1] duration-450 rounded-full overflow-hidden isolate">
                                                <img class="h-full w-full object-cover object-top duration-500" src="../assets/image/other/red.jpg" alt="">
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="button-field flex flex-wrap gap-[25px] mt-[50px]">
                                        <a href="javascript:;" data-target=".contact-form" class="button group scrollable min-w-[180px] lg:min-w-[150px] xs:lg:min-w-[120px] justify-center items-center w-fit h-[50px] flex px-[30px] bg-[#0055A3] relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-[#0055A3] before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-white hover:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center ">
                                            <div class="text-[18px]  xs:text-[16px] font-normal font-inter flex items-center text-white group-hover:text-[#0055A3] relative z-2 duration-450 w-max">{{getStaticText(40)}}</div>
                                        </a>
                                        <a href="<?= env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'product_images_folder'], app()->getLocale()).'/'.$product->pdf_file  ?>" target="_blank" class="button group min-w-[180px] lg:min-w-[150px] xs:lg:min-w-[120px] justify-center items-center w-fit h-[50px] flex px-[30px] bg-white relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full  before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-[#0055A3] hover:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center border border-solid border-[#0055A3]">
                                            <div class="icon text-[12px] flex items-center relative z-2 duration-450 ">
                                                <div class="icon-download text-[18px] flex items-center text-[#0055A3] relative z-2 duration-450 group-hover:text-white group-hover:-translate-x-1"></div>
                                            </div>
                                            <div class="text-[18px]  xs:text-[16px] font-normal font-inter flex items-center text-[#0055A3] group-hover:text-white relative z-2 duration-450 w-max">{{getStaticText(26)}}</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <section class="project-info py-[100px] md:py-[50px] relative overflow-hidden isolate " id="technic">
                <div class="bg w-[200px] h-[200px] absolute left-[45%] top-[65%] translate-y-[-50%] pointer-events-none z-[2]">
                    <img loading="lazy" src="../assets/image/other/Ellipsedty-5.png" alt="" class="h-full object-center object-contain w-full">
                </div>
                <div class="bg w-[600px] h-[600px] sm:w-[300px] sm:h-[300px] rounded-full absolute left-[8%] top-[40%] translate-y-[-50%] pointer-events-none z-[2]">
                    <img loading="lazy" src="../assets/image/other/Ellipsedty-4.png" alt="" class="h-full object-center object-contain w-full">
                </div>
                <div class="icons overflow-hidden absolute left-[70px] top-[15%] translate-y-[-50%] pointer-events-none z-[5]">
                    <div class="icon icon-arrow-down text-[100px] w-[105px] h-[100px] block leading-none duration-350 text-transparent bg-clip-text bg-gradient-to-b from-[#FFFFFF] to-white/0 opacity-10"></div>
                </div>
                <div class="icons overflow-hidden absolute -left-[100px] top-[40%] translate-y-[-50%] pointer-events-none z-[5]">
                    <div class="icon icon-arrow-down text-[250px] w-[255px] h-[250px] block leading-none duration-350 text-transparent bg-clip-text bg-gradient-to-b from-[#FFFFFF] to-white/0 opacity-10"></div>
                </div>
                <div class="gradient duration-450 bg-gradient-to-r from-[#0055A3] from-25% to-[#005AA5]/60 absolute top-0 left-0 w-full h-[calc(100%-150px)] xl:h-full md:h-full z-[0] "></div>
                <div class="container max-w-[1440px] relative z-[3]">
                    <div class="text-field mt-[100px] mb-[200px] lg:mt-0 lg:mb-[100px] md:mb-[50px]" dir="">
                        <div class="wrapper flex xs:flex-wrap justify-center gap-[50px] scrollreveal">
                            <div class="image h-[125px] w-fit">
                                <img loading="lazy" src="../assets/image/other/karekod.png" alt="" class="h-full object-center object-contain w-full">
                            </div>
                            <div class="editor editor-lg md:editor-sm editor-headings:font-bold editor-headings:leading-[1.1] editor-headings:text-white xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] xl:editor-h1:text-[40px] editor-headings:text-[42px] xl:editor-headings:text-[40px] lg:editor-headings:text-[34px] md:editor-headings:text-[30px] sm:editor-headings:text-[26px] xs:editor-headings:text-[24px] editor-p:leading-tight editor-p:text-[#D9D9D9] editor-p:text-[26px] sm:editor-p:text-[22px] xs:editor-p:text-[20px]  editor-li:text-[#231F20]/40 editor-li:font-medium editor-li:text-[20px]  editor-ul:pl-[25px] editor-ul:px-[25px]
                     [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px]  lg:max-w-full w-full">
                                <h1>{{getStaticText(41)}}</h1>
                                <p>Origin Discover Padel Court is covered with 10x20 meters of green artificial turf and surrounded by steel construction, glass panels, and steel mesh. It is mostly used outdoors.</p>
                            </div>
                        </div>

                    </div>
                    <div class="wrapper grid grid-cols-[minmax(0,6fr)_minmax(0,7fr)] md:grid-cols-1 relative gap-[100px] lg:gap-[50px]">
                        <div class="project-detail relative xs:m-auto xs:w-full !h-[650px] xl:!h-[550px] lg:!h-[500px] md:!h-[400px] xs:!h-[350px] rounded-[30px] overflow-hidden isolate">
                            <!-- project-swiper'ın swiper-slide adedi kadar detail-box oluşturulmalıdır. -->
                            <?php foreach ($product->features as $key => $feature) : ?>
                            <div class="detail-box {{ $key == 0 ? 'active' : '' }} opacity-0 absolute translate-y-[20px] duration-450 [visibility:hidden;] [&.active]:opacity-100 [&.active]:translate-y-0 [&.active]:delay-[450ms] [&.active]:visible gap-[25px] w-full h-full z-[5]" data-id="{{$key}}">
                                <div class="img h-[650px] xl:h-[550px] lg:h-[500px] md:h-[400px] xs:h-[350px] w-full overflow-hidden rounded-[30px] image-zoom">
                                    <img class="h-full w-full object-cover object-center duration-500" src="{{ env('HTTP_DOMAIN').'/'. getFolder(['uploads_folder', 'product_images_folder'], $feature->lang).'/'. $feature->icon}}" alt="">
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="carousel-content">
                            <div class="title flex justify-between items-center sm:flex-col m-auto relative z-[2] pt-[50px] gap-[20px] md:gap-[15px]">
                                <div class="icon icon-arrow-down text-[34px] h-[34px] block leading-none duration-350 text-[#C7234B] absolute top-[0px] -left-[30px] md:left-0"></div>
                                <div class="editor editor-base md:editor-sm editor-headings:font-bold editor-headings:text-[#ffffff] editor-headings:leading-tight xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] xl:editor-h1:text-[40px] editor-h1:text-[40px] editor-p:leading-tight editor-p:text-[#B6D3E4] editor-p:text-[24px] sm:editor-p:text-[22px] xs:editor-p:text-[20px] editor-li:text-[#231F20]/40 editor-li:font-medium editor-li:text-[20px]  editor-ul:pl-[25px] editor-ul:px-[25px] [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] max-w-full w-full md:pl-[35px] sm:pl-0 text-left" dir="">
                                    <h1>{{getStaticText(32)}}</h1>
                                </div>
                                <div class="controller flex gap-[30px] justify-center items-center max-w-[100px] w-full h-full sm:justify-start sm:max-w-full xs:gap-[15px]">
                                    <div class="ri-prev swiper-slide-prev  pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                        <div class="icon group/item flex items-center justify-center w-[40px] h-[40px] rounded-full cursor-pointer duration-500 border border-solid border-transparent bg-[#E0E0E0] hover:bg-[#0055A3] group">
                                            <div class="icon-chevron-left text-[#231F20]/50 text-[12px] flex items-center justify-center group-hover/item:text-white duration-450 group-hover/item:translate-x-[-3px]"></div>
                                        </div>
                                    </div>
                                    <div class="ri-next swiper-slide-next  pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                        <div class="icon group/item flex items-center justify-center w-[40px] h-[40px] rounded-full cursor-pointer duration-500 border border-solid border-transparent bg-[#E0E0E0] hover:bg-[#0055A3] group">
                                            <div class="icon-chevron-right text-[#231F20]/50 text-[12px] flex items-center justify-center group-hover/item:text-white duration-450 group-hover/item:translate-x-[3px]"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project-swiper swiper rounded-[30px] !py-[30px] strecth-to-right">
                                <div class="swiper-wrapper justify-start -left-[41%] xl:-left-[37%] lg:-left-[33%] md:-left-[32%] sm:-left-[31%] xs:left-0">
                                    <!-- project-text-slider'ın swiper-slide adedi kadar swiper-slide oluşturulmalıdır. -->
                                    <?php foreach ($product->features as $feature) : ?>
                                        <div class="swiper-slide group/slide !duration-450 !transition-all [&.swiper-slide-active]:opacity-100  [&.swiper-slide-active]:!scale-100 [&.swiper-slide-active]:!visible [&.swiper-slide-next]:opacity-100 [&.swiper-slide-next]:!scale-100 [&.swiper-slide-next]:!visible !pointer-events-auto">
                                            <div class="content relative rounded-[30px] ">
                                                <div class="text-field m-auto ">
                                                    <div class="sport-box bg-[#F6F6F6]/5 rounded-[30px] p-[30px] relative overflow-hidden border border-solid border-transparent hover:border-white/50 group-[&.swiper-slide-active]/slide:border-white/50 duration-450 h-[190px] flex flex-col justify-center">
                                                        <div class="gradient duration-450 bg-gradient-to-br from-white from-15% to-white/50 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-[.swiper-slide-active]/slide:opacity-20"></div>
                                                        <div class="gradient duration-450 [background:linear-gradient(180deg,_rgba(247,247,247,0.06)_0%,_rgba(247,247,247,0)_100%);]  absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-100 group-[.swiper-slide-active]/slide:opacity-0"></div>
                                                        <div class="img h-[50px] group-[&.swiper-slide-active]/slide:h-[100px] relative z-[1] duration-450 w-full overflow-hidden">
                                                            <img class="h-full w-full object-contain object-center duration-500" src="{{ env('HTTP_DOMAIN').'/'. getFolder(['uploads_folder', 'product_images_folder'], $feature->lang).'/'. $feature->image}}" alt="">
                                                        </div>
                                                        <div class="title text-[18px] font-normal h-[55px] group-[&.swiper-slide-active]/slide:h-0 group- relative[&.swiper-slide-active]/slide:opacity-0 duration-450 text-white text-center line-clamp-2" dir="">
                                                            {{$feature->title}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="swiper project-text-slider">
                                <div class="swiper-wrapper">
                                    <!-- project-swiper'ın swiper-slide adedi kadar swiper-slide oluşturulmalıdır. -->
                                     <?php foreach ($product->features as $feature) : ?>
                                        <div class="swiper-slide p-6 sm:p-3">
                                            <div class="text-field">
                                                <div class="editor editor-base md:editor-sm editor-headings:font-light editor-headings:text-[#ffffff] editor-headings:leading-tight xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] xl:editor-h1:text-[40px] editor-h1:text-[40px] editor-h2:text-[28px] sm:editor-h2:text-[24px] xs:editor-h2:text-[22px] editor-p:leading-tight editor-p:text-[#B6D3E4] editor-p:font-light editor-p:text-[20px] sm:editor-p:text-[18px] xs:editor-p:text-[16px] editor-li:text-[#231F20]/40 editor-li:font-light editor-li:text-[20px]  editor-ul:pl-[25px] editor-ul:px-[25px] [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] max-w-[600px] md:max-w-full w-full" dir="">
                                                    <h2>{{$feature->title}}</h2>
                                                    <p>{{$feature->description}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="installation position-field  py-[100px] md:py-[50px]" id="facilities">
                <div class="container max-w-[1440px]">
                    <div class="wrapper grid grid-cols-[minmax(0,4fr)_minmax(0,9fr)] md:grid-cols-1 gap-[50px] ">
                        <div class="desp-contents" dir="">
                            <div class="text-content relative mt-[30px] mb-[50px]">
                                <div class="icon icon-arrow-down text-[34px] h-[34px] block leading-none duration-350 text-[#C7234B] absolute -top-[30px] -left-[30px] md:left-0 md:-top-[50px]"></div>
                                <div class="editor title editor-headings:duration-450 group-hover/mpb:editor-headings:text-white  editor-headings:mb-0 editor-headings:font-bold xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] editor-h1:text-[40px] editor-strong:duration-450 group-hover/mpb:editor-strong:text-white editor-strong:text-[40px] xl:editor-strong:text-[34px] lg:editor-strong:text-[20px] leading-tight duration-450 font-bold w-full editor-headings:text-transparent editor-headings:bg-clip-text editor-headings:bg-gradient-to-l editor-headings:from-[#C7234B] editor-headings:from-40% editor-headings:to-[#0055A3] editor-headings:to-75% editor-strong:text-transparent editor-strong:bg-clip-text editor-strong:bg-gradient-to-l editor-strong:from-[#0055A3] editor-strong:from-25% editor-strong:to-[#C7234B] editor-strong:font-bold editor-strong:block max-w-full">
                                    <h1>{{$product->title}}
                                        Installation</h1>
                                </div>
                            </div>
                            <div class="description-field relative duration-450">
                                @foreach($product->features2 as $key => $feature)
                                    <div class="desc-box w-full {{ $key == 0 ? 'active' : ''}} absolute opacity-0 [visibility:hidden;] translate-y-[30px] duration-450 [&.active]:!opacity-100 [&.active]:!visible [&.active]:delay-[450ms] [&.active]:!translate-y-0 [&.active]:duration-450 [&.active]:z-[1]" box-id="{{$key}}">
                                        <div class="text-field relative ">
                                            <div class="editor editor-base md:editor-sm editor-headings:font-normal editor-headings:text-[#0055A3] editor-headings:leading-tight xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] xl:editor-h1:text-[40px] editor-h1:text-[40px] editor-h2:text-[28px] sm:editor-h2:text-[24px] xs:editor-h2:text-[22px] editor-p:leading-tight editor-p:text-[#656565] editor-p:font-light editor-p:text-[20px] sm:editor-p:text-[18px] xs:editor-p:text-[16px] editor-li:text-[#656565] editor-li:font-light editor-li:text-[20px]  editor-ul:pl-[25px] editor-ul:px-[25px] [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] max-w-[600px] md:max-w-full w-full">
                                                <h2>{{$feature->title}} </h2>
                                                <p>{{$feature->description}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="text-field w-full select-field map-list grid grid-cols-4 lg:grid-cols-3 xs:flex xs:flex-wrap xs:justify-center gap-[30px] sm:gap-[20px] xs:gap-[10px] scrollreveal">
                            @foreach($product->features2 as $key => $feature2)
                                <a class="map-box group/sport flex items-center justify-center scrollable-mob active" data-target=".installation" href="javascript:;" data-branch-index="{{$key}}">
                                    <div class="sport-box w-[210px] h-[220px] sm:w-[160px] sm:h-[150px] xs:w-[100px] xs:h-[110px] [background:linear-gradient(180deg,_rgba(217,217,217,0.3)_0%,_rgba(217,217,217,0)_100%);] rounded-[30px] p-[30px] sm:p-[20px] xs:p-[5px] xs:py-[15px] relative overflow-hidden border border-solid border-transparent hover:border-white/50 group-[&.swiper-slide-active]/slide:border-white/50 duration-450 flex flex-col justify-center hover:shadow-md">
                                        <div class="gradient duration-450 bg-gradient-to-br from-white from-15% to-white/50 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-[.swiper-slide-active]/slide:opacity-20"></div>
                                        <div class="gradient duration-450 [background:linear-gradient(138.02deg,_#0055A3_4.25%,_#C7234B_101.19%);]  absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-[&.active]/sport:opacity-100"></div>
                                        <div class="img h-[50px] xs:h-[30px] relative z-[1] duration-450 w-full overflow-hidden mb-[20px] xs:mb-[10px] group-[&.active]/sport:invert-[1] group-[&.active]/sport:brightness-0">
                                            <img class="h-full w-full object-contain object-center duration-500" src="<?= env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'product_images_folder'], app()->getLocale()).'/'.$feature2->image  ?>" alt="">
                                        </div>
                                        <div class="title text-[18px] sm:text-[16px] xs:text-[12px] font-normal relative duration-450 text-[#656565] group-[&.active]/sport:text-white text-center line-clamp-2 z-[2] break-words" dir="">
                                            {{$feature2->title}}
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-[100px] md:py-[50px]" id="FAQ">
                <section class="accordion-content  px-[30px] md:px-0 section-animation ">
                    <div class="container max-w-[1440px] bg-pampas-100 pb-[30px] md:pb-[0]">
                        <div class="wrapper grid grid-cols-[minmax(0,4fr)_minmax(0,9fr)] md:grid-cols-1 gap-[50px] md:gap-[10px] " dir="">
                            <div class="dynamic-sticky h-fit md:!relative md:!top-0">
                                <div class="text-field relative mt-[30px]">
                                    <div class="icon icon-arrow-down text-[34px] h-[34px] block leading-none duration-350 text-[#C7234B] absolute -top-[30px] -left-[30px] md:left-0 md:-top-[50px]"></div>
                                    <div class="editor title editor-headings:duration-450 group-hover/mpb:editor-headings:text-white  editor-headings:mb-0 editor-headings:font-bold xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] editor-h1:text-[40px] editor-strong:duration-450 group-hover/mpb:editor-strong:text-white editor-strong:text-[40px] xl:editor-strong:text-[34px] lg:editor-strong:text-[20px] leading-tight duration-450 font-bold w-full editor-headings:text-transparent editor-headings:bg-clip-text editor-headings:bg-gradient-to-l editor-headings:from-[#C7234B] editor-headings:from-40% editor-headings:to-[#0055A3] editor-headings:to-75% editor-strong:text-transparent editor-strong:bg-clip-text editor-strong:bg-gradient-to-l editor-strong:from-[#0055A3] editor-strong:from-25% editor-strong:to-[#C7234B] editor-strong:font-bold editor-strong:block max-w-full">
                                        <h1>Origin Discover
                                            Frequently Asked
                                            Questions</h1>
                                    </div>
                                </div>
                            </div>
                            <ul class="accordion tiles-nav scrollreveal">
                                <?php foreach ($product->faqs as $key => $faq) : ?>
                                <li class="accordion-item group/accordion mb-[15px] tiles-nav__item relative duration-450 overflow-hidden isolate [&.active_.image]:opacity-100 border-b border-solid border-[#656565]/30">
                                    <div class="title-content py-[20px] grid grid-cols-[auto_auto] items-center justify-between gap-[15px] cursor-pointer select-none z-[1] text-[24px] lg:text-[22px] md:text-[20px] text-[#0055A3] xs:text-[18px] font-normal relative duration-450 group/items 
                                    group-[&.active]/accordion:text-[#C7234B] hover:text-[#C7234B]">
                                        <div class="title ">
                                            {{$faq->title}}
                                        </div>
                                        <div class="glyph-wrapper relative w-[50px] h-[50px] duration-450 rounded-full my-auto">
                                            <span class="line-h w-[20px] h-[2px] rounded-md bg-[#C7234B] block absolute left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%] duration-450"></span>
                                            <span class="line-v w-[2px] h-[20px] rounded-md bg-[#C7234B] block absolute left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%] duration-450 group-[&.active]/accordion:!h-0"></span>
                                        </div>
                                    </div>
                                    <div class="ac-content active z-[1] relative hidden ">
                                        <div class="editor editor-lg lg:editor-base sm:editor-sm xs:editor-h1:text-[24px] editor-headings:font-medium editor-headings:mb-[10px] editor-p:text-[#656565]/60 editor-strong:bg-[#656565] border-b border-solid border-white/10 pb-[40px] md:max-w-full">
                                            <p>{!!$faq->description!!}</p>
                                        </div>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </section>

            </section>
            <section class="contact-form py-[100px] md:py-[50px]">
                <div class="container max-w-[1200px]">
                    <div class="wrapper grid grid-cols-2 md:grid-cols-1 gap-[50px] md:gap-0">
                        <div class="img-field ">
                            <div class="img h-[550px] lg:h-[500px] md:h-[400px] xs:h-[300px] w-full overflow-hidden isolate rounded-[30px]">
                                <img class="h-full w-full object-cover object-center duration-500" src="../assets/image/other/sport.jpg" alt="">
                            </div>
                        </div>
                        <div class="left-form" dir="">
                            {!! $code->bitrix_form_code !!} 
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</main>

@endsection