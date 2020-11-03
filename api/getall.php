<?php
require('../config.php');

$methot = strtolower($_SERVER['REQUEST_METHOD']);

if($methot === 'get'){
 $sql = $pdo->query("SELECT * FROM notes");
 if($sql->rowCount() > 0){
     $data = $sql->fetchAll(PDO::FETCH_ASSOC);

     foreach($data as $item) {
         $array['result'][] = [
            'id' => $item ['id'],
            'title' => $item ['title']

         ];
     }
 }

} else {
    $array['error'] = 'METODO PERMITIDO APENAS GET';
}
 require('../return.php');
