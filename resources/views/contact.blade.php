@extends('master.layout')

@section('title')
    Contact Dewan Ambalan Gajah Mada
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="text-primary mt-5">Kontak Dewan Ambalan Gajah Mada</h2>
            <p class="lead">Kami siap membantu Anda. Jangan ragu untuk menghubungi kami atau mengikuti kami di media sosial!</p>
        </div>
    </div>

    <!-- Contact Information Section -->
    <div class="row mt-5">
        <div class="col-md-6">
            <h4 class="text-info">Informasi Kontak</h4>
            <ul class="list-group">
                <li class="list-group-item"><strong>Email:</strong> info@dewanambalangajamada.org</li>
                <li class="list-group-item"><strong>Telepon:</strong> (021) 123-4567</li>
                <li class="list-group-item"><strong>Alamat:</strong> SMK PGRI 2 Ponorogo, Jl. Raya No. 10, Ponorogo, Jawa Timur</li>
            </ul>
        </div>

        <!-- Contact Form Section -->
        <div class="col-md-6">
            <h4 class="text-info">Kirim Pesan</h4>
            <form method="POST" action="{{ route('contact') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Anda" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email Anda" required>
                </div>
                <div class="form-group">
                    <label for="message">Pesan</label>
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Tulis pesan Anda" required></textarea>
                </div>
                <button type="submit" class="btn btn-success btn-lg">Kirim Pesan</button>
            </form>
        </div>
    </div>

    <!-- Social Media Section -->
    <div class="row mt-5 text-center">
        <div class="col-md-12">
            <h4 class="text-info">Ikuti Kami di Media Sosial</h4>
            <p>Jangan lewatkan informasi terbaru dan acara menarik kami dengan mengikuti kami di media sosial!</p>
            <a href="https://www.instagram.com/dewanambalangajamada" target="_blank" class="btn btn-danger btn-lg mx-2">
                <i class="fab fa-instagram"></i> Instagram
            </a>
            <a href="https://www.tiktok.com/@dewanambalangajamada" target="_blank" class="btn btn-dark btn-lg mx-2">
                <i class="fab fa-tiktok"></i> TikTok
            </a>
        </div>
    </div>

</div>
@endsection
