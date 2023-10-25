@extends('layouts.mainnofooter')
@section('container')

<div class="container pt-5">
    <h1 class="text-center display-3 fw-bolder">Register</h1>

    <div class="container col-4 mt-5">
        <form action="{{ route('register') }}" method="post">
            @csrf
            <!-- Name input -->
            <div class="row form-outline mb-4">
                <input type="text" id="name" name="name" class="form-control 
                @error('name')border-danger @enderror" placeholder="Name" required
                value="{{ old('name') }}"/>
                
                @error('name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Username input -->
            <div class="row form-outline mb-4">
                <input type="text" id="username" name="username" class="form-control 
                @error('username')border-danger @enderror" placeholder="Username" 
                required value="{{ old('username') }}" />

                @error('username')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <!-- Email input -->
            <div class="row form-outline mb-4">
                <input type="email" id="email" name="email" class="form-control 
                @error('email')border-danger @enderror" placeholder="Email address" 
                required value="{{ old('email') }}" />
          
                @error('email')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            
            <!-- Password input -->
            <div class="row form mb-4">
                <input type="password" id="password" name="password" class="form-control @error('password')border-danger @enderror" placeholder="Password" required/>
          
                @error('password')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Repeat password -->
            <div class="row form mb-4">
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Repeat password" required/>
            </div>
          
            <!-- Submit button -->
            <div class="row">
                <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
            </div>
          
            <!-- Register buttons -->
            <div class="text-center">
                <p>Sudah punya akun? <a href="/login">Login</a></p>
            </div>
        </form>
    </div>

</div>

@endsection