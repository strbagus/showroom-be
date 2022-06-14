<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    
    public function index() {
        $merks = Merk::all();
        return response()->json($merks);
    }

    public function create(Request $request) {
        $merk = new Merk();
        $merk->name = $request->name;
        $merk->logoname = $request->logoname;
        $merk->save();
        
        return response()->json($merk);
    }
    
    public function show($id) {
        $merk = Merk::find($id);
        return response()->json($merk);
    }

    public function update(Request $request, $id) {
        $merk = new Merk();
        $merk->name = $request->name;
        $merk->logoname = $request->logoname;
        $merk->save();
        
        return response()->json($merk);
    }
    public function destroy($id) {
        $merk = Merk::find($id);
        $merk->delete();
        return response()->json('Merk removed successfully');
    }
}
