@extends('layouts.main')

@section('body')
    <div class="result">
        <div class="tujuan">
            Search result for {{ $keyword['From'] }} - {{ $keyword['To'] }}
            <div class="class">
                {{ $keyword['kelas'] }}
            </div>
            <br>
            Friday, June 15th | 1 Travellers
        </div>
    </div>

    <div class="tgl">
        <div class="row">
            <div class="col">
                <button>Fri, June 15th</button>
            </div>
            <div class="col">
                <button>Sat, June 16th</button>
            </div>
            <div class="col">
                <button>Sun, June 17th</button>
            </div>
            <div class="col">
                <button>Mon, June 18th</button>
            </div>
            <div class="col">
                <button>Tue, June 19th</button>
            </div>
            <div class="col">
                <a href="#"><span class="material-symbols-outlined">
                        calendar_month
                    </span></a>
            </div>
        </div>
    </div>

    <div class="tiket">
        <div class="row">
            @foreach ($result as $item)
                <div class="col-12 my-3">
                    <div class="row">
                        <div class="col">
                            <img src="img/dumai.png" alt="Dumai Express" style="margin-right: 2%">
                            <b>{{ $item->namaKapal }}</b>
                        </div>
                        <div class="col">
                            <b style="font-size: 20px">{{ Carbon\Carbon::parse($item->berangkat)->format('H:i') }}</b><br>
                            {{ Carbon\Carbon::parse($item->tanggal)->isoFormat('dddd, D MMMM Y') }}
                        </div>
                        <div class="col" style="margin-left: -7%;">
                            Estimated Time
                            <span class="material-symbols-outlined" style="font-size: 18px">
                                schedule
                            </span>
                        </div>
                        <div class="col">
                            <b style="font-size: 20px">{{ Carbon\Carbon::parse($item->sampai)->format('H:i') }}</b><br>
                            {{ Carbon\Carbon::parse($item->tanggal)->isoFormat('dddd, D MMMM Y') }}
                        </div>
                        <div class="col" style="font-size: 20px; margin-right: -5%;">
                            <b>Rp.{{ number_format($item->harga) }}</b>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col" style="margin-left: 7%;">
                            <b>{{ $item->namaAgen }}</b>
                        </div>
                        <div class="col" style="margin-left: -4.5%; font-size: 18px">
                            {{ $item->asal }}
                        </div>
                        <div class="col" style="margin-left: 1%; margin-right: 2%; font-size: 18px">
                            4h
                        </div>
                        <div class="col" style="margin-left: -5%; font-size: 18px">
                            {{ $item->tujuan }}
                        </div>
                        <div class="col">
                            <form action="/pay">
                            @csrf
                                <input class="form-control" type="hidden" name="ferryID" value="{{ $item->id }}">
                                <button class="book" type="submit"><b>BOOKING</b></button>
                            </form>
                        </div>
                    </div>
                </div>
                <hr style="background-color:white; height: 8px;">
            @endforeach
        </div>
    </div>

    <div class="filter">
        <h4>FILTERS</h4>
        <p>Price Range</p>
        {{-- <label for="harga" class="form-label">Price Range</label> --}}
        <input type="range" class="form-range" min="0" max="10" step="0.2" id="harga">
        <p>Depart Time</p>
        <button>
            <span class="material-symbols-outlined">
              partly_cloudy_day
             </span>
            Before 6am
        </button>
        <button>
            <span class="material-symbols-outlined">
                sunny
            </span>
            12pm - 6pm
        </button>
        <button>
            <span class="material-symbols-outlined">
              cloud
            </span>
            After 6pm
        </button>
        <button>
            <span class="material-symbols-outlined">
              nights_stay
            </span>
            Before 6am
        </button>

        <p>Ship</p>
        <div class="agen">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Batam jet
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Dumai Express
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Miko Natalia
                </label>
            </div>
        </div>
    </div>
@endsection