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
    <div class="col-lg-6">      
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Loga dodatkowe</h5>
                <div class="ibox-tools">
                    <button class="btn btn-xs m-b text-light" style="background-color: #d2798d;"  data-toggle="modal" data-target="#logoModal">
                        Dodaj logo dodatkowe
                    </button>
                </div>
            </div>
            <div class="ibox-content">
                @forelse($client->logos as $logo)
                    <form class="delete-form" method="POST" action="{{ route('client-delete-logo', $logo->id) }}">
                        <input type="hidden" name="_method" value="DELETE" />
                        @csrf
                        <button type="submit" class="btn btn-danger btn-xs m-r tooltip-more delete-warning" title="" data-original-title="Usuń">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                        <img src="{{url($logo->path)}}" alt="" height="50">
                    </form>
                @empty
                    <p>Brak loga dodatkowego</p>
                @endforelse
            </div>
        </div>
    </div>
    <div class="modal inmodal show" id="logoModal" tabindex="-1" role="dialog" aria-modal="true">
        <div class="modal-dialog modal-lg">
            <form class="modal-content animated fadeIn" method="post" action="{{ route('client-add-logo', $client->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <button type="button" class="close" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Dodaj logo dodatkowe</h4>
                </div>
                <div class="modal-body">
                    <label for="">Logo dodatkowe</label>
                    <div class="custom-file m-b-sm">
                        <input id="inputGroupFile01" type="file" name="logo" class="custom-file-input">
                        <label class="custom-file-label" for="inputGroupFile01">Wybierz plik</label>
                        <small>Dozwolone formaty plików: .jpg, .png, .jpeg, .svg</small> <br>
                        <small class="text-danger">Logo dodatkowe musi być plikiem typu jpg, jpeg, png, svg.</small>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" class="close" data-dismiss="modal" aria-label="Close">Anuluj</button>
                    <button type="submit" class="btn btn-primary">Zapisz</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                const form = this;
                swal({   
                    title: "Usunąć?",   
                    text: "Elementu nie będzie się dało odzyskać!",   
                    type: "warning",   
                    showCancelButton: true,   
                    confirmButtonColor: "#DD6B55",   
                    confirmButtonText: "Usuń",   
                    cancelButtonText: "Nie usuwaj",   
                    closeOnConfirm: false 
                }, function(isConfirm){   
                    if (isConfirm) {
                        form.submit();
                    } 
                });
            });
        });
    </script>
@endsection
