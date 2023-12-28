@extends('layouts.mbt')
@section('content')
    <div class="col-lg-6">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Edytuj klienta</h5>
            </div>
            <form class="ibox-content" method="post" action="{{ route('client-update', $client->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="row form-row m-b">
                    @include('client._form')
                    <div class="col-12 m-b-sm">
                        @if ($client->logo)
                            <label>Aktualne logo</label>
                            <div>
                                <img style="max-width:100%" src="{{ Storage::url($client->logo) }}">
                            </div>
                        @endif
                        <label class="m-t">Zmień logo</label>
                        <input type="file" class="form-control" name="logo">
                    </div>
                </div>
                <a href="{{ route('client-index') }}" class="btn btn-default">Powrót</a>
                <button type="submit" class="btn btn-primary">Zapisz</a>
            </form>
        </div>
    </div>
@endsection
