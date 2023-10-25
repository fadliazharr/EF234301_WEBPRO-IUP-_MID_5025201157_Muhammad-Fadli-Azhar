@extends('layouts.main')
@section('container')

<div class="container  pt-3">
    <div class="row">
        <a class="fs-5 text-decoration-none text-muted " onclick="history.back()" role="button">Back</a>
    </div>
    <div class="row mt-3">
        <div class="col-4 ">
            <div class="row ">
                <div class="">
                    <img src="{{ $kos->image }}" alt="slug" class="img-fluid rounded-3}"/>
                </div>
            </div>
            <div class="row d-grid pt-3">
                <h2>Kontak</h2>   
                <div href="https://wa.me/62{{ $kos->phone }}" class="first-color d-flex">          
                    <div class="col-1 ">
                        <i class="fs-2 fa fa-whatsapp"></i>
                    </div>
                    <div class="col  d-grid">
                        <p class="my-auto">0{{ $kos->phone }}</p>
                    </div>
                </div>       
            </div>
        </div>
        <div class="col px-3 ">
            <div class="row ">
                <h1>{{ $kos->name }}</h1>
            </div>
            <div class="row  text-muted fs-5 fw-semibold">
                <p>Rp{{ number_format($kos->price, 2, ',', '.') }}</p>
            </div>
            <div class="row ">
                <h5 class="first-color ">Alamat</h5>
                <p>{{ $kos->address }} | 
                    <a href="{{ $kos->maps }}" class="text-decoration-none first-color">Open in Google Maps</a></p>
            </div>
            <div class="row ">
                <h5 class="first-color ">Deskripsi</h5>
                <p>{{ $kos->description }}</p>
            </div>
    
        </div>
    </div>
    
</div>

@endsection