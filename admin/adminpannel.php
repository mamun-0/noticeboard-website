<?php include '../db/db.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Welcome to Admin Pannel</title>
</head>
<body>
    <nav class="nav-bar">
        <ul>
            <li><button class="btn btn-post">Post</button></li>
            <li><button class="btn btn-update">Update</button></li>
            <li><button class="btn btn-delete">Delete</button></li>
        </ul>
    </nav>
    <div class="container">
        <section class="section-1">
            <div class="card-container">
                <?php
                $query = "SELECT * FROM classschedule;";
                $result = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <div class="card">
                        <ul>
                            <li>Post ID : <?php echo $row['id'];?></li>
                            <li>Subject Code & Name : <?php echo $row['s_code_name'];?></li>
                            <li>Teacher Name : <?php echo $row['t_name'];?></li>
                            <li>Date & Time : <?php echo $row['date_time'];?></li>
                            <li>Link : <?php echo $row['link'];?></li>
                        </ul>
                    </div>
                    <?php
                }
                ?>
        </div>
        </section>
    </div>
    <div class="p-form form hidden">
        <form action="./add_post.php" method="POST">
            <input type="text" name="p-subj-cd-name" placeholder="Subject Code & Name" required="required">
            <input type="text" name="p-t-name" placeholder="Teacher Name" required="required">
            <input type="datetime-local" name="p-date-time" required="required" placeholder="2021-02-18 13:47:04">
            <input type="text" name="p-link" placeholder="Link e.g --" required="required">
            <input type="submit" name="submit" value="Post">
        </form>
    </div>
    <div class="u-form form hidden">
        <form action="./update_post.php" method="POST">
            <input type="text" name="u-subj-cd-name" placeholder="Subject Code & Name" required="required">
            <input type="text" name="u-t-name" placeholder="Teacher Name" required="required">
            <input type="datetime-local" name="u-date-time" required="required">
            <input type="text" name="u-link" placeholder="Link e.g --" required="required">
            <input type="text" name="u-id" placeholder="Post ID" required="required">
            <input type="submit" name="submit" value="Update">
        </form>
    </div>
    <div class="d-form form hidden">
        <form action="./delete_post.php" method="POST">
            <input type="text" name="d-id" placeholder="Post ID" required="required">
            <input type="submit" name="submit" value="Delete">
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>