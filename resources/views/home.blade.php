<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/style.css')
    <title>laravel primi passi</title>
</head>
<body>
    <header class="header">
        <ul >
            @foreach ($header as $link)
            <li>
                <a href="http://127.0.0.1:8000/{{ $link }}">{{ $link }}</a>
                
            </li>
            @endforeach
        </ul>

    </header>

</body>
</html>