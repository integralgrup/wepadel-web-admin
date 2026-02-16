@extends('layouts.main')

@section('content')
<?php 
$pageTitle = $product->title;
$breadcrumbTitle = $product->title;
?>

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
                                <li><a data-target="#general" class="scrollable cursor-pointer text-white/60 [&.active]:text-white hover:text-white duration-450 active">General Features</a></li>
                                <li><a data-target="#technic" class="scrollable cursor-pointer text-white/60 [&.active]:text-white hover:text-white duration-450 ">Technic Spesifications</a></li>
                                <li><a data-target="#facilities" class="scrollable cursor-pointer text-white/60 [&.active]:text-white hover:text-white duration-450 ">Installation</a></li>
                                <li><a data-target="#FAQ" class="scrollable cursor-pointer text-white/60 [&.active]:text-white hover:text-white duration-450 ">FAQ</a></li>
                                <li>
                                    <a href="<?= env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'product_images_folder'], app()->getLocale()).'/'.$product->pdf_file  ?>" target="_blank" class="button group min-w-[150px] justify-center items-center w-fit h-[45px] flex px-[30px] bg-[#D9D9D9]/20 relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-transparent before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-white hover:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center rtl:gap-2">
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
                                            <div class="text text-[16px] text-white duration-450 translate-x-5 group-hover/scroll:translate-x-0">Scroll Down</div>
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
                                                <span class="absolute -left-[10px] font-light -bottom-[25px] translate-y-[100%] text-[16px] text-[#C7234B] group-[&.active]/vdbutton:text-[#656565]/50 duration-450">Photo</span>
                                            </div>
                                            <div class="icon-video text-[30px] flex items-center text-[#231F20]/40 group-[&.active]/vdbutton:text-[#C7234B] absolute top-[50%] right-[18px] translate-y-[-50%] z-2 duration-450 group-hover:text-[#0055A3] group-hover:-translate-x-1">
                                                <span class="absolute -left-[10px] font-light -bottom-[25px] translate-y-[100%] text-[16px] text-[#656565]/50 group-[&.active]/vdbutton:text-[#C7234B] duration-450">Video</span>
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
                                            General Features</h1>
                                    </div>
                                    <div class="button-field w-full h-full">
                                        <a href="" class="button group w-fit block ml-auto">
                                            <div class="text-[20px] xs:text-[18px] font-light flex gap-[20px] justify-center items-center w-fit text-[#656565] hover:text-[#C7234B] duration-450 ">
                                                <div class="icon-back text-[20px] lg:text-[18px] md:text-[16px] text-[#656565] group-hover:text-[#C7234B] duration-450 relative z-20 flex group-hover:scale-90 group-hover:text-sushi-400"></div>
                                                Back To Products
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
                                            Grass Types Used
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
                                            <div class="text-[18px]  xs:text-[16px] font-normal font-inter flex items-center text-white group-hover:text-[#0055A3] relative z-2 duration-450 w-max">Contact</div>
                                        </a>
                                        <a href="<?= env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'product_images_folder'], app()->getLocale()).'/'.$product->pdf_file  ?>" target="_blank" class="button group min-w-[180px] lg:min-w-[150px] xs:lg:min-w-[120px] justify-center items-center w-fit h-[50px] flex px-[30px] bg-white relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full  before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-[#0055A3] hover:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center border border-solid border-[#0055A3]">
                                            <div class="icon text-[12px] flex items-center relative z-2 duration-450 ">
                                                <div class="icon-download text-[18px] flex items-center text-[#0055A3] relative z-2 duration-450 group-hover:text-white group-hover:-translate-x-1"></div>
                                            </div>
                                            <div class="text-[18px]  xs:text-[16px] font-normal font-inter flex items-center text-[#0055A3] group-hover:text-white relative z-2 duration-450 w-max">Catalog</div>
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
                                <h1>Wepadel offers you a unique padel court with its experienced team and understanding of high quality products.</h1>
                                <p>Origin Discover Padel Court is covered with 10x20 meters of green artificial turf and surrounded by steel construction, glass panels, and steel mesh. It is mostly used outdoors.</p>
                            </div>
                        </div>

                    </div>
                    <div class="wrapper grid grid-cols-[minmax(0,6fr)_minmax(0,7fr)] md:grid-cols-1 relative gap-[100px] lg:gap-[50px]">
                        <div class="project-detail relative xs:m-auto xs:w-full !h-[650px] xl:!h-[550px] lg:!h-[500px] md:!h-[400px] xs:!h-[350px] rounded-[30px] overflow-hidden isolate">
                            <!-- project-swiper'ın swiper-slide adedi kadar detail-box oluşturulmalıdır. -->
                            <div class="detail-box active opacity-0 absolute translate-y-[20px] duration-450 [visibility:hidden;] [&.active]:opacity-100 [&.active]:translate-y-0 [&.active]:delay-[450ms] [&.active]:visible gap-[25px] w-full h-full z-[5]" data-id="0">
                                <div class="img h-[650px] xl:h-[550px] lg:h-[500px] md:h-[400px] xs:h-[350px] w-full overflow-hidden rounded-[30px] image-zoom">
                                    <img class="h-full w-full object-cover object-center duration-500" src="../assets/image/other/qr-img.jpg" alt="">
                                </div>
                            </div>
                            <div class="detail-box opacity-0 absolute translate-y-[20px] duration-450 [visibility:hidden;] [&.active]:opacity-100 [&.active]:translate-y-0 [&.active]:delay-[450ms] [&.active]:visible gap-[25px] w-full h-full z-[5]" data-id="1">
                                <div class="img h-[650px] xl:h-[550px] lg:h-[500px] md:h-[400px] xs:h-[350px] w-full overflow-hidden rounded-[30px] image-zoom">
                                    <img class="h-full w-full object-cover object-center duration-500" src="../assets/image/other/project.jpg" alt="">
                                </div>
                            </div>
                            <div class="detail-box opacity-0 absolute translate-y-[20px] duration-450 [visibility:hidden;] [&.active]:opacity-100 [&.active]:translate-y-0 [&.active]:delay-[450ms] [&.active]:visible gap-[25px] w-full h-full z-[5]" data-id="2">
                                <div class="img h-[650px] xl:h-[550px] lg:h-[500px] md:h-[400px] xs:h-[350px] w-full overflow-hidden rounded-[30px] image-zoom">
                                    <img class="h-full w-full object-cover object-center duration-500" src="../assets/image/other/project.jpg" alt="">
                                </div>
                            </div>
                            <div class="detail-box opacity-0 absolute translate-y-[20px] duration-450 [visibility:hidden;] [&.active]:opacity-100 [&.active]:translate-y-0 [&.active]:delay-[450ms] [&.active]:visible gap-[25px] w-full h-full z-[5]" data-id="3">
                                <div class="img h-[650px] xl:h-[550px] lg:h-[500px] md:h-[400px] xs:h-[350px] w-full overflow-hidden rounded-[30px] image-zoom">
                                    <img class="h-full w-full object-cover object-center duration-500" src="../assets/image/other/project.jpg" alt="">
                                </div>
                            </div>
                            <div class="detail-box opacity-0 absolute translate-y-[20px] duration-450 [visibility:hidden;] [&.active]:opacity-100 [&.active]:translate-y-0 [&.active]:delay-[450ms] [&.active]:visible gap-[25px] w-full h-full z-[5]" data-id="4">
                                <div class="img h-[650px] xl:h-[550px] lg:h-[500px] md:h-[400px] xs:h-[350px] w-full overflow-hidden rounded-[30px] image-zoom">
                                    <img class="h-full w-full object-cover object-center duration-500" src="../assets/image/other/project.jpg" alt="">
                                </div>
                            </div>
                            <div class="detail-box opacity-0 absolute translate-y-[20px] duration-450 [visibility:hidden;] [&.active]:opacity-100 [&.active]:translate-y-0 [&.active]:delay-[450ms] [&.active]:visible gap-[25px] w-full h-full z-[5]" data-id="5">
                                <div class="img h-[650px] xl:h-[550px] lg:h-[500px] md:h-[400px] xs:h-[350px] w-full overflow-hidden rounded-[30px] image-zoom">
                                    <img class="h-full w-full object-cover object-center duration-500" src="../assets/image/other/project.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-content">
                            <div class="title flex justify-between items-center sm:flex-col m-auto relative z-[2] pt-[50px] gap-[20px] md:gap-[15px]">
                                <div class="icon icon-arrow-down text-[34px] h-[34px] block leading-none duration-350 text-[#C7234B] absolute top-[0px] -left-[30px] md:left-0"></div>
                                <div class="editor editor-base md:editor-sm editor-headings:font-bold editor-headings:text-[#ffffff] editor-headings:leading-tight xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] xl:editor-h1:text-[40px] editor-h1:text-[40px] editor-p:leading-tight editor-p:text-[#B6D3E4] editor-p:text-[24px] sm:editor-p:text-[22px] xs:editor-p:text-[20px] editor-li:text-[#231F20]/40 editor-li:font-medium editor-li:text-[20px]  editor-ul:pl-[25px] editor-ul:px-[25px] [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] max-w-full w-full md:pl-[35px] sm:pl-0 text-left" dir="">
                                    <h1>Technical Spesifications</h1>
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
                                    <?php for ($i = 1; $i < 3; $i++) : ?>
                                        <div class="swiper-slide group/slide !duration-450 !transition-all [&.swiper-slide-active]:opacity-100  [&.swiper-slide-active]:!scale-100 [&.swiper-slide-active]:!visible [&.swiper-slide-next]:opacity-100 [&.swiper-slide-next]:!scale-100 [&.swiper-slide-next]:!visible !pointer-events-auto">
                                            <div class="content relative rounded-[30px] ">
                                                <div class="text-field m-auto ">
                                                    <div class="sport-box bg-[#F6F6F6]/5 rounded-[30px] p-[30px] relative overflow-hidden border border-solid border-transparent hover:border-white/50 group-[&.swiper-slide-active]/slide:border-white/50 duration-450 h-[190px] flex flex-col justify-center">
                                                        <div class="gradient duration-450 bg-gradient-to-br from-white from-15% to-white/50 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-[.swiper-slide-active]/slide:opacity-20"></div>
                                                        <div class="gradient duration-450 [background:linear-gradient(180deg,_rgba(247,247,247,0.06)_0%,_rgba(247,247,247,0)_100%);]  absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-100 group-[.swiper-slide-active]/slide:opacity-0"></div>
                                                        <div class="img h-[50px] group-[&.swiper-slide-active]/slide:h-[100px] relative z-[1] duration-450 w-full overflow-hidden">
                                                            <img class="h-full w-full object-contain object-center duration-500" src="../assets/image/other/qr.png" alt="">
                                                        </div>
                                                        <div class="title text-[18px] font-normal h-[55px] group-[&.swiper-slide-active]/slide:h-0 group- relative[&.swiper-slide-active]/slide:opacity-0 duration-450 text-white text-center line-clamp-2" dir="">
                                                            Best Padel
                                                            Experience
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide group/slide !duration-450 !transition-all [&.swiper-slide-active]:opacity-100  [&.swiper-slide-active]:!scale-100 [&.swiper-slide-active]:!visible [&.swiper-slide-next]:opacity-100 [&.swiper-slide-next]:!scale-100 [&.swiper-slide-next]:!visible !pointer-events-auto">
                                            <div class="content relative rounded-[30px] ">
                                                <div class="text-field m-auto ">
                                                    <div class="sport-box bg-[#F6F6F6]/5 rounded-[30px] p-[30px] relative overflow-hidden border border-solid border-transparent hover:border-white/50 group-[&.swiper-slide-active]/slide:border-white/50 duration-450 h-[190px] flex flex-col justify-center">
                                                        <div class="gradient duration-450 bg-gradient-to-br from-white from-15% to-white/50 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-[.swiper-slide-active]/slide:opacity-20"></div>
                                                        <div class="gradient duration-450 [background:linear-gradient(180deg,_rgba(247,247,247,0.06)_0%,_rgba(247,247,247,0)_100%);]  absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-100 group-[.swiper-slide-active]/slide:opacity-0"></div>
                                                        <div class="img h-[50px] group-[&.swiper-slide-active]/slide:h-[100px] relative z-[1] duration-450 w-full overflow-hidden">
                                                            <img class="h-full w-full object-contain object-center duration-500" src="../assets/image/other/court.png" alt="">
                                                        </div>
                                                        <div class="title text-[18px] font-normal h-[55px] group-[&.swiper-slide-active]/slide:h-0 group- relative[&.swiper-slide-active]/slide:opacity-0 duration-450 text-white text-center line-clamp-2" dir="">
                                                            Best Padel
                                                            Experience
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide group/slide !duration-450 !transition-all [&.swiper-slide-active]:opacity-100  [&.swiper-slide-active]:!scale-100 [&.swiper-slide-active]:!visible [&.swiper-slide-next]:opacity-100 [&.swiper-slide-next]:!scale-100 [&.swiper-slide-next]:!visible !pointer-events-auto">
                                            <div class="content relative rounded-[30px] ">
                                                <div class="text-field m-auto ">
                                                    <div class="sport-box bg-[#F6F6F6]/5 rounded-[30px] p-[30px] relative overflow-hidden border border-solid border-transparent hover:border-white/50 group-[&.swiper-slide-active]/slide:border-white/50 duration-450 h-[190px] flex flex-col justify-center">
                                                        <div class="gradient duration-450 bg-gradient-to-br from-white from-15% to-white/50 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-[.swiper-slide-active]/slide:opacity-20"></div>
                                                        <div class="gradient duration-450 [background:linear-gradient(180deg,_rgba(247,247,247,0.06)_0%,_rgba(247,247,247,0)_100%);]  absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-100 group-[.swiper-slide-active]/slide:opacity-0"></div>
                                                        <div class="img h-[50px] group-[&.swiper-slide-active]/slide:h-[100px] relative z-[1] duration-450 w-full overflow-hidden">
                                                            <img class="h-full w-full object-contain object-center duration-500" src="../assets/image/other/running.png" alt="">
                                                        </div>
                                                        <div class="title text-[18px] font-normal h-[55px] group-[&.swiper-slide-active]/slide:h-0 group- relative[&.swiper-slide-active]/slide:opacity-0 duration-450 text-white text-center line-clamp-2" dir="">
                                                            Best Padel
                                                            Experience
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                            <div class="swiper project-text-slider">
                                <div class="swiper-wrapper">
                                    <!-- project-swiper'ın swiper-slide adedi kadar swiper-slide oluşturulmalıdır. -->
                                    <?php for ($i = 1; $i < 7; $i++) : ?>
                                        <div class="swiper-slide p-6 sm:p-3">
                                            <div class="text-field">
                                                <div class="editor editor-base md:editor-sm editor-headings:font-light editor-headings:text-[#ffffff] editor-headings:leading-tight xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] xl:editor-h1:text-[40px] editor-h1:text-[40px] editor-h2:text-[28px] sm:editor-h2:text-[24px] xs:editor-h2:text-[22px] editor-p:leading-tight editor-p:text-[#B6D3E4] editor-p:font-light editor-p:text-[20px] sm:editor-p:text-[18px] xs:editor-p:text-[16px] editor-li:text-[#231F20]/40 editor-li:font-light editor-li:text-[20px]  editor-ul:pl-[25px] editor-ul:px-[25px] [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] max-w-[600px] md:max-w-full w-full" dir="">
                                                    <h2>Unique QR Identification </h2>
                                                    <p>As WePadel, we idetificate our products in unique
                                                        way with QR codes that you can access and see
                                                        global quality certificates of the products.</p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endfor; ?>
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
                                    <h1>Origin Discover
                                        Installation</h1>
                                </div>
                            </div>
                            <div class="description-field relative duration-450">
                                <div class="desc-box w-full active absolute opacity-0 [visibility:hidden;] translate-y-[30px] duration-450 [&.active]:!opacity-100 [&.active]:!visible [&.active]:delay-[450ms] [&.active]:!translate-y-0 [&.active]:duration-450 [&.active]:z-[1]" box-id="0">
                                    <div class="text-field relative ">
                                        <div class="editor editor-base md:editor-sm editor-headings:font-normal editor-headings:text-[#0055A3] editor-headings:leading-tight xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] xl:editor-h1:text-[40px] editor-h1:text-[40px] editor-h2:text-[28px] sm:editor-h2:text-[24px] xs:editor-h2:text-[22px] editor-p:leading-tight editor-p:text-[#656565] editor-p:font-light editor-p:text-[20px] sm:editor-p:text-[18px] xs:editor-p:text-[16px] editor-li:text-[#656565] editor-li:font-light editor-li:text-[20px]  editor-ul:pl-[25px] editor-ul:px-[25px] [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] max-w-[600px] md:max-w-full w-full">
                                            <h2>Infrastructure </h2>
                                            <p>As WePadel, we idetificate our products in unique
                                                way with QR codes that you can access and see
                                                global quality certificates of the products.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="desc-box w-full absolute opacity-0 [visibility:hidden;] translate-y-[30px] duration-450 [&.active]:!opacity-100 [&.active]:!visible [&.active]:delay-[450ms] [&.active]:!translate-y-0 [&.active]:duration-450 [&.active]:z-[1]" box-id="1">
                                    <div class="text-field relative ">
                                        <div class="editor editor-base md:editor-sm editor-headings:font-normal editor-headings:text-[#0055A3] editor-headings:leading-tight xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] xl:editor-h1:text-[40px] editor-h1:text-[40px] editor-h2:text-[28px] sm:editor-h2:text-[24px] xs:editor-h2:text-[22px] editor-p:leading-tight editor-p:text-[#656565] editor-p:font-light editor-p:text-[20px] sm:editor-p:text-[18px] xs:editor-p:text-[16px] editor-li:text-[#656565] editor-li:font-light editor-li:text-[20px]  editor-ul:pl-[25px] editor-ul:px-[25px] [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] max-w-[600px] md:max-w-full w-full">
                                            <h2>Concrete Beam</h2>
                                            <p>As WePadel, we idetificate our products in unique
                                                way with QR codes that you can access and see
                                                global quality certificates of the products.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="desc-box w-full absolute opacity-0 [visibility:hidden;] translate-y-[30px] duration-450 [&.active]:!opacity-100 [&.active]:!visible [&.active]:delay-[450ms] [&.active]:!translate-y-0 [&.active]:duration-450 [&.active]:z-[1]" box-id="2">
                                    <div class="text-field relative ">
                                        <div class="editor editor-base md:editor-sm editor-headings:font-normal editor-headings:text-[#0055A3] editor-headings:leading-tight xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] xl:editor-h1:text-[40px] editor-h1:text-[40px] editor-h2:text-[28px] sm:editor-h2:text-[24px] xs:editor-h2:text-[22px] editor-p:leading-tight editor-p:text-[#656565] editor-p:font-light editor-p:text-[20px] sm:editor-p:text-[18px] xs:editor-p:text-[16px] editor-li:text-[#656565] editor-li:font-light editor-li:text-[20px]  editor-ul:pl-[25px] editor-ul:px-[25px] [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] max-w-[600px] md:max-w-full w-full">
                                            <h2>Glass</h2>
                                            <p>As WePadel, we idetificate our products in unique
                                                way with QR codes that you can access and see
                                                global quality certificates of the products.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="desc-box w-full absolute opacity-0 [visibility:hidden;] translate-y-[30px] duration-450 [&.active]:!opacity-100 [&.active]:!visible [&.active]:delay-[450ms] [&.active]:!translate-y-0 [&.active]:duration-450 [&.active]:z-[1]" box-id="3">
                                    <div class="text-field relative ">
                                        <div class="editor editor-base md:editor-sm editor-headings:font-normal editor-headings:text-[#0055A3] editor-headings:leading-tight xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] xl:editor-h1:text-[40px] editor-h1:text-[40px] editor-h2:text-[28px] sm:editor-h2:text-[24px] xs:editor-h2:text-[22px] editor-p:leading-tight editor-p:text-[#656565] editor-p:font-light editor-p:text-[20px] sm:editor-p:text-[18px] xs:editor-p:text-[16px] editor-li:text-[#656565] editor-li:font-light editor-li:text-[20px]  editor-ul:pl-[25px] editor-ul:px-[25px] [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] max-w-[600px] md:max-w-full w-full">
                                            <h2>Steel Construction</h2>
                                            <p>As WePadel, we idetificate our products in unique
                                                way with QR codes that you can access and see
                                                global quality certificates of the products.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="desc-box w-full absolute opacity-0 [visibility:hidden;] translate-y-[30px] duration-450 [&.active]:!opacity-100 [&.active]:!visible [&.active]:delay-[450ms] [&.active]:!translate-y-0 [&.active]:duration-450 [&.active]:z-[1]" box-id="4">
                                    <div class="text-field relative ">
                                        <div class="editor editor-base md:editor-sm editor-headings:font-normal editor-headings:text-[#0055A3] editor-headings:leading-tight xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] xl:editor-h1:text-[40px] editor-h1:text-[40px] editor-h2:text-[28px] sm:editor-h2:text-[24px] xs:editor-h2:text-[22px] editor-p:leading-tight editor-p:text-[#656565] editor-p:font-light editor-p:text-[20px] sm:editor-p:text-[18px] xs:editor-p:text-[16px] editor-li:text-[#656565] editor-li:font-light editor-li:text-[20px]  editor-ul:pl-[25px] editor-ul:px-[25px] [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] max-w-[600px] md:max-w-full w-full">
                                            <h2>Equipment</h2>
                                            <p>As WePadel, we idetificate our products in unique
                                                way with QR codes that you can access and see
                                                global quality certificates of the products.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="desc-box w-full absolute opacity-0 [visibility:hidden;] translate-y-[30px] duration-450 [&.active]:!opacity-100 [&.active]:!visible [&.active]:delay-[450ms] [&.active]:!translate-y-0 [&.active]:duration-450 [&.active]:z-[1]" box-id="5">
                                    <div class="text-field relative ">
                                        <div class="editor editor-base md:editor-sm editor-headings:font-normal editor-headings:text-[#0055A3] editor-headings:leading-tight xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] xl:editor-h1:text-[40px] editor-h1:text-[40px] editor-h2:text-[28px] sm:editor-h2:text-[24px] xs:editor-h2:text-[22px] editor-p:leading-tight editor-p:text-[#656565] editor-p:font-light editor-p:text-[20px] sm:editor-p:text-[18px] xs:editor-p:text-[16px] editor-li:text-[#656565] editor-li:font-light editor-li:text-[20px]  editor-ul:pl-[25px] editor-ul:px-[25px] [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] max-w-[600px] md:max-w-full w-full">
                                            <h2>Steel Mesh</h2>
                                            <p>As WePadel, we idetificate our products in unique
                                                way with QR codes that you can access and see
                                                global quality certificates of the products.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="desc-box w-full absolute opacity-0 [visibility:hidden;] translate-y-[30px] duration-450 [&.active]:!opacity-100 [&.active]:!visible [&.active]:delay-[450ms] [&.active]:!translate-y-0 [&.active]:duration-450 [&.active]:z-[1]" box-id="6">
                                    <div class="text-field relative ">
                                        <div class="editor editor-base md:editor-sm editor-headings:font-normal editor-headings:text-[#0055A3] editor-headings:leading-tight xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] xl:editor-h1:text-[40px] editor-h1:text-[40px] editor-h2:text-[28px] sm:editor-h2:text-[24px] xs:editor-h2:text-[22px] editor-p:leading-tight editor-p:text-[#656565] editor-p:font-light editor-p:text-[20px] sm:editor-p:text-[18px] xs:editor-p:text-[16px] editor-li:text-[#656565] editor-li:font-light editor-li:text-[20px]  editor-ul:pl-[25px] editor-ul:px-[25px] [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] max-w-[600px] md:max-w-full w-full">
                                            <h2>Lighting</h2>
                                            <p>As WePadel, we idetificate our products in unique
                                                way with QR codes that you can access and see
                                                global quality certificates of the products.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="desc-box w-full absolute opacity-0 [visibility:hidden;] translate-y-[30px] duration-450 [&.active]:!opacity-100 [&.active]:!visible [&.active]:delay-[450ms] [&.active]:!translate-y-0 [&.active]:duration-450 [&.active]:z-[1]" box-id="7">
                                    <div class="text-field relative ">
                                        <div class="editor editor-base md:editor-sm editor-headings:font-normal editor-headings:text-[#0055A3] editor-headings:leading-tight xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] xl:editor-h1:text-[40px] editor-h1:text-[40px] editor-h2:text-[28px] sm:editor-h2:text-[24px] xs:editor-h2:text-[22px] editor-p:leading-tight editor-p:text-[#656565] editor-p:font-light editor-p:text-[20px] sm:editor-p:text-[18px] xs:editor-p:text-[16px] editor-li:text-[#656565] editor-li:font-light editor-li:text-[20px]  editor-ul:pl-[25px] editor-ul:px-[25px] [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] max-w-[600px] md:max-w-full w-full">
                                            <h2>Synthetic Grass</h2>
                                            <p>As WePadel, we idetificate our products in unique
                                                way with QR codes that you can access and see
                                                global quality certificates of the products.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-field w-full select-field map-list grid grid-cols-4 lg:grid-cols-3 xs:flex xs:flex-wrap xs:justify-center gap-[30px] sm:gap-[20px] xs:gap-[10px] scrollreveal">
                            <a class="map-box group/sport flex items-center justify-center scrollable-mob active" data-target=".installation" href="javascript:;" data-branch-index="0">
                                <div class="sport-box w-[210px] h-[220px] sm:w-[160px] sm:h-[150px] xs:w-[100px] xs:h-[110px] [background:linear-gradient(180deg,_rgba(217,217,217,0.3)_0%,_rgba(217,217,217,0)_100%);] rounded-[30px] p-[30px] sm:p-[20px] xs:p-[5px] xs:py-[15px] relative overflow-hidden border border-solid border-transparent hover:border-white/50 group-[&.swiper-slide-active]/slide:border-white/50 duration-450 flex flex-col justify-center hover:shadow-md">
                                    <div class="gradient duration-450 bg-gradient-to-br from-white from-15% to-white/50 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-[.swiper-slide-active]/slide:opacity-20"></div>
                                    <div class="gradient duration-450 [background:linear-gradient(138.02deg,_#0055A3_4.25%,_#C7234B_101.19%);]  absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-[&.active]/sport:opacity-100"></div>
                                    <div class="img h-[50px] xs:h-[30px] relative z-[1] duration-450 w-full overflow-hidden mb-[20px] xs:mb-[10px] group-[&.active]/sport:invert-[1] group-[&.active]/sport:brightness-0">
                                        <img class="h-full w-full object-contain object-center duration-500" src="../assets/image/other/tennis-b.png" alt="">
                                    </div>
                                    <div class="title text-[18px] sm:text-[16px] xs:text-[12px] font-normal relative duration-450 text-[#656565] group-[&.active]/sport:text-white text-center line-clamp-2 z-[2] break-words" dir="">
                                        Infrastructure
                                    </div>
                                </div>
                            </a>
                            <a class="map-box group/sport flex items-center justify-center scrollable-mob " data-target=".installation" href="javascript:;" data-branch-index="1">
                                <div class="sport-box w-[210px] h-[220px] sm:w-[160px] sm:h-[150px] xs:w-[100px] xs:h-[110px] [background:linear-gradient(180deg,_rgba(217,217,217,0.3)_0%,_rgba(217,217,217,0)_100%);] rounded-[30px] p-[30px] sm:p-[20px] xs:p-[5px] xs:py-[15px] relative overflow-hidden border border-solid border-transparent hover:border-white/50 group-[&.swiper-slide-active]/slide:border-white/50 duration-450 flex flex-col justify-center hover:shadow-md">
                                    <div class="gradient duration-450 bg-gradient-to-br from-white from-15% to-white/50 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-[.swiper-slide-active]/slide:opacity-20"></div>
                                    <div class="gradient duration-450 [background:linear-gradient(138.02deg,_#0055A3_4.25%,_#C7234B_101.19%);]  absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-[&.active]/sport:opacity-100"></div>
                                    <div class="img h-[50px] xs:h-[30px] relative z-[1] duration-450 w-full overflow-hidden mb-[20px] xs:mb-[10px] group-[&.active]/sport:invert-[1] group-[&.active]/sport:brightness-0">
                                        <img class="h-full w-full object-contain object-center duration-500" src="../assets/image/other/running-b.png" alt="">
                                    </div>
                                    <div class="title text-[18px] sm:text-[16px] xs:text-[12px] font-normal relative duration-450 text-[#656565] group-[&.active]/sport:text-white text-center line-clamp-2 z-[2] break-words" dir="">
                                        Concrete Beam
                                    </div>
                                </div>
                            </a>
                            <a class="map-box group/sport flex items-center justify-center scrollable-mob " data-target=".installation" href="javascript:;" data-branch-index="2">
                                <div class="sport-box w-[210px] h-[220px] sm:w-[160px] sm:h-[150px] xs:w-[100px] xs:h-[110px] [background:linear-gradient(180deg,_rgba(217,217,217,0.3)_0%,_rgba(217,217,217,0)_100%);] rounded-[30px] p-[30px] sm:p-[20px] xs:p-[5px] xs:py-[15px] relative overflow-hidden border border-solid border-transparent hover:border-white/50 group-[&.swiper-slide-active]/slide:border-white/50 duration-450 flex flex-col justify-center hover:shadow-md">
                                    <div class="gradient duration-450 bg-gradient-to-br from-white from-15% to-white/50 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-[.swiper-slide-active]/slide:opacity-20"></div>
                                    <div class="gradient duration-450 [background:linear-gradient(138.02deg,_#0055A3_4.25%,_#C7234B_101.19%);]  absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-[&.active]/sport:opacity-100"></div>
                                    <div class="img h-[50px] xs:h-[30px] relative z-[1] duration-450 w-full overflow-hidden mb-[20px] xs:mb-[10px] group-[&.active]/sport:invert-[1] group-[&.active]/sport:brightness-0">
                                        <img class="h-full w-full object-contain object-center duration-500" src="../assets/image/other/court-b.png" alt="">
                                    </div>
                                    <div class="title text-[18px] sm:text-[16px] xs:text-[12px] font-normal relative duration-450 text-[#656565] group-[&.active]/sport:text-white text-center line-clamp-2 z-[2] break-words" dir="">
                                        Glass
                                    </div>
                                </div>
                            </a>
                            <a class="map-box group/sport flex items-center justify-center scrollable-mob " data-target=".installation" href="javascript:;" data-branch-index="3">
                                <div class="sport-box w-[210px] h-[220px] sm:w-[160px] sm:h-[150px] xs:w-[100px] xs:h-[110px] [background:linear-gradient(180deg,_rgba(217,217,217,0.3)_0%,_rgba(217,217,217,0)_100%);] rounded-[30px] p-[30px] sm:p-[20px] xs:p-[5px] xs:py-[15px] relative overflow-hidden border border-solid border-transparent hover:border-white/50 group-[&.swiper-slide-active]/slide:border-white/50 duration-450 flex flex-col justify-center hover:shadow-md">
                                    <div class="gradient duration-450 bg-gradient-to-br from-white from-15% to-white/50 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-[.swiper-slide-active]/slide:opacity-20"></div>
                                    <div class="gradient duration-450 [background:linear-gradient(138.02deg,_#0055A3_4.25%,_#C7234B_101.19%);]  absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-[&.active]/sport:opacity-100"></div>
                                    <div class="img h-[50px] xs:h-[30px] relative z-[1] duration-450 w-full overflow-hidden mb-[20px] xs:mb-[10px] group-[&.active]/sport:invert-[1] group-[&.active]/sport:brightness-0">
                                        <img class="h-full w-full object-contain object-center duration-500" src="../assets/image/other/running-b.png" alt="">
                                    </div>
                                    <div class="title text-[18px] sm:text-[16px] xs:text-[12px] font-normal relative duration-450 text-[#656565] group-[&.active]/sport:text-white text-center line-clamp-2 z-[2] break-words" dir="">
                                        Steel Construction
                                    </div>
                                </div>
                            </a>
                            <a class="map-box group/sport flex items-center justify-center scrollable-mob " data-target=".installation" href="javascript:;" data-branch-index="4">
                                <div class="sport-box w-[210px] h-[220px] sm:w-[160px] sm:h-[150px] xs:w-[100px] xs:h-[110px] [background:linear-gradient(180deg,_rgba(217,217,217,0.3)_0%,_rgba(217,217,217,0)_100%);] rounded-[30px] p-[30px] sm:p-[20px] xs:p-[5px] xs:py-[15px] relative overflow-hidden border border-solid border-transparent hover:border-white/50 group-[&.swiper-slide-active]/slide:border-white/50 duration-450 flex flex-col justify-center hover:shadow-md">
                                    <div class="gradient duration-450 bg-gradient-to-br from-white from-15% to-white/50 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-[.swiper-slide-active]/slide:opacity-20"></div>
                                    <div class="gradient duration-450 [background:linear-gradient(138.02deg,_#0055A3_4.25%,_#C7234B_101.19%);]  absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-[&.active]/sport:opacity-100"></div>
                                    <div class="img h-[50px] xs:h-[30px] relative z-[1] duration-450 w-full overflow-hidden mb-[20px] xs:mb-[10px] group-[&.active]/sport:invert-[1] group-[&.active]/sport:brightness-0">
                                        <img class="h-full w-full object-contain object-center duration-500" src="../assets/image/other/court-b.png" alt="">
                                    </div>
                                    <div class="title text-[18px] sm:text-[16px] xs:text-[12px] font-normal relative duration-450 text-[#656565] group-[&.active]/sport:text-white text-center line-clamp-2 z-[2] break-words" dir="">
                                        Equipment
                                    </div>
                                </div>
                            </a>
                            <a class="map-box group/sport flex items-center justify-center scrollable-mob " data-target=".installation" href="javascript:;" data-branch-index="5">
                                <div class="sport-box w-[210px] h-[220px] sm:w-[160px] sm:h-[150px] xs:w-[100px] xs:h-[110px] [background:linear-gradient(180deg,_rgba(217,217,217,0.3)_0%,_rgba(217,217,217,0)_100%);] rounded-[30px] p-[30px] sm:p-[20px] xs:p-[5px] xs:py-[15px] relative overflow-hidden border border-solid border-transparent hover:border-white/50 group-[&.swiper-slide-active]/slide:border-white/50 duration-450 flex flex-col justify-center hover:shadow-md">
                                    <div class="gradient duration-450 bg-gradient-to-br from-white from-15% to-white/50 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-[.swiper-slide-active]/slide:opacity-20"></div>
                                    <div class="gradient duration-450 [background:linear-gradient(138.02deg,_#0055A3_4.25%,_#C7234B_101.19%);]  absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-[&.active]/sport:opacity-100"></div>
                                    <div class="img h-[50px] xs:h-[30px] relative z-[1] duration-450 w-full overflow-hidden mb-[20px] xs:mb-[10px] group-[&.active]/sport:invert-[1] group-[&.active]/sport:brightness-0">
                                        <img class="h-full w-full object-contain object-center duration-500" src="../assets/image/other/running-b.png" alt="">
                                    </div>
                                    <div class="title text-[18px] sm:text-[16px] xs:text-[12px] font-normal relative duration-450 text-[#656565] group-[&.active]/sport:text-white text-center line-clamp-2 z-[2] break-words" dir="">
                                        Steel Mesh
                                    </div>
                                </div>
                            </a>
                            <a class="map-box group/sport flex items-center justify-center scrollable-mob " data-target=".installation" href="javascript:;" data-branch-index="6">
                                <div class="sport-box w-[210px] h-[220px] sm:w-[160px] sm:h-[150px] xs:w-[100px] xs:h-[110px] [background:linear-gradient(180deg,_rgba(217,217,217,0.3)_0%,_rgba(217,217,217,0)_100%);] rounded-[30px] p-[30px] sm:p-[20px] xs:p-[5px] xs:py-[15px] relative overflow-hidden border border-solid border-transparent hover:border-white/50 group-[&.swiper-slide-active]/slide:border-white/50 duration-450 flex flex-col justify-center hover:shadow-md">
                                    <div class="gradient duration-450 bg-gradient-to-br from-white from-15% to-white/50 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-[.swiper-slide-active]/slide:opacity-20"></div>
                                    <div class="gradient duration-450 [background:linear-gradient(138.02deg,_#0055A3_4.25%,_#C7234B_101.19%);]  absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-[&.active]/sport:opacity-100"></div>
                                    <div class="img h-[50px] xs:h-[30px] relative z-[1] duration-450 w-full overflow-hidden mb-[20px] xs:mb-[10px] group-[&.active]/sport:invert-[1] group-[&.active]/sport:brightness-0">
                                        <img class="h-full w-full object-contain object-center duration-500" src="../assets/image/other/court-b.png" alt="">
                                    </div>
                                    <div class="title text-[18px] sm:text-[16px] xs:text-[12px] font-normal relative duration-450 text-[#656565] group-[&.active]/sport:text-white text-center line-clamp-2 z-[2] break-words" dir="">
                                        Lighting
                                    </div>
                                </div>
                            </a>
                            <a class="map-box group/sport flex items-center justify-center scrollable-mob " data-target=".installation" href="javascript:;" data-branch-index="7">
                                <div class="sport-box w-[210px] h-[220px] sm:w-[160px] sm:h-[150px] xs:w-[100px] xs:h-[110px] [background:linear-gradient(180deg,_rgba(217,217,217,0.3)_0%,_rgba(217,217,217,0)_100%);] rounded-[30px] p-[30px] sm:p-[20px] xs:p-[5px] xs:py-[15px] relative overflow-hidden border border-solid border-transparent hover:border-white/50 group-[&.swiper-slide-active]/slide:border-white/50 duration-450 flex flex-col justify-center hover:shadow-md">
                                    <div class="gradient duration-450 bg-gradient-to-br from-white from-15% to-white/50 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-[.swiper-slide-active]/slide:opacity-20"></div>
                                    <div class="gradient duration-450 [background:linear-gradient(138.02deg,_#0055A3_4.25%,_#C7234B_101.19%);]  absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-[&.active]/sport:opacity-100"></div>
                                    <div class="img h-[50px] xs:h-[30px] relative z-[1] duration-450 w-full overflow-hidden mb-[20px] xs:mb-[10px] group-[&.active]/sport:invert-[1] group-[&.active]/sport:brightness-0">
                                        <img class="h-full w-full object-contain object-center duration-500" src="../assets/image/other/running-b.png" alt="">
                                    </div>
                                    <div class="title text-[18px] sm:text-[16px] xs:text-[12px] font-normal relative duration-450 text-[#656565] group-[&.active]/sport:text-white text-center line-clamp-2 z-[2] break-words" dir="">
                                        Synthetic Grass
                                    </div>
                                </div>
                            </a>
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
                                <li class="accordion-item group/accordion mb-[15px] tiles-nav__item relative duration-450 overflow-hidden isolate [&.active_.image]:opacity-100 border-b border-solid border-[#656565]/30">
                                    <div class="title-content py-[20px] grid grid-cols-[auto_auto] items-center justify-between gap-[15px] cursor-pointer select-none z-[1] text-[24px] lg:text-[22px] md:text-[20px] text-[#0055A3] xs:text-[18px] font-normal relative duration-450 group/items 
                                    group-[&.active]/accordion:text-[#C7234B] hover:text-[#C7234B]">
                                        <div class="title ">
                                            What is a padel (or paddle)?
                                        </div>
                                        <div class="glyph-wrapper relative w-[50px] h-[50px] duration-450 rounded-full my-auto">
                                            <span class="line-h w-[20px] h-[2px] rounded-md bg-[#C7234B] block absolute left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%] duration-450"></span>
                                            <span class="line-v w-[2px] h-[20px] rounded-md bg-[#C7234B] block absolute left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%] duration-450 group-[&.active]/accordion:!h-0"></span>
                                        </div>
                                    </div>
                                    <div class="ac-content active z-[1] relative hidden ">
                                        <div class="editor editor-lg lg:editor-base sm:editor-sm xs:editor-h1:text-[24px] editor-headings:font-medium editor-headings:mb-[10px] editor-p:text-[#656565]/60 editor-strong:bg-[#656565] border-b border-solid border-white/10 pb-[40px] md:max-w-full">
                                            <p>Origin Discover Padel Court is covered with 10x20 meters of green artificial turf and surrounded by steel construction, glass panels, and steel mesh. It is mostly used outdoors.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item group/accordion mb-[15px] tiles-nav__item relative duration-450 overflow-hidden isolate [&.active_.image]:opacity-100 border-b border-solid border-[#656565]/30">
                                    <div class="title-content py-[20px] grid grid-cols-[auto_auto] items-center justify-between gap-[15px] cursor-pointer select-none z-[1] text-[24px] lg:text-[22px] md:text-[20px] text-[#0055A3] xs:text-[18px] font-normal relative duration-450 group/items 
                                    group-[&.active]/accordion:text-[#C7234B] hover:text-[#C7234B]">
                                        <div class="title ">
                                            How to construct Origin Discover Padel Court?
                                        </div>
                                        <div class="glyph-wrapper relative w-[50px] h-[50px] duration-450 rounded-full my-auto">
                                            <span class="line-h w-[20px] h-[2px] rounded-md bg-[#C7234B] block absolute left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%] duration-450"></span>
                                            <span class="line-v w-[2px] h-[20px] rounded-md bg-[#C7234B] block absolute left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%] duration-450 group-[&.active]/accordion:!h-0"></span>
                                        </div>
                                    </div>
                                    <div class="ac-content active z-[1] relative hidden ">
                                        <div class="editor editor-lg lg:editor-base sm:editor-sm xs:editor-h1:text-[24px] editor-headings:font-medium editor-headings:mb-[10px] editor-p:text-[#656565]/60 editor-strong:bg-[#656565] border-b border-solid border-white/10 pb-[40px] md:max-w-full">
                                            <p>Origin Discover Padel Court is covered with 10x20 meters of green artificial turf and surrounded by steel construction, glass panels, and steel mesh. It is mostly used outdoors.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item group/accordion mb-[15px] tiles-nav__item relative duration-450 overflow-hidden isolate [&.active_.image]:opacity-100 border-b border-solid border-[#656565]/30">
                                    <div class="title-content py-[20px] grid grid-cols-[auto_auto] items-center justify-between gap-[15px] cursor-pointer select-none z-[1] text-[24px] lg:text-[22px] md:text-[20px] text-[#0055A3] xs:text-[18px] font-normal relative duration-450 group/items 
                                    group-[&.active]/accordion:text-[#C7234B] hover:text-[#C7234B]">
                                        <div class="title ">
                                            How long is the Origin Discover Padel Court lifespan?
                                        </div>
                                        <div class="glyph-wrapper relative w-[50px] h-[50px] duration-450 rounded-full my-auto">
                                            <span class="line-h w-[20px] h-[2px] rounded-md bg-[#C7234B] block absolute left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%] duration-450"></span>
                                            <span class="line-v w-[2px] h-[20px] rounded-md bg-[#C7234B] block absolute left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%] duration-450 group-[&.active]/accordion:!h-0"></span>
                                        </div>
                                    </div>
                                    <div class="ac-content active z-[1] relative hidden ">
                                        <div class="editor editor-lg lg:editor-base sm:editor-sm xs:editor-h1:text-[24px] editor-headings:font-medium editor-headings:mb-[10px] editor-p:text-[#656565]/60 editor-strong:bg-[#656565] border-b border-solid border-white/10 pb-[40px] md:max-w-full">
                                            <p>Origin Discover Padel Court is covered with 10x20 meters of green artificial turf and surrounded by steel construction, glass panels, and steel mesh. It is mostly used outdoors.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item group/accordion mb-[15px] tiles-nav__item relative duration-450 overflow-hidden isolate [&.active_.image]:opacity-100 border-b border-solid border-[#656565]/30">
                                    <div class="title-content py-[20px] grid grid-cols-[auto_auto] items-center justify-between gap-[15px] cursor-pointer select-none z-[1] text-[24px] lg:text-[22px] md:text-[20px] text-[#0055A3] xs:text-[18px] font-normal relative duration-450 group/items 
                                    group-[&.active]/accordion:text-[#C7234B] hover:text-[#C7234B]">
                                        <div class="title ">
                                            How long does the Origin Discover Padel Court construction process take?
                                        </div>
                                        <div class="glyph-wrapper relative w-[50px] h-[50px] duration-450 rounded-full my-auto">
                                            <span class="line-h w-[20px] h-[2px] rounded-md bg-[#C7234B] block absolute left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%] duration-450"></span>
                                            <span class="line-v w-[2px] h-[20px] rounded-md bg-[#C7234B] block absolute left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%] duration-450 group-[&.active]/accordion:!h-0"></span>
                                        </div>
                                    </div>
                                    <div class="ac-content active z-[1] relative hidden ">
                                        <div class="editor editor-lg lg:editor-base sm:editor-sm xs:editor-h1:text-[24px] editor-headings:font-medium editor-headings:mb-[10px] editor-p:text-[#656565]/60 editor-strong:bg-[#656565] border-b border-solid border-white/10 pb-[40px] md:max-w-full">
                                            <p>Origin Discover Padel Court is covered with 10x20 meters of green artificial turf and surrounded by steel construction, glass panels, and steel mesh. It is mostly used outdoors.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item group/accordion mb-[15px] tiles-nav__item relative duration-450 overflow-hidden isolate [&.active_.image]:opacity-100 border-b border-solid border-[#656565]/30">
                                    <div class="title-content py-[20px] grid grid-cols-[auto_auto] items-center justify-between gap-[15px] cursor-pointer select-none z-[1] text-[24px] lg:text-[22px] md:text-[20px] text-[#0055A3] xs:text-[18px] font-normal relative duration-450 group/items 
                                    group-[&.active]/accordion:text-[#C7234B] hover:text-[#C7234B]">
                                        <div class="title ">
                                            How much does Origin Discover Padel Court construction cost?
                                        </div>
                                        <div class="glyph-wrapper relative w-[50px] h-[50px] duration-450 rounded-full my-auto">
                                            <span class="line-h w-[20px] h-[2px] rounded-md bg-[#C7234B] block absolute left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%] duration-450"></span>
                                            <span class="line-v w-[2px] h-[20px] rounded-md bg-[#C7234B] block absolute left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%] duration-450 group-[&.active]/accordion:!h-0"></span>
                                        </div>
                                    </div>
                                    <div class="ac-content active z-[1] relative hidden ">
                                        <div class="editor editor-lg lg:editor-base sm:editor-sm xs:editor-h1:text-[24px] editor-headings:font-medium editor-headings:mb-[10px] editor-p:text-[#656565]/60 editor-strong:bg-[#656565] border-b border-solid border-white/10 pb-[40px] md:max-w-full">
                                            <p>Origin Discover Padel Court is covered with 10x20 meters of green artificial turf and surrounded by steel construction, glass panels, and steel mesh. It is mostly used outdoors.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item group/accordion mb-[15px] tiles-nav__item relative duration-450 overflow-hidden isolate [&.active_.image]:opacity-100 border-b border-solid border-[#656565]/30">
                                    <div class="title-content py-[20px] grid grid-cols-[auto_auto] items-center justify-between gap-[15px] cursor-pointer select-none z-[1] text-[24px] lg:text-[22px] md:text-[20px] text-[#0055A3] xs:text-[18px] font-normal relative duration-450 group/items 
                                    group-[&.active]/accordion:text-[#C7234B] hover:text-[#C7234B]">
                                        <div class="title ">
                                            What are features of padel turf (artificial padel grass)?
                                        </div>
                                        <div class="glyph-wrapper relative w-[50px] h-[50px] duration-450 rounded-full my-auto">
                                            <span class="line-h w-[20px] h-[2px] rounded-md bg-[#C7234B] block absolute left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%] duration-450"></span>
                                            <span class="line-v w-[2px] h-[20px] rounded-md bg-[#C7234B] block absolute left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%] duration-450 group-[&.active]/accordion:!h-0"></span>
                                        </div>
                                    </div>
                                    <div class="ac-content active z-[1] relative hidden ">
                                        <div class="editor editor-lg lg:editor-base sm:editor-sm xs:editor-h1:text-[24px] editor-headings:font-medium editor-headings:mb-[10px] editor-p:text-[#656565]/60 editor-strong:bg-[#656565] border-b border-solid border-white/10 pb-[40px] md:max-w-full">
                                            <p>Origin Discover Padel Court is covered with 10x20 meters of green artificial turf and surrounded by steel construction, glass panels, and steel mesh. It is mostly used outdoors.</p>
                                        </div>
                                    </div>
                                </li>
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
                            <div class="editor editor-base lg:editor-base sm:editor-sm editor-headings:text-[#656565] editor-headings:font-normal editor-headings:leading-tight editor-strong:font-semibold editor-h2:text-[28px] sm:editor-h2:text-[24px] xs:editor-h2:text-[22px] editor-strong:text-[#D00D15] editor-headings:mb-[10px] editor-p:text-[18px] sm:editor-p:text-[16px] editor-p:font-light editor-p:text-[#656565] border-b border-solid border-white/10 pb-[30px] mt-[30px] max-w-[500px] md:max-w-full m-auto text-center">
                                <h2>Your Contact Information</h2>
                                <p>We will call you back as soon as possible.</p>
                            </div>
                            <form action="#" class="self-center max-w-[500px] md:max-w-full m-auto ">
                                <div class="form grid grid-cols-6 sm:grid-cols-1 gap-[15px] ">
                                    <!-- itemlere error classı ekleyerek mesajları aktif edebilirsiniz. -->
                                    <div class="item group/item col-span-6 sm:col-span-1 relative ">
                                        <input type="text" name="name" id="name" class="block px-[30px] sm:px-[15px] w-full text-[16px] border border-[#656565]/40 focus:border-[#0055A3]/50 bg-[#D9D9D9]/20 appearance-none !outline-none focus:!outline-none !ring-0 text-[#18191B] placeholder:text-[18191B]/40 focus:placeholder:text-[#18191B] placeholder:duration-450 font-normal placeholder:font-light rounded-[20px] focus:text-[#18191B] group-[&.error]/item:border-red-500 duration-300 h-[50px] " placeholder="Name Surname" required="">
                                        <div class="tooltip hidden text-[14px] absolute right-2 top-full -translate-y-1/2 w-fit h-fit rounded-none border border-solid border-red-500 text-red-500 bg-white px-3 py-1 group-[&.error]/item:block">Error</div>
                                    </div>
                                    <div class="item group/item col-span-6 sm:col-span-1 relative">
                                        <input type="tel" name="phone" id="phone" class="block px-[30px] sm:px-[15px] w-full text-[16px] border border-[#656565]/40 focus:border-[#0055A3]/50 bg-[#D9D9D9]/20 appearance-none !outline-none focus:!outline-none !ring-0 text-[#18191B] placeholder:text-[18191B]/40 focus:placeholder:text-[#18191B] placeholder:duration-450 font-normal placeholder:font-light rounded-[20px] focus:text-[#18191B] group-[&.error]/item:border-red-500 duration-300 h-[50px]" placeholder="Phone" required="">
                                        <div class="tooltip hidden text-[14px] absolute right-2 top-full -translate-y-1/2 w-fit h-fit rounded-none border border-solid border-red-500 text-red-500 bg-white px-3 py-1 group-[&.error]/item:block">Error</div>
                                    </div>

                                    <div class="item group/item col-span-6 sm:col-span-1 relative">
                                        <input type="email" name="email" id="email" class="block px-[30px] sm:px-[15px] w-full text-[16px] border border-[#656565]/40 focus:border-[#0055A3]/50 bg-[#D9D9D9]/20 appearance-none !outline-none focus:!outline-none !ring-0 text-[#18191B] placeholder:text-[18191B]/40 focus:placeholder:text-[#18191B] placeholder:duration-450 font-normal placeholder:font-light rounded-[20px] focus:text-[#18191B] group-[&.error]/item:border-red-500 duration-300 h-[50px]" placeholder="E-mail" required="">
                                        <div class="tooltip hidden text-[14px] absolute right-2 top-full -translate-y-1/2 w-fit h-fit rounded-none border border-solid border-red-500 text-red-500 bg-white px-3 py-1 group-[&.error]/item:block">Error</div>
                                    </div>

                                    <div class="item group/item col-span-6 sm:col-span-1 relative">
                                        <textarea name="review" id="review" class="block px-[30px] py-[15px] sm:p-[15px] w-full text-[16px] border border-[#656565]/40 focus:border-[#0055A3]/50 bg-[#D9D9D9]/20 appearance-none !outline-none focus:!outline-none !ring-0 text-[#18191B] placeholder:text-[18191B]/40 focus:placeholder:text-[#18191B] placeholder:duration-450 font-normal placeholder:font-light rounded-[20px] text-/80 group-[&.error]/item:border-red-500 duration-300 h-[50px] min-h-[90px]" placeholder="Message*" required=""></textarea>
                                        <div class="tooltip hidden text-[14px] absolute right-2 top-full -translate-y-1/2 w-fit h-fit rounded-none border border-solid border-red-500 text-red-500 bg-white px-3 py-1 group-[&.error]/item:block">Error</div>
                                    </div>

                                    <div class="item group/item col-span-6 xl:col-span-6 md:col-span-4 sm:col-span-1 relative pt-2.5">
                                        <div class="form-el flex items-center gap-[15px] md:h-full">
                                            <input type="checkbox" id="acceptance" class="peer cursor-pointer absolute left-0 top-0 w-full h-full opacity-0 z-10">
                                            <div class="box relative shrink-0 h-5 w-5 before:absolute before:duration-450 peer-checked:before:!opacity-100 peer-checked:before:!scale-100 before:scale-0 before:opacity-0 before:left-[50%] before:top-[50%] before:translate-x-[-50%] before:translate-y-[-50%] before:w-[40%] before:h-[40%] before:bg-[#818B99] before:rounded-full duration-450 shadow-[0_0_0_1px_rgb(129_139_153/.35)] peer-hover:shadow-[0_0_0_1px_rgb(129_139_153/.5)] peer-checked:!shadow-[0_0_0_1px_rgb(129_139_153/.5)] border-0 bg-transparent group-[&.error]/item:shadow-[0_0_0_1px_rgba(255_0_0/100)]  rounded-full"></div>
                                            <label for="acceptance" class="text-[16px] text-[#18191B]/40 leading-tight duration-450 font-medium"><a href="#popup-gdpr" class="relative z-20 text-[#818B99] font-semibold hover:text-[#0055A3] duration-450 underline" data-fancybox="">
                                                    KVKK
                                                </a>Formunu okudum ve kabul ediyorum.</label>
                                            <div class="tooltip hidden text-[14px] absolute right-2 top-full -translate-y-1/2 w-fit h-fit rounded-none border border-solid border-red-500 text-red-500 bg-[#818B99] px-3 py-1 group-[&.error]/item:block z-10">Error</div>
                                        </div>
                                    </div>
                                    <div class="item col-span-6 xl:col-span-6 md:col-span-2 sm:col-span-1 relative flex items-center justify-center w-full pt-2.5">
                                        <div class="button-field w-full ">
                                            <!-- loading classını buttona ekleyerek icon aktif edebilirsiniz. -->
                                            <a href="javascript:;" class="button group m-auto w-full h-[50px] flex justify-center px-[30px] bg-[#0055A3] border border-solid border-[#0055A3] relative space-x-[10px] duration-500 overflow-hidden isolate rounded-full before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-white hover:before:left-0 before:duration-500">
                                                <div class="text text-[16px] font-medium flex items-center text-white relative z-2 duration-500 group-hover:text-[#0055A3]">Get A Free Quote</div>
                                                <!-- LOADING -->
                                                <div class="loading hidden group-[.loading]:block relative top-[50%] translate-y-[-50%] !h-[16px] !w-[16px] z-2 after:content after:absolute after:right-[0px] after:border-[3px] after:border-solid after:border-white/50 group-hover:after:border-[#0055A3]/50 after:border-t-[3px] after:border-t-solid after:border-t-white group-hover:after:border-t-[#0055A3] after:rounded-full after:w-[16px] after:h-[16px] after:animate-spin after:duration-450"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- FORM GÖNDERİLDİ/GÖNDERİLEMEDİ MESAJLARI -->
                                    <!-- iteme error veya success classı ekleyerek mesajları aktif edebilirsiniz. -->
                                    <div class="item group col-span-6 sm:col-span-1 relative flex ">
                                        <!-- ERROR -->
                                        <div class="tooltip hidden text-[14px] group-[.error]:flex group-[.error]:justify-center w-full text-red-500 bg-white px-[10px] py-[10px] rounded border-[1px] border-solid border-red-500">Hata</div>
                                        <!-- SUCCESS -->
                                        <div class="tooltip hidden text-[14px] group-[.success]:flex group-[.success]:justify-center w-full text-green-500 bg-white px-[10px] py-[10px] rounded border-[1px] border-solid border-green-500">Düzgün</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</main>

@endsection