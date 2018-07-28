<html>
<head></head>
<body style="font-family: system-ui,sans-serif;color: rgb(120,120,120);">

    <div style="width:100%;  padding: 6px; background: #ff0844; color: rgb(255,255,255);"
        <h1>Newsfly</h1>
    </div>

    <div style="border:1px solid rgb(240,240,240);width:100%; padding:6px;">
        You subscribed to {{ $user->name }}, if you did not you can <a href="{{ $unsub_url }}">Unsubscribe</a>
    </div>

    <footer style="color:rgb(150,150,150); background: rgb(50,50,50); padding: 6px; font-size:12px;">
    <a href='{{ $unsub_url }}'>Unsubscribe</a>| News are provided by Newsfly
    </footer>

</body>
</html>