<x-app-layout :assets="$assets ?? []" title='User Profile' isBanner="true">
@push('scripts')
<script src="{{asset('vendor/sweetalert2/dist/sweetalert2.min.js')}}" async></script>
    <script src="{{asset('js/plugins/sweet-alert.js')}}" defer></script>
@endpush

<x-app-layout :assets="$assets ?? []" >
<div>
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">User List</h4>
               </div>
            </div>
            <div class="card-body px-0">
               <div class="table-responsive">

               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</x-app-layout>
