@extends('layouts.app')

@section('content')
    @while(have_posts()) @php(the_post())
        @include('partials.sections.case-hero')
        @include('partials.flexible-content')
        @include('partials.sections.single-footer')
    @endwhile
@endsection
