@extends('Admin_Panel') 

@section('content')
<style>
    body {
        background-color: #f8f9fa;
    }
    
    .scrollable {
        max-height: 450px; 
        overflow-y: auto;
    }

    .col-account, .col-user, .col-name, .col-date, .col-balance, .col-action {
        width: 15%; 
        text-align: center; /* Menyelaraskan teks di tengah */
    }

    .small-text {
        font-size: 0.9rem; /* Sedikit lebih besar */
    }
    
    .card {
    transition: none; /* Mencegah efek transisi */
    }
    .card:hover {
        transform: none; /* Mencegah zoom saat di-hover */
    }

    .card-title {
        color: #007bff; /* Warna untuk judul */
        font-weight: bold; /* Membuat judul lebih menonjol */
    }

    .btn-danger {
        background-color: #dc3545; /* Warna merah yang lebih cerah */
        border: none; /* Menghilangkan border */
    }
    
    .btn-danger:hover {
        background-color: #c82333; /* Warna merah saat hover */
    }

    .header {
        background-color: #343a40; /* Warna latar belakang header */
        color: white; /* Warna teks header */
        padding: 10px; /* Padding untuk header */
        border-radius: 8px 8px 0 0; /* Membulatkan sudut atas */
    }
    
</style>

<div class="content">
    <div class="col-md-12 pt-3">
        <div class="card card-body">
            <div class="header">
                <h4>Account Control</h4>
            </div>
            <div class="d-flex flex-row align-items-start justify-content-between pt-3">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                <button type="button" class="btn btn-primary mb-5">Add User +</button>
            </div>

            <div class="col-sm-3">
                <div class="card card-body text-center">
                    <p class="card-text">Total User</p>
                    <h5 class="card-title">100</h5>
                </div>
            </div>

            <ul class="list-group mt-3">
                <li class="list-group-item d-flex justify-content-between align-items-center bg-light font-weight-bold">
                    <span class="col-account">Account id</span>
                    <span class="col-user">User id</span>
                    <span class="col-name">User name</span>
                    <span class="col-date">Created Date</span>
                    <span class="col-balance">Balance</span>
                    <span class="col-action">Action</span>
                </li>
            </ul>

            <ul class="list-group mt-0 scrollable small-text">
            <li class="list-group-item d-flex justify-content-between align-items-center">
    <span class="col-account">#12345</span>
    <span class="col-user">#001</span>
    <span class="col-name">John Doe</span>
    <span class="col-date">2024-01-01</span>
    <span class="col-balance">$1000.00</span>
    <button class="btn btn-warning"><i class="fas fa-edit"></i> Edit</button>
    <button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center">
    <span class="col-account">#12346</span>
    <span class="col-user">#002</span>
    <span class="col-name">Jane Smith</span>
    <span class="col-date">2024-01-02</span>
    <span class="col-balance">$2500.50</span>
    <button class="btn btn-warning"><i class="fas fa-edit"></i> Edit</button>
    <button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center">
    <span class="col-account">#12347</span>
    <span class="col-user">#003</span>
    <span class="col-name">Michael Lee</span>
    <span class="col-date">2024-01-03</span>
    <span class="col-balance">$500.75</span>
    <button class="btn btn-warning"><i class="fas fa-edit"></i> Edit</button>
    <button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center">
    <span class="col-account">#12348</span>
    <span class="col-user">#004</span>
    <span class="col-name">Emily Clark</span>
    <span class="col-date">2024-01-04</span>
    <span class="col-balance">$750.00</span>
    <button class="btn btn-warning"><i class="fas fa-edit"></i> Edit</button>
    <button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center">
    <span class="col-account">#12349</span>
    <span class="col-user">#005</span>
    <span class="col-name">David Johnson</span>
    <span class="col-date">2024-01-05</span>
    <span class="col-balance">$1200.60</span>
    <button class="btn btn-warning"><i class="fas fa-edit"></i> Edit</button>
    <button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center">
    <span class="col-account">#12350</span>
    <span class="col-user">#006</span>
    <span class="col-name">Linda Williams</span>
    <span class="col-date">2024-01-06</span>
    <span class="col-balance">$800.00</span>
    <button class="btn btn-warning"><i class="fas fa-edit"></i> Edit</button>
    <button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center">
    <span class="col-account">#12351</span>
    <span class="col-user">#007</span>
    <span class="col-name">Chris Brown</span>
    <span class="col-date">2024-01-07</span>
    <span class="col-balance">$950.45</span>
    <button class="btn btn-warning"><i class="fas fa-edit"></i> Edit</button>
    <button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center">
    <span class="col-account">#12352</span>
    <span class="col-user">#008</span>
    <span class="col-name">Sarah King</span>
    <span class="col-date">2024-01-08</span>
    <span class="col-balance">$1500.75</span>
    <button class="btn btn-warning"><i class="fas fa-edit"></i> Edit</button>
    <button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center">
    <span class="col-account">#12353</span>
    <span class="col-user">#009</span>
    <span class="col-name">Paul Davis</span>
    <span class="col-date">2024-01-09</span>
    <span class="col-balance">$300.50</span>
    <button class="btn btn-warning"><i class="fas fa-edit"></i> Edit</button>
    <button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center">
    <span class="col-account">#12354</span>
    <span class="col-user">#010</span>
    <span class="col-name">Nancy Taylor</span>
    <span class="col-date">2024-01-10</span>
    <span class="col-balance">$100.00</span>
    <button class="btn btn-warning"><i class="fas fa-edit"></i> Edit</button>
    <button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
</li>

            </ul>
        </div>
    </div>
</div>

@endsection
