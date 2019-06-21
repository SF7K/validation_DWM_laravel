<?php

namespace App\Http\Controllers;
use App\Piano;
use Illuminate\Http\Request;

class PublicPianoController extends Controller
{
    // READ
    public function readPianos() {
        $pianos = Piano::All();
        return view('pianos.read_pianos_list', compact('pianos'));
    }
}
