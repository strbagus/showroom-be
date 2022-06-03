<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    
    public function index() {
        $cars = Car::all();
        return response()->json($cars);
    }

    public function create(Request $request) {
        $car = new Car();
        $car->car_code = $request->car_code;
        $car->name = $request->name;
        $car->year = $request->year;
        $car->transmition = $request->transmition;
        $car->mileage = $request->mileage;
        $car->merk_code = $request->merk_code;
        $car->type_code = $request->type_code;
        $car->machine = $request->machine;
        $car->color = $request->color;
        $car->sell_price = $request->sell_price;
        $car->buy_price = $request->buy_price;
        $car->plat = $request->plat;
        $car->fuel = $request->fuel;
        $car->status = $request->status;
        $car->save();
        
        return response()->json($car);
    }
    
    public function show($id) {
        $car = Car::find($id);
        return response()->json($car);
    }

    public function update(Request $request, $id) {
        $car = new Car();
        $car->car_code = $request->car_code;
        $car->name = $request->name;
        $car->year = $request->year;
        $car->transmition = $request->transmition;
        $car->mileage = $request->mileage;
        $car->merk_code = $request->merk_code;
        $car->type_code = $request->type_code;
        $car->machine = $request->machine;
        $car->color = $request->color;
        $car->sell_price = $request->sell_price;
        $car->buy_price = $request->buy_price;
        $car->plat = $request->plat;
        $car->fuel = $request->fuel;
        $car->status = $request->status;
        $car->save();
        
        return response()->json($car);
    }
    public function destroy($id) {
        $car = Car::find($id);
        $car->delete();
        return response()->json('Car removed successfully');
    }
}