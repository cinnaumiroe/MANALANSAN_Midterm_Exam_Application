<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurants</title>
</head>
<body>
    <h1>Restaurants</h1>
    <ul>
        @foreach($restos as $resto)
            <li>{{ $resto }}</li>
        @endforeach
    </ul>
</body>
</html>