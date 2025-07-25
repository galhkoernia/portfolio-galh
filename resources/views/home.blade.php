{{-- resources/views/home.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galhkoernia - Home</title>

    {{-- Style Utama --}}
    <link rel="stylesheet" href="{{ asset('style/style.css') }}" />

    {{-- Google Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
</head>

<body>
    @yield('content')
</body>

</html>
@extends('layouts.app')
@section('content')
    <!-- Header -->
    <header>
        <div class="logo">
            <img src="{{ asset('assets/images/headshet.png') }}" alt="Logo Headset">
        </div>
        <nav>
            <ul>
                <li class="active"><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="{{ url('/gallery') }}">Gallery</a></li>
            </ul>
        </nav>
        <div class="user-icons">
            <img src="{{ asset('assets/images/user_icon.png') }}" alt="User Icon">
            <input type="search" placeholder="Search..." />
        </div>
    </header>

    <!-- Hero Section -->
    <main>
        <section class="hero">
            <div class="hero-text">
                <h1><span>GALUH KURNIA</span></h1>
                <div class="subtitle">
                    <h2><i>Physics</i> <span>Student</span></h2>
                </div>
                <div class="label">New Era</div>
            </div>

            <div class="hero-video">
                <div class="phone-frame">
                    <video src="{{ asset('assets/images/animation1.mp4') }}" autoplay muted loop></video>
                </div>
            </div>
        </section>
    </main>

    <script src="{{ asset('script/script.js') }}"></script>
@endsection