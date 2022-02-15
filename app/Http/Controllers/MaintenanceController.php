<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    //
    public function create(){
        $users = User::get();
        return view('maintenance', compact('users'));
    }

    public function createUpdate($id){
        $user = User::find($id);
        return view('update-role', compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->role_id = $request->role;
        $user->save();
        return redirect('success-update');
    }

    public function delete($id){
        $user = User::where('account_id', $id);
        $user->delete();
 
        return redirect('success-checkout');
    }
}
