


@if(isset($partial))
    {{-- @include($__env->getRenderedContent()) --}}
@else
    @for($i = 0; $i < 5; $i++)
        @if($rating > $i)
        <x-landing-pages.widgets.rating-star rating=4 fill="true" />
        @else
        <x-landing-pages.widgets.rating-star />
        @endif
    @endfor
@endif
