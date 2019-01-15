<div class="card iq-filter-card">
    <div class="card-header border-bottom px-0 py-4 mx-4">
        <h4 class="list-main mb-0">{{ __('e-commerce.filters') }}</h4>
    </div>
    <div class="card-body">
        <a class="bg-transparent iq-custom-collapse w-100 d-flex justify-content-between pb-3" data-bs-toggle="collapse"
            href="#iq-product-filter-01" role="button" aria-expanded="true" aria-controls="iq-product-filter-01">
            <h5 class="mb-0">{{ __('e-commerce.categories') }}</h5>
            <i class="right-icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon-18" width="18" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </i>
        </a>
        <div class="collapse show" id="iq-product-filter-01">
            <div class="mt-2">
                <span>{{ __('e-commerce.price') }}</span>
                <div class="form-group mt-3 product-range">
                    <div class="range-slider" id="product-price-range"></div>
                </div>
                <div class="d-flex justify-content-between">
                    <small id="lower-value">$50</small>
                    <small id="upper-value">$2000</small>
                </div>
                <div class="product-ratings mt-2">
                    <h5 class="py-3 mb-0">
                        {{ __('e-commerce.avg_customer_review') }}
                    </h5>
                    <div>
                        <x-modules.e-commerce.widgets.filter-rating rating="5" id="01"
                            productchecked="true" />
                        <x-modules.e-commerce.widgets.filter-rating rating="4" id="02" />
                        <x-modules.e-commerce.widgets.filter-rating rating="3" id="03" />
                        <x-modules.e-commerce.widgets.filter-rating rating="2" id="04" />
                        <x-modules.e-commerce.widgets.filter-rating rating="1" id="05" />
                    </div>
                </div>
            </div>
        </div>
        <a class="bg-transparent d-flex justify-content-between iq-custom-collapse py-3" data-bs-toggle="collapse"
            href="#iq-product-filter-02" role="button" aria-expanded="true" aria-controls="iq-product-filter-02">
            <h5 class="mb-0">{{ __('e-commerce.type') }}</h5>
            <i class="right-icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon-18" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </i>
        </a>
        <div class="collapse show" id="iq-product-filter-02">
            <x-modules.e-commerce.widgets.filter-options uniquename="type" id="01"
                productname="{{ __('e-commerce.accessories') }}" productchecked="true" />
            <x-modules.e-commerce.widgets.filter-options uniquename="type" id="02"
                productname="{{ __('e-commerce.bag') }}" />
            <x-modules.e-commerce.widgets.filter-options uniquename="type" id="03" productname="Men's Fashion" />
            <x-modules.e-commerce.widgets.filter-options uniquename="type" id="04"
                productname="Women's Fashion" />
            <x-modules.e-commerce.widgets.filter-options uniquename="type" id="05"
                productname="{{ __('e-commerce.fashion') }}" />
        </div>
        <a class="bg-transparent d-flex justify-content-between iq-custom-collapse py-3" data-bs-toggle="collapse"
            href="#iq-product-filter-03" role="button" aria-expanded="true" aria-controls="iq-product-filter-03">
            <h5 class="mb-0">{{ __('e-commerce.discount') }}</h5>
            <i class="right-icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon-18" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </i>
        </a>
        <div class="collapse show" id="iq-product-filter-03">
            <x-modules.e-commerce.widgets.filter-options uniquename="discount" id="01" productname="80% Off" />
            <x-modules.e-commerce.widgets.filter-options uniquename="discount" id="02" productname="50% Off" />
            <x-modules.e-commerce.widgets.filter-options uniquename="discount" id="03"
                productname="40% Off" />
            <x-modules.e-commerce.widgets.filter-options uniquename="discount" id="04"
                productname="30% Off" />
            <x-modules.e-commerce.widgets.filter-options uniquename="discount" id="05"
                productname="20% Off" />
            <x-modules.e-commerce.widgets.filter-options uniquename="discount" id="06" productname="10% Off"
                productchecked="true" />
        </div>
        <a class="bg-transparent d-flex justify-content-between iq-custom-collapse pt-3" data-bs-toggle="collapse"
            href="#iq-product-filter-04" role="button" aria-expanded="true" aria-controls="iq-product-filter-04">
            <h5 class="mb-0">{{ __('e-commerce.sellers') }}</h5>
            <i class="right-icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon-18" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </i>
        </a>
        <div class="collapse show mt-3" id="iq-product-filter-04">
            <x-modules.e-commerce.widgets.filter-options uniquename="sellers" id="01" productname="Max" />
            <x-modules.e-commerce.widgets.filter-options uniquename="sellers" id="02" productname="Ajio" />
            <x-modules.e-commerce.widgets.filter-options uniquename="sellers" id="03" productname="Levi's" />
            <x-modules.e-commerce.widgets.filter-options uniquename="sellers" id="04" productname="Woodie" />
            <x-modules.e-commerce.widgets.filter-options uniquename="sellers" id="05" productname="Denim" />
        </div>
    </div>
</div>
