@props(['data'])

@php
    $options = $data['options'];
@endphp
<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
    <div class="card-wrap-body mb-4 gray rounded p-3">
        <h4 class="ft-medium mb-3 theme-cl-s">العنوان</h4>
        <p>{{ $options['localisation'] }}</p>
    </div>

    <div class="card-wrap-body mb-3 gray rounded p-3">
        <h4 class="ft-medium mb-3 theme-cl-s">الهاتف</h4>
        <div class="text-right" dir="ltr">
            <p class="mb-2">{{ $options['tel1'] ?? '' }}</p>
            <p class="mb-2">{{ $options['tel2'] ?? '' }}</p>
        </div>
    </div>

    <div class="card-wrap-body mb-3 gray rounded p-3">
        <h4 class="ft-medium mb-3 theme-cl-s">البريد الإلكتروني</h4>
        <p class="lh-1 text-dark">{{ $options['addresse1'] ?? '' }}</p>
        <p class="lh-1 text-dark">{{ $options['addresse2'] ?? '' }}</p>
    </div>
</div>
