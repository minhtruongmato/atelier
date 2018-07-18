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

    <section id="list-news" class="list-blogs" ng-controller="BlogController">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="item col-sm-4 col-xs-12" ng-repeat="blog in blogs">
                        <div class="inner">
                            <a href="#">
                                <div class="mask">
                                    <img src="{{ asset('storage/app/') }}/<% blog.image %>" alt="image news">
                                </div>
                            </a>

                            <a href="#">
                                <h2 class="post-heading dark"><% blog.title %></h2>
                            </a>
                            <p class="description"><% blog.description %></p>
                            <a href="{{ url('tin-tuc/chi-tiet/') }}/<% blog.slug %>" class="btn btn-outline" role="button"  target="_self">
                                See Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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