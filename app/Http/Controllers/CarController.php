<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index () {
        $data['cars'] = Car::all();
        return view('car.index', $data);
    }

    public function view($id) {
        $data['car'] = Car::findOrFail($id);
        return view('car.view', $data);
    }
}
