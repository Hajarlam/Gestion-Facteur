@extends('layouts.app')

@section('title', 'Devis')
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

    <form action="{{ route('devis.store') }}" method="POST">
        @csrf
        <label for="SocieteEmettrice">Tenant Id :</label>
        <input type="text" name="tenant_societe_id" required><br>

        <label for="Nom">Client Id :</label>
        <input type="text" name="client_societe_id" required><br>

        <label for="Adresse">Date Création :</label>
        <input type="date" name="date_creation" required><br>

        <label for="Email">Date Validation :</label>
        <input type="date" name="date_validation" required><br>

        <label for="Statut">Statut :</label>
<select name="status" required>
    <option value="En cours">En cours</option>
    <option value="Accepté">Accepté</option>
    <option value="Refusé">Refusé</option>
</select><br>

        <label for="SiteWeb">Commentaire :</label>
        <input type="text" name="commentaire" required><br>

        <label for="ICE">Devis :</label>
        <input type="text" name="devise" required><br>

        <label for="RC">Référence :</label>
        <input type="text" name="reference_devis" required><br>

        <button type="submit">Ajouter</button>
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tenant Id</th>
                <th>Client Id</th>
                <th>Date Création</th>
                <th>Date Validation</th>
                <th>Statut</th>
                <th>Commentaire</th>
                <th>Devis</th>
                <th>Référence</th>
                
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($devisList as $devi)
    <tr>
        <td>{{ $devi->id }}</td>
        <td>{{ $devi->tenant_societe_id }}</td>
        <td>{{ $devi->client_societe_id }}</td>
        <td>{{ $devi->date_creation }}</td>
        <td>{{ $devi->date_validation }}</td>
        <td>{{ $devi->status }}</td>
        <td>{{ $devi->commentaire }}</td>
        <td>{{ $devi->devise }}</td>
        <td>{{ $devi->reference_devis }}</td>
    </tr>
@endforeach

        </tbody>
    </table>
   
@endsection
