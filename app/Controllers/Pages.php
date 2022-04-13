<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = ['title'=>'Centre Missionnaire de Lubumbashi'];
        return view('pages/home', $data);
    }    
}
