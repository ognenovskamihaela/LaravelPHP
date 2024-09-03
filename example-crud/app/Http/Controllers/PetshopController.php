<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petshop;

class PetshopController extends Controller
{
    public function index(){
        $petshops=Petshop::all();
        return view('petshop.index', compact('petshops'));
    }
    public function petshops(){
        return view('petshop.petshops-create');
    }
    public function store(Request $request){
        $data=$request->validate([
            'city'=>'required'
        ]);
        $newPetshop=Petshop::create($data);
        return redirect(route('petshop.index'));
    }
    public function edit(Petshop $petshop) {
        return view('petshop.petshops-edit', compact('petshop'));
    }
    public function update(Petshop $petshop, Request $request){
    $data=$request->validate([
        'city'=>'required'
    ]);
    $petshop->update($data);

    return redirect(route('petshop.index'))->with('success','Petshop Updated Succesfully');
}
public function delete (Petshop $petshop){
    $petshop->delete();
    return redirect(route('petshop.index'))->with('success','Petshop Deleted Succesfully');

}
}
