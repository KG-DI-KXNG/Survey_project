<x-app-layout>
    <x-slot name="header">
        @include('layouts.navigation')
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200 text-gray-900" id="body">
                    <form id="survey-form" action="" method="POST">@csrf

                        <div class="grid grid-cols-6 gap-6 pt-8">
                          <div class="col-span-6 sm:col-span-3">
                            
                            <label for="first_name" class="block text-sm font-medium text-gray-600">
                              First name 
                            </label>
                            <div class="mt-1 flex rounded-md">
                              <input id="first_name" type="text" name="name" class="form-input block w-full h-10 px-4 mb-2 border
                                    border-gray-300 rounded-md
                                    sm:text-sm placeholder-gray-400" placeholder="Your first name" required />
                            </div>
            
                          </div>
            
                          <div class="col-span-6 sm:col-span-3">
            
                            <label id="name-label" for="name" class="block text-sm font-medium text-gray-600">
                              Last name
                            </label>
                            <div class="mt-1 flex rounded-md">
                              <input id="name" type="text" name="name" class="form-input block w-full h-10 px-4 mb-2 border
                              border-gray-300 rounded-md
                              sm:text-sm placeholder-gray-400" placeholder="Your last name" required />
                            </div>
            
                          </div>
            
                          <div class="col-span-6 sm:col-span-3">
            
                            <label for="name" class="block text-sm font-medium text-gray-600">
                              Current role
                            </label>
                            <div class="mt-1 rounded-md">
                              <div class="relative">
                                <select id="dropdown" type="text" name="name" class="form-select block w-full h-10 px-4 mb-2 border
                                      border-gray-300 rounded-md appearance-none text-gray-600
                                      sm:text-sm placeholder-gray-400" placeholder="Your email address">
                                      <option disabled selected value>Select your role</option>
                                      <option>Student</option>
                                      <option>Full-time job</option>
                                      <option>Full-time learner</option>
                                      <option>Prefer not to say</option>
                                      <option>Other</option>
                                </select>
                              </div>
                            </div>
            
                          </div>
            
                          <div class="col-span-6 sm:col-span-3">
            
                            <label id="number-label" for="name" class="block text-sm font-medium text-gray-600">
                              Age
                            </label>
                            <div class="mt-1 flex rounded-md">
                              <input id="number" type="number" min="1" max="99" name="name" class="form-input block appearance-none w-full h-10 px-4 mb-2 border
                                    border-gray-300 rounded-md
                                    sm:text-sm" placeholder="Your age"></input>
                            </div>
            
                          </div>
            
                          <div class="col-span-6 sm:col-span-6">
                            <label id="email-label" for="email" class="block text-sm font-medium text-gray-600">
                              Email address
                            </label>
                            <div class="mt-1 flex rounded-md">
                              <input id="email" type="email" name="name" class="form-input block w-full h-10 px-4 mb-2 border
                                    border-gray-300 rounded-md
                                    sm:text-sm placeholder-gray-400" placeholder="Your email address" required></input>
                            </div>
                          </div>
            
                          <div class="col-span-6 sm:col-span-6 mt-2">
                            <fieldset>
                              <legend class="text-base font-medium text-gray-700">Would you recommend freeCodeCamp to a friend?
                              </legend>
                              <div class="mt-4 space-y-4">
            
                                <div class="flex items-start">
                                  <div class="flex items-center h-5">
                                    <input id="comments" name="user_answer" type="radio" value="definitely"
                                      class="form-radio h-4 w-4 border-gray-300 rounded">
                                  </div>
                                  <div class="ml-3 text-sm">
                                    <input type="text" value="Yes">
                                  </div>
                                </div>
            
                                <div class="flex items-start">
                                  <div class="flex items-center h-5">
                                    <input id="comments" name="user_answer" type="radio" value="maybe"
                                      class="form-radio h-4 w-4 border-gray-300 rounded">
                                  </div>
                                  <div class="ml-3 text-sm">
                                    <label for="comments" class="font-medium text-gray-700">Maybe</label>
                                  </div>
                                </div>
            
                                <div class="flex items-start">
                                  <div class="flex items-center h-5">
                                    <input id="comments" name="user_answer" type="radio" value="not_sure"
                                      class="form-radio h-4 w-4 border-gray-300 rounded">
                                  </div>
                                  <div class="ml-3 text-sm">
                                    <label for="comments" class="font-medium text-gray-700">Not sure</label>
                                  </div>
                                </div>
                              </div>
                            </fieldset>
                          </div>
            
                          <div class="col-span-6 sm:col-span-6 mt-2">
                            <fieldset>
                              <legend class="text-base font-medium text-gray-700">What would you like to see improved?</legend>
                              <p class="text-sm text-gray-500">Check all that apply</p>
                              <div class="mt-4 space-y-4">
            
                                <div class="flex items-start">
                                  <div class="flex items-center h-5">
                                    <input id="comments" name="comments" type="checkbox" value="FE"
                                      class="h-4 w-4 border-gray-300 rounded">
                                  </div>
                                  <div class="ml-3 text-sm">
                                    <label for="comments" class="font-medium text-gray-700">Front-end</label>
                                    <p class="text-gray-500">Things like HTML, CSS, JS or React</p>
                                  </div>
                                </div>
            
                                <div class="flex items-start">
                                  <div class="flex items-center h-5">
                                    <input id="comments" name="comments" type="checkbox" value="BE"
                                      class="h-4 w-4 border-gray-300 rounded">
                                  </div>
                                  <div class="ml-3 text-sm">
                                    <label for="comments" class="font-medium text-gray-700">Back-end</label>
                                    <p class="text-gray-500">APIs and Microservices with NodeJS, Express</p>
                                  </div>
                                </div>
            
                                <div class="flex items-start">
                                  <div class="flex items-center h-5">
                                    <input id="comments" name="comments" type="checkbox" value="FS"
                                      class="h-4 w-4 border-gray-300 rounded">
                                  </div>
                                  <div class="ml-3 text-sm">
                                    <label for="comments" class="font-medium text-gray-700">Full-stack</label>
                                    <p class="text-gray-500">The complete Stack for an End-to-End understanding</p>
                                  </div>
                                </div>
                              </div>
                            </fieldset>
                          </div>
            
                          <div class="col-span-6 sm:col-span-6 mt-2">
                            <label id="textarea" for="textfield" class="block text-sm font-medium text-gray-600">
                              Any other feedback?
                            </label>
                            <div class="mt-1 flex rounded-md">
                              <textarea id="textfield" rows="3"
                                class="form-textarea w-full h-20 px-2 py-2 mb-2 appearance-none border border-gray-300 rounded-md sm:text-sm placeholder-gray-400">
                            </textarea>
                            </div>
                          </div>
            
                          <div class="col-span-6 sm:col-span-2 mt-2">
                            <button type="submit" id="submit"
                              class="inline-flex justify-center py-3 px-8 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                              Submit
                            </button>
                          </div>
            
                        </div>
            
                      </form>

                      <a href="{{route('questions.create', ['id'=>$surveyId])}}"> Add New Question</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
