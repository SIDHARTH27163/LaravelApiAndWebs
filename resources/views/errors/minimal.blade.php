
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
                    <img src="{{asset('assets/logo.png')}}" class="py-7" style="height: 50px; border-radius: 1em; margin-top:5px" alt="Lookin Dharamshala" />
                </ul>
            </div>
        </nav>
    </header>

    <main class="valign-wrapper">
        <div class="content-container">
            <!-- Image Section -->
            <div class="image-container">
                <img src="{{asset('assets/oops.png')}}" alt="Welcome To Lookin" class="right-image">
            </div>

            <!-- Text Section -->
            <div class="text-container">
                <span class="container grey-text text-lighten-1">
                    <p class="flow-text">Sorry From</p>
                    <h1 class="title grey-text text-lighten-3">Lookin</h1>
                    <blockquote class="flow-text font-playwrite">
                        <div class="px-4 text-lg text-gray-500 border-r border-gray-400 tracking-wider">
                            @yield('code')
                         </div>

                         <div class="ml-4 text-lg text-gray-500 uppercase tracking-wider">
                             @yield('message')
                         </div>
                    </blockquote>
                </span>
            </div>
        </div>
    </main>
</body>
</html>
