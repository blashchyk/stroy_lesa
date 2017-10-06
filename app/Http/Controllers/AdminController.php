<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use DB;
class AdminController extends Controller
{
    public function execute(Request $request){
        if($request->isMethod('post')){
            if($request->del){
                $news=News::find($request->del);
                $news->delete();
            }
            if($request->title && $request->text){
                $news = new News();
                $news->title = $request->title;
                $news->text = $request->text;
                $file = $request->file('img');
                $file->move(public_path().'/assets/images/news_img/', $file->getClientOriginalName());
                $news->img=$file->getClientOriginalName();
                $news->save();
            }
            
        }

        $news = DB::table('news')->paginate(1);
        $towers = DB::table('towers')->paginate(2);
        $forestry = DB::table('forestries')->paginate(3);
        return view('layouts.admin',[
            'news'=>$news,
            'towers'=>$towers,
            'forestry'=>$forestry
        ]);
    }
}
