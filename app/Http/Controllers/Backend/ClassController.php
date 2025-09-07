<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ClassModel;
use App\Models\User;
use App\Models\Class;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClassController extends Controller
{
    //
    public function class_list(){
        $data['getRecord'] = ClassModel::getRecord(Auth::user()->id, Auth::user()->is_admin);
        $data['meta_title'] = "Class";
        return view('backend.class.list',$data);
    }

    public function create_class(){
        $data['meta_title'] = "Create Class";
        return view('backend.class.create',$data);
    }

    public function insert_class(Request $request){
        
        $save = new ClassModel;

        $save->name = trim($request->name);
        $save->status = trim($request->status);
        $save->created_by_id = Auth::user()->id;
        $save->save();

        return redirect('panel/class')->with('success', 'Class Created Successfully');

        
        
    }

    public function edit_class($id){
        $data['getRecord'] = ClassModel::getSingle($id);
        $data['meta_title'] = "Edit Class";
        return view('backend.class.edit',$data);
    }

    public function update_class(Request $request,$id){


        $save = ClassModel::getSingle($id);

        $save->name = trim($request->name);
        $save->status = trim($request->status);
        
        $save->save();

        return redirect('panel/class')->with('success', 'Class Updated Successfully');
    }

    public function delete_class($id){
        $save = ClassModel::getSingle($id);
        $save->is_delete = 1;
        $save->save();
        return redirect('panel/class')->with('success', 'Class Deleted Successfully');
    }
}
