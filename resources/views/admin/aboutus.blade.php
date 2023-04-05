@extends('admin.layout')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">About Us</h1>
                </div>

                <!-- Illustrations -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Seputar Tentang Perusahaan Kami</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                src="{{ asset('img/undraw_posting_photo.svg')}}" alt="...">
                        </div>
                        <p>PT kami Second Media Tbk adalah perusahaan publik Indonesia yang terdaftar di Bursa Efek Indonesia. 
                            Second Media menyediakan jasa layanan internet pita lebar, televisi kabel dan komunikasi data yang secara keseluruhan diperkenalkan sebagai "Triple Play".
                                Second Media merupakan penyedia layangan sambungan internet pita lebar berkecepatan tinggi pertama di Indonesia dan sebagai penyedia layanan tv kabel. Second Media berdiri pertama kali pada tahun 1994 dengan nama PT Broadband Multimedia Tbk. Produk awal perusahaan ini adalah Kabelvison, Digital1 dan MyNet. 
                                Pada tahun 1999 perusahaan ini diambil alih oleh PT Anditirta Indonesusa. Setahun berselang, perusahaan ini akhirnya berhasil untuk mencatatkan sahamnya untuk pertama kali di Bursa Efek Surabaya melalui penawaran umum perdana. Hal ini juga disertai dengan pembukaan cabang baru di Bali dan Surabaya. Selain itu, perusahaan ini juga meluncurkan layanan akses internet broadband serta melakukan ekspansi jaringan.</p>
                        <a target="_blank" rel="nofollow" href="https://www.firstmedia.com/">Selengkapnya Tentang
                            Kami &rarr;</a>
                    </div>
                </div>

                </div>
                <!-- /.container-fluid -->  

@endsection