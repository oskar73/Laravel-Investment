@props(['productimage','productname','productprice'])
<div class="card 1 iq-product-custom-card">
    <div class="iq-product-hover-img position-relative">
        <img src="{{asset('modules/e-commerce/images/')}}/{{$productimage}}" alt="product-details" class="img-fluid iq-product-img">
    </div>
    <div class="card-body">
        <div class="d-flex flex-column">
            <a href="{{route('e-commerce.product-detail')}}" class="h5 mb-0 iq-product-detail">{{$productname}}</a>
            <span class="text-muted">{{$productprice}}</span>
        </div>
    </div>
</div>
