@extends('layouts.master')

@section('content')
    @include('pages.navbar')
    <section id="hero">
        <div class="inner-banner" style="background-image:url(assets/images/banner-blog.jpg)">
            <div class="container">
                <h3 class="title">Our <br><big><strong>Blog</strong></big></h3>
            </div>
        </div>
    </section>
    @include('blogs.infodetails')

    @include('pages.footer')
    @endsection