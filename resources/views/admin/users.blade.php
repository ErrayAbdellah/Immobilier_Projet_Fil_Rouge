@extends('admin.layout.master')


@section('title')
    Users
@endsection


@section('content')
<!--Container-->
<div class="container w-full  mx-auto px-2">

    <!--Title-->
    <h1 class="flex items-center font-sans font-bold break-normal text-indigo-500 px-2 py-8 text-xl md:text-2xl">
      users
    </h1>


    <!--Card-->
    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">


        <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
                <tr>
                    <th data-priority="1" class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Name</th>
                    <th data-priority="2">annonce</th>
                    <th data-priority="5">Start date</th>
                    <th data-priority="6">Role</th>
                    {{-- <th></th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)                
                    <tr>
                        <td>
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                <img
                                    class="h-10 w-10 rounded-full" 
                                    src="{{ $user->profile_photo_url }}"
                                    alt="{{ $user->name }}"
                                    />
                                </div>
                                <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                    {{ $user->name }}
                                </div>
                                <div class="text-sm text-gray-500">
                                    {{ $user->email}}
                                </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            12post
                        </td>
                        <td>{{ $user->created_at->toDateString() }}</td>
                        <td>
                            <label class="relative inline-flex items-center mr-5 cursor-pointer">
                                <input type="checkbox" id="changeRole" value="" onclick="Rolechnged({{ $user->id }},{{$user->role->id}})" class="sr-only peer" {{$user->role->id==2 ? 'checked' : ''}}>
                                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                <span class="ml-3 text-sm font-medium text-gray-900">{{ $user->role->name }}</span>
                            </label>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>


    </div>
    <!--/Card-->


</div>
<!--/container-->

@endsection

@section('script')
    <script>
    
        function Rolechnged(id,roleId)
        {
            
                    $.ajax({
                    type: "post",
                    url: "/admin/users/changeRole",
                    data: {
                        'idRole' : roleId,
                        'id':id
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

                    success: function (res) {
                        if(res.status == 200){
                            alert(res.message)
                        }else{
                            alert(res.message)
                        }
                    }
                });
        }


    </script>
@endsection