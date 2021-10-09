<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MattDaneshvar\Survey\Models\Survey as ContractsSurvey;

class Survey extends Controller
{
   public function index(Request $request){
   
   

    return view('livewire.form');
   }
}
