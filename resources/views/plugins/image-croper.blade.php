<x-app-layout :assets="$assets ?? []" title='Image Croper' :isBanner="true" isCropperjs="true">

      <div class="row">
         <div class="col-lg-12">
            <div class="card card-block card-stretch card-height">
               <div class="card-header d-flex justify-content-between">
                  <div class="header-title">
                     <h4 class="card-title">Cropper JS</h4>
                  </div>
                  <div class="header-action">
                     <a href="https://github.com/fengyuanchen/cropperjs#getting-started" target="_blank"
                        data-toggle="tooltip" title="Plugin Detail">Detail</a>
                  </div>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-9">

                        <div class="docs-demo">
                           <div class="img-container">
                              <img src="{{asset('images/pro/plugins/01.jpg')}}" alt="Picture" class="img-fluid" id="main-img">
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3">

                        <div class="docs-preview clearfix">
                           <div class="img-preview preview-lg"></div>
                           <div class="img-preview preview-md"></div>
                           <div class="img-preview preview-sm"></div>
                           <div class="img-preview preview-xs"></div>
                        </div>


                        <div class="docs-data">
                           <div class="form-group ">
                              <div class="input-group input-group-sm">
                                 <span class="input-group-prepend">
                                    <label class="input-group-text" for="dataX">X</label>
                                 </span>
                                 <input type="text" class="form-control" id="dataX" placeholder="x">
                                 <span class="input-group-append">
                                    <span class="input-group-text">px</span>
                                 </span>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="input-group input-group-sm">
                                 <span class="input-group-prepend">
                                    <label class="input-group-text" for="dataY">Y</label>
                                 </span>
                                 <input type="text" class="form-control" id="dataY" placeholder="y">
                                 <span class="input-group-append">
                                    <span class="input-group-text">px</span>
                                 </span>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="input-group input-group-sm">
                                 <span class="input-group-prepend">
                                    <label class="input-group-text" for="dataWidth">Width</label>
                                 </span>
                                 <input type="text" class="form-control" id="dataWidth" placeholder="width">
                                 <span class="input-group-append">
                                    <span class="input-group-text">px</span>
                                 </span>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="input-group input-group-sm">
                                 <span class="input-group-prepend">
                                    <label class="input-group-text" for="dataHeight">Height</label>
                                 </span>
                                 <input type="text" class="form-control" id="dataHeight" placeholder="height">
                                 <span class="input-group-append">
                                    <span class="input-group-text">px</span>
                                 </span>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="input-group input-group-sm">
                                 <span class="input-group-prepend">
                                    <label class="input-group-text" for="dataRotate">Rotate</label>
                                 </span>
                                 <input type="text" class="form-control" id="dataRotate" placeholder="rotate">
                                 <span class="input-group-append">
                                    <span class="input-group-text">deg</span>
                                 </span>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="input-group input-group-sm">
                                 <span class="input-group-prepend">
                                    <label class="input-group-text" for="dataScaleX">ScaleX</label>
                                 </span>
                                 <input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="input-group input-group-sm">
                                 <span class="input-group-prepend">
                                    <label class="input-group-text" for="dataScaleY">ScaleY</label>
                                 </span>
                                 <input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="row" id="actions">
                           <div class="col-md-9 docs-buttons my-2">

                              <div class="btn-group mb-2">
                                 <button type="button" class="btn btn-primary btn-sm" data-method="setDragMode"
                                    data-option="move" title="Move">
                                    <span class="docs-tooltip" data-toggle="tooltip"
                                       title="cropper.setDragMode(&quot;move&quot;)">
                                       <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path d="M12.2305 3.16998L12.2305 20.17" stroke="#fff" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round" />
                                          <path d="M8.70001 5.51477L12.1997 1.99996L15.7 5.51477" stroke="#fff"
                                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          <path d="M8.70001 16.9999L12.1997 20.5099L15.7 16.9999" stroke="#fff"
                                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          <path d="M20.2086 11.1468L3.20862 11.1468" stroke="#fff" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round" />
                                          <path d="M6.78967 7.70001L3.27967 11.1997L6.78967 14.7" stroke="#fff"
                                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          <path d="M17 7.70001L20.51 11.1997L17 14.7" stroke="#fff" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                 </button>
                                 <button type="button" class="btn btn-primary btn-sm" data-method="setDragMode"
                                    data-option="crop" title="Crop">
                                    <span class="docs-tooltip" data-toggle="tooltip"
                                       title="cropper.setDragMode(&quot;crop&quot;)">
                                       <svg width="16" height="16" viewBox="0 0 24 25" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path d="M6 2V5.5M15.5 19.5H7C6.44772 19.5 6 19.0523 6 18.5V5.5M2 5.5H6"
                                             stroke="#fff" stroke-width="1.5" stroke-linecap="round" />
                                          <path d="M9 5.5H18C18.5523 5.5 19 5.94772 19 6.5V19.5M19 23.5V19.5M19 19.5H23"
                                             stroke="#fff" stroke-width="1.5" stroke-linecap="round" />
                                       </svg>
                                    </span>
                                 </button>
                              </div>
                              <div class="btn-group mb-2">
                                 <button type="button" class="btn btn-primary btn-sm" data-method="zoom" data-option="0.1"
                                    title="Zoom In">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoom(0.1)">
                                       <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <circle cx="11.7666" cy="11.7666" r="8.98856" stroke="#fff" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round" />
                                          <path d="M18.0183 18.4852L21.5423 22" stroke="#fff" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round" />
                                          <path d="M11.4999 7V16" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                             stroke-linejoin="round" />
                                          <path d="M16 11.5001H7" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                             stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                 </button>
                                 <button type="button" class="btn btn-primary btn-sm" data-method="zoom" data-option="-0.1"
                                    title="Zoom Out">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoom(-0.1)">
                                       <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <circle cx="11.7666" cy="11.7666" r="8.98856" stroke="#fff" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round" />
                                          <path d="M18.0183 18.4852L21.5423 22" stroke="#fff" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round" />
                                          <path d="M16 11.5001H7" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                             stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                 </button>
                              </div>
                              <div class="btn-group mb-2">
                                 <button type="button" class="btn btn-primary btn-sm" data-method="move" data-option="-10"
                                    data-second-option="0" title="Move Left">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="cropper.move(-10, 0)">
                                       <svg class="icon-16" width="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor"
                                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                       </svg>
                                    </span>
                                 </button>
                                 <button type="button" class="btn btn-primary btn-sm" data-method="move" data-option="10"
                                    data-second-option="0" title="Move Right">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="cropper.move(10, 0)">
                                       <svg class="icon-16" width="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M19.75 11.7256L4.75 11.7256" stroke="currentColor" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path d="M13.7002 5.70124L19.7502 11.7252L13.7002 17.7502" stroke="currentColor"
                                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                       </svg>
                                    </span>
                                 </button>
                                 <button type="button" class="btn btn-primary btn-sm" data-method="move" data-option="0"
                                    data-second-option="-10" title="Move Up">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="cropper.move(0, -10)">
                                       <svg class="icon-16" width="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M11.7261 4.25L11.7261 19.25" stroke="currentColor" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path d="M5.70149 10.2998L11.7255 4.2498L17.7505 10.2998" stroke="currentColor"
                                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                       </svg>
                                    </span>
                                 </button>
                                 <button type="button" class="btn btn-primary btn-sm" data-method="move" data-option="0"
                                    data-second-option="10" title="Move Down">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="cropper.move(0, 10)">
                                       <svg class="icon-16" width="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M12.2744 19.75V4.75" stroke="currentColor" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path d="M18.299 13.7002L12.275 19.7502L6.25 13.7002" stroke="currentColor"
                                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                       </svg>
                                    </span>
                                 </button>
                              </div>

                              <div class="btn-group mb-2">
                                 <button type="button" class="btn btn-primary btn-sm" data-method="rotate"
                                    data-option="-45" title="Rotate Left">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotate(-45)">
                                       <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M5.89155 8.94037C5.89155 8.94037 9.06324 4.5 13.8208 4.5C15.9237 4.5 17.9406 5.3354 19.4276 6.82242C20.9146 8.30943 21.75 10.3263 21.75 12.4292C21.75 14.5322 20.9146 16.549 19.4276 18.036C17.9406 19.5231 15.9237 20.3585 13.8208 20.3585C11.0646 20.3585 8.63701 18.851 7.21609 16.9429"
                                             stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                             stroke-linejoin="round" />
                                          <path d="M4.19904 5.65222L4.88056 10.1704L9.39651 9.46938" stroke="#fff"
                                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                 </button>
                                 <button type="button" class="btn btn-primary btn-sm" data-method="rotate" data-option="45"
                                    title="Rotate Right">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotate(45)">
                                       <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M18.1085 8.94037C18.1085 8.94037 14.9368 4.5 10.1792 4.5C8.07626 4.5 6.05943 5.3354 4.57242 6.82242C3.0854 8.30943 2.25 10.3263 2.25 12.4292C2.25 14.5322 3.0854 16.549 4.57242 18.036C6.05943 19.5231 8.07626 20.3585 10.1792 20.3585C12.9354 20.3585 15.363 18.851 16.7839 16.9429"
                                             stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                             stroke-linejoin="round" />
                                          <path d="M19.801 5.65222L19.1194 10.1704L14.6035 9.46938" stroke="#fff"
                                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                 </button>
                              </div>
                              <div class="btn-group mb-2">
                                 <button type="button" class="btn btn-primary btn-sm" data-method="scaleX" data-option="-1"
                                    title="Flip Horizontal">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="cropper.scaleX(-1)">
                                       <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path d="M19.8311 12.2305L3.83112 12.2305" stroke="#fff" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round" />
                                          <path d="M15.9167 7.46121L20.7063 12.2302L15.9167 17" stroke="#fff"
                                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          <path d="M7.78958 7.46121L3 12.2302L7.78958 17" stroke="#fff" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                 </button>
                                 <button type="button" class="btn btn-primary btn-sm" data-method="scaleY" data-option="-1"
                                    title="Flip Vertical">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="cropper.scaleY(-1)">
                                       <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path d="M12.2305 3.16888L12.2305 19.1689" stroke="#fff" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round" />
                                          <path d="M7.46121 7.08325L12.2302 2.29367L17 7.08325" stroke="#fff"
                                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          <path d="M7.46121 15.2104L12.2302 20L17 15.2104" stroke="#fff" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                 </button>
                              </div>
                              <div class="btn-group mb-2">
                                 <button type="button" class="btn btn-primary btn-sm" data-method="crop" title="Crop">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="cropper.crop()">
                                       <svg class="icon-16" width="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd"
                                             d="M16.3345 2.75024H7.66549C4.64449 2.75024 2.75049 4.88924 2.75049 7.91624V16.0842C2.75049 19.1112 4.63549 21.2502 7.66549 21.2502H16.3335C19.3645 21.2502 21.2505 19.1112 21.2505 16.0842V7.91624C21.2505 4.88924 19.3645 2.75024 16.3345 2.75024Z"
                                             stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                             stroke-linejoin="round"></path>
                                          <path d="M8.43994 12.0002L10.8139 14.3732L15.5599 9.6272" stroke="currentColor"
                                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                       </svg>
                                    </span>
                                 </button>
                                 <button type="button" class="btn btn-primary btn-sm" data-method="clear" title="Clear">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="cropper.clear()">
                                       <svg class="icon-16" width="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M14.3955 9.59497L9.60352 14.387" stroke="currentColor"
                                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path d="M14.3971 14.3898L9.60107 9.59277" stroke="currentColor"
                                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path fill-rule="evenodd" clip-rule="evenodd"
                                             d="M16.3345 2.75024H7.66549C4.64449 2.75024 2.75049 4.88924 2.75049 7.91624V16.0842C2.75049 19.1112 4.63549 21.2502 7.66549 21.2502H16.3335C19.3645 21.2502 21.2505 19.1112 21.2505 16.0842V7.91624C21.2505 4.88924 19.3645 2.75024 16.3345 2.75024Z"
                                             stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                             stroke-linejoin="round"></path>
                                       </svg>
                                    </span>
                                 </button>
                              </div>

                              <div class="btn-group mb-2">
                                 <button type="button" class="btn btn-primary btn-sm" data-method="disable"
                                    title="Disable">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="cropper.disable()">
                                       <svg class="icon-16" width="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M16.4232 9.4478V7.3008C16.4232 4.7878 14.3852 2.7498 11.8722 2.7498C9.35925 2.7388 7.31325 4.7668 7.30225 7.2808V7.3008V9.4478"
                                             stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                             stroke-linejoin="round"></path>
                                          <path fill-rule="evenodd" clip-rule="evenodd"
                                             d="M15.683 21.2497H8.042C5.948 21.2497 4.25 19.5527 4.25 17.4577V13.1687C4.25 11.0737 5.948 9.37671 8.042 9.37671H15.683C17.777 9.37671 19.475 11.0737 19.475 13.1687V17.4577C19.475 19.5527 17.777 21.2497 15.683 21.2497Z"
                                             stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                             stroke-linejoin="round"></path>
                                          <path d="M11.8628 14.2026V16.4236" stroke="currentColor" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round"></path>
                                       </svg>
                                    </span>
                                 </button>
                                 <button type="button" class="btn btn-primary btn-sm" data-method="enable" title="Enable">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="cropper.enable()">
                                       <svg class="icon-16" width="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M16.4242 5.56204C15.8072 3.78004 14.1142 2.50004 12.1222 2.50004C9.60925 2.49004 7.56325 4.51804 7.55225 7.03104V7.05104V9.19804"
                                             stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                             stroke-linejoin="round"></path>
                                          <path fill-rule="evenodd" clip-rule="evenodd"
                                             d="M15.933 21.0005H8.292C6.198 21.0005 4.5 19.3025 4.5 17.2075V12.9195C4.5 10.8245 6.198 9.12646 8.292 9.12646H15.933C18.027 9.12646 19.725 10.8245 19.725 12.9195V17.2075C19.725 19.3025 18.027 21.0005 15.933 21.0005Z"
                                             stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                             stroke-linejoin="round"></path>
                                          <path d="M12.1128 13.9526V16.1746" stroke="currentColor" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round"></path>
                                       </svg>
                                    </span>
                                 </button>
                              </div>
                              <div class="btn-group mb-2">
                                 <button type="button" class="btn btn-primary btn-sm my-1" data-method="reset"
                                    title="Reset">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="cropper.reset()">
                                       <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M4.8807 14.6713C4.74972 14.2784 4.32498 14.066 3.93202 14.197C3.53906 14.328 3.32669 14.7527 3.45768 15.1457L4.8807 14.6713ZM20.8807 15.1457C21.0117 14.7527 20.7993 14.328 20.4064 14.197C20.0134 14.066 19.5887 14.2784 19.4577 14.6713L20.8807 15.1457ZM4.16919 14.9085C3.45768 15.1457 3.45779 15.146 3.45791 15.1464C3.45796 15.1465 3.45809 15.1469 3.45819 15.1472C3.45839 15.1478 3.45862 15.1485 3.45889 15.1493C3.45942 15.1509 3.46007 15.1528 3.46086 15.1551C3.46242 15.1597 3.4645 15.1657 3.4671 15.1731C3.47229 15.188 3.47955 15.2084 3.48896 15.2341C3.50776 15.2854 3.53515 15.3576 3.57164 15.4477C3.64455 15.6279 3.75414 15.8805 3.90462 16.1814C4.20474 16.7817 4.67217 17.5836 5.34302 18.3886C6.68936 20.0043 8.88337 21.6585 12.1692 21.6585V20.1585C9.45501 20.1585 7.64902 18.8128 6.49536 17.4284C5.91621 16.7334 5.50864 16.0354 5.24626 15.5106C5.11549 15.2491 5.02195 15.0329 4.96206 14.8849C4.93214 14.811 4.91069 14.7543 4.89727 14.7177C4.89056 14.6994 4.88587 14.6861 4.88312 14.6783C4.88175 14.6744 4.88087 14.6718 4.88047 14.6706C4.88027 14.67 4.88019 14.6698 4.88023 14.6699C4.88025 14.67 4.88029 14.6701 4.88037 14.6704C4.88041 14.6705 4.8805 14.6707 4.88052 14.6708C4.88061 14.671 4.8807 14.6713 4.16919 14.9085ZM12.1692 21.6585C15.455 21.6585 17.649 20.0043 18.9954 18.3886C19.6662 17.5836 20.1336 16.7817 20.4338 16.1814C20.5842 15.8805 20.6938 15.6279 20.7667 15.4477C20.8032 15.3576 20.8306 15.2854 20.8494 15.2341C20.8588 15.2084 20.8661 15.188 20.8713 15.1731C20.8739 15.1657 20.876 15.1597 20.8775 15.1551C20.8783 15.1528 20.879 15.1509 20.8795 15.1493C20.8798 15.1485 20.88 15.1478 20.8802 15.1472C20.8803 15.1469 20.8804 15.1465 20.8805 15.1464C20.8806 15.146 20.8807 15.1457 20.1692 14.9085C19.4577 14.6713 19.4578 14.671 19.4579 14.6708C19.4579 14.6707 19.458 14.6705 19.458 14.6704C19.4581 14.6701 19.4581 14.67 19.4582 14.6699C19.4582 14.6698 19.4581 14.67 19.4579 14.6706C19.4575 14.6718 19.4566 14.6744 19.4553 14.6783C19.4525 14.6861 19.4478 14.6994 19.4411 14.7177C19.4277 14.7543 19.4062 14.811 19.3763 14.8849C19.3164 15.0329 19.2229 15.2491 19.0921 15.5106C18.8297 16.0354 18.4222 16.7334 17.843 17.4284C16.6894 18.8128 14.8834 20.1585 12.1692 20.1585V21.6585Z"
                                             fill="#fff" />
                                          <path d="M16.1692 15.4857L20.8122 13.981L22.2973 18.6312" stroke="#fff"
                                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          <path
                                             d="M20.0741 10.0265C20.1885 10.4246 20.604 10.6545 21.0021 10.5401C21.4002 10.4257 21.6302 10.0102 21.5157 9.61208L20.0741 10.0265ZM4.10797 8.88311C3.96065 9.27025 4.15507 9.7035 4.5422 9.85081C4.92933 9.99812 5.36259 9.80371 5.5099 9.41658L4.10797 8.88311ZM20.7949 9.81927C21.5157 9.61208 21.5156 9.61174 21.5155 9.61138C21.5155 9.61122 21.5154 9.61084 21.5153 9.61053C21.5151 9.60992 21.5149 9.60922 21.5147 9.60842C21.5142 9.60683 21.5136 9.60487 21.513 9.60254C21.5116 9.59789 21.5098 9.59178 21.5075 9.58425C21.5029 9.56919 21.4965 9.54847 21.4882 9.52245C21.4715 9.47042 21.4472 9.39713 21.4145 9.30554C21.3492 9.1225 21.2503 8.86554 21.1125 8.55855C20.8378 7.94628 20.4043 7.12546 19.7677 6.29307C18.4902 4.62255 16.3673 2.87795 13.0843 2.74047L13.0216 4.23916C15.7334 4.35272 17.4815 5.77284 18.5762 7.20429C19.1258 7.92289 19.5038 8.63736 19.744 9.17265C19.8637 9.43943 19.9481 9.65931 20.0018 9.80966C20.0286 9.88477 20.0476 9.94232 20.0595 9.97945C20.0654 9.99801 20.0696 10.0115 20.072 10.0194C20.0732 10.0234 20.074 10.026 20.0743 10.0272C20.0745 10.0278 20.0746 10.028 20.0745 10.0279C20.0745 10.0279 20.0745 10.0277 20.0744 10.0275C20.0744 10.0273 20.0743 10.0271 20.0743 10.027C20.0742 10.0268 20.0741 10.0265 20.7949 9.81927ZM13.0843 2.74047C9.8014 2.60299 7.5401 4.164 6.12735 5.72187C5.42339 6.49812 4.92282 7.27983 4.59785 7.86698C4.43491 8.16138 4.31485 8.40917 4.23446 8.58611C4.19424 8.67465 4.16385 8.74564 4.14292 8.7961C4.13245 8.82133 4.12433 8.84144 4.11853 8.85607C4.11562 8.86338 4.1133 8.86932 4.11154 8.87384C4.11066 8.8761 4.10992 8.87801 4.10933 8.87956C4.10903 8.88033 4.10877 8.88101 4.10854 8.88161C4.10843 8.8819 4.10828 8.88228 4.10823 8.88243C4.10809 8.88278 4.10797 8.88311 4.80893 9.14985C5.5099 9.41658 5.50979 9.41686 5.50969 9.41713C5.50967 9.41718 5.50957 9.41743 5.50953 9.41754C5.50944 9.41778 5.50939 9.41792 5.50936 9.41798C5.50932 9.4181 5.50941 9.41786 5.50963 9.41728C5.51008 9.41612 5.51107 9.41359 5.51261 9.40973C5.51568 9.40199 5.52093 9.38895 5.52839 9.37095C5.54334 9.33494 5.56713 9.27918 5.60012 9.20658C5.66615 9.06124 5.76865 8.84919 5.91025 8.59335C6.19436 8.08002 6.63078 7.39965 7.23849 6.72952C8.44906 5.3946 10.3098 4.1256 13.0216 4.23916L13.0843 2.74047Z"
                                             fill="#fff" />
                                          <path d="M8.82965 8.74048L4.12772 10.0496L2.8385 5.34131" stroke="#fff"
                                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                 </button>
                                 <label class="btn btn-primary btn-sm btn-upload my-1" for="inputImage"
                                    title="Upload image file">
                                    <input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
                                       <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M7.38948 8.98403H6.45648C4.42148 8.98403 2.77148 10.634 2.77148 12.669V17.544C2.77148 19.578 4.42148 21.228 6.45648 21.228H17.5865C19.6215 21.228 21.2715 19.578 21.2715 17.544V12.659C21.2715 10.63 19.6265 8.98403 17.5975 8.98403L16.6545 8.98403"
                                             stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                             stroke-linejoin="round" />
                                          <path d="M12.0214 2.19051V14.2315" stroke="#fff" stroke-width="1.5"
                                             stroke-linecap="round" stroke-linejoin="round" />
                                          <path d="M9.10626 5.11884L12.0213 2.19084L14.9373 5.11884" stroke="#fff"
                                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                 </label>
                                 <button type="button" class="btn btn-primary btn-sm my-1" data-method="destroy"
                                    title="Destroy">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="cropper.destroy()">
                                       <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M7.53488 5.75856C5.39554 7.28016 4 9.77944 4 12.6047C4 17.2413 7.75872 21 12.3953 21C17.032 21 20.7907 17.2413 20.7907 12.6047C20.7907 9.77944 19.3952 7.28016 17.2558 5.75856M12.3953 2V15.6977"
                                             stroke="#fff" stroke-width="1.5" stroke-linecap="round" />
                                       </svg>
                                    </span>
                                 </button>
                              </div>
                              <div class="btn-group btn-group-crop">
                                 <button type="button" class="btn btn-primary btn-sm my-2" data-method="getCroppedCanvas"
                                    data-option="{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }">
                                    <span class="docs-tooltip" data-toggle="tooltip"
                                       title="cropper.getCroppedCanvas({ maxWidth: 4096, maxHeight: 4096 })">
                                       Get Cropped Canvas
                                    </span>
                                 </button>
                                 <button type="button" class="btn btn-primary btn-sm my-2" data-method="getCroppedCanvas"
                                    data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
                                    <span class="docs-tooltip" data-toggle="tooltip"
                                       title="cropper.getCroppedCanvas({ width: 160, height: 90 })">
                                       160&times;90
                                    </span>
                                 </button>
                                 <button type="button" class="btn btn-primary btn-sm my-2" data-method="getCroppedCanvas"
                                    data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
                                    <span class="docs-tooltip" data-toggle="tooltip"
                                       title="cropper.getCroppedCanvas({ width: 320, height: 180 })">
                                       320&times;180
                                    </span>
                                 </button>
                              </div>

                              <!-- Show the cropped image in modal -->
                              <div class="modal fade docs-cropped" id="getCroppedCanvasModal" role="dialog"
                                 aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" tabindex="-1">
                                 <div class="modal-dialog">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title" id="getCroppedCanvasTitle">Cropped</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                          </button>
                                       </div>
                                       <div class="modal-body"></div>
                                       <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary btn-sm my-2"
                                             data-dismiss="modal">Close</button>
                                          <a class="btn btn-primary btn-sm" id="download" href="javascript:void(0);"
                                             download="cropped.jpg">Download</a>
                                       </div>
                                    </div>
                                 </div>
                              </div><!-- /.modal -->

                              <button type="button" class="btn btn-secondary btn-sm my-2" data-method="getData" data-option
                                 data-target="#putData">
                                 <span class="docs-tooltip" data-toggle="tooltip" title="cropper.getData()">
                                    Get Data
                                 </span>
                              </button>
                              <button type="button" class="btn btn-secondary btn-sm my-2" data-method="setData"
                                 data-target="#putData">
                                 <span class="docs-tooltip" data-toggle="tooltip" title="cropper.setData(data)">
                                    Set Data
                                 </span>
                              </button>
                              <button type="button" class="btn btn-secondary btn-sm my-2" data-method="getContainerData"
                                 data-option data-target="#putData">
                                 <span class="docs-tooltip" data-toggle="tooltip" title="cropper.getContainerData()">
                                    Get Container Data
                                 </span>
                              </button>
                              <button type="button" class="btn btn-secondary btn-sm my-2" data-method="getImageData"
                                 data-option data-target="#putData">
                                 <span class="docs-tooltip" data-toggle="tooltip" title="cropper.getImageData()">
                                    Get Image Data
                                 </span>
                              </button>
                              <button type="button" class="btn btn-secondary btn-sm my-2" data-method="getCanvasData"
                                 data-option data-target="#putData">
                                 <span class="docs-tooltip" data-toggle="tooltip" title="cropper.getCanvasData()">
                                    Get Canvas Data
                                 </span>
                              </button>
                              <button type="button" class="btn btn-secondary btn-sm my-2" data-method="setCanvasData"
                                 data-target="#putData">
                                 <span class="docs-tooltip" data-toggle="tooltip" title="cropper.setCanvasData(data)">
                                    Set Canvas Data
                                 </span>
                              </button>
                              <button type="button" class="btn btn-secondary btn-sm my-2" data-method="getCropBoxData"
                                 data-option data-target="#putData">
                                 <span class="docs-tooltip" data-toggle="tooltip" title="cropper.getCropBoxData()">
                                    Get Crop Box Data
                                 </span>
                              </button>
                              <button type="button" class="btn btn-secondary btn-sm my-2" data-method="setCropBoxData"
                                 data-target="#putData">
                                 <span class="docs-tooltip" data-toggle="tooltip" title="cropper.setCropBoxData(data)">
                                    Set Crop Box Data
                                 </span>
                              </button>
                              <button type="button" class="btn btn-secondary btn-sm my-2" data-method="moveTo"
                                 data-option="0">
                                 <span class="docs-tooltip" data-toggle="tooltip" title="cropper.moveTo(0)">
                                    Move to [0,0]
                                 </span>
                              </button>
                              <button type="button" class="btn btn-secondary btn-sm my-2" data-method="zoomTo"
                                 data-option="1">
                                 <span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoomTo(1)">
                                    Zoom to 100%
                                 </span>
                              </button>
                              <button type="button" class="btn btn-secondary btn-sm my-2" data-method="rotateTo"
                                 data-option="180">
                                 <span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotateTo(180)">
                                    Rotate 180°
                                 </span>
                              </button>
                              <button type="button" class="btn btn-secondary btn-sm my-2" data-method="scale"
                                 data-option="-2" data-second-option="-1">
                                 <span class="docs-tooltip" data-toggle="tooltip" title="cropper.scale(-2, -1)">
                                    Scale (-2, -1)
                                 </span>
                              </button>
                              <div class="form-group mt-2">
                                 <textarea class="form-control" id="putData"
                                    placeholder="Get data to here or set data with this value"></textarea>
                              </div>

                           </div>

                           <div class="col-md-3 docs-toggles">

                              <div class="btn-group d-flex flex-nowrap pt-2" data-toggle="buttons">
                                 <label class="btn btn-primary btn-sm active">
                                    <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio"
                                       value="1.7777777777777777">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 16 / 9">
                                       16:9
                                    </span>
                                 </label>
                                 <label class="btn btn-primary btn-sm">
                                    <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio"
                                       value="1.3333333333333333">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 4 / 3">
                                       4:3
                                    </span>
                                 </label>
                                 <label class="btn btn-primary btn-sm">
                                    <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="1">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 1 / 1">
                                       1:1
                                    </span>
                                 </label>
                                 <label class="btn btn-primary btn-sm">
                                    <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio"
                                       value="0.6666666666666666">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 2 / 3">
                                       2:3
                                    </span>
                                 </label>
                                 <label class="btn btn-primary btn-sm">
                                    <input type="radio" class="sr-only" id="aspectRatio5" name="aspectRatio" value="NaN">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: NaN">
                                       Free
                                    </span>
                                 </label>
                              </div>
                              <div class="btn-group d-flex flex-nowrap pt-2" data-toggle="buttons">
                                 <label class="btn btn-primary btn-sm active">
                                    <input type="radio" class="sr-only" id="viewMode0" name="viewMode" value="0" checked>
                                    <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 0">
                                       VM0
                                    </span>
                                 </label>
                                 <label class="btn btn-primary btn-sm">
                                    <input type="radio" class="sr-only" id="viewMode1" name="viewMode" value="1">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 1">
                                       VM1
                                    </span>
                                 </label>
                                 <label class="btn btn-primary btn-sm">
                                    <input type="radio" class="sr-only" id="viewMode2" name="viewMode" value="2">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 2">
                                       VM2
                                    </span>
                                 </label>
                                 <label class="btn btn-primary btn-sm">
                                    <input type="radio" class="sr-only" id="viewMode3" name="viewMode" value="3">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 3">
                                       VM3
                                    </span>
                                 </label>
                              </div>
                              <div class="dropdown dropup docs-options pt-2">
                                 <button class="btn btn-primary btn-sm btn-block dropdown-toggle" type="button" id="toggleOptions" data-bs-toggle="dropdown" aria-expanded="false">
                                    Toggle Options
                                    <span class="carete"></span>
                                 </button>
                                 <ul class="dropdown-menu" role="menu" aria-labelledby="toggleOptions">
                                    <li class="dropdown-item">
                                       <div class="form-check">
                                          <input class="form-check-input" id="responsive" type="checkbox" name="responsive"
                                             checked>
                                          <label class="form-check-label" for="responsive">responsive</label>
                                       </div>
                                    </li>
                                    <li class="dropdown-item">
                                       <div class="form-check">
                                          <input class="form-check-input" id="restore" type="checkbox" name="restore"
                                             checked>
                                          <label class="form-check-label" for="restore">restore</label>
                                       </div>
                                    </li>
                                    <li class="dropdown-item">
                                       <div class="form-check">
                                          <input class="form-check-input" id="checkCrossOrigin" type="checkbox"
                                             name="checkCrossOrigin" checked>
                                          <label class="form-check-label" for="checkCrossOrigin">checkCrossOrigin</label>
                                       </div>
                                    </li>
                                    <li class="dropdown-item">
                                       <div class="form-check">
                                          <input class="form-check-input" id="checkOrientation" type="checkbox"
                                             name="checkOrientation" checked>
                                          <label class="form-check-label" for="checkOrientation">checkOrientation</label>
                                       </div>
                                    </li>
                                    <li class="dropdown-item">
                                       <div class="form-check">
                                          <input class="form-check-input" id="modal" type="checkbox" name="modal" checked>
                                          <label class="form-check-label" for="modal">modal</label>
                                       </div>
                                    </li>
                                    <li class="dropdown-item">
                                       <div class="form-check">
                                          <input class="form-check-input" id="guides" type="checkbox" name="guides"
                                             checked>
                                          <label class="form-check-label" for="guides">guides</label>
                                       </div>
                                    </li>
                                    <li class="dropdown-item">
                                       <div class="form-check">
                                          <input class="form-check-input" id="center" type="checkbox" name="center"
                                             checked>
                                          <label class="form-check-label" for="center">center</label>
                                       </div>
                                    </li>
                                    <li class="dropdown-item">
                                       <div class="form-check">
                                          <input class="form-check-input" id="highlight" type="checkbox" name="highlight"
                                             checked>
                                          <label class="form-check-label" for="highlight">highlight</label>
                                       </div>
                                    </li>
                                    <li class="dropdown-item">
                                       <div class="form-check">
                                          <input class="form-check-input" id="background" type="checkbox" name="background"
                                             checked>
                                          <label class="form-check-label" for="background">background</label>
                                       </div>
                                    </li>
                                    <li class="dropdown-item">
                                       <div class="form-check">
                                          <input class="form-check-input" id="autoCrop" type="checkbox" name="autoCrop"
                                             checked>
                                          <label class="form-check-label" for="autoCrop">autoCrop</label>
                                       </div>
                                    </li>
                                    <li class="dropdown-item">
                                       <div class="form-check">
                                          <input class="form-check-input" id="movable" type="checkbox" name="movable"
                                             checked>
                                          <label class="form-check-label" for="movable">movable</label>
                                       </div>
                                    </li>
                                    <li class="dropdown-item">
                                       <div class="form-check">
                                          <input class="form-check-input" id="rotatable" type="checkbox" name="rotatable"
                                             checked>
                                          <label class="form-check-label" for="rotatable">rotatable</label>
                                       </div>
                                    </li>
                                    <li class="dropdown-item">
                                       <div class="form-check">
                                          <input class="form-check-input" id="scalable" type="checkbox" name="scalable"
                                             checked>
                                          <label class="form-check-label" for="scalable">scalable</label>
                                       </div>
                                    </li>
                                    <li class="dropdown-item">
                                       <div class="form-check">
                                          <input class="form-check-input" id="zoomable" type="checkbox" name="zoomable"
                                             checked>
                                          <label class="form-check-label" for="zoomable">zoomable</label>
                                       </div>
                                    </li>
                                    <li class="dropdown-item">
                                       <div class="form-check">
                                          <input class="form-check-input" id="zoomOnTouch" type="checkbox"
                                             name="zoomOnTouch" checked>
                                          <label class="form-check-label" for="zoomOnTouch">zoomOnTouch</label>
                                       </div>
                                    </li>
                                    <li class="dropdown-item">
                                       <div class="form-check">
                                          <input class="form-check-input" id="zoomOnWheel" type="checkbox"
                                             name="zoomOnWheel" checked>
                                          <label class="form-check-label" for="zoomOnWheel">zoomOnWheel</label>
                                       </div>
                                    </li>
                                    <li class="dropdown-item">
                                       <div class="form-check">
                                          <input class="form-check-input" id="cropBoxMovable" type="checkbox"
                                             name="cropBoxMovable" checked>
                                          <label class="form-check-label" for="cropBoxMovable">cropBoxMovable</label>
                                       </div>
                                    </li>
                                    <li class="dropdown-item">
                                       <div class="form-check">
                                          <input class="form-check-input" id="cropBoxResizable" type="checkbox"
                                             name="cropBoxResizable" checked>
                                          <label class="form-check-label" for="cropBoxResizable">cropBoxResizable</label>
                                       </div>
                                    </li>
                                    <li class="dropdown-item">
                                       <div class="form-check">
                                          <input class="form-check-input" id="toggleDragModeOnDblclick" type="checkbox"
                                             name="toggleDragModeOnDblclick" checked>
                                          <label class="form-check-label"
                                             for="toggleDragModeOnDblclick">toggleDragModeOnDblclick</label>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                              <a class="btn btn-primary btn-sm my-2 btn-block pt-2" data-toggle="tooltip"
                                 href="https://fengyuanchen.github.io/photo-editor"
                                 title="An advanced example of Cropper.js">Photo Editor</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="card card-block card-stretch card-height">
               <div class="card-header d-flex justify-content-between">
                  <div class="header-title">
                     <h4 class="card-title">Round Crop</h4>
                  </div>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-6 text-center">
                        <div class="croppy-round">
                           <img src="{{asset('images/pro/plugins/01.jpg')}}" alt="picture" class="img-fluid" id="round-crop">
                        </div>
                        <button id="roundButton" class="btn btn-primary my-2">Crop</button>
                     </div>
                     <div class="col-md-6 text-center">
                        <h5>Preview</h5>
                        <div id="roundResult"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

</x-app-layout>
