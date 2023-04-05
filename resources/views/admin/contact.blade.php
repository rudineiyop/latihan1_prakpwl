<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@extends('admin.layout')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Tertarik Bergabung Dengan Kami??</h1>
                </div>


                <!-- Dropdown No Arrow -->
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Daftarkan Diri Anda Segera Disini</h6>
                    </div>
                    <div class="card-body">
                        <div class="dropdown no-arrow mb-4">
                            <a href="#" class="btn btn-primary" role="button" data-bs-toggle="button">Facebook Kami</a>
                            <a href="#" class="btn btn-success" role="button" data-bs-toggle="button">Whatsapp Kami</a>
                            <a href="#" class="btn btn-danger" role="button" data-bs-toggle="button">Instagram Kami</a>
                            <a href="#" class="btn btn-info" role="button" data-bs-toggle="button">Twitter Kami</a>
                        </div>
                        Nikmati Kelancaraan Internet di Rumahmu Setiap Saat.
                        <div>
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                        src="{{ asset('img/daftar.jpg')}}" alt="...">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                        src="{{ asset('img/daftar2.jpg')}}" alt="...">
                    </div>
                    </div>
                   

                </div>


            



                </div>
                <!-- /.container-fluid -->  

@endsection