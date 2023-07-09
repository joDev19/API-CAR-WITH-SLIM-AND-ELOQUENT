<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1 class="text-center text-info">Listes des categories</h1>
        <div class="row">
            <ul class="list-group">

            {% for categorie in categories %}
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{categorie.nom}}
                <span class="badge badge-primary badge-pill">14</span>
                </li>
            {% endfor %}

            <?php foreach($categories as $categorie){ ?>

            <?php } ?>

            </ul>
        </div>

    </div>

</body>
</html>