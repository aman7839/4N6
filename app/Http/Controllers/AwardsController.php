<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\awards;

class AwardsController extends Controller
{
    public function index()
    {
        $awards = awards::paginate(4);
        return view('admin.dashboard.awards',compact('awards'));
    }

    

   

    public function addawards()
    {
       
        return view('admin.dashboard.addawards');
    }




    public function saveawards(Request $request)
    {
        $request->validate([

            'awards_name' => 'required',
            

        ]);
       $awards = new Awards;

       $awards->awards_name = $request->awards_name;
       $awards->save();
       if($awards){
       return redirect('admin/awards')->with('success', 'Awards Added Successfully');
    }
    
    
    

    }

    public function editAwards($id){

        $awards = Awards::find($id);

        return view('admin.dashboard.editAwards', compact('awards'));
    }
    public function updateAwards(Request $request, $id)
    {



        $awards = Awards::find($id);


        $awards->awards_name = $request->input('awards_name');
        
        
        $awards->update();



        return redirect()->back()->with('success', 'Awards Updated Successfully');
    }
    public function deleteAwards($id)
    { 
            $awards = Awards::find($id);
            $awards->delete();
            return redirect()->back()->with('error', 'Awards Deleted Successfully');
        
    }
}
