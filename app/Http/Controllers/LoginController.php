<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Logins;
use Faker\Guesser\Name;

class LoginController extends Controller
{
    public function __construct()
    {
        @session_start();
    }
    public function login(Request $request)
    {
        dd(1111);
      
        if($request->name==''||$request->password==''){
            return redirect('/')->with('notice','tài khoản và mật khẩu khong được để trống');
        }
       
        elseif($request->name=='admin'&&$request->password=='123456'){
            $_SESSION['admin']='Admin';
            return redirect('auth.admin');
        }else{
            return redirect('/')->with('notice','tài khoản hoặc mật khẩu không chính xác');
        }
    }
    public function admin(Request $request)
    {
        // dd(111);
        if(!isset($_SESSION['login'])){
            return view('auth.login');
        }
        if($request->name=='admin'&&$request->password=='123456')
        return view('auth.admin');
    }
    public function logout()
    {
        $_SESSION['admin']='';
        return redirect('/')->with('notice','bạn đã đăng suất khỏi hệ thống');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // if(!isset($_SESSION['login'])){  
        //     return view('auth.login');
        // }else{
        //     $data['login'] = DB::table('logins')->get();
        //     return view('auth.master',$data);
        // }
        $data['login'] = DB::table('logins')->get();
        return view('auth.master',$data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('auth.create');
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
        if($request->name==''||$request->password==''){
           echo "tài khoản và mật khẩu khong được để trống";
        }
        // dd(1111);
        $login = new Logins;
        $login->name = $request->name;
        $login->password = $request->password;
        $login->save(); 
        if($request->name!=''||$request->password!=''){
           redirect()->route('admincp.create');
        }
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
        $data = Logins::where('id',$id)->first();
        return view('auth.edit',compact('data'));
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
        $data = Logins::findOrfail($id);

        $data = $request->all();

        $data['password'] = Hash::make($request->password);

        Logins::updated($data);
        echo 'aaaaaa';
        return view('auth.master');
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
        $data = Logins::findOrfail($id);
        $data -> delete();
        redirect('/')->route('admincp');
        // return view('auth.master');
    }
    
}
