<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cute Pink Blog</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* Cute Pink Theme Variables */
        :root {
            --cute-pink-bg: #fff0f5; /* Lavender Blush */
            --cute-pink-primary: #ff85a2;
            --cute-pink-hover: #ff6b8b;
            --cute-pink-border: #ffc2d1;
            --text-color: #5a3d47;
        }

        body {
            background-color: var(--cute-pink-bg);
            color: var(--text-color);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding-top: 50px;
        }

        .main-container {
            background: white;
            padding: 40px;
            border-radius: 30px;
            box-shadow: 0 10px 30px rgba(255, 133, 162, 0.2);
            border: 2px solid var(--cute-pink-border);
        }

        h1, h2 {
            color: var(--cute-pink-primary);
            font-weight: 700;
            margin-bottom: 20px;
        }

        .table {
            border-radius: 15px;
            overflow: hidden;
            border-color: var(--cute-pink-border) !important;
        }

        .table thead {
            background-color: var(--cute-pink-primary);
            color: white;
        }

        .table th, .table td {
            border-color: var(--cute-pink-border) !important;
            vertical-align: middle;
        }

        .btn-cute {
            background-color: var(--cute-pink-primary);
            color: white;
            border: none;
            border-radius: 20px;
            padding: 8px 20px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-cute:hover {
            background-color: var(--cute-pink-hover);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 107, 139, 0.4);
        }

        .btn-outline-cute {
            border: 2px solid var(--cute-pink-primary);
            color: var(--cute-pink-primary);
            border-radius: 20px;
            padding: 5px 15px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-outline-cute:hover {
            background-color: var(--cute-pink-primary);
            color: white;
        }

        .form-control {
            border-radius: 15px;
            border: 2px solid var(--cute-pink-border);
            padding: 12px;
        }

        .form-control:focus {
            border-color: var(--cute-pink-primary);
            box-shadow: 0 0 0 0.25rem rgba(255, 133, 162, 0.25);
        }
        
        .alert-cute {
            background-color: #d4edda;
            color: #155724;
            border-radius: 15px;
            border: 1px solid #c3e6cb;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 main-container">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>