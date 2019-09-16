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
								<th>No Sertifikasi</th>
								<th>Invoice</th>
								<th>No Rekening</th>
								<th>Harga</th>
								<th>Tanggal</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							@foreach($transaksi as $b)
							<tr>
								<td><a href="/admin/detail-transaksi/{{$b->nomor_sertifikasi}}" class="text-muted">{{$b->nomor_sertifikasi}}</a></td>
								<td>{{$b->invoice}}</td>
								<td>{{$b->nomor_rekening}}</td>
								<td>{{$b->harga}}</td>
								<td>{{$b->tanggal}}</td>
								@if($b->status == 'BELUM LUNAS')
								<td style="color: red">{{$b->status}}</td>
								@endif
								@if($b->status == 'LUNAS')
								<td style="color: green">{{$b->status}}</td>
								@endif
								@if($b->status == 'DITOLAK')
								<td style="color: blue">{{$b->status}}</td>
								@endif
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