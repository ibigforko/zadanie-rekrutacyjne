@extends('layouts.mbt')
@section('content')
    <div class="col-12">
        <div class="ibox">
            <div class="ibox-content">
                <h2>{{ $project->name }}</h2>
                <p>
                    <b>Klient:</b>
                    <br>
                    {{ $project->customerName() }}
                </p>
                <p>
                    <b>Termin:</b>
                    <br>
                    {{ $project->deadline }}
                </p>
            </div>
        </div>
    </div>

    <div class="col-12" >

        <div class="ibox-title">
            Komentarze
        </div>
        <div class="ibox-content" style="padding-top: 10px;">
            <div id="commentComponentApp"></div>
        </div>
    </div>
@endsection
