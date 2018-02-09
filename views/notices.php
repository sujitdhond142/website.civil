<div class="uk-h3 uk-text-center">
            NOTICES AND DOWNLOADS
        </div>
        <table class="uk-table uk-table-striped table-width">
            <thead>
                <tr>
                    <td>Sr.No.</td>
                    <td>Title</td>
                    <td>Download</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once('includes/dbconnect.php');
                    $pname = "Civil Engineering - Notice Board";
                    $query = mysqli_query($mysqli,"SELECT * FROM pp_files WHERE ppage='$pname'");
                    $i=1;
                    while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $row['file_name'];?></td>
                            <td><a href="<?php echo "https://gcoej.ac.in/".$row['url'];?>" taget="_blank">Download</a></td>
                        </tr>
                    <?php
                        $i++;
                    }
                ?>
            </tbody>
        </table>