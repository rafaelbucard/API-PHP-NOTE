<?php
require('../config.php');

$methot = strtolower($_SERVER['REQUEST_METHOD']);

if($methot === 'post'){

    $title = filter_input(INPUT_POST,'title');
    $body = filter_input(INPUT_POST,'body');
    if ($title && $body) {
        $sql = $pdo->prepare("INSERT INTO notes (title, body) VALUES(:title, :body )");
        $sql->bindValue(':title',$title);
        $sql->bindValue(':body',$body);
        $sql->execute();
        $id = $pdo->lastInsertId();
        $array['result'][] = [
            'id' => $id,
            'title' => $title,
            'body' => $body
        ];

    } else {
        $array['error'] = 'Falata Algum Atributo';
    }
 

} else {
    $array['error'] = 'METODO PERMITIDO APENAS POST';
}
 require('../return.php');
