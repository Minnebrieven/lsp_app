@extends('layout.panel')
@section('content')
<!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Invoice</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Invoice</li>
            </ul>
          </div>
          <section class="forms">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xl-10">
                  <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center mb-5">
                    <h1 class="h4 display mb-2 mb-sm-0"> Invoice #20190204</h1>
                    <p class="mb-0">
                      <button class="btn btn-outline-secondary mb-2 mb-sm-0">Download</button>
                      <button class="btn btn-primary mb-2 mb-sm-0">Pay</button>
                    </p>
                  </div>
                  <div class="card card-body p-5">
                    <div class="row">
                      <div class="col text-right">
                        <!-- Badge-->
                        <div class="badge badge-danger">Belum Membayar</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col text-center">
                        <!-- Logo--><img src="http://localhost:8000/adminx/img/brand/brand-1.svg" alt="..." style="max-width: 6rem;" class="img-fluid mb-4">
                        <!-- Heading-->
                        <h2 class="mb-2">Invoice from LSP.</h2>
                        <p class="text-muted mb-6">Invoice #20190204</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <h6 class="text-uppercase text-muted">Invoiced from</h6>
                        <p class="text-muted mb-4"><strong class="text-body">Franz Kafka</strong><br>                    Bank Clerk<br>                    Nerudova 23<br>                    111 50 Praha</p>
                        <h6 class="text-uppercase text-muted">Invoiced ID</h6>
                        <p class="mb-4">#20190204</p>
                      </div>
                      <div class="col-12 col-md-6 text-md-right">
                        <h6 class="text-uppercase text-muted">Invoiced to</h6>
                        <p class="text-muted mb-4"><strong class="text-body">Jack London</strong><br>                    Lonely Wolf<br>                    1150 Lost St.<br>                    Middle of Nowhere</p>
                        <h6 class="text-uppercase text-muted">Due date</h6>
                        <p class="mb-4">
                          <time datetime="2018-04-23">Feb 23, 2019</time>
                        </p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <!-- Table-->
                        <div class="table-responsive">
                          <table class="table my-4">
                            <thead>
                              <tr>
                                <th class="px-0 bg-transparent border-top-0"><span class="h6">Description</span></th>
                                <th class="px-0 bg-transparent border-top-0"><span class="h6">Hours</span></th>
                                <th class="px-0 bg-transparent border-top-0 text-right"><span class="h6">Cost</span></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="px-0">Novel proofreading</td>
                                <td class="px-0">50</td>
                                <td class="px-0 text-right">$9230</td>
                              </tr>
                              <tr>
                                <td class="px-0">Consulting</td>
                                <td class="px-0">3</td>
                                <td class="px-0 text-right">$333</td>
                              </tr>
                              <tr>
                                <td class="px-0 border-top"><strong>Total amount due</strong></td>
                                <td colspan="2" class="px-0 text-right border-top"><span class="h3">$9533</span></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <hr class="my-5">
                        <h6 class="text-uppercase">Note</h6>
                        <p class="text-muted mb-0">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Your company &copy; 2017-2019</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Version 1.4.5</p>
                </div>
              </div>
            </div>
          </footer>
@endsection