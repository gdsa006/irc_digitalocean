<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Lead;
use App\Models\Rate;
use League\CommonMark\Extension\SmartPunct\EllipsesParser;
use View;

class LeadsController extends Controller
{
    public function Steps(Request $request){
        $address = $request->autocomplete;
        $findAddress = Location::where('Address', $address)->count();
        if($findAddress){
            // return View('form.step.one');
            $request->session()->put('leadData', $address);
            return response()->json(array('status' => 'found'));
        }
        else{
            return response()->json(array('status' => 'not found'));
        }
    }

    public function stepOneProcess(Request $request){
            $fname = $request->fname;
            $lname = $request->lname;
            $validator = \Validator::make($request->all(), [ 
                'fname' => 'required|regex:/^[a-zA-Z]+$/u',
                'lname' => 'required|regex:/^[a-zA-Z]+$/u',
            ]);
            if($validator->fails()){
                return response()->json($validator->errors());
            } 
            else{
                $data = $request->session()->get('leadData');
                $transferData = $fname . ':' . $lname . ':' . $data;
                $request->session()->put('leadData', $transferData);
                return response()->json(array('status' => 's2'));
            }        
    }

    public function stepTwoProcess(Request $request){

        $email = $request->query('email');

        $validator = \Validator::make($request->all(), [ 
            'email' => 'required|email',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors());
        } 
        else{
        $data = $request->session()->get('leadData');
            $transferData = $email . ':' . $data;
            $request->session()->put('leadData', $transferData);
            return response()->json(array('status' => 's3'));
        }
    }

    public function stepThreeProcess(Request $request){
        $mobile = $request->query('mobile');
            $data = $request->session()->get('leadData');
            $transferData = $mobile . ':' . $data;
            $request->session()->put('leadData', $transferData);
            $data = $request->session()->get('leadData');
            return response()->json(array('status' => 'success', 'leadData' => $data));
    }

    public function fullName(Request $request){
        if($request->session()->has('leadData')){
        return View('form.step.one');
    }else{  
        return redirect()->route('home');
    }
    }

    public function emailAddress(Request $request){
        if($request->session()->has('leadData')){
        return View('form.step.two');
        }else{
            return redirect()->route('home');
        }
    }

    public function mobileNumber(Request $request){
        if($request->session()->has('leadData')){
        return View('form.step.three');
        }else{
            return redirect()->route('home');
        }
    }

    public function closeSteps(Request $request){
        $request->session()->flush();
        return redirect()->route('home');
    }



    public function process(Request $request){
        return response()->json(array('status' => 's3'));
    }



    public function saveOne(Request $request){
        $address = $request->input('autocomplete');
        $longitude = $request->input('longitude');

        $validator = \Validator::make($request->all(), [ 
            'autocomplete' => 'required',
            'longitude' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        } 
        else{
            $leads = new Lead();
            $leads->address = $address;
            $leads->save();
            $current_id = $leads->id;
            $request->session()->put('leadID', $current_id);
            return response()->json(array('status' => true, 'gotostep' => '2', 'currentID' => $current_id));
        }

    }



    public function saveTwo(Request $request){
        $leadID = $request->session()->get('leadID');

        $sqft = $request->input('sqft');

        $validator = \Validator::make($request->all(), [ 
            'sqft' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        } 
        else{
            $leadID = $request->session()->get('leadID');
            $lead_find = Lead::find($leadID);
            $lead_find->sqft = $sqft;
            $lead_find->save();
            return response()->json(array('status' => true, 'leadID' => $lead_find));
        }

    }

// tear off - deleted
    // public function saveNew(Request $request){
    //     $leadID = $request->session()->get('leadID');

    //     $tearoff = $request->input('tearoff');

    //     $validator = \Validator::make($request->all(), [ 
    //     ]);

    //     if($validator->fails()){
    //         return response()->json($validator->errors());
    //     } 
    //     else{
    //         $leadID = $request->session()->get('leadID');
    //         $lead_find = Lead::find($leadID);
    //         $lead_find->shake = $tearoff;
    //         $lead_find->save();
    //         return response()->json(array('status' => true, 'leadID' => $lead_find, 'tearoff' => $tearoff));
    //     }

    // }





    public function saveNewOne(Request $request){
        $leadID = $request->session()->get('leadID');

        $complexity = $request->input('complexity');

        $validator = \Validator::make($request->all(), [ 
            'complexity' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        } 
        else{
            $leadID = $request->session()->get('leadID');
            $lead_find = Lead::find($leadID);
            $lead_find->complexity = $complexity;
            $lead_find->save();
            return response()->json(array('status' => true, 'leadID' => $lead_find));
        }

    }







    public function saveThree(Request $request){

        $steep = $request->input('steep');

        $validator = \Validator::make($request->all(), [ 
            'steep' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        } 
        else{
            $leadID = $request->session()->get('leadID');
            $lead_find = Lead::find($leadID);
            $lead_find->steep = $steep;
            $lead_find->save();
            return response()->json(array('status' => true, 'gotostep' => ''));
        }

    }










    public function saveFour(Request $request){

        $existing_material = $request->input('existing_material');

        $validator = \Validator::make($request->all(), [ 
            'existing_material' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        } 
        else{
            $leadID = $request->session()->get('leadID');
            $lead_find = Lead::find($leadID);
            $lead_find->existingmaterial = $existing_material;
            $lead_find->save();
            return response()->json(array('status' => true, 'gotostep' => ''));
        }

    }









    public function saveFive(Request $request){

        $is_commercial = $request->input('is_commercial');

        $validator = \Validator::make($request->all(), [ 
            'is_commercial' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        } 
        else{
            $leadID = $request->session()->get('leadID');
            $lead_find = Lead::find($leadID);
            $lead_find->iscommercial = $is_commercial;
            $lead_find->save();
            return response()->json(array('status' => true, 'gotostep' => ''));
        }

    }








    public function saveSix(Request $request){

        $urgency = $request->input('urgency');

        $validator = \Validator::make($request->all(), [ 
            'urgency' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        } 
        else{
            $leadID = $request->session()->get('leadID');
            $lead_find = Lead::find($leadID);
            $lead_find->urgency = $urgency;
            $lead_find->save();
            return response()->json(array('status' => true, 'gotostep' => ''));
        }

    }




    public function saveSeven(Request $request){

        $true = $request->input('true');

        $validator = \Validator::make($request->all(), [ 
            'true' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        } 
        else{
            $leadID = $request->session()->get('leadID');
            $lead_find = Lead::find($leadID);
            $lead_find->true = $true;
            $lead_find->save();
            return response()->json(array('status' => true, 'gotostep' => ''));
        }

    }







    public function saveEight(Request $request){

        $material = $request->input('material');

        $validator = \Validator::make($request->all(), [ 
            'material' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        } 
        else{
            $leadID = $request->session()->get('leadID');
            $lead_find = Lead::find($leadID);
            $lead_find->material = $material;
            $lead_find->save();
            return response()->json(array('status' => true, 'gotostep' => ''));
        }

    }






    public function saveNine(Request $request){

        $is_interested_in_financing = $request->input('is_interested_in_financing');

        $validator = \Validator::make($request->all(), [ 
            'is_interested_in_financing' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        } 
        else{
            $leadID = $request->session()->get('leadID');
            $lead_find = Lead::find($leadID);
            $lead_find->isinterestedinfinancing = $is_interested_in_financing;
            $lead_find->save();
            return response()->json(array('status' => true, 'gotostep' => ''));
        }

    }



    public function saveTen(Request $request){

        $email = $request->input('email');
        $fname = $request->input('fname');
        $mobile = $request->input('mobile');

        // $validator = \Validator::make($request->all(), [ 
        //     'email' => 'required|email|unique:leads,email',
        //     'fname' => 'required',
        //     'mobile' => ''
        // ]);

        $validator = \Validator::make($request->all(), [ 
            'email' => 'required|email',
            'fname' => 'required',
            'mobile' => ''
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        } 
        else{
            $leadID = $request->session()->get('leadID');
            $lead_find = Lead::find($leadID);
            $lead_find->email = $email;
            $lead_find->fname = $fname;
            $lead_find->mobile = $mobile;
            $lead_find->save();
            
            
        $sqft = $lead_find->sqft;
        $material = $lead_find->material;
        $steep = $lead_find->steep;
        $sqMeterArea = ceil($sqft/100);
        if($lead_find->complexity == 'moderate'){
            $c = 25;
        }
        else if($lead_find->complexity == 'complex'){
            $c = 50;
        }
        else{
            $c = 0;
        }

        if($steep == 'mellow' && $material == 'asphalt' || $material == 'other'){
            $x = 375;
        }
        else if($steep == 'unsure' && $material == 'asphalt' || $material == 'other'){
            $x = 375;
        } 
        else if($steep == 'steep' && $material == 'asphalt' || $material == 'other'){
            $x = 375 + 27;
        }
        else if($steep == 'mellow' && $material == 'metal'){
            $x = 375 + 27;
        }
        else if($steep == 'unsure' && $material == 'metal'){
            $x = 675;
        }
        else if($steep == 'steep' && $material == 'metal'){
            $x = 675 + 27;
        }
        
        $x = ($x + $c) * $sqMeterArea ;

        //get rates
        // $rate = Rate::first();

        // if($material == 'asphalt'){
        //     if($steep == 'flat'){
        //         $x = $sqft * $rate->af;
        //     }
        //     else if($steep == 'mellow'){
        //         $x = $sqft * $rate->am;
        //     }
        //     else if($steep == 'steep'){
        //         $x = $sqft * $rate->as;
        //     }
        //     else{
        //         $x = $sqft * $rate->ao;
        //     }
        // }

        // else if($material == 'metal'){
        //     if($steep == 'flat'){
        //         $x = $sqft * $rate->mf;
        //     }
        //     else if($steep == 'mellow'){
        //         $x = $sqft * $rate->mm;
        //     }
        //     else if($steep == 'steep'){
        //         $x = $sqft * $rate->ms;
        //     }
        //     else{
        //         $x = $sqft * $rate->mo;
        //     }
        // }

        // else{
        //     if($steep == 'flat'){
        //         $x = $sqft * $rate->of;
        //     }
        //     else if($steep == 'mellow'){
        //         $x = $sqft * $rate->om;
        //     }
        //     else if($steep == 'steep'){
        //         $x = $sqft * $rate->os;
        //     }
        //     else{
        //         $x = $sqft * $rate->oo;
        //     }
        // }



            $details = [
                'fname' => $lead_find->fname,
                'lname' => $lead_find->lname,
                'mobile' => $lead_find->mobile,
                'address' => $lead_find->address,
                'sqft' => $lead_find->sqft,
                'shake' => $lead_find->shake,
                'complexity' => $lead_find->complexity,
                'steep' => $lead_find->steep,
                'existingmaterial' => $lead_find->existingmaterial,
                'urgency' => $lead_find->urgency,
                'insurance' => $lead_find->true,
                'material' => $lead_find->material,
                'isinterestedinfinancing' => $lead_find->isinterestedinfinancing,
                'estimate' => $x
            ];

            $details2 = [
                'fname' => $lead_find->fname,
                'lname' => $lead_find->lname,
                'estimate' => $x
            ];

            \Mail::to('leads@idahoroofingcost.com')->send(new \App\Mail\AdminNotificationEmail($details));

            \Mail::to($email)->send(new \App\Mail\CustomerNotificationEmail($details2));

            return response()->json(array('status' => true, 'gotostep' => ''));
        }

    }

    public function estimate(Request $request){

        $leadID = $request->session()->get('leadID');
        if(!$leadID){
            return redirect()->route('homepage');
        }
        $lead_find = Lead::find($leadID);
        $data = new Lead();
        $data = $data->where('id', $leadID)->get();

        //calculation
        $sqft = $lead_find->sqft;
        $material = $lead_find->material;
        $steep = $lead_find->steep;
        $sqMeterArea = ceil($sqft/100);
        
        if($lead_find->complexity == 'moderate'){
            $c = 25;
        }
        else if($lead_find->complexity == 'complex'){
            $c = 50;
        }
        else{
            $c = 0;
        }

        if($steep == 'mellow' && $material == 'asphalt' || $material == 'other'){
            $x = 375;
        }
        else if($steep == 'unsure' && $material == 'asphalt' || $material == 'other'){
            $x = 375;
        } 
        else if($steep == 'steep' && $material == 'asphalt' || $material == 'other'){
            $x = 375 + 27;
        }
        else if($steep == 'mellow' && $material == 'metal'){
            $x = 375 + 27;
        }
        else if($steep == 'unsure' && $material == 'metal'){
            $x = 675;
        }
        else if($steep == 'steep' && $material == 'metal'){
            $x = 675 + 27;
        }

        $x = ($x + $c) * $sqMeterArea ;

        //get rates
        // $rate = Rate::first();

        // if($material == 'asphalt'){
        //     if($steep == 'flat'){
        //         $x = $sqft * $rate->af;
        //     }
        //     else if($steep == 'mellow'){
        //         $x = $sqft * $rate->am;
        //     }
        //     else if($steep == 'steep'){
        //         $x = $sqft * $rate->as;
        //     }
        //     else{
        //         $x = $sqft * $rate->ao;
        //     }
        // }

        // else if($material == 'metal'){
        //     if($steep == 'flat'){
        //         $x = $sqft * $rate->mf;
        //     }
        //     else if($steep == 'mellow'){
        //         $x = $sqft * $rate->mm;
        //     }
        //     else if($steep == 'steep'){
        //         $x = $sqft * $rate->ms;
        //     }
        //     else{
        //         $x = $sqft * $rate->mo;
        //     }
        // }

        // else{
        //     if($steep == 'flat'){
        //         $x = $sqft * $rate->of;
        //     }
        //     else if($steep == 'mellow'){
        //         $x = $sqft * $rate->om;
        //     }
        //     else if($steep == 'steep'){
        //         $x = $sqft * $rate->os;
        //     }
        //     else{
        //         $x = $sqft * $rate->oo;
        //     }
        // }


        return View::make('new.final')->with('data', $data)->with('x', $x);

    }

    public function destroySession(Request $request){
        $request->session()->forget('leadID');
        return response()->json(array('status' => true));
    }

    public function termsOfService(){
        return View::make('new.terms-of-service');
    }


    public function privacyPolicy(){
        return View::make('new.privacy-policy');
    }

    public function ourGuarantee(){
        return View::make('new.guarantee');
    }

}
