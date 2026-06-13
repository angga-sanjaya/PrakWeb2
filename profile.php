<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Web Pribadi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-ocean-gradient shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
                <img src="assets/img/logoITM.png" alt="Logo Kampus" width="40" height="40">
                <div>
                    <span class="d-block fs-6 fw-bold text-white">Pemrograman Web I</span>
                    <small class="d-block text-white-50" style="font-size: 11px;">Tugas 2</small>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="profile.php">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="portfolio.php">Portfolio</a></li>
                </ul>
                <div class="d-flex align-items-center justify-content-center gap-3 mt-3 mt-lg-0">
                    <a href="profile.php">
                        <img src="assets/img/me_BGbiru.jpg" alt="Foto Profil" class="rounded-circle border border-2 border-white" width="40" height="40" style="object-fit: cover;">
                    </a>
                    <a href="logout.php" class="btn btn-outline-light btn-sm px-3">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container my-5 pb-5 mb-5 pt-4 d-flex align-items-center">
        <div class="row w-100 g-5 align-items-center justify-content-center">
            <div class="col-lg-5 text-center">
                <div class="profil-card-left">
                    <div class="video-box">
                        <video autoplay muted loop>
                            <source src="video/slidefotoku.mp4" type="video/mp4">
                            Browser kamu tidak mendukung video.
                        </video>
                    </div>
                    <img src="assets/img/me_BGbiru.jpg" alt="Foto Profil" class="foto-profil shadow-sm">
                </div>
            </div>

            <div class="col-lg-7">
                <div class="card card-biodata border-0 shadow-sm p-4 p-md-5 bg-white">
                    <h2 class="fw-bold text-primary mb-1">Biodata Diri</h2>
                    <p class="text-muted mb-4">Informasi singkat tentang saya</p>
                    <div class="row g-3 fs-6 mb-4">
                        <div class="col-sm-4 fw-bold text-secondary">Nama</div>
                        <div class="col-sm-8">: Angga Sanjaya</div>
                        <div class="col-sm-4 fw-bold text-secondary">NIM</div>
                        <div class="col-sm-8">: 202457201012</div>
                        <div class="col-sm-4 fw-bold text-secondary">Program Studi</div>
                        <div class="col-sm-8">: Sistem Informasi</div>
                        <div class="col-sm-4 fw-bold text-secondary">Semester</div>
                        <div class="col-sm-8">: 4</div>
                        <div class="col-sm-4 fw-bold text-secondary">Alamat</div>
                        <div class="col-sm-8">: Purworejo, Jawa Tengah</div>
                        <div class="col-sm-4 fw-bold text-secondary">Hobi</div>
                        <div class="col-sm-8">: Desain, gambar, dan jalan-jalan</div>
                    </div>
                    <div class="p-3 bg-light border-start border-4 border-primary rounded-end">
                        <p class="mb-0 text-dark lh-base text-justify">
                            Saya adalah mahasiswa Sistem Informasi yang sedang belajar membuat website menggunakan HTML dan CSS. Website ini dibuat sebagai tugas mata kuliah Pemrograman Web I.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-ocean-gradient text-white pt-5 pb-3 mt-auto">
        <div class="container text-center">
            <img src="assets/img/me_BGbiru.jpg" alt="Foto Profil" class="rounded-circle border border-3 border-white mb-3" width="80" height="80" style="object-fit: cover;">
            <h5 class="fw-bold mb-1">Angga Sanjaya</h5>
            <p class="text-white-50 mb-1">Mahasiswa Sistem Informasi</p>
            <p class="text-white-50 mb-4">Nganjuk, Jawa Timur</p>
            <div class="mb-4">
                <h6 class="fw-bold text-white-50 mb-3">Kontak</h6>
                <div class="d-flex justify-content-center gap-3">
                    <a href="https://www.facebook.com/share/1EUaZshacR" target="_blank" class="btn btn-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;"><img src="assets/icon/facebook.png" alt="Facebook" width="20"></a>
                    <a href="https://www.instagram.com/sehzade_pasha30/" target="_blank" class="btn btn-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;"><img src="assets/icon/instagram.png" alt="Instagram" width="20"></a>
                    <a href="https://wa.me/6283821856361" target="_blank" class="btn btn-success rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;"><img src="assets/icon/whatsapp.png" alt="WhatsApp" width="20"></a>
                </div>
            </div>
            <hr class="border-light my-4">
            <p class="text-white-50 small mb-0">&copy; 2026 Angga Sanjaya - Website Pribadi</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>