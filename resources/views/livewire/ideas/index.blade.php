<div>
    <div class="flex justify-around m-1 items-center">
    <div class="flex justify-around w-1/3 font-semibold py-1 rounded-full border-0  ">
      <select class="w-full border border-gray-200 hover:border-gray-400 transition duration-150 ease-in  p-0 text-xs focus:border-0 bg-white rounded-full font-semibold  px-3 py-2" name="category">
        <option value="">category 1</option>
        <option value="">category 2</option>
        <option value="">category 3</option>
        <option value="">category 4</option>
      </select>
    </div>
    <div class="flex justify-around w-1/3 font-semibold py-1 rounded-full border-0 mx-1 ">
      <select class="w-full rounded-full text-xs bg-white border-gray-200 hover:border-gray-400 p-0 focus:border-blue-400 font-semibold px-3 py-2" name="category">
        <option value="">Filter One</option>
        <option value="">Filter two</option>
        <option value="">Filter three</option>
        <option value="">Filter four</option>
      </select>
    </div>
    <div class=" flex justify-around items-center w-2/3 text-xs rounded-full border-b border-t  border-gray-400  focus:border-blue-600 px-2 bg-white mx-1">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 m-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
      </svg>
      <input type="text" placeholder="Find an Idea" class="text-xs focus:placeholder-blue-400 bg-white focus:outline-none focus:ring-0  w-full px-8 py-2 border-0 focus:border-b rounded-full text-black font-semibold " />
    </div>
  </div>

  <!-- ideas card -->

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
