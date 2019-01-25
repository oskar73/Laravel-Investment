<x-app-layout layout="e-commerce" :assets="$assets ?? []" title='Category List'>
    <div class=" mb-4">
        <div>
            <h4 class="mb-0">{{__('e-commerce.cat')}}</h4>
        </div>
        <div>
            <ul class="nav iq-nav-category mt-3 mb-3 justify-content-start bg-transparent" id="pills-tab" role="tablist">
                <li class="nav-item me-3" role="presentation">
                    <a class="nav-link active" id="pills-no-1-tab" data-bs-toggle="pill" href=""
                    data-bs-target="#pills-no-1" role="tab" aria-controls="pills-no-1"
                    aria-selected="true">{{__('e-commerce.all')}}</a>
                </li>
                <li class="nav-item me-3" role="presentation">
                    <a class="nav-link" id="pills-no-2-tab" data-bs-toggle="pill" data-bs-target="#pills-no-2" href=""
                    role="tab" aria-controls="pills-no-2" aria-selected="false">{{__('e-commerce.popu')}}</a>
                </li>
                <li class="nav-item me-3" role="presentation">
                    <a class="nav-link" id="pills-no-3-tab" data-bs-toggle="pill" data-bs-target="#pills-no-3" href=""
                    role="tab" aria-controls="pills-no-3" aria-selected="false">{{__('e-commerce.latest')}}</a>
                </li>
            </ul>
        </div>
        <div class="tab-content iq-tab-fade-up mt-3" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-no-1" role="tabpanel"
                aria-labelledby="pills-no-1">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mt-4">
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.shoe')}}" productimage="product/02.png"  productprice="{{__('e-commerce.qty')}} 5458"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.biker’s_jacket')}}" productimage="product/04.png"  productprice="{{__('e-commerce.qty')}} 6542" />
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.knit_shrug')}}" productimage="product/05.png"  productprice="{{__('e-commerce.qty')}} 3265" />
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.blue_hand')}}" productimage="product/06.png"  productprice="{{__('e-commerce.qty')}} 1546" />
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.black_sweatshirt')}}" productimage="product/05.png"  productprice="{{__('e-commerce.qty')}} 3265"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.pink_hand')}}" productimage="product/10.png"  productprice="{{__('e-commerce.qty')}} 365"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.sweater')}}" productimage="product/07.png"  productprice="{{__('e-commerce.qty')}} 500"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.brown_hand')}}" productimage="product/09.png"  productprice="{{__('e-commerce.qty')}} 4623"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.brown_hand')}}" productimage="product/09.png"  productprice="{{__('e-commerce.qty')}} 4623"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.sweater')}}" productimage="product/07.png"  productprice="{{__('e-commerce.qty')}} 500"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.shoe')}}" productimage="product/02.png"  productprice="{{__('e-commerce.qty')}} 5458 "/>
                    </div>
                    <div class="col">
                    <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.black_sweatshirt')}}" productimage="product/05.png"  productprice="{{__('e-commerce.qty')}} 3265"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.biker’s_jacket')}}" productimage="product/04.png"  productprice="{{__('e-commerce.qty')}} 6542"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.pink_hand')}}" productimage="product/10.png"  productprice="{{__('e-commerce.qty')}} 365"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.blue_hand')}}" productimage="product/06.png"  productprice="{{__('e-commerce.qty')}} 1546"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.brown_hand')}}" productimage="product/09.png"  productprice="{{__('e-commerce.qty')}} 4623"/>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-no-2" role="tabpanel" aria-labelledby="pills-no-2">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mt-4">
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.shoe')}}" productimage="product/02.png"  productprice="{{__('e-commerce.qty')}} 5458"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.biker’s_jacket')}}" productimage="product/04.png"  productprice="{{__('e-commerce.qty')}} 6542" />
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.knit_shrug')}}" productimage="product/05.png"  productprice="{{__('e-commerce.qty')}} 3265" />
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.blue_hand')}}" productimage="product/06.png"  productprice="{{__('e-commerce.qty')}} 1546" />
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.black_sweatshirt')}}" productimage="product/05.png"  productprice="{{__('e-commerce.qty')}} 3265"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.pink_hand')}}" productimage="product/10.png"  productprice="{{__('e-commerce.qty')}} 365"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.sweater')}}" productimage="product/07.png"  productprice="{{__('e-commerce.qty')}} 500"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.brown_hand')}}" productimage="product/09.png"  productprice="{{__('e-commerce.qty')}} 4623"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.brown_hand')}}" productimage="product/09.png"  productprice="{{__('e-commerce.qty')}} 4623"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.sweater')}}" productimage="product/07.png"  productprice="{{__('e-commerce.qty')}} 500"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.shoe')}}" productimage="product/02.png"  productprice="{{__('e-commerce.qty')}} 5458 "/>
                    </div>
                    <div class="col">
                    <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.black_sweatshirt')}}" productimage="product/05.png"  productprice="{{__('e-commerce.qty')}} 3265"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.biker’s_jacket')}}" productimage="product/04.png"  productprice="{{__('e-commerce.qty')}} 6542"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.pink_hand')}}" productimage="product/10.png"  productprice="{{__('e-commerce.qty')}} 365"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.blue_hand')}}" productimage="product/06.png"  productprice="{{__('e-commerce.qty')}} 1546"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.brown_hand')}}" productimage="product/09.png"  productprice="{{__('e-commerce.qty')}} 4623"/>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-no-3" role="tabpanel" aria-labelledby="pills-no-3">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mt-4">
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.shoe')}}" productimage="product/02.png"  productprice="{{__('e-commerce.qty')}} 5458"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.biker’s_jacket')}}" productimage="product/04.png"  productprice="{{__('e-commerce.qty')}} 6542" />
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.knit_shrug')}}" productimage="product/05.png"  productprice="{{__('e-commerce.qty')}} 3265" />
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.blue_hand')}}" productimage="product/06.png"  productprice="{{__('e-commerce.qty')}} 1546" />
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.black_sweatshirt')}}" productimage="product/05.png"  productprice="{{__('e-commerce.qty')}} 3265"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.pink_hand')}}" productimage="product/10.png"  productprice="{{__('e-commerce.qty')}} 365"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.sweater')}}" productimage="product/07.png"  productprice="{{__('e-commerce.qty')}} 500"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.brown_hand')}}" productimage="product/09.png"  productprice="{{__('e-commerce.qty')}} 4623"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.brown_hand')}}" productimage="product/09.png"  productprice="{{__('e-commerce.qty')}} 4623"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.sweater')}}" productimage="product/07.png"  productprice="{{__('e-commerce.qty')}} 500"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.shoe')}}" productimage="product/02.png"  productprice="{{__('e-commerce.qty')}} 5458 "/>
                    </div>
                    <div class="col">
                    <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.black_sweatshirt')}}" productimage="product/05.png"  productprice="{{__('e-commerce.qty')}} 3265"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.biker’s_jacket')}}" productimage="product/04.png"  productprice="{{__('e-commerce.qty')}} 6542"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.pink_hand')}}" productimage="product/10.png"  productprice="{{__('e-commerce.qty')}} 365"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.blue_hand')}}" productimage="product/06.png"  productprice="{{__('e-commerce.qty')}} 1546"/>
                    </div>
                    <div class="col">
                        <x-modules.e-commerce.widgets.category-card productname="{{__('e-commerce.brown_hand')}}" productimage="product/09.png"  productprice="{{__('e-commerce.qty')}} 4623"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="javascript:void(0);" class="btn btn-primary">{{__('e-commerce.load_more')}}</a>
        </div>
    </div>
</x-app-layout>
