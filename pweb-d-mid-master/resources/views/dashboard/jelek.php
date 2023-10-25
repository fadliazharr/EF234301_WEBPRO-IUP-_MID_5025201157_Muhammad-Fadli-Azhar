@extends('layouts.mainnofooter')
@section('container')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <!-- Notifikasi menggunakan flash sessiond ata -->
            @if (session('success')) 
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            @if (session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
            @endif

            <div class="card border-0 shadow rounded">
                <div class="card-body">

                    <form action="{{ route('add-kos') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') border-danger @enderror" 
                                name="name" value="{{ old('name') }}" required>

                            <!-- Error message untuk name -->

                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control @error('slug') border-danger @enderror" 
                                name="slug" value="{{ old('slug') }}" required>

                            <!-- Error message untuk slug -->

                            @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea
                                name="description" id="description"
                                class="form-control @error('description') border-danger @enderror"
                                rows="3"
                                required>{{ old('description') }}</textarea>

                            <!-- Error message untuk description -->
                            @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control @error('price') border-danger @enderror" 
                                name="price" value="{{ old('price') }}" required>

                            <!-- Error message untuk price -->

                            @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" min="1" step="1" class="form-control @error('phone') border-danger @enderror" 
                                name="phone" value="{{ old('phone') }}" required>

                            <!-- Error message untuk phone -->

                            @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Image URL</label>
                            <input type="text" min="1" step="1" class="form-control @error('image') border-danger @enderror" 
                                name="image" value="{{ old('image') }}" required>

                            <!-- Error message untuk image -->

                            @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" min="1" step="1" class="form-control @error('address') border-danger @enderror" 
                                name="address" value="{{ old('address') }}" required>

                            <!-- Error message untuk address -->

                            @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="maps">Google Maps URL</label>
                            <input type="text" min="1" step="1" class="form-control @error('maps') border-danger @enderror" 
                                name="maps" value="{{ old('maps') }}" required>

                            <!-- Error message untuk maps -->

                            @error('maps')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <button type="submit" class="btn btn-md btn-success">Save</button>
                                <a href="{{ route('dashboard') }}" class="btn btn-md btn-secondary">Back</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
