<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\User;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('/');
    }


    public function PasswordChange()
    {
        return view('auth.passwords.change_password');
    }

    public function PasswordUpdate(Request $request)
    {
          $validatedData = $request->validate([
              'oldpass' => 'required|max:15|min:6',
              'password' => 'required|max:15|min:6|confirmed',
           ]);

          $currentpass=Auth::user()->password;

          $oldpass=$request->oldpass;
          $password=$request->password;
          
         if (Hash::check($oldpass, $currentpass)) {
                    
               $user=User::find(Auth::id());
               $user->password=Hash::make($password);
               $user->save();
               Auth::logout();
               $notification=array(
                        'messege'=>'Password Change Successfully',
                        'alert-type'=>'success'
                         );
            return Redirect()->route('login')->with($notification);

         }else{
             $notification=array(
                        'messege'=>'Old password does not match',
                        'alert-type'=>'error'
                         );
            return Redirect()->back()->with($notification);
         }


    }

    public function Insert()
    {
       return view('backend.role.insert');
    }

    public function store(Request $request)
    {
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
		$data['facebookid']=$request->facebookid;
        $data['password']=Hash::make($request->password);
        $data['category']=$request->category;
        $data['district']=$request->district;
        $data['post']=$request->post;
		$data['allpost']=$request->allpost;
        $data['setting']=$request->setting;
        $data['gallery']=$request->gallery;
        $data['ads']=$request->ads;
        $data['role']=$request->role;
        $data['type']=0;                 
        DB::table('users')->insert($data);
          $notification=array(
                        'messege'=>'Successfully Writer Created',
                        'alert-type'=>'success'
                         );
            return Redirect()->back()->with($notification);

    }

    public function allWriter()
    {
      $writer=DB::table('users')->where('type',0)->get();
      return view('backend.role.index',compact('writer'));
    }

    public function edit($id)
    {
      $writer=DB::table('users')->where('id',$id)->first();
      return view('backend.role.edit',compact('writer'));
    }

    public function UpdateWriter(Request $request,$id)
    {
         $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
		$data['facebookid']=$request->facebookid;
        $data['category']=$request->category;
        $data['district']=$request->district;
        $data['post']=$request->post;
        $data['setting']=$request->setting;
        $data['gallery']=$request->gallery;
        $data['ads']=$request->ads;
        $data['role']=$request->role;
        DB::table('users')->where('id',$id)->update($data);
          $notification=array(
                              'messege'=>'Successfully Writer Updated',
                              'alert-type'=>'success'
                         );
            return Redirect()->route('all.writer')->with($notification);
    }

}
