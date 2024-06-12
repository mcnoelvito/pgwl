<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Explore KWB with Mine",
        ];
        if (Auth()->check()) {

            return view('index', $data);
        } else {
            return view('index-public', $data);
        }
    }



    public function table()
    {
        $data = [
            "title" => "Data",
        ];
        return view('table', $data);
    }
}
