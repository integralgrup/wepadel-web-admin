@extends('layouts.main')

@section('content')
<?php 
$pageTitle = $category->title;
$breadcrumbTitle = $category->title;
$breadcrumbImage = $menu->image;
?>

<main class="main-field">
    <!-- BREADCRUMB -->
    <section class="breadcrumb-field relative overflow-hidden">
        <div class="image-wrapper overflow-hidden absolute left-0 top-0 w-full h-[100vh]">
            <div class="content relative w-full h-[100vh]">
                <div class="background [background:_linear-gradient(180deg,_rgba(0,_0,_0,_0.50)_0%,_rgba(0,_0,_0,_0.15)_100%);] absolute top-0 left-0 size-full z-2 translate-z-0 overflow-hidden"></div>
                <div class="image w-full h-[100vh] overflow-hidden translate-z-0">
                    <img src="{{ asset(getFolder( ['uploads_folder', 'images_folder'], $category->lang ) . '/' . $breadcrumbImage) }}" alt="{{ $breadcrumbTitle }}" class="size-full object-cover object-center" />
                </div>
            </div>
        </div>
        <div class="container max-w-[1690px] px-[30px] sm:px-[20px] mx-auto pt-[405px] pb-[140px] relative w-full h-[100vh] z-20 md:py-[60px]">
            <div class="flex srb items-end justify-center h-full gap-[70px] xsm:gap-[30px]">
                <div class="content-wrapper flex flex-col justify-center items-end w-fit md:gap-[15px]">
                    <div class="navigation-wrapper xsm:hidden">
                        <ul class="flex gap-[5px] flex-wrap">
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
                                    <span class="text text-[18px] leading-[28px] font-light text-[#eee] tracking-[-0.18px] duration-350 group-hover/link:text-white">Wepadel</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="page-name-wrapper">
                        <h2 class="title text-[48px] text-[#eee] font-bold leading-[64px] uppercase 2xl:text-[60px] xl:text-[32px] lg:text-[26px] lg:leading-normal md:text-[24px] sm:text-[22px] xsm:h-[95px] xsm:flex xsm:items-center"><?= $breadcrumbTitle ?></h2>
                    </div>

                </div>
                <div class="scroll-and-expo-field flex gap-[70px] md:items-center xsm:gap-[30px]">
                    <div class="scroll-field group/scroll cursor-pointer scrollable relative overflow-hidden w-[5px] h-[95px] duration-350 xsm:order-2" data-scrollable="#about-section">
                        <svg width="5" height="96" viewBox="0 0 5 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="5" height="96" rx="2.5" fill="white" fill-opacity="0.2" />
                            <rect class="duration-350 ease-kagitmiadam group-hover/scroll:translate-y-[55%]" width="5" height="41" rx="2.5" fill="#75BF00" />
                        </svg>
                    </div>
                    <p class="expo text-[32px] 2xl:text-[30px] xl:text-[26px] lg:text-[24px] sm:text-[14px] max-w-[510px] text-white/80 leading-[48px] duration-350 md:max-w-[250px] md:leading-normal sm:h-min xsm:order-1">
                        Discover the Power of the Game That Brings Passion to the Field!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="product-section py-[120px] 2xl:py-[80px] xl:py-[60px] lg:py-[45px] md:py-[30px]">
        <div class="container max-w-[1500px]">
            <div class="wrapper">
                <div class="heading-wrapper relative srt z-3 flex items-center gap-[45px] bg-white [box-shadow:_0px_10px_40px_0px_rgba(14,_42,_67,_0.15);] p-[25px] mt-[-180px] rounded-[8px] xl:mt-[-130px] lg:mt-[-110px] md:mt-0 sm:flex-col sm:gap-[30px]">
                    <div class="filter-field flex items-center gap-[45px] sm:order-2 sm:w-full sm:gap-[30px] xsm:flex-col">
                        <div class="filter-item group/select relative overflow-hidden bg-green h-[70px] w-full min-w-[255px] max-w-[255px] flex justify-center items-center rounded-[8px] gap-[10px] duration-350 before:absolute before:left-[50%] before:translate-x-[-50%] before:top-[50%] before:translate-y-[-50%] before:size-[35px] before:scale-0 before:bg-secondary-700 before:rounded-full before:translate-z-0 before:duration-350 min-sm:hover:before:scale-[8] md:h-[60px] sm:max-w-full">
                            <select name="" id="" class="text relative z-2 text-[18px] text-white leading-[30px] w-full h-full pl-[30px]">
                                <option value="" selected>Product Categories</option>
                                <option value="">Football Grass</option>
                                <option value="">Garden Grass</option>
                                <option value="">Playground Grass</option>
                            </select>
                            <i class="icon icon-chevron-down2 text-[10px] h-[10px] text-white flex leading-normal absolute right-[30px] top-[50%] translate-y-[-50%] z-2 duration-350 group-hover/select:rotate-180"></i>
                        </div>
                        <div class="filter-item group/select relative overflow-hidden bg-[#F7F7F7] h-[70px] w-full min-w-[240px] max-w-[240px] flex justify-center items-center rounded-[8px] gap-[10px] duration-350 before:absolute before:left-[50%] before:translate-x-[-50%] before:top-[50%] before:translate-y-[-50%] before:size-[32px] before:scale-0 before:bg-blue before:rounded-full before:translate-z-0 before:duration-350 min-sm:hover:before:scale-[8] md:h-[60px] sm:max-w-full">
                            <select name="" id="" class="text relative z-2 text-[18px] text-[#52555CA6] leading-[30px] w-full h-full pl-[30px] duration-350 min-sm:group-hover/select:text-white">
                                <option value="" selected>Filter Name</option>
                                <option value="">Football Grass</option>
                                <option value="">Garden Grass</option>
                                <option value="">Playground Grass</option>
                            </select>
                            <i class="icon icon-chevron-down2 text-[10px] h-[10px] text-[#52555CA6] flex leading-normal absolute right-[30px] top-[50%] translate-y-[-50%] z-2 duration-350 group-hover/select:rotate-180 min-sm:group-hover/select:text-white"></i>
                        </div>
                    </div>
                    <div class="search-field w-full relative sm:order-1">
                        <input type="text" name="" id="" placeholder="Search in products..." class="search-bar w-full h-[70px] bg-[#F7F7F7] rounded-[8px] pl-[35px] pr-[60px] md:h-[60px] xsm:pl-[27px]">
                        <i class="icon icon-search text-[25px] h-[25px] text-black absolute right-[30px] top-[50%] translate-y-[-50%] flex leading-normal cursor-pointer xsm:text-[20px] xsm:h-[20px] xsm:right-[27px]"></i>
                    </div>
                </div>
                <div class="inner-wrapper relative flex flex-col gap-[65px] mt-[60px] xl:gap-[60px] lg:mt-[40px] lg:gap-[40px]">
                    <div class="second-filter-field relative flex justify-between items-center xs:flex-col">
                        <div class="total-field srl text text-[18px] text-[#52555C]/50 leading-[28px] xsm:text-[16px]">Total <span class="text-green"> 30 </span> products found.</div>
                        <div class="date-filter-field srr group/date relative flex items-center gap-[15px]">
                            <div class="date-title text-[18px] text-[#52555C] font-medium leading-[28px] opacity-65 duration-350 group-hover/date:opacity-100 xsm:text-[16px]">Short by :</div>
                            <select name="" id="" class="text relative z-2 text-[18px] text-green leading-[30px] pr-[50px] xsm:text-[16px] xs:pr-0">
                                <option value="" selected>Latest</option>
                                <option value="">2024</option>
                                <option value="">2023</option>
                                <option value="">2022</option>
                            </select>
                            <i class="icon icon-chevron-down2 text-[10px] h-[10px] text-[#52555CA6] flex leading-normal absolute right-[30px] top-[50%] translate-y-[-50%] z-2 duration-350 group-hover/date:rotate-180 group-hover/date:text-green xs:right-[-20px]"></i>
                        </div>
                    </div>
                    <div class="product-field srb-all-fast grid grid-cols-3 gap-[85px] 2xl:gap-[75px] xl:gap-[60px] lg:gap-[40px] md:grid-cols-2 md:gap-[30px] xsm:grid-cols-1">
                        <?php foreach($products as $item) : ?>
                            <div class="item is-active group/item relative overflow-hidden w-full h-max p-[2px] rounded-[14px] opacity-50 duration-350 [&.is-active]:opacity-100 hover:[box-shadow:_0px_25px_75px_0px_rgba(3,_36,_107,_0.15);] before:absolute before:size-full before:left-0 before:top-0 before:bg-gradient-to-b before:from-green before:to-blue before:-translate-y-full before:translate-z-0 before:duration-450 hover:before:translate-y-0 after:absolute after:size-full after:left-0 after:top-0 after:bg-gradient-to-b after:from-green after:to-blue after:translate-y-full after:translate-z-0 after:duration-450 hover:after:translate-y-0 2xl:p-0 2xl:hover:p-[2px] sm:before:translate-y-0 sm:p-[2px] sm:after:hidden">
                                <div class="item-content bg-white rounded-[12px] relative z-2 size-full sm:px-[10px]">
                                    <a href="{{ env('HTTP_DOMAIN') . '/' . $category->seo_url . '/' . $item->seo_url }}" class="flex flex-col items-center">
                                        <div class="product-detail-carousel swiper w-full h-[335px] mb-[30px] overflow-hidden lg:h-[275px]">
                                            <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="image w-full h-[335px] lg:h-[275px]">
                                                            <img src="{{ asset( getFolder(['uploads_folder', 'product_images_folder'], $item->lang) . '/' . $item->image ) }}" alt="" class="size-full object-contain object-center">
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="product-detail-pagination !w-full !flex !justify-center !gap-[15px] !z-2 !relative [&_.swiper-pagination-bullet]:duration-450 [&_.swiper-pagination-bullet]:!size-[12px] [&_.swiper-pagination-bullet]:!rounded-none [&_.swiper-pagination-bullet]:!mx-0 [&_.swiper-pagination-bullet]:bg-blue/10 [&_.swiper-pagination-bullet-active]:!bg-green lg:!gap-[5px] "></div>
                                        <div class="content flex flex-col items-center pb-[60px] mt-[30px] lg:pb-[30px]">
                                            <a href="product-detail.php" class="text text-[#52555C] text-[18px] leading-[28px] opacity-65">{{$item->category->title}}</a>
                                            <h4 class="title text-blue text-[24px] font-bold leading-[36px] opacity-90 sm:text-[20px]">{{$item->title}}</h4>
                                        </div>
                                    </a>
                                </div>
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
<script>
    let i;
    const ProductDetail = document.querySelectorAll('.product-detail-carousel');
    const ProductDetailPagination = document.querySelectorAll('.product-detail-pagination');

    for (i = 0; i < ProductDetail.length; i++) {
        ProductDetail[i].classList.add('product-detail-carousel-' + i);
        ProductDetailPagination[i].classList.add('product-detail-pagination-' + i);

        let ProductDetailCarousel = new Swiper('.product-detail-carousel-' + i, {
            modules: [A, P, N, Px],
            slidesPerView: 1,
            speed: 1000,
            spaceBetween: 30,
            loop: false,
            resistance: true,
            resistanceRatio: 0,
            watchSlidesProgress: true,
            pagination: {
                el: '.product-detail-pagination-' + i,
                clickable: true,
            },
        });
    }
</script>

<script>
    if (window.innerWidth > 1024) {
        let imageBoxs = document.querySelectorAll(".product-field .item");
        document.addEventListener('mouseover', (event) => {
            let imageBoxsArray = Array.from(imageBoxs);

            if (!imageBoxsArray.some(imageBox => imageBox.contains(event.target))) {
                imageBoxsArray.forEach(imageBox => {
                    imageBox.classList.add("is-active");
                });
            }
        });
        imageBoxs.forEach(imageBox => {
            imageBox.addEventListener('mouseover', () => {
                let imageBoxsArray = Array.from(imageBoxs);

                imageBoxsArray.forEach(otherImageBox => {
                    if (otherImageBox !== imageBox) {
                        otherImageBox.classList.remove("is-active");
                    }
                });
                imageBox.classList.add("is-active");
            });
            imageBox.addEventListener('mouseout', () => {
                let imageBoxsArray = Array.from(imageBoxs);

                imageBoxsArray.forEach(otherImageBox => {
                    otherImageBox.classList.add("is-active");
                });
            });
        });
    }
</script>
@endsection