@extends('layout.admin')
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
								<th>NIK</th>
								<th>Nama</th>
								<th>Nomor Sertifikasi</th>
								<th>Email</th>
								<th>No HP</th>
							</tr>
						</thead>
						<tbody>
							@foreach($apl1 as $b)
							<tr>
								<td><a href="javascript:void(0)" class="text-muted">{{$b->nik}}</a></td>
								<td>{{$b->nama_lengkap}}</td>
								<td>{{$b->nomor_sertifikasi}}</td>
								<td>{{$b->email}}</td>
								<td>{{$b->no_hp}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection