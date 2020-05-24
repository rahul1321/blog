<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function addPostView(){
    	$categories = DB::table('categories')->get();
    	return view('addpost',compact('categories'));
    }


    public function storePost(Request $request){

    	$validatedData = $request->validate([
	        'title' => 'required',
	         'imgpath' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
	    ]);

	    $data = array();
		$data['title'] = $request->title;
		$data['category_id'] = $request->category_id;
		$data['details'] = $request->details;

		$image = $request->file('imgpath');

		if ($image) {
			$imageName = time().'.'.$image->getClientOriginalExtension();

        	$image->move(public_path('images'), $imageName);

        	$data['imgpath'] = "/images/".$imageName;
		}

		$insert = DB::table('posts')->insert($data);

		return redirect('post');
    }

    public function showAllPost(){
    	$posts = DB::table('posts')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->select('posts.*', 'categories.name')
            ->get();

            return view('post',compact('posts'));
    }
}
