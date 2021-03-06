<?php

    include '../db/db.php';
    
    $subject_code_name = mysqli_real_escape_string($connection, $_POST['p-subj-cd-name']);
    $teacher_name = mysqli_real_escape_string($connection, $_POST['p-t-name']);
    $date_time = mysqli_real_escape_string($connection, $_POST['p-date-time']);
    $link = mysqli_real_escape_string($connection, $_POST['p-link']);

    $query = "INSERT INTO classschedule (s_code_name, t_name, date_time, link) VALUES (?, ?, ?, ?);";

    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt, $query)){
        echo "<h2>SQL Error!</h2>";
    }else{
        mysqli_stmt_bind_param($stmt, "ssss", $subject_code_name, $teacher_name, $date_time, $link);
        mysqli_stmt_execute($stmt);
    }
    header("Location: adminpannel.php");
    ?>