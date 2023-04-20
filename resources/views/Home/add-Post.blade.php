@extends('Home.index')


@section('content')
<div class="p-14 mt-16 flex justify-center">
    <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data" class="border-2 p-4 w-max space-y-4" style="width: 50rem">
        @csrf 
        
        <div class="flex sm:justify-around flex-wrap">
            <div class="flex items-center pl-4 border border-gray-200 rounded">
                <input checked id="buyRent-1" type="radio" value="1" name="buyRent" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                <label for="buyRent-1" class="p-4 ml-2 text-sm font-medium text-gray-900">Sell</label>
            </div>
            <div class="flex items-center pl-4 border border-gray-200 rounded">
                <input id="buyRent-2" type="radio" value="2" name="buyRent" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                <label for="buyRent-2" class="p-4 ml-2 text-sm font-medium text-gray-900">Rent</label>
            </div>
        </div>

        <div class="flex sm:justify-around flex-wrap"> 
            <div>
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900">title </label>
                <input type="text" name="title" class="block w-64 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 ">
            </div>
            <div>
                <label for="price" class="block mb-2 text-sm font-medium text-gray-900">price</label>
                <input type="number" name="price" class="block w-64 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 ">
            </div>
        </div>
        <div class="flex sm:justify-around flex-wrap ">
            <div>
                <label for="Bedrooms" class="block mb-2 text-sm font-medium text-gray-900">Bedrooms</label>
                <input type="number" name="Bedrooms" class="block w-64 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 ">
            </div>
            <div>
                <label for="space" class="block mb-2 text-sm font-medium text-gray-900">space</label>
                <input type="number" name="space" class="block w-64 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 ">
            </div>
        </div>
        <div class="flex sm:justify-around flex-wrap ">
            <div class="">
                <label for="post_type" class="block mb-2 text-sm font-medium text-gray-900">Small select</label>
                <select name="post_type" id="post_type" class="block w-64 p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 ">
                <option selected>Choose a type</option>
                @foreach($types as $type)
                <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
                </select>
            </div>
            {{-- <div class="">
                <label for="post_type" class="block mb-2 text-sm font-medium text-gray-900">Small select</label>
                <select name="post_type" id="post_type" class="block w-64 p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 ">
                <option selected>Choose a type</option>
                @foreach($types as $type)
                <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
                </select>
            </div> --}}
        </div>
        
        <div class="sm:ml-16">
            <textarea name="description" id="description" cols="30" rows="10" style="width:100%" class="block p-2.5 w-64 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Write your thoughts here..."></textarea>
        </div>
        <div class="sm:ml-16">
            <label for="type" class="label">chose </label><br>
            <ul class="items-center  text-sm font-medium text-gray-900 bg-white  rounded-lg sm:flex ">
                <li class="">
                    <div class="pl-3 space-y-4 my-4">
                        @foreach($outdoorFeatures as $outdoorFeature)
                            <input type="checkbox" name="outdoor_features[]" value="{{ $outdoorFeature->id }}" id="outdoor_feature_{{ $outdoorFeature->id }}" class="w-4 mt-2 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2 border-2">
                            <label for="outdoor_feature_{{ $outdoorFeature->id }}" class=" py-3 ml-2 mb-5 text-sm font-medium text-gray-900">{{ $outdoorFeature->name }} </label><br>
                        @endforeach
                    </div>
                </li>
            </ul>
        </div>
        <div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4" id="images">
            
        </div>
        <div class="w-64 sm:ml-16 mt-5">
            <label for="dropzone-file" class="flex  flex-col items-center justify-centerh-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                    <p class="mb-2 text-sm text-gray-500 "><span class="font-semibold">Click to upload</span> or drag and drop</p>
                    <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                </div>
                <input id="dropzone-file"type="file" name="images[]" onchange="onImageChange(event)" multiple class="hidden" />
            </label>
        </div> 
       
        <button type="submit" class=" mt-5 focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Create Post</button>
    </form>
</div>
@if ($message = Session::get('success'))
{{-- <x-alert-success/> --}}
<script>
    // Swal.fire(
    //     'Good job!',
    //     '{{$message}} !',
    //     'success'
    //     );
        Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: '{{$message}} !',
        showConfirmButton: false,
        timer: 1500
        })
        
    </script> 
    @endif
@endsection

@section('script')
<script>
    function onImageChange(event){
        let images = document.getElementById('images');
        // console.log(event.target.files[0]);
        images.innerHTML = '';
        const files = event.target.files;
        for(let i =0 ;i<files.length;i++){
    
            let file = event.target.files[i]
            let img = document.createElement('img');
            let div = document.createElement('div');
            const reader = new FileReader();
            reader.onload = () => {
            img.setAttribute('class',"h-auto max-w-64 rounded-lg")
            img.setAttribute('src',reader.result)
            };
            reader.readAsDataURL(file);
            div.appendChild(img);
            images.appendChild(div);
        };


        
    }


    </script>
@endsection