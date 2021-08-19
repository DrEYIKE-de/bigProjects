<div>
    <div class="w-70 h-80 mr-5 mt-16 text-center font-semibold  hover:shadow-lg">
        <div class="w-full py-1 bg-white px-4 rounded-lg border border-gray-200">
                <div class="">
                     {{-- <div>
                    @if (session()->has('success-message'))
                        <div class="px-3 py-2 bg-green-200 text-green-600 rounded-lg ">
                            {{ session('message') }}
                        </div>
                    @endif
                 </div> --}}
                    <p class="text-sm  py-1 text-gray-800">Post an Idea</p>
                    <sub class="text-gray-400 text-xs font-normal ">Your future big enterprise</sub>
                </div>
               
                @csrf
                @method("post")
                <div class="mt-6">
                    <input wire:model="title" type="text" class="bg-gray-100 w-full my-3 text-black font-bold rounded-full placeholder:text-gray-500 text-xs border border-gray-100" placeholder="The title">
 
                         @if ($errors->has('title'))
                            <span class="py-3 px-2 text-red-600 font-thin">{{ $errors->first('title') }}</span>   
                        @endif  
                </div>
                <div class="my-2">
                    <select wire:model="category" class="w-full border-0 text-xs focus:border-0 text-gray-500 bg-gray-100 rounded-full font-semibold  px-3 py-2" name="category">
                        <option value="">category 1</option>
                        <option value="">category 2</option>
                        <option value="">category 3</option>
                        <option value="">category 4</option>
                    </select>
                
                     
                            @if ($errors->has('category'))
                                <span class="py-3 px-2 text-red-600 font-thin">{{ $errors->first('category') }}</span>   
                            @endif
                 
                  
                </div>
                <div class="my-3">
                    <textarea wire:model="description" placeholder="Describe your idea" class="mt-2 bg-gray-100 w-full text-black rounded-lg text-xs border border-gray-100 flex justify-start flex-col font-semibold " rows="4">

                    </textarea>
                     
                     @if ($errors->has('description'))
                         <span class="py-3 px-2 text-red-600 font-thin">{{ $errors->first('description') }}</span>   
                  @endif
                </div>


                <div class="my-2">
                <label for="investments" class="text-green-600">PARTS FCFA</label>
                    <select wire:model="investmentS" class="w-full border-0 text-xs focus:border-0 font-bold bg-gray-100 rounded-full px-3 py-2" name="investments"> 
                        <option >5000</option>
                        <option >10000</option>
                        <option >50000</option>
                        <option >100000</option>
                        <option>500000</option>
                    </select>
                    
                     @if ($errors->has('investments'))
                         <span class="py-3 px-2 text-red-600 font-thin">{{ $errors->first('investments') }}</span>   
                    @endif
                </div>

                <div class="my-3 px-1 flex justify-around items-center">
                    <label for="docs" class=" h-10 flex justify-center items-center px-8 py-2 rounded-lg border border-gray-200 hover:border-gray-400 hover:bg-gray-400 hover:text-white transition duration-150 ease-in">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                        </svg>
                        <input type="file" id="docs" wire:model="docs" class="hidden" accept="image/*,.pdf" multiple>
                    </label>

                    <button class="my-6 px-6 py-2 rounded-lg border border-red-600 bg-red-600 text-white" wire:click="postIdea">
                        Post it
                    </button>
                   
                </div>
          
               
                @if ($docs)
              
                   @foreach ($docs as $doc)
                       @if (in_array($doc->getClientOriginalExtension(),['png','jpeg','jpg','bmp','gif','svg',]))        
                               <div class="px-2 rounded-lg py-2 border border-gray-100 my-4 mx-2 hover:bg-red-600 transition duration-200 ease-in-out">
                                <img src="{{ $doc->temporaryUrl() }}" class="rounded-lg "> 
                               </div>
                        @elseif (in_array($doc->getClientOriginalExtension(),['pdf']))

                            <div class="border border-gray-100 p-3 text-green-600 bg-green-100 rounded-lg hover:text-white  px-6 flex hover:bg-red-600 transition duration-200 ease-in-out items-center justify-center space-x-3 my-4 mx-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                               <p class="font-semibold">{{ $doc->getClientOriginalName()}}</p>
                            </div>
                       @endif
                      
                    @endforeach
                @else
                    @if ($errors->has('docs'))

                            @php
                                echo $errors;
                            @endphp
                         {{-- <span class="py-3 px-2 text-red-600 font-thin">{{ $errors->first('docs') }}</span>    --}}
                    @endif
                @endif
                   
           </div> 

  </div>
</div>