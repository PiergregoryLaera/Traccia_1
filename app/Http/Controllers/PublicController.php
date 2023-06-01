<?php

namespace App\Http\Controllers;

use App\Models\Comuni;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        $comuni = Comuni::all();
        return view('welcome', compact('comuni'));
    }

    public function viewCity(Request $request)
    {
        $comune = Comuni::find($request->comune);
        return view('googleMap', compact('comune'));
    }
}