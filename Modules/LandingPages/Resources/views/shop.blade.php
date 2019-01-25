<x-app-layout layout="landing" :isHeader1=true>
    <x-landing-pages.widgets.sub-header subTitle="Shop" subBreadcrume="Shop"/>
<div class="section-padding">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
            <div class="col">
                <x-landing-pages.widgets.shop-card productname="Casual Shoes" productImage="shop/01.jpg" productrating="0"  productprice="$15.00" />
            </div>
            <div class="col">
                <x-landing-pages.widgets.shop-card productname="Biker's Jacket" productImage="shop/02.jpg" productrating="3.5" productprice="$18.00" statusDetails="Sale!" statusColor="success" />
            </div>
            <div class="col">
                <x-landing-pages.widgets.shop-card productname="Knitted Shrug" productImage="shop/03.jpg" productrating="3.5"  productprice="$18.00" statusDetails="New" statusColor="primary" />
            </div>
            <div class="col">
                <x-landing-pages.widgets.shop-card productname="Blue Handbag" productImage="shop/04.jpg" productrating="0"  productprice="$55.00" />
            </div>
            <div class="col">
                <x-landing-pages.widgets.shop-card productname="Pink Sweater" productImage="shop/05.jpg" productrating="0"  productprice="$16.00" statusDetails="Sold" statusColor="warning" />
            </div>
            <div class="col">
                <x-landing-pages.widgets.shop-card productname="Pink Handbag" productImage="shop/06.jpg" productrating="0"  productprice="$42.00"  statusColor="success" />
            </div>
            <div class="col">
                <x-landing-pages.widgets.shop-card productname="Pink Handbag" productImage="shop/07.jpg" productrating="0"  productprice="$45.00" />
            </div>
            <div class="col">
                <x-landing-pages.widgets.shop-card productname="Pink Handbag" productImage="shop/08.jpg" productrating="0"  productprice="$45.00" statusDetails="Sale!" statusColor="success" />
            </div>
            <div class="col">
                <x-landing-pages.widgets.shop-card productname="Pink Handbag" productImage="shop/09.jpg" productrating="0"  productprice="$45.00"  statusColor="success" className="mb-lg-0" />
            </div>
            <div class="col">
                <x-landing-pages.widgets.shop-card productname="Pink Handbag" productImage="shop/10.jpg" productrating="0"  productprice="$18.00" statusDetails="Sale!" statusColor="success" className="mb-lg-0" />
            </div>
            <div class="col">
                <x-landing-pages.widgets.shop-card productname="Pink Handbag" productImage="shop/11.jpg" productrating="0"  productprice="$25.00"  statusColor="success" className=" mb-lg-0" />
            </div>
        </div>
    </div>
</div>
</x-app-layout>
