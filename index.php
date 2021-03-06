    <!-- Navigation Bar -->

    <!-- End of Navigation Bar -->
    <!-- Menu Bar -->
    <?php include './pages/navbar.php';?>
    <!-- End of Menu Bar -->
    
    <div class="container">
        <!-- Section 1 -->
        <?php include './pages/section_1.php';?>
        <!-- End of section 1 -->
        <!-- Section 2 -->
        <section class="section-2">
            <h2 class="section-2-heading">Class Schedule 2<sup>nd</sup> year</h2>
            <div class="card-wrapper">
                <?php
                $query = "SELECT * FROM classschedule;";
                $result = mysqli_query($connection, $query);
                $checkResult = mysqli_num_rows($result);
                if($checkResult > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        $link_length = strlen($row['link']) > 10;
                        $invalid = '<a href="./index.php">Not Available</a>';
                        $valid = '<a href="'.$row['link'].'" target="_blank" rel="noopener noreferrer">Available</a>';
                        ?>
                        <div class="card">
                        <ul>
                        <li>Subject Code & Name : <?php echo $row['s_code_name']; ?></li>
                        <li>Teacher Name : <?php echo $row['t_name']; ?></li>
                        <li>Date & Time : <?php echo $row['date_time']; ?></li>
                        <li>Link : <?php echo( $link_length ? $valid : $invalid)?></li>
                        </ul>
                        </div>
                        <?php
                    }
                }?>
            </div>
        </section>
        <!-- End of section 2 -->
        <!-- Section 3 -->
        <?php include './pages/sign_up_form.php';?>
        <!-- End of Section 3 -->
        <!-- Section 4 footer -->
            <?php include './pages/footer.php';?>
        <!-- End of section 4 footer -->