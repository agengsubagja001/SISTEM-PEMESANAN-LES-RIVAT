<!-- head -->
<?php $this->load->view('pengajar/partial/head') ?>

<!-- navbar -->
<?php $this->load->view('pengajar/partial/navbar') ?>

<!-- sidebar -->
<?php $this->load->view('pengajar/partial/sidebar') ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1 Class="mt-3 mb-3">TABEL REQUEST LES</h1>
    <nav>
      <!-- <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol> -->
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body mt-3" style="overflow-x:auto;">
            <!-- <h5 class="card-title">Datatables</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead style="background: #f6f6fe;">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Pendidikan</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($show_request as $request) : ?>
                  <tr>
                    <th scope="row"><?php echo $no++ ?></th>
                    <td><?php echo $request->nama ?></td>
                    <td><?php echo $request->alamat ?></td>
                    <td><?php echo $request->kontrak ?></td>
                    <td><span class="badge bg-success">Approved</span></td>
                    <td>
                      <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-pencil-square"></i></a>
                    </td>
                  </tr>
                <?php endforeach ?>
                <!-- <tr>
                  <th scope="row">2</th>
                  <td>Sintia agustina</td>
                  <td>Desa tunggulpayung jalan nusantara blok A Rt/Rw 03/02 kecataman lelea kabupaten indramayu</td>
                  <td>SMA</td>
                  <td>
                    <span class="badge bg-warning">Pending</span>
                  </td>
                  <td>
                    <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#basicModal" title="Remove my profile image"><i class="bi bi-pencil-square"></i></a>
                    <div class="modal fade" id="basicModal" tabindex="-1">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Validasi Request</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Apakah anda akan menerima permintaan Les Privat tersebut ?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tolak</button>
                            <button type="button" class="btn btn-primary">Setuju</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr> -->
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->

<!-- footer -->
<?php $this->load->view('pengajar/partial/footer') ?>