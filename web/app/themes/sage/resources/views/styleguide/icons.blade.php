@php
    $icons = [
        'arrow-left',
        'arrow-right',
        'arrow-left-circle',
        'arrow-right-circle',
        'chevron-left',
        'chevron-up',
        'chevron-down',
        'chevron-right',
        'linkedin',
        'instagram',
        'envelop',
        'star',
    ]
@endphp

<section class="section section--icons">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title">System icons</h2>
        </div>
        <div class="section__content">
            <div class="row">
                @foreach($icons as $icon)
                    <div class="col-auto">
                        <div class="card">
                            <i class="icon-{{ $icon }}"></i>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
