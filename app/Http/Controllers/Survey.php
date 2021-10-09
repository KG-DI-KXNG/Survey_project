<?php

namespace App\Http\Controllers;

use App\Models\survey_set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Survey extends Controller
{
   public function index(Request $request){
   
   // $request->validate([
   //    'formTitle'=>'required|unique:survey_set,title',
   //    'formDesc'=>'required',
   //    'formStart'=>'required',
   //    'formEnd'=>'required',
   // ]);

   $survey['surveyName'] = $request->formTitle;
   $survey['surveyDesc'] = $request->formDesc;
   $survey['surveyStart'] = $request->formStart;
   $survey['surveyEnd'] = $request->formEnd;

   session()->put($survey);

   // $s = auth()->user()->getSurvey()->create([
   //    'title'=> $request->formTitle,
   //    'description'=>$request->formDesc,
   //    'start_date'=>$request->formStart,
   //    'end_date'=>$request->formEnd,
   // ]);

   // $s = new survey_set();
   // $s->title = $request->formTitle;
   // $s->description = $request->formDesc;
   // $s->user_id = Auth::id();
   // $s->start_date = $request->formStart;
   // $s->end_date = $request->formEnd;
   // $s->save();

    return redirect()->route('surveyForm');
   }

   public function show(){
     if(session()->missing('surveyName')){
        return redirect()->back();
     }
     $surveyId = survey_set::where('title',session()->get('surveyName'))->value('id');
      return view('surveyForm',['surveyId'=>$surveyId]);
   }
}
