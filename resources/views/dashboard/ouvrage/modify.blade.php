@extends('base')

@section('title', 'Ajout ouvrage')

@section('content')
<div class="card position-absolute top-50 start-50 translate-middle">
    <div class="card-header text-center">
        Ajout d'un ouvrage
    </div>
    <div class="card-body">
        <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="titre">Titre</label>
                        <input type="text" class="form-control" name="titre" value="{{ $ouvrage->titre }}">
                        @error('titre')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="surface">Type de public</label>
                        <input type="text" class="form-control" name="typePublic" value="{{ $ouvrage->typepublic }}">
                        @error('typePublic')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="nbPiece">Classe</label>
                        <input type="text" class="form-control" name="classe" value="{{ $ouvrage->classe }}">
                        @error('classe')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="options">Langue</label>
                        <select name="typeEtab" id="options" class="form-control">
                            @foreach ($langues as $option)
                                <option value="{{$option->codelangue}}" {{$ouvrage->codelangue === $option->codelangue ? 'select' : '' }} >{{$option->nom}}</option>
                            @endforeach
                        </select>
                        @error('langue')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group text-center"><br>
                    <button class="btn btn-primary">Modifier</button>
                </div>
            </div>
            </form>
    </div>
    @if (session('error'))
        <div class="card-footer text-muted">
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        </div>
    @endif
</div>
@endsection
