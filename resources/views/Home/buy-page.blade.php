<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />


</head>
<body class="bg-gray-100">
    <div class="container mx-auto">
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="flex flex-col md:flex-row md:items-center">
                <div class="mt-4 md:mt-0 md:w-1/2 md:pl-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-2">{{$post->title}}</h2>
                    <p class="text-gray-500">{{$post->title}} </p>
                    <p class="text-lg font-semibold text-gray-700 mb-4">{{$post->price}} MAD</p>                    
                    {{-- description --}}
                    <div class="m-4 mt-7">
                        
                    </div>
                </div>
                <div class="md:w-2/5">
                    {{-- <img src="https://via.placeholder.com/350" alt="Product Image" class="w-full object-cover object-center"> --}}
                    
                    <div id="controls-carousel" class="relative w-full" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg">
                            <div class=" h-62 w-full mb-3">
                                @foreach($images as $image)
                                        <div class="hidden duration-700 " data-carousel-item="active"> 
                                            <img src="{{ asset('image_post/'.$image->filename) }}" alt="Just a flower" class="  object-fill  rounded-2xl">
                                        </div>
                                    @endforeach
                                
                                
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

                    {{-- *************************************************** --}}
                    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                       
                        <div class="flex flex-col items-center pb-10">
                            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('image_post/'.$image->filename) }}" alt="Bonnie image"/>
                            <h5 class="mb-1 text-xl font-medium text-gray-900">Bonnie Green</h5>
                            <span class="text-sm text-gray-500">Visual Designer</span>
                        </div>
                    </div>
                </div>
                
            </div>            
            
            <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Noteworthy technology acquisitions 2021</h5>
                <p class="font-normal text-gray-700 ">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>
            {{-- show comments --}}
            
            {{-- <article>
                <div class="flex items-center mb-4 space-x-4">
                    <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-5.jpg" alt="">
                    <div class="space-y-1 font-medium dark:text-white">
                        <p>Jese Leos <time datetime="2014-08-16 19:00" class="block text-sm text-gray-500 dark:text-gray-400">Joined on August 2014</time></p>
                    </div>
                </div>
                <div class="flex items-center mb-1">
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Second star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Third star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <h3 class="ml-2 text-sm font-semibold text-gray-900 dark:text-white">Thinking to buy another one!</h3>
                </div>
                <footer class="mb-5 text-sm text-gray-500 dark:text-gray-400"><p>Reviewed in the United Kingdom on <time datetime="2017-03-03 19:00">March 3, 2017</time></p></footer>
                <p class="mb-2 text-gray-500 dark:text-gray-400">This is my third Invicta Pro Diver. They are just fantastic value for money. This one arrived yesterday and the first thing I did was set the time, popped on an identical strap from another Invicta and went in the shower with it to test the waterproofing.... No problems.</p>
                <p class="mb-3 text-gray-500 dark:text-gray-400">It is obviously not the same build quality as those very expensive watches. But that is like comparing a Citroën to a Ferrari. This watch was well under £100! An absolute bargain.</p>
                <a href="#" class="block mb-5 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Read more</a>
                <aside>
                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">19 people found this helpful</p>
                    <div class="flex items-center mt-3 space-x-3 divide-x divide-gray-200 dark:divide-gray-600">
                        <a href="#" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-xs px-2 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Helpful</a>
                        <a href="#" class="pl-4 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Report abuse</a>
                    </div>
                </aside>
            </article> --}}

            {{-- comment --}}
            
            <form action="{{route('comment.store')}}" method="POST">
                @csrf
                <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50">
                    <div class="px-4 py-2 bg-white rounded-t-lg">
                        <label for="comment" class="sr-only">Your comment</label>
                        <textarea id="comment" name="commentPost" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0" placeholder="Write a comment..." required></textarea>
                    </div>
                    <div class="flex items-center justify-between px-3 py-2 border-t">
                        <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200  hover:bg-blue-800">
                            Post comment
                        </button>
                    </div>
                    <input type="hidden" name="idPostComment" value="{{$post->id}}">
                </div>
            </form>
            <p class="ml-auto text-xs text-gray-500 ">Remember, contributions to this topic should follow our <a href="#" class="text-blue-600 hover:underline">Community Guidelines</a>.</p>
 
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</body>
</html>