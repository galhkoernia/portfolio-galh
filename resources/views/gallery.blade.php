<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galhkoernia - Gallery</title>

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
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li class="active"><a href="{{ url('/gallery') }}">Gallery</a></li>
            </ul>
        </nav>
        <div class="user-icons">
            <img src="{{ asset('assets/images/user_icon.png') }}" alt="User Icon">
            <input type="search" placeholder="Search..." />
        </div>
    </header>

    <!-- Gallery Section -->
    <div class="gallery-container">
        <!-- Gallery Item 1 -->
        <div class="gallery-item">
            <img src="{{ asset('assets/images/gallery_1.png') }}" alt="Galuh Kurnia">
            <div class="gallery-text">
                <p>“Di bawah langit pagi yang teduh dan di tengah barisan yang rapih, momen pelantikan organisasi ini
                    menjadi saksi bisu lahirnya tanggung jawab baru. Sebuah prosesi yang tidak hanya formalitas, namun
                    juga simbol peralihan jiwa—dari yang dipimpin menjadi yang memimpin.Sebab,
                    bukan hanya jabatan yang disematkan, melainkan harapan dan amanah yang harus dijaga.”</p>
                <span class="date"> - 21 November 2022 <br>
                    @SMK Negeri 1 Lengkong <br>
                    @OSIS SM1LE ANGAKATAN 2023</span>
            </div>
        </div>

        <hr>

        <!-- Gallery Item 2 -->
        <div class="gallery-item reverse">
            <div class="gallery-text">
                <p>“Di bawah langit malam dan cahaya lampu yang redup, kami berdiri tegap, bukan hanya sebagai anggota,
                    tapi sebagai keluarga. Bersama kami tempuh perjalanan panjang: peluh yang menetes, langkah yang tak
                    kenal lelah, hingga malam-malam yang jadi saksi bisu tawa dan perjuangan.”</p>
                <span class="date"> - 18 Maret 2023 <br>
                    @ SMK Negeri 1 Lengkong <br>
                    @ LASKAR ASMAKARTA</span>
            </div>
            <img src="{{ asset('assets/images/gallery_2.png') }}" alt="Galuh Kurnia">
        </div>

        <hr>

        <!-- Gallery Item 3 -->
        <div class="gallery-item">
            <img src="{{ asset('assets/images/gallery_3.png') }}" alt="Galuh Kurnia">
            <div class="gallery-text">
                <p>“Setiap latihan, setiap perintah, dan setiap langkah yang kami ambil adalah bagian dari proses
                    menjadi pribadi yang tangguh, siap mengabdi, dan menjunjung tinggi semangat kepramukaan yang bersatu
                    dengan jiwa patriotisme."</p>
                <span class="date"> - 09 Oktober 2021 <br>
                    @SAKA WIRAKARTIKA <br>
                </span>
            </div>
        </div>
    </div>
@endsection