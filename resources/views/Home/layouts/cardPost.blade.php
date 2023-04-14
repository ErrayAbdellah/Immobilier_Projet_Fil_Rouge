


{{-- @section('content') --}}
<div class="max-w-md w-82 mt-6 bg-gray-300 shadow-lg rounded-xl p-6">
    <div class="flex flex-col ">
      <div class="">
        
        <div id="controls-carousel" class="relative w-full" data-carousel="static">
          <!-- Carousel wrapper -->
          <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
              <div class=" h-62 w-full mb-3">
                  <div class="absolute flex flex-col top-0 right-0 p-3">
                    <button class="transition ease-in duration-300 bg-gray-800  hover:text-purple-500 shadow hover:shadow-md text-gray-500 rounded-full w-8 h-8 text-center p-1"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                      </svg></button>
                  </div>
                  <div class="hidden duration-700 ease-in-out" data-carousel-item> 
                    <img src="../images_realeState/pexels-photo-1396122.jpg" alt="Just a flower" class=" w-full   object-fill  rounded-2xl">
                  </div>
                  <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="../images_realeState/pexels-photo-1000057.jpg" alt="Just a flower" class=" w-full   object-fill  rounded-2xl">
                  </div>
                  <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="../images_realeState/pexels-photo-210617.jpg" alt="Just a flower" class=" w-full   object-fill  rounded-2xl">
                  </div>
                  <div class="hidden duration-700 ease-in-out" data-carousel-item>
                      <img src="../images_realeState/pexels-photo-1732414.jpg" alt="Just a flower" class=" w-full   object-fill  rounded-2xl">
                    </div>
                </div>
              <!-- ***************************** -->
          </div>
          <!-- Slider controls -->
          <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                  <svg aria-hidden="true" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                  <span class="sr-only">Previous</span>
              </span>
          </button>
          <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                  <svg aria-hidden="true" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                  <span class="sr-only">Next</span>
              </span>
          </button>
      </div>
        <div class="flex-auto justify-evenly">
          <div class="flex flex-wrap ">
            <div class="w-full flex-none text-sm flex items-center text-gray-600">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
              </svg>
              <span class="text-gray-400 whitespace-nowrap mr-3">4.60</span><span class="mr-2 text-gray-400">India</span>
            </div>
            <div class="flex items-center w-full justify-between min-w-0 ">
              <h2 class="text-lg mr-auto cursor-pointer text-gray-900 hover:text-purple-500 truncate ">Lorem ipsum
                is placeholder text commonly used in the graphic</h2>
              <!-- <div class="flex items-center bg-green-400 text-white text-xs px-2 py-1 ml-3 rounded-lg">
                INSTOCK</div> -->
            </div>
          </div>
          <div class="text-xl text-gray-800 font-semibold mt-1">$240.00</div>
         
          <div class="flex space-x-2 text-sm font-medium justify-start">
            <button class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-purple-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-purple-600 ">
              <span>Add Cart</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
{{-- @endsection --}}