<?php

namespace App\Http\Controllers;

use App\Models\RecentlyTags;
use Illuminate\Http\Request;

class RecentlyTagsController extends Controller
{



    /**
     * 列表.
     *
     * @return Response
     */
    public function index()
    {
        $tags = RecentlyTags::orderByDesc('used_at')->take(500)->get();
        return $tags;
    }



    /**
     * 将新创建的文章存储到存储器
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $tag_value = $request->input('tag_value');

        $row = RecentlyTags::updateOrCreate(
            ['tag_value' => $tag_value],
            ['used_at' => now() ]
        );
        return $row;
    }
}
