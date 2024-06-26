@extends('base')

@section('title', 'Les ouvrages')

@section('content')
    <div class="text-center mt-3 mb-3">
        <h1>Les ouvrages</h1>

        <a href="{{ route('gestionnaire.ouvrage.create')  }}" class="btn btn-primary">Ajouter un ouvrage</a>
    </div>

    @if (session('success'))
        <div class="card-footer text-muted">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <ol class="list-group">
        @foreach ($ouvrages as $ouvrage)
            <li class="list-group-item">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('gestionnaire.ouvrage.modify', ['ouvrage' => $ouvrage->idouvrage]) }}">{{ $ouvrage->titre }}</a>
                    </div>
                    <div class="col text-end">
                        <form action="" method="post">
                            @method("DELETE")
                            @csrf
                            <button class="btn btn-sm btn-danger" name="idOuvrage" value="{{$ouvrage->idouvrage}}">Supprimer</button>
                        </form>
                    </div>
                </div>
            </li>
        @endforeach
    </ol>
@endsection
