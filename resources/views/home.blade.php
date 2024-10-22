<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATMA BANK HOME</title>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        body {
            background-color: #121212;
            color: #e0e0e0;
            font-family: 'Roboto', sans-serif;
        }

        .navbar {
            background-color: #1f1f1f;
            border-bottom: 1px solid #444;
        }

        .navbar .nav-link,
        .navbar-brand {
            color: #ffffff !important;
        }

        .navbar .nav-link:hover {
            color: #ff5722 !important;
        }

        .navbar.scrolled {
            background-color: rgba(0, 0, 0, 0.9) !important;
        }

        .carousel-caption {
            color: #ffffff;
        }

        .carousel-title {
            font-size: 3rem;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.9);
            margin-bottom: 20px;
        }

        .carousel-text {
            font-size: 1.2rem;
            line-height: 1.6;
            margin-bottom: 30px;
            max-width: 1500px;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.9);
        }

        .carousel-item img {
            width: 100%;
            height: auto;
            object-fit: cover;
            filter: brightness(50%);
        }

        .carousel-inner {
            height: 100vh;
        }

        .carousel-inner img {
            width: 100%;
            height: 100vh;
            object-fit: cover;
        }

        .service-card,
        .testimonial-card {
            background-color: #1e1e1e;
            color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 250px;
            padding: 20px;
            border-radius: 10px;
        }

        .service-card:hover,
        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .service-card i {
            font-size: 50px;
            color: #ff5722;
            margin-bottom: 15px;
        }

        .service-card p {
            margin-bottom: 0;
        }

        .footer {
            background-color: #1f1f1f;
            color: white;
            border-top: 1px solid #444;
            text-align: center;
            padding: 20px;
        }

        .btn-primary {
            background-color: #ff5722;
            border-color: #ff5722;
        }

        .btn-primary:hover {
            background-color: #ff784e;
            border-color: #ff784e;
        }

        .btn-secondary {
            background-color: #ff5722;
            border-color: #ff5722;
            color: #ffffff;
        }

        .btn-secondary:hover {
            background-color: #555;
            border-color: #555;
        }

        .contact-form input,
        .contact-form textarea {
            background-color: transparent;
            border: 1px solid #fff;
            color: white;
            padding: 10px;
            width: 100%;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: #ff5722;
            box-shadow: 0 0 0 0.2rem rgba(255, 87, 34, 0.25);
        }

        .featurette-divider {
            border-top: 1px solid #ffffff;
        }
    </style>
</head>

<body>

    <header data-bs-theme="dark">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><i class="bi bi-bank"></i>
                    ATMA BANK</a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">
                                <i class="bi bi-person"></i> Nama Pengguna
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-wallet"></i> Saldo: Rp 1.000.000
                            </a>
                        </li>
                    </ul>
                    <div class="nav-item">
                        <a class="nav-link" href="{{url('profil')}}" style="text-decoration: none">
                            <i class="bi bi-person"></i>
                            Profil
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.addEventListener('scroll', function() {
            let navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
    </header>

    <!-- CAROUSEL -->
    <main>
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                    class="active" aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                    class=""></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="{{ asset('images/depositHome.jpg') }}" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1 class="carousel-title">Deposit</h1>
                            <p class="carousel-text">Menyediakan layanan untuk mengelola dana simpanan atau setoran
                                secara aman dan terorganisir. Pengguna dapat melakukan pencatatan setoran baru, memantau
                                status deposit, dan melihat riwayat transaksi dengan transparansi penuh. Fitur ini
                                dirancang untuk memudahkan pengelolaan keuangan dengan sistematis, memastikan setiap
                                setoran tercatat dengan baik dan dapat diakses kapan saja.</p>
                            <p><a class="btn btn-lg btn-primary" href="#1">Mulai Sekarang</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img src="{{ asset('images/transaksii.jpg') }}" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="carousel-title">Peminjaman</h1>
                            <p class="carousel-text">Memungkinkan pengguna untuk melakukan pinjaman
                                keuangan dengan cepat dan aman. Setiap transaksi dilengkapi dengan notifikasi real-time,
                                sistem verifikasi
                                berlapis, dan riwayat yang transparan untuk memastikan keamanan dan kemudahan akses.
                                Fitur ini dirancang untuk memberikan kontrol penuh kepada pengguna atas aktivitas
                                keuangan mereka, dengan dukungan penuh dari layanan customer support yang responsif.</p>
                            <p><a class="btn btn-lg btn-primary" href="#2">Mulai Sekarang</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/wd.jpg') }}" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1 class="carousel-title">Withdraw</h1>
                            <p class="carousel-text">Menyediakan layanan penarikan dana secara mudah dan aman dari akun
                                pengguna. Pengguna dapat melakukan penarikan langsung ke rekening bank, dompet digital,
                                atau metode lain yang tersedia. Proses penarikan dilengkapi dengan verifikasi berlapis
                                untuk memastikan keamanan, serta notifikasi real-time untuk setiap transaksi yang
                                berhasil. Dengan antarmuka yang sederhana dan intuitif, section ini dirancang untuk
                                memberikan kenyamanan dan kendali penuh bagi pengguna dalam mengelola dana mereka kapan
                                saja dan di mana saja.</p>
                            <p><a class="btn btn-lg btn-primary" href="#3">Mulai Sekarang</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>




        <!-- CAROUSEL SECTION -->
        <div id="myCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
            <!-- Carousel items go here -->
        </div>

        <!-- TIGA KOLOM DIBAWAH SLIDE -->
        <div class="container marketing mb-5">
            <div class="row text-center">
                <div class="col-lg-4">
                    <img src="{{ asset('images/anton.png') }}" alt="Image 1"
                        class="bd-placeholder-img rounded-circle" width="140" height="140">
                    <h2><strong>Antony Santos - CEO</strong></h2>
                    <p>CEO bertanggung jawab atas arah strategis dan pertumbuhan bank. Ia memastikan inovasi, kepuasan
                        pelanggan, dan pengelolaan bisnis yang efisien dalam mencapai tujuan perusahaan.</p>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('images/HRD.jpeg') }}" alt="Image 2"
                        class="bd-placeholder-img rounded-circle" width="140" height="140">
                    <h2><strong>Setio - Founder</strong></h2>
                    <p>Penggagas bank yang menetapkan visi dan misi perusahaan. Ia bertanggung jawab untuk membangun
                        budaya kerja dan strategi jangka panjang, serta menjalin hubungan penting untuk pertumbuhan
                        bank.</p>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('images/windah.jpg') }}" alt="Image 3"
                        class="bd-placeholder-img rounded-circle" width="140" height="140">
                    <h2><strong>Windah - IT & Security</strong></h2>
                    <p>Menyediakan dan memelihara infrastruktur teknologi bank, memastikan sistem berjalan dengan lancar
                        dan aman dari ancaman cyber, serta mendukung layanan digital bank.</p>
                </div>
            </div>

            <!-- TIGA FOTO KOTAK -->
            <hr class="featurette-divider">
            <section id="1">

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading">Deposit Terpercaya</h2>
                        <p class="lead"> Kami menawarkan berbagai jenis rekening deposit, mulai dari rekening
                            tabungan hingga deposito berjangka, dengan suku bunga yang kompetitif. Nasabah dapat memilih
                            opsi yang paling sesuai dengan kebutuhan dan tujuan keuangan mereka. Selain itu, semua
                            transaksi deposit dilengkapi dengan notifikasi real-time untuk memastikan transparansi dan
                            keamanan setiap setoran yang dilakukan.</p>
                        <p><a class="btn btn-secondary" href="{{ url('/Transaction/deposit') }}">Deposit Sekarang</a>
                        </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img src="{{ asset('images/depo.jpg') }}" alt="Feature Image 1"
                            class="featurette-image img-fluid mx-auto" width="500" height="500">
                    </div>
                </div>

                <hr class="featurette-divider">
                <section id="2">

                    <div class="row featurette">
                        <div class="col-md-7">
                            <h2 class="featurette-heading">Peminjaman Aman
                            </h2>
                            <p class="lead">Keamanan adalah prioritas utama kami. Setiap transaksi dilengkapi dengan
                                sistem verifikasi yang kuat untuk melindungi informasi dan dana nasabah. Selain itu,
                                kami menyediakan notifikasi instan untuk setiap transaksi yang berhasil, sehingga
                                nasabah selalu mendapatkan pembaruan terkini mengenai aktivitas rekening mereka.</p>
                            <p><a class="btn btn-secondary" href="{{ url('/Transaction/loan') }}">Pinjam Sekarang</a>
                            </p>
                        </div>
                        <div class="col-md-5 order-md-1">
                            <img src="{{ asset('images/trans.jpg') }}" alt="Feature Image 1"
                                class="featurette-image img-fluid mx-auto" width="500" height="500">
                        </div>
                    </div>

                    <hr class="featurette-divider">
                    <section id="3">
                        <div class="row featurette">
                            <div class="col-md-7 order-md-2">
                                <h2 class="featurette-heading">Withdraw Cepat</h2>
                                <p class="lead">Kami memahami pentingnya akses cepat ke dana Anda. Oleh karena itu,
                                    kami menawarkan layanan penarikan yang dapat dilakukan kapan saja dan di mana saja,
                                    menjadikan pengelolaan keuangan lebih fleksibel. Riwayat penarikan juga dapat
                                    diakses dengan mudah, memungkinkan pengguna untuk melacak semua aktivitas penarikan
                                    mereka.</p>
                                <p><a class="btn btn-secondary" href="{{url('Transaction/withdraw')}}">Withdraw Sekarang</a></p>
                            </div>
                            <div class="col-md-5 order-md-1">
                                <img src="{{ asset('images/witdraw.jpg') }}" alt="Feature Image 1"
                                    class="featurette-image img-fluid mx-auto" width="500" height="500">
                            </div>
                        </div>

                        <hr class="featurette-divider">
        </div>

        <!-- SERVIS SECTION -->
        <section class="services-section">
            <div class="container">
                <h2 class="mb-5">Layanan Kami</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card p-4">
                            <i class="fas fa-briefcase mb-4"></i>
                            <h4>Perencanaan Keuangan</h4>
                            <p>Kami menyediakan perencanaan keuangan profesional untuk memenuhi kebutuhan bisnis Anda.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card p-4">
                            <i class="fas fa-chart-line mb-4"></i>
                            <h4>Analisis Investasi</h4>
                            <p>Analisis investasi Anda dan buat keputusan yang tepat untuk masa depan keuangan Anda.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card p-4">
                            <i class="fas fa-lock mb-4"></i>
                            <h4>Transaksi Aman</h4>
                            <p>Pastikan semua transaksi keuangan Anda aman dengan sistem canggih kami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- TESTIMONI SECTION -->
        <section class="testimonials-section">
            <div class="container">
                <h2 class="mb-5">Apa Kata Klien?</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="testimonial-card p-4">
                            <p>"ATMA BANK membantu kami merampingkan operasi keuangan dan mencapai tujuan bisnis kami!"
                            </p>
                            <p><strong>- John Doe, HRD</strong></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="testimonial-card p-4">
                            <p>"Kami mempercayakan ATMA BANK dengan semua kebutuhan keuangan kami. Mereka memang yang
                                terbaik!"</p>
                            <p><strong>- Jane Smith, Entrepreneur</strong></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="testimonial-card p-4">
                            <p>“Layanan perencanaan keuangan mereka membantu kami membuat pilihan investasi yang tepat.”
                            </p>
                            <p><strong>- Mike Johnson, Investor</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT SECTION -->
        <section class="contact-section">
            <div class="container">
                <h2 class="mb-5">Kontak Kami</h2>
                <div class="row">
                    <div class="col-lg-6 mb-4 text-start">
                        <h4>Informasi Kontak</h4>
                        <p><i class="fas fa-phone-alt"></i> +123 123 123</p>
                        <p><i class="fas fa-envelope"></i> atmabank@gmail.com</p>
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Babarsari No. 5-6, Caturtunggal, Kec. Depok,
                            Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <h4>Kirim Kami Pesan</h4>
                        <form class="contact-form">
                            <input type="text" placeholder="Your Name" required>
                            <input type="email" placeholder="Your Email" required>
                            <textarea rows="4" placeholder="Your Message" required></textarea>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="footer">
            <p>&copy; 2024 ATMA BANK. All rights reserved.</p>
        </footer>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
