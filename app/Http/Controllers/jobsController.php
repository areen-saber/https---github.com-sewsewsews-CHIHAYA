<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;

class jobsController extends Controller
{
    //
    function AddJobs(Request $req){
        $job=new Jobs;
        
        $job->job_id=$req->job_id;
        $job->job_title=$req->job_title;
        $job->company_name=$req->company_name;
        $job->number_of_positions=$req->num_possitions;
        $job->job_type=$req->job_type;
        $job->location=$req->city;
        $job->description=$req->description;
        $job->date_of_expiration=$req->expiration_date;
        $job->email=$req->Email;
        $job->phone_number=$req->phone_num;
        $job->gender=$req->gender;
        $job->languages=$req->language;
        $job->salary=$req->salary;
        $job->job_requirements=$req->job_requirements;
        $job->scope=$req->scope;
        $job->save();

    }
}
