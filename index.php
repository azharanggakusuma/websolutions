<?php
    include "conn.php";
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/favicon.ico">
    <title>Tugas PSB</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- Custom Style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Animasi AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg p-2 shadow fixed-top" style="background-color: var(--bs-body-bg);" id="mainNav">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">W E B <span class="dot"></span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link mx-2" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#about-us">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#products">Products</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Price List
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#website-custom">Website Custom</a></li>
                            <li><a class="dropdown-item" href="#web-design">Web Design</a></li>
                            <li><a class="dropdown-item" href="#e-commerce">E-Commerce</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#contact">Contact</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto d-none d-lg-inline-flex">
                    <li class="nav-link">
                        <a class="btn btn-purple btn-sm mt-1 rounded-4 fw-bold shadow-bottom" href="#" role="button"><i class="bi bi-box-arrow-in-right p-1"></i> Login &nbsp;</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="jumbotron" id="home">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6" data-aos="fade-left" data-aos-duration="1500">
                    <img src="assets/img/bg-transparent.png" class="d-block mx-lg-auto img-fluid" alt="Web Developer" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500">
                    <h1 class="display-6 fw-bold text-body-emphasis lh-1 mb-3">Web Solutions</h1>
                    <p class="lead">Customized Website | Web Design | E-Commerce</p>
                    <p class="lead fs-6 text-muted">Kami merupakan sebuah perusahaan yang menyediakan layanan pembuatan situs web sesuai dengan kebutuhan Anda. Fokus kami adalah menciptakan desain antarmuka pengguna yang menarik dan berfungsi dengan baik, dengan tujuan untuk memberikan pengalaman digital yang unik bagi setiap klien kami.</p>
                    <div class="d-grid gap-1 d-md-flex justify-content-md-start" style="margin-left: -7px;">
                        <a href="#about-us" class="btn btn-purple btn-lg px-4 me-md-2 rounded-5 btn-header mt-1 fw-bold shadow">About Us</a>
                        <a href="#products" class="btn btn-outline-purple btn-lg px-4 rounded-5 btn-header mt-1 fw-bold shadow"><i class="bi bi-cart"></i> Order</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">

        <!-- About Us -->
        <section class="row mb-5" id="about-us" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            <div class="p-3 pb-md-4 mx-auto">
                <h1 class="display-6 text-center fw-bold">About Us</h1>
                <div class="col-lg-1 mx-auto">
                    <div class="mb-4">
                        <hr class="divider">
                    </div>
                </div>
                <p class="fs-6 text-secondary" style="text-align: justify;">Selamat datang di Web Solutions! 
                    <br><br>
                    Kami dengan bangga menyambut Anda di perusahaan kami yang berdedikasi untuk memberikan solusi teknologi terbaik bagi Anda. Dengan pengalaman dan keahlian yang mendalam dalam bidang pembuatan website dan layanan terkait, kami siap membantu Anda mewujudkan visi dan tujuan digital Anda.
                    <br><br>
                    Kami percaya bahwa teknologi dapat menjadi kunci kesuksesan bisnis Anda. Tim kami yang terampil dan berpengalaman siap membantu Anda dalam merancang, mengembangkan, dan mengelola website yang sesuai dengan kebutuhan unik perusahaan Anda. Kami juga menyediakan layanan pemeliharaan, optimisasi, dan integrasi fitur khusus untuk memastikan keberhasilan online Anda.
                    <br><br>
                    Komitmen kami adalah memberikan pelayanan terbaik kepada setiap klien. Kami mendengarkan dengan seksama kebutuhan Anda dan bekerja sama dengan Anda dalam setiap tahap proyek. Kami percaya bahwa kolaborasi yang kuat adalah kunci untuk mencapai hasil yang luar biasa.
                    <br><br>
                    Terima kasih atas kepercayaan Anda kepada Rangga Tech Solutions. Kami berkomitmen untuk memberikan solusi teknologi yang inovatif, handal, dan menghasilkan nilai bagi bisnis Anda. Mari bersama-sama menjelajahi potensi digital yang tak terbatas!
                    <br><br>
                    Salam, 
                    <br>
                    [......]
                    <br>
                    Founder & CEO Web Solutions</p>
            </div>
        </section>

        <!-- Products -->
        <section class="row mb-5 mt-5" id="products" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <div class="p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-6 fw-bold">Products</h1>
                <div class="col-lg-1 mx-auto">
                    <div class="mb-4">
                        <hr class="divider">
                    </div>
                </div>
                <p class="fs-6 text-secondary">Berikut adalah daftar produk dan penjelasan singkat mengenai produk kami.</p>
            </div>

            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card shadow">
                <img src="assets/img/product/custom-web.jpg" class="card-img-top" alt="Produk 1">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Website Custom</h5>
                    <p class="card-text">Layanan pembuatan website custom kami dirancang khusus untuk memenuhi kebutuhan unik bisnis Anda.</p>
                    <a href="#website-custom" class="btn btn-purple"><i class="bi bi-cart"></i></a>
                </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card shadow">
                <img src="assets/img/product/desain-web.jpg" class="card-img-top" alt="Produk 2">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Web Design</h5>
                    <p class="card-text">Layanan desain web kami menawarkan tampilan yang menarik dan pengalaman yang intuitif bagi pengguna.</p>
                    <a href="#web-design" class="btn btn-purple"><i class="bi bi-cart"></i></a>
                </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card shadow">
                <img src="assets/img/product/e-commerce.jpg" class="card-img-top" alt="Produk 3">
                <div class="card-body">
                    <h5 class="card-title fw-bold">E-Commerce</h5>
                    <p class="card-text">Layanan website e-commerce kami membantu Anda membangun toko online yang handal dan fungsional.</p>
                    <a href="#e-commerce" class="btn btn-purple"><i class="bi bi-cart"></i></a>
                </div>
                </div>
            </div>
        </section>

        <!-- Price List -->
        <section class="row mb-5 mt-5" id="price-list" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <div class="p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-6 fw-bold">Price List</h1>
                <div class="col-lg-1 mx-auto">
                    <div class="mb-4">
                        <hr class="divider">
                    </div>
                </div>
                <p class="fs-6 text-secondary">Berikut adalah daftar harga dan manfaat yang dapat Anda peroleh dari produk kami.</p>
            </div>
            <div class="col-md-4" id="website-custom">
                <div class="card shadow-bottom rounded-3 mb-3">
                    <div class="card-header rounded-top-3">
                        <h5 class="card-title text-light text-center mt-1 fw-bold">Website Custom</h5>
                    </div>
                    <div class="card-body text-center">
                        <h6 class="card-subtitle mb-2 mt-1 text-muted">Mulai dari</h6>
                        <h1 class="card-title pricing-card-title fw-semibold">Rp 1.500.000</h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Desain UI yang Responsif</li>
                            <li>Konsultasi dan Analisis Kebutuhan</li>
                            <li>Gratis Domain dan Hosting 1 Tahun</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-purple rounded-5 shadow-bottom fw-semibold"><i class="bi bi-cart"></i> Buy</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4" id="web-design">
                <div class="card shadow-bottom rounded-3 mb-3">
                    <div class="card-header rounded-top-3">
                        <h5 class="card-title text-light text-center mt-1 fw-bold">UI/UX Design</h5>
                    </div>
                    <div class="card-body text-center">
                        <h6 class="card-subtitle mb-2 mt-1 text-muted">Mulai dari</h6>
                        <h1 class="card-title pricing-card-title fw-semibold">Rp 1.000.000</h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Penelitian dan Analisis Pengguna</li>
                            <li>Wireframing dan Prototyping</li>
                            <li>Desain UI dan Responsif</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-purple rounded-5 shadow-bottom fw-semibold"><i class="bi bi-cart"></i> Buy</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4" id="e-commerce">
                <div class="card shadow-bottom rounded-3 mb-3">
                    <div class="card-header rounded-top-3">
                        <h5 class="card-title text-light text-center mt-1 fw-bold">E-Commerce</h5>
                    </div>
                    <div class="card-body text-center">
                        <h6 class="card-subtitle mb-2 mt-1 text-muted">Mulai dari</h6>
                        <h1 class="card-title pricing-card-title fw-semibold">Rp 1.500.000</h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Desain UI yang Responsif</li>
                            <li>Konsultasi dan Analisis Kebutuhan</li>
                            <li>Gratis Domain dan Hosting 1 Tahun</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-purple rounded-5 shadow-bottom fw-semibold"><i class="bi bi-cart"></i> Buy</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Biodata Team -->
        <section data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            <div class="p-3 pb-md-4 mx-auto text-center mt-5" id="biodata">
                <h1 class="display-6 fw-bold">Teams Us</h1>
                <div class="col-lg-1 mx-auto">
                    <div class="mb-4">
                        <hr class="divider">
                    </div>
                </div>
                <p class="fs-6 text-secondary">Berikut adalah informasi tentang profile Tim kami.</p>
            </div>

            <div class="team-section" style="background-color: var(--bs-body-bg);" \>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div id="card1">
                                <img class="team-image" src="assets/img/team/rangga.png" alt="Azharangga Kusuma" style="width:4cm; height:4cm;">
                                <h2 class="fw-semibold">Azharangga Kusuma</h2>
                                <p class="lead">Full Stack Developer & UI/UX Designer </p>
                                <p>Merupakan seorang mahasiswa program studi Teknik Informatika di STMIK IKMI Cirebon.</p>
                            </div>

                            <div id="card2" style="display: none;">
                                <img class="team-image" src="assets/img/team/gita.png" alt="Gita Antar Wulan" style="width:4cm; height:4cm;">
                                <h2 class="fw-semibold">Gita Antar Wulan</h2>
                                <p class="lead">Designer & Front End Developer</p>
                                <p>Merupakan seorang mahasiswa program studi Teknik Informatika di STMIK IKMI Cirebon.</p>
                            </div>

                            <div id="card3" style="display: none;">
                                <img class="team-image" src="assets/img/team/hifni.jpg" alt="Hifni Khakim" style="width:4cm; height:4cm;">
                                <h2 class="fw-semibold">Hifni Khakim</h2>
                                <p class="lead">Web Developer</p>
                                <p>Merupakan seorang mahasiswa program studi Teknik Informatika di STMIK IKMI Cirebon.</p>
                            </div>
                            
                            <div id="card4" style="display: none;">
                                <img class="team-image" src="assets/img/team/rika.png" alt="Rika Qodriah" style="width:4cm; height:4cm;">
                                <h2 class="fw-semibold">Rika Qodriah</h2>
                                <p class="lead">Front End Developer</p>
                                <p>Merupakan seorang mahasiswa program studi Teknik Informatika di STMIK IKMI Cirebon.</p>
                            </div>

                            <div id="card5" style="display: none;">
                                <img class="team-image" src="assets/img/team/1.png" alt="Aji Susanto" style="width:4cm; height:4cm;">
                                <h2 class="fw-semibold">Aji Susanto</h2>
                                <p class="lead">Back End Developer</p>
                                <p>Merupakan seorang mahasiswa program studi Teknik Informatika di STMIK IKMI Cirebon.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Form Contact -->
        <section class="row mb-5 mt-5" id="contact" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            <div class="p-3 pb-md-4 mx-auto text-center mb-5">
                <h1 class="display-6 fw-bold">Contact Us</h1>
                <div class="col-lg-1 mx-auto">
                    <div class="mb-4">
                        <hr class="divider">
                    </div>
                </div>
                <p class="fs-6 text-secondary">Jika memiliki pertanyaan terkait produk jangan ragu untuk menghubungi kami melalui form dibawah ini.</p>
            </div>
            
            <div class="col-md-6 offset-md-3">
                <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
                    <strong>Terimakasih!</strong> Pesan anda sudah kami terima.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <form action="contact.php" method="POST" id="myForm">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="pesan" name="pesan" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-purple fw-bold" id="submitBtn">Kirim</button>
                </form>
            </div>

            <div class="p-3 pb-md-4 mx-auto text-center mt-5">
                <h1 class="display-6 fw-bold">Address</h1>
                <div class="col-lg-1 mx-auto">
                    <div class="mb-4">
                        <hr class="divider">
                    </div>
                </div>
                <p class="fs-6 text-secondary">Berikut ini adalah alamat kami.</p>
            </div>

            <div class="ratio ratio-16x9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.2732236158704!2d108.52448157372815!3d-6.7364857658651704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1dfcef42566d%3A0x3e146375f0046403!2sSchool%20of%20Information%20Management%20and%20Computer%20IKMI!5e0!3m2!1sen!2sid!4v1688885849940!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <ul class="navbar-nav ms-auto d-none d-lg-inline-flex position-fixed bottom-0 end-0 mb-3 me-3">
            <li class="nav-link dropdown">
                <button class="btn btn-purple dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-sun-fill theme-icon-active" data-theme-icon-active="bi-sun-fill"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <button class="dropdown-item d-flex align-items-center" type="button" data-bs-theme-value="light">
                            <i class="bi bi-sun-fill me-2 opacity-50" data-theme-icon="bi-sun-fill"></i>
                                Light
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item d-flex align-items-center" type="button" data-bs-theme-value="dark">
                            <i class="bi bi-moon-fill me-2 opacity-50" data-theme-icon="bi-moon-fill"></i>
                                Dark
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item d-flex align-items-center" type="button" data-bs-theme-value="auto">
                            <i class="bi bi-circle-half me-2 opacity-50" data-theme-icon="bi-circle-half"></i>
                                Auto
                        </button>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <footer class="footer bg-dark">
        <div class="container">
            <div class="row" style="height: 5rem;">
            <hr>
            <p class="text-center text-light">© 2023 R-Tech Solutions All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.getElementById('myForm').addEventListener('submit', function (e) {
            e.preventDefault(); // Mencegah form dikirim secara default

            var submitBtn = document.getElementById('submitBtn');
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Mengirim...';
            submitBtn.disabled = true;

            setTimeout(function () {
            submitBtn.innerHTML = 'Kirim';
            submitBtn.disabled = false;
            document.getElementById('myForm').reset();
            showAlert();
            }, 5000);

            // Menggunakan fetch API untuk mengirim data ke server
            fetch('contact.php', {
                method: 'POST',
                body: new FormData(this)
            })
            .then(response => response.text())
            .then(data => {
                submitBtn.innerHTML = 'Kirim';
                submitBtn.disabled = false;
                document.getElementById('myForm').reset();
                showAlert(data);
            })
            .catch(error => {
                console.error('Terjadi kesalahan:', error);
                submitBtn.innerHTML = 'Kirim';
                submitBtn.disabled = false;
            });
        });

        // Fungsi untuk menampilkan alert
        function showAlert(message) {
            var alert = document.querySelector('.my-alert');
            alert.classList.remove('d-none');
            alert.classList.add('show');
            alert.innerHTML = message;

            // Menghilangkan alert setelah 5 detik
            setTimeout(function () {
                alert.classList.remove('show');
                alert.classList.add('d-none');
            }, 5000); // Waktu penundaan sebelum menghilangkan alert (dalam milidetik)
        }
    </script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>
    <!-- Animasi AOS-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- Navbar Bootstrap -->
    <script src="assets/js/navbar.js"></script>
    <!-- Color Mode Bootstrap -->
    <script src="assets/js/color_mode.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>