@extends('base')

@section('title', 'Ajout établissement')

@section('content')
    <div class="card position-absolute top-50 start-50 translate-middle">
        <div class="card-header text-center">
            Modification d'un établissement
        </div>
        <div class="card-body">
            <form method="POST" action="">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="titre">Nom</label>
                            <input type="text" class="form-control" name="nom" value="{{ $etablissement->nom }}">
                            @error('nom')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="typeEtab">Type d'établissement</label>
                            <select name="typeEtab" id="options" class="form-select">
                                @foreach ($typeEtab as $key => $value)
                                    <option value="{{ $key }}" {{$etablissement->typeetablissement === $key ? 'selected' : '' }} >{{$value}}</option>
                                @endforeach
                            </select>
                            @error('typeEtab')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="adresse">Adresse</label>
                            <input type="text" class="form-control" name="adresse" value="{{ $etablissement->adresse }}">
                            @error('adresse')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="ville">Ville</label>
                            <input type="text" class="form-control" name="ville" value="{{ $etablissement->ville }}">
                            @error('ville')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group text-center m-3">
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
