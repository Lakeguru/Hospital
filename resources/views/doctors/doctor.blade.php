@extends('layouts.master')

@section('content')
    @include('pages.navbar')
    <!-- start hero -->
    <section id="hero">
        <div class="inner-banner" style="background-image:url(assets/images/banner-doctors.jpg)">
            <div class="container">
                <h3 class="title">Our <br><big><strong>Specialist</strong></big></h3>
            </div>
        </div>
    </section>

    @include('doctors.team')
    @include('pages.footer')
    @endsection