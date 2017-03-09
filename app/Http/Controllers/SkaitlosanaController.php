<?php
namespace App\Http\Controllers;

class SkaitlosanaController {
  public function index() {
    $numbers=[1,3,2,4,2,3,5,3];
    $data['list']=$numbers;
    sort ($numbers);
    $data['sorted_list']=$numbers;
    
    return view('skaitlosana',$data);

  }


}
