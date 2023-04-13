<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex justify-center">
    
    <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
        @csrf 
        {{-- ******************************************************** --}}
        <h1>Images</h1>

            {{-- @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif --}}

            {{-- <form action="{{ route('images.store') }}" method="post" enctype="multipart/form-data">
                @csrf --}}
                <input type="file" name="images[]" multiple>
                {{-- <button type="submit">Upload</button> --}}
            {{-- </form> --}}

            <hr>

            <h2>Image Gallery</h2>

            {{-- @if($images->count() > 0)
                <div class="row">
                    @foreach($images as $image)
                        <div class="col-md-3">
                            <img src="{{ asset($image->path) }}" alt="{{ $image->filename }}" class="img-thumbnail">
                        </div>
                    @endforeach
                </div>
            @else
                <p>No images found.</p>
            @endif --}}
        {{-- ******************************************************** --}}
        <div>
            <label for="title">title </label><br>
            <input type="text" name="title">
        </div>
        <div>
            <label for="description">description</label><br>
            <input type="text" name="description">
        </div>
        <div>
            <label for="price">price</label><br>
            <input type="number" name="price">
        </div>
        <div>
            <label for="Bedrooms">Bedrooms</label><br>
            <input type="number" name="Bedrooms">
        </div>
        <div>
            <label for="space">space</label><br>
            <input type="number" name="space">
        </div>
        <div>
            <label for="post_type">type</label><br>
            <select name="post_type" id="post_type">
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
        
        <div>
            <label for="type">chose </label><br>

            @foreach($outdoorFeatures as $outdoorFeature)
                <input type="checkbox" name="outdoor_features[]" value="{{ $outdoorFeature->id }}" id="outdoor_feature_{{ $outdoorFeature->id }}">
                <label for="outdoor_feature_{{ $outdoorFeature->id }}">{{ $outdoorFeature->name }}</label><br>
            @endforeach
        </div>
        <div>

        </div>
        <button type="submit" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Create Post</button>
    </form>


</body>
</html>