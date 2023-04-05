<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.Category.index', compact('category'));
    }

        /*Addind a New Comapny*/

    public function insert(Request $req)
    {
        $category = new Category();


        $category->name = $req->input('name');
        $category->slug = $req->input('slug');
        $category->discription = $req->input('discription');
        $category->status = $req->input('status')  == TRUE?'1':'0';
        $category->popular = $req->input('popular')  == TRUE?'1':'0';

        $category->save();
        return redirect('/category')->with('status', "Category Added Succesfully");
    }

    public function add()
    {
        return view('admin.Category.add');
    }



    public function edit($id)
    {
        $category= Category::find($id);
        return view('admin.Category.edit', compact('category'));
    }

        /*Updating Comapny Data*/


    public function update(Request $req , $id){
        $category= Category::find($id);
        $category->name = $req->input('name');
        $category->slug = $req->input('slug');
        $category->discription = $req->input('discription');
        $category->status = $req->input('status')  == TRUE?'1':'0';
        $category->popular = $req->input('popular')  == TRUE?'1':'0';

        $category->update();
        return redirect('/category')->with('status', "Category Updated Succesfully");
    }


        /*Deleting Comapny*/

    public function delete($id){
        $category= Category::find($id);
        $category->delete();
        return redirect('/category')->with('status', "Category Deleted Succesfully");
    }
}
