@if(session()->has("primary"))
<div class="alert alert-primary alert-dismissible bg-primary text-white border-0 fade show" role="alert">
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong> {{ session()->get("success") }} </strong> .
</div>
@endif

@if(session()->has("secondary"))
<div class="alert alert-secondary alert-dismissible bg-secondary text-light border-0 fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>{{ session()->get("secondary") }} </strong> .
</div>
@endif

@if(session()->has("success"))
<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>{{ session()->get("success") }} </strong> .
</div>
@endif

@if(session()->has("danger"))
<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>{{ session()->get("danger") }} </strong> .
</div>
@endif

@if(session()->has("warning"))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>{{ session()->get("warning") }} </strong> .
</div>
@endif

@if(session()->has("info"))
<div class="alert alert-info alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>{{ session()->get("info") }} </strong> .
</div>
@endif
