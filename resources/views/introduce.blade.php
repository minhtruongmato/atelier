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

    <section id="about">
        <section class="cover">
            <div class="mask">
                <img src="https://images.unsplash.com/photo-1532275131641-b10b20ba84af?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=cc74bf344f9b65c3e30b2c86f7368139&auto=format&fit=crop&w=1350&q=80" alt="about cover">

                <div class="overlay"></div>
                <div class="container">
                    <h1 class="heading light">
                        Về chúng tôi
                    </h1>
                </div>
            </div>
        </section>

        <section class="section-header">
            <div class="container-fluid">
                <div class="container header">

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

        <section class="section-body">
            <div class="container">
                <div class="row">
                    <div class="left col-md-8 col-xs-12">
                        <div class="wrapper" id="overview">
                            <div class="head">
                                <h2 class="post-heading dark bigger">
                                    Tổng quan
                                </h2>
                            </div>
                            <div class="body">
                                <article>
                                    <p class="paragraph">Integer fermentum quam dapibus est placerat, venenatis condimentum libero tristique. Curabitur vel dapibus quam. Morbi id enim facilisis, ultrices neque non, auctor ligula. Sed dignissim nunc non tellus suscipit, et molestie mi posuere. Aliquam tempus accumsan neque, et tempor massa commodo volutpat. Ut vitae erat ac metus maximus interdum ut vitae arcu. Donec sagittis, tortor vel mollis ullamcorper, diam metus malesuada libero, et viverra lacus sapien eu ipsum. Maecenas aliquet cursus ex at hendrerit. Duis eu pretium sem. Sed aliquam, metus eget cursus molestie, tellus ex ullamcorper leo, eu faucibus velit justo quis sapien. Phasellus pulvinar mi at neque suscipit, sit amet vulputate nisl luctus. Aenean eget massa gravida, tincidunt velit ac, sagittis nisl.</p>

                                    <img src="https://images.unsplash.com/photo-1532275131641-b10b20ba84af?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=cc74bf344f9b65c3e30b2c86f7368139&auto=format&fit=crop&w=1350&q=80" alt="about cover">
                                    <small>Image caption</small>

                                    <p class="paragraph">In varius id ipsum eget malesuada. Sed euismod et nulla vel suscipit. Fusce in consectetur nisi, et porttitor nunc. Donec sit amet congue quam, ac elementum libero. Maecenas eu libero justo. Pellentesque fermentum condimentum tellus at aliquet. Maecenas eu nisl imperdiet eros mattis scelerisque vel et sem. Pellentesque pulvinar urna lorem, ut accumsan odio faucibus vel. Nam a purus ut massa semper condimentum.</p>
                                </article>
                            </div>
                        </div>

                        <div class="wrapper" id="visionAndMission">
                            <div class="head">
                                <h2 class="post-heading dark bigger">
                                    Tầm nhìn & Sứ mệnh
                                </h2>
                            </div>
                            <div class="body">
                                <article>
                                    <p class="paragraph">Integer fermentum quam dapibus est placerat, venenatis condimentum libero tristique. Curabitur vel dapibus quam. Morbi id enim facilisis, ultrices neque non, auctor ligula. Sed dignissim nunc non tellus suscipit, et molestie mi posuere. Aliquam tempus accumsan neque, et tempor massa commodo volutpat. Ut vitae erat ac metus maximus interdum ut vitae arcu. Donec sagittis, tortor vel mollis ullamcorper, diam metus malesuada libero, et viverra lacus sapien eu ipsum. Maecenas aliquet cursus ex at hendrerit. Duis eu pretium sem. Sed aliquam, metus eget cursus molestie, tellus ex ullamcorper leo, eu faucibus velit justo quis sapien. Phasellus pulvinar mi at neque suscipit, sit amet vulputate nisl luctus. Aenean eget massa gravida, tincidunt velit ac, sagittis nisl.</p>
                                    <p class="paragraph">In varius id ipsum eget malesuada. Sed euismod et nulla vel suscipit. Fusce in consectetur nisi, et porttitor nunc. Donec sit amet congue quam, ac elementum libero. Maecenas eu libero justo. Pellentesque fermentum condimentum tellus at aliquet. Maecenas eu nisl imperdiet eros mattis scelerisque vel et sem. Pellentesque pulvinar urna lorem, ut accumsan odio faucibus vel. Nam a purus ut massa semper condimentum.</p>
                                </article>
                            </div>
                        </div>

                        <div class="wrapper" id="ourCustomer">
                            <div class="head">
                                <h2 class="post-heading dark bigger">
                                    Khách hàng của chúng tôi
                                </h2>
                            </div>
                            <div class="body">
                                <article>
                                    <p class="paragraph">Integer fermentum quam dapibus est placerat, venenatis condimentum libero tristique. Curabitur vel dapibus quam. Morbi id enim facilisis, ultrices neque non, auctor ligula. Sed dignissim nunc non tellus suscipit, et molestie mi posuere. Aliquam tempus accumsan neque, et tempor massa commodo volutpat. Ut vitae erat ac metus maximus interdum ut vitae arcu. Donec sagittis, tortor vel mollis ullamcorper, diam metus malesuada libero, et viverra lacus sapien eu ipsum. Maecenas aliquet cursus ex at hendrerit. Duis eu pretium sem. Sed aliquam, metus eget cursus molestie, tellus ex ullamcorper leo, eu faucibus velit justo quis sapien. Phasellus pulvinar mi at neque suscipit, sit amet vulputate nisl luctus. Aenean eget massa gravida, tincidunt velit ac, sagittis nisl.</p>
                                    <p class="paragraph">In varius id ipsum eget malesuada. Sed euismod et nulla vel suscipit. Fusce in consectetur nisi, et porttitor nunc. Donec sit amet congue quam, ac elementum libero. Maecenas eu libero justo. Pellentesque fermentum condimentum tellus at aliquet. Maecenas eu nisl imperdiet eros mattis scelerisque vel et sem. Pellentesque pulvinar urna lorem, ut accumsan odio faucibus vel. Nam a purus ut massa semper condimentum.</p>
                                </article>
                            </div>
                        </div>
                    </div>

                    <div class="right col-md-4 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Về chúng tôi
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="#overview" target="_self">
                                        Tổng quan
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#visionAndMission" target="_self">
                                        Tầm nhìn & Sứ mệnh
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#ourCustomer" target="_self">
                                        Khách hàng của chúng tôi
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <script src="{{ asset ("public/frontend/app/controllers/introduce.js") }}"></script>
    <script>
        $(window).scroll(function(){

            console.log($(window).scrollTop());

            var windowWidth = $(window).width();

            if(windowWidth > 992){
                if($(window).scrollTop() > 130){
                    $('.section-body .right').addClass('active')
                }
                if($(window).scrollTop() < 130){
                    $('.section-body .right').removeClass('active')
                }
            }
        })

        $(document).ready(function(){
            // Add smooth scrolling to all links
            $(".panel a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>
@endsection