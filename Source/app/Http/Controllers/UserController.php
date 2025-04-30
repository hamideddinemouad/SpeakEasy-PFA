<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeRoleRequest;
use App\Models\User;
use Illuminate\Http\Request;
use app\Http\Controllers\DashboardController;

class UserController extends Controller
{
    //
    public function changeRole(ChangeRoleRequest $request, $id){
        $user = User::find($id);
        $user->role = $request->role;
        $user->save();
        return redirect('/admindashboard');
        // dd($user);
    }
    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/admindashboard');
    }
}
