@extends('layouts.app')

@section('content')
    @while(have_posts()) @php(the_post())
        @include('partials.sections.service-hero')
        @include('partials.flexible-content')
        @include('partials.sections.single-footer')
    @endwhile
@endsection
