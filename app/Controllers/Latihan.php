<?php 

namespace App\Controllers;

use App\Models\Calculator;

class Latihan extends BaseController
{
  public function latihan1(): void 
  {
        echo"<h1>Perkenalkan Saya</h1>";
        echo"Nama saya Noval Mahardhika Saya tinggal di daerah Tangerang
        olahraga yang saya sukai Futsal dan Bulutangkis
        ";
  }

  public function latihan2($params1,$params2){

    $model = new Calculator();    

    $result = $model->sum($params1, $params2);

    echo "Hasil Penjumlahan dari $params1 + $params2 = $result";
  }

   public function latihan3($params1,$params2){

    $model = new Calculator();

    $result = $model->sum($params1, $params2);

    $data = [
      'value1'=> $params1,
      'value2'=> $params2,
      'result' => $result
    ];
    

    return view('view-latihan', $data);
  }
}