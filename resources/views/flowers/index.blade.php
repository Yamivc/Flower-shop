
    <!-- When there is no desire, all things are at peace. - Laozi -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($flowers as $f)
        <li>{{$f->species}} {{$f->color}}</li>
    @endforeach
</body>
</html>