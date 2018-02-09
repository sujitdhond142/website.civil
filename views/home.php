<div>
    <div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="autoplay:true;autoplay-interval:4000;ratio: 30:12;pause-on-hover:true">
        <ul class="uk-slideshow-items">
            <li>
                <img src="assets/images/photo1.jpg" alt="Image Here" uk-cover>
            </li>
            <li>
                <img src="assets/images/photo2.jpg" alt="Image Here" uk-cover>
            </li>
            <li>
                <img src="assets/images/photo3.jpg" alt="Image Here" uk-cover>
            </li>
        </ul>
    
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
    </div>
            
</div>
<div class="my-flex">
    <div class="my-col-60-s">
        <div class=" uk-h3 uk-text-bold text-center uk-padding-small ">
            Welcome to Department of Civil Engineering
        </div>
        <p class="uk-text-left uk-padding-small uk-padding-remove-top">
            The department of Civil Engineering was established from the academic year 2010-11. The Main objective of the department is to impart quality education, training and research at the undergraduate and postgraduate in various areas of Civil Engineering.<br>
            Today the department has setup almost all practical laboratories with modern and major equipments. The students of FE/SE and TE are seeking professional education in the department under the supervision and guidance of faculty.The Department has well experienced and dedicated faculty with a strong commitment to engineering education.<br>
            The major areas of faculty expertise in the department includes Environmental Engineering, Structural Engineering and Geotechnical Engineering
            <a href="about.php">(Read More)</a>
        </p>
    </div>
    <div class="my-col-40-s">
        <div class="mwidget">
            <div class="mwidget-head uk-h3">
                NOTICES
            </div>
            <ul class="mwidget-list" >
                <marquee scrollamount="3" direction="up" onmouseover="this.stop()" onmouseout="this.start()">
                    <?php
                        include_once('includes/dbconnect.php');
                        $pname = "Civil Engineering - Notice Board";
                        $query = mysqli_query($mysqli,"SELECT * FROM pp_files WHERE ppage='$pname'");
                        $i=1;
                        while($row=mysqli_fetch_array($query)){
                            ?>
                                <li><a href="<?php echo "https://gcoej.ac.in/".$row['url'];?>" taget="_blank"><?php echo $row['file_name'];?></a></li>
                        <?php
                            $i++;
                        }
                    ?>

                </marquee>
            </ul>
            <p style="padding-left:30px">
                <a href="notices.php">Show All</a>
            </p>
        </div>
    </div>
</div>
