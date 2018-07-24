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
            <div ng-repeat="image in trendImages">
                <img ng-src="{{ asset('storage/app/trends') }}<% '/' + trendDetail.slug + '/' + image %>" />
            </div>
            <article>
                <p class="paragraph" ng-bind-html="$sce.trustAsHtml(trendDetail.content)"></p>
            </article>
        </div>
    </section>

    <script src="{{ asset ("public/frontend/app/controllers/trend.js") }}"></script>

@endsection