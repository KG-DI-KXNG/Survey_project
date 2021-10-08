<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Form extends Component
{
    public $question;
    public $surveyName = "Survey";
    public $content1 = 'How many cats do you have?';
    public $question;
    public $question;
    public $question;

    public function render()
    {
        return view('livewire.form');
    }


    public function boot(){
        $survey = ContractsSurvey::create(['name' => $this->surveyName]);
        dd($survey);

        $survey->questions()->create([
            'content' => $this-> content1,
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
