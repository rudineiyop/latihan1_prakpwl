<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@extends('admin.layout')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Second Media</h1>
                </div>

                <figure class="figure">
                    <img src="{{ asset('img/depan.webp')}}" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">Penawaran ini terbatas</figcaption>
                </figure>

                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title" style="color: blue"><b>Streaming, gaming, dan beraktivitas sepuasnya</b></h5>
                      <p class="card-text">Dapatkan lebih dari 200 TV channel, bonus akses OTT dan cashback hingga 2,4 juta, plus bonus cloud storage 20 GB selama 12 bulan serta gratis biaya pasang.</p>
                      <a href="#" class="btn btn-primary">Berlangganan Sekarang</a>
                    </div>
                  </div>


                </div>
                <!-- /.container-fluid -->  

@endsection