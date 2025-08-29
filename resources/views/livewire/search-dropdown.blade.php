  <div class="relative mt-3 md:mt-0">
                    <input wire:model.live.debounce.500ms="search" type="text" class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search" >
                <div class="absolute top-0 ">
                    <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                 <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                 </svg>
                </div>
                <div class="absolute bg-gray-800 text-sm rounded w-64 mt-4">
                    <ul>
                        <li class="border-b border-gray-700" >
                            <a href="#" class="block hover:bg-fray-700 px-3 py-4" >{{ $search }}</a>
                        </li>
                        <li class="border-b border-gray-700" >
                            <a href="#" class="block hover:bg-fray-700 px-3 py-4" >{{ $search }}</a>
                        </li>
                    </ul>
                </div>
  </div>