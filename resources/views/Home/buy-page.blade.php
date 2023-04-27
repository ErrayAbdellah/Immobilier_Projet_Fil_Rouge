
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

    <div class="pt-24 flex justify-center w-screen bg-slate-100">
        
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
            
            
                {{-- home --}}
                
                <div class="col-start-1 col-end-3 sm:ml-10 md:w-1/2 md:pl-8 space-y-5">
                    <h2 class="text-xl mt-5 font-bold text-gray-800 mb-2">{{$post->title}}</h2>
                    <p class="text-gray-500">{{$post->description}}</p>
                    <p class="text-lg font-semibold text-gray-700 mb-4">{{$post->price}} MAD</p>

                   <div class="flex space-x-4 items-center flex-wrap">
                        <form action="{{ route('postReport',['id'=>$post->id,'id_cost'=>Auth::user()->id]) }}" method="POST">
                            @csrf
                            <input type="submit"  class="bg-red-600 text-white rounded-xl p-2 hover:bg-red-700" value="Report"/>
                        </form>
                        @if (Auth::user()->id == $post->user_id)
                            <div>
                                <a href="{{route('post.edit',$post->id)}}"class="bg-blue-600 text-white rounded-xl p-2 hover:bg-blue-700" >Edit</a>
                            </div>
                            <form action="{{ route('post.destroy', $post->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit"  class="bg-red-600 text-white rounded-xl p-2 hover:bg-red-700" value="Delete"/>
                            </form>
                        @endif
                   </div>
                </div>
            
                {{-- User of post --}}
                <div class="col-end-7 col-span-2 flex flex-col items-center pb-10 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow space-y-3 ">
                    <img class="w-24 h-24 mb-3 mt-6 rounded-full shadow-lg" src="{{ 'http://127.0.0.1:8000/storage/'.$post->user->profile_photo_path }}" alt="{{ $post->user->name }}"/>
                    <h5 class="mb-1 text-xl font-medium text-gray-900">{{ $post->user->name }}</h5>
                    <P class="text-sm text-gray-500">{{ $post->user->email }}</P>
                    <P class="text-sm text-gray-500">{{ $post->user->phone }}</P>
                    <a href="{{ route('myProfile',$post->user->id) }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-200 ">
                        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                            Show profile
                        </span>
                    </a>
                </div>
                {{-- </div> --}}
            

                    

                {{-- types and futurs --}}
                <div class="col-start-1 sm:ml-10 col-end-7 max-w-sm p-6 rounded-lg shadow bg-white ">
                    <div>
                        <h1>Bedrooms</h1>
                        <h5 class="w-24 ml-8 p-2 mt-2 text-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">{{$post->Bedrooms}}</h5>
                    </div>
                    <div>
                        <h1>type</h1>
                        <h5 class="w-24 ml-8 p-2 mt-2 text-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">{{$post->type->name}}</h5>
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
                        <h5 class="w-24 ml-8 p-2 mt-2 text-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">{{$post->space}}m²</h5>
                    </div>
                    </div>
                </div>

        
                {{-- show comment --}}
                
                {{-- show comments --}}

                <div class=" flex justify-center flex-wrap ">
                    <div class="scrollComement">
                        <h1 class="my-5 text-2xl p-5 ">Review</h1>
                        <div class="h-auto overflow-scroll h-[50rem]">
                            @foreach ($comments as $comment) 
                                @foreach ($users as $user)
                                    @if ($comment->user_id == $user->id)
                                        <article class="sm:w-[40rem] bg-gray-200 rounded-2xl p-2 mt-4 mb-4 ">
                                            <div class="flex justify-end px-4 ">
                                                <form action="" method="" class="">
                                                    <button class="inline-flex items-center px-4 py-2 bg-gray-200 hover:bg-gray-300 text-gray-800 text-sm font-medium rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                                        </svg>Report 
                                                    </button>
                                                </form>
                                                <form action="{{route('comment.destroy', $comment->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    {{-- <svg class="svg-icon w-7 text-red-600" viewBox="0 0 20 20">
                                                        <path d="M17.114,3.923h-4.589V2.427c0-0.252-0.207-0.459-0.46-0.459H7.935c-0.252,0-0.459,0.207-0.459,0.459v1.496h-4.59c-0.252,0-0.459,0.205-0.459,0.459c0,0.252,0.207,0.459,0.459,0.459h1.51v12.732c0,0.252,0.207,0.459,0.459,0.459h10.29c0.254,0,0.459-0.207,0.459-0.459V4.841h1.511c0.252,0,0.459-0.207,0.459-0.459C17.573,4.127,17.366,3.923,17.114,3.923M8.394,2.886h3.214v0.918H8.394V2.886z M14.686,17.114H5.314V4.841h9.372V17.114z M12.525,7.306v7.344c0,0.252-0.207,0.459-0.46,0.459s-0.458-0.207-0.458-0.459V7.306c0-0.254,0.205-0.459,0.458-0.459S12.525,7.051,12.525,7.306M8.394,7.306v7.344c0,0.252-0.207,0.459-0.459,0.459s-0.459-0.207-0.459-0.459V7.306c0-0.254,0.207-0.459,0.459-0.459S8.394,7.051,8.394,7.306">
                                                            <input type="submit" class="w-full block px-4 py-2 text-sm text-red-400  hover:bg-gray-100" value="Delete" />
                                                        </path>
                                                        
                                                    </svg> --}}
                                                    
                                                    <button class="inline-flex items-center px-4 py-2 text-red-500 text-sm font-medium rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </button>
                                                </form>
                                                {{-- <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg text-sm p-1.5" type="button">
                                                    <span class="sr-only">Open dropdown</span>
                                                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                                                </button> --}}
                                                <!-- Dropdown menu -->
                                                {{-- <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                                    <h1>{{ $comment->id }}</h1>
                                                    <ul class="py-2" aria-labelledby="dropdownButton">
                                                        <li>
                                                            <input type="submit" class="w-full block px-4 py-2 text-sm text-gray-600 hover:bg-gray-100" value="Delete" />
                                                        </li>
                                                        <li>
                                                            <h1>{{ $comment->id }}</h1>
                                                        </li>
                                                        <li>
                                                            
                                                        </li>
                                                    </ul>
                                                </div> --}}
                                            </div>
                                            <div class="flex items-center mt-2 space-x-4">
                                                <img class="w-auto text-sm h-10 rounded-full" src="{{ 'http://127.0.0.1:8000/storage/'.$user->profile_photo_path }}" alt="{{ $user->name }}">
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