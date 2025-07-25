<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galhkoernia - Blog</title>

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
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About Us</a></li>
                <li class="active"><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="{{ url('/gallery') }}">Gallery</a></li>
            </ul>
        </nav>
        <div class="user-icons">
            <img src="{{ asset('assets/images/user_icon.png') }}" alt="User Icon">
            <input type="search" placeholder="Search..." />
        </div>
    </header>

    <main class="blog-container">
        <div class="photo-section">
            <img src="{{ asset('assets/images/foto_blog1.png') }}" alt="Galuh Kurnia" class="final-photo">
        </div>

        <div class="blog-text">
            <h2>Galuh Kurnia – <span></span></h2>
            <p><strong>"Welcome to my personal space."</strong><br>
                Di sini, saya berbagi cerita,...<br><br>
                Saya percaya bahwa setiap proses belajar, sekecil apa pun, layak untuk dibagikan.
                Semoga tulisan-tulisan di blog ini bisa menjadi pengingat untuk saya sendiri
                dan inspirasi bagi siapa pun yang sedang berproses.</p>
            <p class="quote">
                <em>"Setiap proses punya ceritanya. Jangan buru-buru selesai, nikmati tumbuhnya."</em>
            </p>
        </div>
    </main>
@endsection