<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function tampil()
    {
        $makanans = "Bakso";

        return view('welcome', ['makanans' => $makanans]);
    }
}
