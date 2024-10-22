<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atma Bank - Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<style>
    html,
    body {
        height: 100%;
        margin: 0;
        font-family: "Roboto", sans-serif;
        background-image: url('{{ asset('images/background1.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .bg-glass {
        background-color: rgba(255, 255, 255, 0.2) !important;
        backdrop-filter: blur(5px) saturate(180%);
        border-radius: 15px;
        padding: 20px;
    }

    label,
    h1,
    p,
    a {
        color: white;
    }

    .form-control {
        background: rgb(255, 255, 255);
        color: rgb(77, 77, 77);
        border: 1px solid rgba(255, 255, 255, 0.4);
    }

    .form-control:focus {
        background: rgba(255, 255, 255, 0.2);
        color: white;
        border-color: #fff;
    }

    ::placeholder {
        color: #fff;
    }

    @media (max-width: 768px) {
        .form-container {
            padding: 20px;
        }
    }

    .btn-register {
        background-color: #FBB117;
        border-color: #FBB117;
        width: 100%;
    }

    .btn-register:hover {
        background-color: #ffa733;
        border-color: #ffa733;
    }

    .text-center {
        color: white;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-transparent" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <i class="bi bi-bank"></i> Atma Bank
            </a>
        </div>
    </nav>

    <div class="container form-container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card bg-glass">
                    <div class="card-body">
                        <h1 class="mb-3 text-center">Register</h1>
                        <form class="form" action="{{ url('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="namaMhs" class="form-label">Nama Lengkap</label>
                                    <input required type="text" class="form-control" id="namaMhs"
                                        placeholder="Masukkan Nama">
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="nimMhs" class="form-label">Email</label>
                                    <input required type="email" class="form-control" id="nimMhs"
                                        placeholder="Masukkan Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="noTelpMhs" class="form-label">Nomor Telepon</label>
                                    <input required type="number" class="form-control" id="noTelpMhs"
                                        placeholder="Masukkan Nomor Telepon">
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="tglLahirMhs" class="form-label">Tanggal Lahir</label>
                                    <input required type="date" class="form-control" id="tglLahirMhs">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="passwordMhs" class="form-label">Password</label>
                                    <input required type="password" class="form-control" id="passwordMhs"
                                        placeholder="Masukkan Password">
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="labelJk" class="form-label">Jenis Kelamin</label>
                                    <div class="mt-2">
                                        <input type="radio" id="laki" name="jk" value="Laki-Laki">
                                        <label for="laki">Laki-Laki</label>
                                        <input type="radio" id="perempuan" name="jk" value="Perempuan"
                                            style="margin-left: 20px;">
                                        <label for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-register btn-primary mt-4">
                                Register
                            </button>
                            <div class="text-center mt-3">
                                <p>Already have account? <a href="{{ url('login') }}">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
