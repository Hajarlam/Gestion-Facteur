@extends('layouts.app')

@section('title', 'TenantSociete')
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
    <h1>Liste des Tenants</h1>
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

    <form action="{{ route('tenant_societes.store') }}" method="POST">
        @csrf
        <label for="SocieteEmettrice">Nom Sociéte :</label>
        <input type="text" name="nom_societe" required><br>

        <label for="Nom">Adresse :</label>
        <input type="text" name="adresse_tenant_societe" required><br>

        <label for="Adresse">Email :</label>
        <input type="email" name="email_societe" required><br>

        <label for="Email">Telephone :</label>
        <input type="text" name="telephone_societe" required><br>

        <label for="Telephone">Site :</label>
        <input type="text" name="siteweb_societe" required><br>

        <label for="SiteWeb">ICE :</label>
        <input type="text" name="ice_societe" required><br>

        <label for="ICE">RC :</label>
        <input type="text" name="rc_societe" required><br>

        <label for="RC">LOGO :</label>
        <input type="text" name="logo_societe" required><br>

        <label for="LOGO">IF :</label>
        <input type="text" name="if_societe" required><br>

        <label for="LOGO">CNSS :</label>
        <input type="text" name="cnss_societe" required><br>

       

        <button type="submit">Ajouter</button>
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom Sociéte</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Siteweb</th>
                <th>ICE</th>
                <th>RC</th>
                <th>LOGO</th>
                <th>IF</th>
                <th>CNSS</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tenantSocietes as $tenantSociete)
                <tr>
                    <td>{{ $tenantSociete->id }}</td>
                    <td>{{ $tenantSociete->nom_societe }}</td>
                    <td>{{ $tenantSociete->adresse_tenant_societe }}</td>
                    <td>{{ $tenantSociete->email_societe }}</td>
                    <td>{{ $tenantSociete->telephone_societe }}</td>
                    <td>{{ $tenantSociete->siteweb_societe }}</td>
                    <td>{{ $tenantSociete->ice_societe }}</td>
                    <td>{{ $tenantSociete->rc_societe }}</td>
                    <td>{{ $tenantSociete->logo_societe }}</td>
                    <td>{{ $tenantSociete->if_societe }}</td>
                    <td>{{ $tenantSociete->cnss_societe }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
   
@endsection
