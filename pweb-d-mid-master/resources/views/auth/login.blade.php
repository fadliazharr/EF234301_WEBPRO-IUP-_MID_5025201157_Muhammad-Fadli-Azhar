@extends('layouts.mainnofooter')
@section('container')

<div class="container pt-5">
    <h1 class="text-center display-3 fw-bolder">Login</h1>

    <div class="container col-4 mt-5">
        @if (session()->has('status'))
        <div class="row text-danger text-center pb-1">
            {{ session('status') }}
        </div>
        @endif

        <form action="{{ route('login') }}" method="post">
            @csrf
            <!-- Email input -->
            <div class="row form-outline mb-4">
                <input type="email" name="email"id="email" class="form-control" placeholder="Email address" required/>
                
                @error('email')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
          
            <!-- Password input -->
            <div class="row form mb-4">
                <input type="password" name="password" id="password" class="form-control " placeholder="Password " required/>
                
                @error('password')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
          
            <!-- Submit button -->
            <div class="row">
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
            </div>
          
            <!-- Register buttons -->
            <div class="text-center">
                <p>Belum punya akun? <a href="/register">Register</a></p>
            </div>
        </form>
    </div>

</div>

@endsection