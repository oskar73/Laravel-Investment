<x-app-layout layout="social" :assets="$assets ?? []" :isBanner="false" title="Friend Request" isSweetalert="true" >
    <div class="row">
        <div class="col-sm-12">
            <div class="card friend-request-card">
                <div class="card-header d-flex justify-content-between p-4 border-bottom">
                    <div class="header-title">
                        <h4 class="card-title">Friend Request</h4>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="request-list list-inline m-0 p-0">
                        <x-modules.social.widgets.friend-request friendrequestimg="01.png" friendrequest="true" friendrequesttitle="Jaques Amole" friendrequestdec="40  friends" classname="border-bottom mb-3 pb-3"/>
                        <x-modules.social.widgets.friend-request friendrequestimg="02.png" friendrequest="true" friendrequesttitle="Lucy Tania" friendrequestdec="12  friends" classname="border-bottom mb-3 pb-3"/>
                        <x-modules.social.widgets.friend-request friendrequestimg="03.png" friendrequest="true" friendrequesttitle="Val Adictorian" friendrequestdec="0  friends" classname="border-bottom mb-3 pb-3"/>
                        <x-modules.social.widgets.friend-request friendrequestimg="04.png" friendrequest="true" friendrequesttitle="Manny Petty" friendrequestdec="3  friends" classname="border-bottom mb-3 pb-3"/>
                        <x-modules.social.widgets.friend-request friendrequestimg="05.png" friendrequest="true" friendrequesttitle="Marsha Mello" friendrequestdec="15  friends" classname="border-bottom mb-3 pb-3"/>
                        <x-modules.social.widgets.friend-request friendrequestimg="06.png" friendrequest="true" friendrequesttitle="Caire Innet" friendrequestdec="8  friends" classname="border-bottom mb-3 pb-3"/>
                        <x-modules.social.widgets.friend-request friendrequestimg="07.png" friendrequest="true" friendrequesttitle="Gio Metric" friendrequestdec="10  friends" classname="border-bottom mb-3 pb-3"/>
                        <x-modules.social.widgets.friend-request friendrequestimg="08.png" friendrequest="true" friendrequesttitle="Chris P. Cream" friendrequestdec="18  friends" classname="border-bottom mb-3 pb-3"/>
                        <x-modules.social.widgets.friend-request friendrequestimg="09.png" friendrequest="true" friendrequesttitle="Paul Misunda" friendrequestdec="6  friends" classname="border-bottom mb-3 pb-3"/>
                        <x-modules.social.widgets.friend-request friendrequestimg="10.png" friendrequest="true" friendrequesttitle="Reanne Carnation" friendrequestdec="12  friends" classname="border-bottom mb-3 pb-3"/>
                        <li class="d-block text-center mb-0 pb-0">
                            <a href="#" class="btn">View More Request</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card friend-request-card">
                <div class="card-header d-flex justify-content-between p-4 border-bottom">
                    <div class="header-title">
                        <h4 class="card-title">People You May Know</h4>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="request-list m-0 p-0">
                        <x-modules.social.widgets.friend-request friendrequestimg="01.png" newfriendrequest="true" friendrequesttitle="Jen Youfelct" friendrequestdec="4 friends"   classname="border-bottom mb-3 pb-3"/>
                        <x-modules.social.widgets.friend-request friendrequestimg="02.png" newfriendrequest="true" friendrequesttitle="Cooke Edoh" friendrequestdec="20  friends"  classname="border-bottom mb-3 pb-3"/>
                        <x-modules.social.widgets.friend-request friendrequestimg="03.png" newfriendrequest="true" friendrequesttitle="Earl E. Riser" friendrequestdec="30  friends"  classname="border-bottom mb-3 pb-3"/>
                        <x-modules.social.widgets.friend-request friendrequestimg="04.png" newfriendrequest="true" friendrequesttitle="Cliff Diver" friendrequestdec="5  friends"  classname="border-bottom mb-3 pb-3"/>
                        <x-modules.social.widgets.friend-request friendrequestimg="05.png" newfriendrequest="true" friendrequesttitle="Cliff Diver" friendrequestdec="15  friends"  classname="border-bottom mb-3 pb-3"/>
                        <x-modules.social.widgets.friend-request friendrequestimg="06.png" newfriendrequest="true" friendrequesttitle="Vinny Gret" friendrequestdec="50  friends"  classname="border-bottom mb-3 pb-3"/>
                        <x-modules.social.widgets.friend-request friendrequestimg="07.png" newfriendrequest="true" friendrequesttitle="Paul Samic" friendrequestdec="6  friends"  classname="border-bottom mb-3 pb-3"/>
                        <x-modules.social.widgets.friend-request friendrequestimg="08.png" newfriendrequest="true" friendrequesttitle="Gustav Wind" friendrequestdec="14  friends"  classname="border-bottom mb-3 pb-3"/>
                        <x-modules.social.widgets.friend-request friendrequestimg="09.png" newfriendrequest="true" friendrequesttitle="Minnie Strone" friendrequestdec="16  friends"  classname="border-bottom mb-3 pb-3"/>
                        <x-modules.social.widgets.friend-request friendrequestimg="10.png" newfriendrequest="true" friendrequesttitle="Ray Volver" friendrequestdec="9  friends"  classname="border-bottom mb-3 pb-3"/>
                        <x-modules.social.widgets.friend-request friendrequestimg="11.png" newfriendrequest="true" friendrequesttitle="Jen Trification" friendrequestdec="42  friends"  classname=""/>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
