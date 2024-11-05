<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function user()
    {
        $users = User::all();
        return view("admin.user", [
            'users' => $users
        ]);
    }
    public function deleteuser($id)
    {
    
        $users = User::find($id);
        $users->delete();
        return redirect()->back();
    }
}
