@extends('layouts.index_layout')
@section('content')
<style type="text/css">
    .feature_section .box:hover {
        background-color: #99eeff;
        color: blue;
    }

    .slider_section {
        background: #585481 !important;
    }

    .feature_section .box .img-box img {
        width: 90px;
    }
</style>
<script src="https://m2.medfin.in/js/custom/home_js.js?ver="></script>
<!-- feature section -->

<section class="feature_section layout_padding">
    <div class="container">
        <div class="heading_container text-primary">
            <h3 class="text-uppercase">Our Services
            </h3>
        </div>
        <hr>
        <div class="row _main_categories">

        </div>
        <div class="btn-box">
            <a class="view_more_btn" href="javascript:void(0);">
                View All
            </a>
        </div>
    </div>
</section>

<!-- end feature section -->

@stop