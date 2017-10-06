<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use DB;
class NewsController extends Controller
{
    public function execute(Request $request){
        // $news = News::all();
        $news = DB::table('news')->orderBy('id','DESC')->paginate(3);
        return view('layouts.novosti',[
            'news'=>$news
        ]);
    }
}
