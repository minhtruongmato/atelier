@extends('layouts.frontend-template')
@section('content')
    <link href="{{ asset("public/frontend/scss/product.css")}}" rel="stylesheet" type="text/css" />

    <section class="section-header">
        <div class="container-fluid">
            <div class="container header">
                <h1 class="heading dark">
                    sản phẩm của chúng tôi
                </h1>
            </div>
            <div class="introduce">
                <div class="container">
                    <div class="row">
                        <div class="left col-sm-6 col-xs-12">
                            <h4 class="sub-heading">
                                Proin pharetra purus consequat sapien pretium, fermentum congue purus blandit. Aliquam porttitor nunc sit amet blandit laoreet. Nunc congue at neque a tincidunt.
                            </h4>
                        </div>

                        <div class="right col-sm-6 col-xs-12">
                            <p class="paragraph">Nunc accumsan purus vel ex laoreet vulputate. In ac ex sed lectus sodales pellentesque vel at ante. Nam in eros eget dui elementum tincidunt. Phasellus at diam ac nisl aliquet congue. Suspendisse sollicitudin sagittis felis, at consectetur justo suscipit vel. Quisque ac velit eu metus cursus accumsan eget ac lacus. Integer lacinia ex mi, et interdum nunc consequat quis. Fusce consectetur dui at felis tincidunt, quis sollicitudin libero euismod. Ut bibendum lobortis odio.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="list-product">
        <div class="container-fluid">
            <div class="grid">
                <div class="grid-sizer"></div>
                <div class="grid-item cover">
                    <h1 class="heading light">
                        Product Category
                    </h1>

                    <a href="{{ url('') }}" class="btn btn-outline">
                        Xem tất cả
                    </a>
                </div>
                <div class="grid-item">
                    <a href="{{ url('') }}">
                        <div class="mask">
                            <img src="{{ asset('public/frontend/img/demo-product-1.jpg') }}" alt="slide">

                            <div class="price">
                                <h3>999.000.000 vnd</h3>
                            </div>
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="left col-xs-12">
                                    <h4 class="post-subheading">Product Category</h4>
                                    <h2 class="post-heading">Name of the Product</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item grid-item-width-2">
                    <a href="{{ url('') }}">
                        <div class="mask">
                            <img src="{{ asset('public/frontend/img/demo-product-2.jpg') }}" alt="slide">

                            <div class="price">
                                <h3>999.000.000 vnd</h3>
                            </div>
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="left col-sm-4 col-xs-12">
                                    <h4 class="post-subheading">Product Category</h4>
                                    <h2 class="post-heading">Name of the Product</h2>
                                </div>
                                <div class="right col-sm-8 hidden-xs">

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item grid-item-width-2">
                    <a href="{{ url('') }}">
                        <div class="mask">
                            <img src="{{ asset('public/frontend/img/demo-product-1.jpg') }}" alt="slide">

                            <div class="price">
                                <h3>999.000.000 vnd</h3>
                            </div>
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="left col-sm-4 col-xs-12">
                                    <h4 class="post-subheading">Product Category</h4>
                                    <h2 class="post-heading">Name of the Product</h2>
                                </div>
                                <div class="right col-sm-8 hidden-xs">

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item">
                    <a href="{{ url('') }}">
                        <div class="mask">
                            <img src="{{ asset('public/frontend/img/demo-product-2.jpg') }}" alt="slide">

                            <div class="price">
                                <h3>999.000.000 vnd</h3>
                            </div>
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="left col-xs-12">
                                    <h4 class="post-subheading">Product Category</h4>
                                    <h2 class="post-heading">Name of the Product</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item">
                    <a href="{{ url('') }}">
                        <div class="mask">
                            <img src="{{ asset('public/frontend/img/demo-product-1.jpg') }}" alt="slide">

                            <div class="price">
                                <h3>999.000.000 vnd</h3>
                            </div>
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="left col-xs-12">
                                    <h4 class="post-subheading">Product Category</h4>
                                    <h2 class="post-heading">Name of the Product</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script>
        $('.grid').isotope({
            // set itemSelector so .grid-sizer is not used in layout
            itemSelector: '.grid-item',
            percentPosition: true,
            masonry: {
                // use element for option
                columnWidth: '.grid-sizer'
            }
        })
    </script>

    <!--
    <section class="main_content" ng-controller="ProductController">

        <div class="container">
            <div class="container-fluid">
                <img class="cover" src="{{ asset('public/frontend/img/cover/cover_01.jpg') }}" alt="cover">

                <div class="nav_product">
                    <ul class="list-unstyled">
                        <span class="hidden-xs panel-heading">Danh mục sản phẩm</span>
                        <span class="visible-xs"><i class="fa fa-bars" aria-hidden="true"></i> Danh mục sản phẩm</span>
                        <li class="nav_product_hover" ng-repeat="type in menuProduct.type">
                            <a href=""> <% type.title %> </a>
                            <div class="nav_expand">
                                <div class="left hidden-sm hidden-xs">
                                    <div class="mask">
                                        <img src="{{ asset('storage/app/type') }}/<% type.image %>" alt="image of product category">
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="type" ng-repeat="kind in menuProduct.kind" ng-hide="kind.type_id != type.id">
                                        {{--<a href="{{ url('loai-san-pham') }}/<% type.slug %>"  target="_self"><% type.title %></a>--}}
                                        <label >
                                            <a href="{{ url('dong-san-pham') }}/<% kind.slug %>"  target="_self"><% kind.title %></a>
                                        </label>
                                        <ul class="list-unstyled list-inline">
                                            <li ng-repeat="trademarks in menuProduct.trademarks" ng-hide="trademarks.kind_id != kind.id">
                                                <a href="{{ url('thuong-hieu') }}/<% trademarks.slug %>" target="_self"><% trademarks.name %></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            <div class="row">
                <div class="category col-md-3 col-sm-3 col-xs-12">

                    <div class="panel panel-default filter">
                        <div class="panel-heading">
                            Tìm kiếm sản phẩm
                        </div>
{{--                        <form method="POST" action="{{ route('product.search') }}" ng-submit="search()">--}}
                        <form method="POST" ng-submit="search()">
                            {{ csrf_field() }}
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <label>Tìm kiếm sản phẩm</label>
                                    <div class="input-group">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Tìm kiếm..." ng-model="name">

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <label>Mức giá</label>
                                    <div class="checkbox">
                                        <select name="price" ng-model="price">
                                            <option value="">Chọn mức giá</option>
                                            <option value="0" @if (old('price') == "0") selected="selected" @endif> 0-100.000 vnđ</option>
                                            <option value="1" @if (old('price') == "1") selected="selected" @endif> 101.000-300.000 vnđ</option>
                                            <option value="2" @if (old('price') == "2") selected="selected" @endif> 301.000-500.000 vnđ</option>
                                            <option value="3" @if (old('price') == "3") selected="selected" @endif> 501.000-800.000 vnđ</option>
                                            <option value="4" @if (old('price') == "4") selected="selected" @endif> 800.000+ vnđ</option>
                                        </select>
                                        @if ($errors->has('price'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <label>Xuất xứ</label>
                                    <div class="radio">
                                        <select name="origin" ng-model="origin">
                                            <option value="">Chọn quốc gia</option>
                                            <option ng-repeat="origin in origins" value="<% origin.id%>"><% origin.name%></option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                            <div class="panel-footer">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i> Tìm kiếm
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="productItem_view col-md-9 col-sm-9 col-xs-12">
                    {{--<img class="cover" src="{{ asset('public/frontend/img/cover/cover_01.jpg') }}" alt="cover">--}}

                    <div class="row" id="list-product">
                        <div class="item col-md-4 col-sm-6 col-xs-12" ng-repeat="product in products">
                            <div class="inner">
                                <div class="mask">
                                    <img src="{{ asset('storage/app/products/') }}/<%product.slug%>/<% product.image[0] %>" alt="<% product.slug %>">
                                </div>

                                <span class="badge" ng-if="product.discount_percent != null">- <% product.discount_percent %>%</span>

                                <span class="productName"><% product.name %></span>
                                <h4 class="productYear"><% product.year %></h4>
                                <h3 class="productPrice"><% product.price %> vnđ</h3>
                                <br>
                                <a class="btn btn-primary" href="#" role="button">Đăng ký thử rượu</a>

                                <div class="hover">
                                    <span class="productName"><% product.name %></span>
                                    <h4 class="productYear"><% product.year %></h4>
                                    <h3 class="productPrice"><% product.price %> vnđ</h3>
                                    <br>
                                    <p ng-bind-html="$sce.trustAsHtml(product.description)"></p>
                                    <br>
                                    <a class="btn btn-primary" href="#" role="button" ng-click="addToCart(product.id)">Thêm vào giỏ hàng</a>
                                    <br>
                                    <a class="btn btn-primary" href="{{ url('/san-pham/chi-tiet') }}/<% product.slug %>" role="button"  target="_self">Xem chi tiết</a>
                                    <br>
                                    <a class="btn btn-primary" href="#" role="button" ng-click="addToTasting(product.id)">Đăng ký thử rượu</a>
                                    @if(!Auth::guest())
                                        <br>
                                        <a class="btn btn-primary" href="#" role="button" ng-click="addToLikeProduct(product.id)" ><% product.like %></a>
                                    @else
                                        <br>
                                        <a class="btn btn-primary" href="#" role="button" ng-click="login()" >Lưu yêu thích</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" ng-if="isEmpty(products)">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h4>Chúng tôi không tìm thấy sản phẩm của bạn!</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    -->
    <script src="{{ asset ("public/frontend/app/controllers/product.js") }}"></script>
    <script src="{{ asset ("public/frontend/app/controllers/modal.js") }}"></script>
    <script src="{{ asset ("public/frontend/js/nav_product.js") }}"></script>
    <script>
        $(window).scroll(function () {
            //if you hard code, then use console
            //.log to determine when you want the
            //nav bar to stick.
            'use strict';
            if ($(window).scrollTop() > 100) {
                $('.main_content').css( 'margin-top' , '280px');
            }
            if ($(window).scrollTop() < 100) {
                $('.main_content').css( 'margin-top' , '50px');
            }
        });
    </script>
@endsection