@props(['uniquename','id','productchecked'=>false,'productname'])
<div class="form-check">
    <input type="checkbox" class="form-check-input" id="{{$uniquename}}-{{$id}}" {{$productchecked ? 'checked':''}}>
    <label class="form-check-label w-100" for="{{$uniquename}}-{{$id}}">{{$productname}}</label>
</div>