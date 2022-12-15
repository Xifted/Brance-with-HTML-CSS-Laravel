<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Portofolio;
use App\Models\CC;
use Illuminate\Support\Facades\Auth;

class PortofolioController extends Controller
{
    public function index()
    {
        $prf = Portofolio::all();
        $cc = CC::find(1);
        return view('portofolio.portofolio', [
            'content' => $prf,
            'cc' => $cc,
            'login'=> Auth::check()
        ]);
    }
    public function admin()
    {
        $prf = Portofolio::all();
        $cc = CC::find(1);
        return view('portofolio.admin', [
            'content' => $prf,
            'cc' => $cc,
            'login'=> Auth::check()
        ]);
    }
    public function show($id){
        $detail = Portofolio::find($id);
        $cc = CC::find(1);
        return view('portofolio.show', ['detail' => $detail,'cc' => $cc]);
    }
    public function create(){
        return view('portofolio.create');
    }
    public function store(request $request){
        Portofolio::create([
            'name'=>$request->input('title'),
            'desc'=>$request->input('description'),
            'img'=>$request->input('gambar_url'),
            'year'=>$request->input('year')
        ]);
        return redirect('portofolio-admin');
    }
    public function destroy($id){
        Portofolio::find($id)->delete();
        return redirect('portofolio-admin');
    }
    public function edit($id){
        $item = Portofolio::find($id);
        return view('portofolio.edit', [
            'content'=>$item
        ]);
    }
    public function update($id, Request $request){
        $item = Portofolio::find($id);
        $item->update([
            'name'=>$request->input('title'),
            'desc'=>$request->input('description'),
            'img'=>$request->input('gambar_url'),
            'year'=>$request->input('year')

        ]);
        return redirect('portofolio-admin');
    }
    public function cari(Request $request){
        $cari = $request->cari;

        $item = DB::table('portofolio')->where('name', 'like', "&".$cari."%")->paginate();
        return view('portofolio.portofolio',['prf'=>$item]);
    }
}
