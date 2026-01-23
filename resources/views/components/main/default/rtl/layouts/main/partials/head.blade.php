@props(['title', 'options'])

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Themezhub" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} | {{ $options['siteweb_name_ar'] ?? ' .محاموا مراكش' }}</title>

    <meta name="description" content="{!! $options['description_ar'] ?? '' !!}">
    <meta name="keywords" content="{!! $options['keywords_ar'] ?? '' !!}">

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />
    <!-- Custom CSS -->
    <link href="{{ asset('assets/main/default/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/main/default/css/rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/main/default/css/custom.css') }}" rel="stylesheet">

    <script src="{{ asset('assets/js/tailwind-jit.js') }}"></script>
    <script type="tailwind-config">
        {
            prefix: "tw-",
            corePlugins: {
                preflight: false,
              }
        }
    </script>

    {!! $options['scripts'] ?? '' !!}
</head>
