<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class SweetController extends Controller
{
    public function index(){
        Alert::toast('Info Toast','info');
    }
}
