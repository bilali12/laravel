@extends('layout.app')
@section('content')


    <div class="container">
        <a href="{{route('etudiant.create')}}" class="btn btn-primary">Ajout</a>
        <div class="card">
            <div class="card-header">
                <h2>Liste des etudiants</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <th>N°</th>
                        <th>Prenom</th>
                        <th>Nom</th>
                        <th>Matiere</th>
                        <th>Note</th>
                        <th>Examen</th>
                        <th>Semestre</th>
                        <th>Moyenne</th>
                    </thead>
                    <tbody>

                        <?php
                            $somme = 0;
                            $cpt = 0;
                            $premier = $etudiants[0];
                        ?>
                        @foreach ($etudiants as $etudiant )
                            <tr>
                                <td>{{$etudiant->id}}</td>
                                <td>{{$etudiant->prenom}}</td>
                                <td>{{$etudiant->nom}}</td>
                                <td>{{$etudiant->matiere_id}}</td>
                                <td>{{$etudiant->note}}</td>
                                <td>{{$etudiant->examen}}</td>
                                <td>{{$etudiant->semestre_id}}</td>
                                <td>{{$moyenne = ($etudiant->note + $etudiant->examen )/ 2}}</td>
                                <?php $somme = $somme + $moyenne;
                                    $cpt = $cpt + 1;
                                    if($moyenne > ($premier->note + $premier->examen)/2 ){
                                        $premier = $etudiant;
                                    }
                                ?>
                            </tr>
                        @endforeach
                        <tr class="bg-success">
                            <td>Moyenne generale de la classe</td>
                            <td>{{$somme / $cpt}}</td>
                        </tr>

                    </tbody>
                </table>
                <h2 class="text-primary">PREMIER DE LA CLASSE</h2>
                <ul>
                    <li>Nom : {{$premier->nom}}</li>
                    <li>Prenom : {{$premier->prenom}}</li>
                    <li>Note : {{$premier->note}}</li>
                    <li>Examen : {{$premier->note}}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
