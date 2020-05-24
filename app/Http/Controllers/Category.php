<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Category extends Controller
{
    public function storeCategory(Request $request){

		$this->validateData($request);

    	$data = array();
    	$data['name'] = $request->name;
    	$data['slug'] = $request->slug;

    	$category = DB::table('categories')->insert($data);

    	return redirect('categories');
    }

    public function validateData(Request $request){

		$validatedData = $request->validate([
	        'name' => 'required|unique:categories|max:25|min:5',
	        'slug' => 'required|max:25|min:5',
	    ]);
    }


    public function showAllCategories(){

    	$categories = DB::table('categories')->paginate(2);
    	return view('categories')->with('categories',$categories);
    }

    public function showEditCategoryView($id){

    	$category = DB::table('categories')->where('id',$id)->First();
    	return view('editcategory')->with('category',$category);
    }

    public function updateCategory(Request $request,$id){
		$this->validateData($request);

		$data = array();
		$data['name'] = $request->name;
		$data['slug'] = $request->slug;

		$update = DB::table('categories')->where('id',$id)->update($data);

		return redirect('categories');
    }

    public function deleteCategory($id){
    	$delete = DB::table('categories')->where('id',$id)->delete();

    	return redirect('categories');
    }


}
