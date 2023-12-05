<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background-color: #f0f0f0;
            /* Autres styles pour votre contenu si nécessaire */
        }
    </style>
</head>
<body>
    <h1>VEUILLEZ AJOUTER UN PRODUIT</h1>

    <form method="POST" action="{{ route('produits.store') }}">
        @csrf
        <input type="text" name="nom">
        <input type="number" name="prix">
        <input type="submit" value="Ajouter" class="btn btn-primary">
    </form>
</body>
</html>