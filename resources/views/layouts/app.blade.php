<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prodi SI UNPAM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="/">Prodi SI UNPAM</a>
            <ul class="navbar-nav ms-auto flex-row gap-3">
                <li><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
                <li><a class="nav-link {{ Request::is('profile') ? 'active' : '' }}" href="/profile">Profile</a></li>
                <li><a class="nav-link {{ Request::is('project') ? 'active' : '' }}" href="/project">Project</a></li>
                <li><a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a></li>
            </ul>
        </div>
    </nav>

    <div class="container py-4 flex-grow-1">
        @yield('content')
    </div>

    <footer class="text-center text-muted py-3 bg-white border-top mt-auto">
        &copy; 2026 Profile Mahasiswa UNPAM. All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>