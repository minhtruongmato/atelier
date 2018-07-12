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
                <td>hamruouthinh24@gmail.com</td>
            </tr>
        </table>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <h3>Trợ giúp</h3>
        <ul class="list-unstyled">
          <li>
            <a href="javascript:void(0)">
              Về cửa hàng
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              Tư vấn
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              Liên hệ
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              Sản phẩm
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              Điều khoản
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              Câu hỏi thường gặp
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
  <section class="container-fluid copyright">
    <section class="container">
      <div class="col-md-6 col-sm-6 col-xs-12">
        Copyright 2018 hamruouthinh24. All Rights Reversed.
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 text-right">

      </div>
    </section>
  </section>
</footer>

<button type="button" id="requestQuotationBtn" class="btn btn-primary" data-toggle="modal" data-target="#requestQuotation">
    <i class="fa fa-2x fa-dollar" aria-hidden="true" title="Đăng ký nhận báo giá"></i>
</button>

<div class="scrollup">
    <i class="fa fa-chevron-up fa-2x"></i>
</div>

<!-- Lightbox JS -->
<script src="{{ asset ("public/frontend/lightbox/js/lightbox.min.js") }}"></script>
<!-- jQuery Input -->
<script src="{{ asset ("public/frontend/js/script.min.js") }}"></script>
<script src="{{ asset ("node_modules/socket.io-client/dist/socket.io.js") }}"></script>

<script type="text/javascript">
    function onLoad(){
        if( $(window).width() <= 992) {

            //Hide nav expand menu
            $('nav > .nav-expand').hide();
        }
    };

    window.onload = onLoad();
</script>
<style>
    a { text-decoration: none; }

    fieldset {
        border: 0;
        margin: 0;
        padding: 0;
    }

    h4, h5 {
        line-height: 1.5em;
        margin: 0;
    }

    hr {
        background: #e9e9e9;
        border: 0;
        -moz-box-sizing: content-box;
        box-sizing: content-box;
        height: 1px;
        margin: 0;
        min-height: 1px;
    }

    img {
        border: 0;
        display: block;
        height: auto;
        max-width: 100%;
    }

    input {
        border: 0;
        color: inherit;
        font-family: inherit;
        font-size: 100%;
        line-height: normal;
        margin: 0;
    }

    p { margin: 0; }

    .clearfix { *zoom: 1; } /* For IE 6/7 */
    .clearfix:before, .clearfix:after {
        content: "";
        display: table;
    }
    .clearfix:after { clear: both; }

    /* ---------- LIVE-REGISTER ---------- */

    #live-register {
        bottom: 0;
        font-size: 12px;
        right: 24px;
        position: fixed;
        width: 300px;
        height:300px;
        background: #fff;
    }

    #live-register header {
        background: #293239;
        border-radius: 5px 5px 0 0;
        color: #fff;
        cursor: pointer;
        padding: 16px 24px;
    }

    #live-register h4:before {
        background: #1a8a34;
        border-radius: 50%;
        content: "";
        display: inline-block;
        height: 8px;
        margin: 0 8px 0 0;
        width: 8px;
    }

    #live-register h4 {
        font-size: 12px;
    }

    #live-register h5 {
        font-size: 10px;
    }

    #live-register form {
        padding: 24px;
    }

    #live-register input[type="text"] {
        border: 1px solid #ccc;
        border-radius: 3px;
        padding: 8px;
        outline: none;
        width: 234px;
    }

    /* ---------- LIVE-CHAT ---------- */

    #live-chat {
        bottom: 0;
        font-size: 12px;
        right: 24px;
        position: fixed;
        width: 300px;
    }

    #live-chat header {
        background: #293239;
        border-radius: 5px 5px 0 0;
        color: #fff;
        cursor: pointer;
        padding: 16px 24px;
    }

    #live-chat h4:before {
        background: #1a8a34;
        border-radius: 50%;
        content: "";
        display: inline-block;
        height: 8px;
        margin: 0 8px 0 0;
        width: 8px;
    }

    #live-chat h4 {
        font-size: 12px;
    }

    #live-chat h5 {
        font-size: 10px;
    }

    #live-chat form {
        padding: 24px;
    }

    #live-chat input[type="text"] {
        border: 1px solid #ccc;
        border-radius: 3px;
        padding: 8px;
        outline: none;
        width: 234px;
    }

    .chat-message-counter {
        background: #e62727;
        border: 1px solid #fff;
        border-radius: 50%;
        display: none;
        font-size: 12px;
        font-weight: bold;
        height: 28px;
        left: 0;
        line-height: 28px;
        margin: -15px 0 0 -15px;
        position: absolute;
        text-align: center;
        top: 0;
        width: 28px;
    }

    .chat-close {
        background: #1b2126;
        border-radius: 50%;
        color: #fff;
        display: block;
        float: right;
        font-size: 10px;
        height: 16px;
        line-height: 16px;
        margin: 2px 0 0 0;
        text-align: center;
        width: 16px;
    }

    .chat {
        background: #fff;
    }

    .chat-history {
        height: 252px;
        padding: 8px 24px;
        overflow-y: scroll;
    }

    .chat-message {
        margin: 16px 0;
    }

    .chat-message img {
        border-radius: 50%;
        float: left;
    }

    .chat-message-content {
        margin-left: 56px;
    }

    .chat-time {
        float: right;
        font-size: 10px;
    }

    .chat-feedback {
        font-style: italic;
        margin: 0 0 0 80px;
    }
</style>


<div id="chatPosition">

    <div id="live-register">

        <header class="clearfix">

            <a href="#" class="chat-close">x</a>

            <h4>Please tell us who you are</h4>

            <span class="chat-message-counter">3</span>

        </header>

        <div class="chat">
            <fieldset>
                <input type="text" placeholder="Your name" id="registerName" autofocus>
                <input type="text" placeholder="Your email" id="registerEmail" autofocus>
                <input type="text" placeholder="Your phone" id="registerPhone" autofocus>
                <input type="button" id="btnRegister" name="" value="Register">
                <input type="hidden">
            </fieldset>
        </div> <!-- end register -->

    </div> <!-- end live-register -->

    <div id="live-chat">
        <header class="clearfix">
            <a href="#" class="chat-close">x</a>
            <h4>John Doe</h4>
            <span class="chat-message-counter">3</span>
        </header>
        <div class="chat">
            <div class="chat-history" id="chatContent">

            </div> <!-- end chat-history -->
            <p class="chat-feedback">Your partner is typing…</p>
            <fieldset>
                <input type="text" id="txtMessage" data-room="whatever" placeholder="Type your message…" autofocus>
                <input type="button" id="btnSend" data-room="whatever" value="Send">
            </fieldset>
        </div> <!-- end chat -->
    </div> <!-- end live-chat -->

</div>
<script>
    var socket = io("http://localhost:3000");

    $("#live-chat").hide();

    $("#btnRegister").click(function(){
        socket.emit("Client-send-register-data", {
            name: $("#registerName").val(),
            email: $("#registerEmail").val(),
            phone: $("#registerPhone").val()
        });
    });

    $("#chatPosition").on("click", "#btnSend", function(event){
        socket.emit("Client-send-message", {
            room: $(event.target).data("room"),
            text: $(event.target).prev().val()
        });
    });

    socket.on("Server-send-create-room-status", function(roomId){
        if(roomId){
            $("#live-register").hide(2000);
            $("#live-chat").show(1000, function(){
                var messageInput = $(this).find("input[type=\"text\"]");
                messageInput.attr("data-room", roomId).next().attr("data-room", roomId);
            });
        }
    });

    socket.on("Server-send-message-to-room", function(data){
        $("#chatContent").html("");
        data.map(function(item){
            $("#chatContent").append(item.author + ": " + item.text + "<br>");
        });
    });

    socket.on("Server-user-send-message-to-room", function(data){
        console.log(data);
    });

    (function() {
        $('#live-chat header').on('click', function() {

            $('.chat').slideToggle(300, 'swing');
            $('.chat-message-counter').fadeToggle(300, 'swing');

        });

        $('.chat-close').on('click', function(e) {

            e.preventDefault();
            $('#live-chat').fadeOut(300);

        });

    }) ();
</script>

