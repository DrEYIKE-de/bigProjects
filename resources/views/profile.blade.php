<x-app-layout>

<div class="px-2 mt-2 py-1 h-48 border rounded-lg mx-auto text-center shadow-lg flex justify-between items-center bg-gradient-to-l from-gray-600 to-gray-200 ">
     <img class="bg-cover w-44 space-y-4 box-border overflow-hidden outline-none rounded-full" src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="">
     <div class="">
        <div class="flex items-center">
             <h4 class="text-2xl pr-3 px-3 py-2 font-semibold flex items-center  text-white">
             Dr. Anis Heiffrem 
            </h4>
         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
        </svg>
        </div>
         <p class="text-gray-100 px-3 py-2">Chirurgienne cardio-thoracique</p>
         <div class="flex items-center justify-center space-x-2"> 
             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg> 
            <p class="font-thin text-xs text-gray-200">
            
            Zurich, Switzerland</p>
        </div>
         
     </div>
</div>

<div class="flex justify-between px-6 py-4 mt-5 ">
    <div class="flex justify-center items-center px-2 bg-blue-800 hover:bg-blue-900">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white " fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <button class="text-white rounded-lg font-semibold px-8 py-2"> 
            Partenaire
        </button>
    </div>
    <div class=" flex justify-center items-center bg-gray-900 px-2">

        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
        </svg>
        <button class="text-white  font-semibold px-8 py-2 ">
            Message
        </button>
    </div>
</div>
<div class="flex justify-center t=items-center mb-10 py-3">
<blockquote class="text-center font-thin italic text-gray-600 w-72 leadind-8 tracking-wide ">" Le plus important c'est d'y croire et tout vous sera possible, quelques soit les tempetes. " </blockquote>
</div>

<nav class="flex items-center justify-between text-xs">
                <ul class=" w-2/3 pb-3 text-xs font-semibold flex justify-around">
                    <li class="uppercase text-xs px-1 py-3 border-b-4 border-blue-600 hover:text-black hover:border-b-2 hover:border-blue-600 ">All your Ideas (11)</li>
                    <li class="uppercase text-xs px-1 py-3 text-gray-400 hover:text-black hover:border-b-2 hover:border-blue-600 ">Partenaires (72)</li>
                    <li class="uppercase text-xs px-1 py-3 text-gray-400 hover:text-black hover:border-b-2 hover:border-blue-600 "> Message (5)</li>
                </ul>
</nav>               
  <div class="ideas-container space-y-6 my-6 px-3 rounded" hover-scrollbar>

    <div class="idea-container cursor-pointer flex rounded-xl bg-transparent hover:shadow-lg  border border-gray-300 transition duration-150 ease-in">

      <div class=" border-r border-gray-100 px-3 py-4">
        <div class="text-center pt-1 pb-3 ">
          <div class="font-semibold text-xl">
            12
          </div>
          <div class="text-xs text-gray-300">
            Votes
          </div>
        </div>
        <div class="text-center py-6 ">
          <button type="button" name="button" class="rounded-xl text-xxs bg-gray-300 text-black px-6 py-2 transition duration-150 ease-in border border-gray-300 hover:border-gray-600 focus:bg-blue-600 focus:text-white focus:border-blue-600">
            Vote
          </button>
        </div>
      </div>
      <div class="flex px-3 py-2">
        <a href="#" class="flex-none">
          <img class="w-14 h-14 rounded-xl" src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="">
        </a>
        <div class="mx-4">
          <div class=" flex justify-between items-start">
            <h4 class="font-semibold pb-3">A random title here</h4>
            <p class="text-blue-700">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </p>
          </div>
          <p class=" text-justify text-gray-600 line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum dolor, excepturi consequuntur officia inventore ad magni nisi eligendi alias ratione facere iste illo sint labore. Doloribus a repudiandae necessitatibus ad? Reprehenderit beatae quo non tenetur earum eveniet quas blanditiis deserunt illo, quisquam tempore asperiores minima perspiciatis, facere numquam maiores voluptatibus quis voluptatem odio eos? Suscipit magni, obcaecati harum illum laborum ratione porro necessitatibus quasi adipisci, dolore quos. Consequatur, maxime. Ex repellat iste dicta, quasi placeat quisquam quia aliquam. Eveniet earum quibusdam quas veniam dolore, cupiditate facilis perspiciatis quae possimus ad sapiente corrupti ex dolorum perferendis aliquam hic voluptatem consectetur unde!</p>
          <div class="flex justify-between md:items-center text-gray-400 font-semibold text-xxs">
            <div class="flex justify-around items-center space-x-4 py-3">
              <p class="hover:text-gray-800">10 hours ago</p>
              <p class="hover:text-gray-800">&bull;</p>
              <p class="hover:text-gray-800">category</p>
              <p class="hover:text-gray-800">&bull;</p>
              <p class="text-black">3 comments</p>
            </div>
            <div class="flex items-center justify-around py-3">
              <button class="px-8 text-gray-900 bg-gray-200 hover:bg-blue-600 hover:text-white transition duration-150 ease-in text-center text-xxs font-semibold  w-32 h-7 rounded-full mr-2">
                open
              </button>
              <div class="" x-data={open:false}>
                <button @click="open=!open" class="px-3 relative text-gray-600 hover:bg-gray-800 hover:text-white bg-gray-100  text-center h-7 rounded-full">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                  </svg>
                </button>
                <ul class="px-3 py-2 absolute w-32 rounded-xl bg-white text-black shadow-lg border" x-show=" open " @click.outside=" open = false ">
                  <li class="py-2"><a href="" class="w-full hover:bg-blue-800 hover:text-white rounded-full transition dration-150 ease-in px-3 py-2">Link of idea</a></li>
                  <li class="py-2"><a href="" class="w-full hover:bg-gray-800 hover:text-white rounded-full transition dration-150 ease-in px-3 py-2"> mark as spam</a></li>
                  <li class="py-2"><a href="" class="hover:bg-red-800 hover:text-white rounded-full transition dration-150 ease-in px-3 py-2"> Delete post </a></li>
                </ul>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</x-app-layout>