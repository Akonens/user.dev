<?php

  namespace App\Http\Controllers;



  class NumbersController
  {

      public function index (){
        $data = [
          'first_name' => 'Silvestrs',
          'last_name' => 'Jakubaitis',
        ];
        return view('numbers.index',$data);
      }
}
 ?>
