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
                            <b>Dumai Line</b>
                        </div>
                        <div class="col">
                            <b style="font-size: 20px">{{ Carbon\Carbon::parse($item->berangkat)->format('h:i') }}</b><br>
                            {{ Carbon\Carbon::parse($item->tanggal)->isoFormat('dddd, D MMMM Y') }}
                        </div>
                        <div class="col" style="margin-left: -7%;">
                            Estimated Time
                            <span class="material-symbols-outlined" style="font-size: 18px">
                                schedule
                            </span>
                        </div>
                        <div class="col">
                            <b style="font-size: 20px">{{ Carbon\Carbon::parse($item->sampai)->format('h:i') }}</b><br>
                            {{ Carbon\Carbon::parse($item->tanggal)->isoFormat('dddd, D MMMM Y') }}
                        </div>
                        <div class="col" style="font-size: 20px; margin-right: -5%;">
                            <b>Rp.{{ number_format($item->harga) }}</b>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col" style="margin-left: 7%;">
                            <b>Dumai Express <br>Group</b>
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
                            <a href="/pay"><button class="book"><b>BOOKING</b></button></a>
                        </div>
                    </div>
                </div>
                <hr style="background-color:white; height: 8px;">
            @endforeach
        </div>


    </div>
@endsection
