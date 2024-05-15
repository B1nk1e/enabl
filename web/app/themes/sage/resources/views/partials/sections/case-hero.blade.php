@php
    $text        = get_field('case_intro');
    $website     = get_field('case_website');
    $label       = get_field('case_label');
    $archiveLink = get_field('cases_url', 'options');
@endphp

<section class="section section--case-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-11">
                @if ($archiveLink || $label)
                    <div class="button-wrapper">
                        @if ($archiveLink)
                            <a href="{!! $archiveLink !!}" class="label label--back" title="{{ __('Back to cases', 'sage') }}">
                                <i class="icon-arrow-left"></i> {{ __('Back to cases', 'sage') }}
                            </a>
                        @endif

                        @if ($label)
                            <label class="label">{!! $label !!}</label>
                        @endif
                    </div>
                @endif

                <h1 data-animate="fade-to-top">{{ the_title() }}</h1>
            </div>

            @if ($text)
                <div class="col-sm-9 col-lg-6" data-animate="fade-to-top" data-animate-delay=".3">
                    {!! $text !!}
                </div>
            @endif
        </div>

        @if ($website)
            <a href="{{ $website }}" class="case-hero__btn" target="_blank" title="{{ __('View website', 'sage') }}">
                <span class="case-hero__btn-inner" data-animate="fade-to-left" data-animate-delay=".3">
                    <svg viewBox="0 0 400 400">
                        <defs>
                            <path id="circlePath" d="M 200, 200
                                    m -150, 0
                                    a 150,150 0 1,1 300,0
                                    a 150,150 0 1,1 -300,0" />
                        </defs>

                        <text>
                            <textPath xlink:href="#circlePath">
                                @foreach (range(1, 3) as $a)
                                    {{ __('View website - ', 'sage') }}
                                @endforeach
                            </textPath>
                        </text>
                    </svg>
                </span>
            </a>
        @endif
    </div>
</section>
