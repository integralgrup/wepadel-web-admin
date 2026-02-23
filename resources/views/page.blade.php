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

</main>


@endsection