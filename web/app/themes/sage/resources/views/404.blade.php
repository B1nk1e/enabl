@extends('layouts.app')

@section('content')
    <section class="section section--error">
        <div class="container">
            <h1>Houston we've got a problem!</h1>
            <a href="/" class="btn">{{ __('Back to home', 'sage') }}</a>
        </div>
    </section>
@endsection
