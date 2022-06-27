<!-- head -->
<?php $this->load->view('partial/head'); ?>

<?php $this->load->view('partial/navbar'); ?>

<!-- section konten -->
<br>
<br>
<br>
<!--  -->

<!-- <h2><?php echo $this->session->userdata('id_akun') ?></h2>
<h2><?php echo $this->session->userdata('nama') ?></h2>
<h2><?php echo $this->session->userdata('id_profil') ?></h2> -->

<?php foreach ($show_detail_pengajar as $detail) : ?>

    <section class="testimoni">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap");

            * {
                font-family: 'Inter', sans-serif !important;
            }

            body .img-testimoni {
                z-index: -1 !important;
                right: 0 !important;
                position: absolute;
                margin-top: 92px;
                margin-right: 68px;
            }

            body .testimoni {
                padding-top: 50px;
                padding-bottom: 50px;
            }

            body .testimoni h1 {
                color: #232323;
                font-weight: 700 !important;
            }

            @media screen and (min-width: 768px) {
                body .testimoni {
                    padding-bottom: 188px;
                }

                body .testimoni h1 {
                    font-size: 60px !important;
                }
            }

            @media screen and (min-width: 768px) {
                body .testimoni .container {
                    padding-top: 120px;
                }

                body .testimoni .container h1 {
                    width: 722px;
                    font-size: 60px;
                    line-height: 90px !important;
                }
            }

            body .testimoni .container h1 {
                line-height: 50px;
                font-weight: 700 !important;
            }

            body .testimoni .container .testi-text {
                line-height: 28px;
                color: #9C9C9C;
            }

            @media screen and (min-width: 768px) {
                body .testimoni .container .testi-text {
                    width: 500px;
                }
            }

            body .testimoni .container .card {
                border-radius: 28px;
                border: none !important;
                -webkit-box-shadow: 20px 8px 18px rgba(178, 177, 255, 0.05);
                box-shadow: 20px 8px 18px rgba(178, 177, 255, 0.05);
            }

            body .testimoni .container .card p {
                color: #9C9C9C;
            }

            body .cl-black {
                color: black !important;
            }

            body .cl-orange {
                color: #FF9900;
            }

            body .cl-dusty-grey {
                color: #9C9C9C;
            }

            body .place .img-place-header {
                width: 100% !important;
            }
        </style>
        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/testimonial-photo-bg.png" alt="bg-testimoni" class="img-testimoni d-none d-md-block">
        <div class="container px-4">
            <div class="row pb-md-4">
                <h1>
                    <?php echo $detail->nama ?>
                </h1>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 p-0">
                    <!-- <div class="row mx-1 mb-4">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                            alt="star" class="mr-2">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                            alt="star" class="mr-2">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                            alt="star" class="mr-2">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                            alt="star" class="mr-2">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                            alt="star" class="mr-2">
                    </div> -->
                    <p class="testi-text pb-md-4">
                        <?php echo $detail->deskripsi ?>
                    </p>
                    <div class="row my-5 pl-3 mx-0">
                        <div class="col-2 px-0">
                            <img src="<?php echo base_url() . 'assets/foto_pengajar/' . $detail->gambar ?>" alt="testi-user" style="width:100%; height:89px;" class="rounded-circle">
                        </div>
                        <div class="col-10 pl-4 my-auto">
                            <h3 class="font-weight-bold">
                                <?php echo $detail->nama ?>
                            </h3>
                            <p class="m-0 font-weight-semi-bold cl-dusty-grey">
                                <?php echo $detail->bidang ?>
                            </p>
                        </div>
                        <br>
                        <br>
                        <div class="row mt-5">
                            <div class="col-8">
                                <a class="" href="#" data-toggle="modal" data-target="#exampleModal2"><button type="button" data-bs-toggle="modal" data-bs-target="#basicModal1" class="btn text-white" style="border-radius: 10px; background-color: #27c499;">Pesan Les</button></a>
                            </div>
                            <div class="col-4 cl-orange text-right">
                                <!-- <strong>
                                    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                                        alt="star" class="img-fluid"> 4.8
                                </strong> -->
                                <a class="" href="#" data-toggle="modal" data-target="#exampleModal"><button type="button" class="btn text-" data-bs-toggle="modal" data-bs-target="#basicModal2" style="background-color: #fff; border: 1px solid #27c499; border-radius: 10px; color:#27c499; ">Chat</button></a>
                                <!-- <button class="btn-btn danger" style="border-radius: 20%;">Chat</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal untuk Pesan les -->
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Pesan Les Privat</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <!-- <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $this->session->userdata('id_akun') ?></h5>
                            </div>
                            <div class="modal-header">

                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $detail->id_profil ?></h5>

                            </div>

                            <div class="modal-header">

                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $detail->id_akun ?></h5>
                            </div> -->

                            <div class="col-12">
                                <h6 class="modal-title" id="exampleModalLabel" style="color:red; font:italic;">Sebelum Pesan Les privat Chat Terlebih Dahulu !</h6>
                            </div>

                            <form action="<?= site_url('detail_pengajar/upload') ?>" method="post">
                                <div class="modal-body">

                                    <input type="hidden" name="id_akun" value="<?php echo $this->session->userdata('id_akun') ?>">
                                    <input type="hidden" name="id_profil" value="<?php echo $detail->id_profil = $_GET['id']; ?>">
                                    <!-- Vertical Form -->

                                    <div class="col-12">
                                        <label for="inputNanme4" class="form-label">Nama Siswa</label>
                                        <input type="text" name="nama" class="form-control" id="inputNanme4" placeholder="Masukan Nama Siswa" required>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <label for="inputNanme4" class="form-label">Alamat Siswa</label>
                                        <textarea class="form-control" name="alamat" style="min-width: 100%" placeholder="Masukan Alamat Siswa" cols="30" rows="8" required></textarea>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <label for="inputNanme4" class="form-label">Kontrak Les</label>
                                        <input type="text" name="kontrak" class="form-control" id="inputNanme4" placeholder="Masukan Kontrak Les ( contoh: 1 Bulan )" required>
                                    </div>

                                    <div class="col-12 mt-2">
                                        <label for="inputNanme4" class="form-label">Masukan Jam</label>
                                        <input type="text" name="jam" class="form-control" id="inputNanme4" placeholder="Masukan Jam Les Privat" required>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <label for="inputNanme4" class="form-label">Pilih Hari</label>
                                        <div class="input-group mb-3">
                                            <select name="hari" class="custom-select" id="inputGroupSelect01">
                                                <option selected>Pilih Hari</option>
                                                <option value="Senin">Senin</option>
                                                <option value="Selasa">Selasa</option>
                                                <option value="Rabu">Rabu</option>
                                                <option value="Kamis">Kamis</option>
                                                <option value="Jumat">Jumat</option>
                                                <option value="Sabtu">Sabtu</option>
                                                <option value="Minggu">Minggu</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Vertical Form -->

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-dark" data-dismiss="modal">tutup</button>
                                    <button type="submit" class="btn text-white" style="border-radius: 10px; background-color: #27c499;">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--akhir modal untuk Pesan les -->

                <!-- modal untuk chat -->
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Kirim Pesan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-12">

                                    <textarea class="form-control" style="min-width: 100%" placeholder="Masukan Pesan" cols="30" rows="10" required></textarea>
                                    <!-- <input type="text" class="form-control" id="inputNanme4" placeholder="Masukan Bidang Les Privat" required> -->
                                </div>
                                <!-- <div class="col col-md-12">
                                <textarea name="Masukan pesan" id="" placeholder="Masukan Pesan" cols="30" rows="10"></textarea>
                                </div> -->

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                                <button type="button" class="btn text-white" style="border-radius: 10px; background-color: #27c499;">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--akhir modal untuk chat -->

                <div class="col-md-6">
                    <!-- <div class="card p-4" style="width: 20.25rem;">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/place.png"
                            alt="img-place" class="img-fluid img-place-header">
                        <h3 class="mt-4 font-weight-bold">
                            Hotel Tentrem
                        </h3>
                        <p class="mb-5">
                            150m
                        </p>
                        <div class="row">
                            <div class="col-8">
                                <p class="cl-black">
                                    Start from <strong>40 USD</strong>
                                </p>
                            </div>
                            <div class="col-4 cl-orange text-right">
                                <strong>
                                    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                                        alt="star" class="img-fluid"> 4.8
                                </strong>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
<?php endforeach ?>

<section class="h-100 w-100 bg-white" style="box-sizing: border-box">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .content-2-2 .btn:focus,
        .content-2-2 .btn:active {
            outline: none !important;
        }

        .content-2-2 .title-text {
            padding-top: 5rem;
            margin-bottom: 3rem;
        }

        .content-2-2 .text-title {
            font: 600 2.25rem/2.5rem Poppins, sans-serif;
            color: #121212;
            margin-bottom: 0.625rem;
        }

        .content-2-2 .text-caption {
            color: #121212;
            font-weight: 300;
        }

        .content-2-2 .column {
            padding: 2rem 2.25rem;
        }

        .content-2-2 .icon {
            margin-bottom: 1.5rem;
        }

        .content-2-2 .icon-title {
            font: 500 1.5rem/2rem Poppins, sans-serif;
            margin-bottom: 0.625rem;
            color: #121212;
        }

        .content-2-2 .icon-caption {
            font: 400 1rem/1.625 Poppins, sans-serif;
            letter-spacing: 0.025em;
            color: #565656;
        }

        .content-2-2 .card-block {
            padding: 1rem 1rem 5rem;
        }

        .content-2-2 .card {
            padding: 1.75rem;
            background-color: #eef6f4;
            border-radius: 0.75rem;
            border: 1px solid #27c499;
        }

        .content-2-2 .card-title {
            font: 600 1.5rem/2rem Poppins, sans-serif;
            margin-bottom: 0.625rem;
            color: #000000;
        }

        .content-2-2 .card-caption {
            font: 300 1rem/1.5rem Poppins, sans-serif;
            color: #565656;
            letter-spacing: 0.025em;
            margin-bottom: 0;
        }

        .content-2-2 .btn-card {
            font: 700 1rem/1.5rem Poppins, sans-serif;
            background-color: #27c499;
            padding-top: 1rem;
            padding-bottom: 1rem;
            width: 100%;
            border-radius: 0.75rem;
            margin-bottom: 1.25rem;
        }

        .content-2-2 .btn-card:hover {
            --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
                0 4px 6px -2px rgba(0, 0, 0, 0.05);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .content-2-2 .btn-outline {
            font: 400 1rem/1.5rem Poppins, sans-serif;
            color: #979797;
            border: 1px solid #979797;
            padding-top: 1rem;
            padding-bottom: 1rem;
            width: 100%;
            border-radius: 0.75rem;
        }

        .content-2-2 .btn-outline:hover {
            border: 1px solid #27c499;
            color: #27c499;
        }

        .content-2-2 .card-text {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .content-2-2 .grid-padding {
            padding: 0rem 1rem 3rem;
        }

        @media (min-width: 576px) {
            .content-2-2 .grid-padding {
                padding: 0rem 2rem 3rem;
            }

            .content-2-2 .card-block {
                padding: 3rem 2rem 5rem;
            }
        }

        @media (min-width: 768px) {
            .content-2-2 .grid-padding {
                padding: 0rem 4rem 3rem;
            }

            .content-2-2 .card-block {
                padding: 3rem 4rem 5rem;
            }
        }

        @media (min-width: 992px) {
            .content-2-2 .grid-padding {
                padding: 1rem 6rem 3rem;
            }

            .content-2-2 .card-block {
                padding: 3rem 6rem 5rem;
            }

            .content-2-2 .column {
                padding: 0rem 2.25rem;
            }
        }

        @media (min-width: 1200px) {
            .content-2-2 .grid-padding {
                padding: 1rem 10rem 3rem;
            }

            .content-2-2 .card-block {
                padding: 3rem 6rem 5rem;
            }

            .content-2-2 .card-btn-space {
                margin-top: 15px;
                margin-bottom: 15px;
            }

            .content-2-2 .btn-card,
            .content-2-2 .btn-outline {
                width: 95%;
                float: right;
            }
        }

        @media (max-width: 980px) {
            .content-2-2 .card-btn-space {
                width: 100%;
            }
        }
    </style>
    <div class="content-2-2 container-xxl mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif">
        <div class="text-center title-text">
            <h1 class="text-title">3 Keuntungan les privat</h1>
            <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
                You can easily manage your business with a powerful tools
            </p>
        </div>

        <div class="grid-padding text-center">
            <div class="row">
                <div class="col-lg-4 column">
                    <div class="icon">
                        <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-5.png" alt="" />
                    </div>
                    <h3 class="icon-title">Easy to Operate</h3>
                    <p class="icon-caption">
                        This can easily help you to<br />
                        grow up your business fast
                    </p>
                </div>
                <div class="col-lg-4 column">
                    <div class="icon">
                        <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-6.png" alt="" />
                    </div>
                    <h3 class="icon-title">Real-Time Analytic</h3>
                    <p class="icon-caption">
                        With real-time analytics, you<br />
                        can check data in real time
                    </p>
                </div>
                <div class="col-lg-4 column">
                    <div class="icon">
                        <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-7.png" alt="" />
                    </div>
                    <h3 class="icon-title">Very Full Secured</h3>
                    <p class="icon-caption">
                        With real-time analytics, we<br />
                        will guarantee your data
                    </p>
                </div>
            </div>
        </div>

        <div class="card-block">
            <div class="card">
                <div class="d-flex flex-lg-row flex-column align-items-center">
                    <div class="me-lg-3">
                        <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-1%20(1).png" alt="" />
                    </div>
                    <div class="flex-grow-1 text-lg-start text-center card-text">
                        <h3 class="card-title">
                            Fast Business Management in 30 minutes
                        </h3>
                        <p class="card-caption">
                            Our tools for business analysis helps an organization
                            understand<br class="d-none d-lg-block" />
                            market or business development.
                        </p>
                    </div>
                    <div class="card-btn-space">
                        <button class="btn btn-card text-white">Buy Now</button>
                        <button class="btn btn-outline">Demo Version</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="h-100 w-100 bg-white" style="box-sizing: border-box">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .footer-2-2 .list-space {
            margin-bottom: 1.25rem;
        }

        .footer-2-2 .footer-text-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #000000;
            margin-bottom: 1.5rem;
        }

        .footer-2-2 .list-menu {
            color: #c7c7c7;
            text-decoration: none !important;
        }

        .footer-2-2 .list-menu:hover {
            color: #555252;
        }

        .footer-2-2 hr.hr {
            margin: 0;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }

        .footer-2-2 .border-color {
            color: #c7c7c7;
        }

        .footer-2-2 .footer-link {
            color: #c7c7c7;
        }

        .footer-2-2 .footer-link:hover {
            color: #555252;
        }

        .footer-2-2 .social-media-c:hover circle,
        .footer-2-2 .social-media-p:hover path {
            fill: #555252;
        }

        .footer-2-2 .footer-info-space {
            padding-top: 3rem;
        }

        .footer-2-2 .list-footer {
            padding: 5rem 1rem 3rem 1rem;
        }

        .footer-2-2 .info-footer {
            padding: 0 1rem 3rem;
        }

        @media (min-width: 576px) {
            .footer-2-2 .list-footer {
                padding: 5rem 2rem 3rem 2rem;
            }

            .footer-2-2 .info-footer {
                padding: 0 2rem 3rem;
            }
        }

        @media (min-width: 768px) {
            .footer-2-2 .list-footer {
                padding: 5rem 4rem 6rem 4rem;
            }

            .footer-2-2 .info-footer {
                padding: 0 4rem 3rem;
            }
        }

        @media (min-width: 992px) {
            .footer-2-2 .list-footer {
                padding: 5rem 6rem 6rem 6rem;
            }

            .footer-2-2 .info-footer {
                padding: 0 6rem 3rem;
            }
        }
    </style>

    <div class="footer-2-2 container-xxl mx-auto position-relative p-0" style="font-family: 'Poppins', sans-serif">
        <div class="list-footer">
            <div class="row gap-md-0 gap-3">
                <div class="col-lg-3 col-md-6">
                    <div class="">
                        <div class="list-space">
                            <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-5.png" alt="" />
                        </div>
                        <nav class="list-unstyled">
                            <li class="list-space">
                                <a href="" class="list-menu">Home</a>
                            </li>
                            <li class="list-space">
                                <a href="" class="list-menu">About</a>
                            </li>
                            <li class="list-space">
                                <a href="" class="list-menu">Features</a>
                            </li>
                            <li class="list-space">
                                <a href="" class="list-menu">Pricing</a>
                            </li>
                            <li class="list-space">
                                <a href="" class="list-menu">Testimonial</a>
                            </li>
                            <li class="list-space">
                                <a href="" class="list-menu">Help</a>
                            </li>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h2 class="footer-text-title">Product</h2>
                    <nav class="list-unstyled">
                        <li class="list-space">
                            <a href="" class="list-menu">Real Time Analytic</a>
                        </li>
                        <li class="list-space">
                            <a href="" class="list-menu">Easy to Operate</a>
                        </li>
                        <li class="list-space">
                            <a href="" class="list-menu">Full Secured</a>
                        </li>
                        <li class="list-space">
                            <a href="" class="list-menu">Analytic Tool</a>
                        </li>
                        <li class="list-space">
                            <a href="" class="list-menu">Story</a>
                        </li>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h2 class="footer-text-title">Company</h2>
                    <nav class="list-unstyled">
                        <li class="list-space">
                            <a href="" class="list-menu">Contact Us</a>
                        </li>
                        <li class="list-space">
                            <a href="" class="list-menu">Blog</a>
                        </li>
                        <li class="list-space">
                            <a href="" class="list-menu">Culture</a>
                        </li>
                        <li class="list-space">
                            <a href="" class="list-menu">Security</a>
                        </li>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h2 class="footer-text-title">Support</h2>
                    <nav class="list-unstyled">
                        <li class="list-space">
                            <a href="" class="list-menu">Getting Started</a>
                        </li>
                        <li class="list-space">
                            <a href="" class="list-menu">Help Center</a>
                        </li>
                        <li class="list-space">
                            <a href="" class="list-menu">Server Status</a>
                        </li>
                    </nav>
                </div>
            </div>
        </div>

        <div class="border-color info-footer">
            <div class="">
                <hr class="hr" />
            </div>
            <div class="mx-auto d-flex flex-column flex-lg-row align-items-center footer-info-space gap-4">
                <div class="d-flex title-font font-medium align-items-center gap-4">
                    <a href="">
                        <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="15" cy="15" r="15" fill="#C7C7C7" />
                            <g clip-path="url(#clip0)">
                                <path d="M17.6648 9.65667H19.1254V7.11267C18.8734 7.078 18.0068 7 16.9974 7C14.8914 7 13.4488 8.32467 13.4488 10.7593V13H11.1248V15.844H13.4488V23H16.2981V15.8447H18.5281L18.8821 13.0007H16.2974V11.0413C16.2981 10.2193 16.5194 9.65667 17.6648 9.65667V9.65667Z" fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a href="">
                        <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="15" cy="15" r="15" fill="#C7C7C7" />
                            <g clip-path="url(#clip0)">
                                <path d="M23 10.039C22.405 10.3 21.771 10.473 21.11 10.557C21.79 10.151 22.309 9.513 22.553 8.744C21.919 9.122 21.219 9.389 20.473 9.538C19.871 8.897 19.013 8.5 18.077 8.5C16.261 8.5 14.799 9.974 14.799 11.781C14.799 12.041 14.821 12.291 14.875 12.529C12.148 12.396 9.735 11.089 8.114 9.098C7.831 9.589 7.665 10.151 7.665 10.756C7.665 11.892 8.25 12.899 9.122 13.482C8.595 13.472 8.078 13.319 7.64 13.078C7.64 13.088 7.64 13.101 7.64 13.114C7.64 14.708 8.777 16.032 10.268 16.337C10.001 16.41 9.71 16.445 9.408 16.445C9.198 16.445 8.986 16.433 8.787 16.389C9.212 17.688 10.418 18.643 11.852 18.674C10.736 19.547 9.319 20.073 7.785 20.073C7.516 20.073 7.258 20.061 7 20.028C8.453 20.965 10.175 21.5 12.032 21.5C18.068 21.5 21.368 16.5 21.368 12.166C21.368 12.021 21.363 11.881 21.356 11.742C22.007 11.28 22.554 10.703 23 10.039Z" fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a href="">
                        <svg class="social-media-p" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.8711 15C17.8711 16.5857 16.5857 17.8711 15 17.8711C13.4143 17.8711 12.1289 16.5857 12.1289 15C12.1289 13.4143 13.4143 12.1289 15 12.1289C16.5857 12.1289 17.8711 13.4143 17.8711 15Z" fill="#C7C7C7" />
                            <path d="M21.7144 9.92039C21.5764 9.5464 21.3562 9.20789 21.0701 8.93002C20.7923 8.64392 20.454 8.42374 20.0797 8.28572C19.7762 8.16785 19.3203 8.02754 18.4805 7.98932C17.5721 7.94789 17.2997 7.93896 14.9999 7.93896C12.6999 7.93896 12.4275 7.94766 11.5193 7.98909C10.6796 8.02754 10.2234 8.16785 9.92014 8.28572C9.54591 8.42374 9.2074 8.64392 8.92976 8.93002C8.64366 9.20789 8.42348 9.54617 8.28523 9.92039C8.16736 10.2239 8.02705 10.6801 7.98883 11.5198C7.9474 12.428 7.93848 12.7004 7.93848 15.0004C7.93848 17.3002 7.9474 17.5726 7.98883 18.481C8.02705 19.3208 8.16736 19.7767 8.28523 20.0802C8.42348 20.4545 8.64343 20.7927 8.92953 21.0706C9.2074 21.3567 9.54568 21.5769 9.91991 21.7149C10.2234 21.833 10.6796 21.9733 11.5193 22.0115C12.4275 22.053 12.6997 22.0617 14.9997 22.0617C17.3 22.0617 17.5723 22.053 18.4803 22.0115C19.3201 21.9733 19.7762 21.833 20.0797 21.7149C20.8309 21.4251 21.4247 20.8314 21.7144 20.0802C21.8323 19.7767 21.9726 19.3208 22.011 18.481C22.0525 17.5726 22.0612 17.3002 22.0612 15.0004C22.0612 12.7004 22.0525 12.428 22.011 11.5198C21.9728 10.6801 21.8325 10.2239 21.7144 9.92039V9.92039ZM14.9999 19.4231C12.5571 19.4231 10.5768 17.4431 10.5768 15.0002C10.5768 12.5573 12.5571 10.5773 14.9999 10.5773C17.4426 10.5773 19.4229 12.5573 19.4229 15.0002C19.4229 17.4431 17.4426 19.4231 14.9999 19.4231ZM19.5977 11.4361C19.0269 11.4361 18.5641 10.9733 18.5641 10.4024C18.5641 9.83159 19.0269 9.36879 19.5977 9.36879C20.1685 9.36879 20.6313 9.83159 20.6313 10.4024C20.6311 10.9733 20.1685 11.4361 19.5977 11.4361Z" fill="#C7C7C7" />
                            <path d="M15 0C6.717 0 0 6.717 0 15C0 23.283 6.717 30 15 30C23.283 30 30 23.283 30 15C30 6.717 23.283 0 15 0ZM23.5613 18.5511C23.5197 19.468 23.3739 20.094 23.161 20.6419C22.7135 21.7989 21.7989 22.7135 20.6419 23.161C20.0942 23.3739 19.468 23.5194 18.5513 23.5613C17.6328 23.6032 17.3394 23.6133 15.0002 23.6133C12.6608 23.6133 12.3676 23.6032 11.4489 23.5613C10.5322 23.5194 9.90601 23.3739 9.35829 23.161C8.78334 22.9447 8.26286 22.6057 7.83257 22.1674C7.39449 21.7374 7.05551 21.2167 6.83922 20.6419C6.62636 20.0942 6.48056 19.468 6.4389 18.5513C6.39656 17.6326 6.38672 17.3392 6.38672 15C6.38672 12.6608 6.39656 12.3674 6.43867 11.4489C6.48033 10.532 6.6259 9.90601 6.83876 9.35806C7.05505 8.78334 7.39426 8.26263 7.83257 7.83257C8.26263 7.39426 8.78334 7.05528 9.35806 6.83899C9.90601 6.62613 10.532 6.48056 11.4489 6.43867C12.3674 6.39679 12.6608 6.38672 15 6.38672C17.3392 6.38672 17.6326 6.39679 18.5511 6.4389C19.468 6.48056 20.094 6.62613 20.6419 6.83876C21.2167 7.05505 21.7374 7.39426 22.1677 7.83257C22.6057 8.26286 22.9449 8.78334 23.161 9.35806C23.3741 9.90601 23.5197 10.532 23.5616 11.4489C23.6034 12.3674 23.6133 12.6608 23.6133 15C23.6133 17.3392 23.6034 17.6326 23.5613 18.5511V18.5511Z" fill="#C7C7C7" />
                        </svg>
                    </a>
                    <a href="">
                        <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="15" cy="15" r="15" fill="#C7C7C7" />
                            <g clip-path="url(#clip0)">
                                <path d="M17.9027 22.4467C17.916 22.4427 17.9287 22.4373 17.942 22.4327C26.0853 19.1973 23.8327 7 15 7C10.5673 7 7 10.6133 7 15C7 20.5513 12.6227 24.5127 17.9027 22.4467ZM10.5207 20.3727C11.0887 19.418 12.9267 16.7247 16.064 15.7953C16.72 17.468 17.18 19.4193 17.2253 21.632C14.848 22.4313 12.3407 21.8933 10.5207 20.3727V20.3727ZM18.2087 21.2147C18.1213 19.0887 17.6873 17.2033 17.0687 15.57C18.4567 15.3533 20.0633 15.498 21.8853 16.228C21.498 18.402 20.108 20.2293 18.2087 21.2147V21.2147ZM21.99 15.194C19.9833 14.44 18.2147 14.346 16.684 14.638C16.4473 14.1047 16.1987 13.592 15.9353 13.12C18.284 12.182 19.672 11.0387 20.2933 10.4333C21.39 11.7027 22.0413 13.346 21.99 15.194V15.194ZM19.5833 9.72133C19.018 10.2593 17.6867 11.346 15.41 12.2347C14.294 10.4693 13.1007 9.224 12.3447 8.52667C14.7633 7.53067 17.5527 7.956 19.5833 9.72133V9.72133ZM11.3887 9.01533C11.9593 9.51733 13.212 10.7227 14.4207 12.5867C12.7607 13.1213 10.6793 13.514 8.148 13.5693C8.55067 11.64 9.75333 10.0053 11.3887 9.01533V9.01533ZM8.02133 14.5733C10.8547 14.5273 13.148 14.08 14.9607 13.4747C15.2113 13.914 15.4493 14.3927 15.678 14.89C12.5213 15.8953 10.5487 18.4907 9.79333 19.6627C8.57467 18.3027 7.90267 16.528 8.02133 14.5733V14.5733Z" fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>
                <nav class="mx-auto d-flex flex-wrap align-items-center justify-content-center gap-4">
                    <a href="" class="footer-link" style="text-decoration: none">Terms of Service</a>
                    <span>|</span>
                    <a href="" class="footer-link" style="text-decoration: none">Privacy Policy</a>
                    <span>|</span>
                    <a href="" class="footer-link" style="text-decoration: none">Licenses</a>
                </nav>
                <nav class="d-flex flex-lg-row flex-column align-items-center justify-content-center">
                    <p style="margin: 0">Copyright © 2021 Analystic Max</p>
                </nav>
            </div>
        </div>
    </div>
</section>