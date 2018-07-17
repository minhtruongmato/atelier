<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
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

    public function fetchAllTrendCategory()
    {
    	$result = TrendCategory::where('is_deleted', 0)->get();
        if(!$result){
            return response()->json('No item found', 404);
        }
        return response()->json($result, 200);
    }

    public function fetchAllTrend(Request $request)
    {
    	$slug = $request->slug;
    	$detailTrendCategory = TrendCategory::where(['is_deleted' => 0, 'slug' => $slug])->first();
    	$result = Trend::where(['is_deleted' => 0, 'category_id' => $detailTrendCategory['id']])->get();
    	echo '<pre>';
    	print_r($result->toArray());die;
        if(!$result){
            return response()->json('No item found', 404);
        }
        return response()->json($result, 200);
    }
}
