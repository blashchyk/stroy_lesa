<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tower;

class TowerController extends Controller
{
    public function execute(Request $request){
        if($request->isMethod('post')){
            if($request->del){
                $tower=Tower::find($request->del);
                $tower->delete();
                return redirect()->route('admin');
            }
            if($request->title && $request->text){
                $tower= new Tower();
        
            $tower->title = $request->title;
            $tower->price = $request->price;
            $tower->availability = $request->availability;
            $file = $request->file('img');
            $file->move(public_path().'/assets/images/tower_img/', $file->getClientOriginalName());
            $tower->img=$file->getClientOriginalName();
            $tower->save();
            return redirect()->route('admin');
            }
          
            
        }

        $towers = Tower::all();
     
        return view('layouts.vyshki-tury',[
            'towers'=>$towers
        ]);
    }
}
