<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    
    <form method="post" action="{{ route('post.update', $post->id) }}" enctype="multipart/form-data" class="border-2 m-52 p-14">
            @csrf
            @method('PUT')

        <div>
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900">title</label>
            <input type="text" name="title" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 "value="{{ $post->title }}">
        </div>
        <div>
            <label for="price" class="block mb-2 text-sm font-medium text-gray-900">price</label>
            <input type="number" name="price" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 "value="{{ $post->price }}">
        </div>
        <div>
            <label for="Bedrooms" class="block mb-2 text-sm font-medium text-gray-900">Bedrooms</label>
            <input type="number" name="Bedrooms" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 "value="{{ $post->Bedrooms }}">
        </div>
        <div>
            <label for="space" class="block mb-2 text-sm font-medium text-gray-900">space</label>
            <input type="number" name="space" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 "value="{{ $post->space }}">
        </div>
        <div>
            <label for="post_type" class="block mb-2 text-sm font-medium text-gray-900">Small select</label>
            <select name="post_type" id="post_type" class="block p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" required>
                @foreach($types as $type)
                    <option value="{{ $type->id }}" {{ $post->type_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
       
        <div>
            
            <textarea name="description" id="description" cols="30" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Write your thoughts here...">{{ $post->description }}</textarea>
            
        </div>
        <div>
            <label for="type" class="label">chose </label><br>
            <ul class="items-center  text-sm font-medium text-gray-900 bg-white  rounded-lg sm:flex ">
                <li class="">
                    <div class="pl-3 space-y-4 my-4">
                        @foreach($outdoorFeatures as $outdoorFeature)
                            <input type="checkbox" name="outdoor_features[]" value="{{ $outdoorFeature->id }}" id="outdoor_feature_{{ $outdoorFeature->id }}" {{ in_array($outdoorFeature->id, $post->outdoorfeature->pluck('id')->toArray()) ? 'checked' : '' }} class="w-4 mt-2 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2 border-2">
                            <label for="outdoor_feature_{{ $outdoorFeature->id }}" class="w-full py-3 ml-2 mb-5 text-sm font-medium text-gray-900">{{ $outdoorFeature->name }}</label><br>
                        @endforeach
                    </div>
                </li>
            </ul>
        </div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4" id="images"></div>
        
        <div id="image-container" class="flex flex-wrap gap-2">
        @foreach($images as $image)
        
            <div class="relative image_on">
                <button type="button" value="{{$image->id}}" class="deleteImage text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            <img src="{{ asset('image_post/'.$image->filename) }}" alt="Image" class="w-24 h-24 object-cover rounded-lg">
        </div>
        @endforeach
        </div>

        <div class="">
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
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script>
console.log('hi');
$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).on('click', '.deleteImage',function(){
        if(confirm('Are you sure you want to delete this Images ?')){
            let thisClicked = $(this);
            let image_id = thisClicked.val();
            console.log(image_id)
            $.ajax({
                type: "post",
                url: "/post/destroyImage",
                data: {
                    'image_id':image_id ,
                },
                success: function (res) {
                    if(res.status == 200){
                        thisClicked.closest('.image_on').remove();
                        alert(res.message)
                    }else{
                        alert(res.message)
                    }
                }
            });
        }
    });
});


    //show images addeds 
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
            img.setAttribute('class',"h-auto max-w-full rounded-lg")
            img.setAttribute('src',reader.result)
            };
            reader.readAsDataURL(file);
            div.appendChild(img);
            images.appendChild(div);
        };
        
    }
</script>
    {{-- <br>
    <br>
    <br>
    <form action="{{ route('post.destroy', $post->id) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="text" name="post_id" value="{{ $post->id }}">
        <button type="submit">Delete</button>
    </form> --}}
</body>
</html>