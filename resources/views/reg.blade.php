@extends('layouts.main')

@section('body')

    <div class="header" style="height: 50vh">
      <h3>Join us now, <br>to make you at ease</h3>
    </div>

    <div class="Auth">
        <h6>Welcome To <b style="color: #80B3FF">TripQu</b></h6>
        <h2><b>Sign Up</b></h2>
        <div class="reg">
            <h6><b>Already Sign Up?</b></h6>
            <h6><b><a href="/login" style="color: #80B3FF">Login</a></b></h6>
        </div>
        <form action="/register" method="POST">
          @csrf
            <div class="row">
              <div class="col">
                <div class="mb-3 mt-5">
                  <label for="namdep" class="form-label">First Name</label>
                  <input type="text" class="form-control" name="name" placeholder="First Name" >
                </div>
              </div>
              <div class="col">
                <div class="mb-3 mt-5">
                  <label for="nambel" class="form-label">Surname</label>
                  <input type="text" class="form-control" name="surname" placeholder="Surname">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                  <label for="nik" class="form-label">NIK</label>
                  <input type="number" class="form-control" name="nik" placeholder="NIK">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label for="pass" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
              </div>
            </div>
          <button class="butlog" type="submit"><b>Sign Up</b></button>
        </form>
    </div>

@endsection