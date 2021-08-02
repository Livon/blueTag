<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    //

    /**
     * 列表.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $obj_id = $request->input('obj_id');
        $tags = Tag::where('obj_id', $obj_id)
//            ->orderBy('name')
//            ->take(100)
            ->get();
        return $tags;
    }


    /**
     * 近期使用.
     */
    public function recentlyTags(Request $request)
    {
        $t1 = DB::table('tags')
            ->select('tag_value')
            ->distinct('tag_value')
            ->orderByDesc('updated_at')
            ->get();

//        return Tag::orderByDesc('updated_at')->select('tag_value')->distinct()->take(100)->get();
        $t2 = Tag::select('tag_value')->distinct()->take(100)->get();

        return [$t1, $t2];

//        return Tag::addSelect([
//            'tag_value' => Tag::select('tag_value')
//                ->whereColumn('tag_value', 'tag_value')
//                ->orderByDesc('updated_at')
//                ->distinct()
//                ->limit(1)
//        ])->get();
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
        $obj_id = $request->input('obj_id');
        $tag_value = $request->input('tag_value');

        $row = Tag::updateOrCreate(
            ['obj_id' => $obj_id, 'tag_value' => $tag_value],
            ['deleted_at' => null ]
        );
        return $row;
    }

    /**
     * 显示指定文章
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
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
        return Tag::destroy($id);
//        return Tag::find($id)->delete();
    }
//————————————————
//版权声明：本文为CSDN博主「野蛮秘籍」的原创文章，遵循CC 4.0 BY-SA版权协议，转载请附上原文出处链接及本声明。
//原文链接：https://blog.csdn.net/fationyyk/article/details/50836122
}
