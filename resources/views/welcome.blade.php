<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lookin Dharamshala</title>

    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')
    @vite('resources/css/home.css')
</head>

<body class="welcome font-medium min-h-screen flex flex-col bg-purple-900">
    <span id="splash-overlay" class="splash"></span>
    <span id="welcome" class="z-10"></span>

    <header class="sticky top-0 z-50">
        <nav class="bg-purple-900 shadow-lg">
            <div class="flex justify-center py-3">
                <img src="{{asset('assets/logo.png')}}" class="h-12 rounded-lg mt-1" alt="Lookin Dharamshala" />
            </div>
        </nav>
    </header>

    <main class="flex-grow py-16 px-4 md:px-10 lg:px-20">
        <div class="flex flex-wrap items-center justify-between w-full">
            <!-- Text Section -->
            <div class="text-container text-center md:text-left md:flex-1 md:pr-10">
                <p class="text-gray-300 text-xl md:text-2xl mb-2">Welcome To</p>
                <h1 class="title text-4xl md:text-6xl font-bold text-gray-100 uppercase">Lookin</h1>
                <blockquote class="text-gray-200 text-xl italic font-playwrite mt-4 mb-8">Something Special To Explore</blockquote>
                <a href="/touristplaces" class="button-29 inline-block px-6 py-3 bg-blue-500 hover:bg-blue-700 text-white rounded-md shadow-md transition">Let's Continue</a>
            </div>
            <!-- Image Section -->
            <div class="image-container mt-10 md:mt-0 md:flex-1 text-right">
                <img src="{{asset('assets/hii.png')}}" alt="Welcome To Lookin" class="right-image max-w-full h-auto rounded-lg">
            </div>
        </div>
    </main>

    @include('components/touristfooter')
</body>
</html>
