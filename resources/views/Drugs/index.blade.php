@extends('layouts.dashboard')

@section('content')


    @include('Dashboards.navbar')

    @include('Dashboards.sidebar')

    @include('Drugs.info')

    @endsection