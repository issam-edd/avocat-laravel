<head>

    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="{{ $main_options['description_ar'] ?? '' }}">
    <meta name="keywords" content="{{ $main_options['keywords_ar'] ?? '' }}">

    <!-- Stylesheets -->
    <link href="{{ asset('assets/main/lawyer/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/main/lawyer/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/main/lawyer/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/main/lawyer/css/custom.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@100;200;300;400;500;600;700;800&family=Open+Sans:wght@300;400;700;800&family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>{{ $title }} | {{ !!$lawyer->full_name_ar ? $lawyer->full_name_ar : $lawyer->first_name_ar . ' ' . $lawyer->first_name_ar }}</title>


    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>
