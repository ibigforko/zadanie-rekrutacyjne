@extends('layouts.mbt')
@section('content')
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Klienci</h5>
            </div>

            <div class="ibox-content">
                <div class="m-b">
                    <a href="{{ route('client-create') }}" class="btn btn-primary"><i class="fas fa-plus"
                            aria-hidden="true"></i> Dodaj klienta</a>
                </div>


                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nazwa</th>
                            <th>NIP</th>
                            <th class="text-right">Opcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $client)
                            <tr>
                                <td>{{$client->name}}</td>
                                <td>{{$client->tax_no}}</td>
                                <td class="text-right">

                                    <a type="button" class="btn btn-primary btn-xs tooltip-more" href="{{route('client-edit', $client->id)}}" data-original-title="Edytuj"><i class="fas fa-pen" aria-hidden="true"></i></a>
                                    <a type="button" class="btn btn-danger btn-xs tooltip-more" href="{{route('client-destroy', $client->id)}}" data-original-title="Usuń"><i class="fas fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
