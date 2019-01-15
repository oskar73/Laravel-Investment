<x-app-layout layout="e-commerce" :assets="$assets ?? []" title="Wishlist" isSweetalert="true">
    <div>
        <h4 class="mb-0">{{__('e-commerce.your_wishlist')}}</h4>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-3 mt-4 ">
        <x-modules.e-commerce.widgets.wishlist-card images="wishlist/4.png" itemsname="{{__('e-commerce.headphones')}}" ratings="4.5" productprice="$56.00" productoffer="15% Off" productliked="412" />
        <x-modules.e-commerce.widgets.wishlist-card images="wishlist/6.png" itemsname="{{__('e-commerce.jacket')}}" ratings="3.5" productprice="$80.00" productoffer="10% Off" productliked="865" />
        <x-modules.e-commerce.widgets.wishlist-card images="wishlist/5.png" itemsname="{{__('e-commerce.leather_bag')}}" ratings="4.2" productprice="$10.00" productoffer="50% Off" productliked="384" />
        <x-modules.e-commerce.widgets.wishlist-card images="wishlist/8.png" itemsname="{{__('e-commerce.sweatshirt')}}" ratings="4.5" productprice="$56.00" productoffer="15% Off" productliked="412"/>
        <x-modules.e-commerce.widgets.wishlist-card images="wishlist/1.png" itemsname="{{__('e-commerce.hand_bag')}}" ratings="3.5" productprice="$80.00" productoffer="10% Off" productliked="865"/>
        <x-modules.e-commerce.widgets.wishlist-card images="wishlist/3.png" itemsname="{{__('e-commerce.pencil_heels')}}" ratings="4.2" productprice="$10.00" productoffer="50% Off" productliked="384"/>
        <x-modules.e-commerce.widgets.wishlist-card images="wishlist/2.png" itemsname="{{__('e-commerce.shoee')}}" ratings="4.5" productprice="$56.00" productoffer="15% Off" productliked="412"/>
        <x-modules.e-commerce.widgets.wishlist-card images="wishlist/9.png" itemsname="{{__('e-commerce.shrug')}}" ratings="3.5" productprice="$80.00" productoffer="10% Off" productliked="865"/>
        <x-modules.e-commerce.widgets.wishlist-card images="wishlist/7.png" itemsname="{{__('e-commerce.fancy_bag')}}" ratings="4.2" productprice="$10.00" productoffer="50% Off" productliked="384"/>
    </div>
    <x-share-offcanvas />
</x-app-layout>
