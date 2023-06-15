<?php
namespace App\Http\Controllers;

use App\Models\test;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function index()
    {
        //
        $test = test::all();
        // dd($fakultas);
        return view('test.index')->with('test', $test);
    }
}