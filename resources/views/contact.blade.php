@extends('layouts.main')

@section('content')
<?php $code = \App\Models\Code::where('lang', app()->getLocale())->first(); ?>
<?php $pageTitle = 'İletişim';?>

<main class="main-field ">
    <section class="map-content">
        <div class="footer-maps-inner w-full relative" id="maps-desc">
            <div class="map-field overflow-hidden isolate  z-[5] h-[550px] xl:h-[500px] md:h-[500px] w-full">
                <div class="map w-[100%] md:w-[100%] h-full">
                    <div id="map" class=" w-full xs:w-[135%] xs:-ml-[35%] h-[100%] " data-map-marker-url="https://g.page/pentayazilim?share"></div>
                </div>
            </div>
            <div class="gradient duration-450 pointer-events-none [background:radial-gradient(circle,_rgba(255,255,255,0.1)_0%,_rgba(255,255,255,1)_100%);] absolute top-0 left-0 w-full h-full z-[0] "></div>
        </div>
    </section>
    <section class="map-locations">
        <div class="container max-w-[1440px] translate-y-[-100px] md:translate-y-[-50px]">
            <div class="wrapper grid grid-cols-2 sm:grid-cols-1 relative position-field " dir="">
                <div class="split absolute top-[160px]  lg:top-[150px]  xs:hidden left-[50%] w-[85%] translate-x-[-50%]  h-[1px] bg-white/10 z-[3] flex xs:!mt-0"></div>
                <div class="gradient duration-450 bg-gradient-to-br from-[#0055A3]  to-[#C7234B] absolute top-0 left-0 w-full h-full z-[0] rounded-[30px]"></div>
                <div class="img duration-450 h-full w-full overflow-hidden absolute left-0 top-0 z-[1]">
                    <img class="h-full w-full object-cover object-top duration-500" src="../assets/image/other/bg-contact.png" alt="">
                </div>
                <div class="content-maps relative z-[2] py-[30px] px-[80px] md:px-[50px] sm:pb-[25px] xs:px-[25px]">
                    <div class="title mb-[30px] xs:mb-[25px]">
                        <a href="" class="logo-wrapper block max-w-[200px] lg:max-w-[175px] w-full mb-[20px]">
                            <img class="block object-contain object-center w-full h-auto" src="../assets/image/trademark/logo-white.png" alt="" loading="lazy">
                        </a>
                        <div class="editor editor-base title editor-headings:duration-350 group-hover/mpb:editor-headings:text-white  editor-headings:mb-0 editor-headings:font-light editor-h1:text-[40px] xl:editor-h1:text-[34px] lg:editor-h1:text-[20px] editor-strong:duration-350  editor-headings:leading-tight editor-strong:leading-tight duration-350 font-bold w-full editor-strong:font-bold editor-strong:block editor-p:text-[18px] editor-p:font-light editor-p:text-white editor-a:no-underline editor-a:font-bold editor-a:text-white editor-a:hover:text-[#C7234B] editor-a:duration-350">
                            <p>Wepadel is a Brand of <a href="">Integral Group</a></p>
                        </div>
                    </div>

                    <div class="text-field select-field map-list flex flex-col max-w-[280px] sm:max-w-full max-h-[380px] overflow-y-auto scrollbar scrollbar-w-[8px] scrollbar-h-[5px] scrollbar-track-rounded-[5px] scrollbar-thumb-rounded-[5px] pr-[15px] scrollbar-thumb-[#0055A3]/50 scrollbar-track-primary-200 ">
                        <a class="map-box group/link flex items-center justify-between scrollable py-[5px] border-b border-solid border-transparent duration-450 [&.active_.text]:text-white [&.active]:border-white [&.active_.icon-arrow-right]:opacity-100 [&.active_.icon-arrow-right]:translate-x-0 active" data-target=".map-field" href="javascript:;" data-branch-index="0">
                            <div class="text text-white/50 group-hover/link:text-white duration-450 font-medium text-[24px] lg:text-[22px] sm:text-[20px] xs:text-[18px]">Head Office</div>
                            <i class="icon-arrow-right text-[14px] font-light flex items-center text-white relative z-10 duration-450 -translate-x-2 rtl:translate-x-0 group-hover/link:translate-x-0 opacity-0 group-hover/link:opacity-100"></i>
                        </a>
                        <a class="map-box group/link flex items-center justify-between scrollable py-[5px] border-b border-solid border-transparent duration-450 [&.active_.text]:text-white [&.active]:border-white [&.active_.icon-arrow-right]:opacity-100 [&.active_.icon-arrow-right]:translate-x-0 " data-target=".map-field" href="javascript:;" data-branch-index="1">
                            <div class="text text-white/50 group-hover/link:text-white duration-450 font-medium text-[24px] lg:text-[22px] sm:text-[20px] xs:text-[18px]">Factory</div>
                            <i class="icon-arrow-right text-[14px] font-light flex items-center text-white relative z-10 duration-450 -translate-x-2 rtl:translate-x-0 group-hover/link:translate-x-0 opacity-0 group-hover/link:opacity-100"></i>
                        </a>
                        <a class="map-box group/link flex items-center justify-between scrollable py-[5px] border-b border-solid border-transparent duration-450 [&.active_.text]:text-white [&.active]:border-white [&.active_.icon-arrow-right]:opacity-100 [&.active_.icon-arrow-right]:translate-x-0 " data-target=".map-field" href="javascript:;" data-branch-index="2">
                            <div class="text text-white/50 group-hover/link:text-white duration-450 font-medium text-[24px] lg:text-[22px] sm:text-[20px] xs:text-[18px]">Newyork, USA</div>
                            <i class="icon-arrow-right text-[14px] font-light flex items-center text-white relative z-10 duration-450 -translate-x-2 rtl:translate-x-0 group-hover/link:translate-x-0 opacity-0 group-hover/link:opacity-100"></i>
                        </a>
                        <a class="map-box group/link flex items-center justify-between scrollable py-[5px] border-b border-solid border-transparent duration-450 [&.active_.text]:text-white [&.active]:border-white [&.active_.icon-arrow-right]:opacity-100 [&.active_.icon-arrow-right]:translate-x-0 " data-target=".map-field" href="javascript:;" data-branch-index="3">
                            <div class="text text-white/50 group-hover/link:text-white duration-450 font-medium text-[24px] lg:text-[22px] sm:text-[20px] xs:text-[18px]">Doha, Qatar</div>
                            <i class="icon-arrow-right text-[14px] font-light flex items-center text-white relative z-10 duration-450 -translate-x-2 rtl:translate-x-0 group-hover/link:translate-x-0 opacity-0 group-hover/link:opacity-100"></i>
                        </a>
                        <a class="map-box group/link flex items-center justify-between scrollable py-[5px] border-b border-solid border-transparent duration-450 [&.active_.text]:text-white [&.active]:border-white [&.active_.icon-arrow-right]:opacity-100 [&.active_.icon-arrow-right]:translate-x-0 " data-target=".map-field" href="javascript:;" data-branch-index="4">
                            <div class="text text-white/50 group-hover/link:text-white duration-450 font-medium text-[24px] lg:text-[22px] sm:text-[20px] xs:text-[18px]">London, England</div>
                            <i class="icon-arrow-right text-[14px] font-light flex items-center text-white relative z-10 duration-450 -translate-x-2 rtl:translate-x-0 group-hover/link:translate-x-0 opacity-0 group-hover/link:opacity-100"></i>
                        </a>
                        <a class="map-box group/link flex items-center justify-between scrollable py-[5px] border-b border-solid border-transparent duration-450 [&.active_.text]:text-white [&.active]:border-white [&.active_.icon-arrow-right]:opacity-100 [&.active_.icon-arrow-right]:translate-x-0 " data-target=".map-field" href="javascript:;" data-branch-index="5">
                            <div class="text text-white/50 group-hover/link:text-white duration-450 font-medium text-[24px] lg:text-[22px] sm:text-[20px] xs:text-[18px]">Moscow, Russia</div>
                            <i class="icon-arrow-right text-[14px] font-light flex items-center text-white relative z-10 duration-450 -translate-x-2 rtl:translate-x-0 group-hover/link:translate-x-0 opacity-0 group-hover/link:opacity-100"></i>
                        </a>
                    </div>
                </div>
                <div class="contact-info relative z-[2] py-[30px] pr-[50px] sm:px-[50px] sm:pt-[25px] xs:px-[25px]">

                    <div class="description-field relative duration-450">
                        <div class="desc-box w-full active absolute opacity-0 [visibility:hidden;] translate-y-[30px] duration-450 [&.active]:!opacity-100 [&.active]:!visible [&.active]:delay-[450ms] [&.active]:!translate-y-0 [&.active]:duration-450 [&.active]:z-[1]" box-id="0">
                            <div class="text-field relative ">
                                <div class="title lg:mt-[20px] mb-[40px] sm:mb-[30px] sm:mt-0">
                                    <div class="editor title editor-headings:duration-450 group-hover/mpb:editor-headings:text-white  editor-headings:mb-0 editor-headings:font-normal xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] editor-h1:text-[40px] editor-strong:duration-450 editor-headings:text-white editor-strong:text-white editor-strong:text-[40px] xl:editor-strong:text-[34px] lg:editor-strong:text-[20px] editor-headings:leading-snug duration-450 font-bold editor-strong:font-bold editor-strong:block text-left max-w-full w-fit">
                                        <h1>Head Office
                                            <strong>Information</strong>
                                        </h1>
                                    </div>
                                </div>
                                <div class="contact-information-field relative z-10">
                                    <div class="wrapper grid grid-cols-2 lg:grid-cols-[8fr_4fr] items-end md:grid-cols-1 md:items-start">
                                        <ul class="space-y-[20px]">
                                            <li>
                                                <a href="tel:+90 212 678 13 13" class="group/text flex space-x-5">
                                                    <div class="icon-phone text-[20px] font-light text-white duration-500 relative z-20 flex group-hover/text:scale-110"></div>
                                                    <div class="text text-[20px] sm:text-[18px] text-white flex items-center leading-tight duration-500 group-hover/text:translate-x-1 font-light"> +90 212 678 13 13</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="mailto:info@wepadel.com.tr" class="group/text flex space-x-5">
                                                    <div class="icon-mail text-[20px] font-light text-white duration-500 relative z-20 flex group-hover/text:scale-110"></div>
                                                    <div class="text text-[20px] sm:text-[18px] text-white flex items-center leading-tight duration-500 group-hover/text:translate-x-1 font-light">info@wepadel.com.tr</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="group/text flex space-x-5">
                                                    <div class="icon-location h-fit text-[20px] font-light text-white duration-500 relative z-20 flex group-hover/text:scale-110"></div>
                                                    <div class="text text-[20px] sm:text-[18px] text-white flex items-center leading-tight duration-500 group-hover/text:translate-x-1 font-light">
                                                        Metro 34 Plaza No: 23/99, IOSB Bedrettin Dalan Bulvarı Basaksehir, Istanbul / Türkiye
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <a href="" class="group/text flex justify-center md:justify-start">
                                            <div class="text text-[14px] h-fit font-light flex items-center leading-normal duration-500 group-hover/text:translate-x-1 ml-5 md:ml-10 text-white mt-[10px] gap-[10px] tracking-widest">
                                                Get Direction
                                                <div class="icon-map text-[14px] duration-500 z-20 flex group-hover/text:scale-110  group-hover/text:[&>svg>path]:stroke-primary-500 [&>svg>path]:duration-450"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="desc-box w-full absolute opacity-0 [visibility:hidden;] translate-y-[30px] duration-450 [&.active]:!opacity-100 [&.active]:!visible [&.active]:delay-[450ms] [&.active]:!translate-y-0 [&.active]:duration-450 [&.active]:z-[1]" box-id="1">
                            <div class="text-field relative ">
                                <div class="title lg:mt-[20px] mb-[40px] sm:mb-[30px] sm:mt-0">
                                    <div class="editor title editor-headings:duration-450 group-hover/mpb:editor-headings:text-white  editor-headings:mb-0 editor-headings:font-normal xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] editor-h1:text-[40px] editor-strong:duration-450 editor-headings:text-white editor-strong:text-white editor-strong:text-[40px] xl:editor-strong:text-[34px] lg:editor-strong:text-[20px] editor-headings:leading-snug duration-450 font-bold editor-strong:font-bold editor-strong:block text-left max-w-full w-fit">
                                        <h1>Factory
                                            <strong>Information</strong>
                                        </h1>
                                    </div>
                                </div>
                                <div class="contact-information-field relative z-10">
                                    <div class="wrapper grid grid-cols-2 items-end md:grid-cols-1 md:items-start">
                                        <ul class="space-y-[20px]">
                                            <li>
                                                <a href="tel:+90 212 678 13 13" class="group/text flex space-x-5">
                                                    <div class="icon-phone text-[20px] font-light text-white duration-500 relative z-20 flex group-hover/text:scale-110"></div>
                                                    <div class="text text-[20px] sm:text-[18px] text-white flex items-center leading-tight duration-500 group-hover/text:translate-x-1 font-light"> +90 212 678 13 13</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="mailto:info@wepadel.com.tr" class="group/text flex space-x-5">
                                                    <div class="icon-mail text-[20px] font-light text-white duration-500 relative z-20 flex group-hover/text:scale-110"></div>
                                                    <div class="text text-[20px] sm:text-[18px] text-white flex items-center leading-tight duration-500 group-hover/text:translate-x-1 font-light">info@wepadel.com.tr</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="group/text flex space-x-5">
                                                    <div class="icon-location h-fit text-[20px] font-light text-white duration-500 relative z-20 flex group-hover/text:scale-110"></div>
                                                    <div class="text text-[20px] sm:text-[18px] text-white flex items-center leading-tight duration-500 group-hover/text:translate-x-1 font-light">
                                                        Metro 34 Plaza No: 23/99, IOSB Bedrettin Dalan Bulvarı Basaksehir, Istanbul / Türkiye
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <a href="" class="group/text flex justify-center md:justify-start">
                                            <div class="text text-[14px] h-fit font-light flex items-center leading-normal duration-500 group-hover/text:translate-x-1 ml-5 md:ml-10 text-white mt-[10px] gap-[10px] tracking-widest">
                                                Get Direction
                                                <div class="icon-map text-[14px] duration-500 z-20 flex group-hover/text:scale-110  group-hover/text:[&>svg>path]:stroke-primary-500 [&>svg>path]:duration-450"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="desc-box w-full absolute opacity-0 [visibility:hidden;] translate-y-[30px] duration-450 [&.active]:!opacity-100 [&.active]:!visible [&.active]:delay-[450ms] [&.active]:!translate-y-0 [&.active]:duration-450 [&.active]:z-[1]" box-id="2">
                            <div class="text-field relative ">
                                <div class="title lg:mt-[20px] mb-[40px] sm:mb-[30px] sm:mt-0">
                                    <div class="editor title editor-headings:duration-450 group-hover/mpb:editor-headings:text-white  editor-headings:mb-0 editor-headings:font-normal xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] editor-h1:text-[40px] editor-strong:duration-450 editor-headings:text-white editor-strong:text-white editor-strong:text-[40px] xl:editor-strong:text-[34px] lg:editor-strong:text-[20px] editor-headings:leading-snug duration-450 font-bold editor-strong:font-bold editor-strong:block text-left max-w-full w-fit">
                                        <h1>Newyork, USA
                                            <strong>Information</strong>
                                        </h1>
                                    </div>
                                </div>
                                <div class="contact-information-field relative z-10">
                                    <div class="wrapper grid grid-cols-2 items-end md:grid-cols-1 md:items-start">
                                        <ul class="space-y-[20px]">
                                            <li>
                                                <a href="tel:+90 212 678 13 13" class="group/text flex space-x-5">
                                                    <div class="icon-phone text-[20px] font-light text-white duration-500 relative z-20 flex group-hover/text:scale-110"></div>
                                                    <div class="text text-[20px] sm:text-[18px] text-white flex items-center leading-tight duration-500 group-hover/text:translate-x-1 font-light"> +90 212 678 13 13</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="mailto:info@wepadel.com.tr" class="group/text flex space-x-5">
                                                    <div class="icon-mail text-[20px] font-light text-white duration-500 relative z-20 flex group-hover/text:scale-110"></div>
                                                    <div class="text text-[20px] sm:text-[18px] text-white flex items-center leading-tight duration-500 group-hover/text:translate-x-1 font-light">info@wepadel.com.tr</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="group/text flex space-x-5">
                                                    <div class="icon-location h-fit text-[20px] font-light text-white duration-500 relative z-20 flex group-hover/text:scale-110"></div>
                                                    <div class="text text-[20px] sm:text-[18px] text-white flex items-center leading-tight duration-500 group-hover/text:translate-x-1 font-light">
                                                        Metro 34 Plaza No: 23/99, IOSB Bedrettin Dalan Bulvarı Basaksehir, Istanbul / Türkiye
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <a href="" class="group/text flex justify-center md:justify-start">
                                            <div class="text text-[14px] h-fit font-light flex items-center leading-normal duration-500 group-hover/text:translate-x-1 ml-5 md:ml-10 text-white mt-[10px] gap-[10px] tracking-widest">
                                                Get Direction
                                                <div class="icon-map text-[14px] duration-500 z-20 flex group-hover/text:scale-110  group-hover/text:[&>svg>path]:stroke-primary-500 [&>svg>path]:duration-450"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="desc-box w-full absolute opacity-0 [visibility:hidden;] translate-y-[30px] duration-450 [&.active]:!opacity-100 [&.active]:!visible [&.active]:delay-[450ms] [&.active]:!translate-y-0 [&.active]:duration-450 [&.active]:z-[1]" box-id="3">
                            <div class="text-field relative ">
                                <div class="title lg:mt-[20px] mb-[40px] sm:mb-[30px] sm:mt-0">
                                    <div class="editor title editor-headings:duration-450 group-hover/mpb:editor-headings:text-white  editor-headings:mb-0 editor-headings:font-normal xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] editor-h1:text-[40px] editor-strong:duration-450 editor-headings:text-white editor-strong:text-white editor-strong:text-[40px] xl:editor-strong:text-[34px] lg:editor-strong:text-[20px] editor-headings:leading-snug duration-450 font-bold editor-strong:font-bold editor-strong:block text-left max-w-full w-fit">
                                        <h1>Doha, Qatar
                                            <strong>Information</strong>
                                        </h1>
                                    </div>
                                </div>
                                <div class="contact-information-field relative z-10">
                                    <div class="wrapper grid grid-cols-2 items-end md:grid-cols-1 md:items-start">
                                        <ul class="space-y-[20px]">
                                            <li>
                                                <a href="tel:+90 212 678 13 13" class="group/text flex space-x-5">
                                                    <div class="icon-phone text-[20px] font-light text-white duration-500 relative z-20 flex group-hover/text:scale-110"></div>
                                                    <div class="text text-[20px] sm:text-[18px] text-white flex items-center leading-tight duration-500 group-hover/text:translate-x-1 font-light"> +90 212 678 13 13</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="mailto:info@wepadel.com.tr" class="group/text flex space-x-5">
                                                    <div class="icon-mail text-[20px] font-light text-white duration-500 relative z-20 flex group-hover/text:scale-110"></div>
                                                    <div class="text text-[20px] sm:text-[18px] text-white flex items-center leading-tight duration-500 group-hover/text:translate-x-1 font-light">info@wepadel.com.tr</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="group/text flex space-x-5">
                                                    <div class="icon-location h-fit text-[20px] font-light text-white duration-500 relative z-20 flex group-hover/text:scale-110"></div>
                                                    <div class="text text-[20px] sm:text-[18px] text-white flex items-center leading-tight duration-500 group-hover/text:translate-x-1 font-light">
                                                        Metro 34 Plaza No: 23/99, IOSB Bedrettin Dalan Bulvarı Basaksehir, Istanbul / Türkiye
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <a href="" class="group/text flex justify-center md:justify-start">
                                            <div class="text text-[14px] h-fit font-light flex items-center leading-normal duration-500 group-hover/text:translate-x-1 ml-5 md:ml-10 text-white mt-[10px] gap-[10px] tracking-widest">
                                                Get Direction
                                                <div class="icon-map text-[14px] duration-500 z-20 flex group-hover/text:scale-110  group-hover/text:[&>svg>path]:stroke-primary-500 [&>svg>path]:duration-450"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="desc-box w-full absolute opacity-0 [visibility:hidden;] translate-y-[30px] duration-450 [&.active]:!opacity-100 [&.active]:!visible [&.active]:delay-[450ms] [&.active]:!translate-y-0 [&.active]:duration-450 [&.active]:z-[1]" box-id="4">
                            <div class="text-field relative ">
                                <div class="title lg:mt-[20px] mb-[40px] sm:mb-[30px] sm:mt-0">
                                    <div class="editor title editor-headings:duration-450 group-hover/mpb:editor-headings:text-white  editor-headings:mb-0 editor-headings:font-normal xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] editor-h1:text-[40px] editor-strong:duration-450 editor-headings:text-white editor-strong:text-white editor-strong:text-[40px] xl:editor-strong:text-[34px] lg:editor-strong:text-[20px] editor-headings:leading-snug duration-450 font-bold editor-strong:font-bold editor-strong:block text-left max-w-full w-fit">
                                        <h1>London, England
                                            <strong>Information</strong>
                                        </h1>
                                    </div>
                                </div>
                                <div class="contact-information-field relative z-10">
                                    <div class="wrapper grid grid-cols-2 items-end md:grid-cols-1 md:items-start">
                                        <ul class="space-y-[20px]">
                                            <li>
                                                <a href="tel:+90 212 678 13 13" class="group/text flex space-x-5">
                                                    <div class="icon-phone text-[20px] font-light text-white duration-500 relative z-20 flex group-hover/text:scale-110"></div>
                                                    <div class="text text-[20px] sm:text-[18px] text-white flex items-center leading-tight duration-500 group-hover/text:translate-x-1 font-light"> +90 212 678 13 13</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="mailto:info@wepadel.com.tr" class="group/text flex space-x-5">
                                                    <div class="icon-mail text-[20px] font-light text-white duration-500 relative z-20 flex group-hover/text:scale-110"></div>
                                                    <div class="text text-[20px] sm:text-[18px] text-white flex items-center leading-tight duration-500 group-hover/text:translate-x-1 font-light">info@wepadel.com.tr</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="group/text flex space-x-5">
                                                    <div class="icon-location h-fit text-[20px] font-light text-white duration-500 relative z-20 flex group-hover/text:scale-110"></div>
                                                    <div class="text text-[20px] sm:text-[18px] text-white flex items-center leading-tight duration-500 group-hover/text:translate-x-1 font-light">
                                                        Metro 34 Plaza No: 23/99, IOSB Bedrettin Dalan Bulvarı Basaksehir, Istanbul / Türkiye
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <a href="" class="group/text flex justify-center md:justify-start">
                                            <div class="text text-[14px] h-fit font-light flex items-center leading-normal duration-500 group-hover/text:translate-x-1 ml-5 md:ml-10 text-white mt-[10px] gap-[10px] tracking-widest">
                                                Get Direction
                                                <div class="icon-map text-[14px] duration-500 z-20 flex group-hover/text:scale-110  group-hover/text:[&>svg>path]:stroke-primary-500 [&>svg>path]:duration-450"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="desc-box w-full absolute opacity-0 [visibility:hidden;] translate-y-[30px] duration-450 [&.active]:!opacity-100 [&.active]:!visible [&.active]:delay-[450ms] [&.active]:!translate-y-0 [&.active]:duration-450 [&.active]:z-[1]" box-id="5">
                            <div class="text-field relative ">
                                <div class="title lg:mt-[20px] mb-[40px] sm:mb-[30px] sm:mt-0">
                                    <div class="editor title editor-headings:duration-450 group-hover/mpb:editor-headings:text-white  editor-headings:mb-0 editor-headings:font-normal xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] editor-h1:text-[40px] editor-strong:duration-450 editor-headings:text-white editor-strong:text-white editor-strong:text-[40px] xl:editor-strong:text-[34px] lg:editor-strong:text-[20px] editor-headings:leading-snug duration-450 font-bold editor-strong:font-bold editor-strong:block text-left max-w-full w-fit">
                                        <h1>Moscow, Russia
                                            <strong>Information</strong>
                                        </h1>
                                    </div>
                                </div>
                                <div class="contact-information-field relative z-10">
                                    <div class="wrapper grid grid-cols-2 items-end md:grid-cols-1 md:items-start">
                                        <ul class="space-y-[20px]">
                                            <li>
                                                <a href="tel:+90 212 678 13 13" class="group/text flex space-x-5">
                                                    <div class="icon-phone text-[20px] font-light text-white duration-500 relative z-20 flex group-hover/text:scale-110"></div>
                                                    <div class="text text-[20px] sm:text-[18px] text-white flex items-center leading-tight duration-500 group-hover/text:translate-x-1 font-light"> +90 212 678 13 13</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="mailto:info@wepadel.com.tr" class="group/text flex space-x-5">
                                                    <div class="icon-mail text-[20px] font-light text-white duration-500 relative z-20 flex group-hover/text:scale-110"></div>
                                                    <div class="text text-[20px] sm:text-[18px] text-white flex items-center leading-tight duration-500 group-hover/text:translate-x-1 font-light">info@wepadel.com.tr</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="group/text flex space-x-5">
                                                    <div class="icon-location h-fit text-[20px] font-light text-white duration-500 relative z-20 flex group-hover/text:scale-110"></div>
                                                    <div class="text text-[20px] sm:text-[18px] text-white flex items-center leading-tight duration-500 group-hover/text:translate-x-1 font-light">
                                                        Metro 34 Plaza No: 23/99, IOSB Bedrettin Dalan Bulvarı Basaksehir, Istanbul / Türkiye
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <a href="" class="group/text flex justify-center md:justify-start">
                                            <div class="text text-[14px] h-fit font-light flex items-center leading-normal duration-500 group-hover/text:translate-x-1 ml-5 md:ml-10 text-white mt-[10px] gap-[10px] tracking-widest">
                                                Get Direction
                                                <div class="icon-map text-[14px] duration-500 z-20 flex group-hover/text:scale-110  group-hover/text:[&>svg>path]:stroke-primary-500 [&>svg>path]:duration-450"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="social-media border-t border-solid border-white/10 pt-[40px] mt-[40px] sm:pt-[25px] sm:mt-[25px]">
                        <ul class="flex justify-start items-center sm:justify-center gap-[35px] md:gap-[20px] xs:gap-[15px]">
                            <li>
                                <a href="javascript:;" class="flex relative group before:absolute before:w-[0] before:h-[0] before:bg-sushi-400/10 before:left-1/2 before:rounded-full before:duration-450 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 hover:before:w-[40px] hover:before:h-[40px]">
                                    <div class="icon-facebook text-[20px] lg:text-[18px] md:text-[16px] text-white duration-450 relative z-20 flex group-hover:scale-90 group-hover:text-sushi-400"></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="flex relative group before:absolute before:w-[0] before:h-[0] before:bg-sushi-400/10 before:left-1/2 before:rounded-full before:duration-450 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 hover:before:w-[40px] hover:before:h-[40px]">
                                    <div class="icon-linkedin text-[20px] lg:text-[18px] md:text-[16px] text-white duration-450 relative z-20 flex group-hover:scale-90 group-hover:text-sushi-400"></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="flex relative group before:absolute before:w-[0] before:h-[0] before:bg-sushi-400/10 before:left-1/2 before:rounded-full before:duration-450 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 hover:before:w-[40px] hover:before:h-[40px]">
                                    <div class="icon-youtube text-[20px] lg:text-[18px] md:text-[16px] text-white duration-450 relative z-20 flex group-hover:scale-90 group-hover:text-sushi-400"></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="flex relative group before:absolute before:w-[0] before:h-[0] before:bg-sushi-400/10 before:left-1/2 before:rounded-full before:duration-450 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 hover:before:w-[40px] hover:before:h-[40px]">
                                    <div class="icon-twitter text-[20px] lg:text-[18px] md:text-[16px] text-white duration-450 relative z-20 flex group-hover:scale-90 group-hover:text-sushi-400"></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-form mb-[50px]">
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
</main>


@endsection

@section('script')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA86-hoDCY032Z21QBSK-_F0-nduTBHY-4&a&callback=initMap" defer=""></script>
    <script>



        // Fonksiyon: Harita işaretçisi oluşturma
        function createCustomMarker(map, latLng, html) {
            class CustomMarker extends google.maps.OverlayView {
                constructor() {
                    super();
                    this.drawn = false;
                    this.latLng = latLng;
                    this.html = html;
                    this.setMap(map);
                }

                draw() {
                    if (!this.drawn) {
                        this.div = document.createElement("div");
                        this.div.className = "arrow_box";
                        this.div.innerHTML = this.html;
                        this.getPanes().overlayImage.appendChild(this.div);
                        this.drawn = true;
                    }

                    const position = this.getProjection().fromLatLngToDivPixel(this.latLng);
                    const panes = this.getPanes();
                    panes.overlayImage.style.left = position.x + "px";
                    panes.overlayImage.style.top = position.y - 30 + "px";
                }
            }

            return new CustomMarker();
        }

        // Fonksiyon: Harita oluşturma ve işaretçi ekleme
        function initMap() {
            const mapContainer = document.querySelector("#map");
            const mapMarkerText = mapContainer.dataset.mapMarkerText;

            // Şu anki konumu al
            const currentLatLng = window.latLng;

            // Şu anki konuma uygun URL'yi bul
            const currentLocation = locations.find(location => location.lat === currentLatLng.lat && location.lng === currentLatLng.lng);
            const mapMarkerURL = currentLocation ? currentLocation.url : '';

            // Harita oluştur
            const map = new google.maps.Map(mapContainer, {
                mapId: "f64db6f9e15f3f",
                center: currentLatLng,
                streetViewControl: false,
                zoomControl: false,
                disableDefaultUI: true,
                scrollwheel: false,
                zoom: 15,
                mapTypeControl: false,
            });

            // İşaretçi oluştur
            const markerHTML = `<div class="map-marker z-[1] flex items-center">
            <a href="${mapMarkerURL}" target="_blank" class="hover:scale-[1.1] duration-450" style="display:block; width:max-content;">
            <div class="icon-content relative animate-bounce2">
                <div class="icon icon-arrow-down absolute top-[50%] translate-x-[-50%] translate-y-[-50%] left-[50%] text-[40px] h-[40px] block leading-none duration-350 text-[#0055A3] text-center ">
                </div>
                <div class="icon icon-arrow-down text-[57px] h-[54px] block leading-none duration-350 text-[#0055A3]/40 text-center animate-pulse">
                </div>
            </div>
            <div class="map-text relative group-mapsi duration-450">
                <div class="img-content ">


                <div class="icon group/icons w-fit flex justify-center items-center">
                    <img loading="lazy" src="../assets/image/trademark/logo.png" alt="" class="w-[120px] h-full object-contain object-center duration-450 ">
                </div>

                </div>

            </div>
            </a>
        </div>`;

            const marker = createCustomMarker(map, currentLatLng, markerHTML);
        }
        // Sayfa yüklendiğinde ilk gösterilecek konum
        window.latLng = {
            lat: 41.06995412725466,
            lng: 28.80439999157121
        };


        // Şubelerin konumları ve URL'leri

        const locations = [{
                lat: 41.06995412725466,
                lng: 28.80439999157121,
                url: 'https://g.page/pentayazilim?share'
            },

            {
                lat: 40.9095072,
                lng: 29.2036767,
                url: 'https://example.com/location1'
            },
            {
                lat: 41.06995412725466,
                lng: 28.80439999157121,
                url: 'https://g.page/pentayazilim?share'
            },
            {
                lat: 36.5430984,
                lng: 32.0344702,
                url: 'https://example.com/location2'
            },

            {
                lat: 40.9095072,
                lng: 29.2036767,
                url: 'https://example.com/location1'
            },
            {
                lat: 36.5430984,
                lng: 32.0344702,
                url: 'https://example.com/location2'
            },
        ];

        // Sayfa yüklendiğinde haritayı oluştur
        $('[data-branch-index]').click(function() {
            let index = $(this).attr('data-branch-index');
            window.latLng = {
                lat: locations[index].lat,
                lng: locations[index].lng
            };
            mapMarkerURL = locations[index].url; // Yeni URL'yi güncelle
            initMap(); // Haritayı güncelle
        });
    </script>
@endsection