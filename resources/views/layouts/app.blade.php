<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Wardatul A\'ani' }} — Portfolio</title>
    <meta name="description" content="Wardatul A'ani (Amare) — Informatics Student, AI & ML Enthusiast, Researcher. Universitas Malikussaleh, Lhokseumawe Aceh.">
    <meta property="og:title" content="Wardatul A'ani — Portfolio">
    <meta property="og:description" content="AI & ML Enthusiast · Published Researcher · Laravel Developer">
    <meta name="author" content="Wardatul A'ani">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=JetBrains+Mono:wght@300;400;700&family=Syne:wght@400;600;800&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>

    <!-- Noise overlay -->
    <div class="noise-overlay"></div>

    <!-- Scanline effect -->
    <div class="scanlines"></div>

    <!-- Custom cursor -->
    <div class="cursor-dot" id="cursorDot"></div>
    <div class="cursor-ring" id="cursorRing"></div>

    <!-- Navigation -->
    @include('sections.nav')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('sections.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/portfolio.js') }}"></script>
</body>
</html>
