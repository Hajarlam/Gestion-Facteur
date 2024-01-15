@extends('layouts.app')

@section('title', 'Emmeteur')
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

    <form action="{{ route('emetteurs.store') }}" method="POST">
        @csrf
        <label for="SocieteEmettrice">SocieteEmettrice:</label>
        <input type="text" name="SocieteEmettrice" required><br>

        <label for="Nom">Nom:</label>
        <input type="text" name="Nom" required><br>

        <label for="Adresse">Adresse:</label>
        <input type="text" name="Adresse" required><br>

        <label for="Email">Email:</label>
        <input type="email" name="Email" required><br>

        <label for="Telephone">Telephone:</label>
        <input type="text" name="Telephone" required><br>

        <label for="SiteWeb">SiteWeb:</label>
        <input type="text" name="SiteWeb" required><br>

        <label for="ICE">ICE:</label>
        <input type="text" name="ICE" required><br>

        <label for="RC">RC:</label>
        <input type="text" name="RC" required><br>

        <label for="LOGO">LOGO:</label>
        <input type="text" name="LOGO" required><br>

        <button type="submit">Ajouter</button>
    </form>
    <a href="{{ route('generate.pdf') }}" target="_blank">Generate PDF</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>SocieteEmettrice</th>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>SiteWeb</th>
                <th>ICE</th>
                <th>RC</th>
                <th>LOGO</th>
            </tr>
        </thead>
        <tbody>
            @foreach($emetteurs as $emetteur)
                <tr>
                    <td>{{ $emetteur->id }}</td>
                    <td>{{ $emetteur->SocieteEmettrice }}</td>
                    <td>{{ $emetteur->Nom }}</td>
                    <td>{{ $emetteur->Adresse }}</td>
                    <td>{{ $emetteur->Email }}</td>
                    <td>{{ $emetteur->Telephone }}</td>
                    <td>{{ $emetteur->SiteWeb }}</td>
                    <td>{{ $emetteur->ICE }}</td>
                    <td>{{ $emetteur->RC }}</td>
                    <td>{{ $emetteur->LOGO }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
   
@endsection
