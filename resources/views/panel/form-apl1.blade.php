@extends('layout.panel')
@section('content')
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Forms</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Forms</li>
            </ul>
          </div>
          <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">APL 1</h3>
                    </div>
                    <div class="card-body">
                      <form action="/daftar/save" class="form-horizontal" method="POST">
                        @csrf
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label"><label style="color: red">*</label>NIK</label>
                          <div class="col-sm-9">
                            <input type="number" name="nik" class="form-control" placeholder="Nomor Induk Kependudukan" required>
                            <small class="help-block-none">
                            *NIK terdiri dari 16 digit. Contoh: 2018030116104552
                            </small>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label"><label style="color: red">*</label>NISN</label>
                          <div class="col-sm-9">
                            <input type="number" name="nisn" class="form-control" placeholder="Nomor Induk Siswa Nasional" required>
                            <small class="help-block-none">
                            *NISN terdiri dari 10 digit. Contoh: 0010301161
                            </small>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label"><label style="color: red">*</label>Email</label>
                          <div class="col-sm-9">
                            <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                            <small class="help-block-none">
                            *Contoh: kurniawan.firman94@gmail.com
                            </small>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label"><label style="color: red">*</label>Nama Lengkap</label>
                          <div class="col-sm-9">
                            <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required>
                            <small class="help-block-none">
                              *Contoh: Firmansyah Helmi Kurniawan
                            </small>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label"><label style="color: red">*</label>Tempat Lahir</label>
                          <div class="col-sm-9">
                            <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
                            <small class="help-block-none">
                              *Contoh: Jakarta
                            </small>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label"><label style="color: red">*</label>Tanggal Lahir</label>
                          <div class="col-sm-9">
                            <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" required>
                            <small class="help-block-none">
                              *Format Tanggal/Bulan/Tahun. Contoh: 27/09/2001
                            </small>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label"><label style="color: red">*</label>Jenis Kelamin</label>
                          <div class="col-sm-9">
                            <select name="jenis_kelamin" class="form-control mb-3">
                              <option>Pilih</option>
                              <option value="laki-laki">Laki-laki</option>
                              <option value="perempuan">Perempuan</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label"><label style="color: red">*</label>Kebangsaan</label>
                          <div class="col-sm-9">
                            <input type="text" name="kebangsaan" class="form-control" placeholder="Negara Kebangsaan" required>
                            <small class="help-block-none">
                              *Contoh: Indonesia
                            </small>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label"><label style="color: red">*</label>Alamat Rumah</label>
                          <div class="col-sm-9">
                            <textarea name="alamat_rumah" class="form-control" placeholder="Alamat Rumah" required></textarea>
                            <small class="help-block-none">
                              *Contoh: Jl. Mayjen Soetoyo, Cawang, Kramatjati, RT.2/RW.9 13630
                            </small>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">No Telepon</label>
                          <div class="col-sm-9">
                            <input type="number" name="no_telp" class="form-control" placeholder="No Telepon Rumah">
                            <small class="help-block-none">
                              *Contoh: 0218091773. Kosongkan jika tidak ada.
                            </small>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">No Kantor</label>
                          <div class="col-sm-9">
                            <input type="number" name="no_telp" class="form-control" placeholder="No Telepon Kantor">
                            <small class="help-block-none">
                              *Contoh: 0218091773. Kosongkan jika tidak ada.
                            </small>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label"><label style="color: red">*</label>No HP</label>
                          <div class="col-sm-9">
                            <input type="number" name="no_hp" class="form-control" placeholder="No HP">
                            <small class="help-block-none">
                              *Contoh: 081586843522
                            </small>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label"><label style="color: red">*</label>Pendidikan Terakhir</label>
                          <div class="col-sm-9">
                            <select name="pendidikan_terakhir" class="form-control mb-3">
                              <option>Pilih</option>
                              <option value="sd">SD</option>
                              <option value="smp">SMP</option>
                              <option value="sma">SMA/SMK</option>
                              <option value="d1">D1</option>
                              <option value="d2">D2</option>
                              <option value="d3">D3</option>
                              <option value="s1">S1</option>
                              <option value="s2">S2</option>
                              <option value="s3">S3</option>
                            </select>
                            <small class="help-block-none">
                              *Pendidikan terakhir saat mendaftar.
                            </small>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label"><label style="color: red">*</label>Judul Sertifikasi</label>
                          <div class="col-sm-9">
                            <input type="text" name="judul_sertifikasi" class="form-control" placeholder="Judul Sertifikasi" required>
                            <small class="help-block-none">
                              *Contoh: 081586843522
                            </small>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label"><label style="color: red">*</label>Nomor Sertifikasi</label>
                          <div class="col-sm-9">
                            <input type="text" name="nomor_sertifikasi" class="form-control" placeholder="Nomor Sertifikasi" required>
                            <small class="help-block-none">
                              *Contoh: 081586843522
                            </small>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Tujuan Asesmen<br></label>
                          <div class="col-sm-9">
                            <div class="i-checks">
                              <input id="radioCustom1" type="radio" value="sertifikasi" name="tujuan_asesmen" class="radio-template">
                              <label for="radioCustom1">Sertifikasi</label>
                            </div>
                            <div class="i-checks">
                              <input id="radioCustom2" type="radio" checked="" value="sertifikasi ulang" name="tujuan_asesmen" class="radio-template">
                              <label for="radioCustom2">Sertifikasi Ulang</label>
                            </div>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Page Footer-->
          
@endsection