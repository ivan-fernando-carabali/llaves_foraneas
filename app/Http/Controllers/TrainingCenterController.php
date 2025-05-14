<?php

namespace App\Http\Controllers;

use App\Models\training_center;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    public function index(){
        $training_centers = training_center::all();
        return view('training_centers.index', compact('training_centers'));
    }
    public function create(){
        return view('training_centers.create');
    }

    public function store(Request $request){
        $training_center = new training_center();
        $training_center->name = $request->input('name');
        $training_center->location = $request->input('location');
        $training_center->capacity = $request->input('capacity');
        $training_center->save();
return $training_center;
    }
}
