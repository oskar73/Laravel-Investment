<x-app-layout :assets="$assets ?? []" title='Gallery Hover' :isBanner="true">

      <div class="row">
         <div class="col-lg-12">
            <div class="card card-block card-stretch card-height">
               <div class="card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title mb-0">Hover Effects</h4>
                  </div>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-xl-3 col-lg-4 col-md-6 grid-m">
                        <div class="hover-effects">
                           <a href="#">
                              <img src="{{asset('images/hover-effects/01.jpg')}}" class="img-fluid rounded effect-1"
                                 alt="" />
                           </a>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 grid-m">
                        <div class="hover-effects">
                           <a href="#">
                              <img src="{{asset('images/hover-effects/02.jpg')}}" class="img-fluid rounded effect-2"
                                 alt="" />
                           </a>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 grid-m">
                        <div class="hover-effects">
                           <a href="#">
                              <img src="{{asset('images/hover-effects/03.jpg')}}" class="img-fluid rounded effect-3"
                                 alt="" />
                           </a>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 grid-m">
                        <div class="hover-effects">
                           <a href="#">
                              <img src="{{asset('images/hover-effects/04.jpg')}}" class="img-fluid rounded effect-4"
                                 alt="" />
                           </a>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 grid-m">
                        <div class="hover-effects">
                           <a href="#">
                              <img src="{{asset('images/hover-effects/05.jpg')}}" class="img-fluid rounded" alt="" />
                           </a>
                           <div class="ovrlay-1-a"></div>
                           <div class="ovrlay-1-b"></div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 grid-m">
                        <div class="hover-effects">
                           <a href="#">
                              <img src="{{asset('images/hover-effects/06.jpg')}}" class="img-fluid rounded" alt="" />
                           </a>
                           <div class="ovrlay-2-a"></div>
                           <div class="ovrlay-2-b"></div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 grid-m">
                        <div class="hover-effects">
                           <a href="#">
                              <img src="{{asset('images/hover-effects/07.jpg')}}" class="img-fluid rounded" alt="" />
                           </a>
                           <div class="ovrlay-3-a"></div>
                           <div class="ovrlay-3-b"></div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 grid-m">
                        <div class="hover-effects">
                           <a href="#">
                              <img src="{{asset('images/hover-effects/08.jpg')}}" class="img-fluid rounded" alt="" />
                           </a>
                           <div class="ovrlay-4-a"></div>
                           <div class="ovrlay-4-b"></div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 grid-m">
                        <div class="hover-effects">
                           <img src="{{asset('images/hover-effects/09.jpg')}}" class="img-fluid rounded" alt="" />
                           <div class="ovrlay-5">
                              <h4 class="mt-4 mb-2">Lorem Ipsum</h4>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                 been the industry's standard
                                 dummy text.
                              </p>
                              <a href="#" class="btn btn-primary mb-3">Read More</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 grid-m">
                        <div class="hover-effects">
                           <img src="{{asset('images/hover-effects/10.jpg')}}" class="img-fluid rounded" alt="" />
                           <div class="ovrlay-6">
                              <h4 class="mt-4 mb-2 text-center">Lorem Ipsum</h4>
                              <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry. Lorem Ipsum has been the
                                 industry's standard dummy text.
                              </p>
                              <div class="d-flex justify-content-center mb-3">
                                 <a href="#" class="btn btn-primary">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 grid-m">
                        <div class="hover-effects">
                           <img src="{{asset('images/hover-effects/11.jpg')}}" class="img-fluid rounded" alt="" />
                           <div class="ovrlay-7">
                              <a href="#" class="button">
                                 <svg width="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5"
                                       stroke-linecap="round" stroke-linejoin="round"></circle>
                                    <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                       stroke-linecap="round" stroke-linejoin="round"></path>
                                 </svg>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6 grid-m">
                        <div class="hover-effects">
                           <img src="{{asset('images/hover-effects/12.jpg')}}" class="img-fluid rounded effect-8"
                              alt="" />
                           <div class="ovrlay-8">
                              <h4 class="mt-3 pl-2">Lorem ipsum</h4>
                              <a href="#" class="i-btn">
                                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M12.1415 6.5899C11.9075 6.71614 11.7616 6.95618 11.7616 7.21726V11.2827H3.73429C3.32896 11.2827 3 11.604 3 12C3 12.3959 3.32896 12.7172 3.73429 12.7172H11.7616V16.7827C11.7616 17.0447 11.9075 17.2848 12.1415 17.4101C12.3755 17.5372 12.6614 17.5286 12.8875 17.39L20.6573 12.6073C20.8708 12.4753 21 12.2467 21 12C21 11.7532 20.8708 11.5247 20.6573 11.3927L12.8875 6.60998C12.7681 6.5373 12.632 6.5 12.4959 6.5C12.3745 6.5 12.2521 6.5306 12.1415 6.5899Z"
                                       fill="currentColor"></path>
                                 </svg>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

</x-app-layout>
