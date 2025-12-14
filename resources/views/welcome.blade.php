<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LearnSpace - Learning Made Easy</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gradient-to-b from-nature-50 to-nature-100">
            <!-- Navigation -->
            <nav class="bg-gradient-to-r from-nature-700 to-nature-600 border-b border-nature-800">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <!-- Logo -->
                        <div class="flex items-center">
                            <span class="text-2xl font-bold text-white">LearnSpace</span>
                        </div>

                        <!-- Auth Links -->
                        <div class="flex items-center gap-4">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="btn-nature-outline text-white border-white hover:bg-white hover:text-nature-700">
                                        Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="text-white hover:text-nature-200 font-medium transition">
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn-nature-outline text-white border-white hover:bg-white hover:text-nature-700">
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            @endif
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Hero Section -->
            <div class="relative overflow-hidden">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
                    <div class="text-center">
                        <!-- Logo Icon -->
                        <div class="flex justify-center mb-8">
                            <div class="bg-gradient-to-br from-nature-500 to-nature-700 rounded-full p-12 shadow-2xl">
                                <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Main Heading -->
                        <h1 class="text-5xl md:text-6xl font-bold text-nature-800 mb-6">
                            Welcome to LearnSpace
                        </h1>
                        
                        <p class="text-xl md:text-2xl text-nature-600 mb-8 max-w-3xl mx-auto">
                            A simple learning management system designed to help instructors create and manage courses while allowing students to easily explore and learn at their own pace.
                        </p>

                        <!-- CTA Buttons -->
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            @guest
                                <a href="{{ route('register') }}" class="btn-nature-primary text-lg px-8 py-4 shadow-xl hover:shadow-2xl transition">
                                    Get Started
                                </a>
                                <a href="{{ route('login') }}" class="btn-nature-outline text-lg px-8 py-4 shadow-md hover:shadow-lg transition">
                                    Sign In
                                </a>
                            @else
                                <a href="{{ url('/dashboard') }}" class="btn-nature-primary text-lg px-8 py-4 shadow-xl hover:shadow-2xl transition">
                                    Go to Dashboard
                                </a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features Section -->
            <div class="py-16 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-bold text-center text-nature-800 mb-12">
                        Key Features
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Feature 1 -->
                        <div class="card-nature p-8 text-center hover:scale-105 transition-transform">
                            <div class="bg-nature-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                                <svg class="w-10 h-10 text-nature-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-nature-800 mb-3">For Instructors</h3>
                            <p class="text-gray-600">Create, edit, and manage your courses with an easy-to-use interface</p>
                        </div>

                        <!-- Feature 2 -->
                        <div class="card-nature p-8 text-center hover:scale-105 transition-transform">
                            <div class="bg-nature-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                                <svg class="w-10 h-10 text-nature-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-nature-800 mb-3">For Students</h3>
                            <p class="text-gray-600">Browse and access a wide variety of courses from expert instructors</p>
                        </div>

                        <!-- Feature 3 -->
                        <div class="card-nature p-8 text-center hover:scale-105 transition-transform">
                            <div class="bg-nature-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                                <svg class="w-10 h-10 text-nature-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-nature-800 mb-3">Simple & Clean</h3>
                            <p class="text-gray-600">Beautiful, intuitive design that makes learning enjoyable</p>
                        </div>

                        <!-- Feature 4 -->
                        <div class="card-nature p-8 text-center hover:scale-105 transition-transform">
                            <div class="bg-nature-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                                <svg class="w-10 h-10 text-nature-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-nature-800 mb-3">Secure</h3>
                            <p class="text-gray-600">Role-based access control ensures data privacy and security</p>
                        </div>

                        <!-- Feature 5 -->
                        <div class="card-nature p-8 text-center hover:scale-105 transition-transform">
                            <div class="bg-nature-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                                <svg class="w-10 h-10 text-nature-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-nature-800 mb-3">Responsive</h3>
                            <p class="text-gray-600">Access your courses on any device - desktop, tablet, or mobile</p>
                        </div>

                        <!-- Feature 6 -->
                        <div class="card-nature p-8 text-center hover:scale-105 transition-transform">
                            <div class="bg-nature-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                                <svg class="w-10 h-10 text-nature-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-nature-800 mb-3">Fast & Modern</h3>
                            <p class="text-gray-600">Built with Laravel for speed, reliability, and scalability</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- How It Works Section -->
            <div class="py-16 bg-gradient-to-b from-nature-50 to-nature-100">
                <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-bold text-center text-nature-800 mb-12">
                        How It Works
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                        <!-- For Instructors -->
                        <div class="bg-white rounded-lg p-8 shadow-lg border-l-4 border-nature-500">
                            <h3 class="text-2xl font-bold text-nature-800 mb-6">
                                For Instructors
                            </h3>
                            <ol class="space-y-4">
                                <li class="flex items-start">
                                    <span class="bg-nature-500 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-3 flex-shrink-0">1</span>
                                    <span class="text-gray-700">Register as an instructor</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="bg-nature-500 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-3 flex-shrink-0">2</span>
                                    <span class="text-gray-700">Create your courses with rich content</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="bg-nature-500 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-3 flex-shrink-0">3</span>
                                    <span class="text-gray-700">Manage and update courses anytime</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="bg-nature-500 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-3 flex-shrink-0">4</span>
                                    <span class="text-gray-700">Share knowledge with students worldwide</span>
                                </li>
                            </ol>
                        </div>

                        <!-- For Students -->
                        <div class="bg-white rounded-lg p-8 shadow-lg border-l-4 border-nature-400">
                            <h3 class="text-2xl font-bold text-nature-800 mb-6">
                                For Students
                            </h3>
                            <ol class="space-y-4">
                                <li class="flex items-start">
                                    <span class="bg-nature-400 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-3 flex-shrink-0">1</span>
                                    <span class="text-gray-700">Register as a student</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="bg-nature-400 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-3 flex-shrink-0">2</span>
                                    <span class="text-gray-700">Browse available courses</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="bg-nature-400 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-3 flex-shrink-0">3</span>
                                    <span class="text-gray-700">View detailed course content</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="bg-nature-400 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-3 flex-shrink-0">4</span>
                                    <span class="text-gray-700">Learn at your own pace</span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="bg-gradient-to-r from-nature-800 to-nature-700 text-white py-8">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <div class="flex items-center justify-center mb-4">
                        <span class="text-xl font-bold">LearnSpace</span>
                    </div>
                    <p class="text-nature-200">
                        © {{ date('Y') }} LearnSpace - Learning Made Easy
                    </p>
                </div>
            </footer>
        </div>
    </body>
</html>