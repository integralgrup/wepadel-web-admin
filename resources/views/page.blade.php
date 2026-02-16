<?php $pageTitle = $page->title; 
    $breadcrumbImage = 'image-4.jpg';
    $breadcrumbTitle = $page->title;
    $breadcrumbVideo = "breadcrumb-video.mp4";
    $pageLink = "page-corporate.php";
    $imageOrVideo = "image";
?> 
@extends('layouts.main')

@section('content')

<main class="main-field">

    <section class="breadcrumb-field relative overflow-hidden">
        <div class="image-wrapper overflow-hidden absolute left-0 top-0 size-full">
            <div class="content relative h-full">
                <div class="background [background:_linear-gradient(180deg,_rgba(0,_0,_0,_0.50)_0%,_rgba(0,_0,_0,_0.15)_100%);] absolute top-0 left-0 size-full z-2 translate-z-0 overflow-hidden"></div>
                <div class="image size-full overflow-hidden translate-z-0">
                    <img src="../assets/image/jpg/<?= $breadcrumbImage ?>" alt="" class="size-full object-cover object-center" />
                </div>
            </div>
        </div>
        <div class="container max-w-[1690px] px-[30px] sm:px-[20px] mx-auto pt-[405px] pb-[200px] relative z-20 md:py-[60px]">
            <div class="content-wrapper flex flex-col justify-center items-center md:gap-[15px]">
                <div class="navigation-wrapper">
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
                                <span class="text text-[18px] leading-[28px] font-light text-[#eee] tracking-[-0.18px] duration-350 group-hover/link:text-white"><?=$page->title?></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="page-name-wrapper">
                    <h2 class="title text-[48px] text-[#eee] font-bold leading-[64px] uppercase 2xl:text-[60px] xl:text-[32px] lg:text-[26px] lg:leading-normal md:text-[24px] sm:text-[22px]"><?= $breadcrumbTitle ?></h2>
                </div>

            </div>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="text-section py-[120px] 2xl:py-[80px] xl:py-[60px] lg:py-[45px] md:py-[30px]">
        <div class="container max-w-[1500px]">
            <div class="wrapper">
                <div class="text-editor !max-w-none">
                    <h3><?=$page->title?></h3>
                    <p><?=$page->description?></p>
                </div>
            </div>
        </div>
    </section>
        
    </section>
</main>


@endsection