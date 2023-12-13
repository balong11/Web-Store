<?php

namespace App\Http\Controllers;

use App\Models\Paper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PharIo\Manifest\Library;


class PaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['papers'] = DB::table('papers')->paginate();
        return view('pape.index',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pape.create');
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
        $paper = new Paper();
        $paper->name = $request->name;
        $paper->danhmuc = $request->danhmuc;
        $paper->images = $request->images;
        $paper->tomtat = $request->tomtat;
        $paper->noidung = $request->noidung;
        $paper->tinhtrang = $request->tinhtrang;
        $paper->save();

        if($request->hasFile('images')) {
            $file = $request->file('images');
            $extension = $file->getClientOriginalExtension();
            $imagesname1 = '{$paper->id}.jpg';
            $imagename = $request->root().'/image/$imagesname1';

            $file->move('resources/views/pape/image/',$imagesname1);
        }else{
            $imagename = '';
        }
        
        Paper::where('id',$paper->id)->update(['images'=>$imagename]);
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
        // dd(1111);

        $data = Paper::where('id',$id)->first();
        return view('pape.edit',compact('data'));
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
        $data = Paper::findOrfail($id);
        $data =$request -> all();
        Paper::updated($data);
        echo 'edit success';
        return view('pape.create');
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
        $papers = Paper::findOrfail($id);
        $papers->delete();
        echo 'delete succsess';
        // return view('pape.index');
    }
}
