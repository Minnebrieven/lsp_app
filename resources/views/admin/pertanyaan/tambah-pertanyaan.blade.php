@extends('layout.admin')
@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Forms Pertanyaan</h2>
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
            <h4>Tambah Pertanyaan</h4>
          </div>
          <div class="card-body">
            <form class="form-validate" method="POST" action="/admin/proses-tambah-pertanyaan">
              @csrf
              <div class="form-group">
                @if ($message = Session::get('sukses'))
                <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{{ $message }}</strong>
                </div>
                @endif
                <label>Unit Kompetensi</label>
                @php
                    $unit = \App\UnitKompetensi::all();
                @endphp
                <select class="form-control" name="unit_id">
                  @foreach($unit as $u)
                  <option value="{{$u->kode_unit}}">{{$u->nomor}} - {{$u->judul_unit}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Elemen Kompetensi</label>
                <input name="elemen_kompetensi" type="text" placeholder="Elemen Kompetensi" required data-msg="Silahkan masukkan nama bank" class="form-control">
              </div>
              <div class="form-group">
                <label>Nomor KUK</label>
                <input name="kuk" type="number" placeholder="Nomor KUK" required data-msg="Silahkan masukkan nomor rekening yang valid" class="form-control">
              </div>
              <div class="form-group">
                <label>Daftar Pertanyaan</label>
                <textarea name="pertanyaan" type="text" placeholder="Daftar Pertanyaan" required data-msg="Silahkan masukkan nama pemilik bank" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Tambah Pertanyaan" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection