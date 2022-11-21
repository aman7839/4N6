<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\states;
use App\Models\users_guide;


class HomeController extends Controller
{
    public function aboutUs()
    {

    return view('frontendviews.aboutUs');
    }


    public function contactUs()
    {

    return view('frontendviews.contactUs');
    }

    public function documents()
    {
        $document = users_guide::all();
        
    return view('frontendviews.documents', compact('document'));
    }
    public function register()
    // $data = Data::where('id',$id)->with(['awards','theme','category'])->first();
    {
        $states = states::all();
    return view('frontendviews.register',compact('states'));
    }
    public function school()
    {
        $stateAJ = states::where('name', 'regexp',  '^[a-jA-J]')->orderBy('name')->take(5)->get();
        $stateKN = states::where('name', 'regexp',  '^[k-nK-N]')->orderBy('name')->take(5)->get();
        $stateOZ = states::where('name', 'regexp',  '^[o-zO-Z]')->orderBy('name')->take(5)->get();
    


    return view('frontendviews.school',compact(['stateAJ','stateKN','stateOZ']));
    }
    public function tutorial()
    {

    return view('frontendviews.tutorial');
    }
    public function services()
    {

    return view('frontendviews.services');
    }
    public function login()
    {

    return view('frontendviews.login');
    }
    public function download($file){
        $file_path = ('public/images/'.$file);
        return response()->download( $file_path);
    }

}


