@extends('base')

@section('title', 'Les ouvrages')

@section('content')
    <div class="text-center mt-3 mb-3">
        <h1>Les établissements</h1>

        <a href="{{ route('gestionnaire.etablissement.create')  }}" class="btn btn-primary">Ajouter un établissement</a>
    </div>

    @if (session('success'))
        <div class="card-footer text-muted">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <ol class="list-group">
        @foreach ($etablissements as $etablissement)
            <li class="list-group-item">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('gestionnaire.etablissement.modify', ['etablissement' => $etablissement->idetablissement]) }}">{{ $etablissement->nom }}</a>
                    </div>
                    <div class="col text-end">
                        <form action="" method="post">
                            @method("DELETE")
                            @csrf
                            <button class="btn btn-sm btn-danger" name="idEtablissement" value="{{$etablissement->idetablissement}}">Supprimer</button>
                        </form>
                    </div>
                </div>
            </li>
        @endforeach
    </ol>
@endsection
