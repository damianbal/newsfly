<html>
<head></head>
<body style="font-family: system-ui,sans-serif; background: rgb(250,250,250); color: rgb(120,120,120);">

    <div>
        <h1>{{ $user }}</h1>
    </div>

    <div>
        @foreach($posts as $post)
            <h2>{{ $post->title }}</h2>
            <small>{{ $post->created_at }}</small>
            <p>{{ $post->content }}</h2>
        @endforeach
    </div>

    <footer style="color:rgb(150,150,150); font-size:12px;">
        Unsubscribe at Newsfly | News are provided by Newsfly
    </footer>

</body>
</html>