<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Faq;
class FaqController extends Controller
{
    
    public function home(){
    	$faq = Faq::all();
    	return view('welcome', ['faq'=>$faq]);
    }

    public function add(Request $request){
    	$this->validate($request,[
    		'title'=>'required',
            'description'=>'required',
    	]);
    	$faq = new Contact;
    	$faq->title = $request->input('title');
        $faq->description = $request->input('description');
    	$faq->save();
    	return redirect('/')->with('info','Menu Saved Successfully!');
    }
    public function update($id){
    	$faq = Faq::find($id);
    	return view('update', ['faq'=>$faq]);
    }
    public function edit(Request $request, $id){
    	$this->validate($request,[
    		'title'=>'required',
            'description'=>'required',
    	]);
        $faq = Faq::find($id);
    	$faq->title = $request->input('title');
        $faq->description = $request->input('description');
    	$faq->save();
        return redirect('/')->with('info','Menu Updated Successfully!');
    }
    public function read($id){
    	$faq=Faq::find($id);
    	return view('read', ['faq'=>$faq]);

    }
    public function delete($id){
    	Faq::where('id',$id)->delete();
    	return redirect('/')->with('info','Menu Deleted Successfully!');
    }
}
