@extends('Home.index')

@section('content')
<style>
  .scrollComement{
    ::-webkit-scrollbar-track{
            background: #ffffff6b
        }
    ::-webkit-scrollbar-thumb{
        /* background: linear-gradient(to right,); */
        background: #83838389;
        border-radius:20px;
    }
    ::-webkit-scrollbar-thumb:hover{
        background: #000000da;
        /* background: linear-gradient(to right,#02a1dbda,#a8cf45ce); */
    }
    ::-webkit-scrollbar{
        width: 7px;
        height: 4px;
    }
}
</style>
<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96 opacity-70" >
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ URL::asset('images/home/imag.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ URL::asset('images/home/image2.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ URL::asset('images/home/image3.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>  
    <button type="button" class="absolute top-0 left-0 z-20 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-20 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
    </button>

    <!-- *************************************** -->
</div>
  @include('Home.layouts.search') 



<!-- <main class="felx justify-around w-100"> -->
<main class="flex justify-around flex-wrap h-100 mt-7 mb-24 ">
    <section class="w-72 rounded-lg h-96 bg-gray-400 mt-4">
        <div class="rotate-0 hover:rotate-3 w-72 rounded-lg h-96 transition-all bg-gray-100  p-6">
            <div class="flex justify-end">
                <div class="h-4 w-4 rounded-full bg-gray-900"></div>
              </div>
              
              <!-- year.month.day -->
              <header class="text-center text-xl font-extrabold text-gray-600">
                2021.09.01
              </header>
              
              <img src="{{ URL::asset('images/home/Artboard 1.png') }}" class="mt-3" alt="" width="80%">
              
              <footer class="mb-10 mt-10 flex justify-center">
                <button 
                
                  class="flex items-center rounded-lg bg-blue-700 px-4 py-2.5 text-xl font-bold text-white hover:bg-blue-600"
                >
                  <p>Buy</p>
                  <svg
                    class="h-9 w-9"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </button>
              </footer>
        </div>
    </section>
    <section class="w-72 rounded-lg h-96 bg-gray-400 mt-4">
        <div class="rotate-0 hover:rotate-3 w-72 rounded-lg h-96 transition-all bg-gray-100  p-6">
          <div class="flex justify-end">
            <div class="h-4 w-4 rounded-full bg-gray-900"></div>
          </div>
          
          <!-- year.month.day -->
          <header class="text-center text-xl font-extrabold text-gray-600">
            2021.09.01
          </header>
          
          <img src="{{ URL::asset('images/home/Artboard 14.png') }}" class="mt-6" alt="" width="90%">
          
          <footer class="mb-10 mt-20 flex justify-center">
            <button
              class="flex items-center rounded-lg bg-blue-700 px-4 py-2.5 text-xl font-bold text-white hover:bg-blue-600"
            >
              <p>Rent</p>
              <svg
                class="h-9 w-9"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </button>
          </footer>
        </div>
    </section>
    <section class="w-72 rounded-lg h-96 bg-gray-400 mt-4">
        <div class="rotate-0 hover:rotate-3 w-72 rounded-lg h-96 transition-all bg-gray-100 p-6">
          <div class="flex justify-end">
            <div class="h-4 w-4 rounded-full bg-gray-900"></div>
          </div>
          
          <!-- year.month.day -->
          <header class="text-center text-xl font-extrabold text-gray-600">
            2021.09.01
          </header>
          
          <img src="{{ URL::asset('images/home/ArtboardSell.png') }}" alt="" width="80%">
          
          <footer class="mb-10 mt-14 flex justify-center">
            <button
            {{-- @dd(route('post/create')) --}}
            onclick="window.location.href='{{route('post.create')}}';"
              class="flex items-center rounded-lg bg-blue-700 px-4 py-2.5 text-xl font-bold text-white hover:bg-blue-600"
            >
              <p>Sell</p>
              <svg
                class="h-9 w-9"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </button>
          </footer>
        </div>
    </section>
</main>
<!-- product -->
<section>
  <div id="first-collection" class="bg-white shadow-md rounded-md p-4 scrollComement">
    <div class="flex justify-between items-center mb-4">
      <h5 class="text-lg font-bold text-gray-900">For Buy</h5>
      <span class="text-gray-500 text-sm">Sign in for a more personalized experience.</span>
      <button id="gated-sign-in-btn" class="bg-blue-500 text-white font-medium py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
        more 
      </button>
    </div>
    <div class="h-auto rounded-md flex space-x-2 overflow-x-auto p-6 mx-2">
      {{-- @for ($i = 0 ; $i < 4 ; $i ++) --}}
        
      {{-- @endfor --}}
        @foreach($posts as $post)
        @php 
          $count = $loop->index + 1;
          // $count < 5 ? $loop->index + 1 : break ;
            if ($count >= 5) {
                break;
            }
        @endphp
        <div class="max-w-md w-82 mt-6 bg-gray-300 shadow-lg rounded-xl p-6">
          <div class="flex flex-col ">
            <div class="">
                <!-- Carousel wrapper -->
                <div class="relative h-56  rounded-lg">
                  <div class=" h-62 w-full mb-3">
                      <div class="duration-700 mb-4" data-carousel-item>
                        <img src="{{ asset('image_post/'.$post->images[0]->filename) }}" alt="Just a flower" class="  object-fill  rounded-2xl">
                      </div>
                  </div>
                </div>
              <div class="flex-auto justify-evenly">
                <div class="flex flex-wrap ">
                  <div class="w-full flex-none mt-12 text-sm flex items-center text-gray-600">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg> --}}
                    <span class="text-gray-400 whitespace-nowrap mr-3">4.60</span><span class="mr-2 text-gray-400">India</span>
                  </div>
                  <div class="flex items-center justify-between w-80 ">
                    <h2 class="text-lg mr-auto cursor-pointer text-gray-900 hover:text-purple-500 truncate ">
                     {{ $post->title }}
                    </h2>
                  </div>
                </div>
                <div class="text-xl text-gray-800 font-semibold mt-1">{{ $post->price }}MAD</div>
              
                <div class="flex space-x-2 text-sm font-medium justify-between">
                  <button onclick="window.location.href='{{route('buyPage',['id'=>$post->id])}}';" class="transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-purple-500 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-purple-600 ">
                    <span>Review</span>
                  </button> 
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  
</section>
@endsection