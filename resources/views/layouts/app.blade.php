<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galhkoernia - Portfolio</title>

    {{-- Link CSS Utama --}}
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    {{-- Font lainnya jika dibutuhkan --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

</head>

<body>

    {{-- Konten halaman akan masuk di sini --}}
    @yield('content')

    {{-- Script JS jika diperlukan --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('script/script.js') }}"></script>
</body>

</html>