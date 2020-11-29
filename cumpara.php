<?php
    if(!$_SESSION['tw_id']){
        //nu sunt logat si fac redirect la login
        header("location: http://localhost/TW_Proiect/cont.php");
    }else{
        //sunt logat si pot sa cumpar
        echo "Ok";

    }
?>