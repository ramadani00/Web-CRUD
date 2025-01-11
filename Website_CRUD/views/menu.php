<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>
        /* Hover effect for team member image */
        .member-img {
            position: relative;
            overflow: hidden;
            border-radius: 10px; /* Optional: memberi efek sudut melengkung */
        }

        .member-img img {
            width: 100%; /* Memastikan gambar memenuhi lebar container */
            height: auto; /* Menjaga rasio aspek gambar */
            object-fit: cover; /* Menyesuaikan gambar agar pas di container */
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .member-img:hover img {
            transform: scale(1.1); /* Memberikan efek zoom saat hover */
            opacity: 0.8;
        }

        /* Hover effect for the social icons */
        .social a {
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .member-img:hover .social a {
            opacity: 1;
        }

        /* Styling untuk info anggota */
        .member-info {
            text-align: center; /* Memberikan keselarasan teks */
            margin-top: 15px;
        }

        .member-info h4 {
            font-weight: bold;
            font-size: 1.2rem;
        }

        .member-info span {
            color: #6c757d; /* Warna teks lebih ringan */
            font-style: italic;
        }

        .member-info p {
            font-size: 0.9rem;
            color: #343a40;
        }
    </style>
    <title>Nusantara Heritage Restaurant</title>
</head>
<body>
    <section id="chefs" class="chefs section py-5">
        <div class="container text-center" data-aos="fade-up">
            <h1 class="mb-3">MENU</h1>
            <p class="mb-4"><span>Our</span> <span class="description-title">Special Menu</span></p>
        </div>
        <div class="container">
            <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="assets/images/makanan/pempek.jpeg" alt="Pempek">
                        </div>
                        <div class="member-info">
                            <h4>Pempek</h4>
                            <span>Palembang</span>
                            <p>Pempek adalah makanan khas Palembang yang terbuat dari ikan dan tepung sagu. Pempek biasanya disajikan dengan kuah cuka yang asam dan pedas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="assets/images/makanan/rawon.jpeg" alt="Rawon">
                        </div>
                        <div class="member-info">
                            <h4>Rawon</h4>
                            <span>Jawa Timur</span>
                            <p>Rawon adalah sup daging sapi khas Jawa Timur yang berwarna hitam karena menggunakan kluwek sebagai bumbu utama. Rawon biasanya disajikan dengan nasi, tauge, dan telur asin.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="assets/images/makanan/rendang.jpeg" alt="Rendang">
                        </div>
                        <div class="member-info">
                            <h4>Rendang</h4>
                            <span>Padang</span>
                            <p>Rendang adalah masakan daging yang dimasak dengan santan dan rempah-rempah hingga kering dan berwarna cokelat kehitaman. Rendang dikenal dengan cita rasanya yang kaya dan tahan lama.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="assets/images/makanan/soto banjar.jpeg" alt="Soto Banjar">
                        </div>
                        <div class="member-info">
                            <h4>Soto Banjar</h4>
                            <span>Kalimantan Selatan</span>
                            <p>Soto Banjar adalah soto khas Banjarmasin yang terbuat dari daging ayam yang dimasak dengan bumbu rempah khas Banjar dan disajikan dengan ketupat atau lontong.</p>
                        </div>
                    </div>
                </div>    
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="assets/images/makanan/ayam betutu.jpeg" alt="Ayam Betutu">
                        </div>
                        <div class="member-info">
                            <h4>Ayam Betutu</h4>
                            <span>Bali</span>
                            <p>Ayam Betutu adalah makanan khas Bali yang terbuat dari ayam yang dimasak dengan bumbu khas Bali dan dibungkus dengan daun pisang, kemudian dipanggang hingga matang.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="assets/images/minuman/es pisang ijo.jpeg" alt="Es Pisang Ijo">
                        </div>
                        <div class="member-info">
                            <h4>Es Pisang Ijo</h4>
                            <span>Sulawesi Selatan</span>
                            <p>Es Pisang Ijo adalah minuman segar khas Makassar yang terbuat dari pisang yang dibalut dengan adonan tepung berwarna hijau, disajikan dengan sirup merah, santan, dan es serut.	 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="assets/images/minuman/es selendang mayang.jpeg" alt="Es Selendang Mayang">
                        </div>
                        <div class="member-info">
                            <h4>Es Selendang Mayang</h4>
                            <span>Jakarta</span>
                            <p>Es Selendang Mayang adalah minuman segar yang terbuat dari tepung hunkwe yang dibentuk seperti agar-agar, disajikan dengan santan, gula merah cair, dan es serut.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="assets/images/minuman/wedang jahe.jpeg" alt="Wedang Jahe">
                        </div>
                        <div class="member-info">
                            <h4>Wedang Jahe</h4>
                            <span>Jawa Tengah</span>
                            <p>Wedang Jahe adalah minuman tradisional yang terbuat dari jahe yang direbus dengan gula merah dan rempah-rempah. Minuman ini disajikan hangat dan memiliki rasa pedas yang khas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="assets/images/minuman/wedang uwuh.jpeg" alt="Wedang Uwuh">
                        </div>
                        <div class="member-info">
                            <h4>Wedang Uwuh</h4>
                            <span>Yogyakarta</span>
                            <p>Wedang Uwuh adalah minuman hangat khas Yogyakarta yang terbuat dari campuran rempah-rempah seperti jahe, kayu manis, cengkeh, dan daun pala. Minuman ini memiliki rasa yang hangat dan menyehatkan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="assets/images/minuman/es kuwut.jpeg" alt="Es Kuwut">
                        </div>
                        <div class="member-info">
                            <h4>Es Kuwut</h4>
                            <span>Bali</span>
                            <p>Es Kuwut adalah minuman segar yang terbuat dari campuran kelapa muda, melon, jeruk nipis, dan selasih, yang disajikan dengan sirup dan es serut.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
