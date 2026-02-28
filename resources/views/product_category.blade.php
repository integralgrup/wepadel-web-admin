@extends('layouts.main')

@section('content')
<?php 
$pageName = $category->title;
$breadcrumbTitle = $category->title;
$breadcrumbType = "image";
$breadcrumbSRC = "../assets/image/other/blog-2.jpg";
$breadcrumbImage = $menu->image;
//dd($categories);
?>

<main class="main-field header-space">
 <?php # include 'layout/breadcrumb.php'; ?>
<!-- 2. breadcrumbı kullanmak için yukarıdaki satırı aktif edin ve aşağıdaki breadcrumb divini yorum satırı yapın veya kaldırın. -->
    <div class="breadcrump bg-[#F6F6F6]">
        <div class="container max-w-[1440px]">
            <div class="wrapper title-content flex justify-between py-[20px]" dir="">
                <!-- TITLE -->
                <div class="page-title text-[#656565] text-[30px] lg:text-[28px] md:text-[24px] sm:text-[22px] xs:text-[20px] font-semibold leading-tight relative max-w-[768px] sm:max-w-none">{{$category->title}} </div>
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
                        <a href="index.php" class="flex group">
                            <span class="text text-[#656565] text-[20px] md:text-[18px] xs:text-[16px] font-medium group-hover:text-[#0055A3] duration-450 leading-tight">{{getStaticText(3)}}</span>
                        </a>
                    </li>
                    <li class="split relative flex items-center h-[12px]">
                        <span class="text text-[#656565] text-[20px] md:text-[18px] xs:text-[16px] font-medium group-hover:text-[#0055A3] duration-450 leading-tight">/</span>
                    </li>
                    <li class="flex items-center">
                        <a href="javascript:;" class="flex group">
                            <span class="text text-[#656565] text-[20px] md:text-[18px] xs:text-[16px] font-medium group-hover:text-[#0055A3] duration-450 leading-tight">{{$category->title}}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container max-w-[1440px]">
            <div class="wrapper grid grid-cols-[minmax(0,4fr)_minmax(0,8fr)] lg:grid-cols-[minmax(0,4fr)_minmax(0,9fr)] md:grid-cols-1" dir="">
                <div class="left-menu relative ">
                    <div class="dynamic-sticky [background:linear-gradient(180deg,_rgba(217,217,217,0.3)_0%,_rgba(217,217,217,0)_100%);] rounded-[15px] mt-[45px]">
                    <button type="button" class="cursor-pointer category-trigger border-0 outline-none h-[60px] bg-primary hidden md:flex items-center justify-center gap-[20px] w-full px-[30px] duration-350 bg-[#0055A3] [&.active]:bg-[#C7234B] group peer rounded-[20px]">
                        <div class="text text-[18px] text-white font-medium">KATEGORİLER</div>
                        <div class="icon icon-arrow-down text-[12px] h-[12px] block leading-none duration-350 text-white group-[&.active]:rotate-180"></div>
                    </button>
                        <ul class="menu-field relative z-[1] px-[30px] py-[30px] md:hidden">
                            @foreach($categories as $item)
                            <li class="main-menu-li group/inner-link relative menu-selector text-[#1C2840]/40 text-[18px] font-medium duration-450 [&.active]:text-[#0055A3] hover:text-[#0055A3] py-[6px] [&.active_.icon-arrow-right]:rotate-90 [&.active_.icon-arrow-right]:text-[#D00D15] [&.active_.icon-arrow-right]:translate-x-0">
                                <a href="javascript:;" class="flex items-center justify-start gap-[20px] group/link bg-white rounded-[15px] py-[10px] px-[20px]">
                                    <i class="icon-arrow-right text-[14px] font-light flex items-center text-[#0055A3] relative z-10 duration-450 group-hover/link:text-[#D00D15] -translate-x-1 group-hover/link:translate-x-0"></i>
                                    <div class="text font-medium group-[.active]/inner-link:font-bold text-[#0055A3] text-[24px] md:text-[22px] xs:text-[18px]">{{$item->title}}</div>
                                </a>
                                <div class="inner-child-menu p-[20px_10px_20px] hidden lg:hidden ">
                                    <ul class="ml-[50px] space-y-4 xs:ml-0">
                                        @foreach($item->product as $product)
                                        <li class="group/inner-child-link ">
                                            <a href="{{env('HTTP_DOMAIN'). '/'. $item->seo_url .'/'. $product->seo_url }}" class="flex items-center w-full">
                                                <div class="flex items-center relative z-2 group-[.active]/inner-child-link:w-[25px] group-[.active]/inner-child-link:mr-2 w-0 duration-450 ">
                                                    <div class="split w-full h-[3px] rounded-[30px] bg-[#C7234B] z-[1] absolute top-[50%] translate-y-[-50%]"></div>
                                                </div>
                                                <span class="text text-black font-light text-[18px] lg:text-[16px] leading-tight duration-450 group-hover/inner-child-link:text-[#C7234B] group-hover/inner-child-link:translate-x-1 group-[.active]/inner-child-link:text-[#C7234B] group-[.active]/inner-child-link:font-bold">{{$product->title}}</span>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="container max-w-[1440px] md:px-0">
                    <div class="wrapper flex items-center md:flex-col md:items-center justify-between mt-[30px] gap-[30px]">
                        <div class="text text-[20px] font-normal text-[#0055A3] [&_strong]:text-[18px] [&_strong]:font-bold [&_strong]:text-[#C7234B]">
                            Product Result <strong>{{$category->product->count()}}</strong>
                        </div>
                        <div class="search w-full max-w-[450px] lg:max-w-[375px] sm:max-w-full">
                            <form action="" class="w-full max-w-[450px] sm:max-w-full ml-auto relative">
                                <input type="text" placeholder="{{getStaticText(17)}}" class="w-full leading-normal pl-[20px] pr-[50px] py-[12px] placeholder:font-light font-medium text-[#0055A3] placeholder:text-[#0055A3]/65 text-[18px] xs:text-[16px] border-solid border-[1px] border-[#0055A3]/30 rounded-full duration-350 hover:border-[#0055A3]/50 focus:!border-[#0055A3] focus:ring-0">
                                <button class="group cursor-pointer h-[40px] w-[40px] flex-center rounded-full p-[5px] absolute right-[5px] top-[50%] translate-y-[-50%] border-0">
                                    <div class="icon icon-search-2 text-[22px] h-[22px] block leading-none duration-350 text-[#0055A3] group-hover:text-[#C7234B]"></div>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="wrapper grid grid-cols-2 md:grid-cols-1 gap-[40px] mt-[30px] mb-[50px]">
                        @foreach($category->product as $product)
                        <div class="project-box w-full h-full duration-450 hover:-translate-y-2">
                            <a href="{{env('HTTP_DOMAIN'). '/'. $category->seo_url .'/'. $product->seo_url }}" class="content group/blog flex relative [&:hover_.text-field]:text-white [&:hover_.icon-arrow-right-short]:text-white w-full h-full duration-450 p-[3px] rounded-[30px] overflow-hidden isolate ">
                                <div class="gradient duration-450 bg-gradient-to-b from-[#005AA5] to-[#C7234B] rounded-[30px] absolute top-0 left-0 w-full h-full z-[0] opacity-0 group-hover/blog:opacity-100"></div>
                                <div class="button-field absolute right-0 top-0 z-[1]">
                                    <div class="button group/button h-[90px] w-[90px] xs:h-[70px] xs:w-[70px] flex justify-center rounded-tr-[30px] rounded-bl-[30px] bg-[#0055A3] border border-solid border-black/20 relative space-x-[15px] duration-500 overflow-hidden isolate opacity-0 scale-75 group-hover/blog:scale-100 group-hover/blog:opacity-100 origin-top-right">
                                        <div class="icon-arrow-right-2 text-[18px] xs:text-[16px] flex items-center relative z-2 -rotate-45 text-white duration-450"></div>
                                    </div>
                                </div>
                                <div class="content w-full bg-white relative rounded-[30px] overflow-hidden isolate py-[50px] sm:pb-[30px]">
                                    <div class="gradient duration-450 bg-gradient-to-b from-[#005AA5]/70 to-[#C7234B]/25 to-65% rounded-[30px] absolute top-0 left-0 w-full h-full z-[0] opacity-10"></div>
                                    <div class="wrapper relative z-[1] lg:gap-[30px]">
                                        <div class="text-field p-[10px] sm:p-0 m-auto flex flex-col justify-center sm:max-w-full relative sm:order-2 mx-[50px] md:mx-[30px] xs:mx-[20px]">
                                            <div class="w-fit flex justify-center items-center gap-[8px] duration-450 mb-[15px]">
                                                <div class="icon icon-arrow-down text-[20px] h-[20px] sm:text-[16px] sm:h-[16px] block leading-none duration-350 text-[#C7234B] absolute -top-[20px] left-0 sm:left-0"></div>
                                                <span class="text-[#0055A3] font-light text-[20px] line-clamp-1">{{$category->title}}</span>
                                            </div>
                                            <div class="editor editor-base editor-h1:text-[34px] xl:editor-h1:text-[30px] lg:editor-h1:text-[28px] md:editor-h1:text-[26px] sm:editor-h1:text-[24px] xs:editor-h1:text-[22px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-[#0055A3] group-hover/slide:editor-headings:text-white editor-h1:font-bold editor-headings:font-normal editor-headings:leading-[1.25] editor-headings:line-clamp-2 editor-p:text-[20px] editor-p:font-light editor-p:text-[#231F20] editor-p:mb-0 editor-p:duration-450 editor-p:line-clamp-3 text-white mr-auto w-full sm:[&_br]:hidden">
                                                <h1>{{$product->title}}</h1>
                                            </div>
                                        </div>
                                        <div class="image-field relative sm:order-1">
                                            <div class="image relative w-full h-[250px] md:h-[225px]  duration-450 overflow-hidden isolate opacity-100 group-hover/blog:opacity-0">
                                                <img src="{{env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'product_images_folder'], app()->getLocale()) .'/'. $product->gallery[0]->image}}" alt="" class="w-full h-full object-contain object-center duration-450">
                                            </div>
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
            </div>
        </div>
    </section>
</main>

@endsection

<!-- script --> 
@section('script') 

@endsection