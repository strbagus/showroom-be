<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index() {
        $admins = Admin::all();
        return response()->json($admins);
    }

    public function create(Request $request) {
        $admin = new Admin();
        $admin->username = $request->username;
        $admin->name = $request->name;
        $admin->password = $request->password;
        $admin->level = $request->level;
        $admin->save();
        
        return response()->json($admin);
    }
    
    public function show($id) {
        $admin = Admin::find($id);
        return response()->json($admin);
    }

    public function update(Request $request, $id) {
        $admin = new Admin();
        $admin->username = $request->username;
        $admin->name = $request->name;
        $admin->password = $request->password;
        $admin->level = $request->level;
        $admin->save();
        
        return response()->json($admin);
    }
    public function destroy($id) {
        $admin = Admin::find($id);
        $admin->delete();
        return response()->json('Admin removed successfully');
    }
}
