<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>DC COMICS</title>
</head>
<body>
    @foreach($comics as $key => $value)
    <div>
        <a href="{{route('fumetto', ['id'=>$key])}}">
            <span>{{$key}}. {{$value["title"]}}</span>
        </a>
    </div>
        
    @endforeach
    <header>
        <div class="header-container container">
            <div class="top-bar">
                <div id="tag"></div>
                <div id="other-sites"></div>
            </div>
            <nav class="">
                <div class="logo"></div>
                <div class="links"></div>
                <div class="search"></div>
            </nav>
        </div>
    </header>
    <main>
        <div class="main-container">
            <div class="jumbo"></div>
            
        </div>
    </main>
    <footer></footer>
</body>
</html>