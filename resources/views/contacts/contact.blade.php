@extends('layouts.master')

@section('content')
    @include('pages.navbar')
    <!-- start hero -->
    <section id="hero">
        <div class="inner-banner" style="background-image:url(assets/images/banner-contactus.jpg)">
            <div class="container">
                <h3 class="title">Oreo <br><big><strong>Contact Us</strong></big></h3>
            </div>
        </div>
    </section>

    @include('contacts.partners')
    @include('pages.footer')
    @endsection