@extends('basic_navbar')

@section('content')
    <style>
        .content {
            background-image: url("{{ asset('images/background1.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #fff;
            padding: 40px;
            min-height: calc(100vh - 56px);
            background-attachment: fixed;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.5);
            margin-bottom: 30px;
            background: rgba(34, 34, 34, 0.9);
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
        }

        .icon-circle {
            border-radius: 50%;
            padding: 10px;
            color: white;
        }

        .form-label {
            font-weight: bold;
            color: #ffffff;
        }

        .btn-primary {
            background-color: #FBB117;
            border: 2px solid #FBB117;
            color: #ffffff;
            border: none;
            transition: background-color 0.3s;
            font-weight: bold;
            padding: 12px;
        }

        .btn-primary:hover {
            color: white;
            background-color: transparent;
            border: 2px solid #FBB117;
        }

        .input-group-text {
            background-color: #343a40;
            color: #ffffff;
            border: none;
        }

        .form-control {
            border: none;
            background: #495057;
            color: #fff;
            transition: background-color 0.3s;
        }

        .form-control:focus {
            background: #6c757d;
            box-shadow: 0 0 5px rgba(255, 193, 7, 0.5);
        }

        .vl {
            border-left: 6px solid white;
            height: 50vh;
            display: none;
        }

        @media(min-width: 768px) {
            .vl {
                display: block;
            }
        }

        img {
            width: 200px;
            height: auto;
        }
    </style>

    <div class="content">
        <div class="container">
            <div class="card card-body mt-4">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 text-center mb-4 mb-md-0">
                        <div>
                            <h1>Withdraw</h1>
                            <p>Selamat datang di halaman penarikan dana kami! Isi form di bawah ini untuk menarik dana dari
                                akun Anda dengan cepat dan aman. Pastikan Anda memasukkan jumlah yang tepat dan PIN untuk
                                melanjutkan.</p>
                        </div>
                        <img src="{{ asset('images/deposit.png') }}" alt="" class="img-fluid" />
                    </div>

                    <div class="col-md-1 d-none d-md-block">
                        <div class="vl"></div>
                    </div>

                    <div class="col-12 col-md-5">
                        <form id="withdrawForm">
                            <div class="mb-3">
                                <label for="amount" class="form-label">Jumlah Withdraw</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" class="form-control" id="amount"
                                        placeholder="Masukkan jumlah penarikan uang" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="pin" class="form-label">PASSWORD</label>
                                <input type="password" class="form-control" id="pin" placeholder="Masukkan PIN"
                                    required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Withdraw</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('withdrawForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Withdraw berhasil dilakukan!');
            window.location.href = "/home";
        });
    </script>
@endsection
