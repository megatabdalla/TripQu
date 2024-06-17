<div>
    <h1>Your e-ticker is here!</h1>

    @foreach($cust as $pen)
        <p>Dear <b>{{ $pen->name }} {{ $pen->surname }}</b>,</p>
        <p>Your ferry reservation has been confirmed. Here is your e-ticket regarding of the sail.</p>

        @foreach ($tik as $kapal)
                <h6><b>FERRY DETAIL</b></h6>
                <b>{{ $kapal->namaAgen }}</b><br>
                <b>{{ $kapal->namaKapal }}</b><br>
                <h6><br><b>{{ $kapal->berangkat }} - {{ $kapal->sampai }}</b><br><br></h6>
                <b>{{ $kapal->asal }} - {{ $kapal->tujuan }}</b><br>
                <b>{{ $kapal->pelAsal }} - {{ $kapal->pelTuj }}</b><br>
                <b>{{ $kapal->tanggal }}</b>
        @endforeach

        <br><br>
        We'll be delighted to have you sail with us. We will make sure you arrive safe and sound.
    @endforeach

    {{-- @foreach ($pen as $res)
        <p>Dear <b>{{ $res->name }} {{ $res->surname }}</b>,</p>
        <p>Your ferry reservation has been confirmed. Here is your e-ticket regarding of the sail.</p>

            @foreach ($ferry as $kapal)
                <h6><b>FERRY DETAIL</b></h6>
                <b>{{ $kapal->asal }} - {{ $kapal->tujuan }}</b><br>
                {{ $kapal->berangkat }} - {{ $kapal->sampai }}<br><br>
            @endforeach

        <b>Passengers</b><br>
        {{ $item->name }} {{ $item->surname }}
    @endforeach --}}
</div>