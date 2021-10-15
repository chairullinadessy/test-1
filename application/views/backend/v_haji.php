<!--Counter Inbox-->
<?php
$query = $this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
$query3 = $this->db->query("SELECT * FROM testimoni WHERE status ='0'");
$jum_pesan = $query->num_rows();
$jum_testimoni = $query3->num_rows();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pengguna</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'theme/images/amira.jpg' ?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.css' ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.css' ?>" />

  <?php
  function limit_words($string, $word_limit)
  {
    $words = explode(" ", $string);
    return implode(" ", array_splice($words, 0, $word_limit));
  }

  ?>

</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php
    $this->load->view('backend/v_header');
    ?>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">Menu Utama</li>
          <li>
            <a href="<?php echo base_url() . 'backend/dashboard' ?>">
              <i class="fa fa-home"></i> <span>Dashboard</span>
              <span class="pull-right-container">
                <small class="label pull-right"></small>
              </span>
            </a>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-pencil"></i>
              <span>Post</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url() . 'backend/post/add_post' ?>"><i class="fa fa-thumb-tack"></i> Add New</a></li>
              <li><a href="<?php echo base_url() . 'backend/post' ?>"><i class="fa fa-list"></i> Post List</a></li>
            </ul>
          </li>
          <li>
            <a href="<?php echo base_url() . 'backend/pengguna' ?>">
              <i class="fa fa-users"></i> <span>Pengguna</span>
              <span class="pull-right-container">
                <small class="label pull-right"></small>
              </span>
            </a>
          </li>
          <li class="active">
            <a href="<?php echo base_url() . 'backend/haji' ?>">
              <i class="fa fa-users"></i> <span>Jamaah</span>
              <span class="pull-right-container">
                <small class="label pull-right"></small>
              </span>
            </a>
          </li>
          <!-- <li class="treeview">
            <a href="#">
              <i class="fa fa-bus"></i>
              <span>Tour</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url() . 'backend/paket_tour' ?>"><i class="fa fa-gift"></i> Paket Tour</a></li>
              <li><a href="<?php echo base_url() . 'backend/kategori' ?>"><i class="fa fa-hashtag"></i> Kategori</a></li>
            </ul>
          </li> -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-camera"></i>
              <span>Gallery</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url() . 'backend/album' ?>"><i class="fa fa-clone"></i> Album</a></li>
              <li><a href="<?php echo base_url() . 'backend/galeri' ?>"><i class="fa fa-picture-o"></i> Photos</a></li>
            </ul>
          </li>
          <li>
          <li>
            <a href="<?php echo base_url() . 'backend/inbox' ?>">
              <i class="fa fa-envelope"></i> <span>Inbox</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-green"><?php echo $jum_pesan; ?></small>
              </span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url() . 'backend/testimonial' ?>">
              <i class="fa fa-comment"></i> <span>Testimonial</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-yellow"><?php echo $jum_testimoni; ?></small>
              </span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url() . 'administrator/logout' ?>">
              <i class="fa fa-sign-out"></i> <span>LogOut</span>
              <span class="pull-right-container">
                <small class="label pull-right"></small>
              </span>
            </a>
          </li>

        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Pendaftaran Haji
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Pendaftaran Haji</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">

              <div class="box">
                <div class="box-header">
                  <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#largeModal"><span class="fa fa-plus"></span> Upload File</a>
                  <a href="<?=base_url('assets/upload-haji.xlsx');?>" class="btn btn-primary">Download Format File</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-striped" style="font-size:13px;">
                    <thead>
                      <tr>
                        <th>No.Pendaftaran</th>
                        <th>Nama Jamaah</th>
                        <th>TTL</th>
                        <th>Alamat</th>
                        <th>Paket</th>
                        <th>Keberangkatan</th>
                        <th>Tempat Mendaftar</th>
                        <th style="text-align:right;">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 0;
                      foreach ($data->result_array() as $a) :
                        $no++;
                        $id = $a['id'];
                        $no_pendaftaran = $a['no_pendaftaran'];
                        $nama_jemaah = $a['nama_jemaah'];
                        $tempat_lahir = $a['tempat_lahir'];
                        $tanggal_lahir = $a['tanggal_lahir'];
                        $alamat = $a['alamat'];
                        $paket = $a['paket'];
                        $keberangkatan = $a['keberangkatan'];
                        $tempat_daftar = $a['tempat_daftar'];
                      ?>
                        <tr>
                          <td><?php echo $no_pendaftaran; ?></td>
                          <td><?php echo $nama_jemaah; ?></td>
                          <td><?php echo $tempat_lahir; ?>, <?php echo $tanggal_lahir; ?></td>
                          <td><?php echo $alamat; ?></td>
                          <td><?php echo $paket; ?></td>
                          <td><?php echo $keberangkatan; ?></td>
                          <td><?php echo $tempat_daftar; ?></td>
                          <td style="text-align:right;">
                            <a class="btn" data-toggle="modal" data-target="#ModalUpdate<?php echo $id; ?>"><span class="fa fa-pencil"></span></a>
                            <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $id; ?>"><span class="fa fa-trash"></span></a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
      </div>
      <strong>Copyright &copy; <?php date_default_timezone_set('Asia/Jakarta');
                                echo date('Y'); ?> | Ameera | </strong> All rights reserved.
    </footer>


    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->


  <!-- ============ MODAL ADD PENGGUNA =============== -->
  <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
          <h3 class="modal-title" id="myModalLabel">Upload File</h3>
        </div>
        <form class="form-horizontal" method="post" action="<?php echo base_url() . 'backend/haji/import' ?>" enctype="multipart/form-data">
          <div class="modal-body">

            <div class="form-group">
              <label class="control-label col-xs-3">File Excel</label>
              <div class="col-xs-8">
                <input type="file" name="excel" required>
              </div>
            </div>

          </div>

          <div class="modal-footer">
            <button class="btn btn-flat" data-dismiss="modal" aria-hidden="true">Tutup</button>
            <button class="btn btn-primary btn-flat">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php
  $no = 0;
  foreach ($data->result_array() as $a) :
    $no++;
    $id = $a['id'];
    $no_pendaftaran = $a['no_pendaftaran'];
    $nama_jemaah = $a['nama_jemaah'];
    $tempat_lahir = $a['tempat_lahir'];
    $tanggal_lahir = $a['tanggal_lahir'];
    $alamat = $a['alamat'];
    $paket = $a['paket'];
    $keberangkatan = $a['keberangkatan'];
    $tempat_daftar = $a['tempat_daftar'];
  ?>
    <!-- ============ MODAL EDIT PENGGUNA =============== -->
    <div class="modal fade" id="ModalUpdate<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h3 class="modal-title" id="myModalLabel">Update Pengguna</h3>
          </div>
          <form class="form-horizontal" method="post" action="<?php echo base_url() . 'backend/haji/update' ?>" enctype="multipart/form-data">
            <div class="modal-body">

              <div class="form-group">
                <label class="control-label col-xs-3">No.Pendaftaran</label>
                <div class="col-xs-8">
                  <input name="no_pendaftaran" value="<?php echo $no_pendaftaran; ?>" class="form-control" type="text" placeholder="Nomor Pendaftaran" required>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-xs-3">Nama Jamaah</label>
                <div class="col-xs-8">
                  <input name="nama_jemaah" value="<?php echo $nama_jemaah; ?>" class="form-control" type="text" placeholder="Nama Jamaah" required>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-xs-3">Tempat Lahir</label>
                <div class="col-xs-8">
                  <input name="tempat_lahir" class="form-control" type="text" value="<?php echo $tempat_lahir;?>" placeholder="Tempat Lahir" required>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-xs-3">Tanggal Lahir</label>
                <div class="col-xs-8">
                  <input name="tanggal_lahir" class="form-control" type="date" value="<?php echo $tanggal_lahir;?>" placeholder="Tanggal Lahir" required>
                </div>
              </div>

            <div class="form-group">
                <label class="control-label col-xs-3">Alamat</label>
                <div class="col-xs-8">
                    <input name="alamat" class="form-control" type="text" value="<?php echo $alamat;?>" placeholder="Alamat" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3">paket</label>
                <div class="col-xs-8">
                    <input name="paket" class="form-control" type="text" value="<?php echo $paket;?>" placeholder="paket" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3">Keberangkatan</label>
                <div class="col-xs-8">
                    <input name="keberangkatan" class="form-control" type="date" value="<?php echo $keberangkatan;?>" placeholder="Keberangkatan" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3">Tempat Mendaftar</label>
                <div class="col-xs-8">
                    <input name="tempat_daftar" class="form-control" type="text" value="<?php echo $tempat_daftar;?>" placeholder="tempat_daftar" required>
                </div>
            </div>

            </div>

            <div class="modal-footer">
              <input type="hidden" name="kode" value="<?php echo $id; ?>">
              <button class="btn btn-flat" data-dismiss="modal" aria-hidden="true">Tutup</button>
              <button class="btn btn-primary btn-flat">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>

  <?php endforeach; ?>

  <?php
  $no = 0;
  foreach ($data->result_array() as $a) :
    $no++;
    $id = $a['id'];
    $no_pendaftaran = $a['no_pendaftaran'];
    $nama_jemaah = $a['nama_jemaah'];
  ?>
    <!--Modal Hapus Post-->
    <div class="modal fade" id="ModalHapus<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
            <h4 class="modal-title" id="myModalLabel">Hapus Pengguna</h4>
          </div>
          <form class="form-horizontal" action="<?php echo base_url() . 'backend/haji/hapus' ?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <input type="hidden" name="kode" value="<?php echo $id; ?>" />
              <p>Apakah Anda yakin mau menghapus Pengguna <b><?php echo $nama_jemaah; ?></b> (No.Pendaftaran <b><?php echo $no_pendaftaran;?></b>) ?</p>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php endforeach; ?>


  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url() . 'assets/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
  <!-- DataTables -->
  <script src="<?php echo base_url() . 'assets/plugins/datatables/jquery.dataTables.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.min.js' ?>"></script>
  <!-- SlimScroll -->
  <script src="<?php echo base_url() . 'assets/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url() . 'assets/plugins/fastclick/fastclick.js' ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() . 'assets/dist/js/app.min.js' ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url() . 'assets/dist/js/demo.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/ckeditor/ckeditor.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.js' ?>"></script>
  <!-- page script -->
  <script>
    $(function() {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
      CKEDITOR.replace('ckeditor');
    });
  </script>

  <?php if ($this->session->flashdata('msg') == 'error') : ?>
    <script type="text/javascript">
      $.toast({
        heading: 'Error',
        text: "Upload file bermasalah. Pastikan sudah sesuai format yang diberikan!",
        showHideTransition: 'slide',
        icon: 'error',
        hideAfter: false,
        position: 'bottom-right',
        bgColor: '#FF4859'
      });
    </script>
  <?php elseif ($this->session->flashdata('msg') == 'success') : ?>
    <script type="text/javascript">
      $.toast({
        heading: 'Success',
        text: "Pengguna Berhasil disimpan ke database.",
        showHideTransition: 'slide',
        icon: 'success',
        hideAfter: false,
        position: 'bottom-right',
        bgColor: '#7EC857'
      });
    </script>
  <?php elseif ($this->session->flashdata('msg') == 'upload') : ?>
    <script type="text/javascript">
      $.toast({
        heading: 'Success',
        text: "File berhasil diupload",
        showHideTransition: 'slide',
        icon: 'success',
        hideAfter: false,
        position: 'bottom-right',
        bgColor: '#7EC857'
      });
    </script>
  <?php elseif ($this->session->flashdata('msg') == 'info') : ?>
    <script type="text/javascript">
      $.toast({
        heading: 'Info',
        text: "Pengguna berhasil di update",
        showHideTransition: 'slide',
        icon: 'info',
        hideAfter: false,
        position: 'bottom-right',
        bgColor: '#00C9E6'
      });
    </script>
  <?php elseif ($this->session->flashdata('msg') == 'success-hapus') : ?>
    <script type="text/javascript">
      $.toast({
        heading: 'Success',
        text: "Pengguna Berhasil dihapus.",
        showHideTransition: 'slide',
        icon: 'success',
        hideAfter: false,
        position: 'bottom-right',
        bgColor: '#7EC857'
      });
    </script>
  <?php elseif ($this->session->flashdata('msg') == 'show-modal') : ?>
    <script type="text/javascript">
      $('#ModalResetPassword').modal('show');
    </script>
  <?php else : ?>

  <?php endif; ?>
</body>

</html>