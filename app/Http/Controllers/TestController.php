<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public  function  index(){
        $data = Category::with('posts')->get();
        return $data;
    }
}
