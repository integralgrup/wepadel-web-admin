@extends('layouts.main')

@section('content')
    <?php 
        $pageTitle = $blog->title; 
        $breadcrumbImage = "corporate-breadcrumb.jpg";
        $breadcrumbVideo = "breadcrumb-video.mp4";
        $pageLink = "page-corporate.php";
        $imageOrVideo = "image";
    ?> 

    <main class="main-field header-space">
    <div class="breadcrump bg-[#F6F6F6]">
        <div class="container max-w-[1440px]">
            <div class="wrapper title-content flex justify-between py-[20px]">
                <!-- TITLE -->
                <div class="page-title text-[#656565] text-[30px] lg:text-[28px] md:text-[24px] sm:text-[22px] xs:text-[20px] font-semibold leading-tight relative max-w-[768px] sm:max-w-none">{{getStaticText(51)}} </div>
                <!-- NAVIGATION -->
                <ul class="navigation flex-wrap gap-[10px] flex items-center sm:hidden">
                    <li class="flex items-center">
                        <a href="{{env('HTTP_DOMAIN')}}" class="flex group">
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
    <section class="blog-detail mt-[30px]" dir="">
        <div class="container max-w-[1440px] ">
            <div class="image h-[650px] xl:h-[500px] lg:h-[400px] sm:h-[300px] overflow-hidden isolate relative  rounded-[30px]">
                <div class="gradient [background:linear-gradient(180deg,rgba(0,_0,_0,_0.00)_30%,_rgba(0,_0,_0,_.8)_100%);] absolute bottom-0 left-0 w-full h-full z-0 pointer-events-none translate-z-0 "></div>
                <img loading="lazy" src="<?= env('HTTP_DOMAIN') .'/'. getFolder(['uploads_folder', 'blog_images_folder'], app()->getLocale()).'/'.$blog->image  ?>" alt="" class="w-full h-full object-cover object-center">
                <div class="text-field text-white absolute bottom-[10px] left-[50%] translate-x-[-50%] items-end py-[20px] px-[30px] w-full z-[1] max-w-[1440px] mx-auto mb-[30px]">
                    <div class="editor editor-base editor-h1:text-[44px] xl:editor-h1:text-[40px] lg:editor-h1:text-[34px] md:editor-h1:text-[30px] sm:editor-h1:text-[26px] xs:editor-h1:text-[24px] editor-headings:m-0 editor-headings:duration-450 editor-headings:text-white group-hover/slide:editor-headings:text-white editor-h1:font-bold editor-headings:font-normal editor-headings:line-clamp-2 editor-p:text-[14px] editor-p:font-light editor-p:text-white editor-p:mb-0 editor-p:duration-450 text-white mr-auto w-full sm:[&_br]:hidden rtl:max-w-full">
                        <h1>{{$blog->title}}</h1>
                    </div>
                    <ul class="navigation flex-wrap gap-[10px] flex items-center sm:hidden mt-[20px]">
                        <li class="flex items-center">
                            <a href="index.php" class="flex group">
                                <span class="text text-white text-[20px] md:text-[18px] xs:text-[16px] font-normal group-hover:text-[#0055A3] duration-450 leading-tight">{{getStaticText(28)}}</span>
                            </a>
                        </li>
                        <li class="split relative flex items-center h-[12px]">
                            <span class="text text-white text-[20px] md:text-[18px] xs:text-[16px] font-normal group-hover:text-[#0055A3] duration-450 leading-tight">/</span>
                        </li>
                        <li class="flex items-center">
                            <a href="javascript:;" class="flex group">
                                <span class="text text-white text-[20px] md:text-[18px] xs:text-[16px] font-normal group-hover:text-[#0055A3] duration-450 leading-tight">{{getStaticText(51)}}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container max-w-[1440px] mb-[20px] scrollreveal">
            <div class="wrapper relative flex gap-[30px] md:gap-[20px] max-w-[900px] mx-auto xs:flex-col blog-text-field">
                <div class="text-field">
                    <div class="dynamic-sticky">
                        <div class="share-items flex flex-col xs:flex-row items-center justify-between pt-[30px] gap-[50px] md:gap-[30px] xs:justify-center xs:gap-3 xs:py-0 xs:mt-[15px] sm:mt-0">
                            <ul class="blog-controller flex flex-col xs:flex-row gap-[40px] xs:gap-[15px] items-center p-[10px] ">
                                <li class="size relative flex group after:content-[''] after:h-[30px] after:w-[1px] after:absolute cursor-pointer">
                                    <div class="icon-size text-[45px] text-[#40403B] group-hover:text-[#C7234B] duration-450 relative z-20 flex group-hover:scale-90 group-hover:text-sushi-400"></div>
                                </li>
                                <li class="link relative group/copy [&.copied_span]:animate-blogCopied  flex group after:content-[''] after:h-[30px] after:w-[1px] after:absolute cursor-pointer">
                                    <div class="icon-copy text-[22px] text-[#40403B] group-hover:text-[#C7234B] duration-450 relative z-20 flex group-hover:scale-90 group-hover:text-sushi-400"></div>
                                    <span class="text-[12px] text-white block font-medium bg-[#0055A3] absolute top-[calc(0%_-_50px)] left-[60%] translate-x-[-50%] whitespace-nowrap p-[10px] py-[8px] rounded-[10px] opacity-0 [visibility:hidden;] duration-450 z-20">URL Kopyalandı</span>
                                </li>
                                <li class="blog-print relative flex group cursor-pointer">
                                    <div class="icon-printer-1 text-[22px] text-[#40403B] group-hover:text-[#C7234B] duration-450 relative z-20 flex group-hover:scale-90 group-hover:text-sushi-400"></div>
                                </li>
                            </ul>
                            <div class="social-media-field lg:px-[15px]">
                                <ul class="flex flex-col justify-end items-center sm:justify-center xs:flex-row gap-[25px] md:gap-[20px] xs:gap-[15px]">
                                    <li>
                                        <a href="javascript:;" class="flex relative group before:absolute before:w-[0] before:h-[0] before:bg-sushi-400/10 before:left-1/2 before:rounded-full before:duration-450 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 hover:before:w-[40px] hover:before:h-[40px]">
                                            <div class="icon-whatsapp text-[20px] text-[#40403B]/20 group-hover:text-[#C7234B] duration-450 relative z-20 flex group-hover:scale-90 group-hover:text-sushi-400"></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="flex relative group before:absolute before:w-[0] before:h-[0] before:bg-sushi-400/10 before:left-1/2 before:rounded-full before:duration-450 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 hover:before:w-[40px] hover:before:h-[40px]">
                                            <div class="icon-facebook text-[20px] text-[#40403B]/20 group-hover:text-[#C7234B] duration-450 relative z-20 flex group-hover:scale-90 group-hover:text-sushi-400"></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="flex relative group before:absolute before:w-[0] before:h-[0] before:bg-sushi-400/10 before:left-1/2 before:rounded-full before:duration-450 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 hover:before:w-[40px] hover:before:h-[40px]">
                                            <div class="icon-linkedin text-[20px] text-[#40403B]/20 group-hover:text-[#C7234B] duration-450 relative z-20 flex group-hover:scale-90 group-hover:text-sushi-400"></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="flex relative group before:absolute before:w-[0] before:h-[0] before:bg-sushi-400/10 before:left-1/2 before:rounded-full before:duration-450 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 hover:before:w-[40px] hover:before:h-[40px]">
                                            <div class="icon-twitter text-[20px] text-[#40403B]/20 group-hover:text-[#C7234B] duration-450 relative z-20 flex group-hover:scale-90 group-hover:text-sushi-400"></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-field">
                    <div class="tab-info flex flex-wrap xs:flex-col mt-[50px] mb-[30px] sm:mt-[30px] sm:mb-[10px] gap-[50px] md:gap-[30px] xs:mt-[15px] xs:gap-[15px]">
                        <div class="date-content flex items-center gap-[15px]">
                            <div class="icon-clock text-[22px] lg:text-[20px] md:text-[16px] text-[#656565] group-hover:text-[#C7234B] duration-450 relative z-20 flex group-hover:scale-90 group-hover:text-sushi-400"></div>
                            <p class="w-fit flex justify-center items-center gap-[8px]  text-black font-light group-hover/blog:text-white/80 duration-450">
                                <span>{{ date('d.m.Y', $blog->created_at) }}</span>
                            </p>
                        </div>
                        <div class="rating left">
                            <div class="stars right flex gap-[10px]" data-selected-rate="">
                                <a class="rating-star cursor-pointer text-[24px] flex justify-center items-center icon-star duration-450 text-[#0055A3]/20 [&.to-rate]:text-[#0055A3] [&.to-hover]:text-[#0055A3] [&.rated]:text-[#0055A3] [&.no-to-rated]:text-[#d0e8f0]" data-id="1">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 8.49993L14.0061 7.97438L10.9956 0.411194L7.9851 7.97438L0 8.49993L6.12451 13.7003L4.11477 21.5889L10.9956 17.2395L17.8765 21.5889L15.8668 13.7003L22 8.49993Z" />
                                    </svg>

                                </a>
                                <a class="rating-star cursor-pointer text-[24px] flex justify-center items-center icon-star duration-450 text-[#0055A3]/20 [&.to-rate]:text-[#0055A3] [&.to-hover]:text-[#0055A3] [&.rated]:text-[#0055A3] [&.no-to-rated]:text-[#d0e8f0]" data-id="2">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 8.49993L14.0061 7.97438L10.9956 0.411194L7.9851 7.97438L0 8.49993L6.12451 13.7003L4.11477 21.5889L10.9956 17.2395L17.8765 21.5889L15.8668 13.7003L22 8.49993Z" />
                                    </svg>

                                </a>
                                <a class="rating-star cursor-pointer text-[24px] flex justify-center items-center icon-star duration-450 text-[#0055A3]/20 [&.to-rate]:text-[#0055A3] [&.to-hover]:text-[#0055A3] [&.rated]:text-[#0055A3] [&.no-to-rated]:text-[#d0e8f0]" data-id="3">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 8.49993L14.0061 7.97438L10.9956 0.411194L7.9851 7.97438L0 8.49993L6.12451 13.7003L4.11477 21.5889L10.9956 17.2395L17.8765 21.5889L15.8668 13.7003L22 8.49993Z" />
                                    </svg>

                                </a>
                                <a class="rating-star cursor-pointer text-[24px] flex justify-center items-center icon-star duration-450 text-[#0055A3]/20 [&.to-rate]:text-[#0055A3] [&.to-hover]:text-[#0055A3] [&.rated]:text-[#0055A3] [&.no-to-rated]:text-[#d0e8f0]" data-id="4">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 8.49993L14.0061 7.97438L10.9956 0.411194L7.9851 7.97438L0 8.49993L6.12451 13.7003L4.11477 21.5889L10.9956 17.2395L17.8765 21.5889L15.8668 13.7003L22 8.49993Z" />
                                    </svg>

                                </a>
                                <a class="rating-star cursor-pointer text-[24px] flex justify-center items-center icon-star duration-450 text-[#0055A3]/20 [&.to-rate]:text-[#0055A3] [&.to-hover]:text-[#0055A3] [&.rated]:text-[#0055A3] [&.no-to-rated]:text-[#d0e8f0]" data-id="5">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 8.49993L14.0061 7.97438L10.9956 0.411194L7.9851 7.97438L0 8.49993L6.12451 13.7003L4.11477 21.5889L10.9956 17.2395L17.8765 21.5889L15.8668 13.7003L22 8.49993Z" />
                                    </svg>

                                </a>
                             
                            </div>
                        </div>
                    </div>
                    <div class="editor editor-base editor-p:text-xl md:editor-lg sm:editor-sm edit editor-headings:leading-[1.5] editor-p:leading-10  editor-headings:duration-450 editor-headings:text-mine-shaft-900 editor-headings:font-light editor-p:text-mine-shaft-900 editor-p:font-light editor-p:transition-all editor-p:duration-450  editor-p:text-[#231F20]/50 editor-strong:text-sushi-400 editor-strong:font-normal relative py-[15px] max-w-none editor-headings:border-solid editor-headings:border-[#707070]/20 mb-[50px] md:order-2 blog-text">
                        {!!$blog->description!!}
                    </div>
                    <a href="page-blog.php" class="button group w-fit block">
                        <div class="text-[20px] xs:text-[18px] font-light flex gap-[20px] justify-center items-center w-fit text-[#656565] hover:text-[#C7234B] duration-450 ">
                            <div class="icon-back text-[20px] lg:text-[18px] md:text-[16px] text-[#656565] group-hover:text-[#C7234B] duration-450 relative z-20 flex group-hover:scale-90 group-hover:text-sushi-400"></div>
                            {{getStaticText(52)}}
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="news-other mt-[100px]">
        <div class="container max-w-[1440px] scrollreveal">
            <div class="swiper news-swip relative flex flex-col justify-center md:justify-start w-full mx-auto ">
                <div class="title flex justify-between items-center mb-[50px] md:mb-[30px]" dir="">
                    <div class="editor title editor-headings:duration-450 group-hover/mpb:editor-headings:text-white  editor-headings:mb-0 editor-headings:font-light editor-headings:leading-snug xs:editor-h1:text-[24px] sm:editor-h1:text-[26px] md:editor-h1:text-[30px] lg:editor-h1:text-[34px] editor-h1:text-[40px] editor-strong:duration-450 group-hover/mpb:editor-strong:text-white editor-strong:text-[40px] xl:editor-strong:text-[34px] lg:editor-strong:text-[20px] duration-450 font-bold editor-headings:text-transparent editor-headings:bg-clip-text editor-headings:bg-gradient-to-r editor-headings:from-[#0055A3] editor-headings:from-40% editor-headings:to-[#C7234B] editor-headings:to-75% editor-strong:text-transparent editor-strong:bg-clip-text editor-strong:bg-gradient-to-r editor-strong:from-[#0055A3] editor-strong:from-25% editor-strong:to-[#C7234B] editor-strong:font-bold editor-strong:block text-left max-w-full w-fit">
                        <h1>{{getStaticText(14)}}</h1>
                    </div>
                    <div class="button-field flex justify-center flex-wrap gap-[25px] z-[2] relative">
                        <a href="" class="button group min-w-[180px] lg:min-w-[150px] xs:lg:min-w-[120px] justify-center items-center w-fit h-[50px] flex px-[30px] bg-[#0055A3] relative space-x-[10px] transition-all !duration-450 overflow-hidden isolate rounded-full border border-solid border-[#0055A3] before:content before:absolute before:left-[-100%] before:top-0 before:w-full before:h-full before:bg-white hover:before:left-0 before:duration-450 sm:h-[44px] menu-link xs:justify-center ">
                            <div class="text-[18px]  xs:text-[16px] font-normal font-inter flex items-center text-white group-hover:text-[#0055A3] relative z-2 duration-450 w-max">More</div>
                        </a>
                    </div>

                </div>
                <div class="swiper-wrapper ">
                    <?php foreach ($blogs as $blog) : ?>
                        <div class="swiper-slide !flex content-center items-center justify-center ">
                            <div class="media-box w-full h-full duration-450">
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
                                        <div class="text-field absolute bottom-0 left-0 p-[20px_20px_30px_50px] sm:p-[30px] overflow-hidden isolate group-[&.is-safari]/body:[transform:translateZ(0)_translate3d(0,0,0);] w-full" dir="">
                                            <p class="  w-fit flex justify-center items-center gap-[8px] text-white/75 font-medium group-hover/blog:text-white duration-450 mb-[8px]">
                                                <span>{{ date('d.m.Y', $blog->created_at) }}</span>
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
                <div class="controller flex gap-[15px] justify-end items-center w-full h-full my-[50px] md:my-[30px]">
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
        </div>
    </section>
</main>

@endsection

@section('script')
<script>
    let ratingStar = document.querySelectorAll('.rating-star');
    let dataSelectedRate
    ratingStar.forEach((item, index) => {
        item.addEventListener('click', () => {
            ratingStar.forEach((item, index) => {
                item.classList.remove('to-rate');
                item.classList.remove('rated');
                item.classList.add('no-to-rated');
            });
            for (let i = 0; i <= index; i++) {
                ratingStar[i].classList.remove('no-to-rated');
                ratingStar[i].classList.add('rated');
            }
            item.classList.add('to-rate');

            dataSelectedRate = item.dataset.id;
            item.parentElement.dataset.selectedRate = dataSelectedRate;
        });

        item.addEventListener('mouseover', () => {
            ratingStar.forEach((item, index) => {
                item.classList.remove('to-hover');
            });
            for (let i = 0; i <= index; i++) {
                ratingStar[i].classList.add('to-hover');
            }

        });

        item.addEventListener('mouseout', () => {
            ratingStar.forEach((item, index) => {
                item.classList.remove('to-hover');
            });

        });
    });
</script>
@endsection