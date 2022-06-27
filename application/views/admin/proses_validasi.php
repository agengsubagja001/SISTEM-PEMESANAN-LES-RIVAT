<!-- head -->
<?php $this->load->view('admin/partial/head') ?>

<!-- navbar -->
<?php $this->load->view('admin/partial/navbar') ?>

<!-- sidebar -->
<?php $this->load->view('admin/partial/sidebar') ?>

<!-- konten -->
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Validasi Pengajar</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Validasi Pengajar</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <!-- <div class="pagetitle">
    <h1 Class="mt-3 mb-3">TABEL VALIDASI PENGAJAR</h1>
    <nav>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
    </nav>
  </div> -->
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body mt-3" style="overflow-x:auto;">
                        <h5 class="card-title">Permintaan Akun Pengajar</h5>
                        <!-- <h5 class="card-title">Datatables</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->

                        <?php foreach ($val_pengajar as $pjrval) : ?>
                            <form action="<?= base_url('admin/validasi_pengajar/update_pengajar'); ?>" method="post">
                                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                    <h5 class="card-title">Profil Anda</h5>

                                    <input type="hidden" name="id_profil" value="<?php echo $pjrval->id_profil ?>">
                                    <input type="hidden" name="id_akun" value="<?php echo $pjrval->id_akun ?>">

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Gambar</div>
                                        <img src="<?php echo base_url() . 'assets/foto_pengajar/' . $pjrval->gambar ?>" alt="testi-user" style="width:50%; height:50px;" class="rounded-circle">
                                        <!-- <div class="col-lg-9 col-md-8"><?php echo $pjrval->nama_pengajar ?></div> -->
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                                        <div class="col-lg-9 col-md-8"><?php echo $pjrval->nama_pengajar ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Alamat</div>
                                        <div class="col-lg-9 col-md-8"><?php echo $pjrval->alamat ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">No.telepon</div>
                                        <div class="col-lg-9 col-md-8"><?php echo $pjrval->no_hp ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Status</div>
                                        <div class="col-lg-9 col-md-8"><?php echo $pjrval->status ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">deskripsi</div>
                                        <div class="col-lg-9 col-md-8"><?php echo $pjrval->deskripsi ?></div>
                                    </div>



                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Status</div>
                                        <select name="status" class="form-select" aria-label="Default select example">
                                            <option selected="">Pilih Validasi</option>
                                            <option value="SETUJU">SETUJU</option>
                                            <option value="TIDAK SETUJU">TIDAK SETUJU</option>
                                        </select>
                                    </div>

                                    <a href="<?= base_url() ?>admin/validasi_pengajar">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </a>
                                    <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>

                                </div>
                            </form>
                        <?php endforeach ?>
                        </tbody>
                        </table>
                        <!-- End Table with stripped rows -->


                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- sweetalert hapus -->
<?php if ($this->session->flashdata('Hapus')) : ?>
    <script>
        swal("Data terhapus", "Data berhasil di hapus!", "success");
    </script>
<?php endif; ?>
<!--akhir sweetalert -->

<!-- footer -->
<?php $this->load->view('admin/partial/footer') ?>