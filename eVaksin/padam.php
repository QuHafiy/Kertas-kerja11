<?php

    include ('config.php');

//sila lengkapkan kod aturacara

    $id_pelajar = $_GET['id_pelajar'];

    $query = mysqli_query($conn, "DELETE FROM maklumat WHERE id_pelajar=$id_pelajar");


header("Location:index.php");

?>




