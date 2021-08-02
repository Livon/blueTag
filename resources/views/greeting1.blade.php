<!-- View stored in resources/views/greeting.blade.php -->

<html>
    <body>
        <h1>你好，Hello, {{ $name }}</h1>

{{-- https://laravel.com/docs/8.x/blade#rendering-json --}}
        <script>
            var app = @json($array);

            var app = @json($array, JSON_PRETTY_PRINT);

            let j = @json($json)
        </script>


</body>
</html>
