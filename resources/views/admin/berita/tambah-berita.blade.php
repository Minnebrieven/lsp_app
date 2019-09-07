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
            <h4>Tambah Berita</h4>
          </div>
          <div class="card-body">
            <form class="form-validate" method="POST" action="/admin/proses-tambah-berita">
              @csrf
              <div class="form-group">
                @if ($message = Session::get('sukses'))
                <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{{ $message }}</strong>
                </div>
                @endif
                <label>Judul</label>
                <input name="judul" type="text" placeholder="Judul Berita" required data-msg="Silahkan masukkan judul berita" class="form-control">
              </div>
              <div class="form-group">
                <label>Isi</label>
                <textarea name="isi" type="text" placeholder="Isi Berita" required data-msg="Silahkan masukkan isi berita" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <label>Gambar</label>
                <input name="gambar" type="file" placeholder="Gambar" required data-msg="Silahkan masukkan gambar berita" class="form-control">
              </div>
              <div class="form-group">
                <input type="submit" value="Tambah Berita" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection