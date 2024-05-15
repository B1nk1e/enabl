{{--
  Template Name: Cases overview
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php(the_post())
        @include('partials.sections.cases-overview')
        @include('partials.flexible-content')
    @endwhile
@endsection
