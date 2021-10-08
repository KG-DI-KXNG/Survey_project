<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Form extends Component
{
    public $question;
    public $surveyName = "Survey";
    public $content1 = 'How many cats do you have?';
    public $sectionCount = 1;
    public $question;
    public $question;

    public function render()
    {
        return view('livewire.form');
    }


    public function boot(){
        // $survey = ContractsSurvey::create(['name' => $this->surveyName]);
        // dd($survey);

        // $survey->questions()->create([
        //     'content' => $this-> content1,
        //     'type' => 'number',
        //     'rules' => ['numeric', 'min:0']
        // ]);
        
        // $survey->questions()->create([
        //     'content' => 'What\'s the name of your first cat',
        // ]);
        
        // $survey->questions()->create([
        //     'content' => 'Would you want a new cat?',
        //     'type' => 'radio',
        //     'options' => ['Yes', 'Oui']
        // ]);
        
        // return view('standard', ['survey' => $survey]);
    }

    public function addSection(){
        return '<div class="bg-white rounded-md p-4 mb-4 shadow-md">
        <input class="rounded-lg outline-none w-full" type="text" id="" name="" placeholder="What did you have for dinner today">
        <input class="rounded-lg border-t-0 border-l-0 border-r-0 focus:border-b-o mt-3 w-full focus:ring-transparent" type="text" id="" name="" placeholder="How was it?">
      </div>';
    }
}
