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

        img {
            width: 200px;
        }

        @media(min-width: 768px) {
            .vl {
                display: block;
            }
        }
    </style>

    <div class="content">
        <div class="container">
            <div class="card card-body mt-4">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 text-center mb-4 mb-md-0">
                        <div>
                            <h1>Loan</h1>
                            <p>Selamat datang di layanan peminjaman kami! Dengan mengisi formulir di bawah, Anda dapat
                                mengajukan pinjaman sesuai kebutuhan Anda dengan proses yang cepat dan aman. Pastikan untuk
                                mengisi jumlah pinjaman, besaran bunga, serta jangka waktu pinjaman dengan benar untuk
                                mendapatkan perhitungan yang tepat.</p>
                        </div>
                        <img src="{{ asset('images/loan.png') }}" alt="" class="img-fluid" />
                    </div>

                    <div class="col-md-1 d-none d-md-block">
                        <div class="vl"></div>
                    </div>

                    <div class="col-12 col-md-5">
                        <form id="loanForm">
                            <div class="mb-3">
                                <label for="amount" class="form-label">Jumlah Pinjaman</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" class="form-control" id="amount"
                                        placeholder="Masukkan jumlah pinjaman" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="bunga" class="form-label">Besaran bunga %</label>
                                <input type="text" class="form-control" id="bunga" placeholder="Bunga (%)">
                            </div>

                            <div class="mb-3">
                                <label for="lamaPinjam" class="form-label">Jangka Waktu Pinjaman</label>
                                <select class="form-control" id="lamaPinjam" required>
                                    <option value="" disabled selected>Pilih Jangka Waktu Pinjaman</option>
                                    <option value="3">3 Bulan</option>
                                    <option value="6">6 Bulan</option>
                                    <option value="12">12 Bulan</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="pin" class="form-label">PASSWORD</label>
                                <input type="password" class="form-control" id="pin" placeholder="Masukkan PIN"
                                    required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Loan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('loanForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Peminjaman berhasil diajukan!');
            window.location.href = "/home";
        });
    </script>
@endsection
