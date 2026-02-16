@extends('layouts.main')

@section('content')
<?php 
    $pageTitle = 'Projects';
    //dd($project)
?>
<main class="main-field header-space">
    <section class="content page-tabs relative">
        <div class="container max-w-[1440px] ">
            <div class="nav-content title-content py-[20px] xs:py-[15px] f-nav w-full fixed left-0 top-[160px] z-[9] duration-450 bg-gradient-to-r from-[#005AA5] to-[#C7234B] ">
                <div class="wrapper flex justify-between max-w-[1440px] m-auto px-[30px]">
                    <!-- NAVIGATION -->
                    <ul class="navigation flex-wrap gap-[10px] flex items-center sm:hidden ">
                        <li class="flex items-center">
                            <a href="{{env('HTTP_DOMAIN')}}" class="flex group">
                                <span class="text text-white text-[20px] md:text-[18px] xs:text-[16px] font-medium group-hover:text-white/80 duration-450 leading-tight">Homepage</span>
                            </a>
                        </li>
                        <li class="split relative flex items-center h-[12px]">
                            <span class="text text-white text-[20px] md:text-[18px] xs:text-[16px] font-medium group-hover:text-white/80 duration-450 leading-tight">/</span>
                        </li>
                        <li class="flex items-center">
                            <a href="javascript:;" class="flex group">
                                <span class="text text-white text-[20px] md:text-[18px] xs:text-[16px] font-medium group-hover:text-white/80 duration-450 leading-tight">Project</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tabs tabs-horizontal tabs-horizontal-4 nav sm:w-full" role="nav">
                        <div class=" w-full md:max-w-full overflow-auto scrollbar scrollbar-w-[8px] scrollbar-h-[5px] scrollbar-track-rounded-[5px] scrollbar-thumb-rounded-[5px] scrollbar-thumb-[#0055A3]/50 scrollbar-track-primary-200 " id="menu-center">
                            <ul class="flex gap-[30px] xs:gap-[20px] items-center w-max">
                                <li><a data-target="#gallery" class="scrollable cursor-pointer text-white/60 [&.active]:text-white hover:text-white duration-450 active">Gallery</a></li>
                                <li><a data-target="#technic" class="scrollable cursor-pointer text-white/60 [&.active]:text-white hover:text-white duration-450 ">Technic Spesifications</a></li>
                                <li><a data-target="#contact" class="scrollable cursor-pointer text-white/60 [&.active]:text-white hover:text-white duration-450 ">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper pt-[50px]">
            <section class="py-[100px] md:py-[50px]" id="gallery">
                <section class="prod-carousel relative">
                    <div class="bg w-[600px] h-[600px] sm:w-[300px] sm:h-[300px] blur-2xl rounded-full [background:radial-gradient(circle,_rgba(199,35,75,0.2)_0%,_rgba(217,217,217,0)_100%);] absolute left-[5%] top-[45%] translate-y-[-50%] pointer-events-none z-[-1]"></div>
                    <div class="bg w-[600px] h-[600px] sm:w-[300px] sm:h-[300px] blur-2xl rounded-full [background:radial-gradient(circle,_rgba(199,35,75,0.2)_0%,_rgba(217,217,217,0)_100%);] absolute left-[50%] top-[50%] translate-y-[-50%] translate-x-[-50%] pointer-events-none z-[-1] sm:hidden"></div>
                    <div class="container max-w-[1440px] ">
                        <div class="text-field mb-[30px] flex justify-between items-center relative sm:flex-col" >
                            <div class="icon icon-arrow-down text-[34px] h-[34px] block leading-none duration-350 text-[#C7234B] absolute -top-[30px] left-0"></div>
                            <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-white editor-h1:font-bold editor-headings:font-normal editor-headings:leading-[1.25] editor-headings:line-clamp-3 editor-p:text-[20px] editor-p:font-light editor-p:text-[#231F20] editor-p:mb-0 editor-p:duration-450 editor-p:line-clamp-3 text-white mr-auto w-full sm:[&_br]:hidden pl-[35px]" dir="">
                                <h1>{{$project->title_1}}</h1>
                            </div>
                            <a href="page-projects.php" class="button group w-fit block md:w-full md:flex md:justify-end" dir="">
                                <div class="text-[20px] xs:text-[18px] font-light flex gap-[20px] justify-center items-center w-fit text-[#656565] hover:text-[#C7234B] duration-450 ">
                                    <div class="icon-back text-[20px] lg:text-[18px] md:text-[16px] text-[#656565] group-hover:text-[#C7234B] duration-450 relative  flex group-hover:scale-90 group-hover:text-sushi-400"></div>
                                    Back To Projects
                                </div>
                            </a>
                        </div>
                        <div class="project-content-swiper ">
                            <div class="swiper-container project-top relative w-full mx-auto overflow-hidden h-[525px] lg:h-[450px] md:h-[400px] xs:h-[350px] rounded-[20px] ">
                                <div class="swiper-wrapper">
                                    
                                    @foreach($project->gallery as $image)
                                        <div class="swiper-slide rounded-[20px] bg-cover bg-center relative image-zoom !duration-450 hover:!scale-110 overflow-hidden isolate" style="background-image:url({{env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'project_images_folder'], app()->getLocale()).'/'.$image->image}})">
                                            <a href="{{env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'project_images_folder'], app()->getLocale()).'/'.$project->image}}" class="absolute flex items-center w-full h-full z-[5]" data-fancybox="gallery">
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="thumbs-content max-w-[650px] px-[75px] m-auto mt-[30px] relative">
                                <div class="swiper-container project-thumbs relative w-full mx-auto overflow-hidden h-[120px] box-border py-[10px]">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide h-full opacity-[.5] rounded-[10px] [&.swiper-slide-active]:opacity-100 bg-cover bg-center !transition-all !duration-500 cursor-pointer" style="background-image:url({{env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'project_images_folder'], app()->getLocale()).'/'.$image->image}})"></div>
                                        @foreach($project->gallery as $image)
                                            <div class="swiper-slide h-full opacity-[.5] rounded-[10px] [&.swiper-slide-active]:opacity-100 bg-cover bg-center !transition-all !duration-500 cursor-pointer" style="background-image:url({{env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'project_images_folder'], app()->getLocale()).'/'.$image->image}})"></div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="controller flex gap-[15px] justify-between items-center w-full h-full absolute left-0 top-0 z-[2] pointer-events-none">
                                    <div class="projects-button-prev swiper-slide-prev  pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                        <div class="icon group/item flex items-center justify-center w-[40px] h-[40px] rounded-full cursor-pointer duration-500 border border-solid border-transparent bg-[#E0E0E0] hover:bg-[#0055A3] group">
                                            <div class="icon-chevron-left text-[#231F20]/50 text-[12px] flex items-center justify-center group-hover/item:text-white duration-450 group-hover/item:translate-x-[-3px]"></div>
                                        </div>
                                    </div>
                                    <div class="projects-button-next swiper-slide-next  pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                        <div class="icon group/item flex items-center justify-center w-[40px] h-[40px] rounded-full cursor-pointer duration-500 border border-solid border-transparent bg-[#E0E0E0] hover:bg-[#0055A3] group">
                                            <div class="icon-chevron-right text-[#231F20]/50 text-[12px] flex items-center justify-center group-hover/item:text-white duration-450 group-hover/item:translate-x-[3px]"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="split max-w-[650px] m-auto w-full h-[2px] bg-gradient-to-r from-[#005AA5] to-[#C7234B]  z-[3] flex my-[30px]"></div>
                        <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-white editor-h1:font-bold editor-headings:font-normal editor-headings:leading-[1.25] editor-headings:line-clamp-3 editor-p:text-[22px] md:editor-p:text-[20px] xs:editor-p:text-[18px] editor-p:font-light editor-p:text-[#231F20]/50 editor-p:mb-0 editor-p:duration-450 editor-p:line-clamp-3 text-white mr-auto w-full sm:[&_br]:hidden text-center m-auto max-w-[650px]" dir="">
                            <p>{!!$project->description!!}</p>
                        </div>
                        <div class="button-field flex justify-center flex-wrap gap-[25px] mt-[50px] md:mt-[30px] z-[2] relative">
                            <a href="javascript:;" data-target=".contact-form" class="button scrollable group min-w-[180px] lg:min-w-[150px] xs:lg:min-w-[120px] w-fit h-[50px] px-[30px] bg-[#0055A3] relative flex justify-center space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-[#0055A3] before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-white hover:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center ">
                                <div class="text-[18px]  xs:text-[16px] font-normal font-inter flex items-center text-white group-hover:text-[#0055A3] relative z-2 duration-450 w-max">Contact</div>
                            </a>
                        </div>
                    </div>

                </section>
            </section>
            <section class="project-info py-[100px] md:py-[50px] relative overflow-hidden isolate" id="technic">
                <div class="bg w-[200px] h-[200px] rounded-full absolute left-[45%] top-[50%] translate-y-[-50%] pointer-events-none z-[2]">
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
                                <div class="editor editor-base md:editor-sm editor-headings:font-bold editor-headings:text-[#ffffff] editor-headings:leading-tight xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] xl:editor-h1:text-[40px] editor-h1:text-[40px] editor-p:leading-tight editor-p:text-[#B6D3E4] editor-p:text-[24px] sm:editor-p:text-[22px] xs:editor-p:text-[20px] editor-li:text-[#231F20]/40 editor-li:font-medium editor-li:text-[20px]  editor-ul:pl-[25px] editor-ul:px-[25px] [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] max-w-full w-full md:pl-[35px] sm:pl-0">
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
                                                        <div class="img h-[60px] group-[&.swiper-slide-active]/slide:h-[100px] duration-450 w-full overflow-hidden mb-[15px] group-[&.swiper-slide-active]/slide:mb-0">
                                                            <img class="h-full w-full object-contain object-center duration-500" src="../assets/image/other/tennis.png" alt="">
                                                        </div>
                                                        <div class="title text-[18px] font-normal h-[55px] group-[&.swiper-slide-active]/slide:h-0 group-[&.swiper-slide-active]/slide:opacity-0 duration-450 text-white text-center line-clamp-2" dir="">
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
                                                        <div class="img h-[60px] group-[&.swiper-slide-active]/slide:h-[100px] duration-450 w-full overflow-hidden mb-[15px] group-[&.swiper-slide-active]/slide:mb-0">
                                                            <img class="h-full w-full object-contain object-center duration-500" src="../assets/image/other/court.png" alt="">
                                                        </div>
                                                        <div class="title text-[18px] font-normal h-[55px] group-[&.swiper-slide-active]/slide:h-0 group-[&.swiper-slide-active]/slide:opacity-0 duration-450 text-white text-center line-clamp-2" dir="">
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
                                                        <div class="img h-[60px] group-[&.swiper-slide-active]/slide:h-[100px] duration-450 w-full overflow-hidden mb-[15px] group-[&.swiper-slide-active]/slide:mb-0">
                                                            <img class="h-full w-full object-contain object-center duration-500" src="../assets/image/other/running.png" alt="">
                                                        </div>
                                                        <div class="title text-[18px] font-normal h-[55px] group-[&.swiper-slide-active]/slide:h-0 group-[&.swiper-slide-active]/slide:opacity-0 duration-450 text-white text-center line-clamp-2" dir="">
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
                                                <div class="editor editor-base md:editor-sm editor-headings:font-light editor-headings:text-[#ffffff] editor-headings:leading-tight xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] xl:editor-h1:text-[40px] editor-h1:text-[40px] editor-h2:text-[28px] sm:editor-h2:text-[24px] xs:editor-h2:text-[22px] editor-p:leading-tight editor-p:text-[#B6D3E4] editor-p:font-light editor-p:text-[20px] sm:editor-p:text-[18px] xs:editor-p:text-[16px] editor-li:text-[#231F20]/40 editor-li:font-light editor-li:text-[20px]  editor-ul:pl-[25px] editor-ul:px-[25px] [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] max-w-[600px] md:max-w-full w-full" dir="" >
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
            <section class="py-[100px] md:py-[50px]" id="contact">
                <section class="contact-form ">
                    <div class="container max-w-[1200px]">
                        <div class="wrapper grid grid-cols-2 md:grid-cols-1 gap-[50px] md:gap-0">
                            <div class="img-field ">
                                <div class="img h-[550px] lg:h-[500px] md:h-[400px] xs:h-[300px] w-full overflow-hidden isolate rounded-[30px]">
                                    <img class="h-full w-full object-cover object-center duration-500" src="../assets/image/other/sport.jpg" alt="">
                                </div>
                            </div>
                            <div class="left-form">
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
            </section>

        </div>
    </section>
</main>

@endsection

<!-- script --> 
@section('script') 

@endsection