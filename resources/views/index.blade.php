<!-- View stored in resources/views/greeting.blade.php -->

<html>
    <body>
        <h1>你好，Hello, </h1>

{{-- https://laravel.com/docs/8.x/blade#rendering-json --}}
        <div class="container">
            @foreach ($objs as $obj)
                {{ $obj->obj_key }}
            @endforeach
        </div>

        {{ $objs->links() }}


</body>
</html>
