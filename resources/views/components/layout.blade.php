
<!-- resources/views/components/layout.blade.php -->
<!doctype html>
<head>
    <!-- ... --->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{ $css_section ?? '' }}

    <title>{{ $title ?? 'Todo Manager' }}</title>
</head>
<!-- ... --->
<body>
{{--<h1>Todos</h1>--}}
{{--<hr/>--}}
{{ $slot }}

{{ $js_section ?? '' }}

</body>
</html>
