<?php

namespace App\Http\Controllers;
Use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function dummy(){
        $a=5;
        $b=0;
        $c=$a+$b;
        echo $c;
}
}