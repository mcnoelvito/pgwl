<?php

namespace App\Http\Controllers;
use App\Models\Points;
use App\Models\Polylines;
use App\Models\Polygons;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->points = new Points();
        $this->polylines = new Polylines();
        $this->polygons = new Polygons();
    }

    public function index()
    {
        $data=[
        "title" =>"Peta Laravel PGWL",
        "total_point" => $this->points->count(),
        "total_polyline" => $this->polylines->count(),
        "total_polygon" => $this->polygons->count(),
        ];

        return view('dashboard', $data);
        }
}
