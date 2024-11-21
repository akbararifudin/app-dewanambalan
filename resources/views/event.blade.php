@extends('master.layout')

@section('title')
    Event Dewan Ambalan Gajah Mada
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="text-primary mt-5">Event Dewan Ambalan Gajah Mada</h2>
            <p class="lead">Temukan berbagai acara penting yang akan datang untuk anggota Pramuka Dewan Ambalan Gajah Mada!</p>
        </div>
    </div>

    <!-- Upcoming Events Section -->
    <div class="row mt-5">
        <div class="col-md-12">
            <h3 class="text-info text-center">Acara Mendatang</h3>
            <div class="row">
                
                <!-- RAIMUNA -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="RAIMUNA">
                        <div class="card-body">
                            <h5 class="card-title">RAIMUNA (Rapat Kerja Nasional Pramuka)</h5>
                            <p class="card-text">RAIMUNA adalah acara tahunan yang mempertemukan Pramuka dari seluruh Indonesia. Acara ini akan diadakan untuk membahas isu-isu penting dalam dunia kepramukaan dan mempererat persaudaraan antar anggota pramuka di seluruh Indonesia.</p>
                            <p><strong>Tanggal:</strong> 10-12 Desember 2024</p>
                            <p><strong>Tempat:</strong> Candi Prambanan, Yogyakarta</p>
                            <a href="#" class="btn btn-primary">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Pelantikan Bantara -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Pelantikan Bantara">
                        <div class="card-body">
                            <h5 class="card-title">Pelantikan Bantara</h5>
                            <p class="card-text">Pelantikan Bantara adalah acara sakral bagi anggota yang telah menyelesaikan latihan dan memenuhi syarat untuk naik tingkat. Acara ini menjadi momen penting dalam perjalanan setiap anggota pramuka.</p>
                            <p><strong>Tanggal:</strong> 5 Januari 2025</p>
                            <p><strong>Tempat:</strong> SMK PGRI 2 Ponorogo</p>
                            <a href="#" class="btn btn-primary">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Pelantikan Laksana -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Pelantikan Laksana">
                        <div class="card-body">
                            <h5 class="card-title">Pelantikan Laksana</h5>
                            <p class="card-text">Pelantikan Laksana adalah acara yang mengukuhkan anggota Pramuka yang telah mencapai tingkat Laksana. Tingkat ini merupakan simbol kedewasaan dan kepemimpinan dalam organisasi.</p>
                            <p><strong>Tanggal:</strong> 15 Januari 2025</p>
                            <p><strong>Tempat:</strong> SMK PGRI 2 Ponorogo</p>
                            <a href="#" class="btn btn-primary">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Tugas Akhir Pramuka -->
    <div class="row mt-5">
        <div class="col-md-12">
            <h3 class="text-info text-center">Tugas Akhir Pramuka</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Tugas Akhir Pramuka">
                        <div class="card-body">
                            <h5 class="card-title">Tugas Akhir Pramuka</h5>
                            <p class="card-text">Tugas Akhir Pramuka adalah tahap terakhir bagi anggota yang ingin menyelesaikan pendidikan Pramuka di tingkat yang lebih tinggi. Pada acara ini, para peserta akan menunjukkan kemampuan dan keterampilan yang telah mereka pelajari selama menjadi anggota Pramuka.</p>
                            <p><strong>Tanggal:</strong> 20 Februari 2025</p>
                            <p><strong>Tempat:</strong> SMK PGRI 2 Ponorogo</p>
                            <a href="#" class="btn btn-primary">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Other Events Section -->
    <div class="row mt-5">
        <div class="col-md-12 text-center">
            <h3 class="text-warning">Acara Lainnya</h3>
            <p class="lead">Selain acara utama, kami juga mengadakan berbagai kegiatan yang bisa diikuti oleh anggota Dewan Ambalan Gajah Mada, antara lain:</p>
            <ul class="list-group">
                <li class="list-group-item">Pelatihan Kepemimpinan</li>
                <li class="list-group-item">Bakti Sosial Pramuka</li>
                <li class="list-group-item">Perkemahan Akhir Tahun</li>
                <li class="list-group-item">Lomba Pramuka Antar Sekolah</li>
            </ul>
        </div>
    </div>

</div>
@endsection
