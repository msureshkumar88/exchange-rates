<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function buySell()
    {
        return view('buy_sell');
    }
}
