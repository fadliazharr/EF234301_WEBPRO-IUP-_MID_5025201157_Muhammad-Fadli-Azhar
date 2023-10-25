{{-- @dd($reviews) --}}

@extends('layouts.main')
@section('container')

<div class="container col-md-8 pt-5 mb-5">
    <div class="row">
        <h1 class="display-4 fw-semibold">Siapa kami?</h1>
        <p>
 Work Space menawarkan ruang kerja yang nyaman di wilayah kota Anda. Work Space didirikan pada 5 Agustus 2014, 
dan sejak saat itu, perusahaan ini telah tumbuh menjadi penyedia ruang kerja terkemuka di Indonesia. 
Work Space menggunakan teknologi untuk mengelola dan menyajikan daftar ruang kerja dengan penjelasan fasilitas yang sangat terperinci. Saat ini, 
kami memiliki lebih dari 500 ruang kerja yang tersebar di lebih dari 100 kota di seluruh Indonesia. Kami berkomitmen untuk 
memberikan data ketersediaan ruang kerja yang akurat, sehingga calon pengguna akan lebih mudah dalam mencari ruang kerja."
        </p>
    </div>
    
    <div class="row mt-3">
        <h3 class="display-6 fw-semibold">Team Members</h3>
        <section class=" text-center p-2 mb-2">
            <img class="rounded-circle" src="/img/profil.jpeg" alt="Fadli" width="170" />
            <h2 class="">Muhammad Fadli Azhar</h2>
            <p class="lead">5025201157 | Informatics ITS</p>
        </section>

    </div>
</div>


{{-- <div class="container">
    @foreach ($reviews as $review)
    <h2>{{ $review["name"] }}</h2>
    <h5>{{ $review["job"] }}</h5>
    <p>{{ $review["body"] }}</p>
    @endforeach
</div> --}}
  <!-- Carousel wrapper -->

@endsection