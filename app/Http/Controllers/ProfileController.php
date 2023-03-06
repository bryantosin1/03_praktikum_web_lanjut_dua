<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id = 0) {
        if($id != 'agung' && $id != 'bryan'){
            return view('error', ['id'=>$id]);
        } else if ($id == 'agung'){
            return view('profileAgung');
        } else {
            return view('profileBryan');
        }
    }
}
