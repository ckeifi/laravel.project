<?php
namespace App\Http\Controllers;
 
class TestController
{
    public function index()
    {
        return view('Hello',['name'=>"Test Cats and Dogs"]);
    }
}