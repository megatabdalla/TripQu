@extends('layouts.main')

@section('body')

    <div class="header" style="height: 50vh">
    </div>

    <div class="Auth">
        {{-- @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        @if(session()->has('success'))
            <div class="alert alert-primary alert-dismissable fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h6>Welcome To <b style="color: #80B3FF">TripQu</b></h6>
        <h2><b>Log In</b></h2>
        <div class="reg">
            <h6><b>No Account?</b></h6>
            <h6><b><a href="/register" style="color: #80B3FF">Sign Up</a></b></h6>
        </div>
        @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form action="/login" method="POST">
            @csrf
            <div class="logmail mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" id="email" autofocus value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" id="password">
            </div>
            <button class="butlog" type="submit"><b>Log in</b></button>
        </form>

@endsection