<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\student;
use App\Models\diagnosis;
class LoginStud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login_stud(){
        return view("auth.login_stud");
    }
    public function loginStud(Request $request){
        $request-> validate([
        'email'=>'required|email',
        'password'=>'required',
    
    ]);
        $user=student::where('email','=',$request->email)->first();
        if($user){
            if(($request->password==$user->password)){
               $request->session()->put('loginId',$user->id);
               return redirect('dashboard');
    
            }else{
                return back()->with('fail','Password does not Matchxx.');
            }
        }else{
            return back()->with('fail','This email is not registered.');
    
        }
    }
    
    
    public function dashboard(){
        // return "Welcome to Dashboard";
    
        $data=array();
        $datas=array();
        if(Session::has('loginId')){
            $data=student::where('id','=',Session::get('loginId'))->first();
            $datas=diagnosis::where('user_id','=',Session::get('loginId'))->first();
        }
        return view('dashboard',compact('data','datas'));
    }

    public function index()
    {
        //
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
