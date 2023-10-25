@extends('layouts.mainnofooter')
@section('container')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">

            <!-- Notifikasi menggunakan flash session data -->

                <a href="{{ route('add-kos') }}" class="btn btn-md btn-success mb-3 float-right">
                    Add Product
                </a>

                <table class="table table-bordered mt-1">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Price</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">Created at</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($kos as $k)
                        <tr>
                            <td>{{ $k->id }}</td>
                            <td>{{ $k->name }}</td>
                            <td>{{ $k->slug }}</td>
                            <td>{{ $k->price }}</td>
                            <td>{{ $k->phone }}</td>
                            <td>{{ $k->address }}<br><a href="{{ $k->maps }}">{{ $k->maps }}</a></td>
                            <td>{{ $k->created_at }}</td>
                            {{-- <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>
                                <img src="{{ asset('data_file/'.$product->image) }}" class="rounded mx-auto d-block img-thumbnail" style="height:150px">
                                {{ $product->image}}
                            </td>
                            <td>{{ $product->created_at->format('d-m-Y h:i') }}</td> --}}
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin?');"
                                    action="/dashboard/{{ $k->id }}" method="POST">
                                    @csrf
                                    <div class="d-grid gap-1">
                                        <a href="/dashboard/{{ $k->id }}/edit" class="btn btn-primary btn-block">Edit</a>
                                        <a href="/view/{{ $k->slug }}" class="btn btn-primary btn-block">View</a>
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-block">Delete</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td class="text-center text-mute" colspan="7">Data product tidak tersedia</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
        </div>
    </div>
</div>


@endsection
