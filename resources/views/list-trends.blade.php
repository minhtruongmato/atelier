@extends('layouts.frontend-template')
@section('content')

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

    <link href="{{ asset("public/frontend/lib/animate/animate.min.css")}}" rel="stylesheet" type="text/css" />
    <script src="{{ asset ("public/frontend/lib/wow/wow.js") }}"></script>
    <script>
        new WOW().init();
    </script>

@endsection