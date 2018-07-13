@extends('layouts.frontend-template')
@section('content')
    <link href="{{ asset("public/frontend/scss/homepage.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("public/frontend/lib/fullpage/css/jquery.fullpage.min.css")}}" rel="stylesheet" type="text/css" />

    <div id="homepage">
        <div id="fullpage">
            <div class="section" id="slider">
                <div id="top-slider" class="carousel slide" data-ride="carousel">

                    <ul class="slide-control">
                        <li data-target="#top-slider" data-slide-to="0">
                            <div class="icon">
                                <i class="fa fa-plus" aria-hidden="false"></i>
                            </div>
                            <div class="title">
                                <h4>the future of loft living</h4>
                            </div>
                        </li>
                        <li data-target="#top-slider" data-slide-to="1">
                            <div class="icon">
                                <i class="fa fa-plus" aria-hidden="false"></i>
                            </div>
                            <div class="title">
                                <h4>the future of loft living</h4>
                            </div>
                        </li>
                    </ul>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="mask">
                                <img src="{{ asset('public/frontend/img/demo-top-slider-1.jpg') }}" alt="slide">
                            </div>
                            <div class="carousel-caption">
                                <h1 class="heading light">
                                    the future of loft living
                                </h1>
                                <p class="paragraph light">
                                    Nunc odio magna, ultricies sed orci id, ullamcorper consequat arcu. Maecenas fermentum, nibh vitae ornare tempor, orci libero bibendum odio, eget ultrices magna diam ac nulla. Praesent facilisis ex in mi interdum euismod. Quisque volutpat augue volutpat ligula lacinia, et dapibus nibh porttitor. Sed pharetra quis purus eu tempor. Sed bibendum ligula in ullamcorper feugiat. Vestibulum in tortor vel augue eleifend porta eu pulvinar nisl. Nam ac arcu ex.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="mask">
                                <img src="{{ asset('public/frontend/img/demo-top-slider-2.jpg') }}" alt="slide">
                            </div>
                            <div class="carousel-caption">
                                <h1 class="heading light">
                                    the future of loft living
                                </h1>
                                <p class="paragraph light">
                                    Nunc odio magna, ultricies sed orci id, ullamcorper consequat arcu. Maecenas fermentum, nibh vitae ornare tempor, orci libero bibendum odio, eget ultrices magna diam ac nulla. Praesent facilisis ex in mi interdum euismod. Quisque volutpat augue volutpat ligula lacinia, et dapibus nibh porttitor. Sed pharetra quis purus eu tempor. Sed bibendum ligula in ullamcorper feugiat. Vestibulum in tortor vel augue eleifend porta eu pulvinar nisl. Nam ac arcu ex.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section" id="about">
                <div class="title-side">
                    <h1>About Us</h1>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="left col-sm-4 col-xs-12">
                            <div class="head">
                                <h1 class="heading">Về chúng tôi</h1>
                            </div>
                            <div class="body">
                                <p>Vivamus gravida arcu tortor, a auctor velit mattis non. Vivamus tristique faucibus pellentesque. Nulla at porta lorem. Aliquam elit diam, facilisis at elementum viverra, auctor a risus. Suspendisse nisi quam, mollis at turpis eu, dignissim condimentum massa. Donec vulputate ipsum eu velit vulputate, a viverra nibh sagittis. Sed quam est, semper laoreet viverra ut, facilisis vel nibh. In hac habitasse platea dictumst. Duis viverra arcu sit amet efficitur convallis. Nunc vestibulum faucibus erat, ut molestie lacus rhoncus ut. Ut mattis nisl nec metus placerat, ac consequat orci elementum. Nunc ut tortor auctor, molestie mauris vel, tristique erat.</p>
                                <ol>
                                    <li>
                                        <a href="{{ url('') }}">Tổng quan</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('') }}">Tầm nhìn & Sứ mệnh</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('') }}">Khách hàng của chúng tôi</a>
                                    </li>
                                </ol>
                            </div>
                            <div class="foot">
                                <a href="{{ url('') }}" class="btn btn-primary" role="button">
                                    Khám phá ngay
                                </a>
                            </div>
                        </div>
                        <div class="right col-sm-8 col-xs-12">
                            <div class="mask wow fadeInUp" id="image-top">
                                <img src="{{ asset('public/frontend/img/demo-about-1.jpg') }}" alt="image about 1">
                            </div>
                            <div class="mask wow fadeInUp" id="image-bottom">
                                <img src="{{ asset('public/frontend/img/demo-about-2.jpg') }}" alt="image about 2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section" id="product">
                <div class="container-fluid">
                    <div class="row">
                        <div class="left col-sm-6 col-xs-12">
                            <div id="slider-product" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <div class="mask">
                                            <img src="{{ asset('public/frontend/img/demo-product-1.jpg') }}" alt="image about 1">
                                        </div>
                                        <div class="carousel-caption">
                                            <h4 class="sub-heading light">Product</h4>

                                            <h1 class="heading light">Bathroom</h1>

                                            <a href="" class="btn btn-default" role="button">View detail</a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="mask">
                                            <img src="{{ asset('public/frontend/img/demo-product-2.jpg') }}" alt="image about 2">
                                        </div>
                                        <div class="carousel-caption">
                                            <h4 class="sub-heading light">Product</h4>

                                            <h1 class="heading light">Bed Room</h1>

                                            <a href="" class="btn btn-default" role="button">Xem chi tiết</a>
                                        </div>
                                    </div>
                                    ...
                                </div>

                            </div>
                        </div>
                        <div class="right col-sm-6 col-xs-12">
                            <ul class="slide-control">
                                <li data-target="#slider-product" data-slide-to="0">
                                    <div class="icon">
                                        <i class="fa fa-plus fa-2x" aria-hidden="false"></i>
                                    </div>
                                    <div class="title">
                                        <h4>the future of loft living</h4>
                                    </div>
                                </li>
                                <?php for ($i = 0; $i < 4; $i++) { ?>
                                <li data-target="#slider-product" data-slide-to="1">
                                    <div class="icon">
                                        <i class="fa fa-plus fa-2x" aria-hidden="false"></i>
                                    </div>
                                    <div class="title">
                                        <h4>the future of loft living</h4>
                                    </div>
                                </li>
                                <?php } ?>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-plus fa-2x" aria-hidden="false"></i>
                                    </div>
                                    <div class="title">
                                        <h4>others</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="section" id="trends" style="background-image: url('{{ asset('public/frontend/img/demo-trends.jpg') }}');">
                <div class="container">
                    <div class="heading">
                        <h1 class="heading light">Xu hướng</h1>
                    </div>

                    <div class="row">
                        <?php for ($i = 0; $i < 9; $i++) { ?>
                        <div class="item col-sm-2 col-xs-6">
                            <div class="inner">
                                <a href="{{ url('') }}">
                                    <div class="icon">
                                        <i class="fa fa-plus fa-2x" aria-hidden="false"></i>
                                    </div>
                                    <div class="title">
                                        <h4>the future of loft living</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="section" id="creative">
                <div class="title-side">
                    <h1>Creative</h1>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="left col-sm-8 col-xs-12 wow fadeInUp">
                            <div class="mask">
                                <img src="{{ asset ('public/frontend/img/creative-image.png') }}" alt="image creative section">
                            </div>
                        </div>

                        <div class="right col-sm-4 col-xs-12 wow fadeInRight">
                            <div class="head">
                                <h1 class="heading">Góc sáng tạo</h1>
                            </div>
                            <div class="body">
                                <p>Vivamus gravida arcu tortor, a auctor velit mattis non. Vivamus tristique faucibus pellentesque. Nulla at porta lorem. Aliquam elit diam, facilisis at elementum viverra, auctor a risus. Suspendisse nisi quam, mollis at turpis eu, dignissim condimentum massa. Donec vulputate ipsum eu velit vulputate, a viverra nibh sagittis. Sed quam est, semper laoreet viverra ut, facilisis vel nibh. In hac habitasse platea dictumst. Duis viverra arcu sit amet efficitur convallis. Nunc vestibulum faucibus erat, ut molestie lacus rhoncus ut. Ut mattis nisl nec metus placerat, ac consequat orci elementum. Nunc ut tortor auctor, molestie mauris vel, tristique erat.</p>
                            </div>
                            <div class="foot">
                                <a href="{{ url('') }}" class="btn btn-primary" role="button">
                                    Khám phá ngay
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section" id="news">
                <div class="container">
                    <div class="row">
                        <div class="left col-sm-4 col-xs-12 wow fadeInLeft">
                            <div class="" id="cover">
                                <div class="mask">
                                    <img src="{{ asset('public/frontend/img/demo-news-1.jpg') }}" alt="image news cover">

                                    <h1 class="heading light">Tin tức</h1>
                                </div>
                            </div>
                        </div>

                        <div class="right col-sm-8 col-xs-12">
                            <div class="row">

                                <?php for ($i = 0; $i < 2; $i++) { ?>
                                <div class="item col-sm-6 col-xs-12 wow fadeInUp">
                                    <div class="inner">
                                        <div class="mask">
                                            <img src="{{ asset('public/frontend/img/demo-news-2.jpg') }}" alt="image news">
                                        </div>

                                        <h2 class="post-heading dark">Global Travel And Vacations Luxury Travel On A Tight Budget</h2>
                                        <p class="description">Nunc accumsan purus vel ex laoreet vulputate. In ac ex sed lectus sodales pellentesque vel at ante. Nam in eros eget dui elementum tincidunt. Phasellus at diam ac nisl aliquet congue. Suspendisse sollicitudin sagittis felis, at consectetur justo suscipit vel. Quisque ac velit eu metus cursus accumsan eget ac lacus. Integer lacinia ex mi, et interdum nunc consequat quis. Fusce consectetur dui at felis tincidunt, quis sollicitudin libero euismod. Ut bibendum lobortis odio.</p>
                                        <a href="{{ url('') }}" class="btn btn-outline" role="button">
                                            Xem chi tiết
                                        </a>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="slide-control col-xs-12">
                            <ul class="list-inline">
                                <li>
                                    <a href="{{ url('') }}" class="btn btn-primary" role="button">
                                        Xem tất cả tin tức
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section" id="contact">
                <div class="title-side">
                    <h1>Contact Us</h1>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="map col-xs-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18792.74236719761!2d105.8378046859102!3d21.006773993256186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac0f33bf8dad%3A0x31d0e909c37a459f!2zVmluY29tIENlbnRlciBCw6AgVHJp4buHdQ!5e0!3m2!1svi!2s!4v1531293697579" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div class="left col-sm-4 col-xs-12">
                            <h2>Ghé thăm chúng tôi</h2>
                            <b>Trụ sở chính</b>
                            <p>905 Kub Turnpike Suite 638</p>

                            <h2>Liên lạc với chúng tôi ngay</h2>
                            <b>TEL</b>
                            <p>024 1234 5678</p>

                            <b>Email</b>
                            <p>contact@atelier.vn</p>
                        </div>

                        <div class="right col-sm-8 col-xs-12">
                            <h2>Gửi tin nhắn cho chúng tôi</h2>

                            <form>
                                <div class="row">
                                    <div class="form-group col-sm-6 col-xs-12">
                                        <input type="text" class="form-control" id="inputName" placeholder="Tên đầy đủ của bạn (*)">
                                    </div>
                                    <div class="form-group col-sm-6 col-xs-12">
                                        <input type="text" class="form-control" id="inputEmail" placeholder="Email của bạn (*)">
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <textarea class="form-control" rows="3" placeholder="Viết một cái gì đó cho chúng tôi..."></textarea>
                                    </div>
                                    <div class="form-group col-sm-3 col-xs-6">
                                        <button class="btn btn-primary" type="submit">Gửi tin nhắn</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset ("public/frontend/lib/fullpage/js/jquery.fullpage.min.js") }}"></script>
    <script>
        $('#fullpage').fullpage({
            scrollBar: true
        });

        // var windowHeight = $(window).height();
        // var top = $(window).scrollTop();
        //
        //
        // $(window).scroll(function () {
        //     'use strict';
        //     console.log(top);
        // //     if ($(window).scrollTop() > 100) {
        // //
        //         // $('header').removeClass('dark');
        //         // $('header').addClass('light');
        // //     }
        // });
    </script>

    <!-- Animate CSS -->
    <link href="{{ asset("public/frontend/lib/animate/animate.min.css")}}" rel="stylesheet" type="text/css" />
    <script src="{{ asset ("public/frontend/lib/wow/wow.js") }}"></script>
    <script>
        new WOW().init();
    </script>

    <script src="{{ asset ("public/frontend/app/controllers/homepage.js") }}"></script>
    <script src="{{ asset ("public/frontend/app/controllers/modal.js") }}"></script>


@endsection
