@extends('layouts.app')

@section('content')
    @include('partials.sections.blog-hero')
    @include('partials.flexible-content')

    @if (get_post_type() == 'post')
        @include('partials.sections.blog-footer')
    @endif
@endsection
