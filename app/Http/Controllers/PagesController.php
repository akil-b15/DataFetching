<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class PagesController extends Controller
{
  public function index(){
    $users = User::all();
    return view ('welcome', ['users'=>$users]);

  }

  public function search(Request $request){
    $search= $request->search;
    
    $users = User::orWhere('first_name', 'like', "{$search}%")
    ->orWhere('last_name', 'like', "{$search}%")
    ->orWhere('email', 'like', "{$search}%")
    ->orderBy('first_name', 'desc')
    ->paginate(12);
    return view ('welcome', compact('users'));
  }
}
