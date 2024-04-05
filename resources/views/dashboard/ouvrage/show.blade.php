@extends('base')

@section('title', 'Les ouvrages')

@section('content')
    <h1>Les ouvrages</h1>

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
