<?php 
    if((!isset($_GET["post_id"])) || empty($_GET["post_id"])){
        header('Location: ./index.php');
        exit();
    }
    $post_id = $_GET["post_id"];

    include('../models/database.php');
    include('../models/functions.php');
?>
<html>
<head>
    <title>Comms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <h1>Liste des commentaires</h1>
    <table class="table">
        <thead>
            <tr >   
                <th>#</th>
                <th>Description</th>
                <th>Crée le</th>
            </tr>
        </thead>
        <tbody>
            <?php
                print_r(getHTMLTable_comments($post_id));
            ?>
        </tbody>
</body>
</html>