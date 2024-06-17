@extends('layouts.main')

@section('body')

    <div class="kepala">
        <h3>Who's Travelling?</h3>
    </div>

    <div class="detail">
        @if($errors->any())
            {{ implode('', $errors->all('<div>:message</div>')) }}
        @endif
        @foreach ($pay as $item)
            <h5><b>Departure</b></h5>
            <div class="row">
                <div class="col">
                    <span class="material-symbols-outlined">
                        directions_boat
                    </span>
                </div>
                <div class="col" style="font-size: 20px; margin-left: -89%; margin-top:-2px">
                    <b>{{ Carbon\Carbon::parse($item->berangkat)->format('H:i') }}</b>
                </div>
                <div class="col" style="font-size: 16px; margin-left: -85%; margin-top: 2px">
                    <b>{{ ($item->asal) }}</b>
                    <div class="kelas"><b>{{ ($item->kelas) }}</b></div>
                </div>
            </div>
            <div class="row">
                <div class="col" style="margin-left: 2.3%">
                    <b>{{ Carbon\Carbon::parse($item->tanggal)->isoFormat('dddd, D MMMM Y') }} | 1 Traveller</b>
                </div>
            </div>
            <div class="row" style="font-size: 18px">
                <div class="col" style="margin-left: 2.3%; color: #b6b6b6">
                    <span class="material-symbols-outlined" style="color: #b6b6b6">
                        schedule
                    </span>
                    <b>4h</b>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <span class="material-symbols-outlined">
                        location_on
                    </span>
                </div>
                <div class="col" style="font-size: 20px; margin-left: -89%; margin-top:-2px">
                    <b>{{ Carbon\Carbon::parse($item->sampai)->format('H:i') }}</b>
                </div>
                <div class="col" style="font-size: 16px; margin-left: -85%; margin-top: 2px;;">
                    <b>{{ ($item->tujuan) }}</b>
                    <div class="kelas"><b>{{ ($item->kelas) }}</b></div>
                </div>
            </div>
            <div class="row">
                <div class="col" style="margin-left: 2.3%">
                    <b>{{ Carbon\Carbon::parse($item->tanggal)->isoFormat('dddd, D MMMM Y') }} | 1 Traveller</b>
                </div>
            </div>
            <form method="POST" action="/book" enctype="multipart/form-data">
                @csrf
                <h5><b>Traveller</b></h5>
                <div class="row">
                    <div class="col">
                        <span class="material-symbols-outlined" style="font-size: 28px">
                            person
                        </span>
                        <div class="row" style="margin-top: -30px">
                                <div class="mb-3 col-2" style="margin-left: -4.6%;">
                                    {{-- <input class="form-control" type="hidden" name="id" value="{{ Auth()->user()->id }}"> --}}
                                    <label for="name" class="form-label"><b>First Name</b></label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ Auth()->user()->name }}">
                                </div>
                                <div class="mb-3 col-2">
                                    <label for="surname" class="form-label"><b>Last Name</b></label>
                                    <input type="text" class="form-control" id="surname" name="surname" value="{{ Auth()->user()->surname }}"> 
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col" style="margin-left: 3%; margin-top: -15px">
                        <div class="mb-3 col-2 ">
                            <label for="nik" class="form-label"><b>NIK</b></label>
                            <input type="number" class="form-control" id="nik" name="nik" value="{{ Auth()->user()->nik }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col" style="margin-left: 3%; margin-top: -15px">
                        <div class="mb-3 col-2 ">
                            <label for="email" class="form-label"><b>Email</b></label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ Auth()->user()->email }}">
                        </div>
                    </div>
                </div>

                <h5><b>Payment</b></h5>
                <div class="row" id="payment">
                    <div class="col">
                        <a  onclick="showQRIS()">
                            <img src="img/qris.png">
                        </a>
                    </div>
                    <div class="col">
                        <a  onclick="showQRIS()">
                            <img src="img/spay.png">
                        </a>
                    </div>
                    <div class="col">
                        <a  onclick="showQRIS()">
                            <img src="img/gopay.png">
                        </a>
                    </div>
                    <div class="col">
                        <a  onclick="showQRIS()">
                            <img src="img/ovo.png">
                        </a>
                    </div>
                </div>
                <div id="qris" style="display: none" class="pay">
                    <b>TOTAL<br></b>
                        <b>Rp {{ number_format($item->harga) }}</b><br>
                    <img src="img/qrspay.jpg" style="width: 15%; height:auto; margin-top: -5px">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Bukti Transfer</label>
                        <input class="form-control @error('buktitf') is-invalid @enderror" type="file" name="buktitf" id="image">
                        @error('buktitf')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <input class="form-control" type="hidden" name="ferryID" value="{{ $item->id }}">
                        <button type="submit">BOOK</button>
                    </div>
                </div>  
            </form>  
        @endforeach
    </div>
    <script>
        function showQRIS()
        {
            document.getElementById('qris').style.display = "block";
        }
    </script>
@endsection