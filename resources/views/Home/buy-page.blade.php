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
<body>
    <div class="container mx-auto">
        <div class="">
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
            
        {{--   <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Noteworthy technology acquisitions 2021</h5>
                <p class="font-normal text-gray-700 ">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </a> --}}
            {{-- show comments --}}
            
            <div class="bg-gray-400 ">
                <h1 class="my-5 text-2xl p-5 ">Comments</h1>
                @foreach ($comments as $comment) 
                    @foreach ($users as $user)
                    @if ($comment->user_id == $user->id)
                        <article class="sm:w-[40rem] bg-gray-200 rounded-2xl p-2 mt-4 mb-4 ">
                            <div class="flex items-center mt-6 space-x-4">
                                <img class="w-auto text-sm h-10 rounded-full" src="https://images.pexels.com/photos/678783/pexels-photo-678783.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                                <div class="space-y-1 font-medium">
                                    <p>{{$user->name}}</p>
                                </div>
                            </div>
                            <div>
                                <footer class="mb-5  text-gray-500"><p><time datetime="2017-03-03 19:00">     {{ $comment->created_at}}</time></p></footer>
                                <p class="mb-2 text-gray-500">{{ $comment->description}}</p>
                            </div>
                            <a href="#" class="block mb-5 text-sm font-medium text-blue-600 hover:underline">like</a> <p> 12 likes</p>
                            
                        </article>
                        @endif
                    @endforeach
                @endforeach
            </div>

            {{-- comment --}}
            
            <form action="{{route('comment.store')}}" method="POST" class="sm:w-[40rem]" >
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