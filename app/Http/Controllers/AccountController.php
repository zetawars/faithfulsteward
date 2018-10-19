<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\User;
use Hash;
use Auth;
use Illuminate\Support\Facades\Validator;


class AccountController extends Controller
{
    public function Login()
    {
        return view('Panel.Account.Login');
    }

    public function Register()
    {
        return view('Panel.Account.Register');
    }
    
    public function Create(Request $request)
    {
        $this->validate(request(),[
            'firstname'=>'required|alpha',
            'email'=> 'required|email|unique:user,email',
            'password'=>'required|confirmed',
            'password_confirmation' => 'required ',
            
            
        ]);
       
         $user = new User();
          $user->firstname=input::get('firstname');
          $user->lastname=input::get('lastname');
          $user->email=input::get('email');
          $user->password=Hash::make(input::get('password'));
          $user->save();
          $id = DB::getPdo()->lastInsertId();
        // //   dd($id);

          
          DB::table('user_role')->insert([

            'UserId'=>$id,
            'RoleId'=>1

        ]);
            $user = new User([
                'firstname' => $request->get('firstname'),
                'lastname' =>$request->get('lastname'),
                'email' => $request->get('email'),
                'password'=>$request->get('password')
                
                ]);
                    session(['user'=>$user]);
        
          return redirect()->route('register')->with('message',' Successfully Register');
          ;

       
           
    }
    public function Logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
    
    public function validateLogin(Request $request)
    {
        $this->validate(request(),[
           
            'email'=> 'required|email',
            'password'=>'required',
        ]);


        $email= $request->input('email');
        $password=$request->input('password');
        
        // $data=DB::table('user')->Select('select id from user where email=? and password=?' ,[null,$email,$password]);
        // $user = User::get($data);
        if(Auth::attempt(['email'=>$email,'password'=>$password]))
        {
               
            ;
                 return redirect()->route('dashboard');
        }
        else 
        {
            return redirect()->route('login')->with('message1',' Please try again wrong email or password');
        }
        
        
        // if(json_encode($user) != '[]') //condition
        // {

        //     session(['user'=>$user[0]]);
           
        //     return redirect()->route('dashboard');
        // }
        // else
        // {
        //     return redirect()->route('login');
        // }

        

    }
    
}
