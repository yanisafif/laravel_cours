<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>foreach blade</title>
</head>
<body>

    @foreach ($tab as $t)
        <h1>{{$t}}</h1>
    @endforeach

    <hr>

    @foreach ($tab as $t)
        @if (!$loop->first && !$loop->last)
            <h1>{{$t}}</h1>
        @endif
    @endforeach
</body>
</html>
