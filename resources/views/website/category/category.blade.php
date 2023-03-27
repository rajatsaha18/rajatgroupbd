@extends('website.master')

@section('title')
Category Page
@endsection

@section('body')

<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bg="{{ asset($category->image) }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title mt-5">{{ $category->name }}</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ route('home') }}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>{{ $category->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area pb-115">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 align-self-center">
                <div class="about-us-img-wrap ltn__img-shape-left  about-img-left">
                    <img src="{{ asset('/') }}website/assets/img/service/11.jpg" alt="Image">
                </div>
            </div>
            <div class="col-lg-7 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color"><span><i class="fas fa-square-full"></i></span> Great Experience In Building</h6>
                        <h1 class="section-title">A Modern Construction & Industrial Agency</h1>
                        <p>Construction is a general term meaning the art and science to form objects
                            systems organizations, and comes from Latin</p>
                    </div>
                    <p>Construction is a general term meaning the art and science to form objects systems
                        organizations, and comes from Latin construction and Old French construction. To
                        construct is the verb: the act of building, and the noun</p>
                    <div class="about-author-info d-flex mt-50">
                        <div class="author-name-designation  align-self-center mr-30">
                            <!-- <h4 class="mb-0">Jerry Henson</h4>
                            <small>/ Shop Director</small> -->
                            <div class="btn-wrapper mt-0">
                                <a class="btn theme-btn-2 btn-effect-1" href="about.html">About Us</a>
                            </div>
                        </div>
                        <div class="author-sign  align-self-center">
                            <img src="{{ asset('/') }}website/assets/img/icons/icon-img/author-sign.png" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->

<!-- FEATURE START -->
<div class="ltn__feature-area section-bg-1 pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color"><span><i class="fas fa-square-full"></i></span> Our Services</h6>
                    <h1 class="section-title">Construction Solution</h1>
                </div>
            </div>
        </div>
        <div class="row align-self-center">
            @foreach ($contents as $content)
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__feature-item ltn__feature-item-6 box-shadow-1">
                    <div class="ltn__feature-icon">
                        <img src="{{ asset($content->image) }}" alt="" class="w-100" height="150" width="150"/>
                    </div>
                    <div class="ltn__feature-info">
                        <h3><a href="{{ route('detail',['id' => $content->id]) }}">{{ $content->name }}</a></h3>
                        <p>over 1 million+ homes for sale available
                            on the website, we can match you with a
                            house you will want to call home.</p>
                        <a class="ltn__service-btn ltn__service-btn-2" href="{{ route('detail',['id' => $content->id]) }}">Service Details <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- FEATURE END -->

<!-- BLOG AREA START (blog-3) -->
<div class="ltn__blog-area pt-120 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color"><span><i class="fas fa-square-full"></i></span> News & Blogs</h6>
                    <h1 class="section-title">See Our Leatest News <br> & Read Blogs</h1>
                </div>
            </div>
        </div>
        <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="{{ asset('/') }}website/assets/img/blog/1.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Decorate</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">10 Brilliant Ways To Decorate Your Home</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="{{ asset('/') }}website/assets/img/blog/2.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Interior</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">The Most Inspiring Interior Design Of 2021</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>July 23, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="{{ asset('/') }}website/assets/img/blog/3.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Estate</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">Recent Commercial Real Estate Transactions</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>May 22, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="{{ asset('/') }}website/assets/img/blog/4.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Room</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">Renovating a Living Room? Experts Share Their Secrets</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="{{ asset('/') }}website/assets/img/blog/5.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Trends</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">7 home trends that will shape your house in 2021</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</div>
<!-- BLOG AREA END -->

<!-- BRAND LOGO AREA START -->
<div class="ltn__brand-logo-area ltn__brand-logo-1 before-bg-bottom">
    <div class="container">
        <div class="row ltn__brand-logo-active ltn__secondary-bg ltn__border-radius pt-30 pb-20">
            <div class="col-lg-12">
                <div class="ltn__brand-logo-item">
                    <img src="{{ asset('/') }}website/assets/img/brand-logo/b11.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__brand-logo-item">
                    <img src="{{ asset('/') }}website/assets/img/brand-logo/b12.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__brand-logo-item">
                    <img src="{{ asset('/') }}website/assets/img/brand-logo/b13.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__brand-logo-item">
                    <img src="{{ asset('/') }}website/assets/img/brand-logo/b14.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__brand-logo-item">
                    <img src="{{ asset('/') }}website/assets/img/brand-logo/b15.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__brand-logo-item">
                    <img src="{{ asset('/') }}website/assets/img/brand-logo/b13.png" alt="Brand Logo">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
