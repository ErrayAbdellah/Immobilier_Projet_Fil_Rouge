@extends('admin.layout.master')

@section('title')
    Dashboard
@endsection

@section('content')

    <div class="grid grid-cols-12 gap-6 mt-5 ">
        <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white" target="_blank">
            <div class="p-5">
                <div class="flex justify-between">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                    
                </div>
                <div class="ml-2 w-full flex-1">
                    <div>
                        <div class="mt-3 text-3xl font-bold leading-8">{{ $posts[0]->posts }}</div>

                        <div class="mt-1 text-base text-gray-600">Posts</div>
                    </div>
                </div>
            </div>
        </a>
        <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white" target="_blank">
            <div class="p-5">
                <div class="flex justify-between">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    
                </div>
                <div class="ml-2 w-full flex-1">
                    <div>
                        <div class="mt-3 text-3xl font-bold leading-8">{{ $users[0]->users }}</div>

                        <div class="mt-1 text-base text-gray-600">Users</div>
                    </div>
                </div>
            </div>
        </a>
        <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white" target="_blank">
            <div class="p-5">
                <div class="flex justify-between">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>
                    
                </div>
                <div class="ml-2 w-full flex-1 ">
                    <div class="flex justify-around" >

                        <div>
                            <div class="mt-3 text-3xl font-bold leading-8">{{ $postsBuy[0]->posts }}</div>
                            
                            <div class="mt-1 text-base text-gray-600">Sell</div>
                        </div>
                        <div>
                            <div class="mt-3 text-3xl font-bold leading-8">{{ $postsRent[0]->posts }}</div>
                                
                            <div class="mt-1 text-base text-gray-600">Rent</div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white" target="_blank">
            <div class="p-5">
                <div class="flex justify-between">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
                    </svg>
                    
                </div>
                <div class="ml-2 w-full flex-1">
                    <div>
                        <div class="mt-3 text-3xl font-bold leading-8">{{ $userPost[0]->userPost }}</div>

                        <div class="mt-1 text-base text-gray-600">Users have posts </div>
                    </div>
                </div>
            </div>
        </a>

        
    </div>

    {{-- ***************************** --}}
    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>

<!-- Snippet -->
<section class="flex flex-col justify-center antialiased bg-gray-100 text-gray-600 pt-4">
    <div class="h-full">
        <!-- Table -->
        <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            <header class="px-5 py-4 border-b border-gray-100">
                <h2 class="font-semibold text-gray-800">Customers</h2>
            </header>
            <div class="p-3">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Name</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Email</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Post</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100">
                            @foreach ($rankUserPost as $user)
                                <tr>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg" width="40" height="40" alt="Alex Shatov"></div>
                                            <div class="font-medium text-gray-800">{{$user->name}}</div>
                                        </div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left">{{$user->email}}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left font-medium text-green-500">{{$user->post_count}}</div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
    <div>
       
            {{-- {{$user->name}}
            {{$user->post_count}}
            {{$user->email}}
            <br> --}}
    </div>
@endsection


@section('script')
    
@endsection