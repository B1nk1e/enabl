@php
    $vacancyTitle = get_field('vacancy_form_title', 'options');
    $vacancyText = get_field('vacancy_form_text', 'options');
    $vacancyFormID = get_field('vacancy_form', 'options');
@endphp

@if($vacancyFormID)
    <section class="section section--vacancy-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 col-fhd-6">
                    @if($vacancyTitle || $vacancyText)
                    <div class="vacancy-form__content">
                            @if($vacancyTitle)
                                <h3 class="vacancy-form__title" data-animate="fade-to-top">{{ $vacancyTitle }}</h3>
                            @endif

                            @if($vacancyText)
                                <div class="vacancy-form__text" data-animate="fade-to-top" data-animate-delay=".15">{!! $vacancyText !!}</div>
                            @endif
                        </div>
                    @endif

                    <div data-animate="fade-to-top" data-animate-delay=".3">{!! do_shortcode('[gravityform id="' . $vacancyFormID . '" title="false" ajax="true"]') !!}</div>
                </div>
            </div>
        </div>
    </section>
@endif