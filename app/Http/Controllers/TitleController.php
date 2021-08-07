<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Models\TargetObject;

class CategoryController extends Controller
{

    public function index()
    {
        $data = TargetObject::paginate(10);
        return response()->json($data);
    }
}
