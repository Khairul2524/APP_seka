<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Desa Muncan</h5>
                    <p>Desa Muncan merupakan salah satu desa dari 12 (dua belas) yang ada diwilayah Kecamatan Kopang Kabupaten Lombok Tengah. Desa Muncan memiliki potensi sumber daya manusia 7.987 (delapan ribu tiga ratus empat puluh sembilan) jiwa, dimana laki-laki berjumlah 4.046 (empat ribu empat puluh enam) jiwa dan perempuan berjumlah 3.941 (tiga ribu sembilan ratus empat puluh satu) jiwa. Untuk sebagian besar mata pencaharian penduduk di Desa Muncan diwilayah dusun muncan 1 sampai dengan muncan 4 sebagai tukang kayu dan petani, di Dusun Sumbek Dusun Lingkung dan Dusun Prantap sebagian sebagai petani dan buruh, kemudian di Dusun Montong Batu 1, Dusun Montong Batu 2 dan Dusun Talun sebagai petani dan peternak sapi atau kambing. Untuk mayoritas agama yang dianut penduduk Desa Muncan adalah Agama Islam.</p>
                    <img src="<?= base_url('img/peta.png') ?>" alt="" width="400px" srcset="">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Program bantuan pangan non tunai (BPNT)</h5>
                    <p>Program bantuan pangan non tunai (BPNT) adalah bantuan pangan yang disalurkan secara non tunai dari pemerintah kepada keluarga penerima manfaat (KPM) setiap bulan, melalui mekanisme akun elektronik yang digunakan hanya untuk membeli bahan pangan di tempat yang telah bekerjasama dengan bank himpunan Bank Negara (Himbara).</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>