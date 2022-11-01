<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;






class DashboardController extends Controller
{


    public function login()
    {

        return view('admin.dashboard.login');
    }



    public function loginAdmin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
      
        if (Auth::attempt($credentials)) {
             $request->session()->regenerate();
       

            return redirect()->intended('admin/users')->with('success', 'Welcome Admin');
        }elseif ( Auth::check() && Auth::user()->role_as == false){

            return redirect()->back()->with('error', 'Access Denied');
        }
        
        else {
            return redirect()->back()->with('error', 'Credentials not found');
        }
    }


     public function editProfile($id){

            $user = user::find($id);

            if($user){
           
        return view('admin.dashboard.editProfile',compact('user'));
    
    }
        else{

            return redirect()->back();

        }


     }


     public function updateProfile(Request $request, $id)
     {

 
        $request->validate([

           'mobile' => 'required|numeric|digits:10',
            
            'image' => 'image|mimes:jpg,jpeg,png,gif|max:2048',

        ]);
 
 
         $user = user::find($id);
        
 
         $user->name = $request->input('name');
         $user->email = $request->input('email');
         if ($request->hasfile('image')) {
             $destination = 'images/' . $user->image;
             if (File::exists($destination)) {
                 File::delete($destination);
             }
             $file = $request->file('image');
             $imageName = time() . '-' . $file->getClientOriginalName();
             $file->move('images/', $imageName);
             $user->image =   $imageName;
         }

         $user->mobile = $request->input('mobile');
         $user->location = $request->input('location');
         $user->update();
        
        

         return redirect()->back()->with('success', 'Profile updated Successfully');
     }


        public function showChangePasswordGet() {

        return view('admin.dashboard.changePassword');
    }

         public function changePasswordPost(Request $request)
         {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            // Current password and new password same
            return redirect()->back()->with("error","New Password cannot be same as your current password.");
        }

          $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:4|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password successfully changed!");
    }



    // public function registeradmin(Request $request)
    // {
    //     $request->validate([
    //         'email'=> 'required',
    //         'password'=>'required',  
    //        ]);

    //        user::create([
    //         'name'=>$request->name,
    //         'email'=>$request->email,
    //         'name'=>Hash::make($request->password)

    //        ]);
    //        if(Auth::attemt($request->only('email','password'))){
    //         return view('admin.dashboard.home');

    //        }else{

    //         return redirect('register')->withError('error');


    //        }

    //     }


    public function logout(Request $request)
    {
        Auth::logout();

        
        return redirect('admin/login');
    }


    public function index()
    {

        return view('admin.dashboard.index');
    }


    public function users(Request $request)

    {
        $search = $request['search'] ?? "";
        if ($search != ""){

            $user = user::where('name', 'Like', '%'.$search. '%' )->orwhere('email', 'Like','%'.$search.'%')->paginate('5');

           
        }else{

            $user = User::paginate(5);

        }

       return view('admin.dashboard.users', compact('user','search'));
    }



    

    public function addusers()
    {

        return view('admin.dashboard.addusers');
    }
    public function saveUsers(Request $request)
    {



        $request->validate([

            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|numeric|unique:users,mobile|digits:10',
            'location' => 'required',
            'password' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',

        ]);
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $imageName = time() . '-' . $file->getClientOriginalName();
            $file->move('images/', $imageName);

            $user = new user;


            $user->name = $request->name;
            $user->email = $request->email;
            $user->image =   $imageName;
            $user->mobile = $request->mobile;
            $user->location = $request->location;
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->back()->with('success','User Added Successfully');

            
        }
    }
    public function editUsers($id)
    {


        $user = user::find($id);

        if($user){

        return view('admin.dashboard.updateusers', compact('user'));
        }
        else{
            return redirect()->back();
        }
    }


    public function updateUsers(Request $request, $id)
    {
        $request->validate([

            
            
            'mobile' => 'required|numeric|digits:10',
            
            'image' => 'image|mimes:jpg,jpeg,png,gif|max:2048',

        ]);


        $user = user::find($id);


        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if ($request->hasfile('image')) {
            $destination = 'images/' . $user->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $imageName = time() . '-' . $file->getClientOriginalName();
            $file->move('images/', $imageName);
            $user->image =   $imageName;
        }




        $user->mobile = $request->input('mobile');
        $user->location = $request->input('location');
        $user->update();



        return redirect()->back()->with('success', 'User updated Successfully');
    }


    public function home()
    {
        return view('admin.dashboard.home');
    }



    public function destroy($id)
    { 
            $user = user::find($id);
            $user->delete();
            return redirect()->back()->with('error', 'User Deleted Successfully');
        
    }
}
