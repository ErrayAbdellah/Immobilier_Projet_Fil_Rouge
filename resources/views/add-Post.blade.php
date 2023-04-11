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
    
    <form method="post" action="{{ route('post.store') }}">
        <div>
            <label for="title">title </label><br>
            <input type="text" name="title">
        </div>
        <div>
            <label for="description">description</label><br>
            <input type="text" class="description">
        </div>
        <div>
            <label for="type">type</label><br>
            <select name="outdoor_features[]" id="outdoor_features">
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
        
        <div>
            <label for="type">chose </label><br>

            @foreach($outdoorFeatures as $outdoorFeature)
                <input type="checkbox" name="outdoor_features[]" value="{{ $outdoorFeature->id }}" id="outdoor_feature_{{ $outdoorFeature->id }}" >
                <label for="outdoor_feature_{{ $outdoorFeature->id }}">{{ $outdoorFeature->name }}</label><br>
            @endforeach
        </div>
        <div>

        </div>
        <button type="submit" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Create Post</button>
    </form>


</body>
</html>