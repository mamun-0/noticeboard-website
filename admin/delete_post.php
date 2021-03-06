<?php
    include '../db/db.php';

    $delete_id = intval(mysqli_real_escape_string($connection, $_POST['d-id']));
    $query = "DELETE FROM classschedule WHERE classschedule.id = ?";
    mysqli_query($connection, $query);
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt, $query)){
    }else{
        mysqli_stmt_bind_param($stmt, "i", $delete_id);
        mysqli_stmt_execute($stmt);
    }
    header("Location: ./adminpannel.php");
    ?>