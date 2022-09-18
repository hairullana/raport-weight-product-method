@extends('templates.admin')

@section('body')
            <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none"><i class="bi bi-justify fs-3"></i></a>
            </header>
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Edit Data Keseluruhan</h3>
                            <p class="text-subtitle text-muted"> Siswa </p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">User</li>
                            </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- // Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">User Merupakan Perwakilan Pembimbing Kelas Yang bertangungjawab terhadap Nilai</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">NISN</label>
                                                    <input type="text" id="first-name-column" class="form-control" placeholder="2304" name="fname-column"></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Nama</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="Baiq Nikum Yulisasih" name="lname-column"></div>
                                            </div>
                                           
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="email-id-column">Status</label>
                                                    <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="active"></div>
                                            </div>



                                              <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Nilai PABD</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="" name="lname-column"></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Nilai PPKN</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="" name="lname-column"></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Nilai Bahasa Indonesia</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="" name="lname-column"></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Nilai Matematika</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="" name="lname-column"></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Nilai IPA</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="" name="lname-column"></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Nilai IPS</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="" name="lname-column"></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Nilai SBDB</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="" name="lname-column"></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Nilai BAHASA Jawa</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="" name="lname-column"></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Nilai Pendidikan Batik</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="" name="lname-column"></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Nilai Keadiran</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="" name="lname-column"></div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Nilai Sikap</label>
                                                    <input type="text" id="last-name-column" class="form-control" placeholder="" name="lname-column"></div>
                                            </div>


                                            <div class="form-group col-12">
                                                <div class='form-check'>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="checkbox5" class='form-check-input' checked>
                                                        <label for="checkbox5">Remember Me</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
                <!-- // Basic multiple Column Form section end -->
            </div>
            <footer>
@endsection