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
                <img src="{{asset('assets/hii.png')}}" alt="Welcome To Lookin" class="right-image">
            </div>

            <!-- Text Section -->
            <div class="text-container">
                <span class="container grey-text text-lighten-1">
                    <p class="flow-text">Welcome To</p>
                    <h1 class="title grey-text text-lighten-3">Lookin</h1>
                    <blockquote class="flow-text font-playwrite">
                      Something Special To Explore
                    </blockquote>
                    <!-- HTML !-->
<a href="/touristplaces" class="button-29" role="button">Lets Continue</a>


                </span>
            </div>
        </div>
    </main>
    <div class="footer">
        <ul class="footer-links">
            <li><a href="/privacy-policy">Privacy Policy</a></li>
            <li><a href="/terms-and-conditions">Terms and Conditions</a></li>
            <li><a href="/about-us">About Us</a></li>
            <li><a href="/disclaimer">Disclaimer</a></li>
        </ul>
      </div>
</body>
</html>
