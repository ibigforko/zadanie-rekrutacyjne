@extends('layouts.mbt')
@section('content')
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Projekty</h5>
            </div>

            <div class="ibox-content">
                <div class="m-b">
                    <a href="{{ route('project-create') }}" class="btn btn-primary"><i class="fas fa-plus"
                            aria-hidden="true"></i> Dodaj projekt</a>
                </div>


                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nazwa</th>
                            <th>Klient</th>
                            <th>Termin</th>
                            <th class="text-right">Opcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{$project->name}}</td>
                                <td>{{$project->customerName()}}</td>
                                <td>{{$project->deadline}}</td>
                                <td class="text-right">

                                    <a type="button" class="btn btn-primary btn-xs tooltip-more" href="{{route('project-show', $project->id)}}" data-original-title="Pokaż"><i class="fas fa-eye" aria-hidden="true"></i></a>
                                    <a type="button" class="btn btn-primary btn-xs tooltip-more" href="{{route('project-edit', $project->id)}}" data-original-title="Edytuj"><i class="fas fa-pen" aria-hidden="true"></i></a>
                                    <a type="button" class="btn btn-danger btn-xs tooltip-more" href="{{route('project-destroy', $project->id)}}" data-original-title="Usuń"><i class="fas fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
