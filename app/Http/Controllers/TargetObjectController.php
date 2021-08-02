<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TargetObject;

class TargetObjectController extends Controller
{
    //

    //

    /**
     * 显示文章列表.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * 创建新文章表单页面
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * 将新创建的文章存储到存储器
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        $obj_key = $request->input('obj_key');
        $title = $request->input('title');

//        $obj = TargetObject::create([
//            'obj_key' => $obj_key,
//        ]);

//        $obj1 = TargetObject::create($request->all());

        $obj = TargetObject::updateOrCreate(
            ['obj_key' => $obj_key],
            ['title' => $title]
        );

//        return [$request, $obj_key, $obj];
        return $obj;
    }

    /**
     * 显示指定文章
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        // https://laravel.com/docs/8.x/eloquent#retrieving-single-models
        return TargetObject::find($id);

    }

    /**
     * 显示编辑指定文章的表单页面
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 在存储器中更新指定文章
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 从存储器中移除指定文章
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}

/**
 * https://blog.csdn.net/fationyyk/article/details/50836122
 * Laravel框架学习(RESTFul用法)
 */
