<header class="header container-fluid dark">
    <div class="left col-sm-2">
        <a href="{{ url('') }}" target="_self">
            <div class="logo"></div>
        </a>
    </div>

    <div class="center col-sm-7">
        <nav class="nav-main">
            <ul>
                <li>
                    <a href="{{ url('') }}" target="_self">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ url('san-pham') }}" target="_self">
                        Product
                    </a>
                </li>
                <li>
                    <a href="{{ url('xu-huong') }}" target="_self">
                        Trends
                    </a>
                </li>
                <li>
                    <a href="{{ url('') }}" target="_self">
                        Creative
                    </a>
                </li>
                <li>
                    <a href="{{ url('tin-tuc') }}" target="_self">
                        News
                    </a>
                </li>
                <li>
                    <a class="outline" href="{{ url('') }}" target="_self">
                        Contact
                    </a>
                </li>
                <li>
                    <div class="line"></div>
                </li>
                <li>
                    Hotline: <b>024 1234 5678</b>
                </li>
            </ul>
        </nav>
    </div>

    <div class="right col-sm-3">
        <nav class="nav-user">
            <ul>
                <li>
                    <a href="{{ url('') }}" target="_self">
                        <i class="fa fa-search" aria-hidden="false"></i> Search
                    </a>
                </li>
                <li>
                    <a href="{{ url('') }}" target="_self">
                        <i class="fa fa-user" aria-hidden="false"></i> Log In
                    </a>
                </li>
                <li>
                    <a href="{{ url('') }}" target="_self">
                        <i class="fa fa-shopping-cart" aria-hidden="false"></i> My Cart
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<div class="nav-side dark">
    <ul>
        <li>
            Follow Us
        </li>
        <li>
            <div class="line"></div>
        </li>
        <li class="re-rotate">
            <a href="#" target="_self">
                <i class="fa fa-2x fa-facebook-f" aria-hidden="false"></i>
            </a>
        </li>
        <li class="re-rotate">
            <a href="javascript:void(0);" target="_self">
                <i class="fa fa-2x fa-pinterest-p" aria-hidden="false"></i>
            </a>
        </li>
    </ul>
</div>





<!--
<header class="header">
    <section class="container">
        <div class="container-fluid">
            <a href="{{ url('') }}" target="_self">
                <div class="logo"></div>
            </a>

            <ul class="user_activities list-inline list-unstyled pull-right hidden-xs hidden-sm">
                <li>
                    <a href="javascript:void(0);" id="search_btn">
                        <i class="fa fa-search" aria-hidden="false"></i> Tìm kiếm
                    </a>
                </li>
                <li>
                    <div class="login">
                        @if (Auth::guest())
                            <div class="dropdown login_dropdown">
                                <a href="" data-toggle="modal" data-target="#user_login"> <strong>Đăng nhập</strong> </a>
                                <span> hoặc </span>
                                <a href="" data-toggle="modal" data-target="#user_register"> <strong>Đăng ký</strong> </a>
                            </div>
                        @else
                            <span hidden id="user_id">{{ Auth::user()->id }}</span>
                            Xin chào, <a href="{{ url('thong-tin-ca-nhan') }}" target="_self"><strong>{{ Auth::user()->name }}</strong></a>
                            <br>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form1').submit();">
                                Thoát
                            </a>

                            <form id="logout-form1" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @endif
                    </div>
                </li>
                <li>
                    <a href="{{ url('xem-gio-hang') }}" target="_self">
                        <i class="fa fa-shopping-cart" aria-hidden="false"></i> <span class="badge" ng-bind="countAddedProducts"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('thu-ruou') }}" target="_self">
                        <i class="fa fa-glass" aria-hidden="true"></i> <span class="badge" ng-bind="counttastingProducts"></span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="nav col-md-10 col-xs-6 hidden">
            <div class="user pull-right">
                <div class="icon pull-left">
                    <ul class="list-inline">
                        <li>
                            <a href="wishlist.html">
                                <i class="fa fa-2x fa-heart-o"></i> <span class="badge">0</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('xem-gio-hang') }}" target="_self">
                                {{--<i class="fa fa-2x fa-shopping-cart"></i> <span class="badge" ng-bind="countAddedProducts"></span>--}}
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="login pull-left">
                    @if (Auth::guest())
                        <div class="dropdown login_dropdown">
                            <a href="" data-toggle="modal" data-target="#user_login"> <strong>Đăng nhập</strong> </a>
                            hoặc
                            <a href="" data-toggle="modal" data-target="#user_register"> <strong>Đăng ký</strong> </a>
                        </div>
                    @else
                        Xin chào, <a href="{{ url('thong-tin-ca-nhan') }}" target="_self"><strong>{{ Auth::user()->name }}</strong></a>
                        <br>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Thoát
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endif
                </div>
            </div>
            <br>
            <br>

        </div>
        <div class="nav_list">
            <div class="row">
                <div class="hidden-lg hidden-md col-xs-6">
                    <button class="mobile_nav_btn hidden-md color_sub_menu" id="expand_btn">
                        <i class="fa fa-bars"></i> Menu
                    </button>
                </div>
                <div class="hidden-lg hidden-md col-xs-6">
                    <button class="mobile_nav_btn hidden-md color_sub_menu" id="search_btn">
                        <i class="fa fa-search"></i> Tìm kiếm
                    </button>
                </div>
            </div>
            <ul class="nav">
                <li>
                    <a href="{{ url('') }}" target="_self">
                        <i class="fa fa-home hidden-xs" aria-hidden="true"></i>
                        <span class="visible-xs">Trang chủ</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('san-pham') }}" target="_self">
                        Sản phẩm
                    </a>
                </li>
                <li>
                    <a href="" target="_self" class="ul_expand">
                        Blog
                    </a>
                    <ul class="list-unstyled ul_dropdown">
                        <li>
                            <a href="{{ url('tu-van') }}" class="color_sub_menu" target="_self">
                                Tư vấn
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('tin-tuc') }}" class="color_sub_menu" target="_self">
                                Tin tức
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('gioi-thieu') }}" target="_self">
                        Về chúng tôi
                    </a>
                </li>
                <li>
                    <a href="{{ url('lien-he') }}" target="_self">
                        Liên hệ
                    </a>
                </li>
                <div class="extended_nav visible-xs visible-sm" style="border-top: 1px solid grey; padding-top: 15px;">
                    <div class="row">
                        <div class="col-xs-6">
                            <button class="btn" data-toggle="modal" data-target="#user_login">
                                <i class="fa fa-sign-in" aria-hidden="true"></i> Đăng nhập
                            </button>
                        </div>
                        <div class="col-xs-6">
                            <button class="btn" data-toggle="modal" data-target="#user_register">
                                <i class="fa fa-user-plus" aria-hidden="true"></i> Đăng ký
                            </button>
                        </div>
                        <div class="col-xs-6">
                            <a class="btn" href="{{ url('xem-gio-hang') }}" target="_self" role="button">
                                <i class="fa fa-shopping-cart" aria-hidden="false"></i> Giỏ hàng <span class="badge" ng-bind="countAddedProducts"></span>
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <a class="btn" href="{{ url('thu-ruou') }}" target="_self" role="button">
                                <i class="fa fa-glass" aria-hidden="true"></i> Danh sách <span class="badge" ng-bind="counttastingProducts"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </ul>

            <div id="search_box">
                <form class="input-group" action="{{ url('tim-kiem') }}" method="get">
                    <input type="text" class="form-control" placeholder="Tìm kiếm..." name="search">
                    <span class="input-group-btn">
                        <button class="btn btn-default color_sub_menu" type="submit">Tìm kiếm!</button>
                    </span>
                </form>
            </div>
        </div>
    </section>
</header>
-->