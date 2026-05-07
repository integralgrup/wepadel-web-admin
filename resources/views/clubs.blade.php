@extends('layouts.main')

@section('content')
    <?php $code = \App\Models\Code::where('lang', app()->getLocale())->first(); ?>
    <?php
    $paneName = "Padel Clubs";
    $breadcrumbType = "Görsel";
    $breadcrumbSRC = "../assets/image/other/blog-2.jpg";
    ?>
    <main class="main-field ">
       <section class="breadcrumb relative header-space">
            <div class="image-field absolute top-0 left-0 w-full h-full overflow-hidden">
                <div class="image h-full overflow-hidden">
                    <?php if ($breadcrumbType == "Görsel") : ?>
                        <img loading="lazy" src="<?= $breadcrumbSRC ?>" alt="" class="w-full h-full object-cover object-center">
                    <?php else : ?>
                        <!-- VİDEO EKLENEBİLİR -->
                        <!-- <video autoplay loop muted playsinline class="w-full h-full object-cover object-right" src="<?= $breadcrumbSRC ?>"></video> -->
                    <?php endif; ?>
                </div>
            </div>
            <div class="text-field relative py-[120px] sm:py-[80px] md:py-[80px] lg:py-[80px] z-[5]">
                <div class="container max-w-[1360px] mx-auto px-[30px] ">
                    <div class="wrapper flex justify-between">
                        <div class="space-y-[20px] scrollreveal">
                            <!-- TITLE -->
                            <div class="page-title text-white text-[40px] lg:text-[36px] md:text-[30px] sm:text-[26px] xs:text-[22px] text-editor-500 font-bold leading-tight relative max-w-[768px] sm:max-w-none"><?= $paneName ?></div>
                            <!-- NAVIGATION -->
                            <ul class="flex-wrap gap-[10px] flex sm:hidden [&>*:last-child]:text-sushi-500">
                                <li class="flex items-center">
                                    <a href="index.php" class="flex group">
                                        <div class="text text-white text-[16px]  text-editor-500 group-hover:text-sushi-500 duration-500 leading-tight">Anasayfa</div>
                                    </a>
                                </li>
                                <li class="split relative flex items-center">
                                    <div class="text-[12px] text-white text-editor-500 flex">/</div>
                                </li>
                                <li class="flex items-center">
                                    <a href="javascript:;" class="flex group">
                                        <div class="text text-white text-[16px]  group-hover:text-sushi-500 duration-500 leading-tight"><?= $paneName ?></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container max-w-[1440px]">
                <div class="wrapper mt-[50px] mb-[50px] space-y-[50px]" dir="">
                    @foreach($clubs as $key => $club)
                    @if($key % 2 == 0)
                        <div class="project-box w-full h-full duration-450 hover:-translate-y-2">
                            <div class="content group/blog flex relative [&:hover_.text-field]:text-white [&:hover_.icon-arrow-right-short]:text-white w-full h-full duration-450 p-[3px] rounded-[30px] overflow-hidden isolate">
                                <div class="gradient duration-450 bg-gradient-to-b from-[#005AA5] to-[#C7234B] rounded-[30px] absolute top-0 left-0 w-full h-full z-[0] opacity-0 group-hover/blog:opacity-100"></div>
                                <div class="button-field absolute right-0 top-0 z-[1]">
                                    <a href="{{env('HTTP_DOMAIN').'/'.$club->seo_url }}" class="button group/button h-[90px] w-[90px] xs:h-[70px] xs:w-[70px] flex justify-center rounded-tr-[30px] rounded-bl-[30px] bg-[#0055A3] border border-solid border-black/20 relative space-x-[15px] duration-500 overflow-hidden isolate opacity-0 scale-75 group-hover/blog:scale-100 group-hover/blog:opacity-100 origin-top-right">
                                        <div class="icon-arrow-right-2 text-[18px] xs:text-[16px] flex items-center relative z-2 -rotate-45 text-white duration-450"></div>
                                    </a>
                                </div>
                                <div class="content w-full bg-white relative px-[30px] py-[28px] rounded-[30px] overflow-hidden isolate">
                                    <div class="gradient duration-450 bg-gradient-to-b from-[#005AA5]/70 to-[#C7234B]/25 to-65% rounded-[30px] absolute top-0 left-0 w-full h-full z-[0] opacity-10"></div>
                                    <div class="wrapper grid grid-cols-2 relative z-[1] lg:gap-[50px] sm:grid-cols-1">
                                        <div class="image-field relative sm:order-1">
                                            <a href="{{ env('HTTP_DOMAIN').'/'.$club->seo_url }}">
                                                <div class="image relative w-full h-[420px] md:h-[350px] xs:h-[300px] bg-[#D6D6D6] duration-450 overflow-hidden isolate image-zoom rounded-[20px]">
                                                    <img src="{{env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'club_images_folder'], $club->lang) .'/'. $club->image}}" alt="{{$club->alt}}" class="w-full h-full object-cover object-center duration-450">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="text-field p-[10px] sm:p-0 max-w-[500px] m-auto flex flex-col justify-center sm:max-w-full relative sm:order-2">
                                            <div class="w-fit flex justify-center items-center gap-[8px] duration-450 mb-[20px] relative">
                                                <div class="icon icon-arrow-down text-[20px] h-[20px] sm:text-[16px] sm:h-[16px] block leading-none duration-350 text-[#C7234B] absolute -top-[20px] -left-[15px] sm:left-0"></div>
                                                <span class="text-[#0055A3] font-normal text-[20px] line-clamp-1 ">Padel Clubs</span>
                                            </div>
                                            <div class="text-content">
                                                <a href="{{ env('HTTP_DOMAIN').'/'.$club->seo_url }}">
                                                    <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-white editor-h1:font-bold editor-headings:font-normal editor-headings:leading-[1.1] editor-headings:line-clamp-3 editor-p:text-[20px] editor-p:font-light editor-p:text-[#231F20] editor-p:mb-0 editor-p:duration-450 editor-p:line-clamp-3 text-white mr-auto w-full sm:[&_br]:hidden">
                                                        <h3 class="fake-h1">{{$club->title}}</h3>
                                                        <p>{{ mb_substr($club->description_2, 0, 100) }}...</p>
                                                    </div>
                                                </a>
                                                <div class="button-field relative mt-[30px]">
                                                <a href="{{env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'club_images_folder'], $club->lang) .'/'. $club->pdf_file}}" target="_blank" class="button group min-w-[180px] lg:min-w-[150px] xs:lg:min-w-[120px] justify-center items-center w-fit h-[50px] flex px-[30px] bg-[#D9D9D9]/20 relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-[#0055A3] before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-[#0055A3] hover:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center rtl:gap-2">
                                                        <div class="icon text-[12px] flex items-center relative z-2 duration-450 ">
                                                            <div class="icon-download text-[18px] flex items-center text-[#0055A3] relative z-2 duration-450 group-hover:text-white group-hover:-translate-x-1"></div>
                                                        </div>
                                                        <div class="text-[18px] xs:text-[16px] font-normal font-inter flex items-center text-[#0055A3] group-hover:text-white relative z-2 duration-450 w-max">PDF</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    @else
                    <div class="project-box w-full h-full duration-450 hover:-translate-y-2">
                        <div class="content group/blog flex relative [&:hover_.text-field]:text-white [&:hover_.icon-arrow-right-short]:text-white w-full h-full duration-450 p-[3px] rounded-[30px] overflow-hidden isolate">
                            <div class="gradient duration-450 bg-gradient-to-b from-[#005AA5] to-[#C7234B] rounded-[30px] absolute top-0 left-0 w-full h-full z-[0] opacity-0 group-hover/blog:opacity-100"></div>
                            <div class="button-field absolute right-0 top-0 z-[1]">
                                <a href="{{env('HTTP_DOMAIN').'/'. getUrl('club_url') .'/'. $club->seo_url }}" class="button group/button h-[90px] w-[90px] xs:h-[70px] xs:w-[70px] flex justify-center rounded-tr-[30px] rounded-bl-[30px] bg-[#0055A3] border border-solid border-black/20 relative space-x-[15px] duration-500 overflow-hidden isolate opacity-0 scale-75 group-hover/blog:scale-100 group-hover/blog:opacity-100 origin-top-right">
                                    <div class="icon-arrow-right-2 text-[18px] xs:text-[16px] flex items-center relative z-2 -rotate-45 text-white duration-450"></div>
                                </a>
                            </div>
                            <div class="content w-full bg-white relative px-[30px] py-[28px] rounded-[30px] overflow-hidden isolate">
                                <div class="gradient duration-450 bg-gradient-to-b from-[#005AA5]/70 to-[#C7234B]/25 to-65% rounded-[30px] absolute top-0 left-0 w-full h-full z-[0] opacity-10"></div>
                                <div class="wrapper grid grid-cols-2 relative z-[1] lg:gap-[50px] sm:grid-cols-1">
                                    <div class="text-field p-[10px] sm:p-0 max-w-[500px] m-auto flex flex-col justify-center sm:max-w-full relative sm:order-2">
                                        <div class="w-fit flex justify-center items-center gap-[8px] duration-450 mb-[20px] relative">
                                            <div class="icon icon-arrow-down text-[20px] h-[20px] sm:text-[16px] sm:h-[16px] block leading-none duration-350 text-[#C7234B] absolute -top-[20px] -left-[15px] sm:left-0"></div>
                                            <span class="text-[#0055A3] font-normal text-[20px] line-clamp-1 ">Padel Clubs</span>
                                        </div>
                                        <div class="text-content">
                                            <a href="{{ env('HTTP_DOMAIN').'/'. getUrl('club_url') .'/'. $club->seo_url }}">
                                                <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-white editor-h1:font-bold editor-headings:font-normal editor-headings:leading-[1.1] editor-headings:line-clamp-3 editor-p:text-[20px] editor-p:font-light editor-p:text-[#231F20] editor-p:mb-0 editor-p:duration-450 editor-p:line-clamp-3 text-white mr-auto w-full sm:[&_br]:hidden">
                                                    <h3 class="fake-h1">{{$club->title}}</h3>
                                                    <p>{{ mb_substr($club->description_2, 0, 100) }}...</p>
                                                </div>
                                            </a>
                                            <div class="button-field relative mt-[30px]">
                                                <a href="{{env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'club_images_folder'], $club->lang) .'/'. $club->pdf_file}}" target="_blank" class="button group min-w-[180px] lg:min-w-[150px] xs:lg:min-w-[120px] justify-center items-center w-fit h-[50px] flex px-[30px] bg-[#D9D9D9]/20 relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-[#0055A3] before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-[#0055A3] hover:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center rtl:gap-2">
                                                    <div class="icon text-[12px] flex items-center relative z-2 duration-450 ">
                                                        <div class="icon-download text-[18px] flex items-center text-[#0055A3] relative z-2 duration-450 group-hover:text-white group-hover:-translate-x-1"></div>
                                                    </div>
                                                    <div class="text-[18px] xs:text-[16px] font-normal font-inter flex items-center text-[#0055A3] group-hover:text-white relative z-2 duration-450 w-max">PDF</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image-field relative sm:order-1">
                                        <a href="{{env('HTTP_DOMAIN').'/'. getUrl('club_url') .'/'. $club->seo_url }}">
                                            <div class="image relative w-full h-[420px] md:h-[350px] xs:h-[300px] bg-[#D6D6D6] duration-450 overflow-hidden isolate image-zoom rounded-[20px]">
                                                <img src="{{env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'club_images_folder'], $club->lang) .'/'. $club->image}}" alt="{{$club->alt}}" class="w-full h-full object-cover object-center duration-450">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                <div class="button-field flex justify-center flex-wrap gap-[25px] mt-[75px] mb-[50px] xs:mt-[50px] xs:mb-[30px] z-[2] relative">
                    <a href="" class="button group min-w-[180px] lg:min-w-[150px] xs:lg:min-w-[120px] w-fit h-[50px] px-[30px] bg-[#0055A3] relative flex justify-center space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-[#0055A3] before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-white hover:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center ">
                        <div class="text-[18px]  xs:text-[16px] font-normal font-inter flex items-center text-white group-hover:text-[#0055A3] relative z-2 duration-450 w-max">More</div>
                    </a>
                </div>
            </div>
        </section>
    </main>

@endsection

<!-- script --> 
@section('script') 

@endsection