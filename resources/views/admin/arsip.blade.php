<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@extends('admin.layout')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Temukan Gerai Terdekat kami di lokasi anda</h1>
                    </div>

                    <!--Google map-->
                    <div id="map-container-google-3" class="z-depth-1-half map-container-3">
                        <iframe src="https://maps.google.com/maps?q=warsaw&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                        style="border:0" allowfullscreen></iframe>
                    </div>

                    <br>

                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">
                                PT. Linknet Second Media</h5>
                            <small>3 days ago</small>
                          </div>
                          <p class="mb-1">PT Linknet Firstmedia Komp. Ruko, Komp. Megacom Jl. Kapten Muslim.</p>
                          <small>Buka ⋅ Tutup pukul 17.00</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">
                                Sales Wifi, Second Media, Pendaftaran</h5>
                            <small class="text-body-secondary">3 days ago</small>
                          </div>
                          <p class="mb-1">Jl. Sei Batang Serangan No.97
                        </p>
                          <small class="text-body-secondary">Layanan di tempat·
                            Janji temu online</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Pasang First Media</h5>
                            <small class="text-body-secondary">3 days ago</small>
                          </div>
                          <p class="mb-1">Jl. Galang · 0812-7880-7761</p>
                          <small class="text-body-secondary">Buka 24 jam.</small>
                        </a>
                      </div>

                </div>
                <!-- /.container-fluid -->  

@endsection