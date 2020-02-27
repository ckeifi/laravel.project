<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $titte = 'Contact us with';
        return view('contact.index')->withTitle($tittle);
    }
}
