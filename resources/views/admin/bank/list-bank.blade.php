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
								<th>Name</th>
								<th>Company</th>
								<th>Email</th>
								<th>Phone</th>
								<th>City</th>
								<th>Orders</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><a href="javascript:void(0)" class="text-muted">Nielsen Cobb</a></td>
								<td>Memora</td>
								<td>nielsencobb@memora.com</td>
								<td>+1 (851) 552-2735</td>
								<td>Graniteville</td>
								<td>0                                                 </td>
							</tr>
							<tr>
								<td><a href="javascript:void(0)" class="text-muted">Margret Cote</a></td>
								<td>Zilidium</td>
								<td>margretcote@zilidium.com</td>
								<td>+1 (893) 532-2218</td>
								<td>Foxworth</td>
								<td>2                                                 </td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection