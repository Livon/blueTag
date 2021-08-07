<?php

namespace App\Http\Controllers;

use App\Models\TargetObject;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

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
    public function index1(Request $request)
    {
        $title = $request->input('title', '');
//        $tags = $request->input('tags','');
        $objs = TargetObject::where('title', 'like', sprintf('%%%s%%', $title))
            ->orderByDesc('updated_at')
            ->paginate(20);
        $objs->title = $request->title;
        $objs->tags = $request->tags;

        return view('index', [
            'objs' => $objs
        ]);
    }

    /**
     * 返回视图
     */
    public function index2(Request $request)
    {
        $title_arr = explode(' ', $request->input('title', ''));
        $title = $request->input('title', '');
        $tags_arr = explode(',', $request->input('tags'));

        $table_name = 'target_object';

//        $query = DB::table($table_name);
//        $query = TargetObject::query();
//        foreach ($title_arr as $title) {
//            $query->where('title', 'LIKE', "%{$title}%");
//        }
//        foreach ($tags_arr as $tag) {
//            $query->where('tags', 'LIKE', "%{$tag}%");
//        }
//        $query->orderByDesc('updated_at');
//        $query->paginate(20);

//        $query = DB::table('target_object')
//            ->where('target_object.title', 'like', sprintf('%%%s%%', $title))
//            ->leftJoin('tags', 'target_object.id', '=', 'tags.obj_id')
//            ->select('target_object.id', 'target_object.title', 'target_object.obj_key', 'target_object.created_at',
//                DB::raw('group_concat(tag_value) tags_arr'))
//            ->groupby('target_object.id', 'tags.obj_id')
//            ->orderByDesc('target_object.updated_at')
//            ->paginate(20);

        $query = DB::table('target_object')
            ->where('target_object.title', 'LIKE', "%{$title}%")
            ->leftJoin('tags', 'target_object.id', '=', 'tags.obj_id')
            ->select('target_object.id', 'target_object.title', 'target_object.obj_key', 'target_object.created_at',
                DB::raw('group_concat(tag_value) tags_arr'))
            ->groupby('target_object.id', 'tags.obj_id')
            ->orderByDesc('target_object.updated_at')
            ->paginate(20);


//        ->where(DB::raw('group_concat(tags.tag_value) like \'%0%\''))

        $query->title = $title;
        $query->tags = $request->input('tags');
        $query->tags_arr = implode(",", $tags_arr);

//        return view('home', [
//            'query' => $query
//        ]);

//        return $query;

//        DB::enableQueryLog(); // Enable query log
//
//// Your Eloquent query executed by using get()
//
//        $tags = TargetObject::query();
//
//        dump($title_arr);
//        foreach ($title_arr as $title) {
//            dump($title);
//            $tags->where('title', 'LIKE', "%{$title}%" );
//        }
//
//        $tags->orderByDesc('updated_at');
//        $tags->paginate(2);
//
////        dd(DB::getQueryLog()); // Show results of log
//

        $listing = TargetObject::where('1', '1');
//foreach ($title_arr as $key => $value) {
//    $listing->where("where(field_{$i},".$value."_1)");
//}
$results = $listing->get();


//        return ['result' => $tags];

//        return 1;
    }




    public function index3(Request $request){

        $titles = explode(' ', $request->input('title'));

        $objs = TargetObject::whereHas('$titles', function($query) use($titles)
        {
            foreach($titles as $title)
            {
                $query->where('title', 'like', '%' . $title . '%', 'or');
            }

        });

        return ['objs'=>$objs];
    }



    public function index(Request $request){


        $titles = explode(' ', $request->input('title'));
        $title = $request->input('title');
        $tag = $request->input('tag');

//        $list = TargetObject::all(); // $collection
//
//        forEach($titles as $title){
//            $list = $list->filter(function ($item) use ($title) {
////                return $item->id < $title;
//                return stristr($item->title, $title);
//            });
//        };

        $query = TargetObject::where('title', 'like', '%' . $title . '%')
//            ->where('tags', 'like', '%' . $tag . '%', 'or')
            ->where('tags', 'like', '%' . $tag . '%')
//            ->select('title')
            ->orderByDesc('updated_at')
            ->paginate(20);

        $query->title = $title;
        $query->tag = $tag;


//        $list->get();

//        if(!empty($titles)){
//
//            $where[] = [function($query) use ($titles){
//                $query->where('title', 'like', '%' . $titles . '%', 'or');
//            }];
//        }

//        $where['status'] = 1;
//        $ids = [1,2];
//        $where[] = [function($query) use ($ids){
//            $query->whereIn('id', $ids);
//        }];
//        $list = TargetObject::where($where)
//            ->get();

//        ————————————————
//原文作者：expectedSelf
//转自链接：https://learnku.com/articles/36964
//版权声明：著作权归作者所有。商业转载请联系作者获得授权，非商业转载请保留以上作者信息和原文链接。

//        return ['list'=>$list];
        return view('home', [
            'query' => $query
        ]);
    }














}

/**
 * <script>
 * var app = ["a","1","b"];
 *
 * var app = [
 * "a",
 * "1",
 * "b"
 * ];
 * </script>
 */
