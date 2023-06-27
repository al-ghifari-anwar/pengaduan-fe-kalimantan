<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="#!">SIPEMAS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?= base_url('home') ?>">Home</a></li>
                    <!-- <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?= base_url('home/profil') ?>">Profil</a></li> -->
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?= base_url('home/tentang') ?>">Tetang</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= "https://localhost/pengaduan/login/register" ?>" target="__blank">Daftar</a></li>
                            <li><a class="dropdown-item" href="<?= "https://localhost/pengaduan/login/" ?>" target="__blank">Login</a></li>
                            <li>
                                <hr class=" dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?= "https://localhost/pengaduan/login/admin" ?>" target="__blank">Admin</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>