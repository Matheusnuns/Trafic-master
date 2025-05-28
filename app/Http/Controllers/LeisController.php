<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ctb;

class LeisController extends Controller
{
    public function index(){

        $leis = ctb::all();

        return view('leis.index', compact('leis'));
    }

    public function create(){

        return view('leis.create');
    }

    public function store( Request $request){

        $lei = new Ctb;
        $lei->nome_lei = ucwords($request->lei);

        $lei -> save();

        return redirect('/leis');
    }

    public function edit(){
        return;
    }
    public function update(){
        return;
    }
    public function destroy(){
        return;
    }
    public function show(){
        return;
    }
}
