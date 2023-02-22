<?php
//connect to mysql database
$db_name = "mysql:host=localhost;port=3306;dbname=phptest";
$username = "root";
$password = "adminadmin";


$conn = new PDO($db_name,$username,$password);

$sql = $conn->query("SELECT * FROM emp");

$result = $sql->fetchAll(PDO::FETCH_NUM);
if(count($result)){
    foreach($result as $row){
        echo "$row[1]";
    }
}else{
    "No Record Found";
}
// echo "<pre>";
// print_r($result);
// echo "</pre>";

// while($row = $sql->fetch(PDO::FETCH_ASSOC)){
    
//     //echo $row['name'];
//     //echo "{ $row[1] }";
//     //echo "{$row->name}";
//     // echo "<pre>";
//     // print_r($row);
//     // echo "</pre>";
// }

?>