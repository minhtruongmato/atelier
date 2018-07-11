@extends('layouts.frontend-template')
@section('content')
    <link href="{{ asset("public/frontend/scss/homepage.min.css")}}" rel="stylesheet" type="text/css" />
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
                                <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ee7b83f80f90879486ced1b45501ce21&auto=format&fit=crop&w=1949&q=80" alt="slide">
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
                                <img src="https://images.unsplash.com/photo-1492371451031-f0830e91b3d9?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=8805f144b084b01beda524a625f5f68e&auto=format&fit=crop&w=1461&q=80" alt="slide">
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
                                <h1 class="heading">About Us</h1>
                            </div>
                            <div class="body">
                                <p>Vivamus gravida arcu tortor, a auctor velit mattis non. Vivamus tristique faucibus pellentesque. Nulla at porta lorem. Aliquam elit diam, facilisis at elementum viverra, auctor a risus. Suspendisse nisi quam, mollis at turpis eu, dignissim condimentum massa. Donec vulputate ipsum eu velit vulputate, a viverra nibh sagittis. Sed quam est, semper laoreet viverra ut, facilisis vel nibh. In hac habitasse platea dictumst. Duis viverra arcu sit amet efficitur convallis. Nunc vestibulum faucibus erat, ut molestie lacus rhoncus ut. Ut mattis nisl nec metus placerat, ac consequat orci elementum. Nunc ut tortor auctor, molestie mauris vel, tristique erat.</p>
                                <ol>
                                    <li>
                                        <a href="{{ url('') }}">Overview</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('') }}">Vision & Mission</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('') }}">Our Customers</a>
                                    </li>
                                </ol>
                            </div>
                            <div class="foot">
                                <a href="{{ url('') }}" class="btn btn-primary" role="button">
                                    Explore now
                                </a>
                            </div>
                        </div>
                        <div class="right col-sm-8 col-xs-12">
                            <div class="mask wow fadeInUp" id="image-top">
                                <img src="https://images.unsplash.com/photo-1531114181037-5e61a592cf2a?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=23dbfaafedbf9400522ef9c47334f99a&auto=format&fit=crop&w=1950&q=80" alt="image about 1">
                            </div>
                            <div class="mask wow fadeInUp" id="image-bottom">
                                <img src="https://images.unsplash.com/photo-1487017159836-4e23ece2e4cf?ixlib=rb-0.3.5&s=95dd30420d67e619a823f5d08f2e8565&auto=format&fit=crop&w=1951&q=80" alt="image about 2">
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
                                            <img src="https://images.unsplash.com/photo-1531114181037-5e61a592cf2a?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=23dbfaafedbf9400522ef9c47334f99a&auto=format&fit=crop&w=1950&q=80" alt="image about 1">
                                        </div>
                                        <div class="carousel-caption">
                                            <h4 class="sub-heading light">Product</h4>

                                            <h1 class="heading light">Living Room</h1>

                                            <a href="" class="btn btn-default" role="button">View detail</a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="mask">
                                            <img src="https://images.unsplash.com/photo-1487017159836-4e23ece2e4cf?ixlib=rb-0.3.5&s=95dd30420d67e619a823f5d08f2e8565&auto=format&fit=crop&w=1951&q=80" alt="image about 2">
                                        </div>
                                        <div class="carousel-caption">
                                            <h4 class="sub-heading light">Product</h4>

                                            <h1 class="heading light">Bed Room</h1>

                                            <a href="" class="btn btn-default" role="button">View detail</a>
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

            <div class="section" id="trends" style="background-image: url('https://images.unsplash.com/photo-1494438639946-1ebd1d20bf85?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=4d19695422a0150c535cd6963fadae83&auto=format&fit=crop&w=1947&q=80');">
                <div class="container">
                    <div class="heading">
                        <h1 class="heading light">Trends</h1>
                    </div>

                    <div class="row">
                        <?php for ($i = 0; $i < 9; $i++) { ?>
                        <div class="item col-sm-2 col-xs-6">
                            <a href="{{ url('') }}">
                                <div class="icon">
                                    <i class="fa fa-plus fa-2x" aria-hidden="false"></i>
                                </div>
                                <div class="title">
                                    <h4>the future of loft living</h4>
                                </div>
                            </a>
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
                                <h1 class="heading">Creative Room</h1>
                            </div>
                            <div class="body">
                                <p>Vivamus gravida arcu tortor, a auctor velit mattis non. Vivamus tristique faucibus pellentesque. Nulla at porta lorem. Aliquam elit diam, facilisis at elementum viverra, auctor a risus. Suspendisse nisi quam, mollis at turpis eu, dignissim condimentum massa. Donec vulputate ipsum eu velit vulputate, a viverra nibh sagittis. Sed quam est, semper laoreet viverra ut, facilisis vel nibh. In hac habitasse platea dictumst. Duis viverra arcu sit amet efficitur convallis. Nunc vestibulum faucibus erat, ut molestie lacus rhoncus ut. Ut mattis nisl nec metus placerat, ac consequat orci elementum. Nunc ut tortor auctor, molestie mauris vel, tristique erat.</p>
                            </div>
                            <div class="foot">
                                <a href="{{ url('') }}" class="btn btn-primary" role="button">
                                    Explore now
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
                                    <img src="https://images.unsplash.com/photo-1493552152660-f915ab47ae9d?ixlib=rb-0.3.5&s=f9b25a4ab324ba2ab945f4af82d6e743&auto=format&fit=crop&w=934&q=80" alt="image news cover">

                                    <h1 class="heading light">News</h1>
                                </div>
                            </div>
                        </div>

                        <div class="right col-sm-8 col-xs-12">
                            <div class="row">

                                <?php for ($i = 0; $i < 2; $i++) { ?>
                                <div class="item col-sm-6 col-xs-12 wow fadeInUp">
                                    <div class="inner">
                                        <div class="mask">
                                            <img src="https://images.unsplash.com/photo-1493552152660-f915ab47ae9d?ixlib=rb-0.3.5&s=f9b25a4ab324ba2ab945f4af82d6e743&auto=format&fit=crop&w=934&q=80" alt="image news">
                                        </div>

                                        <h2 class="post-heading dark">Global Travel And Vacations Luxury Travel On A Tight Budget</h2>
                                        <p class="description">Nunc accumsan purus vel ex laoreet vulputate. In ac ex sed lectus sodales pellentesque vel at ante. Nam in eros eget dui elementum tincidunt. Phasellus at diam ac nisl aliquet congue. Suspendisse sollicitudin sagittis felis, at consectetur justo suscipit vel. Quisque ac velit eu metus cursus accumsan eget ac lacus. Integer lacinia ex mi, et interdum nunc consequat quis. Fusce consectetur dui at felis tincidunt, quis sollicitudin libero euismod. Ut bibendum lobortis odio.</p>
                                        <a href="{{ url('') }}" class="btn btn-outline" role="button">
                                            See Detail
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
                                        Explore now
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
                            <h2>Visit Us</h2>
                            <b>Head Office</b>
                            <p>905 Kub Turnpike Suite 638</p>

                            <h2>Contact Us</h2>
                            <b>Phone</b>
                            <p>024 1234 5678</p>

                            <b>Email</b>
                            <p>contact@atelier.vn</p>
                        </div>

                        <div class="right col-sm-8 col-xs-12">
                            <h2>Send us a message</h2>

                            <form>
                                <div class="row">
                                    <div class="form-group col-sm-6 col-xs-12">
                                        <input type="text" class="form-control" id="inputName" placeholder="Your name (*)">
                                    </div>
                                    <div class="form-group col-sm-6 col-xs-12">
                                        <input type="text" class="form-control" id="inputEmail" placeholder="Your email (*)">
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <textarea class="form-control" rows="3" placeholder="Write something for us..."></textarea>
                                    </div>
                                    <div class="form-group col-sm-3 col-xs-6">
                                        <button class="btn btn-primary" type="submit">Send message</button>
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


    <!--
    <section class="big_cover">
        <div class="content">
            <h3>save water</h3>
            <h1>drink wine</h1>
            <br>
            <a class="btn btn-primary" href="#scroll_point" role="button">Khám phá ngay</a>
        </div>
    </section>
    <section class="main_content" ng-controller="HomepageController" id="main_content">
        <span id="scroll_point"></span>
        <section class="container">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


                <div class="carousel-inner" role="listbox">
                    <div class="item" ng-repeat="advise in advises" active-on-first-four-items>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <img src="{{ asset('storage/app') }}/<% advise.image %>" alt="<% advise.slug %>">
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <a href="{{ url('/tu-van') }}/<% advise.slug %>" class="link-primary" target="_self">
                                    <h1><% advise.title %></h1>
                                </a>
                                <article class="description">
                                    <p ng-bind-html="$sce.trustAsHtml(advise.description)"></p>
                                </article>

                                <a class="btn btn-primary" href="{{ url('/tu-van') }}/<% advise.slug %>" role="button" target="_self">Khám phá ngay</a>
                            </div>
                        </div>
                    </div>
                </div>


                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </section>
        <section class="container" id="product_list">
            <div class="row">
                <!--<div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="panel panel-default">

                        <div class="panel-heading">Danh mục sản phẩm</div>


                        <ul class="list-group">
                            <li class="list-group-item" ng-repeat="type in menuProduct.type">
                                <a href="{{ url('loai-san-pham') }}/<% type.slug %>"  target="_self"><% type.title %></a>
                                <ul class="list-group">
                                    <li class="list-group-item" ng-repeat="kind in menuProduct.kind" ng-hide="kind.type_id != type.id">
                                        <a href="{{ url('dong-san-pham') }}/<% kind.slug %>"  target="_self"><% kind.title %></a>
                                        <ul class="list-group">
                                            <li class="list-group-item" ng-repeat="trademarks in menuProduct.trademarks" ng-hide="trademarks.kind_id != kind.id">
                                                <a href="{{ url('thuong-hieu') }}/<% trademarks.slug %>" target="_self"><% trademarks.name %></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="title_big">
                        Sản phẩm khuyến mãi
                    </div>

                    <div class="row">
                        <div class="item col-md-3 col-sm-6 col-xs-12" ng-repeat="discount in discounts">
                            <div class="inner">
                                <div class="mask">
                                    <img src="{{ asset('storage/app/products/') }}/<% discount.slug %>/<% discount.image[0] %>" alt="<% discount.slug %>">
                                </div>

                                <span class="badge">- <% discount.discount_percent %>%</span>

                                <span class="productName"><% discount.name %></span>
                                <h4 class="productYear"><% discount.year %></h4>
                                <h3 class="productPrice"><% discount.price | currency:VND:0 | commaToDot | removeUSCurrency  %> vnđ</h3>
                                <br>
                                <a class="btn btn-primary" href="#" role="button">Thử rượu miễn phí</a>

                                <div class="hover">
                                    <span class="productName"><% discount.name %></span>
                                    <h4 class="productYear"><% discount.year %></h4>
                                    <h3 class="productPrice"><% discount.price | currency:VND:0 | commaToDot | removeUSCurrency  %> vnđ</h3>
                                    <br>
                                    <!--<p ng-bind-html="$sce.trustAsHtml(discount.description)"></p>
                                    <br>
                                    <a class="btn btn-primary" href="#" role="button" ng-click="addToCart(discount.id)">Thêm vào giỏ hàng</a>
                                    <br>
                                    <a class="btn btn-primary" href="{{ url('/san-pham/chi-tiet') }}/<% discount.slug %>" role="button"  target="_self" >Xem chi tiết</a>
                                    <br>
                                    <a class="btn btn-primary" href="#" role="button" ng-click="addToTasting(discount.id)">Thử rượu miên phí</a>
                                    @if(!Auth::guest())
                                        <br>
                                        <a class="btn btn-primary" href="#" role="button" ng-click="addToLikeProduct(discount.id)" ><% discount.like %></a>
                                    @else
                                        <br>
                                        <a class="btn btn-primary" href="#" role="button" ng-click="login()" >Lưu yêu thích</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="container-fluid" id="tasting_wine">
            <div class="row">
                <div class="left col-md-4 col-sm-6 col-xs-12 col-md-offset-1 col-sm-offset-1">
                    <div class="title_mid">
                        Đăng ký thử rượu
                    </div>

                    <h2>Maecenas pulvinar tristique malesuada</h2>
                    <p>Vivamus ac tempor quam. Maecenas pulvinar tristique malesuada. Donec euismod nibh et dapibus tempor. Nullam elit nulla, rutrum eget eros sollicitudin, ullamcorper ultrices orci. Suspendisse potenti. Ut porta bibendum nibh eu viverra. Sed vel magna ac ligula finibus fermentum fringilla eu lectus. Sed elit ante, ornare nec dui at, molestie congue arcu. Nam at imperdiet neque, non tempus libero. Praesent dolor odio, mattis vulputate est ut, vulputate sollicitudin metus. Nulla id metus turpis. Phasellus non diam nisi. Duis vitae felis et magna elementum dictum. Pellentesque in enim fringilla, ullamcorper lacus et, imperdiet erat.</p>

                    <a class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#tastingWine_UG">Huong dan dang kys thu ruou</a>
                </div>
            </div>
        </section>

        <section class="container-fluid" id="news">
            <div class="container">
                <div class="title_big">
                    Tin tức
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12" ng-repeat="new in news">
                        <div class="inner">
                            <div class="mask">
                                <img src="{{ asset('storage/app') }}/<% new.image %>" alt="ảnh mình họa bài viết">
                            </div>
                            <a href="#">
                                <h3><% new.title %></h3>
                            </a>
                            <br>
                            <p ng-bind-html="$sce.trustAsHtml(new.description)"></p>
                            <br>
                            <a href="{{ url('/tin-tuc') }}/<% new.slug %>" class="btn btn-primary" target="_self" >Xem thêm <i class="fa fa-angle-double-right" aria-hidden="false"></i> </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="container-fluid" id="about">
            <div class="row" ng-repeat="introduce in introduce">

                <div class="right col-md-6 col-sm-6 col-xs-12 col-md-offset-6 col-sm-offset-6" ng-if="introduce.slug == 've-chung-toi' ">
                    <div class="left hidden-xs"></div>
                    <div class="title_big">
                        Về chúng tôi
                    </div>
                    <p ng-bind-html="$sce.trustAsHtml(introduce.content)"></p>
                    

                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <i class="fa fa-3x fa-phone" aria-hidden="false"></i>
                            <br>
                            <h4>Hỗ trợ qua điện thoại</h4>
                            <p>Suspendisse potenti. Cras molestie mi sed iaculis varius. Maecenas fermentum semper sagittis. Sed eu mattis tellus. Mauris dolor ligula, pellentesque id vestibulum nec, consectetur sed sem. Aenean at ante enim. Quisque dapibus ligula ut erat laoreet aliquet. Pellentesque dictum magna ante, venenatis scelerisque risus pretium eget. Nullam et orci vitae felis rutrum tempor. Vestibulum id maximus lacus.</p>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <i class="fa fa-3x fa-truck" aria-hidden="false"></i>
                            <br>
                            <h4>Miễn phí giao hàng</h4>
                            <p>Suspendisse potenti. Cras molestie mi sed iaculis varius. Maecenas fermentum semper sagittis. Sed eu mattis tellus. Mauris dolor ligula, pellentesque id vestibulum nec, consectetur sed sem. Aenean at ante enim. Quisque dapibus ligula ut erat laoreet aliquet. Pellentesque dictum magna ante, venenatis scelerisque risus pretium eget. Nullam et orci vitae felis rutrum tempor. Vestibulum id maximus lacus.</p>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <i class="fa fa-3x fa-user-o" aria-hidden="false"></i>
                            <br>
                            <h4>Hỗ trợ người mua hàng</h4>
                            <p>Suspendisse potenti. Cras molestie mi sed iaculis varius. Maecenas fermentum semper sagittis. Sed eu mattis tellus. Mauris dolor ligula, pellentesque id vestibulum nec, consectetur sed sem. Aenean at ante enim. Quisque dapibus ligula ut erat laoreet aliquet. Pellentesque dictum magna ante, venenatis scelerisque risus pretium eget. Nullam et orci vitae felis rutrum tempor. Vestibulum id maximus lacus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </section>

    <div class="modal fade" id="tastingWine_UG" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Huong dan dang ky thu ruou</h4>
                </div>
                <div class="modal-body">
                    <div class="cover">
                        <img src="{{ asset('public/frontend/img/cover/cover_02.jpg') }}" alt="cover">
                    </div>
                    <article>
                        <ol>
                            <li>
                                <h3>Buoc 1:</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquam pretium sapien, et gravida nisl vehicula a. Fusce nec augue eu velit tempus finibus in id diam. Vivamus pellentesque orci molestie justo dapibus, id posuere lectus placerat. Cras ut eros rutrum magna accumsan bibendum. Quisque laoreet, elit sit amet imperdiet euismod, lacus mauris consectetur orci, eget aliquam odio ante a massa. Vestibulum convallis egestas dignissim. Donec sit amet iaculis odio.</p>
                                <p>Morbi vel maximus ex. Vivamus sit amet cursus orci. Aliquam cursus bibendum lacus, quis congue justo. In volutpat, magna sit amet porta gravida, ante erat sodales eros, eget malesuada magna est vitae magna. Phasellus laoreet pharetra scelerisque. Nunc ex mauris, cursus eu ex a, mollis tempus nisi. Integer eleifend justo quam, a imperdiet urna pretium at. Sed porta nulla ut odio volutpat auctor. Maecenas et metus lacus. Integer metus sem, iaculis vel suscipit vel, aliquam at justo. Quisque quis condimentum nibh. Suspendisse hendrerit consequat ipsum, in malesuada urna vestibulum nec. Ut maximus, mi ut sodales lacinia, mauris eros varius lorem, et convallis felis diam eu sapien. Donec sollicitudin, nisl a blandit euismod, risus mauris tristique lectus, sed dignissim quam risus sit amet massa.</p>
                            </li>
                            <li>
                                <h3>Buoc 2:</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquam pretium sapien, et gravida nisl vehicula a. Fusce nec augue eu velit tempus finibus in id diam. Vivamus pellentesque orci molestie justo dapibus, id posuere lectus placerat. Cras ut eros rutrum magna accumsan bibendum. Quisque laoreet, elit sit amet imperdiet euismod, lacus mauris consectetur orci, eget aliquam odio ante a massa. Vestibulum convallis egestas dignissim. Donec sit amet iaculis odio.</p>
                                <p>Morbi vel maximus ex. Vivamus sit amet cursus orci. Aliquam cursus bibendum lacus, quis congue justo. In volutpat, magna sit amet porta gravida, ante erat sodales eros, eget malesuada magna est vitae magna. Phasellus laoreet pharetra scelerisque. Nunc ex mauris, cursus eu ex a, mollis tempus nisi. Integer eleifend justo quam, a imperdiet urna pretium at. Sed porta nulla ut odio volutpat auctor. Maecenas et metus lacus. Integer metus sem, iaculis vel suscipit vel, aliquam at justo. Quisque quis condimentum nibh. Suspendisse hendrerit consequat ipsum, in malesuada urna vestibulum nec. Ut maximus, mi ut sodales lacinia, mauris eros varius lorem, et convallis felis diam eu sapien. Donec sollicitudin, nisl a blandit euismod, risus mauris tristique lectus, sed dignissim quam risus sit amet massa.</p>
                            </li>
                            <li>
                                <h3>Buoc 3:</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquam pretium sapien, et gravida nisl vehicula a. Fusce nec augue eu velit tempus finibus in id diam. Vivamus pellentesque orci molestie justo dapibus, id posuere lectus placerat. Cras ut eros rutrum magna accumsan bibendum. Quisque laoreet, elit sit amet imperdiet euismod, lacus mauris consectetur orci, eget aliquam odio ante a massa. Vestibulum convallis egestas dignissim. Donec sit amet iaculis odio.</p>
                                <p>Morbi vel maximus ex. Vivamus sit amet cursus orci. Aliquam cursus bibendum lacus, quis congue justo. In volutpat, magna sit amet porta gravida, ante erat sodales eros, eget malesuada magna est vitae magna. Phasellus laoreet pharetra scelerisque. Nunc ex mauris, cursus eu ex a, mollis tempus nisi. Integer eleifend justo quam, a imperdiet urna pretium at. Sed porta nulla ut odio volutpat auctor. Maecenas et metus lacus. Integer metus sem, iaculis vel suscipit vel, aliquam at justo. Quisque quis condimentum nibh. Suspendisse hendrerit consequat ipsum, in malesuada urna vestibulum nec. Ut maximus, mi ut sodales lacinia, mauris eros varius lorem, et convallis felis diam eu sapien. Donec sollicitudin, nisl a blandit euismod, risus mauris tristique lectus, sed dignissim quam risus sit amet massa.</p>
                            </li>
                        </ol>
                    </article>

                    <a href="{{ url('san-pham') }}" target="_self" role="button" class="btn btn-primary">
                        Sản phẩm
                    </a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    -->
    <!-- Animate CSS -->
    <link href="{{ asset("public/frontend/lib/animate/animate.min.css")}}" rel="stylesheet" type="text/css" />
    <script src="{{ asset ("public/frontend/lib/wow/wow.js") }}"></script>
    <script>
        new WOW().init();
    </script>

    <script src="{{ asset ("public/frontend/app/controllers/homepage.js") }}"></script>
    <script src="{{ asset ("public/frontend/app/controllers/modal.js") }}"></script>


@endsection
