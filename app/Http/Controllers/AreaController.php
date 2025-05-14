<?php

namespace App\Http\Controllers;

use App\Models\area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index(){
        $areas = area::all();
        return view('areas.index', compact('areas'));
    }
    public function create(){
        return view('areas.create');
    }
    public function store(Request $request){
        $area = new area();
        $area->name = $request->input('name');

        $area->save();
        return $area;

    }
}
