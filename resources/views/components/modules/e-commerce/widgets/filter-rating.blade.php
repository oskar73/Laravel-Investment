@props(['id','productchecked'=>false,'rating'])
<div class="form-check d-flex align-items-center">
    <input type="checkbox" class="form-check-input" id="Check-{{$id}}" {{$productchecked ? 'checked':''}} />
    <label class="ms-2 d-flex align-items-center w-100" for="Check-{{$id}}">
        @for ($i = 1; $i <= 5; $i++)
            @if($rating >= $i)
                <x-modules.e-commerce.widgets.rating-star fill=1 />
            @else
                <x-modules.e-commerce.widgets.rating-star fill=0 />
            @endif
        @endfor
        <span class="ms-2">& Up</span>
    </label>
</div>
