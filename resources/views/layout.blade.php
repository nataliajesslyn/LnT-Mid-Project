<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee App</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f4f8;
            color: #2d3748;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.3rem;
            letter-spacing: 0.5px;
        }

        .main-navbar {
            background: linear-gradient(135deg, #1a365d 0%, #2b6cb0 100%);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .page-wrapper {
            min-height: calc(100vh - 120px);
            padding: 2rem 0;
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .card-header {
            background: linear-gradient(135deg, #1a365d 0%, #2b6cb0 100%);
            border-radius: 12px 12px 0 0 !important;
            padding: 1.2rem 1.5rem;
        }

        footer {
            background: #1a365d;
            color: #a0aec0;
            font-size: 0.85rem;
            padding: 1rem 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark main-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('employees.index') }}">
                <i class="bi bi-people-fill me-2"></i>Employee App
            </a>
            <span class="text-white-50 small">Manajemen Data Karyawan</span>
        </div>
    </nav>

    <div class="page-wrapper">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show shadow-sm mb-4" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @yield('content')
        </div>
    </div>

    <footer class="text-center mt-4">
        <div class="container">
            &copy; {{ date('Y') }} Employee App &mdash; All rights reserved.
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
