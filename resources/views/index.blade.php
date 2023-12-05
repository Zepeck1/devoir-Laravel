<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body {
            background-color: #f0f0f0;
            /* Autres styles pour votre contenu si nécessaire */
        }
    </style>
</head>
<body>

    <a href="{{ route('produits.create') }}" class="btn btn-primary">Ajouter</a>
    <table class="table">
        <tr>
            <th>Nom</th>
            <th>prix</th>
        </tr>
@foreach($produits as $value)
<tr>
    <td>{{ $value -> nom }}</td>
    <td>{{ $value -> prix }}</td>
    <td>
        <form action="{{ route('produits.destroy', $value -> id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input class="btn btn-danger" type="submit" value="Supprimer">
        </form>
    </td>
    <td><a href="{{ route('produits.edit', $value -> id) }}" class="btn btn-warning">Modifier</a></td>
    <td><a  class="btn btn-info">Détails</a></td>
</tr>
@endforeach
       
    </table>
</body>
</html>