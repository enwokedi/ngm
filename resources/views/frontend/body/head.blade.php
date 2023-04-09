<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>{{ $title . ' | ' .env ('APP_NAME') }}</title>

    <meta name="author" content="Emmanuel Nwokedi">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicon and touch icons  -->
    <link href="{{Vite::asset('resources/icon/favicon.png')}}" rel="shortcut icon">
    <script type="text/javascript" src="{{ resource_path ('assets }}"></script>

    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->

    @vite(['/resources/js/app.js'])
</head>