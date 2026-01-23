@props(['title', 'options'])

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Themezhub" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} | {{ $options['siteweb_name_fr'] ?? 'Avocats Marrakech' }}</title>

    <meta name="description" content="{!! $options['description_fr'] ?? '' !!}">
    <meta name="keywords" content="{!! $options['keywords_fr'] ?? '' !!}">

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />
    <!-- Custom CSS -->
    <link href="{{ asset('assets/main/default/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/main/default/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/main/default/css/ltr.css') }}" rel="stylesheet">

    <script src="{{ asset('assets/js/tailwind-jit.js') }}"></script>
    <script type="tailwind-config">
        {
            prefix: "tw-"
        }
    </script>

    {!! $options['scripts'] ?? '' !!}
</head>
