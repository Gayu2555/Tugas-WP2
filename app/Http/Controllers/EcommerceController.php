<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function index()
    {
        return view('ecommerce.index'); // Merender file index.blade.php
    }
}
