@extends('master')

@section('content')
    <section id="portofolio" class="portofolio">
        <h2>My <span>Portofolio</span></h2>

        <div class="row">
            <div class="portofolio-card">
                <img src="../assets/img/sertifikat-dicoding.jpg" alt="image" class="portofolio-card-img">
                <a href="../assets/document/Sertifikat pertama Dicoding.pdf" class="portofolio-card-title">- Dicoding Certificate #1 (Dasar Pemograman Web) -</a>
            </div>
            <div class="portofolio-card">
                <img src="../assets/img/sertifikat-dicoding.jpg" alt="image" class="portofolio-card-img">
                <a href="../assets/document/Sertifikat Kedua Dicoding (Dasar Visualisasi Data).pdf" class="portofolio-card-title">- Dicoding Certificate #2 (Dasar Visualisasi Data) -</a>
            </div>
            <div class="portofolio-card">
                <img src="../assets/img/first-website.png" alt="image" class="portofolio-card-img">
                <a href="#" class="portofolio-card-title">- Website #1 -</a>
            </div>
        </div>
    </section>
@endsection