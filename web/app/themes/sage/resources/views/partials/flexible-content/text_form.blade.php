@php
    $title   = $content['title'];
    $text    = $content['text'];
    $button  = $content['button'];
    $contact = $content['show_card'];
    $formID  = $content['form_id'];
@endphp

<section class="section section--text-form">
    <div class="container">
        <div class="row justify-content-space-between">
            <div class="col-lg-6 col-xxl-5">
                <div class="text-form__intro">
                    @if ($title)
                        <h2 class="text-form__title" data-animate="fade-to-top">{{ $title }}</h2>
                    @endif

                    @if ($text)
                        <div data-animate="fade-to-top">
                            {!! $text !!}
                        </div>
                    @endif

                    @if ($button && $button['url'])
                        <div class="button-wrapper" data-animate="fade-to-top">
                            <a href="{{ $button['url'] }}" class="btn btn--secondary" target="{{ $button['target'] ? $button['target'] : '_self' }}" title="{{ $button['title'] }}">{{ $button['title'] }}</a>
                        </div>
                    @endif

                    @if ($contact)
                        @php
                            $image = get_field('contact_image', 'options');
                            $name  = get_field('contact_name', 'options');
                            $phone = get_field('contact_phonenumber', 'options');
                            $email = get_field('contact_email', 'options');
                        @endphp

                        <div class="contact__card" data-animate="fade-to-top">
                            @if ($image)
                                <div class="contact__image">
                                    @include('components.picture', ['imageID' => $image])
                                </div>
                            @endif

                            <div class="contact__content">
                                @if ($name)
                                    <div>{{ $name }}</div>
                                @endif
    
                                @if ($phone)
                                    <a href="tel:{{ $phone }}" class="contact__link" target="_blank" title="{{ $phone }}">{{ $phone }}</a>
                                @endif
    
                                @if ($email)
                                    <a href="mailto:{{ $email }}" class="contact__link d-none d-md-block" target="_blank" title="{{ $email }}">{{ $email }}</a>
                                @endif
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            @if ($formID)
                <div class="offset-lg-1 col-lg-5 col-xxl-6" data-animate="fade-to-top" data-animate-delay=".3">
                    {!! do_shortcode('[gravityform id="' . $formID . '" title="false" ajax="true"]') !!}
                </div>
            @endif
        </div>
    </div>

    <div id="text_form_scroll"></div>
</section>