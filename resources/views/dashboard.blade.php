<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f4f9ff; 
            color: #333;
        }
        .sidebar {
            width: 250px;
            background-color: #1e3a8a; 
            color: #ffffff;
            flex-shrink: 0;
            height: 100vh;
        }
        .sidebar a {
            color: #ffffff;
            text-decoration: none;
            padding: 20px 15px;
            display: block;
        }
        .sidebar a:hover {
            background-color: #3b82f6; 
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
        .navbar-brand {
            font-weight: bold;
            color: #fff !important;
        }
        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .footer {
            background-color: #1e3a8a;
            color: #ffffff;
            text-align: center;
            padding: 5px 0;
        }
    </style>
</head>
<body>

   
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard ANDRY SERVER</a>
        </div>
    </nav>

    <div class="d-flex">
        
        <div class="sidebar">
            <h4 class="text-center py-3">Menu</h4>
            <a href="{{ route('golongan.index') }}">Golongan</a>
            <a href="{{ route('user.index') }}">User</a>
            <a href="{{ route('pelanggan.index') }}">Pelanggan</a>
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>

       
        <div class="content">
            <div class="container">
                <h1 class="mb-4">Selamat Datang di Dashboard</h1>
                <p class="lead">Pilih menu untuk mengelola data.</p>

                <div class="row">
                    
                    <div class="col-md-4">
                        <div class="card bg-info text-white mb-4">
                            <div class="card-header">Golongan</div>
                            <div class="card-body">
                                <p class="card-text">Kelola data golongan di sini.</p>
                                <a href="{{ route('golongan.index') }}" class="btn btn-light">Lihat Golongan</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-header">User</div>
                            <div class="card-body">
                                <p class="card-text">Kelola data user di sini.</p>
                                <a href="{{ route('user.index') }}" class="btn btn-light">Lihat User</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-header">Pelanggan</div>
                            <div class="card-body">
                                <p class="card-text">Kelola data pelanggan di sini.</p>
                                <a href="{{ route('pelanggan.index') }}" class="btn btn-light">Lihat Pelanggan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="footer">
        <p class="mb-0">© 2024 AndryCH</p>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
