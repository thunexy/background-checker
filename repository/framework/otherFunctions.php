<?php
function req($name){
    return $_REQUEST[$name];
}
function splitString($string){
    return explode(', ', $string);
}
function redirect($url){
        echo "<script> location.replace('$url'+ '.php'); </script>";
}
function addQuotes($string){
    return "'". $string ."'";
}
function alert($string){
    echo "<script> alert('$string'); </script>";
}

// function select($table, $whatToSelect, $condition){
//         global $conn;
//         try{
//             $sql = "SELECT ". $whatToSelect ." FROM ". $table ." ". $condition;
//             $select_query = $conn->query($sql) or die ('No table found');
//             $row = $select_query->fetch(PDO::FETCH_ASSOC);
//             return $row;
//         }
//         catch(PDOException $e){
//             echo $e->getMessage();
//         }
//     }
   

  

//  $array = select('kdjfks', 'kdflka', 'kdfksa');
//  loop($array, 'name');

?>