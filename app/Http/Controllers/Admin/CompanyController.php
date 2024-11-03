<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    
    public function index(){                
        $company = Company::first();
        return view('admin.company_details')->with(['company'=>$company,       
        ]);
    }

    public function edit($id){            
        $company = Company::find($id);
        return view('admin.editcompany_details')->with(['company'=>$company, 
        ]);
    }

    public function update(Request $request,$id)
    {
        $company = Company::find($id);
        $this->validate($request,[
            'name'=>['required','string'],
            'email'=>['required','email'],
            'tel'=>['required','string',],
            'headoffice'=>['required','string'],
            'address'=>['required','string'],           
            'other_office'=>['required','string'],
            'shipments'=>['required','numeric',],
            'completed_shipments'=>['required','numeric'],
            'on_transit'=>['required','numeric',],            
            'about_us'=>['required','string',],
            'mission'=>['required','string',],
            'vision'=>['required','string',],
            'phrase'=>['required','string',],            
        ]);

        $company->name = $request->name;
        $company->email = $request->email;
        $company->tel = $request->tel;
        $company->headoffice = $request->headoffice;
        $company->address = $request->address;        
        $company->other_office = $request->other_office;
        $company->shipments = $request->shipments;
        $company->completed_shipments = $request->completed_shipments;
        $company->on_transit = $request->on_transit;           
        $company->about_us = $request->about_us;
        $company->vision = $request->vision;       
        $company->mission = $request->mission;
        $company->phrase = $request->phrase;
        $company->update();
        return redirect()->back()->with('success','Company Details updated successfully.');
    }
    

    public function getCertificate($id)
    {
        $company = Company::find($id);
        $name = 'Certificate_Of_Incorporation.pdf';
        $headers = array(
            'Content-Type: application/pdf',
          );
        return Storage::download('public/'.$company->certificate, $name,$headers);
    }   
}
