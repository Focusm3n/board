<?php

namespace App\Http\Controllers;

use App\Models\Bb;
use Illuminate\Http\Request;

class BbsController extends Controller
{
    public function index()
    {
        $bbs = Bb::all();
        $s = "Объявления\r\n\r\n";
        foreach ($bbs as $bb) {
            $s .= $bb->id . "\r\n";
            $s .= $bb->title . "\r\n";
            $s .= $bb->content . "\r\n";
            $s .= $bb->price . " руб.\r\n";
            $s .= "\r\n";
        }
        return response($s)->header('Content-Type', 'text/plain');
    }
}