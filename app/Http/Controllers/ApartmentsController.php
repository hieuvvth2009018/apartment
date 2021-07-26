<?php

namespace App\Http\Controllers;

use App\Models\apartments;
use App\Models\champions1;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ApartmentsController extends Controller
{
public function create(){
    return view('form');
}
    public function store(Request $request)
    {
        $Apartments = new Apartments();
        $Apartments->fill($request->all());
        $Apartments->save();
        return $request;
    }
public function index(){
    $list = apartments::all();
    return view('list',[
        'list'=> $list
    ]);
}
}
