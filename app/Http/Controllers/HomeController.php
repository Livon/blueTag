<?php

namespace App\Http\Controllers;

use App\Models\TargetObject;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * 返回视图
     */
    public function index0()
    {

        $array = ['a', '1', 'b'];
        $json = '{"a":"5"}';

        return View::make('greeting1', ['name' => 'James', 'array' => $array, 'json' => $json]);
    }
    /**
     * 返回视图
     */
    public function index()
    {
        $obj = TargetObject::paginate(20);

        return view('index', [
            'objs' => $obj
        ]);
    }
}

/**
<script>
    var app = ["a","1","b"];

    var app = [
    "a",
    "1",
    "b"
    ];
</script>
 */
