<?php 
    include('./models/database.php');
    include('./functions.php');
?>
<html>
<head>
    <title>Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <h1>Liste des posts</h1>
    <table class="table">
        <thead>
            <tr >   
                <th>#</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Actif</th>
                <th>Créer le</th>
                <th>Commentaires</th>
            </tr>
        </thead>
        <tbody>
            <?php
                print_r(getHTMLTable_posts());
            ?>
        </tbody>
</body>
</html>