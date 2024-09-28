<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lookin Dharamshala</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    @vite('resources/css/home.css')
</head>

<body class="welcome font-Robotomedium">

    <span id="splash-overlay" class="splash"></span>
    <span id="welcome" class="z-depth-4"></span>

    <header class="navbar-fixed">
        <nav class="row deep-purple darken-3">
            <div class="col s12">
                <ul class="center">
                    <img src="{{asset('assets/logo.png')}}" style="height: 55px ; border-radius: 1em; margin-top:5px " alt="Lookin Dharamshala"  />
                </ul>
            </div>
        </nav>

    </header>

    <main class="valign-wrapper">
        <span class="container grey-text text-lighten-1">
            <p class="flow-text">Welcome To</p>
            <h1 class="title grey-text text-lighten-3">Lookin</h1>

            <blockquote class="flow-text font-playwrite">
            Your modern one place
            </blockquote>
        </span>
    </main>



</body>
</html>
