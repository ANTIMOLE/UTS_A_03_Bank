<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>

    <style>
        body {
            font-family: 'Source Sans Pro', sans-serif;
            background-color: #f4f6f9;
        }

        .main-sidebar {
            background-color: black;
            color: white; 
        }

        .nav-sidebar .nav-item .nav-link {
            border-radius: 10px;
            transition: background-color 0.3s ease, color 0.3s ease; 
        }

        .nav-sidebar .nav-item .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            color: #3498db; 
        }

        .main-header {
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s; 
        }

        .card:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); 
        }

        .card-header {
            background-color: #3498db;
            color: white;
            font-weight: bold;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .modal-content {
            border-radius: 10px;
        }

        .modal-header {
            background-color: #3498db;
            color: white;
        }

        .btn-close {
            background-color: white;
        }

        .main-footer {
            background-color: #f8f9fa;
            border-top: 1px solid #dee2e6;
            padding: 10px;
            text-align: center;
        }

        .search-input {
            position: relative;
        }

        .search-input input {
            background-color: white;
            background-image: url("{{ asset('image/search.png') }}");
            background-position: 10px center;
            background-repeat: no-repeat;
            background-size: 20px;
            padding-left: 40px;
            height: 40px;
            border: 1px solid #ced4da;
        }

        
    </style>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="navbar-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>

                <li class="navbar-item pt-2">
                    <h5 class="m-0">ADMIN</h5> 
                </li>

                <form class="d-flex pl-5 search-input" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#logout"><i class="fa fa-sign-out"></i> Logout</button>        
                </li>

                <li class="navbar-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link" style="text-decoration: none;">
                <i class="nav-icon fas fa-bank pl-3 ml-1"></i>
                <strong class="brand-text font-weight-light">Atma Bank</strong>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="https://randomuser.me/api/portraits/men/1.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block font-weight-bold" style="text-decoration: none;">ADMIN PANEL</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{url('Admin/dashboard')}}" class="nav-link">
                                <i class="nav-icon fas fa-dashboard"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('Admin/transaction')}}" class="nav-link">
                                <i class="nav-icon fas fa-exchange"></i>
                                <p>Transaction Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('Admin/loan')}}" class="nav-link">
                                <i class="nav-icon fas fa-piggy-bank"></i>
                                <p>Loans Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('Admin/master')}}" class="nav-link">
                                <i class="nav-icon fas fa-database"></i>
                                <p>Master Control</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            @yield('content')
        </div>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                220711833
            </div>
            <strong>Copyright &copy; {{ date('Y') }} <a href="#">AtmaBank</a>.</strong> All rights reserved.
        </footer>

        <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="logoutLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutLabel">Logout Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to logout?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger"  onclick="window.location.href='/login'">Logout</button>
                </div>
            </div>
        </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
</body>
</html>
