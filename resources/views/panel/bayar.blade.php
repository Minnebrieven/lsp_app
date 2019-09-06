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
                  		<div class="form-group">
                  			STATUS: BELUM DIBAYAR
                  		</div>
                  	</div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Harga</label>
                        <input type="text" placeholder="" data-mask="999 99 999 9999 9" class="form-control"><small class="help-block-none">999 99 999 9999 9</small>
                      </div>
                      <div class="form-group">
                        <label>ISBN 3</label>
                        <input type="text" placeholder="" data-mask="999/99/999/9999/9" class="form-control"><small class="help-block-none">999/99/999/9999/9</small>
                      </div>
                      <div class="form-group">
                        <label>IPV4</label>
                        <input type="text" placeholder="" data-mask="999.999.999.9999" class="form-control"><small class="help-block-none">192.168.110.310</small>
                      </div>
                      <div class="form-group">
                        <label>IPV6</label>
                        <input type="text" placeholder="" data-mask="wwww:wwww:wwww:w:www:wwww:wwww:wwww" class="form-control"><small class="help-block-none">4deg:1340:6547:2:540:h8je:ve73:98pd</small>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Tanggal</label>
                        <input type="text" placeholder="" data-mask="99-9999999" class="form-control"><small class="help-block-none">99-9999999</small>
                      </div>
                      <div class="form-group">
                        <label>Phone</label>
                        <input type="text" placeholder="" data-mask="(999) 999-9999" class="form-control"><small class="help-block-none">(999) 999-9999</small>
                      </div>
                      <div class="form-group">
                        <label>Currency</label>
                        <input type="text" placeholder="" data-mask="$ 999,999,999.99" class="form-control"><small class="help-block-none">$ 999,999,999.99</small>
                      </div>
                      <div class="form-group">
                        <label>Date</label>
                        <input type="text" placeholder="" data-mask="99/99/9999" class="form-control"><small class="help-block-none">dd/mm/yyyy</small>
                      </div>
                      <div class="form-group m-b-0">
                        <label>Date 2</label>
                        <input type="text" placeholder="" data-mask="99-99-9999" class="form-control"><small class="help-block-none">dd-mm-yyyy                                    </small>
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