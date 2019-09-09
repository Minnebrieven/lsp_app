@extends('layout.admin')
@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Forms Bank</h2>
  </div>
</header>
<!-- Breadcrumb-->
<div class="breadcrumb-holder container-fluid">
  <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item active">Forms Bank</li>
  </ul>
</div>
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4>Tambah Unit Kompetensi</h4>
          </div>
          <div class="card-body">
            <form class="form-validate" method="POST" action="/admin/proses-tambah-bank">
              @csrf
              <div class="form-group">
                @if ($message = Session::get('sukses'))
                <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{{ $message }}</strong>
                </div>
                @endif
                <label>Kode Unit</label>
                <input name="kode_unit" type="text" placeholder="Kode Unit" required data-msg="Silahkan masukkan kode unit" class="form-control">
              </div>
              <div class="form-group">
                <label>Judul Unit</label>
                <input name="judul_unit" type="number" placeholder="Judul Unit" required data-msg="Silahkan masukkan judul unit" class="form-control">
              </div>
              <div class="form-group">
                <label>Jenis Standar (Standar Khusus/ Standar Internasional/SKKNI)</label>
                <input name="jenis_standar" type="text" placeholder="Jenis Standar" required data-msg="Silahkan masukkan jenis standar" class="form-control">
              </div>
              <div class="form-group">
                <input type="submit" value="Tambah Kompetensi" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection