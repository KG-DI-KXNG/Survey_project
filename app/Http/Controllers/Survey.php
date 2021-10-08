<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MattDaneshvar\Survey\Models\Survey as ContractsSurvey;

class Survey extends Controller
{
   public function index(){

        $survey = ContractsSurvey::create(['name' => 'Cat Population Survey']);
        dd($survey);

        $survey->questions()->create([
            'content' => 'How many cats do you have?',
            'type' => 'number',
            'rules' => ['numeric', 'min:0']
        ]);
        
        $survey->questions()->create([
            'content' => 'What\'s the name of your first cat',
        ]);
        
        $survey->questions()->create([
            'content' => 'Would you want a new cat?',
            'type' => 'radio',
            'options' => ['Yes', 'Oui']
        ]);
        
        return view('standard', ['survey' => $survey]);

    
   }
}
