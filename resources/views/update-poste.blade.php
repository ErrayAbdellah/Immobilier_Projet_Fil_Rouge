<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{ route('post.update', $post->id) }}">
        @csrf
        @method('PUT') <!-- Include the PUT method for updating data -->
        <div>
            <label for="title">Title</label><br>
            <input type="text" name="title" value="{{ $post->title }}" required>
        </div>
        <div>
            <label for="description">Description</label><br>
            <input type="text" name="description" value="{{ $post->description }}" required>
        </div>
        <div>
            <label for="post_type">Type</label><br>
            <select name="post_type" id="post_type" required>
                @foreach($types as $type)
                    <option value="{{ $type->id }}" {{ $post->type_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="outdoor_features">Choose</label><br>
            @foreach($outdoorFeatures as $outdoorFeature)
                <input type="checkbox" name="outdoor_features[]" value="{{ $outdoorFeature->id }}" id="outdoor_feature_{{ $outdoorFeature->id }}" {{ in_array($outdoorFeature->id, $post->outdoorfeature->pluck('id')->toArray()) ? 'checked' : '' }}>
                <label for="outdoor_feature_{{ $outdoorFeature->id }}">{{ $outdoorFeature->name }}</label><br>
            @endforeach
        </div>
        <button type="submit">Update Post</button>
    </form>
    
</body>
</html>