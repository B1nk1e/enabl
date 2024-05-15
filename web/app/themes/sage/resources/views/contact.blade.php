{{--
  Template Name: Contact
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php(the_post())
        @include('partials.sections.contact')
        @include('partials.flexible-content')
    @endwhile
@endsection
