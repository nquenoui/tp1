<?php 

function getHTMLTable_posts(){
    $html = "";
    try{
        $pdo = initDatabse();
        $statement = $pdo->prepare('select * from posts');
        $statement->execute();
        $res = $statement->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $exception) {
        echo($exception->getMessage());
        exit('Erreur de connexion Ã  la base de donnÃ©es');
    }
    foreach($res as $item){
        $html.="<tr>";
        foreach ($item as $truc){
            $html.="<td>";
            $html.=$truc;
            $html.="</td>";
        }
        $html.="<td><a href='./views/comm.php?post_id=".$item["id"]."'>Voir</a></td>";
        $html.="</tr>";
    }
    return $html;
}

//Send Generated HTML Table code for comment
// Params : post_id
function getHTMLTable_comments($id){
    $html = "";
    try{
        $pdo = initDatabse();
        $statement = $pdo->prepare('select * from comments where post_id = :i');
        $statement->bindParam(':i', $id);
        $statement->execute();
        $res = $statement->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $exception) {
        echo($exception->getMessage());
        exit('Erreur de connexion Ã  la base de donnÃ©es');
    }
    foreach($res as $item){
        $html.="<tr>";
        foreach ($item as $key=>$truc){
            if($key != "post_id"){
                $html.="<td>";
                $html.=$truc;
                $html.="</td>";
            }
        }
        $html.="</tr>";
    }
    return $html;
}

?>