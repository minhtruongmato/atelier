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
                                    XU HƯỚNG NỘI THẤT ĐIỂN HÌNH
                                </h4>
                            </div>

                            <div class="right col-sm-6 col-xs-12">
                                <p class="paragraph">
                                    Với lý tưởng duy mỹ luôn hướng tới sự hoàn hảo trong mọi công trình, chúng tôi luôn luôn theo sát và đảm bảo rằng những người tham gia kiến tạo nên sản phẩm của Artelier 31 dù là kỹ sư, thiết kế, người chọn vật tư, công nhân sản xuất, vận chuyển, lắp đặt hay bảo trì sản phẩm, tất cả đều phải tận tâm, tập trung cao độ và chỉn chu trong công việc của mình nhằm mang đến cho người tiêu dùng những sản phẩm chất lượng và dịch vụ thỏa mãn nhất.
                                </p>
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
                        <a href="{{ url('xu-huong') }}<% '/' + trend.slug %>" target="_self">
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


    <script src="{{ asset ("public/frontend/app/controllers/trend.js") }}"></script>


@endsection