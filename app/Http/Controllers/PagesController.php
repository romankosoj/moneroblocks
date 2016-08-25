<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class PagesController extends BaseController
{
    public function richlist(){
      return view('static/rich_list');
    }
}
