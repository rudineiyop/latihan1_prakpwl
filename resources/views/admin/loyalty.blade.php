<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@extends('admin.layout')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Loyalty</h1>
                </div>

                 <!-- Illustrations -->
                 <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Loyalty Yang Kami Berikan</h6>
                    </div>
                    <div class="card-body">
                        <p>Kami memberikan Loyalty maupun penawaran-penawaran yang menarik untuk pelanggan setia kami.
                            Silahkan check loyalty anda disini 
                        </p>
                        <a target="_blank" rel="nofollow" href="https://www.firstmedia.com/">Selengkapnya Tentang
                            Kami &rarr;</a>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card h-100">
                        <img src="{{ asset('img/benner.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Get Free Unlimited User Access Berita Satu Newsstand</h5>
                          <p class="card-text">Berita Satu • E-Paper</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Berlaku Sampai 31 Dec 2022</small>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="{{ asset('img/benner.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Scan your payment and Get styles points!</h5>
                          <p class="card-text">Styles • Lifestyle</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Berlaku Sampai 31 Jan 2022</small>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="{{ asset('img/benner.webp')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Voucher WAWA Rp 25.000 dari First Media!</h5>
                          <p class="card-text">WAWA GAMES • Game</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Berlaku Sampai 30 Sept 2022</small>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
                <!-- /.container-fluid -->  

@endsection