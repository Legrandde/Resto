<?php

namespace App\Http\Controllers;

use App\Http\Requests\TableResquest;
use App\Models\Table;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function admin(){
        return view('html');
    }
    public function form(){
        return view('form');
    }

    public function createTable(TableResquest $request){
        Table::create($request->validated());
        return redirect()->route('admin.form')->with('abdallah', 'table enregistré avec succéss! youpiii');
    }
}
