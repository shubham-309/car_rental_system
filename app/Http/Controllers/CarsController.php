<?php

namespace App\Http\Controllers;
use App\Models\Cars;
use App\Models\Category;
use Illuminate\Support\Facades\File;


use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index(){
        $cars = Cars::all();
        return view('admin.Cars.index', compact('cars'));
    }

        /*Adding New Cars Data*/


    public function add()
    {
        $category= Category::all();
        return view('admin.Cars.add' , compact('category'));
    }

    public function insert(Request $req){

        $cars = new Cars();

        $cars->cate_id = $req->input('cate_id');
        if($req->hasFile('image'))
        {
            $file = $req->File('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/cars/',$filename);
            $cars->image = $filename;
        }
        $cars->name = $req->input('name');
        $cars->slug = $req->input('slug');
        $cars->registration_no = $req->input('registration_no');
        $cars->discription = $req->input('discription');
        $cars->original_price = $req->input('original_price');
        $cars->selling_price = $req->input('selling_price');
        $cars->quantity = $req->input('quantity');
        $cars->tax = $req->input('tax');
        $cars->status = $req->input('status')  == TRUE ?'1':'0';
        $cars->trending = $req->input('trending')  == TRUE ?'1':'0';


        $cars->save();
        return redirect('/dashboard')->with('status', "Cars Added Succesfully");


    }

        /*Updating Cars Data*/


    public function edit($id){
        $cars = Cars::find($id);
        return view('admin.Cars.edit' , compact('cars'));
    }

    public function update(Request $req , $id)
    {
        $cars = Cars::find($id);
        if($req->hasFile('image'))
        {
            $path= 'assets/uploads/cars/'.$cars->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $req->File('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/cars/',$filename);
            $cars->image = $filename;
        }
        $cars->name = $req->input('name');
        $cars->slug = $req->input('slug');
        $cars->registration_no = $req->input('registration_no');
        $cars->discription = $req->input('discription');
        $cars->original_price = $req->input('original_price');
        $cars->selling_price = $req->input('selling_price');
        $cars->quantity = $req->input('quantity');
        $cars->tax = $req->input('tax');
        $cars->status = $req->input('status')  == TRUE?'1':'0';
        $cars->trending = $req->input('trending')  == TRUE?'1':'0';
        $cars->update();
        return redirect('/cars')->with('status', "Cars Updated Succesfully");

    }

        /*Deleting Carse Data*/

    public function delete($id){
        $cars= Cars::find($id);
        if($cars->image)
        {
            $path= 'assets/uploads/cars/'.$cars->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $cars->delete();
        return redirect('/cars')->with('status', "Cars Deleted Succesfully");
    }
}
