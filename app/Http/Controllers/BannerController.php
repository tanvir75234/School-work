<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Carbon\Carbon;
use Session;
use Image;
use Auth;

class BannerController extends Controller
{
    public function index(){
        $banner = Banner::where('banner_status',1)->orderBy('banner_id','DESC')->get();
        return view('admin.banner.all',compact('banner'));
    }

    public function add(){
        return view('admin.banner.add');
    }

    public function view($slug){
        $banner = Banner::where('banner_status',1)->where('banner_slug',$slug)->firstOrFail();
        return view('admin.banner.view',compact('banner'));
    }

    public function edit($slug){
        $banner = Banner::where('banner_status',1)->where('banner_slug',$slug)->first();
        return view('admin.banner.edit',compact('banner'));
    }

    public function insert(Request $request){

        $slug = 'B'.uniqid(20);


        $insert = Banner::insert([
            'banner_title' => $request['banner_title'],
            'banner_subtitle' => $request['banner_subtitle'],
            'banner_button' => $request['banner_button'],
            'banner_images' => $request['banner_images'],
            'banner_slug' => $slug,    

            'created_at' =>Carbon::now('asia/dhaka')->toDateTimeString(),  
            'updated_at' =>Carbon::now('asia/dhaka')->toDateTimeString(),    
        ]);

        if($insert){
            Session::flash('success',' Successfully add your banner information');
            return redirect('/dashboard/banner');
        }else{
            Session::flash('error','Opps! Operation Failed');
            return redirect('/dashboard/banner/add/'.$slug);
        }
    }   

    public function update(Request $request){

        $id = $request['banner_id'];
        $slug = 'B'.uniqid(20);


        $update = Banner::where('banner_status',1)->where('banner_id',$id)->update([
            'banner_title' => $request['banner_title'],
            'banner_subtitle' => $request['banner_subtitle'],
            'banner_button' => $request['banner_button'],
            'banner_images' => $request['banner_images'],
            'banner_slug' => $slug,

            'updated_at' => Carbon::now('asia/dhaka')->toDateTimeString(),
        ]);
        
        if($update){
            Session::flash('success',' Successfully updated your banner information');
            return redirect('/dashboard/banner');
        }else{
            Session::flash('error','Opps! Operation Failed');
            return redirect('/dashboard/banner/edit/'.$slug);
        }
    }

    public function softdelete(){
        $id = $_POST['modal_id'];
        $soft = Banner::where('banner_status',1)->where('banner_id',$id)->update([
            'banner_status' => 0,
            'updated_at' => Carbon::now('asia/dhaka')->toDateTimeString(),
        ]);

        if($soft){
            Session::flash('success', 'Successfully delete your banner information');
            return redirect('/dashboard/banner');
        }else{
            Session::flash('error', 'Please try again');
            return redirect('/dashboard/banner');
        }
    }

    public function restore(){

    }

    public function delete(){

    }
}
