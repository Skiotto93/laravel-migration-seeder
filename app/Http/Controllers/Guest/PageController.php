<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() 
    {    

        $trains = Train::where('departure_time', '>=', Carbon::now())->get();

        return view('homepage', compact('trains'));
    }
}
