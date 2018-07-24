@extends('layouts.frontend-template')
@section('content')

    <style>
        header.header{
            position: static;
        }

        footer.footer{
            display: block !important;
        }
    </style>

    <section id="trends" ng-controller="TrendController">
        <section class="section-header">
            <div class="container-fluid">
                <div class="container header">
                    <h1 class="heading dark">
                        Xu hướng
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

                <div class="container cover">
                    <div class="mask">
                        <img src="{{ asset('public/frontend/img/demo-product-1.jpg') }}" alt="trends cover image">
                    </div>
                </div>
            </div>
        </section>

        <section id="list-trends">
            <div class="container">
                <div masonry load-images="true">

                    <div class="masonry-brick <% $index%2==0 ? 'masonry-brick-height-2' : '' %>" ng-repeat="trend in trends">
                        <a href="" target="_self">
                            <div class="inner">
                                <div class="mask">
                                    <img ng-src="{{ asset('storage/app/trends') }}<% '/' + trend.slug + '/' + trend.image %>" alt="A masonry brick">

                                    <div class="content">
                                        <h4 class="post-subheading dark"><% trend.cate_title %></h4>
                                        <h2 class="post-heading dark"><% trend.title %></h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!--
            <div class="grid-item wow fadeInUp <% $index%2==0 ? 'grid-item-height-2' : '' %>" ng-repeat="trend in trends" id="<% $index %>">
                <a href="{{ url('') }}">
                    <div class="inner">
                        <div class="mask">
                            <img src="{{ asset('storage/app/trends') }}<% '/' + trend.slug + '/' + trend.image %>" alt="image trend">

                            <div class="content">
                                <h4 class="post-subheading dark"><% trend.cate_title %></h4>
                                <h2 class="post-heading dark"><% trend.title %></h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            -->

            <!--
            <div class="container">
                <div class="grid">
                    <div class="grid-sizer"></div>
                    <div class="grid-item title">
                        <div class="inner">
                            <h2 class="heading">Xu hướng</h2>
                        </div>
                    </div>

                    <?php for ($i = 0; $i < 6; $i++) { ?>
                    <div class="grid-item wow fadeInUp">
                        <a href="{{ url('') }}">
                            <div class="inner">
                                <div class="mask">
                                    <img src="{{ asset('public/frontend/img/demo-trends.jpg') }}" alt="image trend">

                                    <div class="content">
                                        <h4 class="post-subheading dark">Trends Category</h4>
                                        <h2 class="post-heading dark">Fusce aliquet, eros eget egestas efficitur, lorem dolor fermentum elit, a imperdiet purus libero eget elit. In vel consequat ante</h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="grid-item grid-item-height-2 wow fadeInUp">
                        <a href="{{ url('') }}}">
                            <div class="inner">
                                <div class="mask">
                                    <img src="{{ asset('public/frontend/img/demo-product-1.jpg') }}" alt="image trend">

                                    <div class="content">
                                        <h4 class="post-subheading dark">Trends Category</h4>
                                        <h2 class="post-heading dark">Fusce aliquet, eros eget egestas efficitur, lorem dolor fermentum elit, a imperdiet purus libero eget elit. In vel consequat ante</h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
            -->
        </section>

    </section>

    <!-- Angular Mansonry -->

    <script src="{{ asset('bower_components') }}/ev-emitter/ev-emitter.js"></script>
    <script src="{{ asset('bower_components') }}/desandro-matches-selector/matches-selector.js"></script>
    <script src="{{ asset('bower_components') }}/fizzy-ui-utils/utils.js"></script>
    <script src="{{ asset('bower_components') }}/get-size/get-size.js"></script>
    <script src="{{ asset('bower_components') }}/outlayer/item.js"></script>
    <script src="{{ asset('bower_components') }}/outlayer/outlayer.js"></script>
    <script src="{{ asset('bower_components') }}/masonry/masonry.js"></script>

    <!-- optional -->
    <script src="{{ asset('bower_components') }}/imagesloaded/imagesloaded.js"></script>
    <!-- /optional -->

    <script>
        angular.module('atelierApp', ['wu.masonry']).
    </script>

    <script src="{{ asset('bower_components') }}/angular-masonry/angular-masonry.js"></script>

    <script src="{{ asset ("public/frontend/app/controllers/trend.js") }}"></script>


@endsection