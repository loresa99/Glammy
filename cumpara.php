<?php
    include "db.connection.php";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!$_SESSION['tw_id']){
        //nu sunt logat si fac redirect la login
        header("location: http://localhost/TW_Proiect/cont.php");
    }else{
        //sunt logat si pot sa cumpar
        $content = file_get_contents("php://input");
        $data = json_decode($content, true);
        $titlu = $data['titlu'];
        $pret = intval($data['pret']);
        $descriere = $data['descriere'];
        $user_id = $_SESSION['tw_id'];
        $sql = "INSERT INTO Glammy.Cos (user_id, name, pret, descriere) VALUES($user_id,'$titlu',$pret,'$descriere')";
        $connection = mysqli_connect($db_hostname, $db_username, $db_password);
        $retval = mysqli_query($connection,$sql);
        if(!$retval){
            echo "Err".mysqli_error($connection);
        }else{
            echo "Produs adaugat cu succes";
        }
    }
    }   
?>