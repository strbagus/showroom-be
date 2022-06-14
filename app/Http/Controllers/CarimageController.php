<?php

namespace App\Http\Controllers;

use App\Models\Carimage;
use Illuminate\Http\Request;

class CarimageController extends Controller
{
    
    public function index() {
        $carimages = Carimage::all();
        return response()->json($carimages);
    }

    public function create(Request $request) {
        $carimage = new Carimage();
        $carimage->filename = $request->filename;
        $carimage->car_id = $request->car_id;
        $carimage->save();
        
        return response()->json($carimage);
    }
    
    public function show($id) {
        $carimage = Carimage::find($id);
        return response()->json($carimage);
    }

    public function update(Request $request, $id) {
        $carimage = new Carimage();
        $carimage->filename = $request->filename;
        $carimage->car_id = $request->car_id;
        $carimage->save();
        
        return response()->json($carimage);
    }
    public function destroy($id) {
        $carimage = Carimage::find($id);
        $carimage->delete();
        return response()->json('Carimage removed successfully');
    }
}
