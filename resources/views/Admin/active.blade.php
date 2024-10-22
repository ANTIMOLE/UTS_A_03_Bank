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
    .btn-danger {
        background-color: #dc3545; 
        color: white; 
        transition: background-color 0.3s;
    }
    .btn-danger:hover {
        background-color: #c82333; 
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
                    <a class="nav-link" href="{{url('Admin/loan')}}">Loans Request</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('Admin/active')}}">Loans Active</a>
                </li>        
            </ul>

            <ul class="list-group mt-3">
                <li class="list-group-item d-flex justify-content-between align-items-center bg-light font-weight-bold">
                    <span>Id</span>
                    <span>Loan Money</span>
                    <span>Accept Date</span>
                    <span>Duration</span>
                    <span>Interest Rate</span>
                    <span>Installment</span>
                    <span class="pr-3">Action</span>
                </li>
            </ul>

            <ul class="list-group mt-0 scrollable">
                @foreach ([
                    ['#098765', '$750', '2024-10-09', '12 months', '5%', '$65.50'],
                    ['#098766', '$1500', '2024-09-10', '24 months', '6%', '$130.20'],
                    ['#098767', '$1000', '2024-08-15', '18 months', '4.5%', '$90.10'],
                    ['#098768', '$500', '2024-07-20', '6 months', '5.5%', '$85.00'],
                    ['#098769', '$2000', '2024-06-25', '30 months', '4%', '$180.00'],
                    ['#098770', '$7500', '2024-05-30', '36 months', '7%', '$680.50'],
                    ['#098771', '$3000', '2024-04-15', '18 months', '6%', '$270.30'],
                    ['#098772', '$4500', '2024-03-10', '24 months', '5.5%', '$390.00'],
                    ['#098773', '$6500', '2024-02-20', '36 months', '4.5%', '$590.50'],
                    ['#098774', '$1200', '2024-01-05', '12 months', '6%', '$110.30'],
                ] as $loan)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>{{ $loan[0] }}</span>
                    <span>{{ $loan[1] }}</span>
                    <span>{{ $loan[2] }}</span>
                    <span>{{ $loan[3] }}</span>
                    <span>{{ $loan[4] }}</span>
                    <span>{{ $loan[5] }}</span>
                    <button class="btn btn-danger"><i class="fas fa-times"></i> Closed</button>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection
