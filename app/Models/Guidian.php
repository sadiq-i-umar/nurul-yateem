<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guidian extends Model
{
    use HasFactory;

    protected $fillable = [
            'gender',
            'phone_number',
            'dob',
            'alt_phn_number',
            'profile_img',
            'employment_status',
            'annual_income',
            'nature_of_occupation',
            'employer_name',
            'employer_address',
            'employer_phone',
            'mean_of_identity',
            'identity_number',
            'id_issue_date',
            'id_expiry_date',
            'marital_status',
            'other_information',
            'affidavit',
    ];
}

