@extends('layouts.main')


@section('content')
<?php $pageTitle = 'Haberler'; ?>
<main class="main-field header-space">
    <div class="breadcrump bg-[#F6F6F6]">
        <div class="container max-w-[1440px]">
            <div class="wrapper title-content flex justify-between py-[20px]">
                <!-- TITLE -->
                <div class="page-title text-[#656565] text-[30px] lg:text-[28px] md:text-[24px] sm:text-[22px] xs:text-[20px] font-semibold leading-tight relative max-w-[768px] sm:max-w-none">{{getStaticText(51)}} </div>
                <!-- NAVIGATION -->
                <ul class="navigation flex-wrap gap-[10px] flex items-center sm:hidden">
                    <li class="flex items-center">
                        <a href="index.php" class="flex group">
                            <span class="text text-[#656565] text-[20px] md:text-[18px] xs:text-[16px] font-medium group-hover:text-[#0055A3] duration-450 leading-tight">{{getStaticText(28)}}</span>
                        </a>
                    </li>
                    <li class="split relative flex items-center h-[12px]">
                        <span class="text text-[#656565] text-[20px] md:text-[18px] xs:text-[16px] font-medium group-hover:text-[#0055A3] duration-450 leading-tight">/</span>
                    </li>
                    <li class="flex items-center">
                        <a href="javascript:;" class="flex group">
                            <span class="text text-[#656565] text-[20px] md:text-[18px] xs:text-[16px] font-medium group-hover:text-[#0055A3] duration-450 leading-tight">{{getStaticText(51)}}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container max-w-[1440px]">
            <div class="wrapper flex md:flex-col md:items-center justify-between mt-[30px] gap-[30px]">
                <div class="filter flex items-center md:justify-center sm:flex-col gap-[40px] sm:gap-[20px] w-full">
                    <div class="title">
                        <div class="group/link flex items-center justify-start space-x-3 " dir="">
                            <div class="icon icon-filter text-[#C7234B] text-[20px] h-[20px] block leading-none duration-350"></div>
                            <span class="text text-[#C7234B] text-[20px] md:text-[18px] xs:text-[16px] leading-tight duration-450">{{getStaticText(44)}}</span>
                        </div>
                    </div>
                    <div class="button-field flex flex-wrap justify-center gap-[10px]">
                        <!-- buttonlara active classı eklenince renk değişiyor -->
                        <a href="" class="button group active min-w-[160px] lg:min-w-[130px] justify-center items-center w-fit h-[50px] flex px-[30px] bg-transparent relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-[#0055A3] before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-[#0055A3] hover:before:left-0 [&.active]:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center " dir="">
                            <div class="text-[18px]  xs:text-[16px] font-normal font-inter flex items-center text-[#0055A3] group-[.active]:text-white group-hover:text-white relative z-2 duration-450 w-max">{{getStaticText(47)}}</div>
                        </a>
                        <a href="" class="button group min-w-[160px] lg:min-w-[130px] justify-center items-center w-fit h-[50px] flex px-[30px] bg-transparent relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-[#0055A3] before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-[#0055A3] hover:before:left-0 [&.active]:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center " dir="">
                            <div class="text-[18px]  xs:text-[16px] font-normal font-inter flex items-center text-[#0055A3] group-[.active]:text-white group-hover:text-white relative z-2 duration-450 w-max">{{getStaticText(48)}}</div>
                        </a>
                        <a href="" class="button group min-w-[160px] lg:min-w-[130px] justify-center items-center w-fit h-[50px] flex px-[30px] bg-transparent relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-[#0055A3] before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-[#0055A3] hover:before:left-0 [&.active]:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center " dir="">
                            <div class="text-[18px]  xs:text-[16px] font-normal font-inter flex items-center text-[#0055A3] group-[.active]:text-white group-hover:text-white relative z-2 duration-450 w-max">{{getStaticText(49)}}</div>
                        </a>
                    </div>
                </div>
                <div class="search w-full max-w-[450px] lg:max-w-[375px] sm:max-w-full">
                    <form action="" class="w-full max-w-[450px] sm:max-w-full ml-auto relative" dir="">
                        <input type="text" placeholder="{{getStaticText(50)}}" class="w-full leading-normal pl-[20px] pr-[50px] py-[12px] placeholder:font-light font-medium text-[#0055A3] placeholder:text-[#0055A3]/65 text-[18px] xs:text-[16px] border-solid border-[1px] border-[#0055A3]/30 rounded-full duration-350 hover:border-[#0055A3]/50 focus:!border-[#0055A3] focus:ring-0">
                        <button class="group cursor-pointer h-[40px] w-[40px] flex-center rounded-full p-[5px] absolute right-[5px] top-[50%] translate-y-[-50%] border-0">
                            <div class="icon icon-search-2 text-[22px] h-[22px] block leading-none duration-350 text-[#0055A3] group-hover:text-[#C7234B]"></div>
                        </button>
                    </form>
                </div>
            </div>
            <div class="wrapper grid grid-cols-2 md:grid-cols-1 gap-[40px] [&_.media-box:nth-child(1)]:col-span-2 md:[&_.media-box:nth-child(1)]:col-span-1 mt-[30px] mb-[50px]" dir="">
                <!-- ilk media-box'da height farklıdır -->
                <div class="media-box w-full h-full duration-450 hover:-translate-y-2">
                    <a href="single-blog.php" class="content group/blog relative [&:hover_.text-field]:text-white [&:hover_.icon-arrow-right-short]:text-white w-full h-full duration-450 block">
                        <div class="button-field absolute right-0 top-0 z-[1]">
                            <div class="button group/button h-[90px] w-[90px] xs:h-[70px] xs:w-[70px] flex justify-center rounded-tr-[30px] rounded-bl-[30px] bg-[#0055A3] border border-solid border-black/20 relative space-x-[15px] duration-500 overflow-hidden isolate opacity-0 scale-75 group-hover/blog:scale-100 group-hover/blog:opacity-100 origin-top-right">
                                <div class="icon-arrow-right-2 text-[18px] 
xs:text-[16px] flex items-center relative z-2 -rotate-45 text-white duration-450"></div>
                            </div>
                        </div>
                        <div class="image-field relative ">
                            <div class="image relative w-full h-[500px] xl:h-[400px] md:h-[350px] bg-[#D6D6D6] duration-450 overflow-hidden isolate rounded-[30px]">
                                <div class="gradient [background:linear-gradient(180deg,rgba(0,_0,_0,_0.00)_35%,_rgba(0,_0,_0,_.8)_100%);] absolute bottom-0 left-0 w-full h-full z-0 pointer-events-none translate-z-0 "></div>
                                <div class="gradient duration-450 bg-black/20 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-hover/blog:opacity-100"></div>
                                <img src="<?= env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'blog_images_folder'], app()->getLocale()).'/'.$blogs[0]->image  ?>" alt="" class="w-full h-full object-cover object-center duration-450">
                            </div>
                            <div class="text-field absolute bottom-0 left-0 p-[20px_20px_30px_50px] sm:p-[30px] overflow-hidden isolate group-[&.is-safari]/body:[transform:translateZ(0)_translate3d(0,0,0);] rtl:w-full">
                                <p class="  w-fit flex justify-center items-center gap-[8px] text-white/75 font-medium group-hover/blog:text-white duration-450 mb-[8px]">
                                    <span>{{date('d/m/Y', $blogs[0]->created_at) }}</span>
                                </p>
                                <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-white group-hover/slide:editor-headings:text-white editor-h1:font-bold editor-headings:font-normal editor-headings:line-clamp-2 editor-p:text-[14px] editor-p:font-light editor-p:text-white editor-p:mb-0 editor-p:duration-450 text-white mr-auto w-full sm:[&_br]:hidden rtl:max-w-full">
                                    <h1>{{$blogs[0]->title}}</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @foreach($blogs as $blog)
                <div class="media-box w-full h-full duration-450 hover:-translate-y-2">
                    <a href="{{ env('HTTP_DOMAIN') .'/'. getUrl('blog_url') . '/' . $blog->seo_url }}" class="content group/blog relative [&:hover_.text-field]:text-white [&:hover_.icon-arrow-right-short]:text-white w-full h-full duration-450 block">
                        <div class="button-field absolute right-0 top-0 z-[1]">
                            <div class="button group/button h-[90px] w-[90px] xs:h-[70px] xs:w-[70px] flex justify-center rounded-tr-[30px] rounded-bl-[30px] bg-[#0055A3] border border-solid border-black/20 relative space-x-[15px] duration-500 overflow-hidden isolate opacity-0 scale-75 group-hover/blog:scale-100 group-hover/blog:opacity-100 origin-top-right">
                                <div class="icon-arrow-right-2 text-[18px] 
xs:text-[16px] flex items-center relative z-2 -rotate-45 text-white duration-450"></div>
                            </div>
                        </div>
                        <div class="image-field relative ">
                            <div class="image relative w-full h-[350px] md:h-[300px] bg-[#D6D6D6] duration-450 overflow-hidden isolate rounded-[30px]">
                                <div class="gradient [background:linear-gradient(180deg,rgba(0,_0,_0,_0.00)_35%,_rgba(0,_0,_0,_.8)_100%);] absolute bottom-0 left-0 w-full h-full z-0 pointer-events-none translate-z-0 "></div>
                                <div class="gradient duration-450 bg-black/20 absolute top-0 left-0 w-full h-full z-[0] rounded-[30px] opacity-0 group-hover/blog:opacity-100"></div>
                                <img src="<?= env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'blog_images_folder'], app()->getLocale()).'/'.$blog->image  ?>" alt="" class="w-full h-full object-cover object-center duration-450">
                            </div>
                            <div class="text-field absolute bottom-0 left-0 p-[20px_20px_30px_50px] sm:p-[30px] overflow-hidden isolate group-[&.is-safari]/body:[transform:translateZ(0)_translate3d(0,0,0);] rtl:w-full">
                                <p class="  w-fit flex justify-center items-center gap-[8px] text-white/75 font-medium group-hover/blog:text-white duration-450 mb-[8px]">
                                    <span>{{date('d/m/Y', $blog->created_at) }}</span>
                                </p>
                                <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-white group-hover/slide:editor-headings:text-white editor-h1:font-bold editor-headings:font-normal editor-headings:line-clamp-2 editor-p:text-[14px] editor-p:font-light editor-p:text-white editor-p:mb-0 editor-p:duration-450 text-white mr-auto w-full sm:[&_br]:hidden">
                                    <h2>{{$blog->title}}</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="button-field flex justify-center flex-wrap gap-[25px] mt-[75px] mb-[50px] xs:mt-[50px] xs:mb-[30px] z-[2] relative">
                <a href="" class="button group min-w-[180px] lg:min-w-[150px] xs:lg:min-w-[120px] justify-center items-center w-fit h-[50px] flex px-[30px] bg-[#0055A3] relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-[#0055A3] before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-white hover:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center ">
                    <div class="text-[18px]  xs:text-[16px] font-normal font-inter flex items-center text-white group-hover:text-[#0055A3] relative z-2 duration-450 w-max">More</div>
                </a>
            </div>
        </div>
    </section>
</main>
@endsection 