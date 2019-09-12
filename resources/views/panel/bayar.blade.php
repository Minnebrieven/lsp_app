@extends('layout.panel')
@section('content')
<!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Data Table</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Data Table</li>
            </ul>
          </div>
          <section>
            <div class="container-fluid">
              <div class="card">
                <div class="card-header">
                  <h4>Data Table</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="datatable1" style="width: 100%;" class="table">
                      <thead>
                        <tr>
                          <th>No Sertifikasi</th>
                          <th>Judul Sertifikasi</th>
                          <th>Nama Lengkap</th>
                          <th>No Telepon</th>
                          <th>Tujuan Asesmen</th>
                          <th>NIK</th>
                        </tr>
                      </thead>
                      @php
                        $data = \App\Apl01::where('user_id', Auth::user()->id)->get();
                      @endphp
                      @foreach($data as $d)
                      <tbody>
                        <tr>
                          <td><a href="javascript:void(0)" class="text-muted">{{$d->nomor_sertifikasi}}</a></td>
                          <td>{{$d->judul_sertifikasi}}</td>
                          <td>{{$d->nama_lengkap}}</td>
                          <td>{{$d->no_telp}}</td>
                          <td>{{$d->tujuan_asesmen}}</td>
                          <td>{{$d->nik}}</td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </section>
@endsection