<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ANDRY SERVER ')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        
        .navbar {
            background: linear-gradient(to right, #4e54c8, #8f94fb);
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }

        .container-content {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .btn-back {
            background-color: #6c757d;
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .btn-back:hover {
            background-color: #5a6268;
            color: white;
        }

        
        .footer {
            background: linear-gradient(to right, #4e54c8, #8f94fb);
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    
    <nav class="navbar navbar-expand-lg navbar-dark mb-3">
        <div class="container">
            <a class="navbar-brand" href="#">ANDRY SERVER</a>
        </div>
    </nav>

    
    <div class="container">
        <div class="container-content">
            
            <a href="javascript:history.back()" class="btn-back mb-3">← Kembali</a>
            @yield('content')
        </div>
    </div>

    
    <div class="footer">
        &copy; 2024 AndryCH. All Rights Reserved.
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
