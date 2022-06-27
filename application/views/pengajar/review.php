<!-- head -->
<?php $this->load->view('pengajar/partial/head') ?>

<!-- navbar -->
<?php $this->load->view('pengajar/partial/navbar') ?>

<!-- sidebar -->
<?php $this->load->view('pengajar/partial/sidebar') ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1 Class="mt-3 mb-3">TABEL REVIEW HASIL LES</h1>
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
                  <th scope="col">Review</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Agus Riyadi</td>
                  <td>Desa tugu jalan nusantara blok A Rt/Rw 03/02 kecataman lelea kabupaten indramayu</td>
                  <td>SMP</td>
                  <td><span class="badge bg-success">Done</span></td>
                  <td>
                    <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-pencil-square"></i></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Sintia agustina</td>
                  <td>Desa tunggulpayung jalan nusantara blok A Rt/Rw 03/02 kecataman lelea kabupaten indramayu</td>
                  <td>SMA</td>
                  <td>
                    <span class="badge bg-warning">Pending</span>
                  </td>
                  <td>
                    <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#basicModal" title="Remove my profile image"><i class="bi bi-pencil-square"></i></a>
                    <!-- Modal input review -->
                    <div class="modal fade" id="basicModal" tabindex="-1">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Reviews Hasil Les</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <!-- Vertical Form -->
                            <form class="row g-3">
                              <div class="col-12">
                                <label for="inputNanme4" class="form-label">Nama Murid</label>
                                <input type="text" class="form-control" id="inputNanme4" placeholder="Masukan Nama" required>
                              </div>
                              <div class="col-12">
                                <label for="inputNanme4" class="form-label">Bidang Les Privat</label>
                                <input type="text" class="form-control" id="inputNanme4" placeholder="Masukan Bidang Les Privat" required>
                              </div>
                              <div class="col-12">
                                <label for="inputNanme4" class="form-label">Reviews Hasil Les Privat</label>
                                <!-- <textarea name="" id="" cols="30" rows="10" placeholder="Masukan Hasil Les Privat" required></textarea> -->
                                <textarea class="form-control" style="min-width: 100%" placeholder="Masukan Hasil Les Privat" required></textarea>
                                <!-- <input type="text" class="form-control" id="inputNanme4" placeholder="Masukan Bidang Les Privat" required> -->
                              </div>
                              <!-- <div class="col-12">
                                            <label for="inputEmail4" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="inputEmail4">
                                          </div>
                                          <div class="col-12">
                                            <label for="inputPassword4" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="inputPassword4">
                                          </div>
                                          <div class="col-12">
                                            <label for="inputAddress" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                          </div> -->
                              <!-- <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="reset" class="btn btn-secondary">Reset</button>
                                          </div> -->
                            </form><!-- Vertical Form -->
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Kirim</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Akhir modal input review -->
                  </td>
                </tr>
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