<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($post)
        <h1>{{ $post['title'] }}</h1>
        <p>{{ $post['content'] }}</p>
    @else
        <h1>Post not found</h1>
    @endif
    <a href="/posts">Back to Posts</a>
</body>
</html>
