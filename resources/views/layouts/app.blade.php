<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .main {
            flex: 1;
            display: flex;
        }

        .sidebar {
            width: 200px;
            background-color: #f8f9fa;
            padding: 15px;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
        }

        footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
        <a class="navbar-brand" href="{{ url('/') }}">My Produk</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('products.create') }}">Input Data</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}">Lihat Data</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content Area -->
    <div class="main">
        <!-- Sidebar -->
        <div class="sidebar">
            <h5>Menu</h5>
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('products.create') }}">Input Data</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}">Lihat Data</a></li>
            </ul>
        </div>

        <!-- Halaman Konten -->
        <div class="content">
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <small>&copy; {{ date('Y') }} Aplikasi Produk. Hak cipta dilindungi.</small>
        </div>
    </footer>
</body>
</html>
