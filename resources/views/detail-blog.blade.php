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

    <section id="detail-news">
        <section class="section-header">
            <div class="container-fluid">
                <div class="container header">
                    <h1 class="heading dark">
                        Bai viet
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

        <div class="container">
            <article>
                <p class="paragraph">Curabitur malesuada volutpat purus, ut ultricies sem. Donec euismod est at magna maximus, eget venenatis libero dictum. Cras quis fringilla turpis. Curabitur semper non justo eget ultricies. Cras tempus et sapien suscipit pellentesque. Quisque consectetur tempus lorem ac lacinia. Morbi nulla ligula, pulvinar at scelerisque quis, luctus quis diam. Vestibulum cursus facilisis velit at pellentesque. Sed in lacinia metus. Aliquam vel venenatis augue.</p>

                <img src="" alt="post image">
            </article>
        </div>
    </section>

    <script src="{{ asset ("public/frontend/app/controllers/detail-blog.js") }}"></script>
@endsection