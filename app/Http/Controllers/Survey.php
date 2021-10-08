<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MattDaneshvar\Survey\Models\Survey as ContractsSurvey;

class Survey extends Controller
{
   public function index(Request $request){
   
    $survey['surveyName'] = $request->formTitle;
    $survey['section'] = $request->section;

    return view('livewire.form')->with($survey);

    // $survey = ContractsSurvey::create(['name' => $request->formTitle]);




        // dd($survey);
   }
}
