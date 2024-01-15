@extends('layouts.app')

@section('title', 'Services')
@section('content')
<style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: white;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            background-color: #008CBA;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
        }
    </style>
    <h1>Liste des Emetteurs</h1>
    @if ($errors->any())
        <div>
            <strong>Erreur:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('services.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Nom">Nom du Service</label>
            <input type="text" class="form-control" name="Nom" id="Nom" required>
        </div>
        <div class="form-group">
            <label for="description">Description du Service</label>
            <textarea class="form-control" name="Description" id="Description" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="Nom">Composants</label>
            <input type="text" class="form-control" name="Composants" id="Composants" required>
        </div>
        <div class="form-group">
            <label for="Nom">Prix unitaire HT </label>
            <input type="text" class="form-control" name="PrixUnitaire_HT" id="PrixUnitaire_HT" required>
        </div>
        <div class="form-group">
    <label for="Unite">Unité</label>
    <select class="form-control" name="Unite" id="Unite" required>
        @foreach(['Pièce', 'Heure', 'Forfait'] as $option)
            <option value="{{ $option }}">{{ $option }}</option>
        @endforeach
    </select>
</div>
        <div class="form-group">
            <label for="Nom">Date Création</label>
            <input type="date" class="form-control" name="DateCreation" id="DateCreation" required>
        </div>
        <div class="form-group">
            <label for="Nom">Pack Id</label>
            <input type="text" class="form-control" name="PackId" id="PackId" required>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>

    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom du Service </th>
                <th>Description du Service </th>
                <th>Composants</th>
                <th>Prix unitaire HT </th>
                <th>Unité</th>
                <th>Date Création</th>
                <th>Pack Id</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->Nom }}</td>
                    <td>{{ $service->Description }}</td>
                    <td>{{ $service->Composants }}</td>
                    <td>{{ $service->PrixUnitaire_HT }}</td>
                    <td>{{ $service->Unite }}</td>
                    <td>{{ $service->DateCreation }}</td>
                    <td>{{ $service->PackId }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
   
@endsection
