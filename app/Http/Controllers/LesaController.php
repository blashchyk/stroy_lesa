<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forestry;

class LesaController extends Controller
{
    public function execute(Request $request){
        if($request->isMethod('post')){
            if($request->del){
                $forestry=Forestry::find($request->del);
                $forestry->delete();
                return redirect()->route('admin');

            }
            if($request->title && $request->text){
                 $forestry= new Forestry();
            
                $forestry->title = $request->title;
                $forestry->price = $request->price;
                $forestry->availability = $request->availability;
                $file = $request->file('img');
                $file->move(public_path().'/assets/images/forestry_img/', $file->getClientOriginalName());
                $forestry->img=$file->getClientOriginalName();
                $forestry->save();
                return redirect()->route('admin');
            }
           
        }
        $forestry = Forestry::all();
     
        return view('layouts.stroitelnye-lesa',[
            'forestry'=>$forestry
        ]);
    }
}
