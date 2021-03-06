<?php
    include '../db/db.php';
    $subject_code_name = mysqli_real_escape_string($connection, $_POST['u-subj-cd-name']);
    $teacher_name = mysqli_real_escape_string($connection, $_POST['u-t-name']);
    $date_time = mysqli_real_escape_string($connection, $_POST['u-date-time']);
    $link = mysqli_real_escape_string($connection, $_POST['u-link']);
    $id = intval( mysqli_real_escape_string($connection, $_POST['u-id']));

    // $query = "UPDATE classschedule SET s_code_name = $subject_code_name, t_name = $teacher_name, date_time = $date_time, link = $link WHERE classschedule.id = $id";
    $query = "UPDATE classschedule SET s_code_name = ?, t_name = ?, date_time = ?, link = ? WHERE id = ?";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt, $query)){

    }else{
        mysqli_stmt_bind_param($stmt, "ssssi", $subject_code_name, $teacher_name, $date_time, $link, $id);
        mysqli_stmt_execute($stmt);
    }
    mysqli_query($connection, $query);
    header("Location : ./adminpannel.php");
    ?>