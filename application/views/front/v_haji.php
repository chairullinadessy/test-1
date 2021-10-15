<!DOCTYPE html>
<html lang="id">

<head>
    <title>Haji</title>

    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="" />
    <meta name="author" content="Dessy Rahmawati Chairullina" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/base.css' ?>" />
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/skeleton.css' ?>" />
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/flexslider.css' ?>" />
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/jquery.fancybox-1.3.4.css' ?>" />
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/lamoon.css' ?>" />
    <link href='http://fonts.googleapis.com/css?family=Lato|Lato:300|Vollkorn:400italic' rel='stylesheet' type='text/css'>


    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url() . 'theme/images/amira.jpg' ?>" />
</head>
<?php
function limit_words($string, $word_limit)
{
    $words = explode(" ", $string);
    return implode(" ", array_splice($words, 0, $word_limit));
}

?>

<body>

    <!-- Background Image -->
    <img src="<?php echo base_url() . 'theme/images/bg1.jpg' ?>" class="bg" alt="" />

    <!-- Root Container -->
    <div id="root-container" class="container">
        <div id="wrapper" class="sixteen columns">

            <!-- Banner -->
            <div id="sub-banner">
                <div id="logo">
                </div>
                <img src="<?php echo base_url() . 'theme/images/placeholders/6.png' ?>" alt="" />
            </div>

            <!-- Main Menu -->
            <div id="menu" class="page">
                <ul id="root-menu" class="sf-menu">
                    <?php
                    $this->load->view('front/menu');
                    ?>
                </ul>
            </div>

            <!-- Content -->
            <div id="content" class="reservation">
                <div class="container section">
                    <div class="one-third column">
                        <h3 class="nobg">Syarat-syarat Haji Haji Khusus</h3>
                        <ol>
                        <li> Bagi muslim yang ingin menunaikan ibadah haji melalui jalur haki khusus kuota pemerintah perlu memperhatikan syarat-syarat sebagai berikut :</li>
                        <li> Sehat jasmani maupun rohani</li>
                        <li> Memilik dokumen perjalanan yaitu; Paspor, Buku ICV Meningitis dan dokumen tambahan lainnya.</li>
                        <li> Membayar DP (Uang Muka) sebesar US$ 4.500 untuk mendapatkan nomor Porsi Haji Khusus </li>
                        <li> Masa tunggu berkisar 5-6 tahun atau menyesuaikan situasi dan kondisi.</li>
                        <li> Untuk jemaah lanjut usia (lansia) atau yang sedang sakit disarankan menyertakan pendamping dari anggota keluarga</li>
                        </ol>
                    </div>

                    <div class="two-third column">
                        <h3 class="nobg">Prosedur Mendaftar Haji di PT. Ameera Hati Mulia :</h3>
                        <ol>
                        <li> Mengisi form pendaftaran melaui Agen/Cabang/Langsung ke Kantor Pusat</li>
                        <li> Membayar DP sebesar US$ 4.500/orang</li>
                        <li> Melampirkan dokumen kependudukan yaitu ; Fotokopi KTP, Fotokopi KK, Fotokopi Surat Nikah/ Akta Kelahiran/ Ijazah</li>
                        <li> Melampirkan pas foto berwarna ukuran 4x6 (6 lembar), 3x4 (17 lembar)</li>
                        <li> Ketika sampai di tahun keberangkatan maka jemaah supaya : </li>                        
                        <ul>
                             <li> - Membayar Biaya Pelunasan sesuai program </li>
                             <li> - Melengkapi dokumen perjalanan yaitu; Paspor, Buku ICV Vaksin Meningitis, dan dokumen lain jika ada yang disyaratkan sebagai tambahan. </li>
                             <li> - Jemaah akan menerima paket perlengkapan meliputi; Koper, Tas Cabin, Tas selempang, Alat Ibadah (Ihram bagi laki-laki, Jilbab/Kerudung/Mukena bagi wanita), Seragam, Buku Tuntunan Ibadah/Do’a </li>
                             <li> - Jemaah akan menerima bimbingan manasik ibadah umroh dan informasi lainnya sampai keberangkatan. </li>
                        </ul>
                        </ol>
                        
                        <div class="info box">
                            Cek Status Anda Sekarang
                        </div>
                        <form action="<?php echo base_url() . 'haji/cek' ?>" method="post">
                            <h3><span class="left">Cek Status</span></h3>
                            <?php
                            error_reporting(0);
                            echo $this->session->flashdata('msg');
                            ?>
                            <p>
                                <label>No Pendaftaran</label>
                                <input type="text" name="no_pendaftaran" placeholder="No Pendaftaran" style="width:300px;">
                                <?php echo form_error('no_pendaftaran'); ?>
                            </p>
                            <p>
                                <label></label>
                                <button type="submit" class="medium gray button">Cek Status Pendaftaran</button>
                            </p>
                        </form>

                        <?php
                        if(isset($status)){
                            if($status < 1){
                                echo "<div class=\"warning box\">Maaf, Nomor Pendaftaran Anda tidak ditemukan</div>";
                            }else{
                                echo "<div class=\"info box\">Selamat, Nomor Pendaftaran Anda <b>sudah terdaftar</b>!</div>";
                            }
                        }
                        ?>

                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div id="footer">
                <div class="container section end">
                    <div id="footer-about" class="one-fourth column">
                        <p><img src="<?php echo base_url() . 'theme/images/am.png' ?>" alt="" />
                        </p>
                        <p>
                            <br><a href="#">Alamat Kantor:</a></br>
                            <span>Jl. Tentara Pelajar No.16, Plempungan, Bolon, Kec. Colomadu, abupaten Karanganyar, Jawa Tengah 57177</span>
                            <span>Telp: (0271) 7892390</span>
                        </p>
                    </div>
                    <div id="footer-offers" class="one-third column">
                        <h4><span class="footer left">Artikel &amp; Berita</span></h4>
                        <ul>
                            <?php
                            foreach ($berita->result_array() as $j) {
                                $idberitaf = $j['idberita'];
                                $judulf = $j['judul'];
                                $isif = limit_words($j['isi'], 10);
                                $tglpostf = $j['tglpost'];
                                $gbrf = $j['gambar'];
                                $userf = $j['user'];
                            ?>
                                <li>
                                    <a href="<?php echo base_url() . 'berita_post/detail_berita/' . $idberitaf; ?>"><img width="50" height="50" src="<?php echo base_url() . 'assets/gambars/' . $gbrf; ?>" alt="" /><?php echo $isif; ?></a>
                                </li>

                            <?php } ?>
                        </ul>
                    </div>
                    <div id="footer-gallery" class="one-third column last">
                        <h4><span class="footer left">Photo Gallery</span></h4>
                        <ul>
                            <?php
                            foreach ($photo->result_array() as $p) :
                                $jdl_galeri = $p['jdl_galeri'];
                                $gbr_galeri = $p['gbr_galeri'];
                            ?>
                                <li>
                                    <a href="<?php echo base_url() . 'assets/gambars/' . $gbr_galeri; ?>" class="image-box" rel="beach"><img src="<?php echo base_url() . 'assets/gambars/' . $gbr_galeri; ?>" alt="" /></a>
                                </li>
                            <?php endforeach ?>
                        </ul>
                        <p>
                            <a href="<?php echo base_url() . 'detail_photo/galeri'; ?>">Lihat Semua</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Copyright and Social Icons -->
            <div id="copyright">
                <div class="container section end">
                    <ul id="social">
                        <li>
                            <a href="#"><img src="<?php echo base_url() . 'theme/images/social/facebook.png' ?>" alt="" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php echo base_url() . 'theme/images/social/flickr.png' ?>" alt="" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php echo base_url() . 'theme/images/social/twitter.png' ?>" alt="" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php echo base_url() . 'theme/images/social/vimeo.png' ?>" alt="" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php echo base_url() . 'theme/images/social/rss.png' ?>" alt="" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php echo base_url() . 'theme/images/social/google-plus.png' ?>" alt="" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php echo base_url() . 'theme/images/social/linkedin.png' ?>" alt="" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="<?php echo base_url() . 'theme/images/social/dribbble.png' ?>" alt="" /></a>
                        </li>
                    </ul>
                    <span id="text">Copyright &copy; <?php date_default_timezone_set('Asia/Jakarta');
                                                        echo date('Y'); ?> | Ameera</a>.</span>

                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Files -->
    <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/jquery-1.7.2.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/jquery.easing.1.3.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/jquery.flexslider-min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/jquery.hoverIntent.minified.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/superfish.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/jquery.cycle.lite.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/jquery.fancybox-1.3.4.pack.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/lamoon.js' ?>"></script>
</body>

</html>