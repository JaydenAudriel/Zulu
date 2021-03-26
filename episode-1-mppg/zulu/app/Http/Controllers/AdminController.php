<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Logs;

class AdminController extends Controller
{
    /**
     * Show login form
     * @return \Illuminate\Http\Response
     */
    public function loginForm()
    {
        return view('admin.pages.login');
    }

    /**
     * Show admin dashboard
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latest = Logs::orderBy('id', 'DESC')->limit(3)->get();
        $totals = Logs::selectRAW("SUM(cash) AS 'cash', SUM(price) AS 'price'")->first();
        $top_buyers = Logs::selectRAW("SUM(cash) AS 'cash', SUM(price) AS 'price', user_buyer")
            ->groupBy('user_buyer')
            ->orderBy('price', 'DESC')
            ->limit(3)
            ->get();
        return view('admin.pages.dashboard')->with([
            'latest' => $latest,
            'totals' => $totals,
            'top_buyers' => $top_buyers
        ]);
    }


    /**
     * User verification and loggin
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->only('username', 'password'), [
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $user = User::where('login', $request->username)
            ->where('password', toMD5($request->password))
            ->where('web_admin', '9')
            ->first();

        if ($user) {
            Auth::login($user);
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->with('error-login', 'Credentials not found.');
    }

    /**
     * Destroy user session
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
