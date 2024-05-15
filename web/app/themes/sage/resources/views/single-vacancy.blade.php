@extends('layouts.app')

@section('content')
    @include('partials.sections.blog-hero')
    @include('partials.flexible-content')
    @include('partials.flexible-content.logo_carrousel' , [ 'title' => __('Come work with us work on really awesome brands!', 'sage') ])
    @include('partials.sections.vacancy-form')
@endsection
