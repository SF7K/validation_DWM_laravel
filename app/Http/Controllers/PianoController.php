<?php

namespace App\Http\Controllers;

use App\Piano;
use Illuminate\Http\Request;

class PianoController extends Controller
{
    // C.R.U.D.

    public function storePiano(Request $request) {
        $piano = NEW Piano([
            'brand' => $request->get('brand'),
            'keys' => $request->get('keys'),
            'height' => $request->get('height'),
            'width' => $request->get('width'),
            'depth' => $request->get('depth'),
            'color' => $request->get('color'),
        ]);
        $piano->save();
        return redirect('/pianos');
    }

    // CREATE
    public function addPiano() {
        $pianos = Piano::All();
        return view('pianos.add_piano', compact('pianos'));
    }

    // READ
    public function readPianos() {
        $pianos = Piano::All();
        return view('pianos.read_pianos_list', compact('pianos'));
    }

    // UPDATE
    public function editPiano($id) {
        $piano = Piano::find($id);
        return view('pianos.edit_piano', compact('piano'));
    }

    public function updatePiano($id, Request $request) {
        $piano = Piano::find($id);
        $piano->brand = $request->get('brand');
        $piano->keys = $request->get('keys');
        $piano->height = $request->get('height');
        $piano->width = $request->get('width');
        $piano->depth = $request->get('depth');
        $piano->color = $request->get('color');
        $piano->save();
        return redirect('/pianos');
    }

    // DELETE
    public function deletePiano($id) {
        $piano = Piano::find($id);
        $piano->delete();
        return redirect('/pianos');
    }
}