@props(['title'])
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body d-flex justify-content-between align-items-center flex-wrap gap-2">
                <div class="card-title mb-0">
                    <h4 class="mb-0">{{ $title }}</h4>
                </div>
                <div class="card-action mt-2 mt-sm-0">
                    {{$slot}}
                </div>
            </div>
        </div>
    </div>
</div>
