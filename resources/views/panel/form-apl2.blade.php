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
            <h3 class="h4">APL 2</h3>
          </div>
          <div class="card-body">
            <form class="form-horizontal">
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
              <div class="line"></div>
              <h4 class="mt-5 mb-4">Skema Sertifikasi/ Klaster Asesmen</h4>
              <div class="form-group row">
                <div class="col-md-6">
                  <label class="form-control-label"><label style="color: red">*</label>Judul</label>
                  <input type="text" name="nama_lengkap" class="form-control" placeholder="Judul" required>
                </div>
                <div class="col-md-6">
                  <label class="form-control-label"><label style="color: red">*</label>Nomor</label>
                  <input type="text" name="nama_lengkap" class="form-control" placeholder="Nomor" required>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label class="form-control-label"><label style="color: red">*</label>TUK</label>
                  <input type="text" name="nama_lengkap" class="form-control" placeholder="TUK" required>
                  <small class="help-block-none">
                  *Contoh: Firmansyah Helmi Kurniawan
                  </small>
                </div>
                <div class="col-md-6">
                  <label class="form-control-label"><label style="color: red">*</label>Nama Asesor</label>
                  <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Asesor" required>
                  <small class="help-block-none">
                  *Contoh: Firmansyah Helmi Kurniawan
                  </small>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label class="form-control-label"><label style="color: red">*</label>Nama Peserta</label>
                  <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Peserta" required>
                </div>
                <div class="col-md-6">
                  <label class="form-control-label"><label style="color: red">*</label>Tanggal</label>
                  <input type="date" name="nama_lengkap" class="form-control" placeholder="Tanggal" required>
                </div>
              </div>
              <div class="line"></div>
              <h4 class="mt-5 mb-4">Informasi</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="card text-white bg-primary">
                    <div class="card-header card-header-transparent">FR-APL-02  ASESMEN MANDIRI</div>
                    <div class="card-body">
                      <h5 class="card-title">Peserta diminta untuk:</h5>
                      <p class="card-text text-white">
                        1.  Mempelajari Kriteria Unjuk Kerja  (KUK), Batasan Variabel, Panduan Penilaian, dan Aspek Kritis seluruh Unit Kompetensi yang diminta untuk di Ases. <br>
                        2.  Melaksanakan Penilaian Mandiri secara obyektif atas sejumlah pertanyaan yang diajukan, bilamana Anda menilai diri sudah kompeten atas pertanyaan tersebut, tuliskan tanda &#8730; pada kolom (K), dan bilamana Anda menilai diri belum kompeten tuliskan tanda &#8730; pada kolom (BK). <br>
                        3.  Mengisi bukti-bukti kompetensi yang relevan atas sejumlah pertanyaan yang dinyatakan Kompeten (bila ada). <br>
                        4.  Menandatangani form Asesmen Mandiri.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="line"></div>
              <h4 class="mt-5 mb-4">Unit Kompetensi No. 1</h4>
              <div class="form-group row">
                <div class="col-md-3">
                  <label class="form-control-label"><label style="color: red">*</label>Kode Unit</label>
                  <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Peserta" required value="M.692000.001.02">
                </div>
                <div class="col-md-9">
                  <label class="form-control-label"><label style="color: red">*</label>Judul Unit</label>
                  <input type="text" name="nama_lengkap" class="form-control" placeholder="Tanggal" required value="Menerapkan Prinsip-prinsip Praktik Profesional dalam Bekerja">
                </div>
              </div>
              <div class="line"></div>
              <h4 class="mt-5 mb-4">Elemen Kompetensi:<br>
              1.  Mengidentifikasi luas, sektor dan tanggung jawab industry
              </h4>
              {{-- <div class="form-group row">
                <label class="col-sm-3 form-control-label"><label style="color: red">*</label>Nomor KUK</label>
                <div class="col-sm-9">
                  <label class="form-control-label"><label style="color: red">*</label>Daftar Pertanyaan
                  (Asesmen Mandiri/Self  Assessment)
                </label>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 form-control-label">1.1</label>
              <div class="col-sm-9">
                <textarea class="form-control">Apakah anda dapat mengidentifikasI aspek-aspek eksternal yang mempengaruhi profesi teknisi akuntansi dalam menjalankan pekerjaan?
                </textarea>
                <small class="help-block-none">
                *NIK terdiri dari 16 digit. Contoh: 2018030116104552
                </small>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 form-control-label">Penilaian<br></label>
              <div class="col-sm-9">
                <div class="i-checks">
                  <input id="radioCustom1" type="radio" value="option1" name="a" class="radio-template">
                  <label for="radioCustom1">K</label>
                </div>
                <div class="i-checks">
                  <input id="radioCustom2" type="radio" checked="" value="option2" name="a" class="radio-template">
                  <label for="radioCustom2">BK</label>
                </div>
              </div>
            </div> --}}
            <div class="row">
                <div class="col-md-12">
                  <div class="card text-white bg-primary">
                    <div class="card-header card-header-transparent">Daftar Pertanyaan (Asesmen Mandiri/Self  Assessment)</div>
                    <div class="card-body">
                      <h5 class="card-title">Nomor KUK 1.1</h5>
                      <p class="card-text text-white">
                        Apakah anda dapat mengidentifikasI aspek-aspek eksternal yang mempengaruhi profesi teknisi akuntansi dalam menjalankan pekerjaan?
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row">
              <label class="col-sm-3 form-control-label">PENILAIAN<br></label>
              <div class="col-sm-9">
                <div class="i-checks">
                  <input id="radioCustom1" type="radio" value="option1" name="a" class="radio-template">
                  <label for="radioCustom1">K</label>
                </div>
                <div class="i-checks">
                  <input id="radioCustom2" type="radio" checked="" value="option2" name="a" class="radio-template">
                  <label for="radioCustom2">BK</label>
                </div>
              </div>
            </div>
            <div class="line"></div>
              <div class="row">
                <div class="col-md-12">
                  <div class="card text-white bg-primary">
                    <div class="card-header card-header-transparent">Daftar Pertanyaan (Asesmen Mandiri/Self  Assessment)</div>
                    <div class="card-body">
                      <h5 class="card-title">Nomor KUK 1.2</h5>
                      <p class="card-text text-white">
                        Apakah anda dapat  mengidentifikasi peran dan tanggung  jawab berbagai pihak yang terlibat dalam profesi teknisi akuntansi dalam menjalankan pekerjaan?
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row">
              <label class="col-sm-3 form-control-label">PENILAIAN<br></label>
              <div class="col-sm-9">
                <div class="i-checks">
                  <input id="radioCustom1" type="radio" value="option1" name="a" class="radio-template">
                  <label for="radioCustom1">K</label>
                </div>
                <div class="i-checks">
                  <input id="radioCustom2" type="radio" checked="" value="option2" name="a" class="radio-template">
                  <label for="radioCustom2">BK</label>
                </div>
              </div>
            </div>
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