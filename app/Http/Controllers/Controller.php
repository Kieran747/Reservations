<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

function getData(){
    $data['data'] = reservations::table('users')->get();
    if(count($data[0]) > 0)
    {
        return view('insertForm',$data);
    }
    else
    {
        return view('insertForm');
    }
}