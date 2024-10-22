@extends('Admin_Panel') 

@section('content')
<style>
    .scrollable {
        max-height: 450px; 
        overflow-y: auto;
    }
    .card {
        border-radius: 10px; 
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    .list-group-item {
        transition: background-color 0.3s, transform 0.3s;
    }
    .list-group-item:hover {
        background-color: #f8f9fa;
        transform: translateY(-2px);
    }
    .btn-custom {
        background-color: #007bff;
        color: white;
        transition: background-color 0.3s;
    }
    .btn-custom:hover {
        background-color: #0056b3;
    }
   .btn-export {
        background-color: #28a745; 
        color: white;
    }
    .btn-export:hover {
        background-color: #218838; 
    }
    .nav-tabs .nav-link {
        border-radius: 0;
        margin-right: 10px;
    }
    .nav-tabs .nav-link.active {
        background-color: #007bff; 
        color: white;
    }
    .card {
    transition: none; 
    }
    .card:hover {
        transform: none; 
    }
    
</style>

<div class="content">
    <div class="col-md-12 pt-3">
        <div class="card card-body">
            <div class="d-flex flex-row justify-content-between align-items-start">
                <div>
                    <h4 class="font-weight-bold" style="color:#007bff;">Loans Report</h4>
                </div>
                <button type="button" class="btn btn-export mb-5"><i class="fas fa-download"></i> Export</button>
            </div>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('Admin/loan')}}">Loans Request</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('Admin/active')}}">Loans Active</a>
                </li>
            </ul>

            <ul class="list-group mt-3">
                <li class="list-group-item d-flex justify-content-between align-items-center bg-light font-weight-bold">
                    <span>Id</span>
                    <span>Loan Money</span>
                    <span>Request Date</span>
                    <span>Duration</span>
                    <span>Interest Rate</span>
                    <span>Installment</span>
                    <span class="pr-3">Action</span>
                </li>
            </ul>

            <ul class="list-group mt-0 scrollable">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#098765</span>
                    <span>$750</span>
                    <span>2024-10-09</span>
                    <span>12 months</span>
                    <span>5%</span>
                    <span>$65.50</span>
                    <button class="btn btn-custom"><i class="fas fa-check"></i> Accept</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#098766</span>
                    <span>$1500</span>
                    <span>2024-09-10</span>
                    <span>24 months</span>
                    <span>6%</span>
                    <span>$130.20</span>
                    <button class="btn btn-custom"><i class="fas fa-check"></i> Accept</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#098767</span>
                    <span>$1000</span>
                    <span>2024-08-15</span>
                    <span>18 months</span>
                    <span>4.5%</span>
                    <span>$90.10</span>
                    <button class="btn btn-custom"><i class="fas fa-check"></i> Accept</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#098768</span>
                    <span>$500</span>
                    <span>2024-07-20</span>
                    <span>6 months</span>
                    <span>5.5%</span>
                    <span>$85.00</span>
                    <button class="btn btn-custom"><i class="fas fa-check"></i> Accept</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#098769</span>
                    <span>$2000</span>
                    <span>2024-06-25</span>
                    <span>30 months</span>
                    <span>4%</span>
                    <span>$180.00</span>
                    <button class="btn btn-custom"><i class="fas fa-check"></i> Accept</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#098770</span>
                    <span>$7500</span>
                    <span>2024-05-30</span>
                    <span>36 months</span>
                    <span>7%</span>
                    <span>$680.50</span>
                    <button class="btn btn-custom"><i class="fas fa-check"></i> Accept</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#098771</span>
                    <span>$3000</span>
                    <span>2024-04-15</span>
                    <span>18 months</span>
                    <span>6%</span>
                    <span>$270.30</span>
                    <button class="btn btn-custom"><i class="fas fa-check"></i> Accept</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#098772</span>
                    <span>$4500</span>
                    <span>2024-03-10</span>
                    <span>24 months</span>
                    <span>5.5%</span>
                    <span>$390.00</span>
                    <button class="btn btn-custom"><i class="fas fa-check"></i> Accept</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#098773</span>
                    <span>$6500</span>
                    <span>2024-02-20</span>
                    <span>36 months</span>
                    <span>4.5%</span>
                    <span>$590.50</span>
                    <button class="btn btn-custom"><i class="fas fa-check"></i> Accept</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>#098774</span>
                    <span>$1200</span>
                    <span>2024-01-05</span>
                    <span>12 months</span>
                    <span>6%</span>
                    <span>$110.30</span>
                    <button class="btn btn-custom"><i class="fas fa-check"></i> Accept</button>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection
