<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
</head>
<body>

    <h2>Recent Posts</h2>
    @if (session()->has('error'))
     <div style="background-color: red; color: white;">
        {{ session('error') }}
     </div>
    @endif
    @if (session()->has('success'))
     <div style="background-color: green; color: white;">
        {{ session('success') }}
     </div>
    @endif
    <ul>
      @foreach ($posts as $post)
        <li>
            <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
        </li>
    @endforeach
    </ul>


</body>
</html>
