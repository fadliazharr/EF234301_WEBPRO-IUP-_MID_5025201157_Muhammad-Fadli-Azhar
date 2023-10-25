@extends('layouts.main')
@section('container')
<div class="container pt-5">
    <h1 class="text-center">Catalog</h1>

    @foreach ($kos as $k)
    <div id="{{ $k->slug }}" class="row justify-content-center align-content-center">
        <div class="col-lg-3 col-md-6 col-8 m-3 align-items-center">
            <img src="{{ $k->image }}" alt="{{ $k->slug }}" class="img-fluid rounded-3" />
        </div>
        <div class="col-lg-6 m-3 d-flex align-items-center">
            <div class="col">
                <a class="text-decoration-none" href="/view/{{ $k->slug }}">
                    <h3 class="">{{ $k->name }}</h3>
                    <p class="text-muted">Detail></p>
                </a>
                <p class="fs-5">Rp{{ number_format($k->price, 2, ',', '.') }}</p>
                <a class="fs-5 d-flex flex-row align-items-center text-decoration-none" href="{{ $k["maps"] }}">
                    <div class="col-1">
                        <i class="fs-2 fa-solid fa-map-location-dot pe-3"></i>
                    </div>
                    <div class="col">
                        <p class="m-0">{{ $k->address }}</p>
                    </div>
                </a>
                <a class="fs-5 d-flex flex-row align-items-center text-decoration-none" href="https://wa.me/62{{ $k["telepon"] }}">
                    <div class="col-1">
                        <i class="fs-2 fa fa-whatsapp pe-3"></i>
                    </div>
                    <div class="col">
                        <p class="m-0">0{{ $k->phone }}</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection