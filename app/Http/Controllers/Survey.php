<?php

namespace App\Http\Controllers;

use App\Models\survey_set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MattDaneshvar\Survey\Models\Survey as ContractsSurvey;

class Survey extends Controller
{
   public function index(Request $request){
   
   $request->validate([
      'title'=>'required',
      'desc'=>'required',
      'start'=>'required',
      'end'=>'required',
   ]);

   $survey['surveyName'] = $request->title;
   $survey['surveyDesc'] = $request->desc;
   $survey['surveyStart'] = $request->start;
   $survey['surveyEnd'] = $request->end;

   // $survey = new survey_set();
   // $survey->title = $request->title;
   // $survey->description = $request->desc;
   // $survey->user_id = Auth::id();
   // $survey->start_date = $request->start;
   // $survey->end_date = $request->end;
   // $survey->save();

    return view('surveyForm')->with($survey);
   }
}
