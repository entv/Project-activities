<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/home-style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <header>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="videos/video.mp4" type="video/mp4">
        </video>
    
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-200 text-white">
                    <h1 class="display-3">(не)Официальный сайт Виталия Наливкина</h1>
                    <p class="lead mb-0"><a class="test" href="{{route('news')}}">Наливкин не говорит, а делает</a></p>
                </div>
            </div>
        </div>
    </header>

    <div class="achivments">
        <ul class="gallery">
            <li style="background: #fddc3a9d;">Slide 1</li>
            <li style="background: #fddc3a9d;">Slide 2</li>
            <li style="background: #fddc3a9d;">Slide 3</li>
            <li style="background: #fddc3a9d;">Slide 4</li>
            <li style="background: #fddc3a9d;">Slide 5</li>
        </ul>
    </div>

    <script type="text/javascript" src="js/slider.js"></script>
</body>
</html>