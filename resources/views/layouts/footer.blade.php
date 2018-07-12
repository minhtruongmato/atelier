<footer class="footer">
    <section class="container-fluid">
        <section class="container">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <h3>Liên hệ với chúng tôi</h3>
                <p>Vivamus non finibus tortor. Nulla porttitor pharetra dolor vel molestie. Nullam sagittis, augue a malesuada consequat, nunc felis gravida turpis, id porta augue risus vitae enim.</p>
                <table class="table">
                    <tr>
                        <td><i class="fa fa-map-marker" aria-hidden="true"></i></td>
                        <td>Vivamus non finibus tortor. Nulla porttitor pharetra dolor vel molestie.</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-phone" aria-hidden="true"></i></td>
                        <td>024 1234 5678</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-envelope-o" aria-hidden="true"></i></td>
                        <td>contact@atelier.vn</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <h3>Trợ giúp</h3>
                <ul class="list-unstyled">
                    <li>
                        <a href="{{ url('') }}" target="_self">
                            Trang chủ
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('san-pham') }}" target="_self">
                            Sản phẩm
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('xu-huong') }}" target="_self">
                            Xu hướng
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('') }}" target="_self">
                            Góc sáng tạo
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('tin-tuc') }}" target="_self">
                            Tin tức
                        </a>
                    </li>
                    <li>
                        <a class="outline" href="{{ url('') }}" target="_self">
                            Liên hệ
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12" ng-controller="SubscribeController">
                <h3>Đăng ký nhận thông báo</h3>
                <p>Integer faucibus consequat quam, et efficitur odio ac augue laoreet, vel feugiat sapien ornare.</p>

                <form>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Email của khách hàng" ng-model="user.email" id="subs_email">
                        <span class="input-group-btn">
                  <input type="submit" ng-click="send(user)" class="btn btn-primary" value="Đăng ký" />
                </span>

                    </div><!-- /input-group -->
                </form>
                <ul class="list-inline list-unstyled">
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <i class="fa fa-2x fa-facebook-f" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <i class="fa fa-2x fa-youtube-square" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" target="_blank">
                            <i class="fa fa-2x fa-linkedin-square" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </section>
    <div class="copyright text-center">
        Copyright 2018 Atelier. All Rights Reversed.
    </div>
</footer>

