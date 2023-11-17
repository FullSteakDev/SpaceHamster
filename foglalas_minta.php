<?php

    $connection = mysqli_connect('localhost','root','yourpasswordhere','foglalas_db');

    if(isset($_POST['send']))
    {
        $név = $_POST['név'];
        $email = $_POST['email'];
        $telefon = $_POST['telefon'];
        $lakcím = $_POST['lakcím'];
        $bolygó = $_POST['bolygó'];
        $utas = $_POST['utas'];
        $oda = $_POST['oda'];
        $vissza = $_POST['vissza'];

        $request = "insert into foglalas_form(név, email, telefon, lakcím, bolygó, utas, oda, vissza)
        values ('$név','$email','$telefon','$lakcím','$bolygó','$utas','$oda','$vissza')";

        mysqli_query($connection, $request);

        header('location:kezdolap.php');
    }else
    {
        echo 'valami hiba történt, kérlek próbáld újra';
    }
?>