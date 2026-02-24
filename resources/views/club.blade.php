@extends('layouts.main')

@section('content')
<?php $code = \App\Models\Code::where('lang', app()->getLocale())->first(); ?>
<main class="main-field header-space">
    <section class="content page-tabs relative">
        <div class="container max-w-[1440px] ">
            <div class="nav-content title-content py-[12.5px] f-nav w-full fixed left-0 top-[160px] z-[9] duration-450 bg-gradient-to-r from-[#005AA5] to-[#C7234B] ">
                <div class="wrapper flex justify-between max-w-[1440px] m-auto px-[30px]" dir="">
                    <!-- NAVIGATION -->
                    <ul class="navigation flex-wrap w-full gap-[10px] flex items-center md:hidden">
                        <li class="flex items-center">
                            <a href="{{env('HTTP_DOMAIN')}}" class="flex group">
                                <span class="text text-white text-[20px] md:text-[18px] xs:text-[16px] font-medium group-hover:text-white/80 duration-450 leading-tight">Padel Clubs</span>
                            </a>
                        </li>
                        <li class="split relative flex items-center h-[12px]">
                            <span class="text text-white text-[20px] md:text-[18px] xs:text-[16px] font-medium group-hover:text-white/80 duration-450 leading-tight">/</span>
                        </li>
                        <li class="flex items-center">
                            <a href="javascript:;" class="flex group">
                                <span class="text text-white text-[20px] md:text-[18px] xs:text-[16px] font-medium group-hover:text-white/80 duration-450 leading-tight">Padel Club Impact</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tabs tabs-horizontal tabs-horizontal-4 nav w-full" role="nav">
                        <div class=" w-full md:max-w-full overflow-auto scrollbar scrollbar-w-[8px] scrollbar-h-[5px] scrollbar-track-rounded-[5px] scrollbar-thumb-rounded-[5px] scrollbar-thumb-[#0055A3]/50 scrollbar-track-primary-200 " id="menu-center">
                            <ul class="flex items-center gap-[30px] w-max ml-auto">
                                <li><a data-target="#general" class="scrollable cursor-pointer text-white/60 [&.active]:text-white hover:text-white duration-450 active">General</a></li>
                                <li><a data-target="#technic" class="scrollable cursor-pointer text-white/60 [&.active]:text-white hover:text-white duration-450 ">Technic Spesifications</a></li>
                                <li><a data-target="#facilities" class="scrollable cursor-pointer text-white/60 [&.active]:text-white hover:text-white duration-450 ">Facilities</a></li>
                                <li><a data-target="#FAQ" class="scrollable cursor-pointer text-white/60 [&.active]:text-white hover:text-white duration-450 ">FAQ</a></li>
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
            <section class="pt-[70px] md:pt-[50px]" id="general">
                <section class="prod-carousel ">
                    <div class="container max-w-full px-0">
                        <div class="club-content-swiper relative">
                            <div class="swiper-container club-top relative w-full mx-auto overflow-hidden h-[calc(100vh-230px)] lg:h-[700px] md:h-[700px] xs:h-[calc(100vh-210px)] min-h-[600px]">
                                <div class="swiper-wrapper">
                                    @foreach($club->sliders1 as $slider)
                                    <div class="swiper-slide bg-cover bg-center relative overflow-hidden isolate" data-video="../assets/image/other/tennis.mp4">
                                        <div class="bg absolute w-full h-full left-0 top-0 [background:_radial-gradient(28.72%_66.96%_at_52.65%_52.75%,_rgba(0,0,0,0.12)_0%,_rgba(0,85,163,_0.6)_100%)] opacity-50"></div>
                                        <div class="text-container absolute z-[5] top-[45%] xl:top-[40%] translate-y-[-50%] left-[50%] translate-x-[-50%] w-full max-w-[1440px] mx-auto px-[30px]  group-[&.left-slide]/slide:text-left group-[&.right-slide]/slide:text-right">
                                            <div class="text-field relative xl:pl-[50px] xs:pl-0" dir="">
                                                <div class="icon icon-arrow-down text-[20px] h-[20px] block leading-none duration-350 text-white absolute bottom-[50px] -left-[50px] xl:left-0 xs:hidden"></div>
                                                <div class="editor editor-xl md:editor-lg xs:editor-base editor-h1:text-[60px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-h2:text-[44px] xl:editor-h2:text-[40px] lg:editor-h2:text-[34px] md:editor-h2:text-[30px] sm:editor-h2:text-[26px] xs:editor-h2:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:mb-[10px] editor-headings:text-white group-hover/slide:editor-headings:text-white editor-h1:font-bold editor-headings:font-normal editor-headings:leading-[1.25] editor-headings:line-clamp-3 editor-p:text-[20px] editor-p:font-light editor-p:text-white editor-p:mb-0 editor-p:duration-450  text-white mr-auto w-full sm:[&_br]:hidden md:editor-p:text-[18px] xs:editor-p:text-[16px] editor-p:line-clamp-2 lg:editor-p:line-clamp-5 rtl:max-w-full">
                                                    <h2>Padel Clubs</h2>
                                                    <h1>{{$club->title}}</h1>
                                                    <h3>{{$slider->title}}</h3>
                                                    <p>{{$slider->description}}</p>
                                                </div>
                                                <div class="scroll-down group/scroll scrollable absolute top-[50px] -left-[100px] xl:-left-[40px] z-20 cursor-pointer space-y-[10px] flex flex-col items-start justify-start -rotate-90 opacity-70 hover:opacity-100 duration-450 xs:hidden" data-target=".tabmenuscroll">
                                                    <div class="text text-[16px] text-white duration-450 translate-x-5 group-hover/scroll:translate-x-0">Scroll Down</div>
                                                    <div class="line w-10 h-[2px] left-0 bg-white duration-500 group-hover/scroll:w-full"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="image h-full w-full">
                                            <img loading="lazy" src="{{env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'club_images_folder'], $slider->lang) .'/'. $slider->image}}" alt="" class="h-full object-center object-cover w-full">
                                        </div>
                                        <div class="video group/video absolute top-0 left-0 w-full h-full">

                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="thumbs-content max-w-[1440px] xl:w-[95%] bg-white/20 backdrop-blur-[19px] rounded-[30px] w-full m-auto mt-[30px] absolute bottom-[50px] xl:bottom-[60px] md:bottom-[10px] left-[50%] translate-x-[-50%] z-[1] flex px-[35px] xs:px-[10px] gap-[25px]">

                                <div class="button video-button group/vdbutton [&.active]:text-red-500 flex justify-center items-center cursor-pointer w-fit h-fit my-auto">
                                    <div class="flex items-center">
                                        <div class="toggleButton relative mb-[20px]">
                                            <div class="block border border-solid border-white/30 w-[132px] h-[65px] rounded-[20px]"></div>
                                            <div class="toggleDot dot absolute border-[2.5px] border-solid border-[#C7234B] left-0 top-0 bg-white w-[70px] h-[65px] transition 
                                            group-[&.active]/vdbutton:translate-x-[62px] rounded-[20px]">

                                            </div>
                                            <div class="icon-photo text-[30px] flex items-center text-[#C7234B] group-[&.active]/vdbutton:text-white absolute top-[50%] left-[18px] translate-y-[-50%] z-2 duration-450 group-hover:text-[#0055A3] group-hover:-translate-x-1 ">
                                                <span class="absolute -left-[10px] font-light -bottom-[25px] translate-y-[100%] text-[16px] text-white group-[&.active]/vdbutton:text-white/30 duration-450">Photo</span>
                                            </div>
                                            <div class="icon-video text-[30px] flex items-center text-white group-[&.active]/vdbutton:text-[#C7234B] absolute top-[50%] right-[18px] translate-y-[-50%] z-2 duration-450 group-hover:text-[#0055A3] group-hover:-translate-x-1">
                                                <span class="absolute -left-[10px] font-light -bottom-[25px] translate-y-[100%] text-[16px] text-white/30 group-[&.active]/vdbutton:text-white duration-450">Video</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="content max-w-[700px] md:max-w-[400px] sm:max-w-[250px] xs:w-[150px] px-[80px] md:px-[50px] xs:px-[10px] m-auto sm:ml-auto sm:mr-0 xs:mr-[15px] relative">
                                    <div class="swiper-container club-thumbs relative w-full mx-auto overflow-hidden h-[140px] box-border py-[35px]">
                                        <div class="swiper-wrapper ">
                                            @foreach($club->sliders1 as $slider)
                                            <div class="swiper-slide group/slide select-none !h-[100px] flex items-center justify-center opacity-[.65] rounded-[10px] [&.swiper-slide-active]:opacity-100 bg-cover bg-center cursor-pointer">
                                                <div class="content">
                                                    <div class="img-field relative w-full h-full mb-[15px]">
                                                        <div class="gradient absolute left-[50%] top-[50%] z-0 translate-x-[-50%] translate-y-[-50%] m-auto [background:linear-gradient(180deg,_#FFFFFF_0%,_#0055A3_0.01%,_rgba(0,90,165,0.35)_100%);] w-[75px] h-[75px] rounded-full flex justify-center items-center opacity-0 group-[.swiper-slide-active]/slide:opacity-100 duration-450 border border-solid border-[#0055A3]">
                                                        </div>
                                                        <div class="img h-[45px] group-[&.swiper-slide-active]/slide:h-[50px] relative z-[1] duration-450 w-full overflow-hidden">
                                                            <img class="h-full w-full object-contain object-center duration-500" 
                                                            src="{{env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'club_images_folder'], $slider->lang) .'/'. $slider->icon}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="text-field overflow-hidden isolate">
                                                        <div class="text-base font-normal text-white h-0 group-[&.swiper-slide-active]/slide:h-[25px] duration-450 text-center">Court</div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="controller flex gap-[15px] justify-between items-center w-full h-full absolute left-0 top-0 z-[2] pointer-events-none">
                                        <div class="club-button-prev swiper-slide-prev  pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none xs:relative xs:-left-[15px]">
                                            <div class="icon group/item flex items-center justify-center w-[40px] h-[40px] rounded-full cursor-pointer duration-500 border border-solid border-transparent bg-[#E0E0E0] hover:bg-[#0055A3] group">
                                                <div class="icon-chevron-left text-[#231F20]/50 text-[12px] flex items-center justify-center group-hover/item:text-white duration-450 group-hover/item:translate-x-[-3px]"></div>
                                            </div>
                                        </div>
                                        <div class="club-button-next swiper-slide-next  pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none xs:relative xs:-right-[15px]">
                                            <div class="icon group/item flex items-center justify-center w-[40px] h-[40px] rounded-full cursor-pointer duration-500 border border-solid border-transparent bg-[#E0E0E0] hover:bg-[#0055A3] group">
                                                <div class="icon-chevron-right text-[#231F20]/50 text-[12px] flex items-center justify-center group-hover/item:text-white duration-450 group-hover/item:translate-x-[3px]"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-field flex flex-wrap justify-center items-center gap-[25px] sm:hidden">
                                    <a href="javascript:;" data-target=".contact-form" class="button scrollable group min-w-[180px] lg:min-w-[150px] xs:lg:min-w-[120px] justify-center items-center w-fit h-[50px] flex px-[30px] bg-white relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-white before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-[#0055A3] hover:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center ">
                                        <div class="text-[18px]  xs:text-[16px] font-normal font-inter flex items-center text-[#0055A3] group-hover:text-white relative z-2 duration-450 w-max">Contact</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <section class="project-info py-[100px] md:py-[50px] relative overflow-hidden isolate tabmenuscroll" id="technic">
                <div class="bg w-[200px] h-[200px] rounded-full absolute left-[45%] top-[50%] translate-y-[-50%] pointer-events-none z-[2]">
                    <img loading="lazy" src="../assets/image/other/Ellipsedty-5.png" alt="" class="h-full object-center object-contain w-full">
                </div>
                <div class="bg w-[600px] h-[600px] sm:w-[300px] sm:h-[300px]  rounded-full absolute left-[8%] top-[40%] translate-y-[-50%] pointer-events-none z-[2]">
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
                    <div class="wrapper grid grid-cols-[minmax(0,6fr)_minmax(0,7fr)] md:grid-cols-1 relative gap-[100px] lg:gap-[50px]">
                        <div class="project-detail relative xs:m-auto xs:w-full !h-[650px] xl:!h-[550px] lg:!h-[500px] md:!h-[400px] xs:!h-[350px] rounded-[30px] overflow-hidden isolate">
                            <!-- project-swiper'ın swiper-slide adedi kadar detail-box oluşturulmalıdır. -->
                            <div class="detail-box active opacity-0 absolute translate-y-[20px] duration-450 [visibility:hidden;] [&.active]:opacity-100 [&.active]:translate-y-0 [&.active]:delay-[450ms] [&.active]:visible gap-[25px] w-full h-full z-[5]" data-id="0">
                                <div class="img h-[650px] xl:h-[550px] lg:h-[500px] md:h-[400px] xs:h-[350px] w-full overflow-hidden rounded-[30px] image-zoom">
                                    <img class="h-full w-full object-cover object-center duration-500" src="../assets/image/other/project.jpg" alt="">
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
                                                <div class="text-field m-auto"   dir="">
                                                    <div class="sport-box bg-[#F6F6F6]/5 rounded-[30px] p-[30px] relative overflow-hidden border border-solid border-transparent hover:border-white/50 group-[&.swiper-slide-active]/slide:border-white/50 duration-450 h-[190px] flex flex-col justify-center">
                                                        <div class="gradient duration-450 bg-gradient-to-br from-white from-15% to-white/50 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-[.swiper-slide-active]/slide:opacity-20"></div>
                                                        <div class="gradient duration-450 [background:linear-gradient(180deg,_rgba(247,247,247,0.06)_0%,_rgba(247,247,247,0)_100%);]  absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-100 group-[.swiper-slide-active]/slide:opacity-0"></div>
                                                        <div class="img h-[50px] group-[&.swiper-slide-active]/slide:h-[100px] relative z-[1] duration-450 w-full overflow-hidden">
                                                            <img class="h-full w-full object-contain object-center duration-500" src="../assets/image/other/tennis.png" alt="">
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
                                                <div class="text-field m-auto" dir="">
                                                    <div class="sport-box bg-[#F6F6F6]/5 rounded-[30px] p-[30px] relative overflow-hidden border border-solid border-transparent hover:border-white/50 group-[&.swiper-slide-active]/slide:border-white/50 duration-450 h-[190px] flex flex-col justify-center">
                                                        <div class="gradient duration-450 bg-gradient-to-br from-white from-15% to-white/50 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-[.swiper-slide-active]/slide:opacity-20"></div>
                                                        <div class="gradient duration-450 [background:linear-gradient(180deg,_rgba(247,247,247,0.06)_0%,_rgba(247,247,247,0)_100%);]  absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-100 group-[.swiper-slide-active]/slide:opacity-0"></div>
                                                        <div class="img h-[50px] group-[&.swiper-slide-active]/slide:h-[100px] relative z-[1] duration-450 w-full overflow-hidden">
                                                            <img class="h-full w-full object-contain object-center duration-500" src="../assets/image/other/court.png" alt="">
                                                        </div>
                                                        <div class="title text-[18px] font-normal h-[55px] group-[&.swiper-slide-active]/slide:h-0 group- relative[&.swiper-slide-active]/slide:opacity-0 duration-450 text-white text-center line-clamp-2">
                                                            Best Padel
                                                            Experience
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide group/slide !duration-450 !transition-all [&.swiper-slide-active]:opacity-100  [&.swiper-slide-active]:!scale-100 [&.swiper-slide-active]:!visible [&.swiper-slide-next]:opacity-100 [&.swiper-slide-next]:!scale-100 [&.swiper-slide-next]:!visible !pointer-events-auto">
                                            <div class="content relative rounded-[30px] ">
                                                <div class="text-field m-auto"   dir="">
                                                    <div class="sport-box bg-[#F6F6F6]/5 rounded-[30px] p-[30px] relative overflow-hidden border border-solid border-transparent hover:border-white/50 group-[&.swiper-slide-active]/slide:border-white/50 duration-450 h-[190px] flex flex-col justify-center">
                                                        <div class="gradient duration-450 bg-gradient-to-br from-white from-15% to-white/50 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-[.swiper-slide-active]/slide:opacity-20"></div>
                                                        <div class="gradient duration-450 [background:linear-gradient(180deg,_rgba(247,247,247,0.06)_0%,_rgba(247,247,247,0)_100%);]  absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-100 group-[.swiper-slide-active]/slide:opacity-0"></div>
                                                        <div class="img h-[50px] group-[&.swiper-slide-active]/slide:h-[100px] relative z-[1] duration-450 w-full overflow-hidden">
                                                            <img class="h-full w-full object-contain object-center duration-500" src="../assets/image/other/running.png" alt="">
                                                        </div>
                                                        <div class="title text-[18px] font-normal h-[55px] group-[&.swiper-slide-active]/slide:h-0 group- relative[&.swiper-slide-active]/slide:opacity-0 duration-450 text-white text-center line-clamp-2">
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
                                                    <h2>Technical Spesifications</h2>
                                                    <p>Double Corner Columns: 50 x 100 x 2,5 mm - Beams: 40 x 60 x 2,5 mm Modular bolted system | Center Columns: 100 x 50 x 2,5 mm - Height: 3 - 4 m</p>
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
            <section class="py-[100px] xl:py-[50px] md:py-[50px] overflow-hidden isolate" id="facilities">
                @foreach($club->sliders2 as $key => $slider)
                    @if($key % 2 == 0)
                        <div class="club-box mt-[100px] xl:mt-[75px] lg:mt-[50px] relative">
                            <div class="bg w-[500px] h-[500px] rounded-full absolute -left-[10%] top-[60%] translate-y-[-50%] pointer-events-none opacity-90 ">
                                <img loading="lazy" src="../assets/image/other/Ellipsedty-2.png" alt="" class="h-full object-center object-contain w-full">
                            </div>
                            <div class="icons overflow-hidden absolute left-[70px] top-[40%] translate-y-[-50%] pointer-events-none z-[5]">
                                <div class="icon icon-arrow-down text-[100px] w-[105px] h-[100px] block leading-none duration-350 text-transparent bg-clip-text bg-gradient-to-b from-[#0055A3] to-[#0055A3] opacity-5"></div>
                            </div>
                            <div class="icons overflow-hidden absolute -left-[100px] top-[70%] translate-y-[-50%] pointer-events-none z-[5]">
                                <div class="icon icon-arrow-down text-[195px] w-[200px] h-[195px] block leading-none duration-350 text-transparent bg-clip-text bg-gradient-to-b from-[#0055A3] to-[#0055A3] opacity-5"></div>
                            </div>
                            <div class="container max-w-[1440px]">
                                <div class="wrapper grid grid-cols-[minmax(0,4fr)_minmax(0,9fr)] gap-[100px] lg:gap-[50px] md:grid-cols-1">
                                    <div class="text-field m-auto " dir="">
                                        <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:mb-[50px] editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-white editor-h1:font-bold editor-headings:font-normal editor-headings:leading-[1.25] editor-headings:line-clamp-3 editor-p:text-[20px] editor-p:font-light editor-p:text-[#231F20] editor-p:mb-0 editor-p:duration-450  text-white mr-auto w-full sm:[&_br]:hidden">
                                            <h1>{{$slider->title}}</h1>
                                            <p>{!!$slider->description!!}</p>
                                        </div>
                                    </div>
                                    <div class="img relative h-[650px] xl:h-[550px] lg:h-[500px] md:h-[400px] xs:h-[300px] w-full overflow-hidden isolate rounded-l-[20px] md:rounded-[20px] strecth-to-right image-zoom">
                                        <img class="h-full w-full object-cover object-center duration-500" src="{{ env('HTTP_DOMAIN') . '/'. getFolder(['uploads_folder', 'club_images_folder'], $club->lang) .'/'. $slider->image }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="club-box mt-[100px] xl:mt-[75px] lg:mt-[50px] relative">
                            <div class="bg w-[500px] h-[500px] rounded-full absolute -right-[15%] top-[60%] translate-y-[-50%] pointer-events-none ">
                                <img loading="lazy" src="../assets/image/other/Ellipsedty-2.png" alt="" class="h-full object-center object-contain w-full">
                            </div>
                            <div class="icons overflow-hidden absolute right-[30px] top-[25%] translate-y-[-50%] pointer-events-none z-[1]">
                                <div class="icon icon-arrow-down text-[85px] h-[85px] block leading-none duration-350 text-transparent bg-clip-text bg-gradient-to-b from-[#0055A3] via-[#C7234B]/50 to-[#0055A3]/0 opacity-5"></div>
                            </div>
                            <div class="icons overflow-hidden absolute right-[50px] top-[45%] translate-y-[-50%] pointer-events-none z-[1]">
                                <div class="icon icon-arrow-down text-[140px] h-[140px] block leading-none duration-350 text-transparent bg-clip-text bg-gradient-to-b from-[#0055A3] via-[#C7234B]/50 to-[#0055A3]/0 opacity-5"></div>
                            </div>
                            <div class="icons overflow-hidden absolute -right-[150px] top-[75%] translate-y-[-50%] pointer-events-none z-[1]">
                                <div class="icon icon-arrow-down text-[250px] h-[250px] block leading-none duration-350 text-transparent bg-clip-text bg-gradient-to-b from-[#0055A3] via-[#C7234B]/50 to-[#0055A3]/0 opacity-5"></div>
                            </div>
                            <div class="container max-w-[1440px]">
                                <div class="wrapper grid grid-cols-[minmax(0,9fr)_minmax(0,4fr)] gap-[100px] lg:gap-[50px] md:grid-cols-1">
                                    <div class="img relative h-[650px] xl:h-[550px] lg:h-[500px] md:h-[400px] xs:h-[300px] w-full overflow-hidden isolate rounded-r-[20px] sm:rounded-[20px] strecth-to-left md:order-2 image-zoom">
                                        <img class="h-full w-full object-cover object-center duration-500" src="../assets/image/other/impact-2.jpg" alt="">
                                    </div>
                                    <div class="text-field m-auto"   dir="md:order-1">
                                        <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:mb-[50px] editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-white editor-h1:font-bold editor-headings:font-normal editor-headings:leading-[1.25] editor-headings:line-clamp-3 editor-p:text-[20px] editor-p:font-light editor-p:text-[#231F20] editor-p:mb-0 editor-p:duration-450  text-white mr-auto w-full sm:[&_br]:hidden">
                                            <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:mb-[50px] editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-white editor-h1:font-bold editor-headings:font-normal editor-headings:leading-[1.25] editor-headings:line-clamp-3 editor-p:text-[20px] editor-p:font-light editor-p:text-[#231F20] editor-p:mb-0 editor-p:duration-450  text-white mr-auto w-full sm:[&_br]:hidden">
                                                <h1>{{$slider->title}}</h1>
                                                <p>{!!$slider->description!!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </section>
            <section class="py-[100px] xl:py-[50px] md:py-[50px]" id="FAQ">
                <section class="accordion-content px-[30px] md:px-0 section-animation ">
                    <div class="container max-w-[1440px] bg-pampas-100 pb-[30px] md:pb-[0]" dir="">
                        <div class="wrapper grid grid-cols-[minmax(0,4fr)_minmax(0,9fr)] md:grid-cols-1 gap-[50px] md:gap-[10px] ">
                            <div class="dynamic-sticky h-fit md:!relative md:!top-0">
                                <div class="text-field relative mt-[30px]">
                                    <div class="icon icon-arrow-down text-[34px] h-[34px] block leading-none duration-350 text-[#C7234B] absolute -top-[30px] -left-[30px] md:left-0 md:-top-[50px]"></div>
                                    <div class="editor title editor-headings:duration-450 group-hover/mpb:editor-headings:text-white  editor-headings:mb-0 editor-headings:font-bold xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] editor-h1:text-[40px] editor-strong:duration-450 group-hover/mpb:editor-strong:text-white editor-strong:text-[40px] xl:editor-strong:text-[34px] lg:editor-strong:text-[20px] leading-tight duration-450 font-bold w-full editor-headings:text-transparent editor-headings:bg-clip-text editor-headings:bg-gradient-to-l editor-headings:from-[#C7234B] editor-headings:from-40% editor-headings:to-[#0055A3] editor-headings:to-75% editor-strong:text-transparent editor-strong:bg-clip-text editor-strong:bg-gradient-to-l editor-strong:from-[#0055A3] editor-strong:from-25% editor-strong:to-[#C7234B] editor-strong:font-bold editor-strong:block max-w-full">
                                        <h1>{{$club->title}}
                                            Frequently Asked
                                            Questions</h1>
                                    </div>
                                </div>
                            </div>
                            <ul class="accordion tiles-nav scrollreveal">
                                @foreach($club->faqs as $faq)
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
                                                <p>{{$faq->description}}</p>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </section>

            </section>
            <section class="contact-form pb-[100px] md:pb-[50px]">
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

<!-- script --> 
@section('script') 

@endsection