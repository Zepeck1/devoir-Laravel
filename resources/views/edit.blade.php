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
    <h1>Modifier un Produit</h1>

    <form method="POST" action="{{ route('produits.update', $produit -> id) }}">
        @csrf
        @method('put')
        <input type="text" value ="{{ $produit -> nom }}" name="nom">
        <input type="number" value="{{ $produit -> prix }}" name="prix">
        <input type="submit" value="Modifier">
    </form>

</body>
</html>