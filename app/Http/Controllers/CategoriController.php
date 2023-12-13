<?php

namespace App\Http\Controllers;


use App\Models\Categoris;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class CategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd(111);
        $data['categoris'] = DB::table('categoris')->get();
        return view('page.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd(111);
        $categori = new Categoris;
        $categori->name = $request->name;
        $categori->slug = $request->slug;
       

        $categori->save();
        // return redirect()->route('cate.create');
        echo 'thanh cong';
        return view('page.index');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categori = Categoris::where('id',$id)->first();
        return view('page.edit',compact('categori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
        $categori = Categoris::findOrfail($id);
       
        $categori = $request->all();
        Categoris::updated($categori);
        // dd($data);

        echo 'update success';
        return view('page.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // dd(111);
        $categoris = Categoris::findOrfail($id);
        $categoris->delete();
        echo 'delete success';
        return view('page.index');
    }
}
