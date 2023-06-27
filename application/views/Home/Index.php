<!-- Page Content-->
<div class="container px-4 px-lg-5">
    <!-- Heading Row-->
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
        <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="<?= base_url('assets/balkot.jpg') ?>" alt="..." /></div>
        <div class="col-lg-5">
            <h1 class="font-weight-light">Sistem Pengaduan Masyarakat</h1>
            <p>Web resmu untuk pengaduan masyarakat!</p>
            <a class="btn btn-primary" href="<?= "https://localhost/pengaduan/login/" ?>" target="__blank">Buat Pengaduan</a>
        </div>
    </div>
    <!-- Call to Action-->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
        <div class="card-body">
            <p class="text-white m-0"><i>"Menjalin hubungan antar masyarakat dan pemerintahan agar lebih erat"</i></p>
        </div>
    </div>
    <!-- Content Row-->
    <div class="row gx-4 gx-lg-5">
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Pengaduan</h2>
                    <p class="card-text">Masyarakat dapat membuat sebuah pengaduan yang nantinya akan dikonfirmasi oleh admin dan diteruskan kepada dinas terkait.</p>
                </div>
                <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!" data-bs-toggle="modal" data-bs-target="#modalPengaduan">Info lebih lengkap</a></div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Tindakan</h2>
                    <p class="card-text">Laporan penindak lanjutan dari pengaduan masyarakat yang akan dibuat oleh dinas terkait.</p>
                </div>
                <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!" data-bs-toggle="modal" data-bs-target="#modalTindakan">Info lebih lengkap</a></div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Surat</h2>
                    <p class="card-text">Pembuatan surat pengantar dan peringatan oleh admin yang akan ditujukan untuk perorangan maupun kelompok tertentu.</p>
                </div>
                <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!" data-bs-toggle="modal" data-bs-target="#modalSurat">Info lebih lengkap</a></div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalPengaduan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tata Cara Pengaduan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Masyarakat melakukan pendaftaran akun melalui menu daftar</li>
                    <li>Melakukan login</li>
                    <li>Pilih menu "Pengaduan"</li>
                    <li>Masukkan data-data pengaduan beserta foto</li>
                    <li>Melihat status pengaduan apakah sudah ditindak lanjuti atau belum oleh dinas terkait</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalTindakan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tindakan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Admin melakukan konfirmasi pengaduan</li>
                    <li>Admin mengirim data kepada dinas terkait untuk ditindak lanjuti oleh dinas terkait</li>
                    <li>Dinas terkait melakukan penindakan</li>
                    <li>Dinas terkait malaporkan apakah tindakan sudah selesai beserta buktinya</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalSurat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Surat</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Admin membuat surat pengantar atau peringatan</li>
                    <li>Dinas terkait dapat mencetak surat tersebut untuk diberikan kepada yang bersangkutan</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>