<x-app-layout>
    <div class="m-2 space-x-4">
        <a href="/" class="font-semibold text-sm flex items-center px-2 py-2 hover:bg-blue-600 hover:text-white w-40 rounded-full font-mono transition duration-200 ease-in-out ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            All ideas</a>
    </div>
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
                <div class=" mx-4  ">
                    <h4 class="font-semibold pb-3">A random title here</h4>
                    <p class=" text-justify text-gray-600 line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum dolor, excepturi consequuntur officia inventore ad magni nisi eligendi alias ratione facere iste illo sint labore. Doloribus a repudiandae necessitatibus ad? Reprehenderit beatae quo non tenetur earum eveniet quas blanditiis deserunt illo, quisquam tempore asperiores minima perspiciatis, facere numquam maiores voluptatibus quis voluptatem odio eos? Suscipit magni, obcaecati harum illum laborum ratione porro necessitatibus quasi adipisci, dolore quos. Consequatur, maxime. Ex repellat iste dicta, quasi placeat quisquam quia aliquam. Eveniet earum quibusdam quas veniam dolore, cupiditate facilis perspiciatis quae possimus ad sapiente corrupti ex dolorum perferendis aliquam hic voluptatem consectetur unde!</p>
                    <div class="flex justify-between md:items-center text-gray-400 font-semibold text-xxs">
                        <div class="flex justify-around items-center space-x-3 py-3">
                            <p class="hover:text-gray-800">10 hours ago</p>
                            <p class="hover:text-gray-800">&bull;</p>
                            <p class="hover:text-gray-800">category</p>
                            <p class="hover:text-gray-800">&bull;</p>
                            <p class="text-black flex items-center">
                               
                                3 comments
                            </p>
                        </div>
                        <div class="flex items-center justify-between py-3">
                            <a href="/" class="px-6 flex justify-center items-center  text-gray-900 bg-gray-200 hover:bg-red-600 hover:text-white transition duration-150 ease-in text-center text-xxs font-semibold  w-32 h-7 rounded-full mr-2">
                                close
                            </a>
                            <div class="" x-data={open:false}>
                                <button @click="open=!open" class="px-3 relative text-gray-600 hover:bg-gray-800 hover:text-white bg-gray-100  text-center h-7 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="p-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                    </svg>
                                </button>
                                <ul class="px-3 py-2 absolute w-32 rounded-xl bg-white text-black shadow-lg border text-center" x-show=" open "  @click.outside="open=false" >
                                    <li class="py-2"><button  class="w-full hover:bg-blue-800 hover:text-white rounded-full transition dration-150 ease-in px-3 py-2">Link of idea</button></li>
                                    <li class="py-2"><button class="w-full hover:bg-gray-800 hover:text-white rounded-full transition dration-150 ease-in px-3 py-2"> Mark as spam</button></li>
                                    <li class="py-2"><button href="" class="hover:bg-red-800 hover:text-white rounded-full transition dration-150 ease-in px-3 py-2"> Delete post </button></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end post Idea -->
        <div class="mt-3 pt-3 px-4 space-x-4 flex items-center">

            <div x-data={open:false} class=" flex flex-col space-y-12">
                <button @click="open = !open " class="hover:bg-blue-600 rounded-lg px-6 py-2 hover:text-white bg-blue-100 text-blue-600 transition duration-300 ease-in-out">
                    Reply
                </button>
                <ul x-show=" open "  class="px-3 py-2 absolute w-56 rounded-xl bg-white text-black shadow-lg border" x-show=" open ">
                    <li class="py-2">
                        <label for="" class="font-semibold text-gray-500 mb-3">Comment this idea</label>
                        <textarea placeholder="Describe your idea" class=" py-2 placeholder-gray-800 bg-gray-100 w-full text-black rounded-lg text-xs border border-gray-100 flex justify-start flex-col" rows="6" cols="5">

                    </textarea>
                    </li>
                    <li class="py-2 mx-auto text-center">
                        <button class="px-6 py-2 rounded-lg border border-red-600 bg-red-600 text-white">
                            Comment it
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- End reply and become a partner -->


    <div class="flex justify-between ml-5  mb-3">

        <div class="ml-14 mt-0 border-l-2 mb-0 py-6 h-24 border-gray-400 text-white border-b-2">s</div>

        <div class="ml-5 mt-10 idea-container cursor-pointer flex rounded-xl bg-transparent hover:shadow-lg  border border-gray-300 transition duration-150 ease-in">
            <div class="flex px-3 py-2">
                <a href="#" class="flex-none">
                    <img class="w-14 h-14 rounded-xl" src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="">
                </a>
                <div class=" mx-4  ">
                    <h4 class="font-semibold pb-3">A random title here</h4>
                    <p class=" text-justify text-gray-600 line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum dolor, excepturi consequuntur officia inventore ad magni nisi eligendi alias ratione facere iste illo sint labore. Doloribus a repudiandae necessitatibus ad? Reprehenderit beatae quo non tenetur earum eveniet quas blanditiis deserunt illo, quisquam tempore asperiores minima perspiciatis, facere numquam maiores voluptatibus quis voluptatem odio eos? Suscipit magni, obcaecati harum illum laborum ratione porro necessitatibus quasi adipisci, dolore quos. Consequatur, maxime. Ex repellat iste dicta, quasi placeat quisquam quia aliquam. Eveniet earum quibusdam quas veniam dolore, cupiditate facilis perspiciatis quae possimus ad sapiente corrupti ex dolorum perferendis aliquam hic voluptatem consectetur unde!</p>
                    <div class="flex justify-between md:items-center text-gray-400 font-semibold text-xxs">
                        <div class="flex justify-around items-center space-x-3 py-3">
                            <p class="hover:text-gray-800">10 hours ago</p>
                            <p class="hover:text-gray-800">&bull;</p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 focus:text-red-800 hover:text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <div class="flex items-center justify-between pt-3">
                            <div class="" x-data={open:false}>
                                <button @click="open=!open" class="px-3 relative text-gray-600 hover:bg-gray-800 hover:text-white bg-gray-100  text-center h-7 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="p-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                    </svg>
                                </button>
                                <ul class="px-3 py-2 absolute w-32 rounded-xl bg-white text-black shadow-lg border" x-show=" open " @click.outside=" open = false ">
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

    <!-- End comments -->

    <div class="flex justify-between ml-5  mb-3">

        <div class="ml-14 mt-0 border-l-2 mb-0 py-6 h-24 border-gray-400 text-white border-b-2">s</div>

        <div class="ml-5 mt-10 idea-container cursor-pointer flex rounded-xl bg-transparent hover:shadow-lg  border border-gray-300 transition duration-150 ease-in">
            <div class="flex px-3 py-2">
                <a href="#" class="flex-none">
                    <img class="w-14 h-14 rounded-xl" src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="">
                </a>
                <div class=" mx-4  ">
                    <h4 class="font-semibold pb-3">A random title here</h4>
                    <p class=" text-justify text-gray-600 line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum dolor, excepturi consequuntur officia inventore ad magni nisi eligendi alias ratione facere iste illo sint labore. Doloribus a repudiandae necessitatibus ad? Reprehenderit beatae quo non tenetur earum eveniet quas blanditiis deserunt illo, quisquam tempore asperiores minima perspiciatis, facere numquam maiores voluptatibus quis voluptatem odio eos? Suscipit magni, obcaecati harum illum laborum ratione porro necessitatibus quasi adipisci, dolore quos. Consequatur, maxime. Ex repellat iste dicta, quasi placeat quisquam quia aliquam. Eveniet earum quibusdam quas veniam dolore, cupiditate facilis perspiciatis quae possimus ad sapiente corrupti ex dolorum perferendis aliquam hic voluptatem consectetur unde!</p>
                    <div class="flex justify-between md:items-center text-gray-400 font-semibold text-xxs">
                        <div class="flex justify-around items-center space-x-3 py-3">
                            <p class="hover:text-gray-800">10 hours ago</p>
                            <p class="hover:text-gray-800">&bull;</p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 focus:text-red-800 hover:text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <div class="flex items-center justify-between py-3">
                            <div class="" x-data={open:false}>
                                <button @click="open=!open" class="px-3 relative text-gray-600 hover:bg-gray-800 hover:text-white bg-gray-100  text-center h-7 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="p-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                    </svg>
                                </button>
                                <ul class="px-3 py-2 absolute w-32 rounded-xl bg-white text-black shadow-lg border" x-show=" open " @click.outside=" open = false ">
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



    <div class="flex justify-between ml-5  mb-3">

        <div class="ml-14 mt-0 border-l-2 mb-0 py-6 h-24 border-gray-400 text-white border-b-2">s</div>

        <div class="ml-5 mt-10 idea-container cursor-pointer flex rounded-xl bg-transparent hover:shadow-lg  border border-gray-300 transition duration-150 ease-in">
            <div class="flex px-3 py-2">
                <a href="#" class="flex-none">
                    <img class="w-14 h-14 rounded-xl" src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="">
                </a>
                <div class=" mx-4  ">
                    <h4 class="font-semibold pb-3">A random title here</h4>
                    <p class=" text-justify text-gray-600 line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum dolor, excepturi consequuntur officia inventore ad magni nisi eligendi alias ratione facere iste illo sint labore. Doloribus a repudiandae necessitatibus ad? Reprehenderit beatae quo non tenetur earum eveniet quas blanditiis deserunt illo, quisquam tempore asperiores minima perspiciatis, facere numquam maiores voluptatibus quis voluptatem odio eos? Suscipit magni, obcaecati harum illum laborum ratione porro necessitatibus quasi adipisci, dolore quos. Consequatur, maxime. Ex repellat iste dicta, quasi placeat quisquam quia aliquam. Eveniet earum quibusdam quas veniam dolore, cupiditate facilis perspiciatis quae possimus ad sapiente corrupti ex dolorum perferendis aliquam hic voluptatem consectetur unde!</p>
                    <div class="flex justify-between md:items-center text-gray-400 font-semibold text-xxs">
                        <div class="flex justify-around items-center space-x-3 py-3">
                            <p class="hover:text-gray-800">10 hours ago</p>
                            <p class="hover:text-gray-800">&bull;</p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 focus:text-red-800 hover:text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <div class="flex items-center justify-between py-3">
                            <div class="" x-data={open:false}>
                                <button @click="open=!open" class="px-3 relative text-gray-600 hover:bg-gray-800 hover:text-white bg-gray-100  text-center h-7 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="p-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                    </svg>
                                </button>
                                <ul class="px-3 py-2 absolute w-32 rounded-xl bg-white text-black shadow-lg border" x-show=" open " @click.outside=" open = false ">
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