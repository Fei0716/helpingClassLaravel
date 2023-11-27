<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form{
            display:flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        form > div{
            margin-bottom: 12px; 
        }
    </style>
</head>
<body>
    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <h1 style="text-align: center;">Edit Form</h1>

    <form action="{{route('updatePost',['id' => $post->id])}}" method="post">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{$post->title}}">
        </div>
        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10">{{$post->content}}</textarea>
        </div>
        <div>
            <button type="reset">Reset</button>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>