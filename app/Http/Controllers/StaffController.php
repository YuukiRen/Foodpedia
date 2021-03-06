<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Staff;
class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function home(){
    	$staff = Staff::all();
        $privilege = sprintf("%010d",decbin(\Auth::user()->privilege));
        if($privilege[1] == '1')
            return view('admin.staff', ['staff'=>$staff]);
        else
            return redirect('admin/dashboard')->with('error','Anda tidak memiliki akses ke fitur staff.');
    	
    }

    public function add(Request $request){
    	$this->validate($request,[
    		'name'=>'required',
            'age'=>'required',
            'jabatan'=>'required'
    	]);
    	$staff = new Staff;
    	$staff->name = $request->input('name');
        $staff->age = $request->input('age');
        $staff->jabatan = $request->input('jabatan');
    	$staff->save();
    	return redirect('/admin/staff')->with('info','Staff Saved Successfully!');
    }
    public function update($id){
    	$staff = Staff::find($id);
    	return view('update', ['staff'=>$staff]);
    }
    public function edit(Request $request, $id){
    	$this->validate($request,[
    		'name'=>'required',
            'age'=>'required',
            'jabatan'=>'required'
        ]);
        $staff = Staff::find($id);
        $staff->name = $request->input('name');
        $staff->age = $request->input('age');
        $staff->jabatan = $request->input('jabatan');
        $staff->save();
        return redirect('/admin/staff')->with('info','staff Updated Successfully!');
    }
    public function read($id){
    	$staff=Staff::find($id);
    	return view('read', ['menu'=>$staff]);

    }
    public function delete($id){
    	Staff::where('id',$id)->delete();
    	return redirect('/admin/staff')->with('info','staff Deleted Successfully!');
    }
}
