<html>
<head></head>
<body style="font-family: system-ui,sans-serif;color: rgb(120,120,120);">

    <div style="width:100%;  padding: 6px; background: #ff0844; color: rgb(255,255,255);"
        <h1>{{ $user }}</h1>
    </div>

    <div style="border:1px solid rgb(240,240,240);width:100%; padding:6px;">
        @foreach($posts as $post)
            <h2>{{ $post->title }}</h2>
            <small>{{ $post->created_at }}</small>
            <p>{{ $post->content }}</h2>
        @endforeach
    </div>

    <footer style="color:rgb(150,150,150); background: rgb(50,50,50); padding: 6px; font-size:12px;">
    <a href='{{ $unsub_url }}'>Unsubscribe</a>| News are provided by Newsfly
    </footer>

</body>
</html>