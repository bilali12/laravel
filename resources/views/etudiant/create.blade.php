@extends('layout.app')
@section('content')

    <div class="container col-md-6">
        <a href="{{route('etudiant.index')}}" class="btn btn-primary">Liste</a>
        <div class="card">
            <div class="card-header">
                <h2>Formulaire d'ajout</h2>
            </div>
            <div class="card-body">
                <form action="/store" method="POST" class="form-group">
                    @csrf
                    <label for="">Prenom</label>
                    <input type="text" name="prenom" class="form-control">
                    <label for="">Nom</label>
                    <input type="text" name="nom" class="form-control">
                    <label for="">Matiere</label>
                    <select name="matiere" id=""class="form-control">
                        <option value="--choix matiere--" selected>--choix matiere--</option>
                        @foreach ($matieres as $matiere )
                        <option value="{{$matiere->id}}">{{$matiere->nom_matiere}}</option>
                        @endforeach
                    </select>
                    <label for="">Note</label>
                    <input type="number" min="0" max="20" name="note" class="form-control">
                    <label for="">Examen</label>
                    <input type="number" min="0" max="20" name="examen" class="form-control">

                    <label for="">Semestre</label>
                    <select name="semestre" id="" class="form-control">
                        <option value="--choix semestre--" selected>--choix semestre--</option>
                        @foreach ($semestres as $semestre )
                        <option value="{{$semestre->id}}">{{$semestre->nom_semestre}}</option>
                        @endforeach
                    </select>

                    <button type="submit" class="btn btn-success">Enrgistrer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
