<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guidian;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use  Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function guidianlist()
    {
        $data['getRecord'] = User::getGuidian();
        return view("admin.guidian.index",$data);
    }
    public function sponsorlist()
    {
        $data['getRecord'] = User::getSponsor();
        return view("admin.sponsor.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function guidiancreate()
    {
      
        return view("admin.guidian.create", );
    }
    public function sponsorcreate()
    {
        return view("admin.guidian.create");
    }
    public function registerSave(Request $request) 
    {
        Validator::make($request->all(), [
            'gender' => 'required',
            'phone_number' => 'required',
            'dob' => 'required',
            'alt_phn_number' => 'required',
            'profile_img' => 'required',
            'employment_status' => 'required',
            'annual_income' => 'required',
            'nature_of_occupation' => 'required',
            'employer_name' => 'required',
            'employer_address' => 'required',
            'employer_phone' => 'required',
            'mean_of_identity' => 'required',
            'identity_number'=> 'required',
            'id_issue_date'=> 'required',
            'id_expiry_date'=> 'required',
            'marital_status'=> 'required',
            'other_information'=> '',
            'affidavit'=> 'required',
            ])->validate();

                Guidian::create([
                'gender' => $request->gender,
                'phone_number' => $request->phone_number,
                'dob' => $request->dob,
                'alt_phn_number' => $request->alt_phn_number,
                'profile_img' => $request->profile_img,
                'employment_status' =>  $request->employment_status,
                'annual_income' =>  $request->annual_income,
                'nature_of_occupation' =>  $request->nature_of_occupation,
                'employer_name' =>  $request->employer_name,
                'employer_address' =>  $request->employer_address,
                'employer_phone' =>  $request->employer_phone,
                'mean_of_identity' =>  $request->mean_of_identity,
                'identity_number' =>  $request->identity_number,
                'id_issue_date' =>  $request->id_issue_date,
                'id_expiry_date' =>  $request->id_expiry_date,
                'marital_status' =>  $request->marital_status,
                'other_information' =>  $request->other_information,
                'affidavit' =>  $request->affidavit,

            ]);
            return redirect()->route('admin/guidians    ')->with('success','');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
