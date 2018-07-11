@extends('layouts.frontend-template')
@section('content')
    <link href="{{ asset("public/frontend/scss/trends.css")}}" rel="stylesheet" type="text/css" />

    <section class="section-header">
        <div class="container-fluid">
            <div class="container header">
                <h1 class="heading dark">
                    Trends
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
                    <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=7eb3cf84fa5988885f62b3ee0dfac1fe&auto=format&fit=crop&w=1873&q=80" alt="trends cover image">
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
                        <h2 class="heading">Trends</h2>
                    </div>
                </div>

                <?php for ($i = 0; $i < 6; $i++) { ?>
                <div class="grid-item wow fadeInUp">
                    <a href="{{ url('') }}">
                        <div class="inner">
                            <div class="mask">
                                <img src="https://images.unsplash.com/photo-1523755231516-e43fd2e8dca5?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6fd823fe16fab3f55144f2cb4dcf2fc3&auto=format&fit=crop&w=975&q=80" alt="image trend">

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
                                <img src="https://images.unsplash.com/photo-1523755231516-e43fd2e8dca5?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6fd823fe16fab3f55144f2cb4dcf2fc3&auto=format&fit=crop&w=975&q=80" alt="image trend">

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