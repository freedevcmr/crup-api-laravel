<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6 m-auto">
                <h2 >Introduction :</h2>
<p>Nom de l&#39;API : API Gestion de Produits
Description : Cette API permet la gestion des produits, y compris la création, la mise à jour, la suppression, l&#39;affichage et le listing des produits.</p>
<p>-Endpoints :</p>
<table class="table">
    <thead>
        <tr>
            <th>path</th>
            <th>verb</th>
        </tr>
    </thead>
<tbody>
    <tr>
        <td><a href="{{config('app.url').'/api/produits'}}">/api/produits</a></td>
        <td>GET : Récupérer la liste de tous les produits.</td>
    </tr>
    <tr>
        <td>/api/produits/</td>
        <td>POST : Créer un nouveau produit.</td>
    </tr>
    <tr>
        <td>api/produits/{id}</td>
        <td>GET : Récupérer un produit spécifique.</td>
    </tr>
    <tr>
        <td>api/produits/{id}</td>
        <td>PUT : Mettre à jour un produit spécifique..</td>
    </tr>
    <tr>
        <td>api/produits/{id}</td>
        <td>DELETE : Supprimer un produit spécifique.</td>
    </tr>
</tbody>
</table>
        </div>
    </div>
</div>

</body>
</html>