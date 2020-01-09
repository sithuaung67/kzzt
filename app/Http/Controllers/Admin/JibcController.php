<?php

namespace App\Http\Controllers\Admin;

use App\Jnews;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class JibcController extends Controller
{
    public function getAllPost(){
        $jnews=Jnews::OrderBy('id','desc')->get();
        return view('welcome')->with(['jnews'=>$jnews]);// to send category id to select ->allPost.blade
    }
    public function postNewUploadPost(Request $request){
        $this->validate($request,[
            'post_title'=>'required',
            'post_content'=>'required',
            'image'=>'required|mimes:jpg,png,gif,jpeg',

        ]);

        $image_name=$request['post_title'].'.'.$request->file('image')->getClientOriginalExtension();
        $img_file=$request->file('image');

        $jnews=new Jnews();
        $jnews->title=$request['post_title'];
        $jnews->content=$request['post_content'];
        $jnews->image=$image_name;
        $jnews->user_id=Auth::user()->id;
        $jnews->save();
        Storage::disk('image')->put($image_name, file::get($img_file));
//        return view('welcome')->with(['jnews'=>$jnews]);
        return redirect()->back();
    }

    public function getDeletePost(Request $request){
        $id=$request['id'];
        $jnews=Jnews::whereId($id)->firstOrFail();
        Storage::disk('image')->delete($jnews->image);
        $jnews->delete();
        return redirect()->back();
    }
    public function getLogout(){
        Auth::logout();
        $jnews=Jnews::OrderBy('id','desc')->get();
        return view('welcome')->with(['jnews'=>$jnews]);
    }
    public function getPostImage($img_name){
        $file=Storage::disk('image')->get($img_name);
        return response($file, 200);
    }

}
