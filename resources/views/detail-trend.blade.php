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

    <section id="detail-trend" ng-controller="TrendController">
        <section class="section-header">
            <div class="container-fluid">
                <div class="container header">
                    <h1 class="heading dark">
                        <% trendDetail.title %>
                    </h1>
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

    <script src="{{ asset ("public/frontend/app/controllers/trend.js") }}"></script>

@endsection