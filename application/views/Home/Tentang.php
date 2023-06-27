<!-- Page Content-->
<div class="container px-4 px-lg-5">
    <!-- Heading Row-->
    <div class="row align-items-center my-5">
        <div class="col-lg-12 mt-3">
            <h1 class="font-weight-light">Sistem Pengaduan Masyarakat</h1>
            <p>SIPEMAS adalah sebuah platform web untuk pengaduan masyarakat. Sistem ini dibuat untuk mempermudah urusan pengaduan dan pembuatan surat pengantar. Selain mempermudah, tujuan dibuatnya sistem ini adalah untuk membuat hubungan masyarakat dengan dinas menjadi lebih baik kedepannya.</p>
            <!-- <a class="btn btn-primary" href="<?= "https://localhost/pengaduan/login/" ?>" target="__blank">Buat Pengaduan</a> -->
        </div>
        <div class="col-lg-12"><img class="img-fluid rounded mb-4 mb-lg-0" src="https://dummyimage.com/900x400/dee2e6/6c757d.jpg" alt="..." /></div>
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