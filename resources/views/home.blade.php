@extends('master.layout')

@section('title')
    Home | Dewan Ambalan Gajah Mada
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12" style="padding-top: 20px;">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if($errors->any())
                @foreach($errors->all() as $err)
                    <div class="alert alert-danger">
                        {{ $err }}
                    </div>
                @endforeach
            @endif

            <!-- Hero Section -->
            <div class="text-center">
                <img src="assets/image/dewan.png" class="img-fluid rounded" alt="Hero Image" height="500" width="500">
                <h1 class="display-4 text-primary">Selamat datang di Website</h1>
                <h1 class="display-4 text-primary">Dewan Ambalan Gajah Mada</h1>
                <p class="lead">Organisasi Pramuka SMK PGRI 2 Ponorogo</p>
                <p class="lead">Temukan konten menarik, informasi terkini, dan kesempatan untuk bergabung bersama kami!</p>
            </div>

            <!-- About Us Section -->
            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <h2 class="text-info">Tentang Kami</h2>
                    <p class="lead">Dewan Ambalan Gajah Mada adalah organisasi Pramuka yang berada di SMK PGRI 2 Ponorogo. Kami bertujuan untuk membina, mendidik, dan mengembangkan potensi kepemimpinan serta karakter generasi muda melalui kegiatan pramuka yang penuh makna dan menyenangkan.</p>
                    <p class="lead">Kami berkomitmen untuk menciptakan pemimpin masa depan yang memiliki integritas, disiplin, dan kepedulian sosial. Bergabunglah dengan kami dan rasakan manfaat menjadi bagian dari keluarga besar Pramuka!</p>
                </div>
            </div>

            <!-- History & Values Section -->
            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <h2 class="text-warning">Sejarah & Nilai-Nilai Pramuka</h2>
                    <p class="lead">Pramuka adalah gerakan kepanduan yang didirikan untuk membentuk karakter dan keterampilan generasi muda. Dewan Ambalan Gajah Mada mengemban amanah ini dengan semangat untuk mendidik pemuda Indonesia menjadi pribadi yang cerdas, berani, dan siap menghadapi tantangan hidup.</p>
                    <p class="lead">Kami mengajarkan nilai-nilai seperti: <strong>kejujuran, keberanian, solidaritas, kerja sama, dan cinta tanah air.</strong></p>
                </div>
            </div>

            <!-- Events Section -->
            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <h2 class="text-success">Acara Mendatang</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Event 1">
                                <div class="card-body">
                                    <h5 class="card-title">Latihan Keterampilan Pramuka</h5>
                                    <p class="card-text">Kegiatan untuk melatih keterampilan praktis, seperti pertolongan pertama, tali-temali, dan navigasi.</p>
                                    <a href="#" class="btn btn-primary">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Event 2">
                                <div class="card-body">
                                    <h5 class="card-title">Jambore Daerah</h5>
                                    <p class="card-text">Jambore yang mempertemukan pramuka dari seluruh daerah untuk berbagi pengalaman dan pengetahuan.</p>
                                    <a href="#" class="btn btn-primary">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Event 3">
                                <div class="card-body">
                                    <h5 class="card-title">Perkemahan Sabtu-Minggu</h5>
                                    <p class="card-text">Perkemahan untuk melatih kepemimpinan, kerja tim, dan keterampilan di alam terbuka.</p>
                                    <a href="#" class="btn btn-primary">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Member Activities Section -->
            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <h2 class="text-info">Kegiatan Anggota</h2>
                    <p class="lead">Anggota Dewan Ambalan Gajah Mada memiliki kesempatan untuk mengikuti berbagai kegiatan seru yang dapat mengasah keterampilan, membangun kerja tim, dan mempererat persahabatan. Berikut adalah beberapa kegiatan yang rutin kami adakan:</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Perkemahan dan Latihan Kepemimpinan</li>
                        <li class="list-group-item">Pendidikan Kewirausahaan dan Keterampilan</li>
                        <li class="list-group-item">Kegiatan Sosial dan Pengabdian Masyarakat</li>
                        <li class="list-group-item">Jambore Nasional dan Regional</li>
                    </ul>
                </div>
            </div>

            <!-- Alumni Success Stories Section -->
            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <h2 class="text-warning">Cerita Sukses Alumni</h2>
                    <p class="lead">Kami bangga dengan para alumni Dewan Ambalan Gajah Mada yang telah meraih berbagai prestasi di berbagai bidang. Berikut adalah beberapa cerita sukses mereka:</p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-text">"Pramuka mengajarkan saya tentang kepemimpinan yang sejati, yang saya aplikasikan dalam karir saya sebagai seorang pengusaha." - <strong>Alice J.</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-text">"Pengalaman di Pramuka memberikan saya keberanian dan keyakinan diri untuk berkarir di bidang teknologi." - <strong>Rizky A.</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-text">"Pramuka mengajarkan saya pentingnya disiplin dan tanggung jawab, yang sangat berguna dalam dunia kerja." - <strong>Hani S.</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call to Action Section -->
            <div class="text-center mt-5">
                <h3 class="text-warning">Siap Bergabung?</h3>
                <p class="lead">Jika Anda tertarik untuk menjadi bagian dari Dewan Ambalan Gajah Mada, ayo bergabung dan jadilah bagian dari keluarga besar Pramuka kami!</p>
                <a href="#" class="btn btn-success btn-lg">Daftar Sekarang</a>
            </div>

            <!-- Photo Gallery Section -->
            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <h2 class="text-info">Galeri Foto</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/300" class="img-fluid rounded" alt="Gallery 1">
                        </div>
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/300" class="img-fluid rounded" alt="Gallery 2">
                        </div>
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/300" class="img-fluid rounded" alt="Gallery 3">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="mt-5 text-center">
                <h2 class="text-info">Hubungi Kami</h2>
                <p class="lead">Untuk pertanyaan lebih lanjut atau informasi pendaftaran, silakan hubungi kami melalui form atau kontak berikut:</p>
                <p><strong>Email:</strong> info@dewanambalangajamada.org</p>
                <p><strong>Telepon:</strong> (021) 123-4567</p>
                <a href="contact" class="btn btn-secondary btn-lg">Kontak Kami</a>
            </div>
            
        </div>
    </div>
</div>
@endsection
