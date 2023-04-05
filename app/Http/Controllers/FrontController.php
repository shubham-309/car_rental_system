<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cars;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;

class FrontController extends Controller
{
    public function index()
    {
        $cars = Cars::where('trending' , '1')->take(10)->get();
        $category = Category::where('popular' , '1')->take(10)->get();
        return view('frontend.index' , compact('cars' , 'category' ));
    }

    public function category()
    {
        $category = Category::where('status' , '1')->get();
        return view('frontend.category' , compact('category'));
    }

   public function viewcategory($slug )
    {
        if(Category::where('slug' , $slug )->exists()){
           $category = Category::where('slug' , $slug )->first();
           $cars = Cars::where('cate_id' , $category->id)->where('status' , '1')->get();
           return view('frontend.cars.index' , compact('category' , 'cars'));
        }
        else
        {
            return redirect('/')->with('status' , "Slug Not Exist");
        }

    }

    public function carsview( $cate_slug  , $cars_slug )
    {
        if(Category::where('slug' , $cate_slug )->exists())
        {
            if(Cars::where('slug' , $cars_slug )->exists())
            {
                $cars = Cars::where('slug' , $cars_slug )->first();
                return view('frontend.cars.view' , compact('cars'));
            }
            else
            {
                return redirect('/')->with('status' , "The Link Is Broken ");
            }
        }
        else
        {
            return redirect('/')->with('status' , "No Such Catagory Found");
        }
    }
}
