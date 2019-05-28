<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function aboutUs()
    {
        $names = [
            ['firstname'=>'name1','lastname'=>'family1'],
            ['firstname'=>'name2','lastname'=>'family2'],
            ['firstname'=>'name3','lastname'=>'family3'],
        ];
        return view('aboutUs',compact('names'));
    }
}
