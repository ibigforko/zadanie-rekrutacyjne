@extends('layouts.mbt')
@section('content')
    <div class="col-lg-6">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Dodaj klienta</h5>
            </div>
            <form class="ibox-content" method="post" action="{{ route('client-store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row form-row m-b">
                    @include('client._form')
                    <div class="col-12 m-b-sm">
                        <label class="m-t">Logo</label>
                        <input type="file" class="form-control" name="logo">
                    </div>
                </div>
                <a href="{{ route('client-index') }}" class="btn btn-default">Powrót</a>
                <button type="submit" class="btn btn-primary">Zapisz</a>
            </form>
        </div>
    </div>
@endsection
