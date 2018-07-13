@extends('layouts.frontend-template')
@section('content')
    <link href="{{ asset("public/frontend/scss/blogs.css")}}" rel="stylesheet" type="text/css" />

    <section class="section-header">
        <div class="container-fluid">
            <div class="container header">
                <h1 class="heading dark">
                    Tin tức
                </h1>
            </div>
        </div>
    </section>

    <section id="list-news" class="list-blogs">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <?php for ($i = 0; $i < 7; $i++) { ?>
                    <div class="item col-sm-4 col-xs-12">
                        <div class="inner">
                            <a href="{{ url('') }}">
                                <div class="mask">
                                    <img src="{{ asset('public/frontend/img/demo-news-2.jpg') }}" alt="image news">
                                </div>
                            </a>

                            <a href="{{ url('') }}">
                                <h2 class="post-heading dark">Global Travel And Vacations Luxury Travel On A Tight Budget</h2>
                            </a>
                            <p class="description">Nunc accumsan purus vel ex laoreet vulputate. In ac ex sed lectus sodales pellentesque vel at ante. Nam in eros eget dui elementum tincidunt. Phasellus at diam ac nisl aliquet congue. Suspendisse sollicitudin sagittis felis, at consectetur justo suscipit vel. Quisque ac velit eu metus cursus accumsan eget ac lacus. Integer lacinia ex mi, et interdum nunc consequat quis. Fusce consectetur dui at felis tincidunt, quis sollicitudin libero euismod. Ut bibendum lobortis odio.</p>
                            <a href="{{ url('') }}" class="btn btn-outline" role="button">
                                See Detail
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <!--
    <section class="main_content" ng-controller="BlogController">

        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12">
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
                <div class="nav_side col-md-3 col-sm-3 col-xs-12">
                    <div class="panel panel-default">

                        <div class="panel-heading">Danh mục tin tức</div>


                        <ul class="list-group" ng-repeat="category in categories">
                            <li class="list-group-item">
                                <a href="{{ url('tin-tuc/danh-muc') }}/<% category.slug %>" target="_self" ><% category.title %></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->

    <script src="{{ asset ("public/frontend/app/controllers/blog.js") }}"></script>
    <script>
        $(window).scroll(function () {
            //if you hard code, then use console
            //.log to determine when you want the
            //nav bar to stick.
            'use strict';
            if ($(window).scrollTop() > 150) {
                $('.main_content').css( 'margin-top' , '280px');
            }
            if ($(window).scrollTop() < 150) {
                $('.main_content').css( 'margin-top' , '50px');
            }
        });
    </script>
@endsection