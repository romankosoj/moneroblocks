<?php

namespace App\Http\Controllers;

class StaticPagesController extends Controller
{
    public function richlist(){
      return view('static/rich_list');
    }
  
    public function api(){
      return view('static/api_index');
    }
}
