<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\states;
use App\Models\users_guide;
use App\Models\offerPrice;
use App\Models\TopicRole;
use Carbon\Carbon;
class HomeController extends Controller
{
    public function aboutUs()
    {

    return view('frontendviews.aboutUs');
    }
    public function Home()
    {

        $day = Carbon::now();

        $today = $day->toDateString();


        $offerPrice = offerPrice::where('status',1)->get();


    return view('frontendviews.home',compact('offerPrice','today'));

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

    public function offerPrice(){

        $offerPrice = offerPrice::paginate(10);

        return view('admin.offerprices.offerprice',compact('offerPrice'));

    }
    public function addofferPrice(){



        return view('admin.offerprices.addofferprice');

    }
    public function SaveofferPrice(Request $request){
            $request->validate([

                'price'=> 'required|numeric',
                'offer_price'=> 'required|numeric',
                'from_date'=> 'required',
                'to_date'=> 'required',
                'description'=> 'required',
                
            ]);

        $offerPrice =  new offerPrice;

        $offerPrice->price =  $request->price;
        $offerPrice->offer_price = $request->offer_price;
        $offerPrice->from_date = $request->from_date;
        $offerPrice->to_date = $request->to_date;
        $offerPrice->status = $request->status;

        $offerPrice->description = $request->description;
        $offerPrice->save();

        return redirect('admin/offerprice')->with('success','Offer Added successfully');

    }

    public function editofferPrice($id){


        $editOfferPrice = offerPrice::find($id);

        return view('admin.offerprices.editofferprice',compact('editOfferPrice'));

    }
        public function updateofferPrice(Request $request,$id){
            $request->validate([

                'price'=> 'required|numeric',
                'offer_price'=> 'required|numeric',
                'from_date'=> 'required',
                'to_date'=> 'required',
                'description'=> 'required',
                
            ]);

        $updateOfferPrice = offerPrice::find($id);
        $updateOfferPrice->price =  $request->input('price');
        $updateOfferPrice->offer_price = $request->input('offer_price');
        $updateOfferPrice->from_date = $request->input('from_date');
        $updateOfferPrice->to_date = $request->input('to_date');
        $updateOfferPrice->status = $request->input('status');
        $updateOfferPrice->description = $request->input('description');
        $updateOfferPrice->update();

        return redirect('admin/offerprice')->with('success','Offer Updated successfully');



    }
    public function deleteOffer($id)
    { 

        
            $deleteOffer = offerPrice::find($id);

            $deleteOffer->delete();
            return redirect()->back()->with('error', 'Offer Deleted Successfully');
        
    }

    public function RandomTopics()
    { 

    
            $topic = TopicRole::all();

            return view('frontendviews.regeneratetopics',compact('topic'));
        
    }

}


