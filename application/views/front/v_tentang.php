<html lang="id">
<!--<![endif]-->

<head>
    <title>Lokasi Kantor</title>

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
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/validationEngine.jquery.css' ?>" />
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/smoothness/jquery-ui-1.8.22.custom.css' ?>" />
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/ui.spinner.css' ?>" />
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/lamoon.css' ?>" />
    <link href='http://fonts.googleapis.com/css?family=Lato|Lato:300|Vollkorn:400italic' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url() . 'theme/images/amira.jpg' ?>" />
    <?php
    function limit_words($string, $word_limit)
    {
        $words = explode(" ", $string);
        return implode(" ", array_splice($words, 0, $word_limit));
    }

    ?>
</head>

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
            <div id="menu" class="home">
                <ul id="root-menu" class="sf-menu">
                    <?php
                    $this->load->view('front/menu');
                    ?>
                </ul>
            </div>

            <!-- Content -->
            <div id="content" class="reservation">
                <div class="container section">
                    <center>
                        <h3><span>Ameera</span></h3>
                    </center>

                    <div class="container section text-align: center" style="margin-bottom: 300px;">
                        PT. Ameera Hati Mulia adalah perusahaan Penyelenggara Perjalanan Ibadah Umroh dan Haji Khusus yang berhomebase di Wilayah Surakarta (Soloraya). Kami mulai beroperasi melayani Tamu-tamu Allah berangkat ke Baitullah sejak tahun 2016. Pada tahun 2018 kami menerima legalitas ijin resmi dari Kementerian Agama RI sebagai Penyelenggara Perjalanan Ibadah Umroh (PPIU) melalui SK Kemenag No. 275 Tahun 2018. Alhamdulillah kami bersyukur, atas ijin Allah saat ini menjadi top of mind Biro Umroh & Haji Khusus di Wilayah Soloraya. Kami telah memberangkatkan ribuan jemaah Umroh dan memiliki jadwal reguler keberangkatan hampir setiap pekan. Sehingga intensitas jadwal ini memudahkan masyarakat untuk memilih kapan tanggal keberangkatan ke Baitullah.
                        Berbagai penghargaan telah kami peroleh diantaranya; Best Performance Sales in Umroh Category 2017, 2018 dari Garuda Indonesia Branch Solo, Best Partnership Tri Ibadah Soloraya 2019 dari PT. Hutchison 3 Indonesia dan penghargaan bergengsi lainnya. PT. Ameera Hati Mulia menjadi biro perjalanan umroh favorit masyarakat Soloraya karena sebagai pelopor paket umroh kelas eksekutif dengan biaya terjangkau. Sebagian besar paket umroh yang telah dijalankan adalah program starting Solo dengan Pesawat Garuda Indonesia dengan hotel di depan persis pelataran masjidil haram yang bisa dinikmati dengan harga terjangkau.
                        Selain itu layanan prima ini didukung crew yang masih muda, energik, profesional dan sangat menguasai medan wilayah maupun bimbingan ibadah selama di tanah suci. Ayo saatnya Anda menikmati Ibadah ke Tanah Suci dengan layanan terbaik bersama Ameera.
                        <span style="font-weight:bold;"><b>#AmeeraHelpfull</b></span>

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
                                                        echo date('Y'); ?> | Ameera</span>

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/jquery-1.7.2.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/jquery.easing.1.3.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/jquery.flexslider-min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/jquery.hoverIntent.minified.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/superfish.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/jquery.cycle.lite.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/jquery.fancybox-1.3.4.pack.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/jquery.validationEngine.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/jquery.validationEngine-en.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/jquery-ui-1.8.22.custom.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/ui.spinner.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/lamoon.js' ?>"></script>

</body>

</html>