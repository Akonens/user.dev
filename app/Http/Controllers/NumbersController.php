<?php

  namespace App\Http\Controllers;

  use Illuminate\Http\Request;

  use App\Http\Controllers\Controller;

  class NumbersController{

      public function index (){
        $data = [
          'first_name' => 'Silvestrs'

        ];
        return view('numbers.index',$data);
      }
}
 ?>
