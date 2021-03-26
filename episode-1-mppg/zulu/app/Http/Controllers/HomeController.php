<?php

namespace App\Http\Controllers;

use App\Models\Price;

class HomeController extends Controller
{
    /**
     * Shows main index view
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices = Price::select('price', 'cash')->get();
        return view('home.pages.form')->with('prices', $prices);
    }
}
