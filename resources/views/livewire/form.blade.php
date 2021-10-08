<x-app-layout>

  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{__('Dashboard')}}
    </h2>
    <x-button class="font-semibold text-sm bg-red-500 rounded-md p-2 mr-50 w-1/10">
    <h2>{{__('Log Out')}}</h2>
    </x-button>
</x-slot>

<div class="flex items-center justify-center mt-6 w-full">
<div>
    <div class="overflow-auto lg:overflow-visible space-y-6">
      <form method="GET" action="{{route('surveyForm')}}">
        @csrf
      <div class="bg-white rounded-md py-10 px-4 mb-4 shadow-md">
        <input class="rounded-lg border-none w-full" type="text" id="" name="" value="{{--$name--}}" readonly placeholder="Dinner for today">

        <hr>
      </div>

      <div class="bg-white rounded-md border-solid border-blue-500 p-4 mb-4 shadow-md">
        <input class="rounded-lg border-none w-full" type="text" id="" name="" placeholder="What did you have for dinner today?">
        <input type="radio" id="" name="">
        <label for="new">Stew Peas</label>
      </div>
             
      <div class="bg-white rounded-md p-4 mb-4 shadow-md">
        <input class="rounded-lg outline-none w-full" type="text" id="" name="" placeholder="What did you have for dinner today">
        <input class="border-t-0 border-l-0 border-r-0 focus:border-b-0 mt-3 w-full focus:ring-transparent" type="text" id="" name="" placeholder="How was it?">
      </div>

      {{-- @include('vendor.survey.sections.single') --}}
    
    </form>         
    </div>
</div>
</div>

</x-app-layout>
