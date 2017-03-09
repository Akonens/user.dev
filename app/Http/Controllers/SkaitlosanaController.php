<?php
namespace App\Http\Controllers;

class SkaitlosanaController {
  public function index() {
    $name='Pweqwewqe2321312313123EsS';
    $numbers=[1,3,2,4,2,3,5,3,3,4,5,3,234,6,5345,];
    $data['list']=$numbers;
    sort ($numbers);
    $data['sorted_list']=$numbers;
    $data['bigest']=max ($numbers);
    $data['small']=min ($numbers);
    $data['count']=count ($numbers);
    $data['name']=$name;
    $data['strlen']=strlen ($name);
    $data['name']=strtolower ($name);
    $data['pretejais']=array_reverse ($numbers);
    
    return view('skaitlosana',$data);

  }


}
