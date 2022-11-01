<?php

namespace App\Http\Controllers;

use App\Models\users_guide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UsersGuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = users_guide::paginate(3);
        
      
        return view('admin.dashboard.usersGuide',compact('user'));
    }
    public function addDocuments()
    {   
       
        return view('admin.dashboard.adddocuments');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveDocuments(Request $request)
    {           
        $request->validate([

            'name' => 'required',
            
            'image' => 'required|mimes:jpg,jpeg,png,gif,pdf|max:2048',

        ]);
           $user = new users_guide;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $imageName = time() . '-' . $file->getClientOriginalName();
            
            $file->move('images/', $imageName);

            $user->image =   $imageName;
            $user->name =   $request->name;
            $user->save();
            if ($user) {
                return redirect('admin/documents')->with('success', 'Document Added Successfully');
            } else {
                return redirect()->back()->with('error', 'Document Not Added');
            }
        }

    }
    public function editDocuments($id){

        $user = users_guide::find($id);

        return view('admin.dashboard.editdocuments', compact('user'));
    }

    
    public function updateDocuments(Request $request, $id)
    {
        $request->validate([

            'name' => 'required',
            
            'image' => 'required|mimes:jpg,jpeg,png,gif,pdf|max:2048',

        ]);
      
       $user = users_guide::find($id);

       $user->name =  $request->input('name');
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
         $user->update();



    return redirect()->back()->with('success', 'Document updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\users_guide  $users_guide
     * @return \Illuminate\Http\Response
     */
    public function deleteDocuments($id)
    { 
            $user = users_guide::find($id);
            $user->delete();
            return redirect()->back()->with('error', 'Document Deleted Successfully');
        
    }
}
