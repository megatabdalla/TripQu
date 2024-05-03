<div>
    <h1>Your e-ticker is here!</h1>

    @foreach ($pen as $res)
    <p>Dear <b>{{ $res->name }} {{ $res->surname }}</b>,</p>
    <p>Your ferry reservation has been confirmed. Here is your e-ticket regarding of the sail.</p>
    @endforeach

    @foreach ($ferry as $kapal)
    <h6><b>FERRY DETAIL</b></h6>
    <b>{{ $kapal->asal }} - {{ $kapal->tujuan }}</b><br>
    {{ $kapal->berangkat }} - {{ $kapal->sampai }}<br><br>
    @endforeach

    @foreach ($cust as $item)
    <b>Passengers</b><br>
    {{ $item->name }} {{ $item->surname }}
    @endforeach
</div>