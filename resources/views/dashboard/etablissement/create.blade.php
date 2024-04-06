@extends('base')

@section('title', 'Ajout établissement')

@section('content')
    <div class="card position-absolute top-50 start-50 translate-middle">
        <div class="card-header text-center">
            Ajout d'un établissement
        </div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="titre">Nom</label>
                            <input type="text" class="form-control" name="nom" value="{{ old('nom') }}">
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
                                    <option value="{{ $key }}">{{$value}}</option>
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
                            <input type="text" class="form-control" name="adresse" value="{{ old('adresse') }}">
                            @error('adresse')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="ville">Ville</label>
                            <input type="text" class="form-control" name="ville" value="{{ old('ville') }}">
                            @error('ville')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group text-center mt-3">
                        <button class="btn btn-primary">Ajouter</button>
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
        @if (session('success'))
            <div class="card-footer text-muted">
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            </div>
        @endif
    </div>
@endsection
