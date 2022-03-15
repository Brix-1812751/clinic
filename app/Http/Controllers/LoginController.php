<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\student;
use App\Models\diagnosis;
class LoginController extends Controller
{

public function login_admin(){
    return view("auth.login_admin");
}
public function loginAdmin(Request $request){
    $request-> validate([
    'email'=>'required|email',
    'password'=>'required',

]);
    $user=admin::where('email','=',$request->email)->first();
    if($user){
        if(($request->password==$user->password)){
           
           return view('admins.index', [
            'students' => student::all()
        ]);

        }else{
            return back()->with('fail','Password does not Matchxx.');
        }
    }else{
        return back()->with('fail','This email is not registered.');

    }
}



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admins.index', [
            'admins' => Admin::all()
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $admin=new Admin();
        
        $admin-> email=strip_tags($request->input('email'));
        $admin-> password=strip_tags($request->input('password'));

        $admin-> save();

        return redirect()->route('admins.index');
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

        return view('admins.show',[
            'id'=> User::findOrfail($id)
        ]);
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
    }
}
