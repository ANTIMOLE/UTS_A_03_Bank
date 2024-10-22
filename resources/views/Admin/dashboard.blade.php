@extends('Admin_Panel') 

<!-- ini kek pake template dashboard lalu tampilin kode di bawah di bagian contentnya yield -->

@section('content')
<style>
    .icon-circle {
    
        color: white; 
        border-radius: 50%; 
        padding: 8px;
        width: 40px; 
        height: 40px; 
        display: inline-flex; 
        align-items: center;
        justify-content: center;
        font-size: 24px; 
    }
    .card {
        
    transition: none; /* Mencegah efek transisi */
    }
    .card:hover {
        transform: none; /* Mencegah zoom saat di-hover */
    }
    .content {
    /* background-image: url("/image/Frame 31.png");  */
    background-size: cover; 
    background-position: center; 
    }

    
    
</style>
<div class="content">
    <div class="d-flex flex-col justify-content-evenly flex-wrap ">
        <div class="col-md-7 pt-3 pl-100">
            <div class="card card-body">
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <div>
                    <h6>Summary Data Total</h6>
                    <p class="font-extralight">Summary</p>
                    </div>
                    <button type="button" class="btn btn-light mb-5"><i class="fas fa-download"></i> Export</button>
                </div>

                <div class="container">
                <div class="row justify-content-between">
                    <div class="col-6 col-md-3 mb-3">
                        <div class="card" style="background-color: rgba(13, 110, 253, 0.5);">
                            <div class="card-header"><i class="fas fa-user icon-circle" style="background-color: rgba(13, 110, 253);"></i></div>
                            <div class="card-body">
                                <h5 class="card-title" style="font-weight: bold; font-size: 3vw;">100</h5>
                                <p class="card-text" style=" font-size: 1vw;">Total User</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3">
                        <div class="card" style="background-color: rgba(220, 53, 69, 0.5);">
                            <div class="card-header"><i class="fas fa-wallet icon-circle" style="background-color: rgba(220, 53, 69);"></i></div>
                            <div class="card-body">
                                <h5 class="card-title" style="font-weight: bold; font-size: 3vw;">250</h5>
                                <p class="card-text" style=" font-size: 1vw;">Total Akun</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3">
                        <div class="card" style="background-color: rgba(255, 193, 7, 0.5);">
                            <div class="card-header"><i class="fas fa-solid fa-money-bill-transfer icon-circle" style="background-color: rgba(255, 193, 7);"></i></div>
                            <div class="card-body">
                                <h5 class="card-title" style="font-weight: bold; font-size: 3vw;">560</h5>
                                <p class="card-text" style=" font-size: 1vw;">Total Transaksi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3">
                        <div class="card" style="background-color: rgba(40, 167, 69, 0.5);">
                            <div class="card-header"><i class="fas fa-solid fa-user-gear icon-circle" style="background-color: rgba(40, 167, 69);"></i></div>
                            <div class="card-body">
                                <h5 class="card-title" style="font-weight: bold; font-size: 3vw;">5</h5>
                                <p class="card-text" style=" font-size: 1vw;">Total Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            </div>
        </div>
        <div class="col-md-4 pt-3 pl-100">
            <div class="card card-body">
                <canvas id="myChart"></canvas>
            </div>

        </div>

        <div class="col-md-7 pt-3 pl-100">
            <div class="card card-body">
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <div>
                    <h6>Summary Data Today</h6>
                    <p class="font-extralight">Summary</p>
                    </div>
                    <button type="button" class="btn btn-light mb-5"><i class="fas fa-download"></i> Export</button>
                </div>

                <div class="container">
                <div class="row justify-content-between">
                    <div class="col-6 col-md-3 mb-3">
                        <div class="card" style="background-color: rgba(13, 110, 253, 0.5);">
                            <div class="card-header"><i class="fas fa-user icon-circle" style="background-color: rgba(13, 110, 253);"></i></div>
                            <div class="card-body">
                                <h5 class="card-title" style="font-weight: bold; font-size: 3vw;">100</h5>
                                <p class="card-text" style=" font-size: 1vw;">Total User</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3">
                        <div class="card" style="background-color: rgba(220, 53, 69, 0.5);">
                            <div class="card-header"><i class="fas fa-wallet icon-circle" style="background-color: rgba(220, 53, 69);"></i></div>
                            <div class="card-body">
                                <h5 class="card-title" style="font-weight: bold; font-size: 3vw;">250</h5>
                                <p class="card-text" style=" font-size: 1vw;">Total Akun</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3">
                        <div class="card" style="background-color: rgba(255, 193, 7, 0.5);">
                            <div class="card-header"><i class="fas fa-solid fa-money-bill-transfer icon-circle" style="background-color: rgba(255, 193, 7);"></i></div>
                            <div class="card-body">
                                <h5 class="card-title" style="font-weight: bold; font-size: 3vw;">560</h5>
                                <p class="card-text" style=" font-size: 1vw;">Total Transaksi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3">
                        <div class="card" style="background-color: rgba(40, 167, 69, 0.5);">
                            <div class="card-header"><i class="fas fa-solid fa-user-gear icon-circle" style="background-color: rgba(40, 167, 69);"></i></div>
                            <div class="card-body">
                                <h5 class="card-title" style="font-weight: bold; font-size: 3vw;">5</h5>
                                <p class="card-text" style=" font-size: 1vw;">Total Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            </div>
        </div>

        <div class="col-md-4 pt-3 pl-100">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Pending Requests/Actions</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Bar Percentage</th>
                        <th>% Percentage</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Kepuasan</td>
                        <td>
                            <div class="progress" style="height: 1.5rem;">
                                <div class="progress-bar" role="progressbar" style="width: 45%; background-color: lightblue;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>45%</td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Peminjaman Diterima'</td>
                        <td>
                            <div class="progress" style="height: 1.5rem;">
                                <div class="progress-bar" role="progressbar" style="width: 29%; background-color: lightgreen;" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>29%</td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Peminjaman</td>
                        <td>
                            <div class="progress" style="height: 1.5rem;">
                                <div class="progress-bar" role="progressbar" style="width: 18%; background-color: purple;" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>18%</td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>Transaksi</td>
                        <td>
                            <div class="progress" style="height: 1.5rem;">
                                <div class="progress-bar" role="progressbar" style="width: 25%; background-color: orange;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>25%</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>

    </div>
    <hr class="solid">

    <div class="col-md-12 pt-3">
        <div class="card card-body">
            <div  class="d-flex flex-row justify-content-between align-items-start">
                    <div>
                        <h4 class="font-weight-bold">To Do List</h4>
                    </div>
                    <button type="button" class="btn btn-primary mb-5"><i class="fas fa-tasks"></i> Add Task</button>

            </div>
            <ul class="list-group mt-5">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="task1">
                        <label class="form-check-label" for="task1">Meeting with CEO</label>
                    </div>
                    <button class="btn btn-link text-danger"><i class="fas fa-trash"></i></button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="task1">
                        <label class="form-check-label" for="task1">Task 1</label>
                    </div>
                    <button class="btn btn-link text-danger"><i class="fas fa-trash"></i></button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="task1">
                        <label class="form-check-label" for="task1">Task 2</label>
                    </div>
                    <button class="btn btn-link text-danger"><i class="fas fa-trash"></i></button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="task1">
                        <label class="form-check-label" for="task1">Task 3</label>
                    </div>
                    <button class="btn btn-link text-danger"><i class="fas fa-trash"></i></button>
                </li>

            </ul>
        </div>
    </div>
</div>
    


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Get the canvas element and its 2D context
    const ctx = document.getElementById('myChart');

    // Define chart data and config
    const data = {
        labels: ['Red', 'Green', 'Yellow', 'Grey', 'Blue'],
        datasets: [{
            label: 'My First Dataset',
            data: [11, 16, 7, 3, 14],
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(75, 192, 192)',
                'rgb(255, 205, 86)',
                'rgb(201, 203, 207)',
                'rgb(54, 162, 235)'
            ]
        }]
    };

    const config = {
        type: 'polarArea', // Chart type
        data: data,
        options: {
            responsive: true, 
            maintainAspectRatio: false, 
        
        }
    };

    // Create the chart instance
    const myChart = new Chart(ctx, config);
</script>
</div>
@endsection