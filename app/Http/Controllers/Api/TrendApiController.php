<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\TrendCategory;
use App\Trend;
use Response;

class TrendApiController extends Controller
{
    public function __construct(){
        //
    }

    public function fetchAllTrendCategoryForHomePage()
    {
        $result = TrendCategory::where('is_deleted', 0)->take(10)->get();
        if(!$result){
            return response()->json('No item found', 404);
        }
        return response()->json($result, 200);
    }

    public function fetchAllTrendCategory()
    {
    	$result = TrendCategory::where('is_deleted', 0)->get();
        if(!$result){
            return response()->json('No item found', 404);
        }
        return response()->json($result, 200);
    }

    public function fetchAllTrend()
    {
    	$slug = Input::get('slug');
    	$detailTrendCategory = TrendCategory::where(['is_deleted' => 0, 'slug' => $slug])->first();
    	$result = Trend::where(['is_deleted' => 0, 'category_id' => $detailTrendCategory['id']])->get();
        if($slug == ''){
            $result = Trend::where(['is_deleted' => 0])->get();
        }
        foreach ($result as $key => $value) {
            $trendCatgory = TrendCategory::where(['is_deleted' => 0, 'id' => $value['category_id']])->first();
            $result[$key]['cate_title'] = $trendCatgory['title'];
            $result[$key]['image'] = json_decode($value['image'])[0];
        }
        if(!$result){
            return response()->json('No item found', 404);
        }
        return response()->json($result, 200);
    }

    public function fetchTrend(){
        $slug = Input::get('slug');
        $result = DB::table('trend')
            ->select('*')
            ->where('slug', '=', $slug)
            ->where('is_deleted', '=', 0)
            ->get();
        if(!$result){
            return response()->json('No item found', 404);
        }
        return response()->json($result[0], 200);
    }
}
