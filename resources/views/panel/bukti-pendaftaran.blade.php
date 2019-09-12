@extends('layout.panel')
@section('content')
<!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Bukti Pendaftaran</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Invoice</li>
            </ul>
          </div>
          <section class="forms">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xl-10">
                  <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center mb-5">
                    <h1 class="h4 display mb-2 mb-sm-0"> Pendaftaran #20190204</h1>
                    <p class="mb-0">
                      <button class="btn btn-outline-secondary mb-2 mb-sm-0">Download</button>
                      <button class="btn btn-primary mb-2 mb-sm-0">Pay</button>
                    </p>
                  </div>
                  <div class="card card-body p-5">
                    <div class="row">
                      <div class="col text-right">
                        <!-- Badge-->
                        <div class="badge badge-danger">Belum Membayar</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col text-center">
                        <!-- Logo--><img src="http://localhost:8000/adminx/img/brand/brand-1.svg" alt="..." style="max-width: 6rem;" class="img-fluid mb-4">
                        <!-- Heading-->
                        <h2 class="mb-2">Bukti Pendaftaran LSP</h2>
                        <p class="text-muted mb-6">{{$user->nik}}</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <!-- Table-->
                        <div class="table-responsive">
                          <table class="table my-4">
                            <thead>
                              <tr>
                                <th class="px-0 bg-transparent border-top-0"><span class="h6">Description</span></th>
                                <th class="px-0 bg-transparent border-top-0 text-right"><span class="h6">Hours</span></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="px-0">Nama</td>
                                <td class="px-0 text-right">{{$user->nama_lengkap}}</td>
                              </tr>
                              <tr>
                                <td class="px-0">Email</td>
                                <td class="px-0 text-right">{{$user->email}}</td>
                              </tr>
                              <tr>
                                <td class="px-0">NIK</td>
                                <td class="px-0 text-right">{{$user->nik}}</td>
                              </tr>
                              <tr>
                                <td class="px-0">NISN</td>
                                <td class="px-0 text-right">{{$user->nisn}}</td>
                              </tr>
                              <tr>
                                <td class="px-0">Jenis Kelamin</td>
                                <td class="px-0 text-right">{{$user->jenis_kelamin}}</td>
                              </tr>
                              <tr>
                                <td class="px-0">Alamat</td>
                                <td class="px-0 text-right">{{$user->alamat_rumah}}</td>
                              </tr>
                              <tr>
                                <td class="px-0">No HP</td>
                                <td class="px-0 text-right">{{$user->no_hp}}</td>
                              </tr>
                              <tr>
                                <td class="px-0">Tempat Lahir</td>
                                <td class="px-0 text-right">{{$user->tempat_lahir}}</td>
                              </tr>
                              <tr>
                                <td class="px-0">Tanggal Lahir</td>
                                <td class="px-0 text-right">{{$user->tanggal_lahir}}</td>
                              </tr>
                              <tr>
                                <td class="px-0">Negara</td>
   
                              </tr>
                              <tr>
                                <td class="px-0 border-top"><strong>Total amount due</strong></td>
                                <td colspan="2" class="px-0 text-right border-top"><span class="h3">$9533</span></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <hr class="my-5">
                        <h6 class="text-uppercase">Note</h6>
                        <p class="text-muted mb-0">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Your company &copy; 2017-2019</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Version 1.4.5</p>
                </div>
              </div>
            </div>
          </footer>
@endsection