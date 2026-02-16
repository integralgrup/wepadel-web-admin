@extends('layouts.main')

@section('content')

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