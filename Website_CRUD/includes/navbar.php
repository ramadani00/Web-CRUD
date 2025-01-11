<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<nav  id="navbar" class="navbar navbar-expand-lg navbar" style="font-family: 'Arial', sans-serif; font-size: 24px; background-color: #FF8400; padding: 0px 40px 0px 40px;">
    <div class="container-fluid">
        <a class="navbar-brand" href="?page=nh">
            <img src="assets/images/nh.png" alt="Logo Nusantara Heritage Restaurant" width="70" height="70">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="?page=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=about">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="crudDropdown">
                        CRUD
                    </a>
                    <ul class="dropdown-menu" id="crudDropdownMenu">
                        <li><a class="dropdown-item" href="?page=makanan" id="makanan">Makanan</a></li>
                        <li><a class="dropdown-item" href="?page=minuman" id="minuman">Minuman</a></li>
                        <li><a class="dropdown-item" href="?page=reservasi" id="reservasi">Reservasi</a></li>
                    </ul>
                </li>
                <script>
                    // Ambil parameter halaman dari URL
                    const urlParams = new URLSearchParams(window.location.search);
                    const page = urlParams.get('page');

                    // Tambahkan kelas 'active' dan 'show' ke elemen yang sesuai
                    if (page === 'makanan' || page === 'minuman' || page === 'reservasi' | page === 'makananAdd' | page === 'minumanAdd' | page === 'reservasiAdd' | page === 'makananUpdate' | page === 'minumanUpdate' | page === 'reservasiUpdate') {
                        const dropdownToggle = document.getElementById('crudDropdown');
                        const dropdownMenu = document.getElementById('crudDropdownMenu');

                        // Tambahkan kelas untuk membuka dropdown
                        dropdownToggle.classList.add('active');
                        dropdownToggle.setAttribute('aria-expanded', 'true'); // Perbarui atribut ARIA
                        dropdownMenu.classList.add('show'); // Tambahkan kelas 'show' ke menu dropdown

                        // Aktifkan item dropdown yang sesuai
                        const activeItem = document.getElementById(page);
                        if (activeItem) {
                            activeItem.classList.add('active');
                        }
                    }
                </script>           
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li><a class="btn btn-outline-light"
                    href="?page=login">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>