
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
.nav .nav-item.active {
background-color: #007bff;
color: #fff;
}
.bg-blue-500 {
background-color: #007bff;
}
</style>

<div class="mt-24 flex justify-center w-screen">
{{-- @dd($post->user->profile_photo_path); --}}
<div>
    {{-- images --}}
    <div class="mr-auto ml-auto sm:mb-8 col-start-2 col-span-4 w-3/4 md:w-2/5 h-80">                    
        <div id="controls-carousel" class="relative w-full" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-80 overflow-hidden rounded-lg">
                <div class=" h-62 w-full mb-3">
                    @foreach($images as $image)
                            <div class="hidden duration-700 " data-carousel-item> 
                                <img src="{{ asset('image_post/'.$image->filename) }}" alt="Just a flower" class=" w-full object-fill  rounded-2xl">
                            </div>
                        @endforeach
                    </div>
                <!-- ***************************** -->
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-20 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg aria-hidden="true" class="w-6 h-6 text-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-20 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg aria-hidden="true" class="w-6 h-6 text-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>

        <div class="sm:grid sm:grid-cols-3 sm:gap-4 w-screen flex flex-wrap">
            {{-- <div class="flex flex-col md:flex-row md:items-center "> --}}
        
        
        
            {{-- home --}}
            
            <div class="col-start-1 bg-neutral-300 col-end-3  md:w-1/2 md:pl-8">
                <h2 class="text-xl font-bold text-gray-800 mb-2">{{$post->title}}</h2>
                <p class="text-gray-500">{{$post->description}}</p>
                <p class="text-lg font-semibold text-gray-700 mb-4">{{$post->price}} MAD</p>                    
                {{-- description --}}
                <div class="m-4 mt-7">
                    
                </div>
            </div>
        
            {{-- User of post --}}
            <div class="col-end-7 col-span-2 flex flex-col items-center pb-10 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow space-y-3 ">
                <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ $post->user->profile_photo_path }}" alt="{{ $post->user->name }}"/>
                <h5 class="mb-1 text-xl font-medium text-gray-900">{{ $post->user->name }}</h5>
                <P class="text-sm text-gray-500">{{ $post->user->email }}</P>
                <P class="text-sm text-gray-500">{{ $post->user->phone }}</P>
                {{-- <P class="text-sm text-gray-500">{{ $post->user->name }}</P>
                <P class="text-sm text-gray-500">{{ $post->user->name }}</P> --}}
            </div>
            {{-- </div> --}}
        
        
            {{-- <div class="flex justify-around flex-wrap "> --}}

                

                {{-- types and futurs --}}
                <div class="col-start-1 col-end-7 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow ">
                    <div>
                        <h1>Bedrooms</h1>
                        <h5 class="w-24 p-2 mt-2 text-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">{{$post->Bedrooms}}</h5>
                    </div>
                    <div>
                        <h1>type</h1>
                        <h5 class="w-24 p-2 mt-2 text-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">{{$post->type->name}}</h5>
                    </div>
                    <div>
                        <h1>Outdoor Features</h1>
                    <div class="flex justify-around flex-wrap">
                        @foreach ($post->outdoorfeature as $item)
                        <h5 class="w-24 p-2 mt-2 text-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">{{$item->name}}</h5>
                        @endforeach
                    </div>
                    </div>
                    <div>
                        <h1>Space</h1>
                        <h5 class="w-24 p-2 mt-2 text-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">{{$post->space}}m²</h5>
                    </div>
                </div>
            </div>
    

            {{-- show comments --}}

            <div class=" flex justify-center flex-wrap ">
                <div class="scrollComement">
                    <h1 class="my-5 text-2xl p-5 ">Review</h1>
                    <div class="h-auto overflow-scroll h-[50rem] ">
                        @foreach ($comments as $comment) 
                            @foreach ($users as $user)
                                @if ($comment->user_id == $user->id)
                                    <article class="sm:w-[40rem] bg-gray-200 rounded-2xl p-2 mt-4 mb-4 ">
                                        <div class="flex justify-end px-4 pt-4">
                                            <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                                                <span class="sr-only">Open dropdown</span>
                                                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                                            </button>
                                            <!-- Dropdown menu -->
                                            <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                                <ul class="py-2" aria-labelledby="dropdownButton">
                                                <li>
                                                    <form action="{{route('comment.destroy',$comment->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="submit" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" value="Delete" /a>
                                                    </form>
                                                </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="flex items-center mt-2 space-x-4">
                                            <img class="w-auto text-sm h-10 rounded-full" src="{{ $user->profile_photo_path }}" alt="{{ $user->name }}">
                                            <div class="space-y-1 font-medium">
                                                <p>{{$user->name}}</p>
                                            </div>
                                        </div>
                                        <div>
                                            <footer class="mb-5  text-gray-500"><p><time datetime="2017-03-03 19:00">{{ $comment->created_at}}</time></p></footer>
                                            <p class="mb-2 text-gray-500">{{ $comment->description}}</p>
                                        </div>
                                        {{-- <a href="#" class="block mb-5 text-sm font-medium text-blue-600 hover:underline">like</a> <p> 12 likes</p> --}}
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
        </div>
    </div>
</div>

@endsection