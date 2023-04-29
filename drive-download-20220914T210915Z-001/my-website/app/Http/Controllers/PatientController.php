<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Http\FormRequest;
use App\Mail\AlphaMail;
use App\Mail\AlphaMail2;
use Illuminate\Support\Facades\Mail;

class PatientController extends Controller
{
    
    public function showHomewebsite(){
        return view('homewebsite');
    }
    public function showUpload(){
        return view('upload');
    }
    public function upload(Request $request){
        $image=$request->file('file');
        $imageName=time(). '.' .$image->extension();
        $image->move(public_path('radiology_images'),$imageName);
        $newimgName="D:/my-website/public/radiology_images/{$imageName}";
        //Model
        $url = 'http://127.0.0.1:9000/classify';
        $data =["path" => $newimgName];
        $options = ['http'=> ['header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST','content' => http_build_query($data)]
         ] ;
        $context = stream_context_create($options);
        $result = file_get_contents($url,false,$context);
        $result = json_decode($result , true);
        DB::insert('insert into radiology( result,img,patient_id) values(?,?,?)', [$result['Class Name: '], $newimgName,session('userId')]);
        session()->regenerate();
        session([
            'RadiologyResult' => true,
            'result' => $result['Class Name: ']
                
         ]);
        
        return redirect('/result');
    }
    public function showResult(){
        return view('result');
    }
    public function showVaccine(){
        return view('showVaccine');
    }

    public function showregisterVaccine(){
        return view('registerVaccine');
    }
    public function registerVaccine(Request $request){
        
        // validation
       $request->validate([
            'phone' => 'required|max:11',
            'nationality' =>'required',
            'nationalID' => 'required|max:14',
            'birthdate' => 'required|date_format:Y-m-d',
            'gender' => 'required',
            'language' =>'required',
            'ladies' => 'required'
        ]);

        // store data in database
        $phone = $request->phone;
        $nationality = $request->nationality;
        $nationalID = $request->nationalID;
        $birthdate = $request->birthdate;
        $gender = $request->gender;
        $language = $request->language;
        $ladies = $request->ladies;
        DB::insert('insert into register_vaccine( phone,nationality,nationalID,birthdate,gender,language,ladies,patient_id) values(?, ?, ?, ?, ?,?, ? ,?)', [ $phone,$nationality,$nationalID,$birthdate,$gender,$language,$ladies,session('userId')]);
        session()->regenerate();
        session([
            'hasVaccine' => true,
        ]);
        $date = date('Y-m-d ');
        Mail::to('rawansaeed108@gmail.com')->send(new AlphaMail($date));

        // go to confirmation
        return redirect('/vaccineConfirmation');
    }
    public function vaccineConfirmation(){
        return view('vaccineConfirmation');
    }
}
