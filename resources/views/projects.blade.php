@extends('layouts.main')

@section('content')
<?php 
    $paneName = "Projects";
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
            <div class="wrapper flex md:flex-col md:items-center justify-between mt-[20px] gap-[30px] xs:gap-[20px]">
                <div class="filter flex items-center md:justify-center sm:flex-col gap-[40px] sm:gap-[20px] w-full">
                    <div class="title w-full max-w-[150px]">
                        <div class="group/link flex items-center justify-start space-x-3 rtl:!gap-2" dir="">
                            <div class="icon icon-filter text-[#C7234B] text-[20px] h-[20px] block leading-none duration-350"></div>
                            <span class="text w-max text-[#C7234B] text-[20px] md:text-[18px] xs:text-[16px] leading-tight duration-450">{{getStaticText(44)}}</span>
                        </div>
                    </div>
                    <div class="button-field flex justify-start w-fit relative max-w-[700px] xl:max-w-[600px] sm:w-full ">
                        <div class="gradient duration-450 bg-gradient-to-l from-white from-15% to-white/0 absolute top-0 right-0 w-[40%] h-full z-[2] pointer-events-none"></div>
                        
                        <div class="gradient duration-450 bg-gradient-to-l from-white/0 from-50% to-white absolute top-0 left-0 w-[15%] h-full z-[2] pointer-events-none"></div>
                        <div class="controller flex gap-[15px] justify-between items-center w-full h-full absolute left-0 top-0 z-10 pointer-events-none">
                            <div id="timepicker-prev" class="pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                <div class="icon group/item flex items-center justify-center w-[40px] h-[40px] bg-white rounded-full cursor-pointer duration-500 group">
                                    <div class="icon-arrow-left text-[#0055A3] text-[16px] flex items-center justify-center duration-450 group-hover/item:translate-x-[-3px]"></div>
                                </div>
                            </div>

                            <div id="timepicker-next" class="pointer-events-auto duration-450 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none">
                                <div class="icon group/item flex items-center justify-center w-[40px] h-[40px] bg-white rounded-full cursor-pointer duration-500 group">
                                    <div class="icon-arrow-right text-[#0055A3] text-[16px] flex items-center justify-center duration-450 group-hover/item:translate-x-[3px]"></div>
                                </div>
                            </div>
                        </div>
                        <!-- buttonlara active classı eklenince renk değişiyor -->
                        <div class="overflow-x-scroll pt-[10px] relative after:contents-[''] after:w-[40%] xs:after:w-[25%] after:inline-block  before:contents-[''] before:w-[8%] xs:before:w-[15%] before:inline-block whitespace-nowrap space-x-3 scrollbar scrollbar-w-[0px] scrollbar-h-[0px] scrollbar-track-rounded-[5px] scrollbar-thumb-rounded-[3px] scrollbar-thumb-[#0055A3]/50 scrollbar-track-primary-200" id="timepicker">
                            <a href="javascript:;" class="button group inline-block active min-w-[160px] lg:min-w-[130px] w-fit h-[50px] px-[30px] bg-transparent relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-[#0055A3] before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-[#0055A3] hover:before:left-0 [&.active]:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center ">
                                <div class="text-[18px] xs:text-[16px] font-normal font-inter flex items-center text-[#0055A3] group-[.active]:text-white group-hover:text-white relative z-2 duration-450 w-max m-auto h-full" dir="">Africa</div>
                            </a>
                            <a href="javascript:;" class="button group inline-block min-w-[160px] lg:min-w-[130px] w-fit h-[50px] px-[30px] bg-transparent relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-[#0055A3] before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-[#0055A3] hover:before:left-0 [&.active]:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center ">
                                <div class="text-[18px] xs:text-[16px] font-normal font-inter flex items-center text-[#0055A3] group-[.active]:text-white group-hover:text-white relative z-2 duration-450 w-max m-auto h-full" dir="">Europe</div>
                            </a>
                            <a href="javascript:;" class="button group inline-block min-w-[160px] lg:min-w-[130px] w-fit h-[50px] px-[30px] bg-transparent relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-[#0055A3] before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-[#0055A3] hover:before:left-0 [&.active]:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center ">
                                <div class="text-[18px] xs:text-[16px] font-normal font-inter flex items-center text-[#0055A3] group-[.active]:text-white group-hover:text-white relative z-2 duration-450 w-max m-auto h-full" dir="">North America</div>
                            </a>
                            <a href="javascript:;" class="button group inline-block min-w-[160px] lg:min-w-[130px] w-fit h-[50px] px-[30px] bg-transparent relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-[#0055A3] before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-[#0055A3] hover:before:left-0 [&.active]:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center ">
                                <div class="text-[18px] xs:text-[16px] font-normal font-inter flex items-center text-[#0055A3] group-[.active]:text-white group-hover:text-white relative z-2 duration-450 w-max m-auto h-full" dir="">Asia</div>
                            </a>
                            <a href="javascript:;" class="button group inline-block min-w-[160px] lg:min-w-[130px] w-fit h-[50px] px-[30px] bg-transparent relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-[#0055A3] before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-[#0055A3] hover:before:left-0 [&.active]:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center ">
                                <div class="text-[18px] xs:text-[16px] font-normal font-inter flex items-center text-[#0055A3] group-[.active]:text-white group-hover:text-white relative z-2 duration-450 w-max m-auto h-full" dir="">South America</div>
                            </a>
                            <a href="javascript:;" class="button group inline-block min-w-[160px] lg:min-w-[130px] w-fit h-[50px] px-[30px] bg-transparent relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-[#0055A3] before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-[#0055A3] hover:before:left-0 [&.active]:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center ">
                                <div class="text-[18px] xs:text-[16px] font-normal font-inter flex items-center text-[#0055A3] group-[.active]:text-white group-hover:text-white relative z-2 duration-450 w-max m-auto h-full" dir="">Australia</div>
                            </a>
                            <a href="javascript:;" class="button group inline-block min-w-[160px] lg:min-w-[130px] w-fit h-[50px] px-[30px] bg-transparent relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-[#0055A3] before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-[#0055A3] hover:before:left-0 [&.active]:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center ">
                                <div class="text-[18px] xs:text-[16px] font-normal font-inter flex items-center text-[#0055A3] group-[.active]:text-white group-hover:text-white relative z-2 duration-450 w-max m-auto h-full" dir="">Antarctica</div>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="search w-full max-w-[450px] lg:max-w-[375px] sm:max-w-full flex justify-center" dir="">
                    <form action="" class="w-full max-w-[450px] sm:max-w-full ml-auto relative my-auto">
                        <input type="text" placeholder="{{getStaticText(50)}}" class="w-full leading-normal pl-[20px] pr-[50px] py-[12px] placeholder:font-light font-medium text-[#0055A3] placeholder:text-[#0055A3]/65 text-[18px] xs:text-[16px] border-solid border-[1px] border-[#0055A3]/30 rounded-full duration-350 hover:border-[#0055A3]/50 focus:!border-[#0055A3] focus:ring-0">
                        <button class="group cursor-pointer h-[40px] w-[40px] flex-center rounded-full p-[5px] absolute right-[5px] top-[50%] translate-y-[-50%] border-0">
                            <div class="icon icon-search-2 text-[22px] h-[22px] block leading-none duration-350 text-[#0055A3] group-hover:text-[#C7234B]"></div>
                        </button>
                    </form>
                </div>
            </div>
            <div class="wrapper mt-[50px] mb-[50px] space-y-[50px]" dir="">
                @foreach($projects as $key => $project)
                <div class="project-box w-full h-full duration-450 hover:-translate-y-2">
                    <a href="{{ env('HTTP_DOMAIN') .'/'. getUrl('project_url') . '/' . $project->seo_url }}" class="content group/blog flex relative [&:hover_.text-field]:text-white [&:hover_.icon-arrow-right-short]:text-white w-full h-full duration-450 p-[3px] rounded-[30px] overflow-hidden isolate">
                        <div class="gradient duration-450 bg-gradient-to-b from-[#005AA5] to-[#C7234B] rounded-[30px] absolute top-0 left-0 w-full h-full z-[0] opacity-0 group-hover/blog:opacity-100"></div>
                        <div class="button-field absolute right-0 top-0 z-[1]">
                            <div class="button group/button h-[90px] w-[90px] xs:h-[70px] xs:w-[70px] flex justify-center rounded-tr-[30px] rounded-bl-[30px] bg-[#0055A3] border border-solid border-black/20 relative space-x-[15px] duration-500 overflow-hidden isolate opacity-0 scale-75 group-hover/blog:scale-100 group-hover/blog:opacity-100 origin-top-right">
                                <div class="icon-arrow-right-2 text-[18px] xs:text-[16px] flex items-center relative z-2 -rotate-45 text-white duration-450"></div>
                            </div>
                        </div>
                        <div class="content w-full bg-white relative px-[30px] py-[28px] rounded-[30px] overflow-hidden isolate">
                            <div class="gradient duration-450 bg-gradient-to-b from-[#005AA5]/70 to-[#C7234B]/25 to-65% rounded-[30px] absolute top-0 left-0 w-full h-full z-[0] opacity-10"></div>
                            <div class="wrapper grid grid-cols-2 relative z-[1] lg:gap-[30px] sm:grid-cols-1">
                                @if($key % 2 == 0)
                                    <div class="image-field relative sm:order-1">
                                        <div class="image relative w-full h-[420px] md:h-[350px] xs:h-[300px] bg-[#D6D6D6] duration-450 overflow-hidden isolate rounded-[20px]">
                                            <img src="{{env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'project_images_folder'], app()->getLocale()).'/'.$project->image}}" alt="" class="w-full h-full object-cover object-center duration-450">
                                        </div>
                                    </div>
                                    <div class="text-field p-[10px] sm:p-0 max-w-[500px] m-auto overflow-hidden isolate flex flex-col justify-center sm:max-w-full relative sm:order-2">
                                        <div class="w-fit flex justify-center items-center gap-[8px] duration-450 mb-[20px]">
                                            <div class="icon icon-location text-[#C7234B] text-[20px] h-[20px] block leading-none duration-350"></div>
                                            <span class="text-[#C7234B] font-normal text-[22px] line-clamp-1">{{$project->location}}</span>
                                        </div>
                                        <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-white editor-h1:font-bold editor-headings:font-normal editor-headings:leading-[1.1] editor-headings:line-clamp-3 editor-p:text-[20px] editor-p:font-light editor-p:text-[#231F20] editor-p:mb-0 editor-p:duration-450 editor-p:line-clamp-3 text-white mr-auto w-full sm:[&_br]:hidden">
                                            <h1>{{$project->title_1}}</h1>
                                            <p>{!!$project->short_description!!} </p>
                                        </div>
                                    </div>
                                @else
                                    <div class="text-field p-[10px] sm:p-0 max-w-[500px] m-auto overflow-hidden isolate flex flex-col justify-center sm:max-w-full relative sm:order-2">
                                        <div class="w-fit flex justify-center items-center gap-[8px] duration-450 mb-[20px]">
                                            <div class="icon icon-location text-[#C7234B] text-[20px] h-[20px] block leading-none duration-350"></div>
                                            <span class="text-[#C7234B] font-normal text-[22px] line-clamp-1">{{$project->location}}</span>
                                        </div>
                                        <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-white editor-h1:font-bold editor-headings:font-normal editor-headings:leading-[1.1] editor-headings:line-clamp-3 editor-p:text-[20px] editor-p:font-light editor-p:text-[#231F20] editor-p:mb-0 editor-p:duration-450 editor-p:line-clamp-3 text-white mr-auto w-full sm:[&_br]:hidden">
                                            <h1>{{$project->title_1}}</h1>
                                            <p>{!!$project->short_description!!} </p>
                                        </div>
                                    </div>
                                    <div class="image-field relative sm:order-1">
                                        <div class="image relative w-full h-[420px] md:h-[350px] xs:h-[300px] bg-[#D6D6D6] duration-450 overflow-hidden isolate rounded-[20px]">
                                            <img src="{{env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'project_images_folder'], app()->getLocale()).'/'.$project->image }}" alt="" class="w-full h-full object-cover object-center duration-450">
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </a>
                </div>
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