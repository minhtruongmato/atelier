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

    <section id="product" ng-controller="LibraryController">
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
            <div class="container">
                <div masonry load-images="true">

                    <div class="masonry-brick <% $index%2==0 ? 'masonry-brick-height-2' : '' %>" ng-repeat="product in library">
                        <a href="" target="_self">
                            <div class="inner">
                                <div class="mask">
                                    <a href="{{ url('/san-pham/chi-tiet') }}<% '/' + product.slug  %>"  target="_self">
                                        <img ng-src="{{ asset('storage/app/library') }}<% '/' + product.slug + '/' + product.image %>" alt="A masonry brick">
                                    </a>
                                    <div class="content">
                                        <h2 class="post-heading dark"><a href="{{ url('/san-pham/chi-tiet') }}<% '/' + product.slug  %>"  target="_self"><% product.title %></a></h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
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

    <script src="{{ asset ("public/frontend/app/controllers/library.js") }}"></script>

@endsection