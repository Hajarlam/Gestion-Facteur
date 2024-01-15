<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: 14px;
            margin: 0;
            padding: 0;
        }

        .invoice-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            /* background-color: #f0f0f0;Replace with actual color */
        }

        .logo {
            font-weight: bold;
            font-size: 24px;
        }

        .company-info,
        .client-info,
        .invoice-info {
            text-align: right;
        }

        .company-info {
            position: relative;
            top: -30px;
            right: 100px;
        }
        .client-info{
            position: relative;
            top: 20px;
        }
        .client-info p{
            text-align:left;
            position: relative;
            top: 30px;
        }

        .company-infos {
            text-align: left;
            position: absolute;
            top: 70px;
        }

        .invoice-infox {
            text-align: left;
            position: absolute;
            top: 140px;
        }

        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            /* ou ajustez selon votre préférence */
        }

        .table-info {
            width: 100%;
            /* Vous pouvez ajuster cette valeur en fonction de la largeur souhaitée */
            border-collapse: collapse;
        }

        .table-info th {
            background-color: #8cedea;
            /* Replace with actual color */
            color: black;
            padding: 10px;
            text-align: left;
        }

        .article {
            width: 100%;
            border-collapse: collapse;
        }

        .article th,
        .article td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .article th {
            color: black;
        }

        .article td.article-cell {

            background-color: #c7c7c7;
        }
        .article {
            width: 100%;
            border-collapse: collapse;
        }

        .article th,
        .article td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .article th {
            color: black;
        }

        .article td.article-cell {
    background-color: #c7c7c7;
    border-bottom: 1px solid #ddd; /* Ajout d'une bordure en bas pour compléter le style */
}


        .invoice-table th,
        .invoice-table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .invoice-table td.article-cell {
            background-color: #c7c7c7;
        }

        .invoice-footer {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .payment-info {
            text-align: left;
            margin-top: 30px;
            /* ou ajustez selon votre préférence */
        }

        .total-info {
            text-align: right;
            margin-bottom: 30px;
        }

        h3 {
            margin-bottom: 0;
            /* Supprime la marge en bas du titre h3 */
        }

        p {
            border: 1px none#000;
            /* Bordure noire de 1 pixel autour du paragraphe */
            padding: 10px;
            /* Ajoute un espace intérieur de 10 pixels à la boîte */
            display: inline-block;
            /* Assure que la boîte s'ajuste à son contenu */
            background: #B6D0E2;
        }

        .payment-mode {
            background-color: #c7c7c7;
            /* Remplacez par la couleur que vous souhaitez */
            padding: 10px;
            /* Ajoute un espace intérieur */
            display: inline-block;
            /* margin-bottom: 10px;  ou ajustez selon votre préférence */
        }

        .payment-mod {
            text-align: right;
            position: absolute;
            right: 10px;
            margin-top: 40px;
            /* Ajustez selon votre préférence pour l'espace au-dessus */
        }

        .total-label {
          
    padding: 10px;
    background-color: #c7c7c7;
    right: 40px;
    top: -60px;
    position: relative;
    width: 100%;

}


.total-span-group {
    text-align:left;
    border-bottom: 1px solid #8cedea;
    padding: 5px;
    background-color: #8cedea;
    right: 40px;
    top: -45px;
    position: relative;
    display: inline-block;
}

    </style>
    <title>Invoice</title>
</head>

<body>
    <header class="invoice-header">
        <div class="logo">{{ $emetteur->LOGO }} </div>
        <div class="company-infos">
<span>
   
<span>
N° Téléphone : {{ $emetteur->Telephone }} <br>
        Adresse : {{ $emetteur->Adresse }} <br>
        Email : {{ $emetteur->Email }} <br>
        Site Web : {{ $emetteur->SiteWeb }} 
          
</span>
        </div>
        <div class="company-info">
            <span>ICE :{{ $emetteur->ICE }} <br> RC: {{ $emetteur->RC }}</span>
        </div>
        <div class="client-info">
            <span>{{ $user->nom }} {{ $user->prenom }}<br>
                <p>Nom de Société:{{ $emetteur->Nom }}<br>Adresse:{{ $emetteur->Adresse }}<br>Téléphone: {{ $emetteur->Telephone }}<br>Email: {{ $emetteur->Email }}<br>ICE: {{ $emetteur->ICE }}</p>
            </span>
        </div>
        <div class="invoice-infox">
            <p>Devis: {{ $devis->devise }}<br>Référence : {{ $devis->reference_devis }}<br>Date : {{ $devis->date_creation }}</p>
        </div>
    </header>

    <table class="table-info">
        <!-- Table Head -->
        <thead>
            <tr>
                <th>Désignation </th>
                <th>Prix Unitaire</th>
                <th>Quantité</th>
                <th>Montant (HT/DHS)</th>
            </tr>
        </thead>
    </table><br>
    <table class="invoice-table">
        <!-- Table Body -->
        <tbody>
        <tr>
                <td class="article-cell">Article</td>
                <!-- Add other columns as needed -->
            </tr>
    
    <table class="article">
        <tr>
            <th>{{ $article->Nom }} </th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th>{{ $article->PrixUnitaire_HT }}</th>
            <th></th>
            <td>{{ $article->Quantite }}</td>
            <th></th>
            <th></th>
            <td>{{ $article->PrixUnitaire_HT * $article->Quantite }}</td>
        </tr>
        <tr>
            <th>- </th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th>-</th>
            <th></th>
            <th>-</th>
            <th></th>
            <th></th>
            <th>-</th>
        </tr>
        <tr>
            <th>-</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th>-</th>
            <th></th>
            <th>-</th>
            <th></th>
            <th></th>
            <th>-</th>
        </tr>
    </table>
  
 </table>
 <table class="invoice-table">
    <!-- Table Body -->
    <tbody>
    <tr>
            <td class="article-cell">Service</td>
            <!-- Add other columns as needed -->
        </tr>

<table class="article">
<tr>
            <th>{{ $service->Nom }} </th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th>{{ $service->PrixUnitaire_HT }}</th>
            <th></th>
            <td>{{ $article->Quantite }}</td>
            <th></th>
            <th></th>
            <td>{{ $service->PrixUnitaire_HT * $article->Quantite }}</td>
        </tr>
    <tr>
        <th>- </th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th>-</th>
        <th></th>
        <th>-</th>
        <th></th>
        <th></th>
        <th>-</th>
    </tr>
    <tr>
        <th>-</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th>-</th>
        <th></th>
        <th>-</th>
        <th></th>
        <th></th>
        <th>-</th>
    </tr>
    <tr>
        <th>- </th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th>-</th>
        <th></th>
        <th>-</th>
        <th></th>
        <th></th>
        <th>-</th>
    </tr>
    <tr>
        <th>-</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th>-</th>
        <th></th>
        <th>-</th>
        <th></th>
        <th></th>
        <th>-</th>
    </tr>
    <tr>
        <th>-</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th>-</th>
        <th></th>
        <th>-</th>
        <th></th>
        <th></th>
        <th>-</th>
    </tr>
   
</table>

</table>

    <footer class="invoice-footer">
        <div class="payment-info">
            <span>Remise<br>Notes (inputs) <br>*<br>**<br>*****<br></span>
        </div>
        <br>

        <div class="payment-mode">
            <span>Mode de paiement</span><br>
            <span></span><br>
            <span></span><br>
        </div>
        <div class="payment-mod">
            <span class="total-label">Montant Total</span><br>
            <span class="total-span-group">
                <span>Total HT  -- (M1 + M2.....Mn)</span><br>
                <span>TVA (20%)  -- 20x TotalHT /100</span><br>
                <span>Total TTC   -- Total HT + TVA </span><br>
            </span>
        </div>
    </footer>
</body>

</html>
