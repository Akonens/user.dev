<?php
namespace App\Http\Controllers;

class UsersController{

  public function index() {
    $data['users'] = \App\User::all();
    return view('allusers', $data);
  }
  public function singleuser($id) {
     $data ['singleuser'] = \App\User::find($id);
    return view('singleusers', $data);
  }
}

 ?>
