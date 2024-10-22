@extends('Admin_Panel') 

@section('content')
<style>
    
    .scrollable {
        max-height: 450px; 
        overflow-y: auto;
    }
    
    
    .card {
        border-radius: 10px;
    }
    h4 {
        color: #007bff; /* Warna biru untuk judul */
    }
    .btn-export {
        background-color: #28a745; /* Warna hijau untuk tombol export */
        color: white;
    }
    .btn-export:hover {
        background-color: #218838; /* Warna gelap saat hover */
    }
    .nav-tabs .nav-link {
        border-radius: 0;
        margin-right: 10px;
    }
    .nav-tabs .nav-link.active {
        background-color: #007bff; /* Warna biru untuk tab aktif */
        color: white;
    }
    .card {
    transition: none; /* Mencegah efek transisi */
    }
    .card:hover {
        transform: none; /* Mencegah zoom saat di-hover */
    }
    
</style>


<div class="content">
    <div class="col-md-12 pt-3">
        <div class="card card-body">
        <div class="d-flex flex-row justify-content-between align-items-start">
                <div>
                    <h4 class="font-weight-bold">Transaction Report</h4>
                </div>
                <button type="button" class="btn btn-export mb-5"><i class="fas fa-download"></i> Export</button>
            </div>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('Admin/transaction')}}">All Transactions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('Admin/deposit')}}">Deposit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('Admin/withdraw')}}">Withdraw</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('Admin/pending')}}">Pending</a>
                </li>
            </ul>

            <ul class="list-group mt-3">
                <li class="list-group-item d-flex justify-content-between align-items-center bg-light font-weight-bold">
                    <span>Transaction ID</span>
                    <span>Type</span>
                    <span>Account</span>
                    <span>Date</span>
                    <span>Amount</span>
                    <span class="pr-3">Receipt</span>
                </li>
            </ul>

            <ul class="list-group mt-0 scrollable">
                

                <!-- Dummy Data -->
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#123456</span>
                    <span>Deposit</span>
                    <span>Account 1</span>
                    <span>2024-10-12</span>
                    <span>$1000</span>
                    <button class="btn btn-light"><i class="fas fa-download"></i> Download</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#654321</span>
                    <span>Withdraw</span>
                    <span>Account 2</span>
                    <span>2024-10-11</span>
                    <span>$500</span>
                    <button class="btn btn-light"><i class="fas fa-download"></i> Download</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#789012</span>
                    <span>Transfer</span>
                    <span>Account 3</span>
                    <span>2024-10-10</span>
                    <span>$200</span>
                    <button class="btn btn-light"><i class="fas fa-download"></i> Download</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#098765</span>
                    <span>Deposit</span>
                    <span>Account 4</span>
                    <span>2024-10-09</span>
                    <span>$750</span>
                    <button class="btn btn-light"><i class="fas fa-download"></i> Download</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#123456</span>
                    <span>Deposit</span>
                    <span>Account 1</span>
                    <span>2024-10-12</span>
                    <span>$1000</span>
                    <button class="btn btn-light"><i class="fas fa-download"></i> Download</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#654321</span>
                    <span>Withdraw</span>
                    <span>Account 2</span>
                    <span>2024-10-11</span>
                    <span>$500</span>
                    <button class="btn btn-light"><i class="fas fa-download"></i> Download</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#789012</span>
                    <span>Transfer</span>
                    <span>Account 3</span>
                    <span>2024-10-10</span>
                    <span>$200</span>
                    <button class="btn btn-light"><i class="fas fa-download"></i> Download</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#098765</span>
                    <span>Deposit</span>
                    <span>Account 4</span>
                    <span>2024-10-09</span>
                    <span>$750</span>
                    <button class="btn btn-light"><i class="fas fa-download"></i> Download</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#123456</span>
                    <span>Deposit</span>
                    <span>Account 1</span>
                    <span>2024-10-12</span>
                    <span>$1000</span>
                    <button class="btn btn-light"><i class="fas fa-download"></i> Download</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#654321</span>
                    <span>Withdraw</span>
                    <span>Account 2</span>
                    <span>2024-10-11</span>
                    <span>$500</span>
                    <button class="btn btn-light"><i class="fas fa-download"></i> Download</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#789012</span>
                    <span>Transfer</span>
                    <span>Account 3</span>
                    <span>2024-10-10</span>
                    <span>$200</span>
                    <button class="btn btn-light"><i class="fas fa-download"></i> Download</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#098765</span>
                    <span>Deposit</span>
                    <span>Account 4</span>
                    <span>2024-10-09</span>
                    <span>$750</span>
                    <button class="btn btn-light"><i class="fas fa-download"></i> Download</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#123456</span>
                    <span>Deposit</span>
                    <span>Account 1</span>
                    <span>2024-10-12</span>
                    <span>$1000</span>
                    <button class="btn btn-light"><i class="fas fa-download"></i> Download</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#654321</span>
                    <span>Withdraw</span>
                    <span>Account 2</span>
                    <span>2024-10-11</span>
                    <span>$500</span>
                    <button class="btn btn-light"><i class="fas fa-download"></i> Download</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#789012</span>
                    <span>Transfer</span>
                    <span>Account 3</span>
                    <span>2024-10-10</span>
                    <span>$200</span>
                    <button class="btn btn-light"><i class="fas fa-download"></i> Download</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#098765</span>
                    <span>Deposit</span>
                    <span>Account 4</span>
                    <span>2024-10-09</span>
                    <span>$750</span>
                    <button class="btn btn-light"><i class="fas fa-download"></i> Download</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#123456</span>
                    <span>Deposit</span>
                    <span>Account 1</span>
                    <span>2024-10-12</span>
                    <span>$1000</span>
                    <button class="btn btn-light"><i class="fas fa-download"></i> Download</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#654321</span>
                    <span>Withdraw</span>
                    <span>Account 2</span>
                    <span>2024-10-11</span>
                    <span>$500</span>
                    <button class="btn btn-light"><i class="fas fa-download"></i> Download</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#789012</span>
                    <span>Transfer</span>
                    <span>Account 3</span>
                    <span>2024-10-10</span>
                    <span>$200</span>
                    <button class="btn btn-light"><i class="fas fa-download"></i> Download</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#098765</span>
                    <span>Deposit</span>
                    <span>Account 4</span>
                    <span>2024-10-09</span>
                    <span>$750</span>
                    <button class="btn btn-light"><i class="fas fa-download"></i> Download</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#123456</span>
                    <span>Deposit</span>
                    <span>Account 1</span>
                    <span>2024-10-12</span>
                    <span>$1000</span>
                    <button class="btn btn-light"><i class="fas fa-download"></i> Download</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#654321</span>
                    <span>Withdraw</span>
                    <span>Account 2</span>
                    <span>2024-10-11</span>
                    <span>$500</span>
                    <button class="btn btn-light"><i class="fas fa-download"></i> Download</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#789012</span>
                    <span>Transfer</span>
                    <span>Account 3</span>
                    <span>2024-10-10</span>
                    <span>$200</span>
                    <button class="btn btn-light"><i class="fas fa-download"></i> Download</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#098765</span>
                    <span>Deposit</span>
                    <span>Account 4</span>
                    <span>2024-10-09</span>
                    <span>$750</span>
                    <button class="btn btn-light"><i class="fas fa-download"></i> Download</button>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection