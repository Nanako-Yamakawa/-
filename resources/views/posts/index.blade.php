<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
         <h1>Blog Name</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>{{ $post->title }}</h2>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
         <div class='paginate'>
            {{ $posts->links() }}
            <h2 class='title'>
    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
<h2 class='title'>
    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
</h2>
        </div>
    <a href='/posts/create'>create</a>
    </body>
</html>