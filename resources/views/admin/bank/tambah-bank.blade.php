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
            <h4>Tambah Akun Bank</h4>
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
                <label>Nama Bank</label>
                <input name="nama_bank" type="text" placeholder="Nama Bank" required data-msg="Silahkan masukkan nama bank" class="form-control">
              </div>
              <div class="form-group">
                <label>No Rekening</label>
                <input name="no_rekening" type="number" placeholder="No Rekening" required data-msg="Silahkan masukkan nomor rekening yang valid" class="form-control">
              </div>
              <div class="form-group">
                <label>Nama Pemilik</label>
                <input name="nama_pemilik" type="text" placeholder="Nama Pemilik" required data-msg="Silahkan masukkan nama pemilik bank" class="form-control">
              </div>
              <div class="form-group">
                <label>Logo Bank</label>
                <input name="logo_bank" type="file" placeholder="Nama Pemilik" required data-msg="Silahkan masukkan logo bank" class="form-control">
              </div>
              <div class="form-group">
                <input type="submit" value="Tambah Bank" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection