@extends('layouts.main')

@section('body')
    <div class="header" style="background-image: url('img/kapal.jpg'); background-size: cover; background-position:center center; background-blend-mode: darken">
        <h6>Explore with TripQu</h6>
        @php
          $t=date("H");
          if($t < 12) $message = 'morning';
          else if($t < 18) $message = 'afternoon';
          else $message = 'evening';
        @endphp
        <h2>Good {{ $message }}, where do you want to go?</h2>
    </div>

    <form action="/search" name="cari">
      <div class="srch">
          <select class="type form-select"  name="kelas">
              <option selected>Ferry Class</option>
              @foreach ($kelas as $item)
                <option value="{{ $item }}">{{ $item }}</option>
              @endforeach
          </select>
          <div class="input-group">
              <div class="form-floating mb-3">
                  <input type="text" class="form-control @error('From') is-invalid @enderror" name="From" placeholder="From">
                  <label for="floatingInput">From</label>
              </div>

              <div class="form-floating mb-3">
                  <input type="text" class="form-control @error('To') is-invalid @enderror" name="To" placeholder="To">
                  <label for="floatingInput">To</label>
              </div>

              <div class="form-floating mb-3">
                  <input type="date" class="form-control" name="Date" placeholder="date">
                  <label for="floatingInput">Date</label>
              </div>

          </div>
          <button class="cari" type="submit">Search</button>
      </div>
    </form>
    <div class="pop">
        <h1><b>Popular Destination</b></h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
          </div>
          <br><br>
    </div>
@endsection
