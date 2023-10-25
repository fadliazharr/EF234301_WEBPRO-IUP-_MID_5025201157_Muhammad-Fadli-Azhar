@extends('layouts.mainnofooter')
@section('container')

<div class="container pt-2">

    <div class="card border-0 shadow rounded">
        <div class="card-body">
            <form action="{{ route('add-kos') }}" method="post">
                @csrf
                <!-- Name input -->
                <div class="form-group mb-1">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control 
                    @error('name')border-danger @enderror" required
                    value="{{ old('name') }}"/>
                    
                    @error('name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Slug input -->
                <div class="form-group mb-1">
                    <label for="name">Slug</label>
                    <input type="text" id="slug" name="slug" class="form-control 
                    @error('slug')border-danger @enderror" placeholder="Pisahkan dengan -" 
                    required value="{{ old('slug') }}" />

                    @error('slug')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <!-- Description input -->
                <div class="form-group mb-1">
                    <label for="name">Description</label>
                    <textarea type="text" id="description" name="description" class="form-control 
                    @error('description')border-danger @enderror"
                    required>{{ old('description') }}</textarea>
            
                    @error('description')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <!-- Price input -->
                <div class="form-group mb-1">
                    <label for="name">Price</label>
                    <input type="number" id="price" name="price" class="form-control 
                    @error('price')border-danger @enderror"
                    required value="{{ old('price') }}" />
            
                    @error('price')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <!-- Phone input -->
                <div class="form-group mb-1">
                    <label for="name">Phone</label>
                    <input type="text" id="phone" name="phone" class="form-control"
                    placeholder="Tidak menggunakan prefix 0 atau 62 (Ex: 812345678)" @error('phone')border-danger @enderror" 
                    required value="{{ old('phone') }}" />
            
                    @error('phone')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <!-- Image input -->
                <div class="form-group mb-1">
                    <label for="name">Image URL</label>
                    <input type="url" id="image" name="image" class="form-control 
                    @error('image')border-danger @enderror"
                    required value="{{ old('image') }}" />
            
                    @error('image')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <!-- Email input -->
                <div class="form-group mb-1">
                    <label for="name">Address</label>
                    <input type="text" id="address" name="address" class="form-control 
                    @error('address')border-danger @enderror" 
                    required value="{{ old('address') }}" />
            
                    @error('address')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <!-- Email input -->
                <div class="form-group mb-1">
                    <label for="name">Maps</label>
                    <input type="text" id="maps" name="maps" class="form-control 
                    @error('maps')border-danger @enderror"
                    required value="{{ old('maps') }}" />
            
                    @error('maps')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            
                <!-- Submit button -->
                <div class="row">
                    <div class="col d-grid">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                    <div class="col d-grid">
                        <a href="{{ route('dashboard') }}" class="btn btn-secondary btn-block">Back</a>
                    </div>
                    
                </div>
            
            </form>
        </div>
    </div>

</div>

@endsection