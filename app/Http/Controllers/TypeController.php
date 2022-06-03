<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    
    public function index() {
        $types = Type::all();
        return response()->json($types);
    }

    public function create(Request $request) {
        $type = new Type();
        $type->name = $request->name;
        $type->model_code = $request->model_code;
        $type->logoname = $request->logoname;
        $type->save();
        
        return response()->json($type);
    }
    
    public function show($id) {
        $type = Type::find($id);
        return respone()->json($type);
    }

    public function update(Request $request, $id) {
        $type = new Type();
        $type->name = $request->name;
        $type->model_code = $request->model_code;
        $type->logoname = $request->logoname;
        $type->save();
        
        return response()->json($type);
    }
    public function destroy($id) {
        $type = Type::find($id);
        $type->delete();
        return response()->json('Type removed successfully');
    }
}
