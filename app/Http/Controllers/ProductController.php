<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use PharIo\Manifest\Library;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['products'] = DB::table('products')->paginate();
        return view('pro.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pro.create');
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

        $product = new Product();
        $product->name = $request->name;
        $product->masp = $request->masp;
        $product->giasp = $request->giasp;
        $product->soluong = $request->soluong;
        $product->images = $request->images;
        $product->tomtat = $request->tomtat;
        $product->noidung =$request->noidung;
        $product->danhmuc = $request->danhmuc;
        $product->save();
        if($request->hasFile('images')) {
            $file = $request->file('images');
            $extension = $file->getClientOriginalExtension();
            $imagesname1 = '{$product->id}.jpg';
            $imagename = $request->root().'/image/$imagesname1';

            $file->move('resources/views/pape/image/',$imagesname1);
        }else{
            $imagename = '';
        }
        
        Product::where('id',$product->id)->update(['images'=>$imagename]);
        // dd(22);
        echo 'create success';
        

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
        $data = Product::where('id',$id)->first();
        return view('pro.edit', compact('data'));
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
        $data = Product::findOrfall('id');
        $data = $request -> all();
        Product::updated('data');
        return view('pro.edit');
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
        $data = Product::findOrfall('id');
        $data -> delete();
        return view('pro.index');
    }
}
