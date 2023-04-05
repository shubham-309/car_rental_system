<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;


use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function book()
    {
        return view('Booking.view');
    }

    public function available(Request $req, $start)
    {
        $car= DB::select("SELECT * FROM cars WHERE id NOT IN(SELECT car_id FROM bookings WHERE '$start' BETWEEN start_date AND end_date)");
        return Response()->json(['data'=>$car]);
    }
}
