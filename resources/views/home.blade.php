@php
    use Illuminate\Support\Str;
@endphp
@extends('layouts.main')

@section('content')

    <main class="main-field">
    <section class="homepage-carousel-field flex mt-0 header-space">
        <div class="container px-0 max-w-full m-0">
            <div class="wrapper h-full">
                <div class="carousel-field relative h-[calc(100vh-160px)]">
                    <div class="homepage-carousel swiper h-full relative">
                        <div class="swiper-wrapper">
                            <!-- RESİM ÖRNEĞİ -->
                             @foreach($sliders as $key => $item)
                            <div class="swiper-slide group/slide overflow-hidden "> <!-- left-slide right-slide eklenerek konumu değiştirilebilir -->
                                <div class="content relative h-full">
                                    <div class="image-field relative h-full">
                                        <div class="gradient bg-black/30 absolute top-0 left-0 w-full h-full z-[2] pointer-events-none"></div>
                                        <!-- video örneği -->
                                        <div class="image h-full w-full" data-swiper-parallax="50%">
                                            <div class="image h-full w-full">
                                                <img loading="lazy" src="{{ env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'images_folder'], app()->getLocale()).'/'.$item->image }}" alt="" class="h-full object-center object-cover w-full">
                                            </div>
                                            <!-- <video loading="lazy" autoplay="" playsinline="" loop="" muted="" class="w-full h-full object-center object-cover">
                                                <source src="../assets/image/other/tennis.mp4">
                                            </video> -->
                                        </div>
                                        <!-- resim örneği -->

                                    </div>
                                    <div class="text-container absolute z-[5] top-[45%] translate-y-[-50%] left-[50%] translate-x-[-50%] w-full max-w-[1440px] mx-auto px-[30px] group-[&.left-slide]/slide:text-left group-[&.right-slide]/slide:text-right">
                                        <div class="text-wrapper grid grid-cols-1 gap-[25px]">
                                            <div class="text-field col-start-1 relative group/text " data-swiper-parallax="-1000">
                                                <div class="px-[20px] mb-[40px] relative space-y-[15px] z-20 ">
                                                    <div class="text-wrapper">
                                                        <h1 class="title text-[60px] xs:text-[24px] sm:text-[26px] md:text-[30px] lg:text-[34px] xl:text-[40px] text-white font-bold leading-tight [&_strong]:text-black [&.active]:opacity-100 duration-300">
                                                            {{ $item->title }}
                                                        </h1>
                                                    </div>
                                                    <div class="text-wrapper">
                                                        <div class="editor editor-xl md:editor-base sm:editor-sm editor-headings:text-white editor-p:text-white editor-headings:line-clamp-3 editor-p:text-[18px] editor-p:line-clamp-3 sm:editor-p:text-[16px] xs:editor-p:text-[18px]  editor-li:text-white [&>p:not(:first-child)]:hidden [&>p:first-child]:line-clamp-4 [&>p:first-child]:mb-0  [&.active]:opacity-100 max-w-none">
                                                            <p>
                                                                {{ $item->description }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-wrapper relative z-20 px-[20px]">
                                                    <div class="button-field flex flex-wrap justify-start group-[&.left-slide]/slide:justify-start group-[&.right-slide]/slide:justify-end gap-[25px] ">
                                                        <a href="{{ $item->button_url }}" class="button group min-w-[180px] lg:min-w-[150px] xs:lg:min-w-[120px] justify-center items-center w-fit h-[50px] flex px-[30px] bg-white relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-white before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-[#0055A3] hover:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center ">
                                                            <div class="text-[18px]  xs:text-[16px] font-normal font-inter flex items-center text-[#0055A3] group-hover:text-white relative z-2 duration-450 w-max">{{ $item->button_text }}</div>
                                                        </a>
                                                    </div>
                                                    <div class="carousel-navigation flex justify-start group-[&.left-slide]/slide:justify-start group-[&.right-slide]/slide:justify-end z-20 mt-[30px] space-x-[20px] pointer-events-none">
                                                        <div class="hero-carousel-prev pointer-events-auto">
                                                            <div class="icon group/navigation flex items-center justify-center w-[50px] h-[50px] border border-solid border-white rounded-full cursor-pointer hover:bg-[#0055A3] hover:border-[#0055A3] duration-450">
                                                                <div class="icon-arrow-left text-white text-[16px] flex items-center justify-center group-hover/navigation:text-white duration-450 group-hover/navigation:translate-x-[-3px]"></div>
                                                            </div>
                                                        </div>
                                                        <div class="hero-carousel-next pointer-events-auto">
                                                            <div class="icon group/navigation flex items-center justify-center w-[50px] h-[50px] border border-solid border-white rounded-full cursor-pointer hover:bg-[#0055A3] hover:border-[#0055A3] duration-450">
                                                                <div class="icon-arrow-right text-white text-[16px] flex items-center justify-center group-hover/navigation:text-white duration-450 group-hover/navigation:translate-x-[3px]"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="carousel-controller">
                            <div class="homepage-pagination swiper-pagination flex items-center justify-center !bottom-0 [&_.swiper-pagination-bullet]:!my-[30px] [&_.swiper-pagination-bullet]:bg-transparent [&_.swiper-pagination-bullet]:border [&_.swiper-pagination-bullet]:border-solid [&_.swiper-pagination-bullet]:border-white/20 [&_.swiper-pagination-bullet-active]:!bg-transparent [&_.swiper-pagination-bullet-active]:!border-transparent [&_.swiper-pagination-bullet]:!w-[40px] [&_.swiper-pagination-bullet]:!h-[40px] [&_.swiper-pagination-bullet]:text-center [&_.swiper-pagination-bullet]:leading-[20px] [&_.swiper-pagination-bullet]:relative [&_.swiper-pagination-bullet]:duration-700 [&_.swiper-pagination-bullet]:flex [&_.swiper-pagination-bullet]:items-center [&_.swiper-pagination-bullet]:justify-center [&_.swiper-pagination-bullet]:overflow-hidden [&_.swiper-pagination-bullet]:visible [&_.swiper-pagination-bullet]:!mx-[10px] [&_.swiper-pagination-bullet]:opacity-100
                            [&_.swiper-pagination-bullet_.fp-arc-loader]:w-0 [&_.swiper-pagination-bullet_.fp-arc-loader]:h-0 [&_.swiper-pagination-bullet_.fp-arc-loader]:duration-450 [&_.swiper-pagination-bullet-active_.fp-arc-loader]:!w-[40px] [&_.swiper-pagination-bullet-active_.fp-arc-loader]:!h-[40px] xs:hidden">
                            </div>
                        </div>
                    </div>
                    <div class="container max-w-[1440px] m-auto relative xl:!px-0">
                        <div class="scroll-down group/scroll scrollable absolute bottom-[75px] right-[15px] xl:right-[-10px] xl:bottom-[50px] z-20 cursor-pointer space-y-[10px] flex flex-col items-start justify-start -rotate-90 opacity-70 hover:opacity-100 duration-450" data-target=".tabmenuscroll">
                            <div class="text text-[16px] xl:text-[14px] text-white duration-450 translate-x-5 group-hover/scroll:translate-x-0">Scroll Down</div>
                            <div class="line w-10 h-[2px] left-0 bg-white duration-500 group-hover/scroll:w-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-content tabmenuscroll py-[100px] pt-[200px] lg:pb-[50px] md:py-[50px] xs:py-[30px]  relative">
        <div class="container max-w-[1440px]">
            <div class="wrapper grid grid-cols-[minmax(0,6fr)_minmax(0,6fr)] md:grid-cols-1 gap-[50px] md:gap-[25px] ">
                <div class="image-field relative w-full project-counter">
                    <div class="icons absolute -left-[20px] md:left-0 xs:-left-[15px] top-[90px] translate-y-[-50%] pointer-events-none z-[1]">
                        <div class="icon icon-arrow-down w-[210px] text-[200px] h-[210px] md:w-[180px] md:h-[180px] md:text-[170px] block leading-none duration-350 text-transparent bg-clip-text bg-gradient-to-b from-[#0055A3] to-[#0055A3]/0 opacity-80">
                        </div>
                        <div class="text-field absolute top-[40%] left-[50%] translate-x-[-50%] translate-y-[-50%]">
                            <div class="counter-effect flex items-center">
                                <div class="value overflow-hidden text-[44px] lg:text-[34px] leading-[1.2] font-semibold text-white">100</div>
                                <span class="text-[44px] lg:text-[34px] sm:text-[30px] leading-[1.2] text-white font-semibold">+</span>
                            </div>
                            <p class="text-[18px] text-white font-medium !leading-6 text-center">Project</p>
                        </div>
                    </div>
                    <div class="icons absolute right-[40px] -top-[40px] md:top-[90px] md:right-0 xs:-right-[25px] xs:top-[170px] translate-y-[-50%] pointer-events-none z-[1]">
                        <div class="icon icon-arrow-right w-[210px] text-[200px] h-[210px] md:w-[180px] md:h-[180px] md:text-[170px] block leading-none duration-350 text-transparent bg-clip-text bg-gradient-to-b from-[#0055A3] to-[#0055A3]/0 opacity-80">
                        </div>
                        <div class="text-field absolute top-[50%] left-[40%] translate-x-[-50%] translate-y-[-50%]">
                            <div class="counter-effect flex items-center">
                                <div class="value overflow-hidden text-[44px] lg:text-[34px] leading-[1.2] font-semibold text-white">80</div>
                                <span class="text-[44px] lg:text-[34px] sm:text-[30px] leading-[1.2] text-white font-semibold">+</span>
                            </div>
                            <p class="text-[18px] text-white font-medium !leading-6 text-center">Customer</p>
                        </div>
                    </div>
                    <div class=" max-w-[700px] mx-auto h-[620px] md:h-[500px] sm:mt-[150px] w-full z-0">
                        <div class="atropos my-atropos h-full">
                            <!-- scale container (required) -->
                            <div class="atropos-scale">
                                <!-- rotate container (required) -->
                                <div class="atropos-rotate">
                                    <!-- inner container (required) -->
                                    <div class="atropos-inner">
                                        <svg width="100%" height="100%" viewBox="0 0 506 717" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path class="animpers" data-atropos-offset="-6.5" d="M268.872 90.5138L413.809 209.612C419.588 214.361 422.937 221.448 422.937 228.927V488.073C422.937 495.552 419.588 502.639 413.809 507.388L268.872 626.486C259.648 634.066 246.352 634.066 237.128 626.486L92.191 507.388C86.412 502.639 83.0629 495.552 83.0629 488.073V228.927C83.0629 221.448 86.412 214.361 92.191 209.612L237.128 90.5138C246.352 82.9343 259.648 82.9343 268.872 90.5138Z" stroke="#0055A3" stroke-opacity="0.05" stroke-width="10" />
                                            <path class="animpers" data-atropos-offset="-4.5" d="M270.421 55.4951L436.143 191.182C442.522 196.405 446.222 204.215 446.222 212.46V504.54C446.222 512.785 442.522 520.595 436.143 525.818L270.421 661.505C260.289 669.801 245.711 669.801 235.579 661.505L69.8568 525.818C63.4775 520.595 59.7783 512.785 59.7783 504.54V212.46C59.7783 204.215 63.4775 196.405 69.8568 191.182L235.579 55.4952C245.711 47.1988 260.289 47.1988 270.421 55.4951Z" stroke="#0055A3" stroke-opacity="0.05" stroke-width="5" />
                                            <path class="animpers" data-atropos-offset="-2.5" d="M271.363 16.3147L460.467 171.022C467.2 176.53 471.104 184.769 471.104 193.467V523.533C471.104 532.231 467.2 540.47 460.467 545.978L271.363 700.685C260.681 709.424 245.319 709.424 234.637 700.685L45.5328 545.978C38.8002 540.47 34.8956 532.231 34.8956 523.533V193.467C34.8956 184.769 38.8002 176.53 45.5327 171.022L234.637 16.3147C245.319 7.57556 260.681 7.57554 271.363 16.3147Z" stroke="#0055A3" stroke-opacity="0.05" stroke-width="2" />
                                            <path class="animpers" data-atropos-offset="-0.5" d="M234.026 126.493C245.068 117.476 260.932 117.476 271.974 126.493L393.529 225.747C400.506 231.445 404.554 239.976 404.554 248.984V468.016C404.554 477.024 400.506 485.555 393.529 491.253L271.974 590.507C260.932 599.524 245.068 599.524 234.026 590.507L112.471 491.253C105.494 485.555 101.446 477.024 101.446 468.016V248.984C101.446 239.976 105.494 231.445 112.471 225.747L234.026 126.493Z" fill="url(#paint0_linear_115_9192)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_115_9192" x1="21.6242" y1="91.6457" x2="349.921" y2="554.201" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#0055A3" />
                                                    <stop offset="1" stop-color="#0055A3" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                        <div class="image absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] w-full h-fit">
                                            <div data-atropos-offset="2.5" class="image animpers h-[400px] lg:h-[400px] md:h-[300px] sm:h-[300px] ">
                                                <img src="{{env('HTTP_DOMAIN') . '/' . getFolder(['uploads_folder', 'images_folder'], app()->getLocale()).'/'.$about->image }}" alt="" class="w-full h-full object-contain object-center animpers-img duration-450">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="text-field m-auto lg:m-0 relative" dir="">
                    <div class="icon icon-arrow-down text-[35px] h-[35px] sm:text-[16px] sm:h-[16px] sm:-top-[30px] block leading-none duration-350 text-[#C7234B] absolute -top-[50px] -left-[30px] sm:left-0"></div>
                    <div class="editor editor-lg md:editor-sm editor-headings:font-bold editor-headings:text-[#005AA5] editor-headings:leading-tight xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] xl:editor-h1:text-[40px] editor-headings:text-[42px] xl:editor-headings:text-[40px] lg:editor-headings:text-[34px] md:editor-headings:text-[30px] sm:editor-headings:text-[26px] xs:editor-headings:text-[24px] editor-p:leading-tight editor-p:text-[#231F20]/60 editor-p:text-[26px] sm:editor-p:text-[22px] xs:editor-p:text-[20px]  editor-li:text-[#231F20]/40 editor-li:font-medium editor-li:text-[20px]  editor-ul:pl-[25px] editor-ul:px-[25px]
                     [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] m-auto lg:max-w-full w-full md:[&_br]:hidden">
                        <h1>{!!$about->title!!}</h1>
                        <p>{!!$about->description!!}</p>
                    </div>
                    <div class="button-field flex flex-wrap gap-[25px] mt-[50px]">
                        <a href="" class="button group min-w-[180px] lg:min-w-[150px] xs:lg:min-w-[120px] justify-center items-center w-fit h-[50px] flex px-[30px] bg-[#0055A3] relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-[#0055A3] before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-white hover:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center ">
                            <div class="text-[18px]  xs:text-[16px] font-normal font-inter flex items-center text-white group-hover:text-[#0055A3] relative z-2 duration-450 w-max">{{$about->button_text}}</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ref-swip relative scrollreveal">
        <div class="container max-w-[1440px]">
            <div class="swiper ref-slider">
                <div class="swiper-wrapper">
                        <?php foreach ($about_certificates as $key => $item) : ?>
                            <div class="swiper-slide">
                                <a href="" class="block group/links">
                                    <div class="feature bg-[#FFFFFF]/25 rounded-[20px] p-5 duration-300 hover:bg-[#FFFFFF]/50 hover:-translate-y-1 hover:shadow-md relative z-[12]">
                                        <div class="flex flex-col gap-5 justify-center items-center h-full">
                                            <div class="image-field">
                                                <div class="img h-[50px] w-full overflow-hidden ">
                                                    <img class="h-full w-full object-contain group-hover/blog-item:scale-110 duration-500 group-hover/links:opacity-100 opacity-60" src="{{env('HTTP_DOMAIN') . '/' . getFolder(['uploads_folder', 'images_folder'], app()->getLocale()).'/'.$item->image }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="padel-swip relative mt-[50px] mb-[150px] xl:mb-[50px] sm:mb-[50px] scrollreveal">
        <div class="title mb-[30px] absolute top-0 left-0 w-full z-[3] px-[30px]">
            <div class="controller flex gap-[15px] justify-center items-center  max-w-[500px] m-auto w-full h-full ">
                <div class="articles-carousel-prev swiper-slide-prev  pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                    <div class="icon group/item flex items-center justify-center w-[60px] h-[60px] xs:w-[40px] xs:h-[40px] rounded-full cursor-pointer duration-500 border border-solid border-[#0055A3] bg-white hover:bg-[#0055A3] group">
                        <div class="icon-arrow-left text-[#0055A3] text-[16px] flex items-center justify-center group-hover/item:text-white duration-450 group-hover/item:translate-x-[-3px]"></div>
                    </div>
                </div>
                <div class="editor title editor-headings:duration-450 group-hover/mpb:editor-headings:text-white  editor-headings:mb-0 editor-headings:font-bold xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] editor-h1:text-[40px] editor-strong:duration-450 group-hover/mpb:editor-strong:text-white editor-strong:text-[40px] xl:editor-strong:text-[34px] lg:editor-strong:text-[20px] leading-tight duration-450 font-bold w-full editor-headings:text-transparent editor-headings:bg-clip-text editor-headings:bg-gradient-to-l editor-headings:from-[#0055A3] editor-headings:from-40% editor-headings:to-[#C7234B] editor-headings:to-75% editor-strong:text-transparent editor-strong:bg-clip-text editor-strong:bg-gradient-to-l editor-strong:from-[#0055A3] editor-strong:from-25% editor-strong:to-[#C7234B] editor-strong:font-bold editor-strong:block text-center max-w-full" dir="">
                    <h1>Padel Court <br>
                        Groups</h1>
                </div>
                <div class="articles-carousel-next swiper-slide-next  pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                    <div class="icon group/item flex items-center justify-center w-[60px] h-[60px] xs:w-[40px] xs:h-[40px] rounded-full cursor-pointer duration-500 border border-solid border-[#0055A3] bg-white hover:bg-[#0055A3] group">
                        <div class="icon-arrow-right text-[#0055A3] text-[16px] flex items-center justify-center group-hover/item:text-white duration-450 group-hover/item:translate-x-[3px]"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper padel-slider h-[800px] lg:h-[600px] !pt-[120px] sm:!pt-[80px]">

            <div class="gradient-text duration-450 bg-gradient-to-b from-white/0 to-white absolute bottom-0 left-0 w-full h-[50px] z-[1] pointer-events-none  "></div>
            <div class="swiper-wrapper [&_.swiper-slide-next]:!-translate-y-[40%] !z-0 bg-gradient-to-b from-white/0 to-white [&_.swiper-slide-prev_.mini-title]:left-[unset] [&_.swiper-slide-prev_.mini-title]:translate-x-[30%] [&_.swiper-slide-prev_.mini-title]:right-0 [&_.swiper-slide:has(+.swiper-slide-prev)_.mini-title]:left-[unset] [&_.swiper-slide:has(+.swiper-slide-prev)_.mini-title]:translate-x-[30%] [&_.swiper-slide:has(+.swiper-slide-prev)_.mini-title]:right-0">
                <?php foreach ($categories as $category) : ?>
                    <div class="swiper-slide !z-0 !duration-450 !transition-all items-end !flex h-full rounded-[30px] overflow-hidden isolate [&.swiper-slide-active_.feature]:!h-[650px] lg:[&.swiper-slide-active_.feature]:!h-[500px] relative [&.swiper-slide-active_.gradient]:opacity-0 [&.swiper-slide-active_.gradient-field]:opacity-100 [&.swiper-slide-active_.text-field]:opacity-100 [&.swiper-slide-active_.mini-title]:opacity-0">
                        <div class="gradient bg-gradient-to-b from-white/50 to-white absolute bottom-0 left-0 w-full h-full
                            z-[15] pointer-events-none duration-450 group-[&.is-safari]/body:[transform:translateZ(0)_translate3d(0,0,0);]"></div>

                        <div class="feature !h-[500px] lg:!h-[400px] w-full !duration-450 !transition-all hover:-translate-y-1 relative  rounded-[30px] border border-solid border-white overflow-hidden isolate p-[1px]">
                            <div class="mini-title absolute translate-x-[-30%] left-0 top-[130px] text-white xs:text-[24px] sm:text-[26px] md:text-[30px] lg:text-[34px] text-[40px] -rotate-90 h-[60px] w-[280px] line-clamp-1 duration-450">
                                {{ $category->title }}
                            </div>
                            <div class="image-field w-full h-full">
                                <div class="img h-full w-full overflow-hidden">
                                    <img class="h-full w-full object-cover group-hover/blog-item:scale-110 duration-500" 
                                    src="{{env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'product_images_folder'], app()->getLocale()).'/'.$category->image }}" alt="">
                                </div>
                            </div>

                            <div class="gradient-field absolute bottom-[10px] left-[50%] translate-x-[-50%] bg-[#0055A3]/5 backdrop-blur-[3px] border border-solid border-white/40 rounded-[30px] max-w-[450px] py-[40px] px-[60px] w-full h-[320px] z-[1] duration-450 opacity-0 xl:w-[90%]">
                            </div>
                            <div class="gradient-text duration-450 bg-gradient-to-b from-white/0 to-white absolute bottom-0 left-0 w-full h-[350px] z-[1] pointer-events-none  "></div>

                            <div class="text-field absolute bottom-[10px] left-[50%] translate-x-[-50%] rounded-[30px] max-w-[450px] py-[40px] px-[60px] w-full z-[1] opacity-0 duration-450">
                                <div class="editor editor-lg md:editor-sm editor-headings:font-bold editor-headings:text-white editor-headings:leading-tight editor-headings:mb-[15px] xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] editor-h1:text-[40px] editor-p:leading-tight editor-p:mt-[15px] editor-p:text-white editor-p:text-[20px] sm:editor-p:text-[18px] xs:editor-p:text-[16px] editor-li:text-white editor-li:font-medium editor-li:text-[20px] xs:editor-li:text-[16px] editor-ul:pl-[25px] editor-ul:px-[25px] [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] m-auto lg:max-w-full w-full text-center relative z-[2]" dir="">
                                    <h1>{{ $category->title }}</h1>
                                    <p>{{ $category->description }}</p>
                                </div>
                                <div class="button-field flex justify-center flex-wrap gap-[25px] mt-[50px] z-[2] relative">
                                    <a href="" class="button group min-w-[180px] lg:min-w-[150px] xs:lg:min-w-[120px] justify-center items-center w-fit h-[50px] flex px-[30px] bg-[#0055A3] relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-[#0055A3] before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-white hover:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center ">
                                        <div class="text-[18px]  xs:text-[16px] font-normal font-inter flex items-center text-white group-hover:text-[#0055A3] relative z-2 duration-450 w-max">Detail</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>


            </div>
        </div>
    </section>

    <section class="leader-info py-[60px] pb-[100px] lg:py-[45px] md:py-[30px] [background:linear-gradient(0.32deg,_#F8F8F8_0.32%,_rgba(248,248,248,0)_96.92%);] overflow-hidden isolate relative">
        <div class="bg w-[800px] h-[800px] rounded-full [background:radial-gradient(circle,_rgba(0,90,165,0.35)_0%,_rgba(217,217,217,0)_80%);] absolute blur-xl -left-[250px] top-[100%] translate-y-[-50%] pointer-events-none "></div>
        <div class="title flex justify-between items-center max-w-[1440px] px-[30px] m-auto" dir="">
            <div class="editor title editor-headings:duration-450 group-hover/mpb:editor-headings:text-white  editor-headings:mb-0 editor-headings:font-light xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] editor-h1:text-[40px] editor-strong:duration-450 group-hover/mpb:editor-strong:text-white editor-strong:text-[40px] xl:editor-strong:text-[34px] lg:editor-strong:text-[20px] leading-tight duration-450 font-bold editor-headings:text-transparent editor-headings:bg-clip-text editor-headings:bg-gradient-to-r editor-headings:from-[#0055A3] editor-headings:from-40% editor-headings:to-[#C7234B] editor-headings:to-75% editor-strong:text-transparent editor-strong:bg-clip-text editor-strong:bg-gradient-to-r editor-strong:from-[#0055A3] editor-strong:from-25% editor-strong:to-[#C7234B] editor-strong:font-bold editor-strong:block text-left max-w-full w-fit sm:w-full" dir="">
                <h1>Featured
                    <strong>Padel Courts</strong>
                </h1>
            </div>
            <div class="controller flex gap-[15px] justify-end items-center max-w-[300px] w-full h-full ">
                <div class="ri-prev swiper-slide-prev  pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                    <div class="icon group/item flex items-center justify-center w-[60px] h-[60px] xs:w-[40px] xs:h-[40px] rounded-full cursor-pointer duration-500 border border-solid border-[#0055A3] bg-white hover:bg-[#0055A3] group">
                        <div class="icon-arrow-left text-[#0055A3] text-[16px] flex items-center justify-center group-hover/item:text-white duration-450 group-hover/item:translate-x-[-3px]"></div>
                    </div>
                </div>

                <div class="ri-next swiper-slide-next  pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                    <div class="icon group/item flex items-center justify-center w-[60px] h-[60px] xs:w-[40px] xs:h-[40px] rounded-full cursor-pointer duration-500 border border-solid border-[#0055A3] bg-white hover:bg-[#0055A3] group">
                        <div class="icon-arrow-right text-[#0055A3] text-[16px] flex items-center justify-center group-hover/item:text-white duration-450 group-hover/item:translate-x-[3px]"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container max-w-[1440px]">
            <div class="wrapper grid grid-cols-[minmax(0,4fr)_minmax(0,7fr)] md:grid-cols-[minmax(0,6fr)_minmax(0,6fr)] sm:grid-cols-1 relative scrollreveal">
                <div class="bg w-[500px] h-[500px] rounded-full [background:radial-gradient(circle,_rgba(199,35,75,0.35)_0%,_rgba(217,217,217,0)_80%);] absolute left-[50%] top-[55%] translate-y-[-50%] pointer-events-none opacity-40 blur-xl"></div>
                <div class="text-field my-[50px] sm:my-0 h-[480px] md:h-[425px] sm:h-[350px] xs:h-[300px] sm:order-2">
                    <div class="refence-detail relative xs:m-auto xs:w-full h-full rounded-[30px] sm:rounded-t-none overflow-hidden isolate">
                        <div class="gradient duration-450 bg-gradient-to-br from-[#0055A3]/80 to-[#C7234B]/80 absolute top-0 left-0 w-full h-full z-[2]"></div>
                        <div class="img duration-450 h-full w-full overflow-hidden absolute left-0 top-0">
                            <img class="h-full w-full object-cover duration-500" src="../assets/image/other/saha-bg.jpg" alt="">
                        </div>
                        <?php foreach($products as $key => $product) : ?>
                        <div class="detail-box active opacity-0 absolute translate-y-[20px] duration-450 [visibility:hidden;] [&.active]:opacity-100 [&.active]:translate-y-0 [&.active]:delay-[450ms] [&.active]:visible gap-[25px] h-full z-[5]" data-id="{{$key}}">
                            <div class="text-field w-full h-full">
                                <div class="text-content max-w-[500px] lg:max-w-full w-full h-full mr-auto flex flex-col justify-center items-center p-[50px] lg:p-[30px] duration-700 relative rounded-[30px] sm:rounded-t-none overflow-hidden isolate sm:px-[30px]" dir="">
                                    <div class="editor editor-lg md:editor-sm editor-headings:font-bold editor-headings:duration-700 editor-headings:text-white editor-headings:mt-0 editor-headings:leading-bold editor-headings:mb-[15px] xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] editor-h1:text-[40px] editor-p:leading-tight editor-p:mt-[15px] editor-em:text-[20px] editor-em:font-light editor-p:text-white editor-li:text-white editor-li:font-medium editor-li:text-[20px] xs:editor-li:text-[16px] editor-ul:pl-[25px] editor-ul:px-[25px] [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] mx-auto lg:max-w-full w-full text-left relative z-[2] editor-em:mb-[10px] editor-em:block editor-em:not-italic editor-em:duration-700  editor-em:text-white editor-headings:text-[44px] xl:editor-headings:text-[40px] lg:editor-headings:text-[34px] md:editor-headings:text-[30px] sm:editor-headings:text-[26px] xs:editor-headings:text-[24px] editor-p:text-[24px] md:editor-p:text-[22px] sm:editor-p:text-[20px] xs:editor-p:text-[18px] duration-700 editor-p:line-clamp-3 editor-headings:line-clamp-2 editor-em:line-clamp-1">
                                        <em>{{$product->category->title}}</em>
                                        <h2>{{$product->title}}</h2>
                                        <p>{!!$product->technical_info!!}</p>
                                    </div>
                                    <div class="button-field flex flex-wrap gap-[25px] mt-[50px] md:mt-[20px] w-full">
                                        <a href="{{ env('HTTP_DOMAIN') .'/'. $product->category->seo_url . '/' . $product->seo_url }}" class="button group min-w-[180px] lg:min-w-[150px] xs:lg:min-w-[120px] justify-center items-center w-fit h-[50px] flex px-[30px] bg-white relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-white before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-[#0055A3] hover:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center ">
                                            <div class="text-[18px]  xs:text-[16px] font-normal font-inter flex items-center text-[#0055A3] group-hover:text-white relative z-2 duration-450 w-max">Details</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="carousel-field strecth-to-right sm:order-1">
                    <div class="leader-swiper swiper rounded-[30px] sm:rounded-b-none !py-[50px] sm:!py-[30px] sm:!pb-0">
                        <div class="swiper-wrapper justify-start -left-[35%] xl:-left-[28%] lg:-left-[18%] md:left-0  xs:left-0">
                            <?php foreach($products as $product) : ?>
                                <div class="swiper-slide group/slide [visibility: hidden;] !duration-450 !transition-all pointer-events-none [&.swiper-slide-active]:pointer-events-auto [&.swiper-slide-active]:opacity-100  [&.swiper-slide-active]:!scale-100 [&.swiper-slide-active]:bg-white [&.swiper-slide-active]:!visible [&.swiper-slide-next]:pointer-events-auto [&.swiper-slide-next]:cursor-pointer [&.swiper-slide-next_.product-images]:pointer-events-none [&.swiper-slide-next]:opacity-100  [&.swiper-slide-next]:!scale-100 [&.swiper-slide-next]:!visible !h-[480px] md:!h-[425px] sm:!h-[350px] xs:!h-[300px] rounded-[30px] sm:rounded-b-none overflow-hidden isolate [&.swiper-slide-active]:shadow-[0_6px_15px_rgba(0,90,165,0.05)]">
                                    <div class="content relative h-full ">
                                        <div class="bg absolute left-0 top-0 w-full h-full [background:linear-gradient(180deg,_#FFFFFF_0%,rgba(255,255,255,0)_100%);]"></div>
                                        <div class="content w-full h-full relative ">
                                            <div class="img duration-450 h-full w-full overflow-hidden absolute left-0 top-0 z-[-1] opacity-0 group-[&.swiper-slide-active]/slide:opacity-100 pointer-events-none">
                                                <img class="h-full w-full object-contain duration-500" src="../assets/image/other/saha-bg.png" alt="">
                                            </div>
                                            <div class="swiper product-images">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="prod-img img h-[300px] group-[&.swiper-slide-active]/slide:h-[400px] md:h-[250px] md:group-[&.swiper-slide-active]/slide:h-[350px] sm:group-[&.swiper-slide-active]/slide:h-[300px] xs:group-[&.swiper-slide-active]/slide:h-[275px] group-[&.swiper-slide-active]/slide:pl-[50px] pr-[25px] md:!px-[15px] w-full overflow-hidden duration-700 ml-auto">
                                                            <img class="h-full w-full object-contain  duration-500" src="{{env('HTTP_DOMAIN') . '/' . getFolder(['uploads_folder', 'product_images_folder'], app()->getLocale()).'/'.$product->gallery[0]->image }}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pagination-wrapper sm:hidden">
                                                    <div class="prod-image-pagination !w-[200px] m-auto !translate-x-0 general-pagination flex justify-center items-end duration-500 [&>.swiper-pagination-bullet]:bg-[#D9D9D9]/50 [&>.swiper-pagination-bullet-active]:!bg-[#C7234B] [&>.swiper-pagination-bullet]:w-[35px] [&>.swiper-pagination-bullet]:h-[5px] [&>.swiper-pagination-bullet]:opacity-100 [&>.swiper-pagination-bullet]:rounded-[30px] [&>.swiper-pagination-bullet]:!scale-100 opacity-0 pointer-events-none group-[&.swiper-slide-active]/slide:opacity-100 group-[&.swiper-slide-active]/slide:pointer-events-auto"></div>
                                                </div>
                                            </div>
                                            <div class="text-field w-full h-fit sm:hidden">
                                                <div class="text-content max-w-[500px] w-full h-full m-auto flex items-end py-[25px] px-[50px] group-[&.swiper-slide-active]/slide:p-0 duration-700 relative xs:mt-[10px]">
                                                    <div class="editor editor-lg md:editor-sm editor-headings:font-bold editor-headings:text-[#656565]/80 editor-headings:duration-700  editor-headings:mt-0 editor-headings:leading-bold editor-headings:mb-[15px] xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] editor-h1:text-[40px] editor-h2:text-[26px] md:editor-h2:text-[24px] sm:editor-h2:text-[22px] xs:editor-h2:text-[22px] editor-p:leading-tight editor-p:mt-[15px] editor-em:text-[20px] editor-em:font-light editor-p:text-white editor-p:text-[20px] sm:editor-p:text-[18px] xs:editor-p:text-[16px] editor-li:text-white editor-li:font-medium editor-li:text-[20px] xs:editor-li:text-[16px] editor-ul:pl-[25px] editor-ul:px-[25px] [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] mx-auto lg:max-w-full w-full text-center relative z-[2] editor-em:mb-[10px] editor-em:block editor-em:not-italic editor-em:duration-700 editor-em:text-[#0055A3] h-[130px] group-[&.swiper-slide-active]/slide:h-0 xs:group-[&.swiper-slide-active]/slide:h-[130px] overflow-hidden duration-700" dir="">
                                                        <em>{{$product->category->title}}</em>
                                                        <h2>{{$product->title}}</h2>
                                                    </div>
                                                </div>
                                            </div>
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

    <section class="content">
        <div class="container max-w-[1440px] ">
            <div class="sports-content relative -mt-[50px] md:mt-[30px]">
                <div class="gradient duration-450 bg-gradient-to-r from-[#0055A3] from-25% to-[#005AA5]/60 absolute top-0 left-0 w-[90%] lg:w-full h-full z-[0] rounded-[30px]"></div>
                <div class="wrapper grid grid-cols-2 lg:grid-cols-1 gap-[100px] lg:gap-[50px] relative z-[1] pt-[80px] pb-[50px] pl-[75px] lg:px-[50px] sm:px-[25px] scrollreveal">
                    <div class="text-field m-auto lg:m-0  relative" dir="">
                        <div class="icon icon-arrow-down text-[35px] h-[35px] sm:text-[16px] sm:h-[16px] block leading-none duration-350 text-[#C7234B] absolute -top-[40px] -left-[30px] sm:left-0"></div>
                        <div class="editor editor-base md:editor-sm editor-headings:font-bold editor-headings:text-[#ffffff] editor-headings:leading-tight xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] xl:editor-h1:text-[40px] editor-h1:text-[44px] editor-p:leading-tight editor-p:text-[#B6D3E4] editor-p:text-[24px] sm:editor-p:text-[22px] xs:editor-p:text-[20px] editor-li:text-[#231F20]/40 editor-li:font-medium        editor-li:text-[20px]  editor-ul:pl-[25px] editor-ul:px-[25px]
                        [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] m-auto lg:max-w-full w-full">
                            <h1>Wepadel is one of the newest brands of Integral Group.</h1>
                            <p>Wepadel is one of the newest brands of Integral Group. </p>
                        </div>

                        <div class="wrapper grid grid-cols-3 sm:grid-cols-2 sm:justify-center sm:[&_.sport-box:nth-child(3)]:col-span-2 mt-[50px] gap-[40px] lg:gap-[20px]">
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
                        <div class="button-field flex flex-wrap gap-[25px] mt-[50px]">
                            <a href="" class="button group min-w-[180px] lg:min-w-[150px] xs:lg:min-w-[120px] justify-center items-center w-fit h-[50px] flex px-[30px] bg-white relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-white before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-[#0055A3] hover:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center ">
                                <div class="text-[18px]  xs:text-[16px] font-normal font-inter flex items-center text-[#0055A3] group-hover:text-white relative z-2 duration-450 w-max">Wepadel</div>
                            </a>
                        </div>
                    </div>
                    <div class="img-field lg:my-0">
                        <div class="img h-[600px] xl:h-[500px] lg:h-[400px] md:h-[300px] w-full overflow-hidden rounded-[30px] image-zoom">
                            <img class="h-full w-full object-cover object-center duration-500" src="../assets/image/other/sport.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-project-info  mt-[100px]">
        <div class="container max-w-[1440px]">
            <div class="title flex justify-between items-center mb-[40px] md:mb-[30px]" dir="">
                <div class="editor title editor-headings:duration-450 group-hover/mpb:editor-headings:text-white  editor-headings:mb-0 editor-headings:font-light editor-headings:leading-snug xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] editor-h1:text-[40px] editor-strong:duration-450 group-hover/mpb:editor-strong:text-white editor-strong:text-[40px] xl:editor-strong:text-[34px] lg:editor-strong:text-[20px] duration-450 font-bold editor-headings:text-transparent editor-headings:bg-clip-text editor-headings:bg-gradient-to-r editor-headings:from-[#0055A3] editor-headings:from-40% editor-headings:to-[#C7234B] editor-headings:to-75% editor-strong:text-transparent editor-strong:bg-clip-text editor-strong:bg-gradient-to-r editor-strong:from-[#0055A3] editor-strong:from-25% editor-strong:to-[#C7234B] editor-strong:font-bold editor-strong:block text-left max-w-full w-fit">
                    <h1>Featured
                        <strong>Wepadel Projects</strong>
                    </h1>
                </div>
                <div class="button-field flex justify-center flex-wrap gap-[25px] z-[2] relative">
                    <a href="" class="button group min-w-[180px] lg:min-w-[150px] xs:lg:min-w-[120px] justify-center items-center w-fit h-[50px] flex px-[30px] bg-[#0055A3] relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-[#0055A3] before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-white hover:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center ">
                        <div class="text-[18px]  xs:text-[16px] font-normal font-inter flex items-center text-white group-hover:text-[#0055A3] relative z-2 duration-450 w-max">All Project</div>
                    </a>
                </div>

            </div>
            <div class="carousel-content w-full h-full relative overflow-hidden isolate">
                <div class="wrapper grid grid-cols-[minmax(0,5fr)_minmax(0,7fr)] lg:grid-cols-[minmax(0,6fr)_minmax(0,6fr)] md:grid-cols-1 w-full h-full gap-[30px] scrollreveal">
                    <div class="textc-content-carousel relative md:order-2">
                        <div class="home-project-swiper swiper rounded-[30px] relative w-full h-full">
                            <div class="swiper-wrapper ">
                                <!-- project-text-slider'ın swiper-slide adedi kadar swiper-slide oluşturulmalıdır. -->
                                <?php foreach ($projects as $project) : ?>
                                    <div class="swiper-slide group/slide !duration-450 !transition-all  ">
                                        <div class="content relative rounded-[30px] overflow-hidden isolate w-full h-full">
                                            <div class="gradient duration-450 bg-gradient-to-br from-[#0055A3]/80 to-[#C7234B]/80 absolute top-0 left-0 w-full h-full z-[2]"></div>
                                            <div class="img duration-450 h-full w-full overflow-hidden absolute left-0 top-0">
                                                <img class="h-full w-full object-cover duration-500" src="../assets/image/other/saha-bg.jpg" alt="">
                                            </div>
                                            <div class="text-field w-full h-full relative z-[3]">
                                                <div class="text-content max-w-[525px] md:max-w-full w-full h-full mr-auto flex flex-col justify-center items-center p-[50px] duration-700 relative rounded-[30px] overflow-hidden isolate sm:px-[30px] xs:px-[20px] m-auto">
                                                    <div class="icon icon-arrow-down text-[40px] h-[40px] sm:text-[16px] sm:h-[16px] block leading-none duration-350 text-white/15 absolute top-[40px] left-[40px] sm:left-0"></div>
                                                    <div class="editor editor-lg md:editor-sm editor-headings:font-bold editor-headings:leading-[1.1] editor-headings:duration-700 editor-headings:text-white editor-headings:mt-0 editor-headings:mb-[15px] xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] editor-h1:text-[40px] editor-p:leading-tight editor-p:mt-[15px] editor-em:text-[20px] editor-em:font-light editor-p:text-white editor-li:text-white editor-li:font-medium editor-li:text-[20px] xs:editor-li:text-[16px] editor-ul:pl-[25px] editor-ul:px-[25px] [&_ul_li::marker]:text-[#C7234B] [&_ul_li::marker]:text-[24px] mx-auto lg:max-w-full w-full text-left relative z-[2] editor-em:mb-[30px] editor-em:block editor-em:not-italic editor-em:duration-700  editor-em:text-white editor-headings:text-[44px] xl:editor-headings:text-[40px] lg:editor-headings:text-[34px] md:editor-headings:text-[30px] sm:editor-headings:text-[26px] xs:editor-headings:text-[24px] editor-p:text-[24px] md:editor-p:text-[22px] sm:editor-p:text-[20px] xs:editor-p:text-[18px] duration-700">
                                                        <em>Projects</em>
                                                        <h2>{{$project->title_1}}</h2>
                                                    </div>
                                                    <div class="button-field flex flex-wrap gap-[25px] xs:gap-[15px] w-full mt-[20px] mb-[70px] md:mb-[100px] xs:mb-[70px]">
                                                        <a href="#" class="button group min-w-[180px] lg:min-w-[150px] xs:lg:min-w-[120px] justify-center items-center w-fit h-[50px] flex px-[30px] bg-white relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-white before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-[#0055A3] hover:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center ">
                                                            <div class="text-[18px] xs:text-[16px] font-normal font-inter flex items-center text-[#0055A3] group-hover:text-white relative z-2 duration-450 w-max">Detail</div>
                                                        </a>
                                                        <a href="#" class="button group min-w-[180px] lg:min-w-[150px] xs:lg:min-w-[120px] justify-center items-center w-fit h-[50px] flex px-[30px] bg-transparent relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full  before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-[#0055A3] hover:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center ">
                                                            <div class="text-[18px] xs:text-[16px] font-normal font-inter flex items-center text-white group-hover:text-white relative z-2 duration-450 w-max">All Projects</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                        </div>
                        <div class="controller flex absolute bottom-[50px] left-[75px] md:left-[60px] sm:left-[40px] gap-[15px] justify-start items-center w-full h-fit mt-[40px] xs:mt-[20px] z-10">
                            <div class="project-prev swiper-slide-prev pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                <div class="icon group/item flex items-center justify-center w-[60px] h-[60px] xs:w-[40px] xs:h-[40px] rounded-full cursor-pointer duration-500 border border-solid border-white bg-transparent hover:bg-white group">
                                    <div class="icon-arrow-left text-white text-[16px] flex items-center justify-center group-hover/item:text-[#0055A3] duration-450 group-hover/item:translate-x-[-3px]"></div>
                                </div>
                            </div>
                            <div class="project-next swiper-slide-next pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                <div class="icon group/item flex items-center justify-center w-[60px] h-[60px] xs:w-[40px] xs:h-[40px] rounded-full cursor-pointer duration-500 border border-solid border-white bg-transparent hover:bg-white group">
                                    <div class="icon-arrow-right text-white text-[16px] flex items-center justify-center group-hover/item:text-[#0055A3] duration-450 group-hover/item:translate-x-[3px]"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper home-project-slider w-full h-full rounded-[30px] overflow-hidden isolate md:order-1">
                        <div class="swiper-wrapper">
                            <!-- project-swiper'ın swiper-slide adedi kadar swiper-slide oluşturulmalıdır. -->
                            <?php foreach ($projects as $project) : ?>
                                <div class="swiper-slide ">
                                    <a href="">
                                        <div class="img h-[550px] xl:h-[500px] md:h-[400px] sm:h-[300px] w-full overflow-hidden rounded-[30px]">
                                            <img class="h-full w-full object-cover object-center duration-500" src="{{env('HTTP_DOMAIN') . '/' . getFolder(['uploads_folder', 'project_images_folder'], app()->getLocale()).'/'.$project->image }}" alt="">
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
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

</main>

@endsection