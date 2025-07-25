@extends('layouts.app')

@section('title', 'About')

@section('content')
    <!-- Header -->
    <header>
        <div class="logo">
            <img src="{{ asset('assets/images/headshet.png') }}" alt="Logo Headset">
        </div>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active"><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="{{ url('/gallery') }}">Gallery</a></li>
            </ul>
        </nav>
        <div class="user-icons">
            <img src="{{ asset('assets/images/user_icon.png') }}" alt="User Icon">
            <input type="search" placeholder="Search..." />
        </div>
    </header>

    <main class="about-container">
        {{-- Foto & Identitas --}}
        <div class="about-left">
            <img src="{{ asset('assets/images/galh.png') }}" alt="Galuh Kurnia">
        </div>

        <div class="about-right">
            <h1 class="signature">Galuh Kurnia</h1>
            <h2 class="major">PHYSICS STUDENT</h2>
            <h3 class="university">SURABAYA STATE UNIVERSITY</h3>

            {{-- Educational Background --}}
            <div class="dropdown dropdown-toggle" onclick="toggleDropdown(this, 'edu-doc-list')">
                <h4 class="dropdown-title">Educational Background</h4>
                <div class="dropdown-arrow">▼</div>
            </div>
            <ul class="doc-list" id="edu-doc-list" style="display: none;">
                @forelse($edu as $doc)
                    <li>
                        <a href="{{ asset('storage/' . $doc->file_path) }}" target="_blank">
                            {{ $doc->title }}
                        </a>
                    </li>
                @empty
                    <li><em>No educational documents available</em></li>
                @endforelse
            </ul>

            {{-- Projects --}}
            <div class="dropdown dropdown-toggle" onclick="toggleDropdown(this, 'project-list')">
                <h4 class="dropdown-title">Project</h4>
                <div class="dropdown-arrow">▼</div>
            </div>
            <ul class="doc-list" id="project-list" style="display: none;">
                @forelse($projects as $doc)
                    <li>
                        <a href="{{ asset('storage/' . $doc->file_path) }}" target="_blank">
                            {{ $doc->title }}
                        </a>
                    </li>
                @empty
                    <li><em>No projects available</em></li>
                @endforelse
            </ul>

            {{-- Achievements --}}
            <div class="dropdown dropdown-toggle" onclick="toggleDropdown(this, 'achievement-list')">
                <h4 class="dropdown-title">Achievement</h4>
                <div class="dropdown-arrow">▼</div>
            </div>
            <ul class="doc-list" id="achievement-list" style="display: none;">
                @forelse($achievements as $doc)
                    <li>
                        <a href="{{ asset('storage/' . $doc->file_path) }}" target="_blank">
                            {{ $doc->title }}
                        </a>
                    </li>
                @empty
                    <li><em>No achievements yet</em></li>
                @endforelse
            </ul>
        </div>

        {{-- Foto Section --}}
        <div class="foto-section">
            <div class="foto-upload">
                <label class="upload-label"
                    onclick="setPreview('preview1', '{{ asset('assets/images/foto1.png') }}')"></label>
                <label class="upload-label"
                    onclick="setPreview('preview2', '{{ asset('assets/images/foto2.png') }}')"></label>
            </div>
            <div class="foto-preview-stack">
                <img id="preview1" class="preview-img" src="{{ asset('assets/images/foto_1.png') }}">
                <img id="preview2" class="preview-img" src="{{ asset('assets/images/foto_2.png') }}">
            </div>
        </div>
    </main>

    <script src="{{ asset('script/script.js') }}"></script>
@endsection