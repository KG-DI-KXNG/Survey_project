<x-app-layout>

  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>

<div class="flex justify-center min-h-screen w-full bg-gray-400">
<div>
  <form action="">
    <div class="overflow-auto mt-8 lg:overflow-visible space-y-6" id="form">
      
      <div class="bg-white rounded-md py-10 px-4 mb-4 shadow-md flex">
        Form Title: <input class="rounded-lg border-none w-full font-extrabold" type="text" id="" name="" value="{{$surveyName}}" readonly placeholder="Dinner for today">

        <hr>
      </div>

      
      @for ($i=0;$i<$section;$i++)
      <div  class="bg-white rounded-md group border-solid border-blue-500 p-4 mb-4 shadow-md">
        <div id="div{{$i}}" class="flex flex-col">
          <div class="flex">
            <input class="rounded-lg border-none grid grid-cols-1 w-2/3" type="text" id="" name="" placeholder="What did you have for dinner today?">
            <select name="" id="option{{$i}}" class=" grid grid-cols-1 w-1/3" onchange ="changeType({{$i}})">
                <option value="mc">Multiple Choices</option>
                <option value="sa">Short Answers</option>
                <option value="tf">True or False</option>
            </select>
          </div>
          <div class="flex" id="type{{$i}}">
            <input type="radio" id="" name="">
            <label for="new">Stew Peas</label>
          </div>

        </div>
          <button class="group-hover:opacity-100 opacity-0 border-2" type="button" id="btn{{$i}}}" onclick="addQuestion({{$i}})">Add a Question</button>
      </div>
      @endfor
   
             
      <div class="bg-white rounded-md p-4 mb-4 shadow-md">
        <input class="rounded-lg outline-none w-full" type="text" id="" name="" placeholder="What did you have for dinner today">
        <input class="rounded-lg border-t-0 border-l-0 border-r-0 focus:border-b-o mt-3 w-full focus:ring-transparent" type="text" id="" name="" placeholder="How was it?">
      </div>

      {{-- @include('vendor.survey.sections.single') --}}
    </div>
    {{-- <button type="button" onclick="addQuestion()">add Question</button> --}}
  </form>         
</div>
</div>

<script>

let divCount = 1;
   
let NewContent = `<div class='reply'><input name='name' type='text' id='name' size='20' value='' style='height:20px; margin-top:10px; width:480px;margin-left:90px; font-size:14px;' /></div>`;


function addQuestion(divNum){
// document.remove()
var div = document.createElement("div");
div.setAttribute('class', 'flex mt-2');
var question = document.createElement("input");
question.setAttribute('class','rounded-lg border-none grid grid-cols-1 w-2/3');                                                 
question.setAttribute('name','question'+divNum);
question.setAttribute('placeholder','Enter Question');
question.setAttribute('type','text');


div.appendChild(question);
var node = document.createElement("input");
node.setAttribute('class','border-2 my-2');                                                 
node.setAttribute('name','input'+divNum);                                                 
node.setAttribute('type','text');                                                 

document.getElementById('div'+divNum).appendChild(div);  
document.getElementById('div'+divNum).appendChild(node);  

}

function changeType(typeid){
  let type = document.getElementById('type'+typeid);
  let option = document.getElementById('option'+typeid);
  type.innerHTML = "";
  if (option.value == "mc"){
    // var selectList = document.createElement("select");
    var selectOption1 = document.createElement("input");
    selectOption1.type = "radio";
    document.createElement('label').textContent = "Option 1";
    var selectOption2 = document.createElement("input");
    selectOption2.setAttribute('type','radio');
    var selectOption3 = document.createElement("input");
    selectOption3.setAttribute('type','radio');
    var selectOption4 = document.createElement("input");
    selectOption4.setAttribute('type','radio');

 type.appendChild(selectOption1);
 type.appendChild(selectOption2);
 type.appendChild(selectOption3);
 type.appendChild(selectOption4);
    // type.appendChild(selectList);  
    console.log('mc');
  }else if(option.value == "sa"){
    var node = document.createElement("input");
    node.setAttribute('class','border-2 my-2');                                                 
    node.setAttribute('name','input'+typeid);                                                 
    node.setAttribute('type','text'); 
    type.appendChild(node);
  }else if(option.value == "tf"){
    let t1 = document.createElement("input");
    t.setAttribute('type','radio');
    let t2 = document.createElement("input");
    t2.setAttribute('type','radio');
    type.appendChild(t1);
    type.appendChild(t2);
    console.log('tf');
  }
                                                 

// document.getElementById('div'+divNum).textContent(div);  
//   

}

</script>

</x-app-layout>
