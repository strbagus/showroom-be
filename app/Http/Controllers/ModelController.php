<?php

namespace App\Http\Controllers;

use App\Models\Model;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    
    public function index() {
        $models = Model::all();
        return response()->json($models);
    }

    public function create(Request $request) {
        $model = new Model();
        $model->name = $request->name;
        $model->model_code = $request->model_code;
        $model->logoname = $request->logoname;
        $model->save();
        
        $return response()->json($model);
    }
    
    public function show($id) {
        $model = Model::find($id);
        return respone()->json($model);
    }

    public function update(Request $request, $id) {
        $model = new Model();
        $model->name = $request->name;
        $model->model_code = $request->model_code;
        $model->logoname = $request->logoname;
        $model->save();
        
        $return response()->json($model);
    }
    public function destroy($id) {
        $model = Model::find($id);
        $model->delete();
        return response()->json('Model removed successfully');
    }
}
