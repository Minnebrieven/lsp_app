@extends('layout.panel')
@section('content')
<header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Advanced forms</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Advanced forms</li>
            </ul>
          </div>
          <section>
            <div class="container-fluid">
              <!-- Bootstrap Input Masks-->
              <div class="card">
                <div class="card-header">
                  <h4>Pembayaran</h4>
                </div>
                <div class="card-body">
                  <p>Silahkan Lengkapi Data Dan Ikuti Petunjuk Untuk Melakukan Pembayaran.</p>
                  <div class="row">
                  	<div class="col-lg-6">
                  		<div class="form-group">
                  		<a href="">#Invoice51251</a>
                  		</div>
                  	</div>
                  	<div class="col-lg-6">
                  		<div class="form-group text-red">
                  			BELUM DIBAYAR
                  		</div>
                  	</div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" value="Rp50.000" readonly>
                      </div>
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" value="Firman Kurniawan" readonly>
                      </div>
                      <div class="form-group">
                        <label>Judul Sertifikasi</label>
                        <input type="text" class="form-control" value="Aplikasi Lapor Masyarakat" readonly>
                      </div>
                      <div class="form-group">
                      <label>Metode Pembayaran</label>
                      <select class="form-control">
                        <option>Pilih Metode Pembayaran</option>
                        <option>Cash</option>
                        <option>Bank BRI</option>
                        <option>Bank BCA</option>
                        <option>Bank MANDIRI</option>
                        <option>OVO</option>
                        <option>GOPAY</option>
                        <option>DANA</option>
                      </select>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Tanggal</label>
                        <input type="text" id="date" class="form-control" value="09/09/2019" readonly>
                        <script type="text/javascript">
                          n =  new Date();
                          y = n.getFullYear();
                          m = n.getMonth() + 1;
                          d = n.getDate();
                          document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
                        </script>
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" value="kurniawan.firman94@gmail.com" readonly>
                      </div>
                      <div class="form-group m-b-0">
                        <label>Nomor Sertifikasi</label>
                        <input type="text" class="form-control" value="000626463" readonly>
                      </div>
                      <div class="form-group m-b-0">
                        <label>Nomor Rekening</label>
                        <input type="text" class="form-control" value="BRI - 000626463" readonly>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- JavaScript files-->
    <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/jquery/jquery.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/chart.js/Chart.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Bootstrap Select-->
    <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <!-- Bootstrap Touchspin-->
    <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Bootstrap No UI Slider-->
    <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/nouislider/nouislider.min.js"></script>
    <!-- Bootstrap DatePicker-->
    <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap Tags Input-->
    <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
    <!-- Jasny Bootstrap - Input Masks-->
    <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/jasny-bootstrap/js/jasny-bootstrap.min.js"> </script>
    <!-- MultiSelect-->
    <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/vendor/multiselect/js/jquery.multi-select.js"> </script>
    <!-- Forms init-->
    <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/js/forms-advanced.js"></script>
    <!-- Main File-->
    <script src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/js/front.js"></script>
          </section>
@endsection