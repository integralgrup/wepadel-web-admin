@extends('layouts.main')

@section('content')
<?php $pageTitle = 'Padel Clubs';
$breadcrumbTitle = 'Padel Clubs';
$breadcrumbImage = 'image-32.jpg';
?>
<main class="main-field">

    <!-- BREADCRUMB -->
    <section class="breadcrumb-field relative overflow-hidden h-[100dvh]">
        <?php $list = ['image-40.jpg', 'image-32.jpg', 'image-2.jpg']; ?>
        <div class="clup-carousel swiper size-full overflow-hidden relative">
            <div class="swiper-wrapper">
                <!-- MP4 -->
                <?php foreach ($club->sliders1 as $key => $item) : ?>
                <div class="swiper-slide">
                    <div class="background absolute left-0 top-0 size-full overflow-hidden before:absolute before:left-0 before:top-0 before:z-2 before:size-full before:pointer-events-none before:[background:_linear-gradient(180deg,_rgba(0,_0,_0,_0.50)_0%,_rgba(0,_0,_0,_0.15)_100%);]">
                        <!-- IMAGE -->
                        <img src="{{  asset(getFolder(['uploads_folder','club_images_folder'], $club->lang) .'/'. $item->image) }}" alt="" class="size-full slideImage object-cover object-center">
                        <!-- MP4 -->
                        <video autoplay="" loop="" muted="" playsinline="" class="size-full slideVideo object-cover object-center hidden">
                            <source src="{{  asset(getFolder(['uploads_folder','club_images_folder'], $club->lang) .'/'. $item->video) }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="content relative z-3 flex justify-end items-center flex-col h-full max-w-[900px] mx-auto pb-[90px] xl:pb-[45px] sm:justify-center sm:pb-0 sm:px-[30px] xsm:max-w-full">
                        <div class="navigation-field xsm:hidden">
                            <ul class="flex gap-[10px] flex-wrap">
                                <li>
                                    <a href="index.php" class="flex items-center group/link">
                                        <span class="text text-[18px] leading-[28px] font-light text-[#eee] tracking-[-0.18px] duration-350 group-hover/link:text-white">Home</span>
                                    </a>
                                </li>
                                <li>
                                    <p class="split text-[18px] leading-[28px] font-light text-[#eee] tracking-[-0.18px] duration-350 group-hover/link:text-white">/</p>
                                </li>
                                <li>
                                    <a href="index.php" class="flex items-center group/link">
                                        <span class="text text-[18px] leading-[28px] font-light text-[#eee] tracking-[-0.18px] duration-350 group-hover/link:text-white"><?= $pageTitle ?></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="title-field">
                            <div class="text-editor mt-[20px] max-w-full editor-h1:font-normal editor-h1:text-white sm:mt-[30px] sm:editor-h1:!leading-normal xsm:text-center">
                                <h1>{!! $club->title !!}</h1>
                            </div>
                        </div>
                        <div class="slogan-field">
                            <div class="slogan-wrapper mt-[100px] flex flex-col items-center gap-[20px] 2xl:mt-[50px] xl:mt-[30px] xsm:gap-[15px]">
                                <div class="flex items-center gap-[70px] xsm:flex-col xsm:gap-[15px]">
                                    <div class="clup-prev size-[40px] leading-normal min-sm:[&.swiper-button-disabled_.icon]:text-white min-sm:[&.swiper-button-disabled_.icon]:scale-x-90">
                                        <i class="icon icon-arrow-left text-[40px] size-[40px] flex text-green scale-x-[1.2] duration-350"></i>
                                    </div>
                                    <div class="slogan-icon-title-field  relative flex items-center gap-[15px]">
                                        <div class="image size-[45px]">
                                            <img src="{{  asset(getFolder(['uploads_folder','club_images_folder'], $club->lang) .'/'. $item->icon) }}" alt="" class="w-full h-full object-contain object-center">
                                        </div>
                                        <h3 class="text text-white text-[32px] font-medium leading-normal">{!! $item->title !!}</h3>
                                    </div>
                                    <div class="clup-next size-[40px] leading-normal min-sm:[&.swiper-button-disabled_.icon]:text-white min-sm:[&.swiper-button-disabled_.icon]:scale-x-90">
                                        <i class="icon icon-arrow-right text-[40px] size-[40px] flex text-green scale-x-[1.2] duration-350"></i>
                                    </div>
                                </div>
                                <p class="expo text-[20px] text-white text-center opacity-80 leading-[30px]">{!! $item->description !!}</p>
                            </div>
                        </div>
                        <div class="tools-field xsm:w-full">
                            <div class="wrapper mt-[100px] bg-white/4 backdrop-blur-[10px] border border-solid border-white/20 overflow-hidden rounded-[8px] flex justify-center items-center gap-[30px] p-[20px] 2xl:mt-[50px] sm:mt-[30px] sm:gap-[10px] xsm:flex-col xsm:w-full">
                                <div class="carousel-change-buttons flex items-center gap-[10px] xsm:gap-[15px]">
                                    <div class="clup-video-button club-button cursor-pointer border-[4px] border-solid border-white/15 flex justify-center items-center p-[14px] rounded-[8px] duration-350 [&.is-active]:border-white hover:border-white/60">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M23 7L16 12L23 17V7Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M14 5H3C1.89543 5 1 5.89543 1 7V17C1 18.1046 1.89543 19 3 19H14C15.1046 19 16 18.1046 16 17V7C16 5.89543 15.1046 5 14 5Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="clup-image-button is-active club-button cursor-pointer border-[4px] border-solid border-white/15 flex justify-center items-center p-[14px] rounded-[8px] duration-350 [&.is-active]:border-white hover:border-white/60">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8.5 10C9.32843 10 10 9.32843 10 8.5C10 7.67157 9.32843 7 8.5 7C7.67157 7 7 7.67157 7 8.5C7 9.32843 7.67157 10 8.5 10Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M21 15L16 10L5 21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="buttons-field flex items-center gap-[25px] sm:gap-[10px] xsm:flex-col xsm:gap-[15px] xsm:w-full">
                                    <a href="#contact-form" data-fancybox class="button group/button fx fx-text-hover-with-child relative bg-green flex justify-center items-center gap-[15px] px-[34px] py-[20px] w-fit overflow-hidden rounded-[8px] before:absolute before:left-[50%] before:translate-x-[-50%] before:top-[50%] before:translate-y-[-50%] before:size-[30px] before:scale-0 before:bg-blue before:rounded-full before:duration-350 min-sm:hover:before:scale-[5.5] md:h-[60px] sm:h-[50px] sm:px-[15px] sm:w-full">
                                        <small class="text relative fx-child z-2 text-white text-[16px] font-medium leading-[19px] sm:whitespace-nowrap">Get Offer</small>
                                        <i class="icon relative z-2 icon-chevron-right text-white text-[10px] h-[10px] flex items-center leading-normal duration-350 min-sm:group-hover/button:rotate-90"></i>
                                    </a>
                                    <a href="{{  asset(getFolder(['uploads_folder','club_images_folder'], $club->lang) .'/'. $club->pdf_file) }}" data-fancybox class="button fx fx-text-hover-with-child group/button relative bg-white/10 border-[4px] border-solid border-blue border-opacity-14 flex justify-center items-center gap-[15px] px-[34px] py-[20px] w-fit overflow-hidden rounded-[8px] duration-350 before:absolute before:left-[50%] before:translate-x-[-50%] before:top-[50%] before:translate-y-[-50%] before:size-[45px] before:scale-0 before:bg-blue before:rounded-full before:duration-350 min-sm:hover:before:scale-[5.5] min-sm:hover:border-transparent md:h-[60px] sm:h-[50px] sm:px-[15px] sm:w-full">
                                        <small class="text relative fx-child z-2 text-white text-[16px] font-bold leading-[19px] sm:whitespace-nowrap">PDF Catalog</small>
                                        <i class="icon relative z-2 icon-pdf text-green text-[20px] h-[20px] flex items-center leading-normal duration-350 min-sm:group-hover/button:rotate-90"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="slideChangeOverlay group/overlay absolute left-0 top-0 size-full overflow-hidden pointer-events-none bg-black/30 backdrop-blur-[20px] z-2 flex justify-center items-center opacity-0 duration-350 [&.is-active]:pointer-events-auto [&.is-active]:opacity-100">
                <div class="logo max-w-[300px] mx-auto translate-y-[15px] opacity-0 duration-350 group-[&.is-active]/overlay:translate-y-0 group-[&.is-active]/overlay:opacity-100 sm:max-w-[250px]">
                    <img src="../assets/image/trademark/logo.png" alt="" class="size-full object-contain object-center">
                </div>
            </div>
        </div>
    </section>

    <!-- FEATRUES SECTION -->
    <?php
    $moduleTitle = 'FEATURES';
    $moduleImage = 'image-14.png';
    $moduleClass = 'pt-[50px] pb-[45px]';
    $slideTitle = 'Living Spaces <?= $i ?>';
    ?>
    <section class="cards-section rounded-[20px] <?= $moduleClass ?> 2xl:px-[30px] 2xl:py-[50px] lg:py-[45px] md:py-[30px]" id="card-section">
    <div class="max-w-[1860px] relative mx-auto bg-blue rounded-[20px] animContainer group/container overflow-hidden">
        <div class="rectangle absolute left-[90px] bottom-[120px] size-[70px] xl:left-[30px]">
            <img src="../assets/svg/white-rectangle.svg" alt="" class="size-full object-contain object-center rotate-anim">
        </div>
        <div class="triangle absolute right-[50px] top-[150px] size-[130px] md:size-[100px] xl:right-[30px] z-10">
            <img src="../assets/svg/white-triangle.svg" alt="" class="size-full object-contain object-center rotate-anim">
        </div>
        <div class="wrapper">
            <div class="flex items-center pl-[80px] lg:pl-0 md:flex-col xsm:p-[30px]">
                <?php $list = ['image-33.jpg', 'image-34.jpg', 'image-35.jpg', 'image-33.jpg', 'image-34.jpg', 'image-35.jpg', 'image-33.jpg', 'image-34.jpg',]; ?>
                <div class="card-image-carousel swiper w-full overflow-visible max-w-[725px] srb py-[170px] xsm:max-w-[380px] md:py-[30px] md:order-2 lg:max-w-[650px] 2xl:max-w-[675px]" dir="rtl">
                    <div class="swiper-wrapper pointer-events-none">
                        <?php foreach ($club->features as $key => $item) : ?>
                            <div class="swiper-slide group/slide min-md:z-10 min-md:pointer-events-none min-md:left-0 duration-350 min-md:[&.swiper-slide-next]:pointer-events-auto min-md:[&.swiper-slide-next]:-z-5 min-md:[&.swiper-slide-next+.swiper-slide]:-z-10 min-md:[&.swiper-slide-next+.swiper-slide]:pointer-events-auto">
                                <div class="image-field relative size-full aspect-[37/28] min-md:blur-[5px] min-md:opacity-0 overflow-hidden rounded-[20px] translate-x-0 duration-350 min-md:group-[&.swiper-slide-active]/slide:!opacity-100 min-md:group-[&.swiper-slide-active]/slide:blur-0 min-md:group-[&.swiper-slide-next]/slide:scale-[0.8] min-md:group-[&.swiper-slide-next]/slide:!opacity-100 min-md:group-[&.swiper-slide-next]/slide:!translate-x-[600px] min-md:group-[&.swiper-slide-next+.swiper-slide]/slide:translate-x-[1200px] min-md:group-[&.swiper-slide-next+.swiper-slide]/slide:scale-[0.6] min-md:group-[&.swiper-slide-next+.swiper-slide]/slide:!opacity-100  md:aspect-video 2xl:aspect-[30/25]">
                                    <img src="{{  asset(getFolder(['uploads_folder','club_images_folder'], $club->lang) .'/'. $item->image) }}" alt="" class="size-full object-cover object-center animImage scale-125 delay-500 duration-500 [&.is-active]:scale-100">
                                    <div class="blue-overlay size-full absolute left-0 top-0 bg-blue z-2 pointer-events-none duration-1000 ease-manidar [&.in-active]:translate-y-full"></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="overlay size-[768px] absolute left-[50%] translate-x-[-50%] top-[50%] translate-y-[-50%] [background:_radial-gradient(50%_50%_at_50%_50%,_rgba(228,_236,_255,_0.50)_0%,_rgba(255,_255,_255,_0.00)_100%);] md:hidden"></div>
                </div>
                <div class="card-fields flex justify-center flex-col h-full bg-blue py-[170px] srb z-2 sm:p-0 sm:pt-[30px] md:pt-0 md:pb-[30px] md:order-1 lg:pl-0 lg:pr-[30px] xl:pl-[30px] ">
                    <div class="title-field relative sm:w-fit sm:mx-auto">
                        <h2 class="title relative ml-[50px] text-white text-[64px] font-bold leading-[80px] before:absolute before:left-[-50px] before:top-[50%] before:translate-y-[-50%] before:size-[26px] before:h-0 before:bg-green before:duration-350 group-[&.is-active]/container:before:h-[26px] xsm:text-[30px] sm:ml-0 sm:text-[40px] sm:leading-normal sm:before:hidden md:text-center md:[&>_br]:hidden xl:text-[50px] ">{{ $moduleTitle }}</h2>
                    </div>
                    <div class="carousel-field flex items-center mt-[85px] ml-[70px] gap-[65px] lg:gap-[15px] lg:ml-[40px] md:flex-col md:m-0">
                        <div class="carousel-navigation flex min-md:flex-col items-center md:gap-[15px]">
                            <div class="card-prev size-[40px] leading-normal min-md:ml-[-90px] min-md:[&.swiper-button-disabled_.icon]:text-white/35 min-md:[&.swiper-button-disabled_.icon]:scale-x-100 md:size-[30px]">
                                <i class="icon icon-arrow-left text-[40px] size-[40px] flex text-green scale-x-[1.2] duration-350 md:text-[25px] md:size-[25px]"></i>
                            </div>
                            <div class="card-next size-[40px] leading-normal min-md:[&.swiper-button-disabled_.icon]:text-white/35 min-md:[&.swiper-button-disabled_.icon]:scale-x-100 md:size-[30px]">
                                <i class="icon icon-arrow-right text-[40px] size-[40px] flex text-green scale-x-[1.2] duration-350 md:text-[25px] md:size-[25px]"></i>
                            </div>
                        </div>
                        <div class="card-carousel swiper w-full mx-auto max-w-[590px] overflow-hidden mr-0 lg:max-w-[370px] md:max-w-[1000px] xsm:max-w-[320px]">
                            <div class="swiper-wrapper">
                                <?php foreach ($club->features as $key => $item) : ?>
                                    <div class="swiper-slide group/slide border-[4px] border-solid border-white/14 bg-white/3 overflow-hidden rounded-[16px]">
                                        <div class="card w-full max-w-[355px] h-[330px] opacity-50 py-[40px] px-[35px] flex justify-center items-center flex-col gap-[18px] duration-350 group-[&.swiper-slide-active]/slide:opacity-100 md:mx-auto">
                                            <div class="image size-[60px]">
                                                <img src="{{  asset(getFolder(['uploads_folder','club_images_folder'], $club->lang) .'/'. $item->icon) }}" alt="" class="size-full object-contain object-center">
                                            </div>
                                            <h3 class="title text-white text-[32px] font-bold leading-[48px]">{{ $item->title }}</h3>
                                            <p class="expo text-white text-[16px] leading-[28px] text-center">{{ $item->description }}</p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- CONTENT -->
    <section class="content-section-1 pt-[45px] pb-[45px] 2xl:py-[80px] xl:py-[60px] lg:py-[45px] md:py-[30px] xsm:overflow-hidden">
        <div class="container max-w-[1780px] group/container animContainer">
            <div class="wrapper">
                <div class="relative grid grid-cols-[minmax(0,5fr)_minmax(0,7fr)] items-center gap-[120px] sm:gap-[30px] xsm:grid-cols-1">
                    <div class="triangle absolute left-[520px] top-0 size-[130px] md:size-[100px]">
                        <img src="../assets/svg/triangle.svg" alt="" class="size-full object-contain object-center rotate-anim">
                    </div>
                    <div class="rectangle absolute left-0 bottom-0 size-[70px]">
                        <img src="../assets/svg/rectangle.svg" alt="" class="size-full object-contain object-center rotate-anim">
                    </div>
                    <div class="text-editor editor-p:opacity-65 editor-p:text-[#52555C] editor-h2:relative min-sm:editor-h2:ml-[65px] editor-h2:text-blue min-sm:editor-h2:text-left editor-lg:h2::bleading-normalefore:mt-[20px] editor-h2:before:absolute editor-h2:before:top-0 editor-h2:before:left-[-65px] editor-h2:before:w-[20px] editor-h2:before:h-0 editor-h2:before:bg-green editor-h2:before:-rotate-180 editor-h2:before:duration-350 group-[&.is-active]/container:editor-h2:before:h-[20px] sm:gap-[15px] sm:mb-[15px] sm:editor-h2:text-[22px] sm:editor-h2:before:hidden lg:editor-h2:leading-normal xsm:order-2">
                        <h2>{!! $club->title_1 !!}</h2>
                        <p>{!! $club->description_1 !!}</p>
                    </div>
                    <div class="gallery-carousel swiper overflow-hidden rounded-[14px] size-full before:absolute before:left-0 before:top-0 before:z-2 before:pointer-events-none before:size-full before:[background:_linear-gradient(180deg,_rgba(3,_36,_107,_0.00)_55.71%,_rgba(3,_36,_107,_0.80)_100%);] xsm:order-1">
                        <div class="swiper-wrapper">
                            <?php foreach ($club->sliders2 as $key => $item) : ?>
                                <div class="swiper-slide">
                                    <a href="{{  asset(getFolder(['uploads_folder','club_images_folder'], $club->lang) .'/'. $item->image) }}" data-fancybox class="item group/item flex size-full aspect-[10/7] overflow-hidden">
                                        <img src="{{  asset(getFolder(['uploads_folder','club_images_folder'], $club->lang) .'/'. $item->image) }}" alt="" class="size-full object-cover object-center" data-swiper-parallax-x="50%">
                                        <?php if ($key == 0) : ?>
                                            <div class="blue-overlay size-full absolute left-0 top-0 bg-blue z-2 pointer-events-none duration-1000 ease-manidar [&.in-active]:translate-y-full"></div>
                                        <?php endif; ?>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="gallery-pagination !w-full !flex !justify-center !z-2 !absolute !left-[50%] !translate-x-[-50%] !bottom-[50px] [&_.swiper-pagination-bullet-active]:!opacity-100 [&_.swiper-pagination-bullet]:duration-450 [&_.swiper-pagination-bullet]:!size-[12px] [&_.swiper-pagination-bullet]:!rounded-none [&_.swiper-pagination-bullet]:opacity-30 [&_.swiper-pagination-bullet]:!bg-primary-400/0 [&_.swiper-pagination-bullet]:!border [&_.swiper-pagination-bullet]:!border-solid [&_.swiper-pagination-bullet]:!border-white [&_.swiper-pagination-bullet-active]:!border-[3px]"></div>
                        <div class="slideChangeOverlay group/overlay absolute left-0 top-0 size-full overflow-hidden pointer-events-none bg-black/30 backdrop-blur-[20px] z-2 flex justify-center items-center opacity-0 duration-350 [&.is-active]:pointer-events-auto [&.is-active]:opacity-100">
                            <div class="logo max-w-[300px] mx-auto translate-y-[15px] opacity-0 duration-350 group-[&.is-active]/overlay:translate-y-0 group-[&.is-active]/overlay:opacity-100 sm:max-w-[250px]">
                                <img src="../assets/image/trademark/logo.png" alt="" class="size-full object-contain object-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="content-section-2 pt-[45px] pb-[45px] 2xl:py-[80px] xl:py-[60px] lg:py-[45px] md:py-[30px]">
        <div class="container max-w-[1780px] group/container animContainer">
            <div class="wrapper">
                <div class="relative grid grid-cols-[minmax(0,7fr)_minmax(0,5fr)] items-center gap-[120px] sm:gap-[30px] xsm:grid-cols-1">
                    <div class="triangle absolute right-[520px] top-0 size-[130px] md:size-[100px]">
                        <img src="../assets/svg/triangle.svg" alt="" class="size-full object-contain object-center rotate-anim">
                    </div>
                    <div class="rectangle absolute right-0 bottom-0 size-[70px]">
                        <img src="../assets/svg/rectangle.svg" alt="" class="size-full object-contain object-center rotate-anim">
                    </div>
                    <div class="gallery-carousel swiper overflow-hidden rounded-[14px] size-full before:absolute before:left-0 before:top-0 before:z-2 before:pointer-events-none before:size-full before:[background:_linear-gradient(180deg,_rgba(3,_36,_107,_0.00)_55.71%,_rgba(3,_36,_107,_0.80)_100%);]">
                        <div class="swiper-wrapper">
                            <?php foreach ($club->sliders3 as $key => $item) : ?>
                                <div class="swiper-slide">
                                    <a href="{{  asset(getFolder(['uploads_folder','club_images_folder'], $club->lang) .'/'. $item->image) }}" data-fancybox class="item group/item flex size-full aspect-[10/7] overflow-hidden">
                                        <img src="{{  asset(getFolder(['uploads_folder','club_images_folder'], $club->lang) .'/'. $item->image) }}" alt="" class="size-full object-cover object-center" data-swiper-parallax-x="50%">
                                        <?php if ($key == 0) : ?>
                                            <div class="blue-overlay size-full absolute left-0 top-0 bg-blue z-2 pointer-events-none duration-1000 ease-manidar [&.in-active]:translate-y-full"></div>
                                        <?php endif; ?>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="gallery-pagination !w-full !flex !justify-center !z-2 !absolute !left-[50%] !translate-x-[-50%] !bottom-[50px] [&_.swiper-pagination-bullet-active]:!opacity-100 [&_.swiper-pagination-bullet]:duration-450 [&_.swiper-pagination-bullet]:!size-[12px] [&_.swiper-pagination-bullet]:!rounded-none [&_.swiper-pagination-bullet]:opacity-30 [&_.swiper-pagination-bullet]:!bg-primary-400/0 [&_.swiper-pagination-bullet]:!border [&_.swiper-pagination-bullet]:!border-solid [&_.swiper-pagination-bullet]:!border-white [&_.swiper-pagination-bullet-active]:!border-[3px]"></div>
                        <div class="slideChangeOverlay group/overlay absolute left-0 top-0 size-full overflow-hidden pointer-events-none bg-black/30 backdrop-blur-[20px] z-2 flex justify-center items-center opacity-0 duration-350 [&.is-active]:pointer-events-auto [&.is-active]:opacity-100">
                            <div class="logo max-w-[300px] mx-auto translate-y-[15px] opacity-0 duration-350 group-[&.is-active]/overlay:translate-y-0 group-[&.is-active]/overlay:opacity-100 sm:max-w-[250px]">
                                <img src="../assets/image/trademark/logo.png" alt="" class="size-full object-contain object-center">
                            </div>
                        </div>
                    </div>
                    <div class="text-editor editor-p:opacity-65 editor-p:text-[#52555C] min-sm:text-right editor-h2:relative min-sm:editor-h2:mr-[65px] editor-h2:text-blue editor-h2:before:mt-[20px] editor-h2:before:absolute editor-h2:before:top-0 editor-h2:before:right-[-65px] editor-h2:before:w-[20px] editor-h2:before:h-0 editor-h2:before:bg-green editor-h2:before:-rotate-180 editor-h2:before:duration-350 group-[&.is-active]/container:editor-h2:before:h-[20px] sm:gap-[15px] sm:mb-[15px] sm:editor-h2:text-[22px] sm:editor-h2:before:hidden lg:editor-h2:leading-normal">
                        <h2>{!! $club->title_2 !!}</h2>
                        <p>{!! $club->description_2 !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <?php
    $moduleClass = 'py-[200px]';
    ?>
     <section class="faq-section <?= $moduleClass ?> 2xl:py-[80px] xl:py-[60px] lg:py-[45px] md:py-[30px]">
     <div class="max-w-[1800px] relative container group/container animContainer">
         <div class="rectangle absolute right-[30px] top-[120px] size-[70px]">
             <img src="../assets/svg/rectangle.svg" alt="" class="size-full object-contain object-center rotate-anim">
         </div>
         <div class="triangle absolute left-[30px] top-0 size-[130px] md:size-[100px]">
             <img src="../assets/svg/triangle.svg" alt="" class="size-full object-contain object-center rotate-anim">
         </div>
         <div class="wrapper">
             <div class="faq-section max-w-[1200px] mx-auto">
                 <h2 class="title w-fit relative mx-auto mb-[80px] text-blue text-[32px] leading-[48px] uppercase text-center before:absolute before:left-[-30px] before:top-[50%] before:translate-y-[-50%] before:size-[15px] before:h-0 before:bg-green before:duration-350 group-[&.is-active]/container:before:h-[15px] xsm:text-[30px] sm:before:hidden sm:ml-0 sm:text-[40px] sm:leading-normal md:[&>_br]:hidden md:mb-[30px] xl:text-[35px]"><strong>Wepadel</strong> Frequently Asked Questions</h2>
                 <div class="faq-container flex flex-col gap-[40px]">
                     <?php foreach ($club->faqs as $key => $item) : ?>
                         <div class="faq-item group/faq cursor-pointer w-full px-[70px] h-auto py-[32px] rounded-[8px] overflow-hidden ease-manidar border border-solid border-blue/10 flex flex-col justify-center gap-0 duration-350 [&.is-active]:gap-[40px] [&.is-active]:[box-shadow:_10px_10px_20px_0px_rgba(117,_191,_0,_0.15);] [&.is-active]:border-green [&.is-active]:bg-white/10 lg:px-[15px]">
                             <div class="title-field flex justify-between items-center xsm:gap-[15px]">
                                 <h4 class="title text-blue text-[20px] font-medium leading-[30px]"><?= $key + 1 ?>. <?= $item->title ?></h4>
                                 <i class="icon icon-chevron-down2 text-[16px] h-[16px] text-green leading-normal flex duration-350 group-[&.is-active]/faq:-rotate-180"></i>
                             </div>
                             <p class="faq-text text-[#52555C] text-[18px] font-normal leading-[28px] opacity-0 invisible h-0 duration-350 group-[&.is-active]/faq:visible group-[&.is-active]/faq:opacity-65"><?= $item->description ?></p>
                         </div>
                     <?php endforeach; ?>
                 </div>
             </div>
         </div>
     </div>
 </section>
</main>


@endsection

<!-- script --> 
@section('script') 

@endsection