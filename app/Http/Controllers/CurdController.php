<?php

namespace App\Http\Controllers;

use App\Myusre;
use Illuminate\Http\Request;

class CurdController extends Controller
{
    
    public function index(){
    	for($i=0;$i<5;$i++){
            echo $i;
            //echo $i;
            //for($j=0;$j<$i;$j){
              //  echo $i;
            //}
        }
    	return view('index');

    }
    public function Add(Request $request){

    	$userdata = new Myusre();
    	$userdata->name = $request->name;
    	$this->validate($request, [

                'image' => 'required',
                'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        
    	$image = $request->file('image');
    	$name  = $image->getClientOriginalName();
    	
    	
        $image->move(public_path().'/images/', $name);
        $userdata->image = $name;
    	$userdata->save();
    	return view('index');
    }
    public function Fetch(){
    	$allname = Myusre::all()->toArray();
    	// echo "<pre>";
    	// print_r($allname);
    	// echo "</pre>";
    	// die;
    	return view('showdata',compact('allname'));
    }
    public function Edit($id){
    	$allname = Myusre::find($id)->toArray();
    	return view('edit',compact('allname'));
    }
    public function Update(Request $request){
    	// print_r($request->id);
    	// print_r($request->name);
    	$flight = Myusre::find($request->id);
    	//$userdata = new Myusre();
    	$flight->id = $request->id;
    	$flight->name = $request->name;
    	$flight->save();
    }

}