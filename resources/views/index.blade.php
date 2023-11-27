<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td, th{
            padding: 6px;
        }
    </style>
</head>
<body>
    @if(Session::has('success'))
        <div>{{Session::get('success')}}</div>
    @endif

    <h1>Posts</h1>
    <div style="margin: 12px;">
        <a href="{{route('createPost')}}">Create Post</a>
    </div>
    <table style="border: 2px solid black">
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Created At</th>
            <th>Action 1</th>
            <th>Action 2</th>
        </tr>

        @foreach($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td>{{$post->created_at}}</td>
                <td>
                    <form action="{{route('deletePost',['id' => $post->id])}}" method="post">
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
                {{-- redirect to edit view --}}
                <td>
                    <button>
                        <a href="{{route('editPost',['id' => $post->id])}}" style="text-decoration: none; color:black;">
                        Edit</a>
                    </button>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>