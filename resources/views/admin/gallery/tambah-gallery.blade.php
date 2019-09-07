@extends('layout.admin')
@section('content')
<!-- Page Header-->
<header class="page-header">
	<div class="container-fluid">
		<h2 class="no-margin-bottom">Multiple files upload</h2>
	</div>
</header>
<!-- Breadcrumb-->
<div class="breadcrumb-holder container-fluid">
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="index.html">Home</a></li>
		<li class="breadcrumb-item active">Multiple files upload</li>
	</ul>
</div>
<section>
	<div class="container-fluid">
		<div class="card">
			<div class="card-header">
				<h4>Multiple files upload - Dropzone.js</h4>
			</div>
			<div class="card-body">
				<p>DropzoneJS is an open source library that provides drag’n’drop file uploads with image previews.</p>
				<p>It’s lightweight, doesn’t depend on any other library (like jQuery) and is highly customizable.</p>
				<div class="row">
					<div class="col-xl-8">
						<form id="demo-upload" action="/upload" class="dropzone">
							<div class="dz-message">
								<p>Drop files here or click to upload.</p>
								<p><span class="note">(This is just a demo dropzone. Selected files are <STRONG>not</STRONG> actually uploaded.)</span></p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- JavaScript files-->
<script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/jquery/jquery.min.js"></script>
<!-- Dropzone.js-->
<script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/dropzone/min/dropzone.min.js"></script>
<!-- Dropzone Init-->
<script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/js/forms-dropzone.js">   </script>
@endsection