<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logs;

class LogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logs = Logs::orderBy('id', 'DESC')->paginate(10);
        return view('admin.pages.logs')->with('logs', $logs);
    }
}
