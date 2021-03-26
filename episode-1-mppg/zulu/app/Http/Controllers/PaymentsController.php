<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Price;

class PaymentsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prices = Price::paginate(10);
        return view('admin.pages.payments')->with('prices', $prices);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->only('price', 'cash'), [
            'price' => 'required|string',
            'cash' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $prices = Price::create([
            'price' => $request->price,
            'cash' => $request->cash
        ]);

        if ($prices) {
            return redirect()->back()->with('message', 'Added successfuly.');
        }
        return redirect()->back()->with('message', 'Something wrong happened.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Price::destroy($id);
        return redirect()->back()->with('delete-message', 'Deleted successfuly.');
    }
}
