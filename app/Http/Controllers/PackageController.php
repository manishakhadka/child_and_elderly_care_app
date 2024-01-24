<?php

namespace App\Http\Controllers;
use App\Models\Package;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PackageController extends Controller
{
  
    public function buyPackage(Request $request)
    {
       
        // Insert data into the database
        DB::table('packages')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'date' => $request->date,
            'from' => $request->from,
            'to' => $request->to,
            
        ]);

        // Add a success alert message
       

        // Redirect back
        alert()->success('Package Booked Sucessfully','You will get a call for the confirmation.Thank you!');


        return redirect()->back();
    }
}
