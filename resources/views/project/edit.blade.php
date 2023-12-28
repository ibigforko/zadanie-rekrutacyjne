@extends('layouts.mbt')
@section('content')
    <div class="col-lg-6">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Edytuj projekt</h5>
            </div>
            <form class="ibox-content" method="post" action="{{ route('project-update', $project->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="row form-row m-b">
                    @include('project._form')
                </div>
                <a href="{{ route('project-index') }}" class="btn btn-default">Powrót</a>
                <button type="submit" class="btn btn-primary">Zapisz</a>
            </form>
        </div>
    </div>
@endsection
