@extends ('layouts.main')

@section('main-section')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telkomedika</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container-center {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .item img {
            height: auto;
            width: auto;
            max-height: 350px;
            size: cover;
        }
    </style>
</head>
<body>

<header class="jumbotron text-center" style="background-color: #6C757D; color: white;">
    <h1 class="display-4">Informasi Telkomedika</h1>
    <p class="lead">
        "Menyediakan Layanan Kesehatan Terbaik Untuk Semua Civitas Telkom University"
    </p>
</header>
<div class="container" style="margin-top: 90px;">
    <div class="container">
        <img src="{{asset('img/klinik.jpg')}}" width="500px" style="display: block; margin: 0 auto;">
        <div class="h3 text-white mb-0">Telkomedika</div>
    </div>
    <div class="row justify-content">
        <div class="col-md-50" style="text-align: justify;">
            <h3 class="mb-4">Apa itu Telkomedika?</h3>
                <p>Klinik Telkomedika merupakan pusat layanan kesehatan utama bagi seluruh mahasiswa dan civitas akademik Telkom University.
                    Klinik Telkomedika berperan penting dalam menjaga kesejahteraan dan kesehatan komunitas akademik tersebut. Fasilitas kesehatan
                    Telkomedika terletak di Klinik Pratama Telkom University yang menjadi pusat aktifitas medis di lingkungan kampus. Fasilitas yang
                    ditawarkan oleh Klinik Telkomedika sangatlah beragam dan komprehensif. Beberapa di antaranya meliputi pengecekan kesehatan rutin
                    dan konsultasi dengan dokter umum, perawatan serta pemeriksaan mata, layanan perawatan dan pengobatan gigi, penanganan kasus gawat
                    darurat, layanan rawat jalan, serta fasilitas rawat inap. Tidak hanya itu, Klinik Telkomedika juga memberikan layanan rujukan ke rumah
                    sakit atau spesialis lainnya jika diperlukan sehingga memastikan bahwa setiap pasien mendapatkan perawatan yang tepat dan komprehensif
                    sesuai dengan kebutuhan medisnya. Dengan berbagai fasilitas dan layanan yang tersedia, Klinik Telkomedika bertujuan untuk memberikan
                    pelayanan kesehatan yang berkualitas dan terintegrasi bagi seluruh komunitas Telkom University, serta menjadi mitra terpercaya dalam
                    menjaga kesehatan dan kesejahteraan seluruh komunitas Telkom University.</p>

                </br>

                <h3 class="mb-4">Bagaimana Sejarah Telkomedika?</h3>
                <p> Telkomedika adalah sebuah klinik yang didirikan pada tanggal 7 November 2008 dengan nama PT.Sarana Usaha Sejahtera Insan Palapa.
                    Awalnya, klinik ini merupakan penyedia layanan jasa di bidang kesehatan yang menjadi bagian dari Telkom Group, dengan kepemilikan
                    saham 75% oleh PT. Administrasi Medika (AdMedika) dan 25% oleh Yakes Telkom. Dahulu layanan kesehatan yang dimiliki oleh seluruh
                    institusi Pendidikan Telkom di bawah Yayasan Pendidikan Telkom memiliki standard berbeda beda. ”Sebelum menjadi Telkom University,
                    Layanan Kesehatan mahasiswa di empat institusi pendidikan IT Telkom, IM Telkom, STISI Telkom dan Politeknik berbeda-beda standarnya.
                    Sekarang kita sudah mempunyai standar yang lebih baik untuk universitas dan harus terus kita tingkatkan kualitasnya,” ujar Rektor Telkom
                    University Prof. Ir. Mochamad Ashari,M.Eng., Ph.D, Selasa (5/8). Hal ini lah yang menjadi alasan perlunya membentuk suatu instansi Layanan
                    Kesehatan di lingkungan perusahaan maupun seluruh instansi pendidikan Telkom Group untuk mampu menunjang dan menjamin Kesehatan seluruh
                    staff dan mahasiswa didalamnya.  Saat ini, Telkomedika telah berkembang menjadi pusat utama layanan kesehatan di lingkungan kampus dan
                    perusahaan yang tergabung dalam Telkom Group, salah satunya adalah Telkom University. Selain memberikan layanan kesehatan bagi mahasiswa
                    dan civitas akademika Telkom University, Telkomedika memiliki misi untuk mewujudkan layanan kesehatan berbasis teknologi dan informasi.
                    Misi tersebut juga mencakup integrasi seluruh layanan kesehatan secara digital. Dengan demikian, Telkomedika tidak hanya berfokus pada
                    pelayanan kesehatan konvensional, tetapi juga berupaya untuk memanfaatkan teknologi dan informasi dalam meningkatkan kualitas dan aksesibilitas
                    layanan kesehatan bagi masyarakat.
                </p>

                </br>

                <h3 class="mb-4">Apa saja Layanan Kesehatan yang Ada di Telkomedika Telkom University?</h3>
                <div class="item">
                    <img src="{{asset('img/gambar1.jpg')}}" width="500px" style="display: block; margin: 0 auto;">
                    <div class="h3 text-white mb-0">Telkomedika</div>
                </div>
                <p>Telkomedika sebagai pusat layanan kesehatan utama bagi seluruh mahasiswa dan civitas akademik Telkom University, menawarkan beragam layanan
                    kesehatan yang komprehensif. Berikut merupakan berbagai pelayanan yang disediakan Klinik Telkomedika: </br>
                    </br>
                        1. Pengecekan Kesehatan dan Konsultasi dengan Dokter Umum: Layanan ini menawarkan kesempatan bagi pasien untuk melakukan pengecekan kesehatan
                        secara rutin dan berkonsultasi dengan dokter umum. Ini membantu dalam mendeteksi dini masalah kesehatan dan memberikan saran medis yang sesuai.
                    </br>
                        2. Perawatan dan Pemeriksaan Mata: Di klinik Telkomedika, pasien dapat melakukan perawatan dan pemeriksaan mata secara menyeluruh. Ini mencakup
                        pemeriksaan rutin, diagnosis, dan penanganan masalah kesehatan mata seperti rabun jauh, rabun dekat, dan kondisi lainnya.
                    </br>
                        3. Perawatan dan Pengobatan Gigi: Layanan ini mencakup perawatan gigi rutin seperti pembersihan gigi, penambalan, dan pencabutan gigi. Selain itu,
                        Telkomedika juga menyediakan pengobatan untuk masalah gigi dan mulut yang lebih kompleks.
                    </br>
                        4. Perawatan Gawat Darurat: Telkomedika siap memberikan pertolongan pertama dan penanganan gawat darurat bagi pasien yang membutuhkan. Ini termasuk
                        penanganan cedera, serangan jantung, atau kondisi medis mendesak lainnya.
                    </br>
                        5. Rawat Jalan: Layanan rawat jalan memungkinkan pasien untuk menerima perawatan medis tanpa harus dirawat di rumah sakit. Ini mencakup pemeriksaan
                        medis, pengobatan, dan tindakan medis lainnya yang diperlukan.
                    </br>
                        6. Rawat Inap: Jika pasien membutuhkan perawatan intensif atau observasi lebih lanjut, Telkomedika menyediakan fasilitas rawat inap yang nyaman dan aman.
                        Di sini, pasien akan mendapatkan perawatan medis yang diperlukan oleh tim medis terlatih.</p>

                    </br>

                <h3 class="mb-4">Apa itu Kartu Telkomedika Telkom University?</h3>
                <p>Kartu Kesehatan Telkomedika Telkom University merupakan sebuah kartu identitas yang berfungsi untuk keperluan perawatan, pemeriksaan, dan pengobatan,
                    baik itu di poliklinik Telkom University maupun di rumah sakit atau klinik yang bekerja sama dengan Telkomedika. Kartu ini diterbitkan oleh pihak kampus
                    dan didistribusikan kepada mahasiswa yang aktif berkuliah. Penerbitan kartu ini bertujuan untuk meningkatkan dan mengembangkan layanan kesehatan di
                    Telkom University, program ini telah dimulai sejak tahun 2016. Sebelumnya, mahasiswa hanya menggunakan KTM (Kartu Tmahasiswa Mahasiswa) sebagai kartu identitas saat berobat.
                    Alur pendistribusi kartu dimulai dengan penerbitan oleh Telkomedika bekerja sama dengan pihak kampus, kemudian diserahkan ke bagian kemahasiswaan universitas untuk
                    dibagikan kepada mahasiswa di setiap fakultas. Mahasiswa kemudian dapat mengambil kartu tersebut di bagian kemahasiswaan fakultas masing-masing.
                </br>
                </br>
                    Seluruh biaya layanan kartu kesehatan di klinik Telkomedika sudah tercakup dalam biaya BPP perkuliahan, dimana biaya layanan kesehatan sebesar Rp150.000,00 yang tercantum dalam
                    rincian pembayaran BPP mahasiswa setiap semester sudah termasuk dalam pembayaran asuransi mahasiswa. Jadi, mahasiswa tidak perlu khawatir mengenai biaya tambahan untuk memiliki kartu ini.
                    Namun, jika kartu ini hilang, mahasiswa dapat menggantinya dengan biaya sekitar Rp25.000,00 melalui bagian Kemahasiswaan Telkom University. Kartu Kesehatan ini memberikan jaminan layanan
                    kesehatan yang komprehensif bagi seluruh mahasiswa Telkom University. Selain itu, kartu ini mudah digunakan dan biayanya terjangkau karena sudah termasuk dalam biaya BPP mahasiswa.
                    Dengan adanya kartu kesehatan ini, diharapkan Layanan Kesehatan Telkom University dapat terus meningkat dan berkembang, memberikan manfaat yang besar bagi kesejahteraan dan kesehatan seluruh mahasiswa.
                </p>

                </br>

                <h3 class="mb-4">Bagaimana cara penggunaan Kartu Telkomedika Telkom University?</h3>
                <p>Tata cara penggunaan Kartu Kesehatan Telkomedika sangatlah mudah. Mahasiswa hanya perlu membawa dan menunjukkan kartu ini ke bagian administrasi Klinik Pratama Telkom University saat berobat.
                    Selanjutnya, pihak klinik akan memeriksa data yang tercantum di kartu kesehatan dengan data yang ada di dalam database mereka. Setelah data terverifikasi, mahasiswa akan segera mendapatkan pelayanan
                    kesehatan seperti biasa. Selain itu, keuntungan lain dari penggunaan kartu kesehatan ini adalah kemampuan mahasiswa untuk mendapatkan layanan kesehatan di beberapa rumah sakit terdekat yang bekerja sama
                    dengan Telkomedika, bahkan jika mereka sedang berada di luar kota Bandung. "Di PKS (Perjanjian Kerja Sama) yang baru, tambahannya itu rumah sakit di luar kota. Satu kota hanya terdapat satu, karena Telkomedika
                    di sana punya cabang rumah sakit-rumah sakit. Pokoknya yang kota-kota besar, seperti Medan, Jakarta, Surabaya, Yogyakarta," tambah Nurhayati. Di kota Bandung sendiri, beberapa klinik yang sudah bekerjasama dengan
                    Kartu Telkomedika antara lain RS Al-Ihsan, RS Bina Sehat, RS Muhammadiyah, dan RS Al-Islam. Dengan kemudahan penggunaan dan akses yang luas ini, Kartu Kesehatan Telkomedika memberikan manfaat yang besar bagi kesejahteraan
                    dan kesehatan seluruh mahasiswa Telkom University.
                </p>
                </br>
                </br>
            </div>
        </div>
    </div>
</div>
<!-- Footer Start -->
<div class="container-fluid text-light footer" data-wow-delay="0.1s" style="background-color: #1F2937; padding: 10px;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15841.083137801683!2d107.630392!3d-6.9773433!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9ac24f5babb%3A0x2ca9f636654d9715!2sKlinik%20Telkomedika!5e0!3m2!1sid!2sid!4v1717257542757!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-lg-3">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marked"></i> Gedung Business Center, Jl. Telekomunikasi, Sukapura, Dayeuhkolot, Bandung, Jawa Barat, Indonesia 40257</p>

                </div>
                <div class="col-lg-3">
                    <h5 class="text-light mb-4">Contact</h5>
                    <p class="mb-2"><i class="bi bi-whatsapp me-3"></i>Whatsapp +62-811-2473-069</p>
                    <p class="mb-2"><i class="bi bi-telephone me-3"></i>Call Center 1500115</p>
                    <p class="mb-2"><i class="bi bi-envelope me-3"></i>Email cs@telkomedika.co.id</p>

                </div>
            </div>
        </div>
    </div>
<!-- Footer End -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSGFpoO9xmv/+/z7nU7ELJ6EeAZWlCmGKZk4M1RtIDZOt6Xq/YD"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoJtKh7z7lGz7fuP4F8nfdfs3SO+kD4Ck5BdPtF+to8xMmcke49"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqFjcJ6pajs/rfdfs3SO+kD4Ck5BdPtF+to8xMmcke49"
    crossorigin="anonymous"></script>
</body>
<footer>
    <div class="container-fluid text-light" style="height: 30px; position= fixed; background-color: #2D3748; width: 100%; color: #fff; text-align: center;">
            <p>Copyright &copy; 2024 All rights reserved | Kelompok D Telkomedika</p>
        </div>
</footer>
</html>
@endsection
