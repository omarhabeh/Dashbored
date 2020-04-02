<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('role_auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function admin()
    {
        return view('home');
    }
    public function UsersRegistarion(){
      $user=User::all();
        return view('users_tabe')->with('user',$user);
    }
    public function UsersEdit($id){

        $user=User::FindOrFail($id);
        return view('UserEdit',['user'=>$user]);
      }
    public function charts(){
        return view('charts');
    }
    public function Image(Request $request){
        $id=$request->input('id');
        $file=$request->file('Image_usr');
        $extention=$file->getClientOriginalExtension();
        $filename=time().".".$extention;
        $file->move('uploads/',$filename);
        $user=User::find($id);
        $user->Image=$filename;
        $user->save();
        return redirect('user')->with("msg","Your User Photo was changed succesfully");
    }
    public function store(Request $request){
        $id=$request->input('id');
        $user=User::findOrFail($id);
        $user->name=$request->input("Name");
        $user->email=$request->input("Email");
        $user->role=$request->input("Role");
        $user->save();
        return redirect('/UsersRegistarion')->with("msg","User was successfully edited");
    }
}
