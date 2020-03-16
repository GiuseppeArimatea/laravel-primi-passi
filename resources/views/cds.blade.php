{{-- @dd($data); --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>cd</title>
</head>

<body>
    <div class="container">
        <header>
            <img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
        </header>

        <div class="cds-container">
            @foreach ($data as $cd)
            <div class="cd">
                <img src="{{$cd['poster']}}" />

                <h4>{{$cd['title']}}</h4>
                <small>{{$cd['author']}}</small>
                <small>{{$cd['year']}}</small>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>

</html>
