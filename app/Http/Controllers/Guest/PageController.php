<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PageController extends Controller
{
    public function index(){

        $trains = Train::where('from_time','>=', now('Europe/Rome'))
        ->orderBy('from_time', 'ASC')
        ->get();

        return view ('home', compact('trains'));
    }
}
