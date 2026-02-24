<?php $pageTitle = $page->title; 
    $breadcrumbImage = 'image-4.jpg';
    $breadcrumbTitle = $page->title;
    $breadcrumbVideo = "breadcrumb-video.mp4";
    $pageLink = "page-corporate.php";
    $imageOrVideo = "image";
?> 
@extends('layouts.main')

@section('content')

<main class="main-field header-space">
    <div class="breadcrump bg-[#F6F6F6]">
       
    </div>
    <section class="blog-detail mt-[30px]">
        <div class="container max-w-[1440px] ">
                    <h3><?=$page->title?></h3>
                    <p><?=$page->description?></p>
                
        </div>
    </section>

</main>


@endsection