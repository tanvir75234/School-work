<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectCategory;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Session;
use Auth;

class ProjectCategoryController extends Controller{
    public function index(){
        $all=ProjectCategory::where('procate_status',1)->orderBy('procate_id','ASC')->get();
        return view('admin.project.category.all',compact('all'));
      }
  
      public function add(){
        return view('admin.project.category.add');
      }
  
      public function edit($slug){
        $data=ProjectCategory::where('procate_status',1)->where('procate_slug',$slug)->firstOrFail();
        return view('admin.project.category.edit',compact('data'));
      }
  
      public function view($slug){
        $data=ProjectCategory::where('procate_status',1)->where('procate_slug',$slug)->firstOrFail();
        return view('admin.project.category.view',compact('data'));
      }
  
      public function insert(Request $request){
  
        $slug='C'.uniqid('20');
        $url=Str::slug($request['name'],'-');
        $creator=Auth::user()->id;
        $insert=ProjectCategory::insertGetId([
          'procate_name'=>$request['name'],
          'procate_remarks'=>$request['remarks'],
          'procate_url'=>$url,
          'procate_creator'=>$creator,
          'procate_slug'=>$slug,
          'created_at'=>Carbon::now()->toDateTimeString()
        ]);
  
        if($insert){
          Session::flash('success','successfully create project category information.');
          return redirect('dashboard/project/category/add');
        }else{
          Session::flash('error','please try again.');
          return redirect('dashboard/project/category/add');
        }
      }
  
      public function update(Request $request){
        $id=$request['id'];
        $this->validate($request,[
          'name'=>'required|string|max:255|unique:project_categories,procate_name,'.$id.',procate_id',
        ],[
          'name.required'=>'Please enter project category name.',
        ]);
  
        $slug=$request['slug'];
        $url=Str::slug($request['name'],'-');
        $editor=Auth::user()->id;
        $update=ProjectCategory::where('procate_id',$id)->update([
          'procate_name'=>$request['name'],
          'procate_remarks'=>$request['remarks'],
          'procate_url'=>$url,
          'procate_editor'=>$editor,
          'procate_slug'=>$slug,
          'created_at'=>Carbon::now()->toDateTimeString()
        ]);
  
        if($update){
          Session::flash('success','successfully update project category information.');
          return redirect('dashboard/project/category/view/'.$slug);
        }else{
          Session::flash('error','please try again.');
          return redirect('dashboard/project/category/edit/'.$slug);
        }
      }
  
      public function softdelete(){
        $id=$_POST['modal_id'];
        $soft=ProjectCategory::where('procate_status',1)->where('procate_id',$id)->update([
          'procate_status'=>0,
          'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
  
        if($soft){
          Session::flash('success','successfully delete project category information.');
          return redirect('dashboard/project/category');
        }else{
          Session::flash('error','please try again.');
          return redirect('dashboard/project/category');
        }
      }
}
