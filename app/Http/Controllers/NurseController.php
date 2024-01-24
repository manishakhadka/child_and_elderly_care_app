<?php

namespace App\Http\Controllers;
use App\Models\Nurse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NurseController extends Controller
{
    public function upload(Request $request)
    {
        // Initialize arrays for photos
        $photo = [];
        $citizenship_photo = [];
        $certificate_photo = [];

        // Handle 'photo' files
        if ($files = $request->file('photo')) {
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'uploads/';
                $image_url = $upload_path . $image_full_name;
                $file->move($upload_path, $image_full_name);
                $photo[] = $image_url;
            }
        }

        // Handle 'citizenship_photo' files
        if ($files = $request->file('citizenship_photo')) {
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'uploads/';
                $image_url = $upload_path . $image_full_name;
                $file->move($upload_path, $image_full_name);
                $citizenship_photo[] = $image_url;
            }
        }

        // Handle 'certificate_photo' files
        if ($files = $request->file('certificate_photo')) {
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'uploads/';
                $image_url = $upload_path . $image_full_name;
                $file->move($upload_path, $image_full_name);
                $certificate_photo[] = $image_url;
            }
        }

        // Insert data into the database
        DB::table('nurses')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'password' =>bcrypt($request->password),
            'phone' => $request->phone,
            'photo' => implode('|', $photo),
            'citizenship_photo' => implode('|', $citizenship_photo),
            'certificate_photo' => implode('|', $certificate_photo),
        ]);

        // Add a success alert message
       

        // Redirect back
        return redirect()->back();
    }
    public function getNurse(){
        $data = DB::table('nurses')->get();
        return view('nurse',['data'=>$data]);
     
      }
    // public function showDetails($id){
    //     $data= DB::table('nurses')->where('id', $id)->pluck('photo');

    //     return view('nurse', compact('data'));
    //     //return DB::select ("select * from services");
    //   }

    public function getDetails($id){
        $data = DB::table('nurses')->where('id', $id)->select('name', 'phone' ,'email','photo','address','citizenship_photo','certificate_photo')->get();
        return view('nursedetails', compact('data'));
    }

}

