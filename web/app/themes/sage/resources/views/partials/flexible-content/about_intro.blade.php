@php
    $heroLabel    = $content['hero_label'];
    $heroTitle    = $content['hero_title'];
    $heroText     = $content['hero_text'];
    $heroPointers = $content['hero_pointers'];

    $introTitle      = $content['intro_title'];
    $introText       = $content['intro_text'];
    $introImageLeft  = $content['intro_image_left'];
    $introImageRight = $content['intro_image_right'];

    $stepsLabel = $content['steps_label'];
    $stepsTitle = $content['steps_title'];
    $steps      = $content['steps'];
    $images     = $content['image_slider'];
@endphp

@include('partials.sections.about-hero')
@include('partials.sections.about-intro')
@include('partials.sections.about-steps')