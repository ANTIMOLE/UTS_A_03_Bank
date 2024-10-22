<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atma Bank - Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<style>
    body,
    html {
        height: 100%;
        margin: 0;
        font-family: "Roboto", sans-serif;
        background-image: url('{{ asset('images/background.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .footer {
        background-color: #1f1f1f;
        color: white;
        border-top: 1px solid #444;
        text-align: center;
        padding: 20px;
        width: 100%;
        position: relative;
        bottom: 0;
    }

    .overlay-content {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        color: white;
    }

    h1 {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 20px;
    }

    p {
        font-size: 1.2rem;
        margin-bottom: 20px;
    }

    .btn {
        padding: 10px 20px;
        font-size: 1rem;
    }

    .card-image {
        width: 100%;
        max-width: 500px;
        height: auto;
    }

    .card-image:nth-child(2) {
        position: absolute;
        top: 20px;
        left: 50px;
        z-index: -1;
    }

    @media (max-width: 768px) {
        h1 {
            font-size: 2.5rem;
            margin-top: 60px; 
        }

        .card-image {
            max-width: 300px;
        }

        .card-image:nth-child(2) {
            top: 10px;
            left: 30px;
        }
    }

    footer {
        padding: 1rem;
        color: white;
        text-align: center;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-transparent fixed-top" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="bi bi-bank"></i>
                Atma Bank
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('register') }}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid overlay-content">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-6 col-md-8 col-12 mb-4 mb-lg-0">
                <h1>Your Trusted Partner for Secure and Smart Banking</h1>
                <p>We offer you banking services that have been fully secure for 10 years</p>
                <a href="{{ url('/login') }}" class="btn btn-outline-warning">Get Started</a>
            </div>

            <div class="col-lg-6 col-md-8 col-12 position-relative">
                <div class="cards" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('images/kartu1.png') }}" alt="Card 1" class="card-image">
                    <img src="{{ asset('images/kartu2.png') }}" alt="Card 2" class="card-image">
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2024 ATMA BANK. All rights reserved.</p>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>
