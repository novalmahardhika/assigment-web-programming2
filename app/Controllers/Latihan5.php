<?php

namespace App\Controllers;

class Latihan5 extends BaseController
{
  public function index(){
    $data["judul"] = "Halaman Depan"; 

    echo view('v_header', $data);
    echo view('v_index', $data);
    echo view('v_footer', $data);
  }

  public function about(){
    $data["judul"] = "Halaman Depan"; 

    echo view('v_header', $data);
    echo view('v_about', $data);
    echo view('v_footer', $data);
  }
}