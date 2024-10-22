<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atma Bank - Login</title>
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
        background-image: url("{{ asset('images/background1.png') }}");
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

    .btn-login {
        background-color: #FBB117;
        border-color: #FBB117;
        width: 100%;
    }

    .btn-login:hover {
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
                        <h1 class="mb-3 text-center">Login</h1>
                        <form class="form" action="" onsubmit="submitForm(event)">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input required type="text" class="form-control" id="email"
                                        placeholder="Masukkan Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input required type="password" class="form-control" id="pass"
                                        placeholder="Masukkan Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-login btn-primary mt-4">
                                Login
                            </button>
                            <div class="text-center mt-3">
                                <p>Don't have an account? <a href="{{ url('register') }}">Register</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const email = "admin";
        const pass = "admin";

        const submitForm = (event) => {
            event.preventDefault();
            const emailInput = document.getElementById("email").value.trim();
            const passInput = document.getElementById("pass").value.trim();

            if (email === emailInput && pass === passInput) {
                window.location.href = "{{ url('Admin/dashboard') }}"
            } else {
                window.location.href = "{{ url('home') }}"
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
